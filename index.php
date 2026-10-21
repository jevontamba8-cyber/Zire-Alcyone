<?php
/**
 * HOME PAGE - ZIRE ALCYONE
 * Based on Prompt_Website_Zire_Alcyone.pdf
 */
$currentPage = 'home';
$pageTitle = 'Home';

$company = require __DIR__ . '/data/company.php';
$services = require __DIR__ . '/data/services.php';
$portfolioList = require __DIR__ . '/data/portfolio.php';
$partners = require __DIR__ . '/data/partners.php';

// Filter featured projects for home showcase
$featuredProjects = array_filter($portfolioList, function($p) {
    return !empty($p['featured']);
});
// Take first 6 featured
$featuredProjects = array_slice($featuredProjects, 0, 6);

include __DIR__ . '/components/header.php';
?>

<!-- ==========================================================================
     HERO SECTION
     ========================================================================== -->
<section class="hero-section">
  <!-- 3D Liquid Wave Canvas (Dark Blue & Gold) -->
  <div class="hero-wave-wrap" id="heroWaveContainer" aria-hidden="true"></div>
  <div class="hero-bg-media"></div>
  <div class="container">
    <div class="hero-content">
      <div class="section-label">Creative Agency & Event Organizer</div>
      <h1 class="hero-title">
        WE BUILD IDEAS THAT <span class="text-gold-gradient">MOVE BRANDS FORWARD.</span>
      </h1>
      <p class="hero-supporting">
        <?= htmlspecialchars($company['hero_supporting']); ?>
      </p>

      <div class="hero-actions">
        <a href="portfolio.php" class="btn btn-primary">
          <span>Explore Our Works</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
        <a href="contact.php" class="btn btn-secondary">
          <span>Let's Work Together</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
          </svg>
        </a>
      </div>

      <!-- Highlights Counter from Verified Case Studies -->
      <div class="hero-stats-bar">
        <div class="hero-stat-item">
          <div class="hero-stat-number">7.9M+</div>
          <div class="hero-stat-label">Viral Campaign Views</div>
        </div>
        <div class="hero-stat-item">
          <div class="hero-stat-number">+315%</div>
          <div class="hero-stat-label">TikTok Shop GMV Growth</div>
        </div>
        <div class="hero-stat-item">
          <div class="hero-stat-number">5,000+</div>
          <div class="hero-stat-label">Active Clipper Network</div>
        </div>
        <div class="hero-stat-item">
          <div class="hero-stat-number">35+</div>
          <div class="hero-stat-label">Major Brand Partners</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     BRAND INTRODUCTION & PHILOSOPHY
     ========================================================================== -->
<section class="brand-intro-section">
  <div class="container">
    <div class="brand-intro-grid">
      <!-- Quote Card -->
      <div class="philosophy-quote-card">
        <div class="section-label">Brand Philosophy</div>
        <h2 class="philosophy-lead">
          “Every idea is a gift. Every experience is an opportunity to create impact.”
        </h2>
        <p class="philosophy-body">
          <?= htmlspecialchars($company['official_description']); ?>
        </p>
      </div>

      <!-- Etymology Meaning Cards -->
      <div class="etymology-box">
        <div class="section-label">The Essence Behind Our Name</div>
        <div class="etymology-item">
          <div class="etymology-term"><?= htmlspecialchars($company['etymology']['zire']['term']); ?></div>
          <div class="etymology-meaning"><?= htmlspecialchars($company['etymology']['zire']['meaning']); ?></div>
        </div>
        <div class="etymology-item">
          <div class="etymology-term"><?= htmlspecialchars($company['etymology']['alcyone']['term']); ?></div>
          <div class="etymology-meaning"><?= htmlspecialchars($company['etymology']['alcyone']['meaning']); ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SERVICES OVERVIEW
     ========================================================================== -->
