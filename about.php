<?php
/**
 * ABOUT PAGE - ZIRE ALCYONE
 * Based on Prompt_Website_Zire_Alcyone.pdf
 */
$currentPage = 'about';
$pageTitle = 'About Us';
$pageDesc = 'Purpose, Imagination, Impact. We are a creative agency and event organizer driven by purpose, imagination, and a commitment to meaningful execution.';

$company = require __DIR__ . '/data/company.php';
$partners = require __DIR__ . '/data/partners.php';

$ecosystemSteps = [
    [
        'step' => '01',
        'name' => 'STRATEGY',
        'desc' => 'In-depth market research, audience profiling, and overarching campaign architecture.',
        'icon' => '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle>'
    ],
    [
        'step' => '02',
        'name' => 'CREATIVE',
        'desc' => 'High-impact concepting, visual identity direction, and narrative formulation.',
        'icon' => '<path d="M12 2a7 7 0 0 0-7 7c0 2.38 1.19 4.47 3 5.74V17a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-2.26c1.81-1.27 3-3.36 3-5.74a7 7 0 0 0-7-7z"></path><line x1="9" y1="21" x2="15" y2="21"></line>'
    ],
    [
        'step' => '03',
        'name' => 'CONTENT',
        'desc' => 'Cinematic commercials, high-frequency vertical videos, and digital creative assets.',
        'icon' => '<rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><polygon points="10 8 16 12 10 16 10 8"></polygon>'
    ],
    [
        'step' => '04',
        'name' => 'DIGITAL',
        'desc' => 'Integrated social media channels, performance ads, web apps, and SEO precision.',
        'icon' => '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line>'
    ],
    [
        'step' => '05',
        'name' => 'EXPERIENCE',
        'desc' => 'Physical brand activations, experiential booths, MICE, and live spectator events.',
        'icon' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>'
    ],
    [
        'step' => '06',
        'name' => 'COMMUNITY',
        'desc' => 'Active grassroot groups, trade influencers, and high-frequency sports centers.',
        'icon' => '<circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>'
    ],
    [
        'step' => '07',
        'name' => 'AMPLIFICATION',
        'desc' => 'Affiliate networks, 5,000+ clippers, live shopping broadcasts, and PR reach.',
        'icon' => '<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>'
    ],
    [
        'step' => '08',
        'name' => 'IMPACT',
        'desc' => 'Sustained GMV conversion, national viral presence, and lasting brand equity.',
        'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>'
    ]
];

$capabilities = [
    'Strategy & Planning',
    'Creative Development',
    'Content Production',
    'Digital Communication',
    'Social Media & Community',
    'Brand Activation',
    'Event Experience',
    'Performance & Amplification'
];

include __DIR__ . '/components/header.php';
?>

<!-- ==========================================================================
     PAGE HERO
     ========================================================================== -->
<section style="padding: 6rem 0 3.5rem; background: radial-gradient(circle at 80% 20%, rgba(212, 175, 55, 0.08) 0%, transparent 60%);">
  <div class="container">
    <div class="section-label">ABOUT ZIRE ALCYONE</div>
    <h1 class="section-title">
      Purpose, Imagination, <span class="text-gold-gradient">Impact.</span>
    </h1>
    <p class="section-subtitle" style="font-size: 1.2rem; line-height: 1.8; max-width: 820px;">
      “<?= htmlspecialchars($company['official_description']); ?>”
    </p>
  </div>
</section>

<!-- ==========================================================================
     OUR PHILOSOPHY & STORY
     ========================================================================== -->
<section style="padding: 4rem 0 6rem; border-top: 1px solid rgba(212, 175, 55, 0.15);">
  <div class="container">
    <div class="brand-intro-grid">
      <div>
        <div class="section-label">OUR PHILOSOPHY</div>
        <h2 class="section-title" style="font-size: 2.2rem;">
          “Every idea is a gift. Every experience is an opportunity to create impact.”
        </h2>
        <p style="color: var(--text-secondary); line-height: 1.8; margin-bottom: 1.5rem; font-size: 1.05rem;">
          Di Zire Alcyone, kami meyakini bahwa setiap ide besar lahir dari sebuah anugerah (<em>a precious gift</em>) yang menuntut komitmen penuh dan keteguhan hati untuk diwujudkan menjadi karya nyata yang relevan.
        </p>
        <p style="color: var(--text-secondary); line-height: 1.8; font-size: 1.05rem;">
          Dari ruang konseptual strategi digital hingga produksi panggung berskala internasional, kami tidak sekadar mengeksekusi kampanye—kami mentransformasikan gagasan menjadi pengalaman imersif yang menggerakkan audiens dan memberikan nilai bisnis yang terukur.
        </p>
      </div>

      <div class="etymology-box">
        <div class="etymology-item" style="border-left-width: 4px; padding: 2rem;">
          <div class="etymology-term" style="font-size: 1.3rem;">
            <?= htmlspecialchars($company['etymology']['zire']['term']); ?>
          </div>
          <p class="etymology-meaning" style="font-size: 1rem; margin-top: 0.5rem; line-height: 1.6;">
            <?= htmlspecialchars($company['etymology']['zire']['meaning']); ?>
          </p>
        </div>

        <div class="etymology-item" style="border-left-width: 4px; padding: 2rem;">
          <div class="etymology-term" style="font-size: 1.3rem;">
            <?= htmlspecialchars($company['etymology']['alcyone']['term']); ?>
          </div>
          <p class="etymology-meaning" style="font-size: 1rem; margin-top: 0.5rem; line-height: 1.6;">
            <?= htmlspecialchars($company['etymology']['alcyone']['meaning']); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     OUR ECOSYSTEM
     ========================================================================== -->
