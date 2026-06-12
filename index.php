<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ─────────────────────────────────────────────────────────
$pageTitle        = 'Custom Home Builders in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Superior Home Builders — Eastern Oregon\'s custom home builder & general contractor. Serving Mount Vernon, John Day & Grant County for 25+ years. Free estimates on new builds, remodels & commercial construction.';
$canonicalUrl     = $siteUrl . '/';
$currentPage      = 'home';
$heroImagePreload = '/assets/images/hero-custom-home.webp';
$ogImage          = $siteUrl . $heroImagePreload;  // og:image stays absolute
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
        'a' => 'We regularly work throughout Grant County including John Day, Canyon City, and Prairie City, as well as communities across Eastern Oregon. Contact us to discuss whether your project location falls within our service radius.',
    ],
    [
        'q' => 'Is Superior Home Builders licensed and insured in Oregon?',
        'a' => 'Yes — Superior Home Builders is a fully licensed general contractor in the State of Oregon (CCB# 147123). We carry general liability insurance and workers\' compensation on every project, protecting your property and every member of our crew.',
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
    'bathroom-remodeling'    => '/assets/images/bathroom-remodel-tile.webp',
    'kitchen-remodeling'     => '/assets/images/kitchen-remodel-mount-vernon.webp',
    'windows-and-doors'      => '/assets/images/window-installation-mount-vernon.webp',
    'decks'                  => '/assets/images/custom-deck-construction.webp',
    'framing'                => '/assets/images/custom-home-framing.webp',
    'custom-home-building'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604304191-9h3673-466678023_10160894523422734_2342757114398857707_n.jpg',
    'general-remodeling'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg',
    'commercial-construction' => '/assets/images/commercial-construction-eastern-oregon.webp',
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
    'custom-home-building'   => ['Design-to-completion builds', 'Site prep & foundation', '25+ years local expertise'],
    'general-remodeling'     => ['Single rooms to whole homes', 'Additions & conversions', 'Interior finish work'],
    'commercial-construction' => ['Shops, offices & warehouses', 'Ground-up & tenant build-out', 'On schedule, on budget'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   HOMEPAGE — Superior Home Builders
   "Bright luxury" design language — warm ivory, deep ink, antique gold.
   Page-specific premium styles — uses var() tokens from framework.css
   Visual techniques: cinematic layered hero, luxe credential strip,
   editorial stats band, full-bleed photo CTA, asymmetric about,
   SVG dividers, multi-directional reveals
   ════════════════════════════════════════════════════════════════════ */

/* Luxe palette — every value derived from brand tokens via color-mix() */
:root {
  --lux-gold:      color-mix(in srgb, var(--color-accent) 70%, var(--color-primary) 30%);
  --lux-gold-deep: color-mix(in srgb, var(--color-accent) 46%, var(--color-primary) 54%);
  --lux-champagne: color-mix(in srgb, var(--color-accent) 55%, #fff 45%);
  --lux-ivory:     color-mix(in srgb, var(--color-accent) 8%, #fff 92%);
  --lux-line:      rgba(var(--color-primary-rgb), 0.10);
}

/* ── LUXE PRIMITIVES ───────────────────────────────────────────── */
/* Refined button treatment — flat, letterspaced, no 3D press shadow */
.btn.btn-lux {
  border-radius: var(--radius-sm);
  box-shadow: none;
  font-weight: 600;
  letter-spacing: 0.14em;
  border-width: 1px;
  padding: 16px var(--space-2xl);
}
.btn.btn-lux:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 28px rgba(var(--color-primary-rgb), 0.16);
}
.btn.btn-lux:active { box-shadow: none; transform: translateY(1px) !important; }
.btn.btn-lux.btn-primary {
  background: var(--color-primary);
  border-color: var(--color-primary);
  color: var(--lux-ivory);
}
.btn.btn-lux.btn-primary:hover {
  background: var(--lux-gold-deep);
  border-color: var(--lux-gold-deep);
  color: #fff;
}
.btn.btn-lux.btn-secondary {
  background: var(--lux-gold);
  border-color: var(--lux-gold);
  color: var(--color-primary);
}
.btn.btn-lux.btn-secondary:hover {
  background: var(--color-primary);
  border-color: var(--color-primary);
  color: var(--lux-champagne);
}
.btn.btn-lux.btn-outline {
  background: transparent;
  color: #fff;
  border-color: rgba(255,255,255,0.55);
  box-shadow: none;
}
.btn.btn-lux.btn-outline:hover {
  background: rgba(255,255,255,0.10);
  border-color: var(--lux-champagne);
  color: var(--lux-champagne);
}
/* Outline variant for light backgrounds */
.btn.btn-lux.btn-outline-dark {
  background: transparent;
  color: var(--color-primary);
  border-color: rgba(var(--color-primary-rgb), 0.35);
}
.btn.btn-lux.btn-outline-dark:hover {
  background: transparent;
  border-color: var(--lux-gold-deep);
  color: var(--lux-gold-deep);
}

/* Kicker — uppercase letterspaced label flanked by thin gold rules */
.lux-kicker {
  display: inline-flex;
  align-items: center;
  gap: var(--space-md);
  font-family: var(--font-body);
  font-size: var(--fs-xs);
  font-weight: 600;
  letter-spacing: 0.32em;
  text-transform: uppercase;
}
.lux-kicker::before,
.lux-kicker::after {
  content: '';
  width: 44px;
  height: 1px;
  background: currentColor;
  opacity: 0.55;
  flex-shrink: 0;
}

/* Refined editorial headings — lighter serif weight, tighter tracking */
.section-title h2,
.section-header h2 {
  font-weight: 480;
  letter-spacing: -0.01em;
}
/* Gold italic accent inside light-section headings */
.section-title h2 em,
.section-header h2 em {
  font-style: italic;
  font-weight: 460;
  color: var(--lux-gold-deep);
}

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
/* Technique 1: layered gradient overlay — light cinematic scrim,
   photos stay luminous for the bright luxury feel */
.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background:
    linear-gradient(
      to bottom,
      rgba(var(--color-primary-rgb), 0.52) 0%,
      rgba(var(--color-primary-rgb), 0.16) 32%,
      rgba(var(--color-primary-rgb), 0.16) 68%,
      rgba(var(--color-primary-rgb), 0.46) 100%
    ),
    linear-gradient(
      100deg,
      rgba(var(--color-primary-rgb), 0.58) 0%,
      rgba(var(--color-primary-rgb), 0.32) 55%,
      rgba(var(--color-primary-rgb), 0.10) 100%
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
  gap: var(--space-md);
  color: var(--lux-champagne);
  font-family: var(--font-body);
  font-size: var(--fs-xs);
  font-weight: 600;
  letter-spacing: 0.30em;
  text-transform: uppercase;
  margin-bottom: var(--space-lg);
}
.hero-eyebrow::before {
  content: '';
  width: 52px;
  height: 1px;
  background: var(--lux-champagne);
  opacity: 0.7;
  flex-shrink: 0;
}
.hero-title {
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 4.8vw, 4.6rem);
  font-weight: 480;
  line-height: 1.12;
  letter-spacing: -0.015em;
  color: #fff;
  margin-bottom: var(--space-xl);
  text-wrap: balance;
  text-shadow: 0 2px 28px rgba(var(--color-primary-rgb), 0.40);
}
.hero-title em {
  font-style: italic;
  color: var(--lux-champagne);
  font-weight: 430;
}
.hero-subtitle {
  font-family: var(--font-body);
  font-size: clamp(1rem, 1.5vw, 1.2rem);
  font-weight: 380;
  color: rgba(255,255,255,0.90);
  line-height: 1.85;
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
  gap: 7px;
  color: rgba(255,255,255,0.85);
  font-family: var(--font-body);
  font-size: var(--fs-xs);
  font-weight: 500;
  letter-spacing: 0.12em;
  text-transform: uppercase;
}
.trust-badge i,
.trust-badge svg { width: 13px; height: 13px; color: var(--lux-champagne); flex-shrink: 0; }
.trust-divider {
  width: 1px;
  height: 14px;
  background: rgba(255,255,255,0.30);
  align-self: center;
}

/* Technique 2: Bright luxe hero form card — crisp white, gold trim */
.hero-form-card {
  background: var(--color-bg);
  border: 1px solid rgba(255,255,255,0.65);
  border-top: 3px solid var(--lux-gold);
  border-radius: var(--radius-lg);
  padding: var(--space-2xl);
  box-shadow: 0 28px 68px rgba(var(--color-primary-rgb), 0.32);
}
.hero-form-card h2 {
  font-family: var(--font-heading);
  color: var(--color-primary);
  font-size: clamp(1.3rem, 2vw, 1.6rem);
  font-weight: 560;
  letter-spacing: -0.01em;
  margin-bottom: var(--space-xs);
}
.hero-form-tagline {
  color: var(--color-text-light);
  font-size: var(--fs-sm);
  margin-bottom: var(--space-lg);
}
.hero-form .form-row { margin-bottom: var(--space-md); }
.hero-form input,
.hero-form select {
  width: 100%;
  padding: 14px var(--space-md);
  background: var(--color-bg);
  border: 1px solid var(--lux-line);
  border-radius: var(--radius-sm);
  color: var(--color-text);
  font-family: var(--font-body);
  font-size: var(--fs-sm);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
  -webkit-appearance: none;
}
.hero-form input::placeholder { color: var(--color-text-light); opacity: 0.75; }
.hero-form select { cursor: pointer; color: var(--color-text); }
.hero-form select option { background: var(--color-bg); color: var(--color-text); }
.hero-form input:focus,
.hero-form select:focus {
  outline: none;
  border-color: var(--lux-gold-deep);
  box-shadow: 0 0 0 3px rgba(var(--color-accent-rgb), 0.30);
}
.btn-block { width: 100%; justify-content: center; }
.form-footnote {
  font-size: var(--fs-xs);
  color: var(--color-text-light);
  text-align: center;
  margin-top: var(--space-md);
  line-height: 1.55;
}
.form-footnote a {
  color: var(--color-text-light);
  text-decoration: underline;
}
.form-footnote a:hover { color: var(--lux-gold-deep); }
.hero-consent {
  display: flex;
  align-items: flex-start;
  gap: var(--space-sm);
  text-align: left;
  cursor: pointer;
}
.hero-consent input[type="checkbox"] {
  width: 16px;
  height: 16px;
  min-width: 16px;
  margin-top: 2px;
  accent-color: var(--lux-gold-deep);
  cursor: pointer;
}

/* ── TICKER STRIP — quiet ivory credentials band ──────────────── */
.ticker-strip {
  background: var(--lux-ivory);
  border-top: 1px solid var(--lux-line);
  border-bottom: 1px solid var(--lux-line);
  padding: 15px 0;
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
  font-size: var(--fs-xs);
  font-weight: 600;
  letter-spacing: 0.20em;
  text-transform: uppercase;
  white-space: nowrap;
}
.ticker-item i,
.ticker-item svg { width: 14px; height: 14px; flex-shrink: 0; color: var(--lux-gold-deep); }
.ticker-dot {
  width: 4px;
  height: 4px;
  border-radius: var(--radius-full);
  background: rgba(var(--color-primary-rgb), 0.22);
  flex-shrink: 0;
}

/* ── NUMBERED SECTION LABELS ────────────────────────────────────── */
.numbered-section { position: relative; }
/* Services: warm ivory settling into white */
#services {
  background: linear-gradient(180deg, var(--lux-ivory) 0%, var(--color-bg) 32%);
}
/* FAQ on clean white */
#faq {
  background: var(--color-bg);
}
.section-num {
  position: absolute;
  top: var(--space-2xl);
  right: clamp(1rem, 4vw, 2rem);
  font-family: var(--font-heading);
  font-size: clamp(5rem, 12vw, 11rem);
  font-weight: 330;
  font-style: italic;
  color: rgba(var(--color-primary-rgb), 0.05);
  line-height: 1;
  pointer-events: none;
  user-select: none;
  letter-spacing: -0.02em;
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
  font-weight: 420;
  font-size: 1.3rem;
  color: var(--lux-gold-deep);
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
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  background: var(--color-bg);
  border: 1px solid var(--lux-gold);
  box-shadow: var(--shadow-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: -40px;
  margin-bottom: var(--space-xs);
  color: var(--lux-gold-deep);
  flex-shrink: 0;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.service-card-with-image:hover .service-card__icon {
  transform: translateY(-2px);
  box-shadow: var(--shadow-lg);
}
.service-card__icon i,
.service-card__icon svg { width: 24px; height: 24px; }
.service-card-with-image h3 {
  font-family: var(--font-heading);
  font-weight: 560;
  color: var(--color-primary);
  margin: 0;
  font-size: 1.25rem;
  line-height: 1.2;
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
  color: var(--lux-gold-deep);
  font-weight: 800;
  font-size: 0.7rem;
  position: absolute;
  left: 4px;
  top: 2px;
}
.service-card__cta {
  margin-top: auto;
  padding: var(--space-sm) 0 0;
  color: var(--lux-gold-deep);
  font-weight: 600;
  font-size: var(--fs-xs);
  letter-spacing: 0.16em;
  text-transform: uppercase;
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

/* ── STATS — bright ivory editorial band ────────────────────────── */
.stats-section {
  background: var(--lux-ivory);
  padding: var(--space-4xl) 0;
  position: relative;
  overflow: hidden;
}
/* Faint warm glow rising from below */
.stats-section::after {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 130%, rgba(var(--color-accent-rgb), 0.18) 0%, transparent 60%);
  pointer-events: none;
  z-index: 0;
}
/* Large watermark number */
.stats-section::before {
  content: attr(data-watermark);
  position: absolute;
  right: -1%;
  top: -12%;
  font-family: var(--font-heading);
  font-size: clamp(10rem, 20vw, 22rem);
  font-weight: 330;
  font-style: italic;
  color: rgba(var(--color-primary-rgb), 0.045);
  line-height: 1;
  pointer-events: none;
  letter-spacing: -0.02em;
  z-index: 0;
}
.stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  position: relative;
  z-index: 1;
}
.stat-item {
  text-align: center;
  padding: var(--space-xl) var(--space-md);
  border-left: 1px solid var(--lux-line);
}
.stat-item:first-child { border-left: none; }
.stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 4.6vw, 4.2rem);
  font-weight: 420;
  color: var(--color-primary);
  line-height: 1;
  letter-spacing: -0.02em;
  display: block;
  margin-bottom: var(--space-sm);
}
.stat-suffix {
  font-size: 0.55em;
  vertical-align: super;
  font-style: italic;
  color: var(--lux-gold-deep);
}
.stat-label {
  font-family: var(--font-body);
  font-size: var(--fs-xs);
  font-weight: 600;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--color-text-light);
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
.divider-wave--dark-to-light { background: var(--lux-ivory); }
.divider-wave--light-to-dark { background: var(--color-bg); }
.divider-angle {
  display: block;
  width: 100%;
  height: clamp(40px, 5vw, 70px);
  overflow: hidden;
  line-height: 0;
}
.divider-angle svg { display: block; width: 100%; height: 100%; }

