<?php
/**
 * CONTACT PAGE - ZIRE ALCYONE
 * Based on Prompt_Website_Zire_Alcyone.pdf
 */
$currentPage = 'contact';
$pageTitle = 'Contact Us';
$pageDesc = "LET'S BUILD EXPERIENCES TOGETHER. Hubungi Zire Alcyone untuk konsultasi digital marketing, campaign influencer, produksi komersial, dan penyelenggaraan event.";

$company = require __DIR__ . '/data/company.php';
$selectedService = isset($_GET['service']) ? trim($_GET['service']) : '';

include __DIR__ . '/components/header.php';
?>

<!-- ==========================================================================
     PAGE HEADER
     ========================================================================== -->
<section style="padding: 6rem 0 3.5rem; background: radial-gradient(circle at 75% 25%, rgba(212, 175, 55, 0.08) 0%, transparent 60%);">
  <div class="container">
    <div class="section-label">GET IN TOUCH</div>
    <h1 class="section-title">
      LET'S BUILD EXPERIENCES <span class="text-gold-gradient">TOGETHER.</span>
    </h1>
    <p class="section-subtitle" style="font-size: 1.15rem; max-width: 740px;">
      Have a brand, campaign, or event in mind? Let's create something meaningful together. Tim Zire Alcyone siap berdiskusi dan merancang strategi terbaik untuk brand Anda.
    </p>
  </div>
</section>

<!-- ==========================================================================
     CONTACT GRID SECTION
     ========================================================================== -->
