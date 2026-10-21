/**
 * ZIRE ALCYONE - 3D LIQUID WAVE (DARK BLUE & GOLD)
 * High-performance WebGL 3D dynamic fluid ribbon using Three.js
 * Modeled after premium agency liquid glass aesthetics (Dreambox style)
 * with deep translucent midnight blue, glowing iridescent cyan-gold rims, and glossy specular reflections.
 */

(function () {
  'use strict';

  if (typeof THREE === 'undefined') {
    console.warn('Three.js is not loaded.');
    return;
  }

  const container = document.getElementById('heroWaveContainer');
  if (!container) return;

  // 1. Scene & Camera Setup
  const scene = new THREE.Scene();

  const camera = new THREE.PerspectiveCamera(
    42,
    container.clientWidth / container.clientHeight,
    0.1,
    1000
  );
  camera.position.set(0, -0.2, 14);

  const renderer = new THREE.WebGLRenderer({
    alpha: true,
    antialias: true,
    powerPreference: 'high-performance'
  });
  renderer.setSize(container.clientWidth, container.clientHeight);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.toneMapping = THREE.ACESFilmicToneMapping;
  renderer.toneMappingExposure = 1.35;
  container.appendChild(renderer.domElement);

  // 2. Primary Liquid Glass Ribbon Shader (Translucent Glass + Gold Sheen)
  const primaryWaveShader = {
    uniforms: {
      uTime: { value: 0 },
      uMouse: { value: new THREE.Vector2(0, 0) },
      uColorDeepNavy: { value: new THREE.Color('#030b20') },
      uColorRoyalBlue: { value: new THREE.Color('#0b358e') },
      uColorElectricCyan: { value: new THREE.Color('#00c8ff') },
      uColorPureGold: { value: new THREE.Color('#d4af37') },
      uColorBrightGold: { value: new THREE.Color('#fff0a3') },
      uColorAmberGlow: { value: new THREE.Color('#ff9900') }
    },
    vertexShader: `
      uniform float uTime;
      uniform vec2 uMouse;
      varying vec2 vUv;
      varying vec3 vNormal;
      varying vec3 vViewPosition;
      varying float vDistortion;

      void main() {
        vUv = uv;
        vec3 pos = position;

        // Elegant flowing S-curve wave dynamics across horizontal axis
        float wave1 = sin(pos.x * 0.38 + uTime * 0.95) * 1.45;
        float wave2 = cos(pos.x * 0.65 - uTime * 0.7 + pos.y * 0.6) * 0.85;
        float wave3 = sin(pos.y * 1.4 + pos.x * 0.25 + uTime * 1.2) * 0.45;

        // Subtle interactive mouse ripple
        float mouseDist = length(pos.xy - vec3(uMouse.x * 7.0, uMouse.y * 3.5, 0.0).xy);
        float mouseWave = sin(mouseDist * 1.4 - uTime * 2.0) * exp(-mouseDist * 0.3) * 0.35;

        pos.z += wave1 + wave2 + wave3 + mouseWave;
        pos.y += sin(pos.x * 0.22 + uTime * 0.75) * 0.9;

        vDistortion = pos.z;

        vec4 mvPosition = modelViewMatrix * vec4(pos, 1.0);
        gl_Position = projectionMatrix * mvPosition;

        vNormal = normalize(normalMatrix * normal);
        vViewPosition = -mvPosition.xyz;
      }
    `,
    fragmentShader: `
      uniform float uTime;
      uniform vec3 uColorDeepNavy;
      uniform vec3 uColorRoyalBlue;
      uniform vec3 uColorElectricCyan;
      uniform vec3 uColorPureGold;
      uniform vec3 uColorBrightGold;
      uniform vec3 uColorAmberGlow;

      varying vec2 vUv;
      varying vec3 vNormal;
      varying vec3 vViewPosition;
      varying float vDistortion;

      void main() {
        vec3 normal = normalize(vNormal);
        vec3 viewDir = normalize(vViewPosition);

        // Sharp Fresnel Rim Effect (Iridescent Glass Edge)
        float NdotV = abs(dot(normal, viewDir));
        float fresnel = pow(1.0 - NdotV, 2.8);
        float edgeContour = pow(1.0 - NdotV, 6.0); // Ultra-bright razor edge highlight

        // Color transition along length of the ribbon
        // Left side: Translucent Sapphire & Cyan Glass -> Right side: Radiant Liquid Gold & Amber
        float colorSplit = smoothstep(-0.25, 0.95, vUv.x + sin(uTime * 0.4 + vUv.y * 3.0) * 0.12);

        // Blue palette (left)
        vec3 blueBase = mix(uColorDeepNavy, uColorRoyalBlue, vUv.x * 0.9);
        vec3 blueGlow = mix(blueBase, uColorElectricCyan, fresnel * 1.2);

        // Gold palette (right)
        vec3 goldBase = mix(uColorAmberGlow, uColorPureGold, vUv.y);
        vec3 goldGlow = mix(goldBase, uColorBrightGold, fresnel);

        // Blend the two flows seamlessly
        vec3 surfaceColor = mix(blueGlow, goldGlow, colorSplit);

        // Specular reflections for liquid glass glossiness
        vec3 lightTop = normalize(vec3(0.4, 0.85, 0.9));
        vec3 halfTop = normalize(lightTop + viewDir);
        float specTop = pow(max(dot(normal, halfTop), 0.0), 45.0);

        vec3 lightBottom = normalize(vec3(-0.6, -0.7, 0.6));
        vec3 halfBottom = normalize(lightBottom + viewDir);
        float specBottom = pow(max(dot(normal, halfBottom), 0.0), 30.0);

        // Add specular gleams
        surfaceColor += uColorBrightGold * specTop * 1.6;
        surfaceColor += uColorElectricCyan * specBottom * 0.9;
        surfaceColor += uColorBrightGold * edgeContour * 2.2; // Glowing edge wire

        // Translucent liquid opacity (allows dark blue background to show through center)
        float edgeFade = smoothstep(0.0, 0.08, vUv.y) * smoothstep(1.0, 0.92, vUv.y);
        float alpha = (0.28 + fresnel * 0.58 + specTop * 0.35) * edgeFade;
        alpha = clamp(alpha, 0.0, 0.92);

        gl_FragColor = vec4(surfaceColor, alpha);
      }
    `,
    transparent: true,
    side: THREE.DoubleSide,
    depthWrite: false,
    blending: THREE.NormalBlending
  };

  // 3. Create Primary Ribbon Mesh
  const primaryGeo = new THREE.PlaneGeometry(30, 5.2, 220, 60);
  const primaryMat = new THREE.ShaderMaterial(primaryWaveShader);
  const primaryMesh = new THREE.Mesh(primaryGeo, primaryMat);
  primaryMesh.rotation.x = -0.38;
  primaryMesh.rotation.y = 0.05;
  primaryMesh.rotation.z = -0.09;
  primaryMesh.position.set(0, -0.6, -1.0);
  scene.add(primaryMesh);

  // 4. Secondary Golden Filament Stream (Intricate Glowing Edge Line)
  const filamentShader = {
    uniforms: {
      uTime: { value: 0 },
      uColorPureGold: { value: new THREE.Color('#d4af37') },
      uColorBrightGold: { value: new THREE.Color('#fff4bd') }
    },
    vertexShader: `
      uniform float uTime;
      varying vec2 vUv;
      varying vec3 vNormal;
      varying vec3 vViewPosition;

      void main() {
        vUv = uv;
        vec3 pos = position;

        // Weaves in and out of the primary wave
        float w1 = sin(pos.x * 0.48 + uTime * 1.15 + 1.8) * 1.5;
        float w2 = cos(pos.x * 0.78 - uTime * 0.85) * 0.8;

        pos.z += w1 + w2;
        pos.y += cos(pos.x * 0.28 + uTime * 0.9) * 0.85;

        vec4 mvPosition = modelViewMatrix * vec4(pos, 1.0);
        gl_Position = projectionMatrix * mvPosition;

        vNormal = normalize(normalMatrix * normal);
        vViewPosition = -mvPosition.xyz;
      }
    `,
    fragmentShader: `
      uniform vec3 uColorPureGold;
      uniform vec3 uColorBrightGold;
      varying vec2 vUv;
      varying vec3 vNormal;
      varying vec3 vViewPosition;

      void main() {
        vec3 normal = normalize(vNormal);
        vec3 viewDir = normalize(vViewPosition);
        float fresnel = pow(1.0 - abs(dot(normal, viewDir)), 3.5);

        vec3 light = normalize(vec3(0.5, 0.9, 0.8));
        float spec = pow(max(dot(normal, normalize(light + viewDir)), 0.0), 38.0);

        vec3 col = mix(uColorPureGold, uColorBrightGold, fresnel + spec);

        float edgeFade = smoothstep(0.0, 0.2, vUv.y) * smoothstep(1.0, 0.8, vUv.y);
        float alpha = (0.4 + fresnel * 0.5 + spec * 0.6) * edgeFade;

        gl_FragColor = vec4(col, alpha);
      }
    `,
    transparent: true,
    side: THREE.DoubleSide,
    depthWrite: false,
    blending: THREE.AdditiveBlending
  };

  const filamentGeo = new THREE.PlaneGeometry(28, 1.4, 160, 20);
  const filamentMat = new THREE.ShaderMaterial(filamentShader);
  const filamentMesh = new THREE.Mesh(filamentGeo, filamentMat);
  filamentMesh.rotation.x = -0.32;
  filamentMesh.rotation.z = -0.07;
  filamentMesh.position.set(0, -0.4, -0.5);
  scene.add(filamentMesh);

  // 5. Floating Glowing Gold Sparks & Embers
  const particleCount = 60;
  const particleGeo = new THREE.BufferGeometry();
  const particlePositions = new Float32Array(particleCount * 3);

  for (let i = 0; i < particleCount; i++) {
    particlePositions[i * 3] = (Math.random() - 0.5) * 28;
    particlePositions[i * 3 + 1] = (Math.random() - 0.5) * 8 - 0.5;
    particlePositions[i * 3 + 2] = (Math.random() - 0.5) * 6;
  }
  particleGeo.setAttribute('position', new THREE.BufferAttribute(particlePositions, 3));

  // Particle Canvas Texture
  const pCanvas = document.createElement('canvas');
  pCanvas.width = 64;
  pCanvas.height = 64;
  const pCtx = pCanvas.getContext('2d');
  const pGrad = pCtx.createRadialGradient(32, 32, 0, 32, 32, 30);
  pGrad.addColorStop(0, 'rgba(255, 245, 200, 1)');
  pGrad.addColorStop(0.35, 'rgba(212, 175, 55, 0.7)');
  pGrad.addColorStop(1, 'rgba(212, 175, 55, 0)');
  pCtx.fillStyle = pGrad;
  pCtx.fillRect(0, 0, 64, 64);

  const pTexture = new THREE.CanvasTexture(pCanvas);
  const pMat = new THREE.PointsMaterial({
    size: 0.32,
    map: pTexture,
    transparent: true,
    blending: THREE.AdditiveBlending,
    depthWrite: false,
    opacity: 0.7
  });

  const particleSystem = new THREE.Points(particleGeo, pMat);
  scene.add(particleSystem);

  // 6. Interactive Mouse Movement
  const mouse = { x: 0, y: 0, targetX: 0, targetY: 0 };

  window.addEventListener('mousemove', (e) => {
    const rect = container.getBoundingClientRect();
    if (e.clientY <= rect.bottom && e.clientY >= rect.top) {
      mouse.targetX = ((e.clientX - rect.left) / rect.width) * 2 - 1;
      mouse.targetY = -(((e.clientY - rect.top) / rect.height) * 2 - 1);
    }
  });

  // 7. Responsive Resizing
  function onResize() {
    if (!container) return;
    const width = container.clientWidth;
    const height = container.clientHeight;
    camera.aspect = width / height;
    camera.updateProjectionMatrix();
    renderer.setSize(width, height);
  }

  window.addEventListener('resize', onResize);

  // 8. Visibility Optimization
  let isVisible = true;
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        isVisible = entry.isIntersecting;
      });
    }, { threshold: 0.1 });
    observer.observe(container);
  }

  const clock = new THREE.Clock();

  function animate() {
    requestAnimationFrame(animate);
    if (!isVisible) return;

    const t = clock.getElapsedTime();

    mouse.x += (mouse.targetX - mouse.x) * 0.045;
    mouse.y += (mouse.targetY - mouse.y) * 0.045;

    primaryMat.uniforms.uTime.value = t;
    primaryMat.uniforms.uMouse.value.set(mouse.x, mouse.y);
    filamentMat.uniforms.uTime.value = t;

    // Gentle camera sway
    camera.position.x = mouse.x * 0.6;
    camera.position.y = -0.2 + mouse.y * 0.4;
    camera.lookAt(0, -0.4, 0);

    // Drift particles
    const positions = particleGeo.attributes.position.array;
    for (let i = 0; i < particleCount; i++) {
      positions[i * 3 + 1] += Math.sin(t * 0.6 + i) * 0.003;
      positions[i * 3] += Math.cos(t * 0.4 + i) * 0.002;
    }
    particleGeo.attributes.position.needsUpdate = true;

    renderer.render(scene, camera);
  }

  animate();
})();
