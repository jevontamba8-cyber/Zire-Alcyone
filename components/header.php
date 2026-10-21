<?php
/**
 * Header Component - ZIRE ALCYONE
 */
if (!isset($company)) {
    $company = require __DIR__ . '/../data/company.php';
}

$pageTitle = isset($pageTitle) ? $pageTitle . ' | ' . $company['name'] : $company['name'] . ' — Creative Agency & Event Organizer';
$pageDesc = isset($pageDesc) ? $pageDesc : $company['hero_supporting'];
$currentPage = isset($currentPage) ? $currentPage : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc); ?>">
  <meta name="keywords" content="Creative Agency, Event Organizer, Digital Marketing, Influencer Marketing, TVC Commercial, Live Shopping, Sport Ads, Zire Alcyone">
  <meta name="author" content="Zire Alcyone">

  <!-- Open Graph / Meta -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc); ?>">
  <meta property="og:image" content="assets/images/logos/za_logo_full.png">
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="<?= htmlspecialchars($pageTitle); ?>">
  <meta property="twitter:description" content="<?= htmlspecialchars($pageDesc); ?>">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/png" href="assets/images/logos/za_badge.png">
</head>
<body>

<!-- Sticky Header -->
<header class="site-header" id="siteHeader">
  <div class="container">
    <div class="header-inner">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-logo" aria-label="Zire Alcyone Home">
        <img src="assets/images/logos/za_logo_full.png" alt="Zire Alcyone" class="brand-logo-img">
      </a>

      <!-- Desktop Nav -->
      <nav class="main-nav" aria-label="Navigasi Utama">
        <ul class="nav-links">
          <li>
            <a href="index.php" class="nav-link <?= $currentPage === 'home' ? 'active' : ''; ?>">Home</a>
          </li>
          <li>
            <a href="about.php" class="nav-link <?= $currentPage === 'about' ? 'active' : ''; ?>">About</a>
          </li>
          <li>
            <a href="services.php" class="nav-link <?= $currentPage === 'services' ? 'active' : ''; ?>">Services</a>
          </li>
          <li>
            <a href="portfolio.php" class="nav-link <?= $currentPage === 'portfolio' ? 'active' : ''; ?>">Portfolio</a>
          </li>
          <li>
            <a href="contact.php" class="nav-link <?= $currentPage === 'contact' ? 'active' : ''; ?>">Contact</a>
          </li>
        </ul>

        <a href="contact.php" class="btn-cta-gold">
          <span>Let's Work Together</span>
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </nav>

      <!-- Mobile Hamburger Toggle -->
      <button class="mobile-toggle" id="mobileToggle" aria-label="Buka Menu Navigasi">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-overlay" id="mobileOverlay"></div>
<aside class="mobile-drawer" id="mobileDrawer" aria-label="Navigasi Mobile">
  <div>
    <div style="margin-bottom: 2.5rem;">
      <img src="assets/images/logos/za_logo_full.png" alt="Zire Alcyone" style="height: 42px;">
    </div>
    <ul class="mobile-nav-links">
      <li>
        <a href="index.php" class="mobile-nav-link <?= $currentPage === 'home' ? 'active' : ''; ?>">
          <span>Home</span>
          <span style="font-size: 0.9rem; color: var(--gold-primary);">01</span>
        </a>
      </li>
      <li>
        <a href="about.php" class="mobile-nav-link <?= $currentPage === 'about' ? 'active' : ''; ?>">
          <span>About</span>
          <span style="font-size: 0.9rem; color: var(--gold-primary);">02</span>
        </a>
      </li>
      <li>
        <a href="services.php" class="mobile-nav-link <?= $currentPage === 'services' ? 'active' : ''; ?>">
          <span>Services</span>
          <span style="font-size: 0.9rem; color: var(--gold-primary);">03</span>
        </a>
      </li>
      <li>
        <a href="portfolio.php" class="mobile-nav-link <?= $currentPage === 'portfolio' ? 'active' : ''; ?>">
          <span>Portfolio</span>
          <span style="font-size: 0.9rem; color: var(--gold-primary);">04</span>
        </a>
      </li>
      <li>
        <a href="contact.php" class="mobile-nav-link <?= $currentPage === 'contact' ? 'active' : ''; ?>">
          <span>Contact</span>
          <span style="font-size: 0.9rem; color: var(--gold-primary);">05</span>
        </a>
      </li>
    </ul>
  </div>

  <div>
    <a href="contact.php" class="btn btn-primary" style="width: 100%; margin-bottom: 1.5rem;">
      Let's Work Together
    </a>
    <div style="font-size: 0.78rem; color: var(--text-muted); text-align: center;">
      <?= htmlspecialchars($company['copyright']); ?>
    </div>
  </div>
</aside>
