<!-- Case Study Interactive Modal -->
<div class="modal-backdrop" id="caseStudyModal" aria-hidden="true" role="dialog" aria-labelledby="modalTitle">
  <div class="modal-dialog">
    <button class="modal-close-btn" id="modalCloseBtn" aria-label="Tutup Dialog">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg>
    </button>

    <div class="modal-header-hero">
      <img src="assets/images/banners/hero_bg.jpg" alt="Case Study Visual" class="modal-hero-img" id="modalImg">
      <div class="modal-hero-gradient"></div>
    </div>

    <div class="modal-body-content">
      <div class="modal-meta-row">
        <span class="badge-gold" id="modalCategory">Digital Campaign</span>
        <span class="project-period" id="modalPeriod"></span>
        <span class="project-period" id="modalClient" style="color: var(--gold-light);"></span>
      </div>

      <h2 class="modal-project-title" id="modalTitle">Project Title</h2>
      <div class="modal-project-subtitle" id="modalSubtitle">Subjudul Proyek</div>

      <p class="modal-project-desc" id="modalDesc" style="color: var(--text-secondary); line-height: 1.7; font-size: 1.05rem;">
        Deskripsi lengkap case study proyek.
      </p>

      <div class="modal-grid-details">
        <div class="modal-details-left">
          <div class="modal-block-heading">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="9 11 12 14 22 4"></polyline>
              <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
            </svg>
            Scope of Works
          </div>
          <ul class="modal-scope-list" id="modalScope">
            <!-- Dynamic scope items -->
          </ul>

          <div style="margin-top: 2rem;">
            <div class="modal-block-heading">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                <line x1="8" y1="21" x2="16" y2="21"></line>
                <line x1="12" y1="17" x2="12" y2="21"></line>
              </svg>
              Platforms & Channels
            </div>
            <div class="modal-platforms-wrap" id="modalPlatforms">
              <!-- Dynamic platform badges -->
            </div>
          </div>
        </div>

        <div class="modal-details-right">
          <div class="modal-block-heading">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="8" r="7"></circle>
              <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
            </svg>
            Performance Highlights
          </div>
          <div class="modal-metrics-grid" id="modalMetrics">
            <!-- Dynamic metric cards -->
          </div>

          <div style="margin-top: 2rem; background: rgba(14, 25, 60, 0.45); border: 1px solid var(--gold-border); border-radius: var(--radius-md); padding: 1.5rem; text-align: center;">
            <div style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 1rem;">
              Tertarik menciptakan dampak serupa untuk brand Anda?
            </div>
            <a href="contact.php" class="btn btn-primary" style="width: 100%;">
              Diskusikan Campaign Anda
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
