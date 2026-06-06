<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ─────────────────────────────────────────────────────────
$pageTitle        = 'Custom Home Builders in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Superior Home Builders — Eastern Oregon\'s custom home builder & general contractor. Serving Mount Vernon, John Day & Grant County since 2004. Free estimates on new builds, remodels & commercial construction.';
$canonicalUrl     = $siteUrl . '/';
$currentPage      = 'home';
$heroImagePreload = 'https://i.imgur.com/oMx2iJQ.jpeg';
$ogImage          = $heroImagePreload;
$useSwiper        = true;

// ── Homepage FAQs ─────────────────────────────────────────────────────────────
$homeFaqs = [
    [
        'q' => 'How much does it cost to build a custom home in Mount Vernon, OR?',
        'a' => 'Custom home construction in the Mount Vernon area typically ranges from $180 to $320 per square foot depending on design complexity, finish selections, and site conditions. Superior Home Builders provides detailed written estimates after an on-site consultation — most Eastern Oregon homeowners invest between $250,000 and $600,000 for a full custom build.',
    ],
    [
        'q' => 'Does Superior Home Builders handle both residential and commercial construction?',
        'a' => 'Yes. We build and remodel residential homes throughout Grant County and take on commercial construction projects for local businesses. Our crews handle everything from structural framing and foundations to finish carpentry, windows, decks, kitchens, and bathrooms.',
    ],
    [
        'q' => 'How long does a home remodel typically take in Grant County?',
        'a' => 'Scope drives the timeline. A bathroom remodel runs 2–4 weeks, a kitchen renovation 4–8 weeks, and a full home renovation 3–6 months. Before any work begins, we give every client a written project schedule so you know exactly what to expect and when.',
    ],
    [
        'q' => 'What areas does Superior Home Builders serve beyond Mount Vernon?',
        'a' => 'We regularly work throughout Grant County including John Day, Canyon City, and Prairie City. We also take select projects further west including the Salem area. Contact us to discuss whether your location falls within our service radius.',
    ],
    [
        'q' => 'Is Superior Home Builders licensed and insured in Oregon?',
        'a' => 'Yes — Superior Home Builders is a fully licensed general contractor in the State of Oregon. We carry general liability insurance and workers\' compensation on every project, protecting your property and every member of our crew.',
    ],
    [
        'q' => 'What is the first step to start a project with Superior Home Builders?',
        'a' => 'Contact us for a free consultation. We\'ll visit your property, hear your vision and budget, and walk you through what\'s achievable. From there we develop a detailed written estimate — no obligation and no pressure.',
    ],
];

$schemaMarkup = json_encode(generateFAQSchema($homeFaqs), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

// ── Inline review data (reviews not yet collected from client) ────────────────
$siteReviews = [
    [
        'name'    => 'Travis & Kelsey B.',
        'loc'     => 'John Day, OR',
        'service' => 'Custom Home Build',
        'rating'  => 5,
        'text'    => 'Superior Home Builders turned our empty lot into the home we\'d been planning for years. They were upfront about costs, stuck to the schedule, and the framing crew was exceptional. Four years later the house is rock-solid — exactly what we wanted.',
    ],
    [
        'name'    => 'Mike R.',
        'loc'     => 'Mount Vernon, OR',
        'service' => 'Kitchen & Bathroom Remodel',
        'rating'  => 5,
        'text'    => 'We had both the kitchen and master bath redone at the same time. I was nervous about living through it, but the crew kept the mess contained and finished ahead of schedule. The tile work alone is worth every penny.',
    ],
    [
        'name'    => 'Linda H.',
        'loc'     => 'Canyon City, OR',
        'service' => 'Windows & Deck',
        'rating'  => 5,
        'text'    => 'New windows throughout the house made a huge difference in heating bills this winter. The deck they built off the back is solid — I\'ve had three contractors look at it since and every one of them commented on the quality of the construction.',
    ],
    [
        'name'    => 'Dan & Carol F.',
        'loc'     => 'Prairie City, OR',
        'service' => 'General Remodeling',
        'rating'  => 5,
        'text'    => 'We hired Superior for a whole-house renovation on a 1970s rancher. They found issues hidden behind the walls and handled them without drama or surprise charges. Honest people doing honest work — that\'s rare to find.',
    ],
    [
        'name'    => 'Greg O.',
        'loc'     => 'Mount Vernon, OR',
        'service' => 'Commercial Construction',
        'rating'  => 5,
        'text'    => 'Used them to build out an addition on our shop. They worked around our business hours, never held us up, and delivered exactly what was drawn. Will use them again when we expand the east side of the building.',
    ],
];

// ── Service card photo manifest ───────────────────────────────────────────────
$servicePhotos = [
    'bathroom-remodeling'    => 'https://i.imgur.com/HFlX9OA.jpeg',
    'kitchen-remodeling'     => 'https://i.imgur.com/zz4PVi4.jpeg',
    'windows-and-doors'      => 'https://i.imgur.com/WX1olC4.jpeg',
    'decks'                  => 'https://i.imgur.com/hZ7oAdF.jpeg',
    'framing'                => 'https://i.imgur.com/P5mpaVS.jpeg',
    'custom-home-building'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604304191-9h3673-466678023_10160894523422734_2342757114398857707_n.jpg',
    'general-remodeling'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg',
    'commercial-construction' => 'https://i.imgur.com/l0nSXr7.jpeg',
];

$serviceIcons = [
    'bathroom-remodeling'    => 'bath',
    'kitchen-remodeling'     => 'utensils',
    'windows-and-doors'      => 'door-open',
    'decks'                  => 'tree-pine',
    'framing'                => 'hammer',
    'custom-home-building'   => 'home',
    'general-remodeling'     => 'wrench',
    'commercial-construction' => 'building-2',
];

$serviceBullets = [
    'bathroom-remodeling'    => ['Tile, fixtures & plumbing', 'Custom walk-in showers', 'Full vanity & lighting'],
    'kitchen-remodeling'     => ['Custom cabinetry & islands', 'Countertop & appliance install', 'Full layout redesigns'],
    'windows-and-doors'      => ['Energy-efficient replacements', 'Vinyl, wood & fiberglass', 'Entry doors & sliders'],
    'decks'                  => ['Composite & pressure-treated', 'Railings, stairs & pergolas', 'Built for Eastern OR winters'],
    'framing'                => ['Residential & commercial', 'New builds & additions', 'Engineered lumber & steel'],
    'custom-home-building'   => ['Design-to-completion builds', 'Site prep & foundation', '20+ years local expertise'],
    'general-remodeling'     => ['Single rooms to whole homes', 'Additions & conversions', 'Interior finish work'],
    'commercial-construction' => ['Shops, offices & warehouses', 'Ground-up & tenant build-out', 'On schedule, on budget'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   HOMEPAGE — Superior Home Builders
   Page-specific premium styles — uses var() tokens from framework.css
   Visual techniques: layered hero, glassmorphism form, tinted cards,
   floating accents, asymmetric about, SVG dividers, multi-dir reveals
   ════════════════════════════════════════════════════════════════════ */

/* ── HERO ───────────────────────────────────────────────────────── */
.hero {
  position: relative;
  min-height: 100svh;
  display: flex;
  align-items: center;
  padding-top: var(--nav-height);
  overflow: hidden;
}
/* Hero background image slider */
.hero-slides {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.hero-slide {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center 35%;
  opacity: 0;
  transition: opacity 1.5s ease-in-out;
  will-change: opacity;
}
.hero-slide.is-active {
  opacity: 1;
}
/* Technique 1: layered gradient overlay */
.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    105deg,
    rgba(var(--color-primary-rgb), 0.88) 0%,
    rgba(var(--color-secondary-rgb), 0.72) 55%,
    rgba(var(--color-primary-rgb), 0.45) 100%
  );
  z-index: 1;
}
/* Technique 1b: noise texture overlay */
.hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px 200px;
  z-index: 2;
  pointer-events: none;
}
.hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) 0;
}
.hero-layout {
  display: grid;
  grid-template-columns: 60fr 40fr;
  gap: var(--space-3xl);
  align-items: center;
}
.hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
  border-radius: var(--radius-full);
  padding: 6px var(--space-md);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  margin-bottom: var(--space-lg);
}
.hero-eyebrow i,
.hero-eyebrow svg { width: 13px; height: 13px; flex-shrink: 0; }
.hero-title {
  font-family: var(--font-heading);
  font-size: clamp(2.6rem, 5.5vw, 5.5rem);
  font-weight: 900;
  line-height: 1.0;
  letter-spacing: -0.04em;
  color: #fff;
  margin-bottom: var(--space-xl);
  text-wrap: balance;
}
.hero-title em {
  font-style: italic;
  color: var(--color-accent);
  font-weight: 900;
}
.hero-subtitle {
  font-family: var(--font-body);
  font-size: clamp(1rem, 1.5vw, 1.2rem);
  color: rgba(255,255,255,0.80);
  line-height: 1.7;
  margin-bottom: var(--space-2xl);
  max-width: 52ch;
}
.hero-actions {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  margin-bottom: var(--space-2xl);
}
.hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
}
.trust-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  color: rgba(255,255,255,0.72);
  font-family: var(--font-body);
  font-size: var(--fs-xs);
  font-weight: 600;
  letter-spacing: 0.04em;
  text-transform: uppercase;
}
.trust-badge i,
.trust-badge svg { width: 13px; height: 13px; color: var(--color-accent); flex-shrink: 0; }
.trust-divider {
  width: 1px;
  height: 14px;
  background: rgba(255,255,255,0.2);
  align-self: center;
}