<section class="services-section">
  <div class="container">
    <div style="text-align: center; max-width: 720px; margin: 0 auto 3.5rem;">
      <div class="section-label">WHAT WE DO</div>
      <h2 class="section-title">Our Core Capabilities</h2>
      <p class="section-subtitle" style="margin: 0 auto;">
        Integrated creative strategy, digital commerce acceleration, and turnkey event experiences engineered to build enduring brand value.
      </p>
    </div>

    <div class="services-grid">
      <?php foreach ($services as $idx => $svc): ?>
        <div class="service-card">
          <div class="service-header">
            <div class="service-icon-box">
              <?php if ($svc['icon'] === 'globe'): ?>
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
              <?php elseif ($svc['icon'] === 'shopping-bag'): ?>
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
              <?php elseif ($svc['icon'] === 'users'): ?>
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              <?php elseif ($svc['icon'] === 'film'): ?>
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg>
              <?php elseif ($svc['icon'] === 'calendar'): ?>
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
              <?php else: ?>
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
              <?php endif; ?>
            </div>
            <span class="service-number"><?= sprintf('%02d', $idx + 1); ?></span>
          </div>

          <h3 class="service-title"><?= htmlspecialchars($svc['title']); ?></h3>
          <span class="service-subtitle-badge"><?= htmlspecialchars($svc['subtitle']); ?></span>
          <p class="service-desc"><?= htmlspecialchars($svc['short_desc']); ?></p>

          <ul class="service-items-list">
            <?php foreach (array_slice($svc['items'], 0, 4) as $item): ?>
              <li class="service-item-li"><?= htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>

          <div class="service-card-action">
            <a href="services.php#<?= $svc['id']; ?>" class="btn-view-study">
              <span>Explore Capability</span>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 3.5rem;">
      <a href="services.php" class="btn btn-secondary">
        <span>Lihat Semua Layanan & Detail Eksekusi</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SELECTED WORKS / PORTFOLIO SHOWCASE
     ========================================================================== -->
<section class="portfolio-section" style="background: rgba(4, 7, 18, 0.6);">
  <div class="container">
    <div style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 3.5rem;">
      <div>
        <div class="section-label">OUR WORKS</div>
        <h2 class="section-title">Creative Thinking. Meaningful Execution.</h2>
        <p class="section-subtitle" style="margin-bottom: 0;">
          A showcase of verified campaigns, commercial productions, and high-impact brand activations.
        </p>
      </div>

      <a href="portfolio.php" class="btn btn-primary">
        <span>View All Projects (30+)</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </div>

    <div class="portfolio-grid">
      <?php foreach ($featuredProjects as $project): ?>
        <article class="project-card" data-categories="<?= implode(' ', $project['categories']); ?>">
          <div class="project-card-media">
            <img src="<?= htmlspecialchars($project['image']); ?>" alt="<?= htmlspecialchars($project['title']); ?>" class="project-card-img" loading="lazy">
            <div class="project-card-overlay">
              <?php if (!empty($project['highlight_metric'])): ?>
                <span class="project-pill-metric"><?= htmlspecialchars($project['highlight_metric']); ?></span>
              <?php endif; ?>
            </div>
          </div>

          <div class="project-card-body">
            <div class="project-meta-line">
              <span class="project-category-badge"><?= htmlspecialchars($project['category']); ?></span>
              <?php if (!empty($project['period'])): ?>
                <span class="project-period"><?= htmlspecialchars($project['period']); ?></span>
              <?php endif; ?>
            </div>

            <h3 class="project-card-title"><?= htmlspecialchars($project['title']); ?></h3>
            <div class="project-card-subtitle"><?= htmlspecialchars($project['subtitle']); ?></div>
            <p class="project-card-desc"><?= htmlspecialchars($project['description']); ?></p>

            <div class="project-card-footer">
              <button type="button" class="btn-view-study open-case-study" data-project-id="<?= $project['id']; ?>">
                <span>View Case Study</span>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </button>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     PARTNERED WITH US SHOWCASE
     ========================================================================== -->
<section class="partners-section">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <div class="section-label">TRUSTED COLLABORATIONS</div>
      <h2 class="section-title">Partnered With Us</h2>
      <p class="section-subtitle" style="margin: 0 auto;">
        Proud to collaborate with industry-leading domestic and multinational brands across diverse sectors.
      </p>
    </div>

    <!-- Authentic Partners Grid Extracted from PDF Page 6 -->
    <div class="partners-banner-wrap">
      <img src="assets/images/banners/partners_grid.png" alt="Zire Alcyone Brand Partners" class="partners-banner-img" loading="lazy">
    </div>

    <!-- Verified Partner Tags -->
    <div class="partners-tag-cloud">
      <?php foreach (array_slice($partners, 0, 18) as $p): ?>
        <span class="partner-tag">
          <span style="color: var(--gold-primary); font-size: 0.6rem;">◆</span>
          <?= htmlspecialchars($p['name']); ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     CLOSING CTA
     ========================================================================== -->
<section class="closing-cta-section">
  <div class="container">
    <div class="closing-cta-box">
      <div class="section-label">LET'S CONNECT</div>
      <h2 class="section-title">LET'S BUILD EXPERIENCES TOGETHER.</h2>
      <p class="section-subtitle" style="margin: 0 auto 2.5rem;">
        Have a brand, campaign, or event in mind? Let's create something meaningful together.
      </p>
      <a href="contact.php" class="btn btn-primary" style="padding: 1rem 2.5rem; font-size: 1rem;">
        <span>Start a Conversation</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
