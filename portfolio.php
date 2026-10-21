<?php
/**
 * PORTFOLIO PAGE - ZIRE ALCYONE
 * Based on Prompt_Website_Zire_Alcyone.pdf
 */
$currentPage = 'portfolio';
$pageTitle = 'Portfolio & Case Studies';
$pageDesc = 'From digital campaigns to real-world experiences, we turn ideas into meaningful brand impact. Explore our portfolio across social commerce, commercial films, and turnkey brand events.';

$company = require __DIR__ . '/data/company.php';
$portfolioList = require __DIR__ . '/data/portfolio.php';

$filterCategories = [
    ['slug' => 'all', 'label' => 'All Projects'],
    ['slug' => 'digital-campaign', 'label' => 'Digital Campaign'],
    ['slug' => 'social-media', 'label' => 'Social Media'],
    ['slug' => 'social-commerce', 'label' => 'Social Commerce'],
    ['slug' => 'influencer-campaign', 'label' => 'Influencer Campaign'],
    ['slug' => 'content-production', 'label' => 'Content Production'],
    ['slug' => 'event-brand-activation', 'label' => 'Event & Brand Activation'],
    ['slug' => 'sports-community', 'label' => 'Sports & Community']
];

include __DIR__ . '/components/header.php';
?>

<!-- ==========================================================================
     PORTFOLIO HEADER
     ========================================================================== -->
<section style="padding: 6rem 0 3.5rem; background: radial-gradient(circle at 75% 25%, rgba(212, 175, 55, 0.08) 0%, transparent 60%);">
  <div class="container">
    <div class="section-label">OUR WORKS</div>
    <h1 class="section-title">
      Creative Thinking. <span class="text-gold-gradient">Meaningful Execution.</span>
    </h1>
    <p class="section-subtitle" style="font-size: 1.15rem; max-width: 760px;">
      From digital campaigns to real-world experiences, we turn ideas into meaningful brand impact.
    </p>

    <!-- Category Filters -->
    <div class="portfolio-filter-bar" id="portfolioFilterBar">
      <?php foreach ($filterCategories as $idx => $cat): ?>
        <button type="button" class="filter-btn <?= $cat['slug'] === 'all' ? 'active' : ''; ?>" data-filter="<?= $cat['slug']; ?>">
          <?= htmlspecialchars($cat['label']); ?>
        </button>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     PROJECTS GRID
     ========================================================================== -->
<section style="padding-bottom: 7rem;">
  <div class="container">
    <div class="portfolio-grid" id="portfolioGrid">
      <?php foreach ($portfolioList as $project): ?>
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

      <!-- Empty State Container -->
      <div class="portfolio-empty-state" id="portfolioEmptyState" style="display: none;">
        <div style="font-family: var(--font-serif); font-size: 1.4rem; color: var(--gold-light); margin-bottom: 0.5rem;">
          Tidak ada proyek untuk kategori ini
        </div>
        <p style="color: var(--text-muted); font-size: 0.95rem;">
          Silakan pilih filter kategori lain untuk melihat portofolio kami.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Closing CTA -->
<section class="closing-cta-section">
  <div class="container">
    <div class="closing-cta-box">
      <div class="section-label">START A PROJECT</div>
      <h2 class="section-title">LET'S BUILD EXPERIENCES TOGETHER.</h2>
      <p class="section-subtitle" style="margin: 0 auto 2.5rem;">
        Have a brand, campaign, or event in mind? Let's create something meaningful together.
      </p>
      <a href="contact.php" class="btn btn-primary" style="padding: 1rem 2.5rem;">
        <span>Start a Conversation</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