/* ── MID CTA BANNER — full-bleed photo band, deep overlay ───────── */
.cta-banner {
  position: relative;
  padding: clamp(96px, 12vw, 160px) 0;
  background-image: url('/assets/images/hero-custom-home-1600.webp');
  background-size: cover;
  background-position: center 40%;
  overflow: hidden;
  text-align: center;
}
/* Deep ink-to-navy scrim — darkest at the edges to blend the wave divider */
.cta-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to bottom,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(var(--color-secondary-rgb), 0.66) 48%,
    rgba(var(--color-primary-rgb), 0.88) 100%
  );
  pointer-events: none;
}
.cta-banner .container { position: relative; z-index: 1; }
.cta-banner-inner {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-2xl);
}
.cta-banner-copy .lux-kicker {
  color: var(--lux-champagne);
  margin-bottom: var(--space-lg);
}
.cta-banner-copy h2 {
  color: #fff;
  font-family: var(--font-heading);
  font-weight: 460;
  font-size: clamp(1.9rem, 3.6vw, 3rem);
  letter-spacing: -0.01em;
  line-height: 1.2;
  max-width: 24ch;
  margin: 0 auto var(--space-md);
}
.cta-banner-copy h2 em {
  font-style: italic;
  font-weight: 430;
  color: var(--lux-champagne);
}
.cta-banner-copy p {
  color: rgba(255,255,255,0.84);
  font-size: clamp(0.95rem, 1.5vw, 1.1rem);
  line-height: 1.8;
  max-width: 56ch;
  margin: 0 auto;
}
/* On the photo band: secondary flips to crisp white */
.cta-banner .btn.btn-lux.btn-secondary {
  background: #fff;
  border-color: #fff;
  color: var(--color-primary);
}
.cta-banner .btn.btn-lux.btn-secondary:hover {
  background: var(--lux-champagne);
  border-color: var(--lux-champagne);
  color: var(--color-primary);
}
.cta-banner-actions {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── ABOUT / PROCESS — bright gallery white ────────────────────── */
.about-section {
  background: var(--color-bg);
  position: relative;
}
/* Faint warm wash behind the photo column */
.about-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 85% 25%, rgba(var(--color-accent-rgb), 0.10) 0%, transparent 60%);
  pointer-events: none;
  z-index: 0;
}
.about-section .container { position: relative; z-index: 1; }
/* Technique 6: Asymmetric broken-grid layout */
.about-layout {
  display: grid;
  grid-template-columns: 58fr 42fr;
  gap: var(--space-4xl);
  align-items: start;
}
.about-left {}
.about-section .eyebrow-label {
  color: var(--lux-gold-deep);
  letter-spacing: 0.28em;
}
.about-section h2 {
  color: var(--color-primary);
  font-weight: 480;
}
.about-section h2 em {
  color: var(--lux-gold-deep);
  font-style: italic;
  font-weight: 460;
}
.about-tagline {
  font-family: var(--font-accent);
  font-style: italic;
  font-weight: 400;
  font-size: clamp(1.15rem, 2vw, 1.4rem);
  color: var(--color-text-light);
  margin-bottom: var(--space-lg);
  display: block;
}
.about-text {
  color: var(--color-text-light);
  font-size: clamp(0.95rem, 1.3vw, 1.05rem);
  line-height: 1.85;
  margin-bottom: var(--space-md);
}
.process-heading {
  font-family: var(--font-body);
  font-size: 0.85rem;
  font-weight: 700;
  letter-spacing: 0.22em;
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
  background: transparent;
  border: 1px solid var(--lux-gold);
  color: var(--lux-gold-deep);
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 480;
  font-style: italic;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.step-body h4 {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 640;
  color: var(--color-primary);
  margin-bottom: 4px;
}
.step-body p {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  margin: 0;
  line-height: 1.7;
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
/* Overlapping stat card (broken-grid technique) — white with gold trim */
.about-stat-card {
  position: absolute;
  bottom: var(--space-xl);
  left: calc(-1 * var(--space-xl));
  background: var(--color-bg);
  border-top: 3px solid var(--lux-gold);
  border-radius: var(--radius);
  padding: var(--space-lg) var(--space-xl);
  box-shadow: var(--shadow-xl);
  min-width: 200px;
}
.about-stat-card .stat-num-big {
  font-family: var(--font-heading);
  font-size: 3rem;
  font-weight: 440;
  color: var(--color-primary);
  line-height: 1;
  display: block;
}
.about-stat-card .stat-num-big em {
  color: var(--lux-gold-deep);
  font-style: italic;
}
.about-stat-card .stat-lbl {
  font-family: var(--font-body);
  font-size: var(--fs-xs);
  font-weight: 600;
  color: var(--color-text-light);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  display: block;
  margin-top: 6px;
}

/* ── REVIEWS — bright ivory, gallery-white cards ───────────────── */
.reviews-section {
  background: var(--lux-ivory);
  position: relative;
}
.reviews-section .section-title h2 { color: var(--color-primary); }
.reviews-section .section-subtitle-accent { color: var(--lux-gold-deep); }
.reviews-section .eyebrow-label { color: var(--lux-gold-deep); letter-spacing: 0.28em; }
.reviews-swiper { overflow: hidden; }
.swiper-wrapper { display: flex; }
.review-card {
  background: var(--color-bg);
  border: 1px solid var(--lux-line);
  border-radius: var(--radius-lg);
  padding: var(--space-2xl);
  height: auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
  box-shadow: var(--shadow-card);
  transition: box-shadow var(--transition-base), border-color var(--transition-base), transform var(--transition-base);
}
.review-card:hover {
  box-shadow: var(--shadow-lg);
  border-color: rgba(var(--color-accent-rgb), 0.55);
  transform: translateY(-3px);
}
.review-stars { display: flex; gap: 3px; }
.review-stars i,
.review-stars svg { width: 16px; height: 16px; color: var(--lux-gold); }
.review-text {
  font-family: var(--font-heading);
  color: var(--color-text);
  font-size: var(--fs-sm);
  font-weight: 380;
  line-height: 1.85;
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
  border-top: 1px solid var(--lux-line);
}
.review-avatar {
  width: 42px;
  height: 42px;
  border-radius: var(--radius-full);
  background: var(--lux-ivory);
  border: 1px solid rgba(var(--color-accent-rgb), 0.55);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--lux-gold-deep);
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 500;
  flex-shrink: 0;
}
.review-author strong {
  display: block;
  color: var(--color-primary);
  font-size: var(--fs-sm);
  font-weight: 700;
}
.review-author span {
  display: block;
  color: var(--color-text-light);
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
  border-top: 1px solid var(--lux-line);
}
.review-platform {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: var(--color-text-light);
  font-size: var(--fs-sm);
  font-weight: 600;
}
.review-platform i,
.review-platform svg { width: 18px; height: 18px; color: var(--lux-gold-deep); }
.swiper-pagination { margin-top: var(--space-2xl); text-align: center; }
.swiper-pagination-bullet {
  display: inline-block;
  width: 8px;
  height: 8px;
  background: rgba(var(--color-primary-rgb), 0.18);
  border-radius: var(--radius-full);
  margin: 0 4px;
  cursor: pointer;
  transition: background var(--transition-fast), width var(--transition-fast);
}
.swiper-pagination-bullet-active {
  background: var(--lux-gold-deep);
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
.faq-item.open { border-color: rgba(var(--color-accent-rgb), 0.70); box-shadow: var(--shadow); }
.faq-question {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  padding: var(--space-lg) var(--space-xl);
  cursor: pointer;
  user-select: none;
  transition: background var(--transition-fast);
}
.faq-question:hover { background: var(--lux-ivory); }
.faq-question i,
.faq-question svg {
  width: 18px;
  height: 18px;
  color: var(--lux-gold-deep);
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
  background: rgba(255,255,255,0.92);
  backdrop-filter: blur(6px);
  color: var(--color-primary);
  font-size: 0.7rem;
  font-weight: 600;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  padding: 4px 12px;
  border-radius: var(--radius-full);
  border: 1px solid var(--lux-line);
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
.blog-preview-card__title a:hover { color: var(--lux-gold-deep); }
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
  font-weight: 600;
  font-size: var(--fs-xs);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--lux-gold-deep);
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
  background: var(--lux-ivory);
  border-top: 1px solid var(--lux-line);
  padding: var(--space-4xl) 0;
  text-align: center;
}
.closing-cta .eyebrow-label { color: var(--lux-gold-deep); letter-spacing: 0.28em; }
.closing-cta h2 { margin-bottom: var(--space-md); font-weight: 480; }
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
  .stat-item              { border-left: none; }
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
  .lux-kicker::before,
  .lux-kicker::after { width: 24px; }
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
    <div class="hero-slide is-active" style="background-image:url('/assets/images/hero-custom-home.webp');background-image:image-set(url('/assets/images/hero-custom-home-960.webp') 1x, url('/assets/images/hero-custom-home-1600.webp') 2x)"></div>
    <div class="hero-slide" style="background-image:url('/assets/images/blog/remote-property-mountain-backdrop-960.webp');background-image:image-set(url('/assets/images/blog/remote-property-mountain-backdrop-960.webp') 1x, url('/assets/images/blog/remote-property-mountain-backdrop-1600.webp') 2x)"></div>
    <div class="hero-slide" style="background-image:url('/assets/images/blog/rural-parcel-site-planning-960.webp');background-image:image-set(url('/assets/images/blog/rural-parcel-site-planning-960.webp') 1x, url('/assets/images/blog/rural-parcel-site-planning-1600.webp') 2x)"></div>
    <div class="hero-slide" style="background-image:url('/assets/images/blog/raw-land-eastern-oregon-960.webp');background-image:image-set(url('/assets/images/blog/raw-land-eastern-oregon-960.webp') 1x, url('/assets/images/blog/raw-land-eastern-oregon-1600.webp') 2x)"></div>
    <div class="hero-slide" style="background-image:url('/assets/images/new-windows-mount-vernon-960.webp');background-image:image-set(url('/assets/images/new-windows-mount-vernon-960.webp') 1x, url('/assets/images/new-windows-mount-vernon-1600.webp') 2x)"></div>
    <div class="hero-slide" style="background-image:url('/assets/images/hero-slide-construction-960.webp');background-image:image-set(url('/assets/images/hero-slide-construction-960.webp') 1x, url('/assets/images/hero-slide-construction.webp') 2x)"></div>
  </div>
  <div class="hero-inner">
    <div class="container">
      <div class="hero-layout">

        <!-- LEFT: Copy block -->
        <div class="hero-text">
          <span class="hero-eyebrow">The Trusted Choice in Eastern Oregon Custom Builds</span>

          <h1 class="hero-title">
            Bringing Your Dream Home<br>
            to Life in <em>Eastern Oregon</em>
          </h1>

          <p class="hero-subtitle">
            Superior Home Builders is Mount Vernon&rsquo;s trusted custom home builder
            and general contractor — crafting new homes, kitchens, baths, decks, and
            commercial spaces across Grant County for over <?= $yearsInBusiness ?> years.
            One crew, one standard, on every project large or small.
          </p>

          <div class="hero-actions">
            <a href="#estimate-form" class="btn btn-lux btn-secondary btn-lg">
              Get a Free Estimate
            </a>
            <?php if (!empty($phone)): ?>
            <a href="tel:<?= preg_replace('/\D/', '', $phone) ?>" class="btn btn-lux btn-outline btn-lg">
              <?php echo lucide_icon('phone'); ?>
              Call <?= htmlspecialchars($phone) ?>
            </a>
            <?php else: ?>
            <a href="/contact/" class="btn btn-lux btn-outline btn-lg">
              <?php echo lucide_icon('calendar'); ?>
              Schedule Consultation
            </a>
            <?php endif; ?>
          </div>

          <div class="hero-trust">
            <span class="trust-badge">
              <?php echo lucide_icon('shield-check'); ?> Licensed &amp; Insured &middot; CCB# <?= htmlspecialchars($licenseNumber) ?>
            </span>
            <span class="trust-divider" aria-hidden="true"></span>
            <span class="trust-badge">
              <?php echo lucide_icon('calendar'); ?> <?= $yearsInBusiness ?>+ Years
            </span>
            <span class="trust-divider" aria-hidden="true"></span>
            <span class="trust-badge">
              <?php echo lucide_icon('star'); ?> Free Estimates
            </span>
            <span class="trust-divider" aria-hidden="true"></span>
            <span class="trust-badge">
              <?php echo lucide_icon('map-pin'); ?> Eastern Oregon Experts
            </span>
          </div>
        </div><!-- /.hero-text -->

        <!-- RIGHT: Lead-capture form card -->
        <aside class="hero-form-card" id="estimate-form">
          <h2>Get Your Free Estimate</h2>
          <p class="hero-form-tagline">No obligation. Same-day response.</p>
          <form action="<?= htmlspecialchars($formAction) ?>" method="POST" class="hero-form">
            <!-- Honeypot (field name per leads edge function) -->
            <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
            <!-- Hidden tracking -->
            <input type="hidden" name="_next" value="/thank-you">
            <input type="hidden" name="_form_location" value="hero">
            <input type="hidden" name="_consent_version" value="<?= htmlspecialchars($consentVersion) ?>">
            <input type="hidden" name="_consent_page" value="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">

            <div class="form-row">
              <input type="text" name="name" placeholder="Your full name" required autocomplete="name">
            </div>
            <div class="form-row">
              <input type="email" name="email" placeholder="Email address" required autocomplete="email">
            </div>
            <div class="form-row">
              <input type="tel" name="phone" placeholder="Phone number" required autocomplete="tel">
            </div>
            <div class="form-row">
              <input type="text" name="zip" placeholder="ZIP code" pattern="[0-9]{5}" maxlength="5" autocomplete="postal-code" required>
            </div>
            <div class="form-row">
              <select name="service">
                <option value="">What do you need?</option>
                <?php foreach ($services as $svc): ?>
                <option value="<?= htmlspecialchars($svc['name']) ?>"><?= htmlspecialchars($svc['name']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="submit" class="btn btn-lux btn-secondary btn-block">
              Get My Free Estimate
            </button>
            <label class="form-footnote hero-consent">
              <input type="checkbox" name="terms_accepted" value="yes" required>
              <span>I agree to the <a href="/terms/">Terms</a> and <a href="/privacy-policy/">Privacy Policy</a>.</span>
            </label>
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
      ['icon' => 'shield-check', 'text' => 'Oregon CCB# 147123'],
      ['icon' => 'map-pin',      'text' => 'Grant County Specialists'],
    ];
    // Output twice for seamless loop
    for ($r = 0; $r < 2; $r++):
      foreach ($tickerItems as $ti):
    ?>
    <span class="ticker-item">
      <?php echo lucide_icon($ti['icon']); ?>
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
        Superior Home Builders
        offer in <em>Mount Vernon?</em>
      </h2>
      <p class="hero-answer">
        Superior Home Builders handles every phase of residential and commercial
        construction in Mount Vernon and Eastern Oregon — full custom home builds,
        bathroom and kitchen remodels, structural framing, decks, window and door
        installation, and commercial projects. Licensed, insured, and building in
        Grant County for over <?= $yearsInBusiness ?> years, with free written estimates on every job.
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
            <?php echo lucide_icon($icon); ?>
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
      <a href="/services/" class="btn btn-lux btn-primary">
        View All Services
      </a>
    </div>

  </div><!-- /.container -->
</section>

<!-- ── SVG WAVE DIVIDER — white into ivory stats band ─────────── -->
<div class="divider-wave divider-wave--light-to-dark" aria-hidden="true">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C240,80 480,0 720,40 C960,80 1200,0 1440,40 L1440,80 L0,80 Z" style="fill:var(--lux-ivory)"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     STATS SECTION
════════════════════════════════════════════════════ -->
<section class="stats-section" data-watermark="<?= $yearsInBusiness ?>" aria-label="Superior Home Builders by the numbers">
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

<!-- ── SVG WAVE DIVIDER — ivory into the photo CTA band ───────── -->
<div class="divider-wave divider-wave--dark-to-light" aria-hidden="true" style="background:var(--color-primary)">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C360,0 720,80 1080,40 C1260,20 1350,60 1440,40 L1440,0 L0,0 Z" style="fill:var(--lux-ivory)"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     MID CTA BANNER
════════════════════════════════════════════════════ -->
<section class="cta-banner" aria-label="Get a free estimate">
  <div class="container">
    <div class="cta-banner-inner">
      <div class="cta-banner-copy reveal-up">
        <span class="lux-kicker">Since <?= $yearEstablished ?> &middot; Mount Vernon, Oregon</span>
        <h2>Ready to build something <em>that lasts?</em></h2>
        <p>
          Eastern Oregon homeowners have trusted Superior Home Builders for over <?= $yearsInBusiness ?> years.
          Get your free, no-obligation estimate — we typically respond within one business day.
        </p>
      </div>
      <div class="cta-banner-actions reveal-up reveal-delay-1">
        <a href="#estimate-form" class="btn btn-lux btn-secondary btn-lg">
          Get a Free Estimate
        </a>
        <a href="/contact/" class="btn btn-lux btn-outline btn-lg">
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
          Building <em>Eastern Oregon</em><br>
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
          <a href="/about/" class="btn btn-lux btn-outline-dark">
            Learn More About Us
          </a>
        </div>
      </div><!-- /.about-left -->

      <!-- RIGHT: Client photo + overlapping stat card -->
      <div class="about-right reveal-right">
        <div class="about-image-wrap">
          <img
            src="/assets/images/owner-eastern-oregon-builder.webp"
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

<!-- ── ANGLED SVG DIVIDER — white into ivory reviews ──────────── -->
<div class="divider-angle" aria-hidden="true" style="background:var(--lux-ivory)">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,0 1440,60 1440,0" style="fill:var(--color-bg)"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     SECTION 03 — REVIEWS
════════════════════════════════════════════════════ -->
<section class="numbered-section reviews-section" id="reviews" aria-label="Customer reviews">
  <span class="section-num" aria-hidden="true">03</span>
  <div class="container">

    <div class="section-title reveal-up">
      <span class="eyebrow-label">What Clients Say</span>
      <h2>Built on word-of-mouth across <em>Grant County</em></h2>
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
              <?php echo lucide_icon('star'); ?>
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
        <?php echo lucide_icon('star'); ?> Google Reviews
      </span>
      <span class="review-platform">
        <?php echo lucide_icon('thumbs-up'); ?> Facebook Reviews
      </span>
      <span class="review-platform">
        <?php echo lucide_icon('award'); ?> BBB Accredited
      </span>
    </div>

  </div>
</section>

<!-- ── WAVE DIVIDER — ivory reviews into white FAQ ────────────── -->
<div class="divider-wave" aria-hidden="true" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C320,80 640,0 960,40 C1120,60 1280,20 1440,40 L1440,0 L0,0 Z" style="fill:var(--lux-ivory)"/>
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
      <h2>What homeowners ask before hiring a <em>builder in Mount Vernon</em></h2>
    </div>

    <div class="faq-grid">
      <?php foreach ($homeFaqs as $faq): ?>
      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
          <?php echo lucide_icon('plus-circle'); ?>
          <h3 itemprop="name"><?= htmlspecialchars($faq['q']) ?></h3>
        </div>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text"><?= htmlspecialchars($faq['a']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:var(--space-2xl)" class="reveal-up">
      <a href="/contact/" class="btn btn-lux btn-primary">
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
      <h2>Building Knowledge for <em>Eastern Oregon</em> Homeowners</h2>
    </div>

    <!-- Featured post card — auto-pulls the latest post from includes/blog-data.php -->
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
    $latestPost = $blogPosts[0];
    ?>
    <article class="blog-preview-card reveal-up" aria-label="<?php echo htmlspecialchars($latestPost['title']); ?>">

      <div class="blog-preview-card__img-wrap">
        <img
          src="<?php echo htmlspecialchars($latestPost['image']); ?>"
          alt="<?php echo htmlspecialchars($latestPost['alt']); ?>"
          width="800"
          height="600"
          loading="lazy">
        <span class="blog-preview-card__badge"><?php echo htmlspecialchars($latestPost['category']); ?></span>
      </div>

      <div class="blog-preview-card__body">
        <div class="blog-preview-card__meta">
          <div class="blog-preview-card__meta-item">
            <?php echo lucide_icon('calendar'); ?>
            <time datetime="<?php echo htmlspecialchars($latestPost['dateISO']); ?>"><?php echo htmlspecialchars($latestPost['date']); ?></time>
          </div>
          <div class="blog-preview-card__meta-item">
            <?php echo lucide_icon('clock'); ?>
            <span><?php echo htmlspecialchars($latestPost['readtime']); ?></span>
          </div>
        </div>

        <h3 class="blog-preview-card__title">
          <a href="/blog/<?php echo htmlspecialchars($latestPost['slug']); ?>/">
            <?php echo htmlspecialchars($latestPost['title']); ?>
          </a>
        </h3>

        <p class="blog-preview-card__excerpt">
          <?php echo htmlspecialchars($latestPost['excerpt']); ?>
        </p>

        <a href="/blog/<?php echo htmlspecialchars($latestPost['slug']); ?>/" class="blog-preview-card__cta">
          Read the Full Article <?php echo lucide_icon('arrow-right'); ?>
        </a>
      </div>

    </article><!-- /.blog-preview-card -->

    <div class="blog-preview-all reveal-up">
      <a href="/blog/" class="btn btn-lux btn-outline-dark">
        View All Articles
      </a>
    </div>

  </div>
</section>

<!-- ── WAVE DIVIDER — blog preview into ivory closing CTA ─────── -->
<div class="divider-wave" aria-hidden="true" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,25 C360,50 1080,0 1440,25 L1440,50 L0,50 Z" style="fill:var(--lux-ivory)"/>
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
        <a href="#estimate-form" class="btn btn-lux btn-primary btn-lg">
          Get a Free Estimate
        </a>
        <a href="/services/" class="btn btn-lux btn-outline-dark btn-lg">
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
