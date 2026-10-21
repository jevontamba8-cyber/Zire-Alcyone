<?php
/**
 * Footer Component - ZIRE ALCYONE
 */
if (!isset($company)) {
    $company = require __DIR__ . '/../data/company.php';
}
if (!isset($portfolioList)) {
    $portfolioList = require __DIR__ . '/../data/portfolio.php';
}

// Prepare indexed portfolio dictionary for Javascript modal
$portfolioJsonMap = [];
foreach ($portfolioList as $item) {
    $portfolioJsonMap[$item['id']] = $item;
}
?>

<!-- Site Footer -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <!-- Col 1: Brand Info -->
      <div class="footer-col">
        <a href="index.php" style="display: inline-block; margin-bottom: 0.5rem;">
          <img src="assets/images/logos/za_logo_full.png" alt="Zire Alcyone" style="height: 48px;">
        </a>
        <p class="footer-brand-tagline">
          “<?= htmlspecialchars($company['tagline']); ?>”
        </p>
        <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 1rem; line-height: 1.6;">
          <?= htmlspecialchars($company['business_type']); ?>
        </p>
      </div>

      <!-- Col 2: Navigation -->
      <div class="footer-col">
        <h4 class="footer-heading">Navigation</h4>
        <ul class="footer-nav-list">
          <li><a href="index.php" class="footer-nav-link">Home</a></li>
          <li><a href="about.php" class="footer-nav-link">About Zire</a></li>
          <li><a href="services.php" class="footer-nav-link">Our Services</a></li>
          <li><a href="portfolio.php" class="footer-nav-link">Selected Works</a></li>
          <li><a href="contact.php" class="footer-nav-link">Contact Us</a></li>
        </ul>
      </div>

      <!-- Col 3: Services -->
      <div class="footer-col">
        <h4 class="footer-heading">Capabilities</h4>
        <ul class="footer-nav-list">
          <li><a href="services.php#digital-campaign-management" class="footer-nav-link">Digital Campaign</a></li>
          <li><a href="services.php#integrated-social-commerce-solution" class="footer-nav-link">Social Commerce</a></li>
          <li><a href="services.php#influencer-talent-management" class="footer-nav-link">Influencer & Talent</a></li>
          <li><a href="services.php#content-production" class="footer-nav-link">Content & TVC</a></li>
          <li><a href="services.php#event-management-production" class="footer-nav-link">Event Management</a></li>
          <li><a href="services.php#sport-ads" class="footer-nav-link">Sport Activations</a></li>
        </ul>
      </div>

      <!-- Col 4: Contact & Office -->
      <div class="footer-col">
        <h4 class="footer-heading">Office & Contact</h4>
        <div style="display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.88rem; color: var(--text-muted);">
          <div style="display: flex; align-items: center; gap: 0.65rem;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gold-primary)" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <a href="tel:<?= $company['contact']['phone_raw']; ?>" style="color: var(--text-secondary);"><?= htmlspecialchars($company['contact']['phone_display']); ?></a>
          </div>

          <div style="display: flex; align-items: center; gap: 0.65rem;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gold-primary)" stroke-width="2">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            <a href="mailto:<?= $company['contact']['email']; ?>" style="color: var(--text-secondary);"><?= htmlspecialchars($company['contact']['email']); ?></a>
          </div>

          <div style="display: flex; align-items: flex-start; gap: 0.65rem; margin-top: 0.2rem; line-height: 1.5;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gold-primary)" stroke-width="2" style="flex-shrink: 0; margin-top: 3px;">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <span><?= htmlspecialchars($company['contact']['address']); ?></span>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
      <div><?= htmlspecialchars($company['copyright']); ?></div>
      <div style="display: flex; gap: 1.5rem;">
        <span style="color: var(--gold-light);">Every idea is a gift. Every experience is an opportunity.</span>
      </div>
    </div>
  </div>
</footer>

<!-- Case Study Modal Inclusion -->
<?php include __DIR__ . '/case-study-modal.php'; ?>

<!-- Back to top button -->
<button class="back-to-top" id="backToTopBtn" aria-label="Kembali ke Atas">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
    <polyline points="18 15 12 9 6 15"></polyline>
  </svg>
</button>

<!-- Inject Portfolio Data for Client-Side Modal Rendering -->
<script>
  window.PORTFOLIO_DATA = <?= json_encode($portfolioJsonMap, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;
</script>

<!-- Main Scripts -->
<script src="assets/js/main.js"></script>

<?php if (isset($currentPage) && $currentPage === 'home'): ?>
  <!-- 3D Liquid Wave Engine (Dark Blue & Gold) -->
  <script src="assets/js/three.min.js"></script>
  <script src="assets/js/hero-wave.js"></script>
<?php endif; ?>
</body>
</html>