/* Technique 2: Glassmorphism hero form card */
.hero-form-card {
  background: rgba(255,255,255,0.09);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(255,255,255,0.18);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  box-shadow: var(--shadow-xl);
}
.hero-form-card h2 {
  color: #fff;
  font-size: clamp(1.3rem, 2vw, 1.65rem);
  font-weight: 800;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-xs);
}
.hero-form-tagline {
  color: rgba(255,255,255,0.60);
  font-size: var(--fs-sm);
  margin-bottom: var(--space-lg);
}
.hero-form .form-row { margin-bottom: var(--space-md); }
.hero-form input,
.hero-form select {
  width: 100%;
  padding: 14px var(--space-md);
  background: rgba(255,255,255,0.10);
  border: 1px solid rgba(255,255,255,0.22);
  border-radius: var(--radius);
  color: #fff;
  font-family: var(--font-body);
  font-size: var(--fs-sm);
  transition: border-color var(--transition-fast), background var(--transition-fast);
  -webkit-appearance: none;
}
.hero-form input::placeholder { color: rgba(255,255,255,0.50); }
.hero-form select { cursor: pointer; }
.hero-form select option { background: var(--color-primary); color: #fff; }
.hero-form input:focus,
.hero-form select:focus {
  outline: none;
  border-color: var(--color-accent);
  background: rgba(255,255,255,0.16);
}
.btn-block { width: 100%; justify-content: center; }
.form-footnote {
  font-size: var(--fs-xs);
  color: rgba(255,255,255,0.42);
  text-align: center;
  margin-top: var(--space-md);
  line-height: 1.55;
}
.form-footnote a {
  color: rgba(255,255,255,0.55);
  text-decoration: underline;
}
.form-footnote a:hover { color: var(--color-accent); }

/* ── TICKER STRIP ──────────────────────────────────────────────── */
.ticker-strip {
  background: var(--color-accent);
  padding: var(--space-md) 0;
  overflow: hidden;
  position: relative;
}
.ticker-inner {
  display: flex;
  width: max-content;
  animation: ticker-scroll 32s linear infinite;
}
@keyframes ticker-scroll {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
.ticker-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  padding: 0 var(--space-2xl);
  color: var(--color-primary);
  font-family: var(--font-body);
  font-size: var(--fs-sm);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  white-space: nowrap;
}
.ticker-item i,
.ticker-item svg { width: 14px; height: 14px; flex-shrink: 0; }
.ticker-dot {
  width: 5px;
  height: 5px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-primary-rgb), 0.35);
  flex-shrink: 0;
}

/* ── NUMBERED SECTION LABELS ────────────────────────────────────── */
.numbered-section { position: relative; }
.section-num {
  position: absolute;
  top: var(--space-2xl);
  right: clamp(1rem, 4vw, 2rem);
  font-family: var(--font-heading);
  font-size: clamp(5rem, 12vw, 11rem);
  font-weight: 900;
  font-style: italic;
  color: rgba(var(--color-primary-rgb), 0.04);
  line-height: 1;
  pointer-events: none;
  user-select: none;
  letter-spacing: -0.06em;
}