<section class="ecosystem-section">
  <div class="container">
    <div style="text-align: center; max-width: 780px; margin: 0 auto;">
      <div class="section-label">INTEGRATED TOUCHPOINTS</div>
      <h2 class="section-title">OUR ECOSYSTEM</h2>
      <p style="font-family: var(--font-serif); font-size: 1.15rem; color: var(--gold-light); letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1rem;">
        ONE IDEA. BUILT ACROSS EVERY TOUCHPOINT.
      </p>
      <p class="section-subtitle" style="margin: 0 auto;">
        Sebuah ekosistem holistik yang menghubungkan strategi komprehensif hingga penciptaan dampak nyata bagi brand Anda di setiap titik temu audiens.
      </p>
    </div>

    <div class="ecosystem-grid">
      <?php foreach ($ecosystemSteps as $eco): ?>
        <div class="ecosystem-card">
          <span class="ecosystem-step"><?= $eco['step']; ?></span>
          <div class="ecosystem-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <?= $eco['icon']; ?>
            </svg>
          </div>
          <h3 class="ecosystem-name"><?= $eco['name']; ?></h3>
          <p style="font-size: 0.82rem; color: var(--text-muted); margin-top: 0.65rem; line-height: 1.5;">
            <?= htmlspecialchars($eco['desc']); ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     OUR CAPABILITIES LIST
     ========================================================================== -->
<section style="padding: 6rem 0; border-bottom: 1px solid rgba(212, 175, 55, 0.15);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3.5rem;">
      <div class="section-label">SPECIALIZED PROFICIENCY</div>
      <h2 class="section-title">Our Capabilities</h2>
      <p class="section-subtitle" style="margin: 0 auto;">
        Disiplin inti yang kami hadirkan untuk mengawal pertumbuhan dan reputasi brand.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
      <?php foreach ($capabilities as $idx => $cap): ?>
        <div style="background: var(--bg-surface); border: 1px solid var(--gold-border); border-radius: var(--radius-md); padding: 1.6rem 1.8rem; display: flex; align-items: center; gap: 1rem; transition: var(--transition-base);" onmouseover="this.style.borderColor='var(--gold-primary)'; this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='var(--gold-border)'; this.style.transform='none'">
          <span style="font-family: var(--font-serif); font-size: 1.2rem; font-weight: 700; color: var(--gold-primary);">
            <?= sprintf('%02d', $idx + 1); ?>
          </span>
          <span style="font-size: 1.05rem; font-weight: 600; color: var(--text-white);">
            <?= htmlspecialchars($cap); ?>
          </span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     PARTNERED WITH US
     ========================================================================== -->
<section class="partners-section">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <div class="section-label">EXPERIENCE & CREDIBILITY</div>
      <h2 class="section-title">Partnered With Us</h2>
      <p class="section-subtitle" style="margin: 0 auto;">
        Menampilkan logo dan brand mitra resmi yang diverifikasi langsung dari portfolio riil Zire Alcyone.
      </p>
    </div>

    <!-- Authentic Partners Grid Image from PDF Page 6 -->
    <div class="partners-banner-wrap">
      <img src="assets/images/banners/partners_grid.png" alt="Zire Alcyone Brand Partners" class="partners-banner-img" loading="lazy">
    </div>

    <!-- Complete Partner Sector Directory -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; margin-top: 3rem;">
      <?php foreach ($partners as $p): ?>
        <div style="background: rgba(10, 18, 42, 0.7); border: 1px solid rgba(212, 175, 55, 0.18); border-radius: var(--radius-sm); padding: 1rem 1.2rem;">
          <div style="font-weight: 700; color: var(--text-white); font-size: 0.95rem;"><?= htmlspecialchars($p['name']); ?></div>
          <div style="font-size: 0.78rem; color: var(--gold-primary); margin-top: 0.2rem;"><?= htmlspecialchars($p['sector']); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Closing CTA -->
<section class="closing-cta-section">
  <div class="container">
    <div class="closing-cta-box">
      <div class="section-label">GET IN TOUCH</div>
      <h2 class="section-title">READY TO WORK WITH US?</h2>
      <p class="section-subtitle" style="margin: 0 auto 2.5rem;">
        Mari wujudkan kampanye dan aktivasi yang memikat audiens serta memberikan dampak nyata.
      </p>
      <a href="contact.php" class="btn btn-primary" style="padding: 1rem 2.5rem;">
        <span>Hubungi Tim Zire Alcyone</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