<section class="contact-section">
  <div class="container">
    <div class="contact-grid">
      
      <!-- Contact Details & Quick Action Buttons -->
      <div class="contact-card-info">
        <div>
          <div class="section-label">DIRECT CHANNELS</div>
          <h2 style="font-family: var(--font-serif); font-size: 1.8rem; color: var(--text-white); margin-bottom: 0.5rem;">
            Informasi Kontak Resmi
          </h2>
          <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6;">
            Silakan hubungi kami melalui kanal komunikasi resmi di bawah ini atau gunakan tombol aksi cepat untuk terhubung seketika.
          </p>
        </div>

        <!-- Phone -->
        <div class="contact-item-group">
          <div class="contact-item-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
          </div>
          <div class="contact-item-details">
            <span class="contact-item-label">Telepon / WhatsApp</span>
            <span class="contact-item-val"><?= htmlspecialchars($company['contact']['phone_display']); ?></span>
            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-top: 0.5rem;">
              <a href="tel:<?= $company['contact']['phone_raw']; ?>" class="btn btn-secondary" style="padding: 0.45rem 1rem; font-size: 0.78rem;">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Now
              </a>
              <a href="<?= $company['contact']['whatsapp_url']; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="padding: 0.45rem 1rem; font-size: 0.78rem;">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                WhatsApp Chat
              </a>
            </div>
          </div>
        </div>

        <!-- Email -->
        <div class="contact-item-group">
          <div class="contact-item-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
          </div>
          <div class="contact-item-details">
            <span class="contact-item-label">Official Email</span>
            <span class="contact-item-val"><?= htmlspecialchars($company['contact']['email']); ?></span>
            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-top: 0.5rem;">
              <a href="mailto:<?= $company['contact']['email']; ?>?subject=Inquiry%20Zire%20Alcyone" class="btn btn-secondary" style="padding: 0.45rem 1rem; font-size: 0.78rem;">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path></svg>
                Email Us
              </a>
              <button type="button" class="contact-copy-btn btn-copy-info" data-copy="<?= $company['contact']['email']; ?>">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                Copy Email
              </button>
            </div>
          </div>
        </div>

        <!-- Address -->
        <div class="contact-item-group">
          <div class="contact-item-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
          </div>
          <div class="contact-item-details">
            <span class="contact-item-label">Studio & Head Office</span>
            <span class="contact-item-val" style="font-size: 0.92rem; line-height: 1.6;">
              <?= htmlspecialchars($company['contact']['address']); ?>
            </span>
            <button type="button" class="contact-copy-btn btn-copy-info" data-copy="<?= $company['contact']['address']; ?>" style="margin-top: 0.6rem;">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
              Copy Alamat
            </button>
          </div>
        </div>

      </div>

      <!-- Contact Inquiry Form -->
      <div class="contact-form-wrap">
        <div class="section-label">DIRECT INQUIRY</div>
        <h2 style="font-family: var(--font-serif); font-size: 1.8rem; color: var(--text-white); margin-bottom: 0.5rem;">
          Mulai Diskusi Proyek
        </h2>
        <p style="color: var(--text-secondary); font-size: 0.92rem; margin-bottom: 2rem;">
          Isi formulir berikut untuk memulai diskusi. Anda dapat mengirimkan langsung melalui WhatsApp atau Email resmi kami.
        </p>

        <form id="contactForm">
          <div class="form-group">
            <label for="formName" class="form-label">Nama Lengkap *</label>
            <input type="text" id="formName" class="form-input" placeholder="Masukkan nama Anda" required>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.2rem;">
            <div class="form-group">
              <label for="formEmail" class="form-label">Alamat Email *</label>
              <input type="email" id="formEmail" class="form-input" placeholder="email@perusahaan.com" required>
            </div>
            <div class="form-group">
              <label for="formCompany" class="form-label">Nama Perusahaan / Brand *</label>
              <input type="text" id="formCompany" class="form-input" placeholder="Contoh: PT Brand Maju" required>
            </div>
          </div>

          <div class="form-group">
            <label for="formService" class="form-label">Jenis Kebutuhan Layanan *</label>
            <select id="formService" class="form-select">
              <option value="Digital Campaign Management" <?= $selectedService === 'Digital Campaign Management' ? 'selected' : ''; ?>>Digital Campaign Management</option>
              <option value="Integrated Social Commerce Solution" <?= $selectedService === 'Integrated Social Commerce Solution' ? 'selected' : ''; ?>>Integrated Social Commerce Solution</option>
              <option value="Influencer & Talent Management" <?= $selectedService === 'Influencer & Talent Management' ? 'selected' : ''; ?>>Influencer & Talent Management</option>
              <option value="Content Production / TV Commercials" <?= $selectedService === 'Content Production' ? 'selected' : ''; ?>>Content Production & TVC</option>
              <option value="Event Management & Production" <?= $selectedService === 'Event Management & Production' ? 'selected' : ''; ?>>Event Management & Brand Activation</option>
              <option value="Sport Ads & Community" <?= $selectedService === 'Sport Ads' ? 'selected' : ''; ?>>Sport Ads & Specialized Activation</option>
              <option value="Konsultasi Terpadu Creative Agency">Konsultasi Terpadu Creative Agency</option>
            </select>
          </div>

          <div class="form-group">
            <label for="formMessage" class="form-label">Deskripsi Pesan / Brief Singkat *</label>
            <textarea id="formMessage" class="form-textarea" placeholder="Jelaskan kebutuhan proyek, periode waktu yang direncanakan, dan target capaian yang diharapkan..." required></textarea>
          </div>

          <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <button type="submit" data-action="wa" class="btn btn-primary" style="flex: 1; min-width: 200px;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
              <span>Kirim via WhatsApp</span>
            </button>
            <button type="submit" data-action="email" class="btn btn-secondary" style="flex: 1; min-width: 200px;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <span>Kirim via Email</span>
            </button>
          </div>

          <div style="font-size: 0.78rem; color: var(--text-muted); margin-top: 1.2rem; line-height: 1.5;">
            * Pesan akan otomatis diformat dan diteruskan ke WhatsApp atau aplikasi email resmi Zire Alcyone untuk respon langsung.
          </div>
        </form>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