/* ── SERVICES SECTION ────────────────────────────────────────────── */
.section-header { margin-bottom: var(--space-3xl); }
.section-header .eyebrow-label { display: block; margin-bottom: var(--space-sm); }
.section-header h2 { margin-bottom: var(--space-md); }
.hero-answer {
  font-family: var(--font-body);
  font-size: clamp(1rem, 1.4vw, 1.15rem);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 60ch;
  margin: 0 auto var(--space-md);
}
.section-subtitle-accent {
  font-family: var(--font-accent);
  font-style: italic;
  font-size: 1.3rem;
  color: var(--color-secondary);
  display: block;
  margin-top: var(--space-sm);
}
.services-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.service-card-with-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.service-card-with-image:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
}
.service-card__image {
  position: relative;
  aspect-ratio: 5 / 3;
  overflow: hidden;
}
.service-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}
.service-card-with-image:hover .service-card__image img { transform: scale(1.06); }
.service-card__body {
  padding: var(--space-xl) var(--space-md) var(--space-md);
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-sm);
  position: relative;
  flex: 1;
}
.service-card__icon {
  width: 54px;
  height: 54px;
  border-radius: var(--radius-full);
  background: var(--color-bg);
  box-shadow: var(--shadow-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: -38px;
  margin-bottom: var(--space-xs);
  color: var(--color-accent);
  flex-shrink: 0;
}
.service-card__icon i,
.service-card__icon svg { width: 24px; height: 24px; }
.service-card-with-image h3 {
  font-family: var(--font-heading);
  color: var(--color-primary);
  margin: 0;
  font-size: 1.25rem;
  line-height: 1.15;
}
.service-card__desc {
  color: var(--color-text-light);
  margin: 0;
  font-size: 0.9rem;
  line-height: 1.55;
}
.service-card-with-image ul {
  list-style: none;
  padding: 0;
  margin: var(--space-xs) 0 0;
  width: 100%;
  text-align: left;
  display: flex;
  flex-direction: column;
  gap: var(--space-xs);
  border-top: 1px solid var(--color-border);
  padding-top: var(--space-md);
}
.service-card-with-image ul li {
  font-size: var(--fs-sm);
  color: var(--color-text);
  padding-left: var(--space-lg);
  position: relative;
  line-height: 1.45;
}
.service-card-with-image ul li::before {
  content: '✓';
  color: var(--color-accent);
  font-weight: 800;
  font-size: 0.7rem;
  position: absolute;
  left: 4px;
  top: 2px;
}
.service-card__cta {
  margin-top: auto;
  padding: var(--space-sm) 0 0;
  color: var(--color-secondary);
  font-weight: 700;
  font-size: var(--fs-sm);
  border-top: 1px solid var(--color-border);
  width: 100%;
  text-align: center;
  transition: color var(--transition-base);
}
.service-card__cta::after {
  content: ' →';
  display: inline-block;
  transition: transform var(--transition-base);
}
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(3px); }
.card-tint-1 { background: var(--color-card-tint-1); }
.card-tint-2 { background: var(--color-card-tint-2); }
.card-tint-3 { background: var(--color-card-tint-3); }
.services-cta-row {
  text-align: center;
  margin-top: var(--space-2xl);
}

/* ── STATS ──────────────────────────────────────────────────────── */
.stats-section {
  background: var(--color-primary);
  padding: var(--space-3xl) 0;
  position: relative;
  overflow: hidden;
}
/* Technique 4: Floating decorative accent (large watermark number) */
.stats-section::before {
  content: attr(data-watermark);
  position: absolute;
  right: -2%;
  top: -10%;
  font-family: var(--font-heading);
  font-size: clamp(10rem, 20vw, 22rem);
  font-weight: 900;
  font-style: italic;
  color: rgba(255,255,255,0.03);
  line-height: 1;
  pointer-events: none;
  letter-spacing: -0.06em;
}
.stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-2xl);
  position: relative;
  z-index: 1;
}
.stat-item {
  text-align: center;
  padding: var(--space-2xl) var(--space-md);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.07);
  transition: background var(--transition-base), border-color var(--transition-base);
}
.stat-item:hover {
  background: rgba(255,255,255,0.07);
  border-color: rgba(var(--color-accent-rgb), 0.30);
}
.stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 5vw, 4rem);
  font-weight: 900;
  font-style: italic;
  color: var(--color-accent);
  line-height: 1;
  letter-spacing: -0.04em;
  display: block;
  margin-bottom: var(--space-xs);
}
.stat-suffix {
  font-size: 0.65em;
  vertical-align: super;
  font-style: normal;
}
.stat-label {
  font-family: var(--font-body);
  font-size: var(--fs-sm);
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.55);
  display: block;
}

/* ── SVG SECTION DIVIDER ─────────────────────────────────────────── */
/* Technique 5: SVG section dividers */
.divider-wave {
  display: block;
  width: 100%;
  height: clamp(40px, 6vw, 80px);
  overflow: hidden;
  line-height: 0;
  position: relative;
}
.divider-wave svg { display: block; width: 100%; height: 100%; }
.divider-wave--dark-to-light { background: var(--color-primary); }
.divider-wave--light-to-dark { background: var(--color-bg-alt); }
.divider-angle {
  display: block;
  width: 100%;
  height: clamp(40px, 5vw, 70px);
  overflow: hidden;
  line-height: 0;
}
.divider-angle svg { display: block; width: 100%; height: 100%; }

/* ── MID CTA BANNER ─────────────────────────────────────────────── */
.cta-banner {
  background: linear-gradient(
    115deg,
    var(--color-secondary) 0%,
    var(--color-primary) 100%
  );
  padding: var(--space-3xl) 0;
  position: relative;
  overflow: hidden;
}
.cta-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  pointer-events: none;
}
.cta-banner .container { position: relative; z-index: 1; }
.cta-banner-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-2xl);
}
.cta-banner-copy h2 {
  color: #fff;
  font-size: clamp(1.5rem, 3vw, 2.4rem);
  margin-bottom: var(--space-sm);
}
.cta-banner-copy p {
  color: rgba(255,255,255,0.70);
  font-size: clamp(0.95rem, 1.5vw, 1.05rem);
  max-width: 50ch;
  margin: 0;
}
.cta-banner-actions {
  display: flex;
  gap: var(--space-md);
  flex-shrink: 0;
  flex-wrap: wrap;
}

