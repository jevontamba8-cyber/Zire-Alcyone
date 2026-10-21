<?php
/**
 * SERVICES PAGE - ZIRE ALCYONE
 * Based on Prompt_Website_Zire_Alcyone.pdf
 */
$currentPage = 'services';
$pageTitle = 'Services & Capabilities';
$pageDesc = 'Comprehensive digital marketing, social commerce solutions, influencer management, content production, turnkey event execution, and specialized sports advertising.';

$company = require __DIR__ . '/data/company.php';
$services = require __DIR__ . '/data/services.php';

include __DIR__ . '/components/header.php';
?>

<!-- ==========================================================================
     PAGE HEADER
     ========================================================================== -->
<section style="padding: 6rem 0 4rem; background: radial-gradient(circle at 70% 30%, rgba(212, 175, 55, 0.08) 0%, transparent 60%);">
  <div class="container">
    <div class="section-label">OUR CORE CAPABILITIES</div>
    <h1 class="section-title">
      Comprehensive Solutions For <span class="text-gold-gradient">Ambitious Brands.</span>
    </h1>
    <p class="section-subtitle" style="font-size: 1.15rem; max-width: 780px;">
      Dari aktivasi digital yang presisi, studio siaran live shopping berkinerja tinggi, produksi TVC kelas atas, hingga pameran berskala internasional.
    </p>
  </div>
</section>

<!-- ==========================================================================
     DETAILED SERVICES SECTIONS
     ========================================================================== -->
<section style="padding-bottom: 6rem;">
  <div class="container" style="display: flex; flex-direction: column; gap: 5rem;">
    <?php foreach ($services as $idx => $svc): ?>
      <div id="<?= $svc['id']; ?>" style="scroll-margin-top: 100px; background: var(--bg-surface); border: 1px solid var(--gold-border); border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-card);">
        <div style="display: grid; grid-template-columns: <?= $idx % 2 === 0 ? '1.1fr 0.9fr' : '0.9fr 1.1fr' ?>; align-items: stretch;">
          
          <?php if ($idx % 2 !== 0): ?>
            <!-- Media Left (Odd rows) -->
            <div style="position: relative; min-height: 380px; background: #030610; overflow: hidden;">
              <img src="<?= htmlspecialchars($svc['image']); ?>" alt="<?= htmlspecialchars($svc['title']); ?>" style="width: 100%; height: 100%; object-fit: cover;">
              <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(6, 11, 26, 0.4) 0%, rgba(4, 7, 18, 0.7) 100%);"></div>
              <div style="position: absolute; top: 20px; left: 20px;">
                <span class="badge-gold">Service <?= sprintf('%02d', $idx + 1); ?></span>
              </div>
            </div>
          <?php endif; ?>

          <!-- Content Block -->
          <div style="padding: 3.5rem 3rem; display: flex; flex-direction: column; justify-content: center;">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.85rem;">
              <span class="section-label" style="margin-bottom: 0;"><?= sprintf('CAPABILITY %02d', $idx + 1); ?></span>
              <span style="font-family: var(--font-serif); font-size: 2rem; font-weight: 700; color: rgba(212, 175, 55, 0.3);">
                <?= sprintf('%02d', $idx + 1); ?>
              </span>
            </div>

            <h2 style="font-family: var(--font-serif); font-size: 2rem; font-weight: 700; color: var(--text-white); margin-bottom: 0.5rem; line-height: 1.25;">
              <?= htmlspecialchars($svc['title']); ?>
            </h2>

            <div style="font-size: 0.82rem; font-weight: 700; color: var(--gold-light); letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 1.2rem;">
              <?= htmlspecialchars($svc['subtitle']); ?>
            </div>

            <p style="color: var(--text-secondary); font-size: 1rem; line-height: 1.7; margin-bottom: 1.8rem;">
              <?= htmlspecialchars($svc['full_desc']); ?>
            </p>

            <!-- Offering Items Grid -->
            <div style="background: rgba(4, 7, 18, 0.5); border: 1px solid rgba(212, 175, 55, 0.15); border-radius: var(--radius-md); padding: 1.5rem; margin-bottom: 2rem;">
              <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--gold-primary); font-weight: 700; margin-bottom: 1rem;">
                Scope & Key Deliverables
              </div>
              <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 0.75rem;">
                <?php foreach ($svc['items'] as $item): ?>
                  <div style="font-size: 0.88rem; color: var(--text-secondary); display: flex; align-items: center; gap: 0.6rem;">
                    <span style="color: var(--gold-primary); font-size: 0.7rem;">◆</span>
                    <span><?= htmlspecialchars($item); ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <div style="display: flex; align-items: center; gap: 1.2rem; flex-wrap: wrap;">
              <a href="contact.php?service=<?= urlencode($svc['title']); ?>" class="btn btn-primary">
                <span>Konsultasikan Kebutuhan Ini</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <a href="portfolio.php" class="btn btn-secondary">
                <span>Lihat Studi Kasus Terkait</span>
              </a>
            </div>
          </div>

          <?php if ($idx % 2 === 0): ?>
            <!-- Media Right (Even rows) -->
            <div style="position: relative; min-height: 380px; background: #030610; overflow: hidden;">
              <img src="<?= htmlspecialchars($svc['image']); ?>" alt="<?= htmlspecialchars($svc['title']); ?>" style="width: 100%; height: 100%; object-fit: cover;">
              <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(6, 11, 26, 0.4) 0%, rgba(4, 7, 18, 0.7) 100%);"></div>
              <div style="position: absolute; top: 20px; right: 20px;">
                <span class="badge-gold">Service <?= sprintf('%02d', $idx + 1); ?></span>
              </div>
            </div>
          <?php endif; ?>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Closing CTA -->
<section class="closing-cta-section">
  <div class="container">
    <div class="closing-cta-box">
      <div class="section-label">PARTNER WITH US</div>
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
