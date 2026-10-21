# ZIRE ALCYONE — Creative Agency & Event Organizer

Official Company Profile Website for **ZIRE ALCYONE** (PT Zire Alcyone Indonesia).

A modern, high-performance, and visually stunning corporate website built with **PHP**, featuring custom **Three.js WebGL 3D Liquid Wave** shader animation in an elegant **Dark Blue & Gold** aesthetic.

---

## 🌟 Key Highlights & Features

- **Tailored Design System**:
  - Premium **Dark Blue (`#070d18` / `#0b1426`)** and **Lustrous Gold (`#d4af37` / `#f0c05a`)** color palette.
  - Glassmorphic navigation bar with dynamic scroll blur and active link highlighting.
  - Custom fluid 3D ribbon wave in hero section powered by **Three.js** with interactive mouse parallax.
- **5 Core Pages**:
  1. `index.php` — Beranda (Hero 3D, brand metrics, highlight services, featured case studies, partners, CTA).
  2. `about.php` — Tentang Kami (Visi, Misi, Filosofi "Turning Vision Into Impact", core values, clients).
  3. `services.php` — 6 Pilar Layanan Utama (Event Organizer, Digital Marketing, Creative Production, Brand Activation, KOL & Influencer Management, Commercial Development).
  4. `portfolio.php` — Showcase 30+ Proyek Terverifikasi dengan filter kategori dinamis & modal studi kasus interaktif.
  5. `contact.php` — Hubungi Kami (Formulir konsultasi terintegrasi WhatsApp, detail kantor, FAQ).
- **100% Authentic Data**:
  - 30+ real client case studies from leading brands: IHC, Castrol, Gojek, Pertamina, TACO, Fox & Bunny, Gillette Venus, Jakarta E-Prix, Sharp, BRI, Blibli, dan banyak lagi.
- **Ultra Lightweight & Modular**:
  - Native PHP without database dependency (clean structured PHP data arrays in `data/`).
  - Zero external bloatware — pure vanilla CSS, optimized scripts, responsive layout (mobile, tablet, desktop).

---

## 📁 Project Directory Structure

```text
project-zire-alcyone/
├── index.php                      # Home page
├── about.php                      # About Us page
├── services.php                   # Services page
├── portfolio.php                  # Portfolio & Showcase page
├── contact.php                    # Contact & Consultation page
├── README.md                      # Documentation
├── .gitignore                     # Git ignore rules
│
├── assets/
│   ├── css/
│   │   └── style.css              # Custom styling & responsive design
│   ├── js/
│   │   ├── hero-wave.js           # Three.js 3D WebGL wave shader
│   │   ├── main.js                # UI interactivity, sticky nav & modal
│   │   └── three.min.js           # Local Three.js library
│   └── images/
│       ├── banners/               # Hero background & partners banner
│       ├── logos/                 # Official brand logo & badge
│       └── projects/              # Authentic project showcase thumbnails
│
├── components/
│   ├── header.php                 # Global navigation & metadata
│   ├── footer.php                 # Global footer & quick links
│   └── case-study-modal.php       # Interactive case study detail modal
│
├── data/
│   ├── company.php                # Company identity, contacts & metrics
│   ├── services.php               # 6 service pillars data
│   ├── portfolio.php              # 30+ project case studies data
│   └── partners.php               # Verified partner brand list
│
└── docs/
    ├── Agency & EO_ZA 2026.pdf    # Source credentials & portfolio document
    └── Prompt_Website_Zire_Alcyone.pdf # Brief & specification document
```

---

## 🚀 Running the Website Locally

Make sure PHP 7.4+ or PHP 8.x is installed on your machine.

1. **Clone the repository**:
   ```bash
   git clone https://github.com/jevontamba8-cyber/Zire-Alcyone.git
   cd Zire-Alcyone
   ```

2. **Start the local PHP server**:
   ```bash
   php -S localhost:8000
   ```

3. **Open in your browser**:
   Navigate to [http://localhost:8000](http://localhost:8000)

---

## 🎨 Color Palette & Typography

- **Primary Dark**: `#070d18` / `#0b1426` (Deep Midnight Blue)
- **Secondary Dark**: `#121e36` (Rich Navy Surface)
- **Primary Accent**: `#d4af37` / `#f0c05a` (Lustrous Royal Gold)
- **Typography**: `Plus Jakarta Sans` / `Outfit` & `Cinzel` / `Playfair Display`

---

© 2026 PT Zire Alcyone Indonesia. All Rights Reserved.