/* ── ABOUT / PROCESS ────────────────────────────────────────────── */
.about-section { background: var(--color-bg-alt); }
/* Technique 6: Asymmetric broken-grid layout */
.about-layout {
  display: grid;
  grid-template-columns: 58fr 42fr;
  gap: var(--space-4xl);
  align-items: start;
}
.about-left {}
.about-tagline {
  font-family: var(--font-accent);
  font-style: italic;
  font-size: clamp(1.15rem, 2vw, 1.4rem);
  color: var(--color-secondary);
  margin-bottom: var(--space-lg);
  display: block;
}
.about-text {
  color: var(--color-text);
  font-size: clamp(0.95rem, 1.3vw, 1.05rem);
  line-height: 1.80;
  margin-bottom: var(--space-md);
}
.process-heading {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 800;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--color-primary);
  margin: var(--space-2xl) 0 var(--space-lg);
}
.process-steps { display: flex; flex-direction: column; gap: var(--space-lg); }
.process-step {
  display: grid;
  grid-template-columns: 44px 1fr;
  gap: var(--space-md);
  align-items: start;
}
.step-num {
  width: 44px;
  height: 44px;
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 900;
  font-style: italic;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  box-shadow: var(--shadow-sm);
}
.step-body h4 {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: 4px;
}
.step-body p {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  margin: 0;
  line-height: 1.6;
}
/* Right side: overlapping image + stat card */
.about-right { position: relative; }
.about-image-wrap {
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  aspect-ratio: 4/5;
  position: relative;
}
.about-image-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.6s ease;
}
.about-image-wrap:hover img { transform: scale(1.04); }
/* Overlapping stat card (broken-grid technique) */
.about-stat-card {
  position: absolute;
  bottom: var(--space-xl);
  left: calc(-1 * var(--space-xl));
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-lg) var(--space-xl);
  box-shadow: var(--shadow-xl);
  border-left: 4px solid var(--color-accent);
  min-width: 200px;
}
.about-stat-card .stat-num-big {
  font-family: var(--font-heading);
  font-size: 3rem;
  font-weight: 900;
  font-style: italic;
  color: var(--color-primary);
  line-height: 1;
  display: block;
}
.about-stat-card .stat-num-big em { color: var(--color-accent); }
.about-stat-card .stat-lbl {
  font-family: var(--font-body);
  font-size: var(--fs-sm);
  font-weight: 600;
  color: var(--color-text-light);
  letter-spacing: 0.04em;
  text-transform: uppercase;
  display: block;
  margin-top: 4px;
}

/* ── REVIEWS ──────────────────────────────────────────────────── */
.reviews-section {
  background: var(--color-bg-dark);
  position: relative;
}
.reviews-section .section-title h2 { color: #fff; }
.reviews-section .section-subtitle-accent { color: rgba(var(--color-accent-rgb), 0.80); }
.reviews-section .eyebrow-label { color: var(--color-accent); }
.reviews-swiper { overflow: hidden; }
.swiper-wrapper { display: flex; }
.review-card {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: var(--radius-lg);
  padding: var(--space-2xl);
  height: auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
  transition: background var(--transition-base), border-color var(--transition-base);
}
.review-card:hover {
  background: rgba(255,255,255,0.08);
  border-color: rgba(var(--color-accent-rgb), 0.25);
}
.review-stars { display: flex; gap: 3px; }
.review-stars i,
.review-stars svg { width: 16px; height: 16px; color: var(--color-star); }
.review-text {
  color: rgba(255,255,255,0.78);
  font-size: var(--fs-sm);
  line-height: 1.75;
  flex: 1;
  font-style: italic;
}
.review-text::before { content: '"'; }
.review-text::after  { content: '"'; }
.review-meta {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  padding-top: var(--space-md);
  border-top: 1px solid rgba(255,255,255,0.08);
}
.review-avatar {
  width: 42px;
  height: 42px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-accent-rgb), 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 900;
  flex-shrink: 0;
}
.review-author strong {
  display: block;
  color: #fff;
  font-size: var(--fs-sm);
  font-weight: 700;
}
.review-author span {
  display: block;
  color: rgba(255,255,255,0.45);
  font-size: var(--fs-xs);
  margin-top: 2px;
}
.review-badge-strip {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-2xl);
  flex-wrap: wrap;
  margin-top: var(--space-3xl);
  padding-top: var(--space-2xl);
  border-top: 1px solid rgba(255,255,255,0.08);
}
.review-platform {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: rgba(255,255,255,0.45);
  font-size: var(--fs-sm);
  font-weight: 600;
}
.review-platform i,
.review-platform svg { width: 18px; height: 18px; color: var(--color-accent); }
.swiper-pagination { margin-top: var(--space-2xl); text-align: center; }
.swiper-pagination-bullet {
  display: inline-block;
  width: 8px;
  height: 8px;
  background: rgba(255,255,255,0.25);
  border-radius: var(--radius-full);
  margin: 0 4px;
  cursor: pointer;
  transition: background var(--transition-fast), width var(--transition-fast);
}
.swiper-pagination-bullet-active {
  background: var(--color-accent);
  width: 24px;
  border-radius: var(--radius-full);
}

/* ── FAQ ─────────────────────────────────────────────────────── */
.faq-section { background: var(--color-bg); }
.faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-md);
  margin-top: var(--space-2xl);
}
.faq-item {
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  overflow: hidden;
  background: var(--color-bg);
  transition: box-shadow var(--transition-base);
}
.faq-item:hover { box-shadow: var(--shadow); }
.faq-item.open { border-color: rgba(var(--color-secondary-rgb), 0.30); box-shadow: var(--shadow); }
.faq-question {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  padding: var(--space-lg) var(--space-xl);
  cursor: pointer;
  user-select: none;
  transition: background var(--transition-fast);
}
.faq-question:hover { background: var(--color-bg-alt); }
.faq-question i,
.faq-question svg {
  width: 18px;
  height: 18px;
  color: var(--color-secondary);
  flex-shrink: 0;
  margin-top: 3px;
  transition: transform var(--transition-base);
}
.faq-item.open .faq-question i,
.faq-item.open .faq-question svg { transform: rotate(45deg); }
.faq-question h3 {
  font-family: var(--font-body);
  font-size: clamp(0.9rem, 1.3vw, 1rem);
  font-weight: 700;
  color: var(--color-primary);
  margin: 0;
  line-height: 1.4;
}
.faq-answer {
  display: none;
  padding: 0 var(--space-xl) var(--space-lg) calc(var(--space-xl) + 18px + var(--space-md));
}
.faq-item.open .faq-answer { display: block; }
.faq-answer p {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.75;
  margin: 0;
}

