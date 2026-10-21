/**
 * ZIRE ALCYONE - MAIN JAVASCRIPT
 * Interactive controls: Sticky Header, Mobile Drawer, Portfolio Filter, Case Study Modal, Copy Buttons
 */

document.addEventListener('DOMContentLoaded', () => {
  // --- 1. STICKY HEADER SCROLL EFFECT ---
  const header = document.querySelector('.site-header');
  const backToTopBtn = document.getElementById('backToTopBtn');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }

    if (window.scrollY > 400) {
      backToTopBtn?.classList.add('visible');
    } else {
      backToTopBtn?.classList.remove('visible');
    }
  });

  backToTopBtn?.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // --- 2. MOBILE MENU DRAWER ---
  const mobileToggle = document.getElementById('mobileToggle');
  const mobileDrawer = document.getElementById('mobileDrawer');
  const mobileOverlay = document.getElementById('mobileOverlay');

  function openMobileMenu() {
    mobileToggle?.classList.add('active');
    mobileDrawer?.classList.add('open');
    mobileOverlay?.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeMobileMenu() {
    mobileToggle?.classList.remove('active');
    mobileDrawer?.classList.remove('open');
    mobileOverlay?.classList.remove('active');
    document.body.style.overflow = '';
  }

  mobileToggle?.addEventListener('click', () => {
    if (mobileDrawer?.classList.contains('open')) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  });

  mobileOverlay?.addEventListener('click', closeMobileMenu);

  // Close on drawer link click
  document.querySelectorAll('.mobile-nav-link').forEach(link => {
    link.addEventListener('click', closeMobileMenu);
  });

  // --- 3. PORTFOLIO FILTERING ---
  const filterButtons = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');
  const emptyState = document.getElementById('portfolioEmptyState');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      // Set active button
      filterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filterValue = btn.getAttribute('data-filter');
      let visibleCount = 0;

      projectCards.forEach(card => {
        const categories = card.getAttribute('data-categories') || '';
        const categoryList = categories.split(' ').map(c => c.trim());

        if (filterValue === 'all' || categoryList.includes(filterValue)) {
          card.style.display = 'flex';
          card.style.opacity = '0';
          setTimeout(() => {
            card.style.opacity = '1';
            card.style.transition = 'opacity 0.4s ease';
          }, 20);
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });

      if (emptyState) {
        if (visibleCount === 0) {
          emptyState.style.display = 'block';
        } else {
          emptyState.style.display = 'none';
        }
      }
    });
  });

  // --- 4. CASE STUDY MODAL ---
  const modalBackdrop = document.getElementById('caseStudyModal');
  const modalCloseBtn = document.getElementById('modalCloseBtn');

  // Trigger buttons
  document.querySelectorAll('.open-case-study').forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      const projectId = trigger.getAttribute('data-project-id');
      if (projectId && window.PORTFOLIO_DATA && window.PORTFOLIO_DATA[projectId]) {
        populateAndOpenModal(window.PORTFOLIO_DATA[projectId]);
      }
    });
  });

  function populateAndOpenModal(project) {
    if (!modalBackdrop) return;

    // Elements inside modal
    const modalImg = document.getElementById('modalImg');
    const modalCategory = document.getElementById('modalCategory');
    const modalPeriod = document.getElementById('modalPeriod');
    const modalTitle = document.getElementById('modalTitle');
    const modalSubtitle = document.getElementById('modalSubtitle');
    const modalDesc = document.getElementById('modalDesc');
    const modalScope = document.getElementById('modalScope');
    const modalMetrics = document.getElementById('modalMetrics');
    const modalPlatforms = document.getElementById('modalPlatforms');
    const modalClient = document.getElementById('modalClient');

    if (modalImg) modalImg.src = project.image || 'assets/images/banners/hero_bg.jpg';
    if (modalImg) modalImg.alt = project.title || 'Project Detail';
    if (modalCategory) modalCategory.textContent = project.category || '';
    if (modalPeriod) modalPeriod.textContent = project.period ? `Period: ${project.period}` : '';
    if (modalTitle) modalTitle.textContent = project.title || '';
    if (modalSubtitle) modalSubtitle.textContent = project.subtitle || '';
    if (modalDesc) modalDesc.textContent = project.description || '';
    if (modalClient) modalClient.textContent = project.client ? `Client: ${project.client}` : '';

    // Scope list
    if (modalScope) {
      modalScope.innerHTML = '';
      if (project.scope_of_work && project.scope_of_work.length > 0) {
        project.scope_of_work.forEach(item => {
          const li = document.createElement('li');
          li.className = 'modal-scope-item';
          li.textContent = item;
          modalScope.appendChild(li);
        });
      } else {
        modalScope.innerHTML = '<li class="modal-scope-item">Full Creative Execution & Campaign Operations</li>';
      }
    }

    // Achievements / Metrics
    if (modalMetrics) {
      modalMetrics.innerHTML = '';
      if (project.achievements && project.achievements.length > 0) {
        project.achievements.forEach(ach => {
          const card = document.createElement('div');
          card.className = 'modal-metric-card';
          card.innerHTML = `
            <div class="modal-metric-val">${ach.value}</div>
            <div class="modal-metric-lbl">${ach.label}</div>
          `;
          modalMetrics.appendChild(card);
        });
      } else {
        modalMetrics.innerHTML = `
          <div class="modal-metric-card">
            <div class="modal-metric-val">100%</div>
            <div class="modal-metric-lbl">Execution Delivery</div>
          </div>
          <div class="modal-metric-card">
            <div class="modal-metric-val">Verified</div>
            <div class="modal-metric-lbl">Agency Experience</div>
          </div>
        `;
      }
    }

    // Platforms
    if (modalPlatforms) {
      modalPlatforms.innerHTML = '';
      if (project.platforms && project.platforms.length > 0) {
        project.platforms.forEach(plat => {
          const badge = document.createElement('span');
          badge.className = 'modal-platform-badge';
          badge.textContent = plat;
          modalPlatforms.appendChild(badge);
        });
      }
    }

    modalBackdrop.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    modalBackdrop?.classList.remove('active');
    document.body.style.overflow = '';
  }

  modalCloseBtn?.addEventListener('click', closeModal);

  modalBackdrop?.addEventListener('click', (e) => {
    if (e.target === modalBackdrop) {
      closeModal();
    }
  });

  // Keyboard escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeModal();
      closeMobileMenu();
    }
  });

  // --- 5. TOAST NOTIFICATION UTILITY ---
  function showToast(message) {
    let toast = document.getElementById('siteToast');
    if (!toast) {
      toast = document.createElement('div');
      toast.id = 'siteToast';
      toast.className = 'toast-notice';
      document.body.appendChild(toast);
    }
    toast.textContent = message;
    toast.classList.add('show');
    setTimeout(() => {
      toast.classList.remove('show');
    }, 3200);
  }

  // Copy buttons
  document.querySelectorAll('.btn-copy-info').forEach(btn => {
    btn.addEventListener('click', () => {
      const textToCopy = btn.getAttribute('data-copy');
      if (textToCopy) {
        navigator.clipboard.writeText(textToCopy).then(() => {
          showToast(`Berhasil disalin: "${textToCopy}"`);
        }).catch(() => {
          // Fallback
          const tempInput = document.createElement('input');
          tempInput.value = textToCopy;
          document.body.appendChild(tempInput);
          tempInput.select();
          document.execCommand('copy');
          document.body.removeChild(tempInput);
          showToast(`Berhasil disalin: "${textToCopy}"`);
        });
      }
    });
  });

  // --- 6. FUNCTIONAL CONTACT FORM (MAILTO & WHATSAPP) ---
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('formName')?.value || '';
      const email = document.getElementById('formEmail')?.value || '';
      const company = document.getElementById('formCompany')?.value || '';
      const service = document.getElementById('formService')?.value || 'Konsultasi Creative Agency';
      const message = document.getElementById('formMessage')?.value || '';

      const submitType = e.submitter?.getAttribute('data-action') || 'wa';

      if (submitType === 'wa') {
        const waText = `Halo Zire Alcyone,\n\nNama: ${name}\nEmail: ${email}\nPerusahaan: ${company}\nKebutuhan: ${service}\n\nPesan:\n${message}`;
        const waUrl = `https://wa.me/6282125400909?text=${encodeURIComponent(waText)}`;
        window.open(waUrl, '_blank');
        showToast('Membuka WhatsApp untuk mengirim pesan...');
      } else {
        const subject = `Inquiry Website: ${service} - ${name} (${company})`;
        const body = `Halo Zire Alcyone,\n\nNama: ${name}\nEmail: ${email}\nPerusahaan: ${company}\nKebutuhan: ${service}\n\nPesan:\n${message}`;
        const mailtoUrl = `mailto:zirealcyone@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
        window.location.href = mailtoUrl;
        showToast('Membuka aplikasi Email...');
      }
    });
  }
});