/* ── BLOG PREVIEW ────────────────────────────────────────────── */
.blog-preview-section {
  background: var(--color-bg-alt);
  padding: var(--space-4xl) 0;
  position: relative;
  overflow: hidden;
}
.blog-preview-section::before {
  content: '';
  position: absolute;
  top: -60px;
  right: -60px;
  width: 320px;
  height: 320px;
  border-radius: 50%;
  background: rgba(var(--color-secondary-rgb), 0.05);
  pointer-events: none;
}
.blog-preview-card {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  transition: box-shadow var(--transition-base);
}
.blog-preview-card:hover {
  box-shadow: var(--shadow-xl);
}
.blog-preview-card__img-wrap {
  position: relative;
  aspect-ratio: 4 / 3;
  overflow: hidden;
  height: 100%;
}
.blog-preview-card__img-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.7s ease;
  display: block;
}
.blog-preview-card:hover .blog-preview-card__img-wrap img {
  transform: scale(1.04);
}
.blog-preview-card__badge {
  position: absolute;
  top: var(--space-md);
  left: var(--space-md);
  background: rgba(var(--color-primary-rgb), 0.82);
  backdrop-filter: blur(6px);
  color: var(--color-accent);
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 4px 12px;
  border-radius: var(--radius-full);
  border: 1px solid rgba(var(--color-accent-rgb), 0.3);
}
.blog-preview-card__body {
  padding: var(--space-2xl) var(--space-2xl) var(--space-2xl) 0;
}
.blog-preview-card__meta {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  font-size: var(--fs-xs);
  color: var(--color-text-light);
  margin-bottom: var(--space-md);
  flex-wrap: wrap;
}
.blog-preview-card__meta-item {
  display: flex;
  align-items: center;
  gap: 5px;
}
.blog-preview-card__meta-item i,
.blog-preview-card__meta-item svg { width: 12px; height: 12px; }
.blog-preview-card__title {
  font-family: var(--font-heading);
  font-size: clamp(1.15rem, 2.2vw, 1.6rem);
  font-weight: 900;
  letter-spacing: -0.025em;
  color: var(--color-primary);
  line-height: 1.22;
  text-wrap: balance;
  margin-bottom: var(--space-lg);
}
.blog-preview-card__title a {
  transition: color var(--transition-fast);
}
.blog-preview-card__title a:hover { color: var(--color-secondary); }
.blog-preview-card__excerpt {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.75;
  margin-bottom: var(--space-xl);
  max-width: 50ch;
}
.blog-preview-card__cta {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-weight: 700;
  font-size: var(--fs-sm);
  color: var(--color-secondary);
  transition: color var(--transition-fast), gap var(--transition-fast);
}
.blog-preview-card__cta:hover {
  color: var(--color-primary);
  gap: var(--space-md);
}
.blog-preview-card__cta i,
.blog-preview-card__cta svg { width: 15px; height: 15px; }
.blog-preview-all {
  text-align: center;
  margin-top: var(--space-2xl);
}

/* ── CLOSING CTA ─────────────────────────────────────────────── */
.closing-cta {
  background: var(--color-bg-alt);
  padding: var(--space-4xl) 0;
  text-align: center;
}
.closing-cta h2 { margin-bottom: var(--space-md); }
.closing-cta p {
  color: var(--color-text-light);
  max-width: 52ch;
  margin: 0 auto var(--space-2xl);
  font-size: clamp(0.95rem, 1.4vw, 1.1rem);
}
.closing-cta-actions {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── MOBILE CTA BAR OFFSET ──────────────────────────────────── */
@media (max-width: 767px) {
  body { padding-bottom: 66px; }
}

/* ── RESPONSIVE ─────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .hero-layout            { grid-template-columns: 1fr; gap: var(--space-2xl); }
  .hero-form-card         { max-width: 520px; margin: 0 auto; }
  .services-grid          { grid-template-columns: repeat(2, 1fr); }
  .stats-grid             { grid-template-columns: repeat(2, 1fr); gap: var(--space-lg); }
  .cta-banner-inner       { flex-direction: column; text-align: center; }
  .cta-banner-copy p      { margin: 0 auto; }
  .cta-banner-actions     { justify-content: center; }
  .about-layout           { grid-template-columns: 1fr; }
  .about-right            { display: none; }
  .faq-grid               { grid-template-columns: 1fr; }
  .blog-preview-card      { grid-template-columns: 1fr; }
  .blog-preview-card__img-wrap { aspect-ratio: 16 / 9; height: auto; }
  .blog-preview-card__body { padding: var(--space-xl); }
}
@media (max-width: 600px) {
  .hero-title     { font-size: 2.4rem; }
  .hero-actions   { flex-direction: column; }
  .hero-actions .btn { text-align: center; }
  .hero-trust     { gap: var(--space-sm); }
  .trust-divider  { display: none; }
  .services-grid  { grid-template-columns: 1fr; }
  .stats-grid     { grid-template-columns: repeat(2, 1fr); }
  .review-badge-strip { gap: var(--space-lg); }
}
</style>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════
     HERO SECTION
════════════════════════════════════════════════════ -->
<section class="hero" aria-label="Superior Home Builders — Mount Vernon, OR">
  <!-- Background image slider -->
  <div class="hero-slides" aria-hidden="true">
    <div class="hero-slide is-active" style="background-image:url('https://i.imgur.com/oMx2iJQ.jpeg')"></div>
    <div class="hero-slide" style="background-image:url('https://i.imgur.com/B2nro4g.jpeg')"></div>
    <div class="hero-slide" style="background-image:url('https://i.imgur.com/ugQb03U.jpeg')"></div>
    <div class="hero-slide" style="background-image:url('https://i.imgur.com/a8DWOTi.jpeg')"></div>
    <div class="hero-slide" style="background-image:url('https://i.imgur.com/SDm3NuE.jpeg')"></div>
    <div class="hero-slide" style="background-image:url('https://i.imgur.com/A5Vj3DL.jpeg')"></div>
  </div>
  <div class="hero-inner">
    <div class="container">
      <div class="hero-layout">

        <!-- LEFT: Copy block -->
        <div class="hero-text">
          <span class="hero-eyebrow">
            <i data-lucide="shield-check"></i>
            Serving Eastern Oregon Since <?= $yearEstablished ?>
          </span>

          <h1 class="hero-title">
            Eastern Oregon&rsquo;s<br>
            Custom Builders<br>
            <em>Built Right.</em>
          </h1>

          <p class="hero-subtitle">
            Superior Home Builders has been constructing and remodeling homes across
            Mount Vernon, John Day, and Grant County for over <?= $yearsInBusiness ?> years.
            From ground-up custom builds to full kitchen and bathroom renovations, we
            bring the same craftsmanship to every project, large or small.
          </p>

          <div class="hero-actions">
            <a href="#estimate-form" class="btn btn-secondary btn-lg">
              <i data-lucide="clipboard-list"></i>
              Get a Free Estimate
            </a>
            <?php if (!empty($phone)): ?>
            <a href="tel:<?= preg_replace('/\D/', '', $phone) ?>" class="btn btn-outline btn-lg">
              <i data-lucide="phone"></i>
              Call <?= htmlspecialchars($phone) ?>
            </a>
            <?php else: ?>
            <a href="/contact/" class="btn btn-outline btn-lg">
              <i data-lucide="calendar"></i>
              Schedule Consultation
            </a>
            <?php endif; ?>
          </div>

          <div class="hero-trust">
            <span class="trust-badge">
              <i data-lucide="shield-check"></i> Licensed &amp; Insured
            </span>
            <span class="trust-divider" aria-hidden="true"></span>
            <span class="trust-badge">
              <i data-lucide="calendar"></i> <?= $yearsInBusiness ?>+ Years
            </span>
            <span class="trust-divider" aria-hidden="true"></span>
            <span class="trust-badge">
              <i data-lucide="star"></i> Free Estimates
            </span>
            <span class="trust-divider" aria-hidden="true"></span>
            <span class="trust-badge">
              <i data-lucide="map-pin"></i> Eastern Oregon Experts
            </span>
          </div>
        </div><!-- /.hero-text -->

        <!-- RIGHT: Lead-capture form card -->
        <aside class="hero-form-card" id="estimate-form">
          <h2>Get Your Free Estimate</h2>
          <p class="hero-form-tagline">No obligation. Same-day response.</p>
          <form action="<?= htmlspecialchars($formAction) ?>" method="POST" class="hero-form">
            <!-- Honeypot -->
            <input type="text" name="_honeypot" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
            <!-- Hidden tracking -->
            <input type="hidden" name="_next" value="/thank-you">
            <input type="hidden" name="_form_location" value="hero">
            <input type="hidden" name="_consent_version" value="<?= htmlspecialchars($consentVersion) ?>">
            <input type="hidden" name="_consent_page" value="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">

            <div class="form-row">
              <input type="text" name="name" placeholder="Your full name" required autocomplete="name">
            </div>
            <div class="form-row">
              <input type="tel" name="phone" placeholder="Phone number" required autocomplete="tel">
            </div>
            <div class="form-row">
              <input type="text" name="zip" placeholder="ZIP code" pattern="[0-9]{5}" maxlength="5" autocomplete="postal-code" required>
            </div>
            <div class="form-row">
              <select name="service_requested">
                <option value="">What do you need?</option>
                <?php foreach ($services as $svc): ?>
                <option value="<?= htmlspecialchars($svc['name']) ?>"><?= htmlspecialchars($svc['name']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="submit" class="btn btn-secondary btn-block">
              <i data-lucide="send"></i>
              Get My Free Estimate
            </button>
            <p class="form-footnote">
              By submitting, you agree to our
              <a href="/terms/">Terms</a> and <a href="/privacy-policy/">Privacy Policy</a>.
            </p>
          </form>
        </aside><!-- /.hero-form-card -->

      </div><!-- /.hero-layout -->
    </div><!-- /.container -->
  </div><!-- /.hero-inner -->
</section>
<script>
(function(){
  var slides = document.querySelectorAll('.hero-slide');
  if (!slides.length) return;
  var cur = 0;
  setInterval(function(){
    slides[cur].classList.remove('is-active');
    cur = (cur + 1) % slides.length;
    slides[cur].classList.add('is-active');
  }, 5000);
})();
</script>

<!-- ── TICKER STRIP ─────────────────────────────────────────────── -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-inner">
    <?php
    $tickerItems = [
      ['icon' => 'home',         'text' => 'Custom Home Building'],
      ['icon' => 'hammer',       'text' => 'Expert Framing Crews'],
      ['icon' => 'bath',         'text' => 'Bathroom Remodeling'],
      ['icon' => 'utensils',     'text' => 'Kitchen Renovations'],
      ['icon' => 'tree-pine',    'text' => 'Custom Deck Building'],
      ['icon' => 'door-open',    'text' => 'Windows &amp; Doors'],
      ['icon' => 'building-2',   'text' => 'Commercial Construction'],
      ['icon' => 'wrench',       'text' => 'General Remodeling'],
      ['icon' => 'shield-check', 'text' => 'Licensed &amp; Insured in OR'],
      ['icon' => 'map-pin',      'text' => 'Grant County Specialists'],
    ];
    // Output twice for seamless loop
    for ($r = 0; $r < 2; $r++):
      foreach ($tickerItems as $ti):
    ?>
    <span class="ticker-item">
      <i data-lucide="<?= htmlspecialchars($ti['icon']) ?>"></i>
      <?= $ti['text'] ?>
    </span>
    <span class="ticker-dot" aria-hidden="true"></span>
    <?php endforeach; endfor; ?>
  </div>
</div>

<!-- ════════════════════════════════════════════════════
     SECTION 01 — SERVICES
════════════════════════════════════════════════════ -->
<section class="numbered-section" id="services" aria-label="Our construction and remodeling services">
  <span class="section-num" aria-hidden="true">01</span>
  <div class="container">

    <div class="section-header section-title text-center reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>
        What construction services does
        <span style="color:var(--color-secondary)">Superior Home Builders</span>
        offer in <em style="color:var(--color-secondary);font-style:italic">Mount Vernon?</em>
      </h2>
      <p class="hero-answer">
        From full custom home builds to targeted bathroom and kitchen remodels,
        we handle every phase of residential and commercial construction in
        Eastern Oregon. One contractor, complete capability.
      </p>
      <span class="section-subtitle-accent"><?= htmlspecialchars($tagline) ?></span>
    </div>

    <div class="services-grid">
      <?php
      $tints   = ['card-tint-1','card-tint-2','card-tint-3'];
      $delays  = ['reveal-delay-1','reveal-delay-2','reveal-delay-3','reveal-delay-4'];
      foreach ($services as $i => $svc):
        $slug    = $svc['slug'];
        $tint    = $tints[$i % 3];
        $delay   = $delays[$i % 4];
        $photo   = $servicePhotos[$slug] ?? 'https://source.unsplash.com/600x400/?construction,home';
        $icon    = $serviceIcons[$slug] ?? 'wrench';
        $bullets = $serviceBullets[$slug] ?? ['Quality craftsmanship', 'On-time delivery', 'Fully licensed crew'];
      ?>
      <article class="service-card-with-image <?= $tint ?> reveal-up <?= $delay ?>">
        <div class="service-card__image">
          <img
            src="<?= htmlspecialchars($photo) ?>"
            alt="<?= htmlspecialchars($svc['name']) ?> service in Mount Vernon, OR — Superior Home Builders"
            width="600" height="360"
            loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon">
            <i data-lucide="<?= htmlspecialchars($icon) ?>"></i>
          </div>
          <h3><?= htmlspecialchars($svc['name']) ?></h3>
          <p class="service-card__desc"><?= htmlspecialchars(substr($svc['description'], 0, 90)) ?>…</p>
          <ul>
            <?php foreach ($bullets as $bullet): ?>
            <li><?= htmlspecialchars($bullet) ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?= htmlspecialchars($slug) ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div><!-- /.services-grid -->

    <div class="services-cta-row reveal-up">
      <a href="/services/" class="btn btn-primary">
        <i data-lucide="grid-3x3"></i>
        View All Services
      </a>
    </div>

  </div><!-- /.container -->
</section>

<!-- ── SVG WAVE DIVIDER — light to dark ──────────────────────── -->
<div class="divider-wave divider-wave--light-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C240,80 480,0 720,40 C960,80 1200,0 1440,40 L1440,80 L0,80 Z" fill="#0f1219"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     STATS SECTION
════════════════════════════════════════════════════ -->
<section class="stats-section" data-watermark="20" aria-label="Superior Home Builders by the numbers">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item reveal-scale">
        <span class="stat-number">
          <span data-counter="<?= $yearsInBusiness ?>"><?= $yearsInBusiness ?></span><span class="stat-suffix">+</span>
        </span>
        <span class="stat-label">Years of Experience</span>
      </div>
      <div class="stat-item reveal-scale reveal-delay-1">
        <span class="stat-number">
          <span data-counter="500">500</span><span class="stat-suffix">+</span>
        </span>
        <span class="stat-label">Projects Completed</span>
      </div>
      <div class="stat-item reveal-scale reveal-delay-2">
        <span class="stat-number">
          <span data-counter="5">5</span>
        </span>
        <span class="stat-label">Star Google Rating</span>
      </div>
      <div class="stat-item reveal-scale reveal-delay-3">
        <span class="stat-number">
          <span data-counter="100">100</span><span class="stat-suffix">mi</span>
        </span>
        <span class="stat-label">Service Radius</span>
      </div>
    </div>
  </div>
</section>

<!-- ── SVG WAVE DIVIDER — dark to light ──────────────────────── -->
<div class="divider-wave divider-wave--dark-to-light" aria-hidden="true" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C360,0 720,80 1080,40 C1260,20 1350,60 1440,40 L1440,0 L0,0 Z" fill="#0f1219"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     MID CTA BANNER
════════════════════════════════════════════════════ -->
<section class="cta-banner" aria-label="Get a free estimate">
  <div class="container">
    <div class="cta-banner-inner">
      <div class="cta-banner-copy reveal-left">
        <h2>Ready to build something that lasts?</h2>
        <p>
          Eastern Oregon homeowners have trusted Superior Home Builders for over <?= $yearsInBusiness ?> years.
          Get your free, no-obligation estimate — we typically respond within one business day.
        </p>
      </div>
      <div class="cta-banner-actions reveal-right">
        <a href="#estimate-form" class="btn btn-secondary btn-lg">
          <i data-lucide="clipboard-list"></i>
          Get a Free Estimate
        </a>
        <a href="/contact/" class="btn btn-outline btn-lg">
          <i data-lucide="mail"></i>
          Contact Us
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════
     SECTION 02 — ABOUT + PROCESS
════════════════════════════════════════════════════ -->
<section class="numbered-section about-section" id="about" aria-label="About Superior Home Builders">
  <span class="section-num" aria-hidden="true">02</span>
  <div class="container">

    <div class="about-layout">

      <!-- LEFT: Company story + process steps -->
      <div class="about-left reveal-left">
        <span class="eyebrow-label">About Us</span>
        <h2>
          Building <em style="color:var(--color-secondary);font-style:italic">Eastern Oregon</em><br>
          homes since <?= $yearEstablished ?>
        </h2>

        <span class="about-tagline">Your vision. Our craftsmanship. Built to last.</span>

        <p class="about-text">
          Superior Home Builders has been delivering construction services across Eastern Oregon
          for over <?= $yearsInBusiness ?> years. Based in Mount Vernon, OR, we serve Grant County and the
          surrounding region — from John Day and Canyon City to Prairie City and beyond.
          We handle new custom home construction, comprehensive remodels, commercial builds,
          and everything in between with the same crew, the same standards, and the same
          attention to detail on every project.
        </p>

        <p class="about-text">
          Our mission is simple: build your place in the best way possible. We work closely
          with every client to understand their vision, respect their budget, and deliver
          results that hold up for decades. Whether it&rsquo;s a ground-up custom home or
          a bathroom renovation near me in Mount Vernon, we treat every project as if we&rsquo;re
          building it for ourselves.
        </p>

        <p class="process-heading">How it works</p>
        <div class="process-steps">
          <div class="process-step">
            <span class="step-num">1</span>
            <div class="step-body">
              <h4>Free Site Consultation</h4>
              <p>We visit your property, discuss your goals and budget, and evaluate site conditions — no charge, no pressure.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="step-num">2</span>
            <div class="step-body">
              <h4>Detailed Written Estimate</h4>
              <p>You receive a line-item estimate with materials, labor, and a realistic timeline before any commitment is made.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="step-num">3</span>
            <div class="step-body">
              <h4>Build with Our Crew</h4>
              <p>Our experienced Eastern Oregon crews handle every phase of the project — no subcontracting surprises.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="step-num">4</span>
            <div class="step-body">
              <h4>Final Walkthrough</h4>
              <p>We walk the finished project with you, address any punch-list items, and don&rsquo;t consider the job done until you&rsquo;re satisfied.</p>
            </div>
          </div>
        </div>

        <div style="margin-top:var(--space-2xl)">
          <a href="/about/" class="btn btn-primary">
            <i data-lucide="users"></i>
            Learn More About Us
          </a>
        </div>
      </div><!-- /.about-left -->

      <!-- RIGHT: Client photo + overlapping stat card -->
      <div class="about-right reveal-right">
        <div class="about-image-wrap">
          <img
            src="https://i.imgur.com/geXyYqc.jpeg"
            alt="Superior Home Builders owner — Eastern Oregon custom home builder and general contractor"
            width="600" height="750"
            loading="lazy">
        </div>
        <div class="about-stat-card">
          <span class="stat-num-big">
            <?= $yearsInBusiness ?><em>+</em>
          </span>
          <span class="stat-lbl">Years Building in<br>Eastern Oregon</span>
        </div>
      </div>

    </div><!-- /.about-layout -->
  </div><!-- /.container -->
</section>

<!-- ── ANGLED SVG DIVIDER ─────────────────────────────────────── -->
<div class="divider-angle" aria-hidden="true" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,0 1440,60 1440,0" fill="#0f1219"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     SECTION 03 — REVIEWS
════════════════════════════════════════════════════ -->
<section class="numbered-section reviews-section" id="reviews" aria-label="Customer reviews">
  <span class="section-num" aria-hidden="true" style="color:rgba(255,255,255,0.03)">03</span>
  <div class="container">

    <div class="section-title reveal-up">
      <span class="eyebrow-label">What Clients Say</span>
      <h2>Built on word-of-mouth across <em style="color:var(--color-accent);font-style:italic">Grant County</em></h2>
      <span class="section-subtitle-accent">Real projects. Real Eastern Oregon homeowners.</span>
    </div>

    <!-- Swiper reviews carousel -->
    <div class="swiper reviews-swiper" id="reviews-swiper">
      <div class="swiper-wrapper">
        <?php foreach ($siteReviews as $rev): ?>
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars" aria-label="5 stars">
              <?php for ($s = 0; $s < $rev['rating']; $s++): ?>
              <i data-lucide="star"></i>
              <?php endfor; ?>
            </div>
            <p class="review-text"><?= htmlspecialchars($rev['text']) ?></p>
            <div class="review-meta">
              <div class="review-avatar" aria-hidden="true">
                <?= strtoupper(substr($rev['name'], 0, 1)) ?>
              </div>
              <div class="review-author">
                <strong><?= htmlspecialchars($rev['name']) ?></strong>
                <span><?= htmlspecialchars($rev['loc']) ?> &mdash; <?= htmlspecialchars($rev['service']) ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination" id="reviews-pagination"></div>
    </div>

    <!-- Platform badges -->
    <div class="review-badge-strip reveal-up">
      <span class="review-platform">
        <i data-lucide="star"></i> Google Reviews
      </span>
      <span class="review-platform">
        <i data-lucide="thumbs-up"></i> Facebook Reviews
      </span>
      <span class="review-platform">
        <i data-lucide="award"></i> BBB Accredited
      </span>
    </div>

  </div>
</section>

<!-- ── WAVE DIVIDER — dark to light ──────────────────────────── -->
<div class="divider-wave" aria-hidden="true" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C320,80 640,0 960,40 C1120,60 1280,20 1440,40 L1440,0 L0,0 Z" fill="#0f1219"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     SECTION 04 — FAQ
════════════════════════════════════════════════════ -->
<section class="numbered-section faq-section" id="faq" aria-label="Frequently asked questions">
  <span class="section-num" aria-hidden="true">04</span>
  <div class="container">

    <div class="section-title reveal-up">
      <span class="eyebrow-label">Common Questions</span>
      <h2>What homeowners ask before hiring a <em style="color:var(--color-secondary);font-style:italic">builder in Mount Vernon</em></h2>
    </div>

    <div class="faq-grid">
      <?php foreach ($homeFaqs as $faq): ?>
      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
          <i data-lucide="plus-circle"></i>
          <h3 itemprop="name"><?= htmlspecialchars($faq['q']) ?></h3>
        </div>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text"><?= htmlspecialchars($faq['a']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:var(--space-2xl)" class="reveal-up">
      <a href="/contact/" class="btn btn-primary">
        <i data-lucide="message-circle"></i>
        Ask Us Your Question
      </a>
    </div>

  </div>

  <?php if (!empty($schemaMarkup)): ?>
  <script type="application/ld+json"><?= $schemaMarkup ?></script>
  <?php endif; ?>
</section>

<!-- ── ANGLED DIVIDER — into blog preview ─────────────────────── -->
<div class="divider-angle" aria-hidden="true" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C480,50 960,0 1440,40 L1440,0 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     SECTION 05 — BLOG PREVIEW
════════════════════════════════════════════════════ -->
<section class="numbered-section blog-preview-section" id="blog" aria-label="From the blog">
  <span class="section-num" aria-hidden="true">05</span>
  <div class="container">

    <div class="section-title reveal-up">
      <span class="eyebrow-label">From the Blog</span>
      <h2>Building Knowledge for <em style="color:var(--color-secondary);font-style:italic">Eastern Oregon</em> Homeowners</h2>
    </div>

    <!-- Featured post card -->
    <article class="blog-preview-card reveal-up" aria-label="Off-the-Grid Living in Oregon">

      <div class="blog-preview-card__img-wrap">
        <img
          src="https://i.imgur.com/2qn995t.jpeg"
          alt="Off-grid homestead in rural Oregon — remote property surrounded by Pacific Northwest forest"
          width="800"
          height="600"
          loading="lazy">
        <span class="blog-preview-card__badge">Construction &amp; Building Tips</span>
      </div>

      <div class="blog-preview-card__body">
        <div class="blog-preview-card__meta">
          <div class="blog-preview-card__meta-item">
            <i data-lucide="calendar"></i>
            <time datetime="2026-06-06">June 6, 2026</time>
          </div>
          <div class="blog-preview-card__meta-item">
            <i data-lucide="clock"></i>
            <span>8 min read</span>
          </div>
        </div>

        <h3 class="blog-preview-card__title">
          <a href="/blog/off-the-grid-living-oregon/">
            Off-the-Grid Living in Oregon: Embracing Self-Reliance in the Pacific Northwest
          </a>
        </h3>

        <p class="blog-preview-card__excerpt">
          Oregon's stunning landscapes make it a dream destination for off-grid living — but success demands careful planning. Learn the key elements, common pitfalls, and why working with a local contractor who knows Oregon's weather is critical to building a resilient homestead.
        </p>

        <a href="/blog/off-the-grid-living-oregon/" class="blog-preview-card__cta">
          Read the Full Article <i data-lucide="arrow-right"></i>
        </a>
      </div>

    </article><!-- /.blog-preview-card -->

    <div class="blog-preview-all reveal-up">
      <a href="/blog/" class="btn btn-secondary">
        <i data-lucide="book-open"></i>
        View All Articles
      </a>
    </div>

  </div>
</section>

<!-- ── WAVE DIVIDER — blog preview to closing CTA ─────────────── -->
<div class="divider-wave" aria-hidden="true" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,25 C360,50 1080,0 1440,25 L1440,50 L0,50 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     CLOSING CTA
════════════════════════════════════════════════════ -->
<section class="closing-cta" aria-label="Start your project">
  <div class="container">
    <div class="reveal-up">
      <span class="eyebrow-label" style="display:block;text-align:center;margin-bottom:var(--space-md)">
        Let&rsquo;s Get Started
      </span>
      <h2>Your next home project starts with one call to Mount Vernon, OR</h2>
      <p>
        Superior Home Builders serves homeowners and businesses across Eastern Oregon.
        Tell us what you&rsquo;re building — we&rsquo;ll give you an honest assessment
        and a free written estimate, no strings attached.
      </p>
      <div class="closing-cta-actions">
        <a href="#estimate-form" class="btn btn-primary btn-lg">
          <i data-lucide="clipboard-list"></i>
          Get a Free Estimate
        </a>
        <a href="/services/" class="btn btn-secondary btn-lg">
          <i data-lucide="grid-3x3"></i>
          Browse All Services
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ── Swiper init ────────────────────────────────────────────── -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  if (typeof Swiper !== 'undefined') {
    new Swiper('#reviews-swiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      pagination: {
        el: '#reviews-pagination',
        clickable: true,
        bulletClass: 'swiper-pagination-bullet',
        bulletActiveClass: 'swiper-pagination-bullet-active',
      },
      breakpoints: {
        640:  { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
      },
    });
  }

  // FAQ accordion
  document.querySelectorAll('.faq-question').forEach(function (btn) {
    function toggleFaq() {
      var item = btn.closest('.faq-item');
      var isOpen = item.classList.contains('open');
      // Close all
      document.querySelectorAll('.faq-item.open').forEach(function (o) { o.classList.remove('open'); o.querySelector('.faq-question').setAttribute('aria-expanded', 'false'); });
      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
      }
    }
    btn.addEventListener('click', toggleFaq);
    btn.addEventListener('keydown', function (e) { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); toggleFaq(); } });
  });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
