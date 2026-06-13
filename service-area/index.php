<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Service Areas | Superior Home Builders | Mount Vernon, OR & Eastern Oregon';
$pageDescription = 'Superior Home Builders serves Mount Vernon, John Day, Canyon City, Prairie City, and communities throughout Eastern Oregon. Licensed general contractor for custom homes, remodeling & more.';
$canonicalUrl    = $siteUrl . '/service-area/';
$currentPage     = 'service-area';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg';
$heroImagePreload = $heroImage;
$ogImage         = $heroImage;

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',          'url' => $siteUrl . '/'],
  ['name' => 'Service Areas', 'url' => $siteUrl . '/service-area/'],
]);
$schemaMarkup = json_encode(
  ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs]],
  JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
);

// Area data for cards
$areas = [
  [
    'city'    => 'Mount Vernon',
    'state'   => 'OR',
    'slug'    => 'mount-vernon',
    'primary' => true,
    'tagline' => 'Our Home Base',
    'desc'    => 'Custom homes, full remodels, and commercial builds throughout the Mount Vernon community and Canyon Creek corridor.',
    'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604089870-onrdei-20220414_073700.jpg',
    'photoAlt'=> 'Construction project in Mount Vernon Oregon by Superior Home Builders',
  ],
  [
    'city'    => 'John Day',
    'state'   => 'OR',
    'slug'    => 'john-day',
    'primary' => false,
    'tagline' => 'Grant County Seat',
    'desc'    => 'Home builds, kitchen and bathroom remodels, and deck installations for John Day homeowners and business owners.',
    'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg',
    'photoAlt'=> 'Remodeling project in John Day Oregon by Superior Home Builders',
  ],
  [
    'city'    => 'Canyon City',
    'state'   => 'OR',
    'slug'    => 'canyon-city',
    'primary' => false,
    'tagline' => 'Historic Grant County',
    'desc'    => 'Renovations for historic homes and new custom builds in Canyon City, just minutes from our Mount Vernon headquarters.',
    'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604096131-uq4fqg-20220724_151821.jpg',
    'photoAlt'=> 'Home construction in Canyon City Oregon by Superior Home Builders',
  ],
  [
    'city'    => 'Prairie City',
    'state'   => 'OR',
    'slug'    => 'prairie-city',
    'primary' => false,
    'tagline' => 'Strawberry Mountain Region',
    'desc'    => 'Custom homes, ranch renovations, and remodeling projects for Prairie City and the surrounding Strawberry Mountain area.',
    'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604099376-0r19op-20220724_154635.jpg',
    'photoAlt'=> 'Deck and remodel project near Prairie City Oregon',
  ],
  // Grant County — additional communities
  [
    'city'    => 'Dayville',
    'state'   => 'OR',
    'slug'    => 'dayville',
    'primary' => false,
    'tagline' => 'John Day River Corridor',
    'desc'    => 'Home remodeling, framing, and construction along the Hwy 26 corridor through the Dayville area of the John Day River valley.',
    'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604104586-837vw8-20221127_142618.jpg',
    'photoAlt'=> 'Construction project in Dayville Oregon along the John Day River corridor',
  ],
  [
    'city'    => 'Long Creek',
    'state'   => 'OR',
    'slug'    => 'long-creek',
    'primary' => false,
    'tagline' => 'Northern Grant County',
    'desc'    => 'Custom builds and remodeling for Long Creek homeowners and ranchers in northern Grant County along the Hwy 395 corridor.',
    'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604105979-qifw3f-20230813_180947.jpg',
    'photoAlt'=> 'Home construction project in Long Creek Oregon northern Grant County',
  ],
  [
    'city'    => 'Monument',
    'state'   => 'OR',
    'slug'    => 'monument',
    'primary' => false,
    'tagline' => 'North Fork John Day',
    'desc'    => 'Remodeling, framing, and custom construction for Monument community members along the North Fork of the John Day River.',
    'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604110512-hpeyxa-20230904_195415.jpg',
    'photoAlt'=> 'Construction work near Monument Oregon along the North Fork John Day River',
  ],
  [
    'city'    => 'Seneca',
    'state'   => 'OR',
    'slug'    => 'seneca',
    'primary' => false,
    'tagline' => 'Bear Valley — 4,676 ft',
    'desc'    => 'High-elevation construction in Seneca — insulation upgrades, structural repairs, and new builds spec\'d for Bear Valley\'s extreme winter conditions.',
    'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604111859-dai6kd-20230910_202910.jpg',
    'photoAlt'=> 'High-elevation construction project in Seneca Oregon Bear Valley',
  ],
  // Harney County
  [
    'city'    => 'Burns',
    'state'   => 'OR',
    'slug'    => 'burns',
    'primary' => false,
    'tagline' => 'Harney County Seat',
    'desc'    => 'Custom homes, commercial remodeling, and remodeling services in Burns — the largest community in Harney County and the region\'s commercial hub.',
    'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604131715-gsv7qf-20250819_192028.jpg',
    'photoAlt'=> 'Construction and remodeling project in Burns Oregon Harney County seat',
  ],
  [
    'city'    => 'Hines',
    'state'   => 'OR',
    'slug'    => 'hines',
    'primary' => false,
    'tagline' => 'Gateway to Harney Basin',
    'desc'    => 'Home building, additions, and remodeling in Hines and the greater Burns–Hines area along the Silvies River in Harney County.',
    'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604127216-zp2jli-20240723_114655.jpg',
    'photoAlt'=> 'Home addition and remodeling project in Hines Oregon gateway to Harney Basin',
  ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   SERVICE AREAS OVERVIEW — Superior Home Builders
   Premium page styles | var() tokens only
   Techniques: layered hero, floating accent, area card grid, asymmetric
   split, stats watermark, SVG dividers, multi-direction reveals,
   animated counters, signature coverage section
   ════════════════════════════════════════════════════════════════════ */

/* ── HERO ──────────────────────────────────────────────────── */
.sa-hero {
  position: relative;
  min-height: 70vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImage; ?>');
  background-size: cover;
  background-position: center 40%;
  padding-top: var(--nav-height);
  overflow: hidden;
}
.sa-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-secondary-rgb), 0.85) 45%,
    rgba(var(--color-primary-rgb), 0.65) 100%);
  z-index: 1;
}
.sa-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.80' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  background-size: 180px;
  z-index: 2;
  pointer-events: none;
}
.sa-hero-floating {
  position: absolute;
  width: 480px;
  height: 480px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  top: -80px;
  right: -80px;
  z-index: 2;
  pointer-events: none;
}
.sa-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) 0 var(--space-3xl);
  color: #fff;
}
.sa-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  background: rgba(var(--color-accent-rgb), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
  color: var(--color-accent);
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: 5px var(--space-md);
  border-radius: 100px;
  margin-bottom: var(--space-md);
}
.sa-hero h1 {
  font-family: var(--font-heading);
  font-size: var(--fs-h1);
  font-weight: 800;
  line-height: 1.05;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-lg);
}
.sa-hero h1 em {
  font-style: italic;
  color: var(--color-accent);
}
.sa-hero-answer {
  font-size: clamp(1rem, 1.25vw, 1.15rem);
  color: rgba(255,255,255,0.85);
  max-width: 62ch;
  line-height: 1.75;
  margin-bottom: var(--space-xl);
}
.sa-hero-stats {
  display: flex;
  gap: var(--space-2xl);
  flex-wrap: wrap;
  margin-bottom: var(--space-xl);
}
.sa-hero-stat strong {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3vw, 2.4rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
}
.sa-hero-stat span {
  font-size: var(--fs-xs);
  color: rgba(255,255,255,0.65);
  text-transform: uppercase;
  letter-spacing: 0.08em;
}
.sa-hero-actions {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.sa-hero-breadcrumb {
  margin-top: var(--space-2xl);
  font-size: var(--fs-xs);
  color: rgba(255,255,255,0.45);
}
.sa-hero-breadcrumb a {
  color: rgba(255,255,255,0.60);
  transition: color var(--transition);
}
.sa-hero-breadcrumb a:hover { color: var(--color-accent); }
.sa-hero-breadcrumb .sep { margin: 0 4px; }

/* ── SVG DIVIDERS ───────────────────────────────────────────── */
.sa-divider { display: block; width: 100%; overflow: hidden; line-height: 0; }
.sa-divider svg { display: block; width: 100%; }

/* ── INTRO STRIP ────────────────────────────────────────────── */
.sa-intro {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  position: relative;
}
.sa-intro-grid {
  display: grid;
  grid-template-columns: 1fr 340px;
  gap: var(--space-4xl);
  align-items: center;
}
.sa-intro-content h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.sa-intro-content p.answer-block {
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.75;
  max-width: 65ch;
  margin-bottom: var(--space-xl);
}
.sa-identity {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.7;
  padding: var(--space-lg) var(--space-xl);
  border-left: 3px solid var(--color-accent);
  background: var(--color-card-tint-1);
  border-radius: 0 var(--radius) var(--radius) 0;
  max-width: 65ch;
  margin-bottom: var(--space-lg);
}
.sa-coverage-box {
  background: var(--color-primary);
  border-radius: var(--radius-lg);
  padding: var(--space-2xl);
  color: #fff;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.sa-coverage-box::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 70% 30%, rgba(var(--color-accent-rgb),0.10) 0%, transparent 70%);
}
.sa-coverage-box h3 {
  font-family: var(--font-heading);
  font-size: 1.3rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: var(--space-lg);
  position: relative;
}
.sa-coverage-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-xl);
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
  position: relative;
}
.sa-coverage-list li {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-size: var(--fs-sm);
  color: rgba(255,255,255,0.80);
}
.sa-coverage-list li svg { color: var(--color-accent); flex-shrink: 0; }
.sa-coverage-list li strong { color: #fff; }

/* ── AREAS GRID ─────────────────────────────────────────────── */
.sa-areas {
  padding: var(--space-4xl) 0 var(--space-4xl);
  background: var(--color-bg-alt);
}
.sa-areas-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.sa-areas-header .eyebrow-label {
  display: inline-block;
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-secondary);
  margin-bottom: var(--space-sm);
}
.sa-areas-header h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-sm);
}
.sa-areas-header p {
  font-size: var(--fs-body);
  color: var(--color-text-light);
  max-width: 60ch;
  margin: 0 auto;
  line-height: 1.7;
}

.sa-areas-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-lg);
}

.sa-area-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  background: var(--color-bg);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition), box-shadow var(--transition);
  text-decoration: none;
  color: inherit;
}
.sa-area-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
}
.sa-area-card__img {
  position: relative;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}
.sa-area-card__img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.6s ease;
}
.sa-area-card:hover .sa-area-card__img img {
  transform: scale(1.06);
}
.sa-area-card__badge {
  position: absolute;
  top: var(--space-md);
  left: var(--space-md);
  background: var(--color-secondary);
  color: #fff;
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 3px 10px;
  border-radius: 100px;
}
.sa-area-card__badge--primary {
  background: var(--color-accent);
  color: var(--color-primary);
}
.sa-area-card__body {
  padding: var(--space-xl) var(--space-lg) var(--space-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
  flex: 1;
}
.sa-area-card__city {
  font-family: var(--font-heading);
  font-size: 1.35rem;
  font-weight: 800;
  color: var(--color-primary);
  line-height: 1.2;
}
.sa-area-card__state {
  font-size: var(--fs-xs);
  color: var(--color-text-light);
  font-weight: 500;
  letter-spacing: 0.05em;
}
.sa-area-card__desc {
  font-size: var(--fs-sm);
  color: var(--color-text);
  line-height: 1.6;
  flex: 1;
}
.sa-area-card__cta {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: var(--fs-sm);
  font-weight: 700;
  color: var(--color-secondary);
  margin-top: var(--space-sm);
  transition: color var(--transition), gap var(--transition);
}
.sa-area-card:hover .sa-area-card__cta {
  color: var(--color-primary);
  gap: 8px;
}

/* ── WHY EASTERN OREGON ─────────────────────────────────────── */
.sa-why {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  position: relative;
  overflow: hidden;
}
.sa-why-watermark {
  position: absolute;
  right: -40px;
  top: 50%;
  transform: translateY(-50%);
  font-family: var(--font-heading);
  font-size: clamp(100px, 14vw, 160px);
  font-weight: 900;
  color: rgba(var(--color-primary-rgb), 0.04);
  line-height: 1;
  pointer-events: none;
  user-select: none;
  white-space: nowrap;
}
.sa-why-grid {
  display: grid;
  grid-template-columns: 1fr 460px;
  gap: var(--space-4xl);
  align-items: center;
  position: relative;
}
.sa-why-content h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-lg);
}
.sa-why-content p {
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.75;
  max-width: 65ch;
  margin-bottom: var(--space-xl);
}
.sa-why-points {
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
}
.sa-why-point {
  display: flex;
  gap: var(--space-md);
  align-items: flex-start;
}
.sa-why-point-icon {
  width: 44px;
  height: 44px;
  border-radius: var(--radius);
  background: var(--color-card-tint-1);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--color-secondary);
}
.sa-why-point div strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: 2px;
}
.sa-why-point div span {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}
.sa-why-photo {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  aspect-ratio: 4 / 5;
  box-shadow: var(--shadow-lg);
}
.sa-why-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.sa-why-photo::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb), 0.55) 100%);
}
.sa-why-photo-tag {
  position: absolute;
  bottom: var(--space-lg);
  left: var(--space-lg);
  right: var(--space-lg);
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-size: 0.9rem;
  font-weight: 800;
  padding: var(--space-sm) var(--space-md);
  border-radius: var(--radius);
  z-index: 2;
  text-align: center;
}

/* ── SERVICES TICKER ────────────────────────────────────────── */
.sa-services-strip {
  padding: var(--space-3xl) 0;
  background: var(--color-primary);
  overflow: hidden;
}
.sa-services-strip h3 {
  font-family: var(--font-heading);
  font-size: var(--fs-h3);
  font-weight: 700;
  color: #fff;
  text-align: center;
  margin-bottom: var(--space-2xl);
}
.sa-services-chips {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
  justify-content: center;
}
.sa-chip {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  padding: var(--space-sm) var(--space-lg);
  border-radius: 100px;
  border: 1px solid rgba(255,255,255,0.15);
  background: rgba(255,255,255,0.06);
  color: rgba(255,255,255,0.80);
  font-size: var(--fs-sm);
  font-weight: 500;
  transition: background var(--transition), border-color var(--transition), color var(--transition);
}
.sa-chip:hover, .sa-chip--accent {
  background: rgba(var(--color-accent-rgb), 0.15);
  border-color: rgba(var(--color-accent-rgb), 0.40);
  color: var(--color-accent);
}
.sa-chip svg { flex-shrink: 0; }

/* ── FINAL CTA ──────────────────────────────────────────────── */
.sa-cta {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.sa-cta::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 0;
  transform: translateX(-50%);
  width: 600px;
  height: 600px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  pointer-events: none;
}
.sa-cta h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md);
  position: relative;
}
.sa-cta p {
  font-size: var(--fs-body);
  color: var(--color-text-light);
  max-width: 58ch;
  margin: 0 auto var(--space-2xl);
  line-height: 1.75;
  position: relative;
}
.sa-cta-row {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
  position: relative;
}

/* ── REVEALS ────────────────────────────────────────────────── */
.reveal-up    { opacity: 0; transform: translateY(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-left  { opacity: 0; transform: translateX(-28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-right { opacity: 0; transform: translateX(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-scale { opacity: 0; transform: scale(.93); transition: opacity .65s ease, transform .65s ease; }
.reveal-up.visible,
.reveal-left.visible,
.reveal-right.visible,
.reveal-scale.visible { opacity: 1; transform: none; }
.reveal-delay-1 { transition-delay: .1s; }
.reveal-delay-2 { transition-delay: .2s; }
.reveal-delay-3 { transition-delay: .3s; }
.reveal-delay-4 { transition-delay: .4s; }
.reveal-delay-5 { transition-delay: .5s; }

/* ── RESPONSIVE ─────────────────────────────────────────────── */
@media (max-width: 1100px) {
  .sa-intro-grid,
  .sa-why-grid { grid-template-columns: 1fr; }
  .sa-why-photo { aspect-ratio: 16/9; }
  .sa-why-watermark { display: none; }
}
@media (max-width: 900px) {
  .sa-areas-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 600px) {
  .sa-areas-grid { grid-template-columns: 1fr; }
  .sa-hero-stats { gap: var(--space-xl); }
  .sa-hero-actions { flex-direction: column; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ══════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════ -->
<section class="sa-hero" aria-label="Service areas hero">
  <div class="sa-hero-floating" aria-hidden="true"></div>
  <div class="sa-hero-inner">
    <div class="container">
      <span class="sa-hero-eyebrow"><?php echo lucide_icon('map-pin'); ?> Where We Build</span>
      <h1>Custom Home Building &amp; Remodeling in<br><em>Mount Vernon, OR</em> &amp; Beyond</h1>
      <p class="sa-hero-answer">Superior Home Builders is a licensed Oregon general contractor (CCB# 147123) based in Mount Vernon, serving Grant County and surrounding communities across Eastern Oregon. For over <?= $yearsInBusiness ?> years we've built homes, remodeled kitchens and bathrooms, framed structures, and installed windows and doors for homeowners throughout Grant County and beyond.</p>
      <div class="sa-hero-stats">
        <div class="sa-hero-stat">
          <strong>20+</strong>
          <span>Years Serving<br>Eastern Oregon</span>
        </div>
        <div class="sa-hero-stat">
          <strong>10</strong>
          <span>Service Areas<br>Across Eastern Oregon</span>
        </div>
        <div class="sa-hero-stat">
          <strong>19</strong>
          <span>Construction<br>Services</span>
        </div>
        <div class="sa-hero-stat">
          <strong>100%</strong>
          <span>Oregon<br>Licensed</span>
        </div>
      </div>
      <div class="sa-hero-actions">
        <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
        <?php endif; ?>
      </div>
      <nav class="sa-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">›</span>
        <span aria-current="page">Service Areas</span>
      </nav>
    </div>
  </div>
</section>

<div class="sa-divider" style="background:var(--color-primary)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 C480,60 960,0 1440,35 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- ══════════════════════════════════════════════════
     INTRO
════════════════════════════════════════════════════ -->
<section class="sa-intro" aria-label="Service coverage introduction">
  <div class="container">
    <div class="sa-intro-grid">
      <div class="reveal-left">
        <h2>How far does Superior Home Builders travel for construction projects in Eastern Oregon?</h2>
        <p class="answer-block">Superior Home Builders is headquartered in Mount Vernon and regularly takes projects throughout Grant County — including John Day, Canyon City, and Prairie City — as well as communities across Eastern Oregon. Our primary service radius covers the communities where we have the deepest relationships and longest track records. We're familiar with local permit offices, inspection schedules, and the specific construction challenges of Eastern Oregon's climate.</p>
        <p class="sa-identity">Superior Home Builders is a licensed Oregon general contractor (CCB# 147123) based in Mount Vernon, OR 97865, serving Eastern Oregon with custom home building, remodeling, framing, and commercial construction since 2001.</p>
        <a href="/contact/" class="btn btn-primary">Check Availability in Your Area</a>
      </div>
      <div class="sa-coverage-box reveal-scale">
        <h3><?php echo lucide_icon('map', '', 'width:20px;height:20px;vertical-align:middle;margin-right:6px'); ?> Service Coverage</h3>
        <ul class="sa-coverage-list">
          <?php foreach ($areas as $area): ?>
          <li>
            <?php echo lucide_icon('map-pin', '', 'width:16px;height:16px'); ?>
            <span><strong><?php echo htmlspecialchars($area['city']); ?>, <?php echo htmlspecialchars($area['state']); ?></strong>
              <?php if ($area['primary']): ?>&nbsp;<small style="background:rgba(var(--color-accent-rgb),0.25);color:var(--color-accent);font-size:0.65rem;font-weight:700;padding:1px 6px;border-radius:100px;text-transform:uppercase">Home Base</small><?php endif; ?>
            </span>
          </li>
          <?php endforeach; ?>
        </ul>
        <a href="/contact/" class="btn btn-secondary w-full">Request a Free Estimate</a>
      </div>
    </div>
  </div>
</section>

<div class="sa-divider" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,35 C360,0 1080,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- ══════════════════════════════════════════════════
     AREAS GRID
════════════════════════════════════════════════════ -->
<section class="sa-areas" aria-label="All service areas">
  <div class="container">
    <div class="sa-areas-header reveal-up">
      <span class="eyebrow-label">Communities We Serve</span>
      <h2>Which cities and towns does Superior Home Builders serve?</h2>
      <p>From our Grant County headquarters to the Willamette Valley, here's where we build.</p>
    </div>
    <div class="sa-areas-grid">
      <?php foreach ($areas as $i => $area):
        $slug = $area['slug'];
        $revealClass = ($i % 2 === 0) ? 'reveal-left' : 'reveal-right';
        $delay = 'reveal-delay-' . (($i % 4) + 1);
      ?>
      <a href="/areas/<?php echo htmlspecialchars($slug); ?>/"
         class="sa-area-card <?php echo $revealClass; ?> <?php echo $delay; ?>"
         aria-label="<?php echo htmlspecialchars($area['city']); ?> service area">
        <div class="sa-area-card__img">
          <img src="<?php echo htmlspecialchars($area['photo']); ?>"
               alt="<?php echo htmlspecialchars($area['photoAlt']); ?>"
               width="600" height="338" loading="lazy">
          <span class="sa-area-card__badge <?php echo $area['primary'] ? 'sa-area-card__badge--primary' : ''; ?>">
            <?php echo htmlspecialchars($area['tagline']); ?>
          </span>
        </div>
        <div class="sa-area-card__body">
          <div>
            <div class="sa-area-card__city"><?php echo htmlspecialchars($area['city']); ?></div>
            <div class="sa-area-card__state"><?php echo htmlspecialchars($area['state']); ?> · <?php echo $area['primary'] ? 'Primary Service Area' : 'Service Area'; ?></div>
          </div>
          <p class="sa-area-card__desc"><?php echo htmlspecialchars($area['desc']); ?></p>
          <span class="sa-area-card__cta">
            View <?php echo htmlspecialchars($area['city']); ?> details
            <?php echo lucide_icon('arrow-right', '', 'width:16px;height:16px'); ?>
          </span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="sa-divider" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,15 C720,56 720,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- ══════════════════════════════════════════════════
     WHY EASTERN OREGON
════════════════════════════════════════════════════ -->
<section class="sa-why" aria-label="Why Superior Home Builders throughout Eastern Oregon">
  <div class="sa-why-watermark" aria-hidden="true">EASTERN OR</div>
  <div class="container">
    <div class="sa-why-grid">
      <div class="reveal-left">
        <h2>Why does it matter to hire a contractor who actually knows Eastern Oregon?</h2>
        <p>Building in Grant County and the surrounding high desert region is not the same as building in the Willamette Valley. The elevation, temperature swings, remoteness from material suppliers, and the character of the existing housing stock all require local experience — not just general construction knowledge.</p>
        <div class="sa-why-points">
          <div class="sa-why-point">
            <div class="sa-why-point-icon"><?php echo lucide_icon('thermometer', '', 'width:20px;height:20px'); ?></div>
            <div>
              <strong>Built for Eastern Oregon winters</strong>
              <span>Freeze-thaw cycles, heavy snowloads on the Blue Mountains side, and temperature swings of 60°F in a single day demand materials, insulation specs, and moisture management details that a valley contractor won't default to.</span>
            </div>
          </div>
          <div class="sa-why-point">
            <div class="sa-why-point-icon"><?php echo lucide_icon('clock', '', 'width:20px;height:20px'); ?></div>
            <div>
              <strong>We know the permit offices</strong>
              <span>Grant County's inspection and permit process has its own rhythms and timelines. We've been navigating the local building department for over 25 years, which means your project doesn't stall waiting for information.</span>
            </div>
          </div>
          <div class="sa-why-point">
            <div class="sa-why-point-icon"><?php echo lucide_icon('truck', '', 'width:20px;height:20px'); ?></div>
            <div>
              <strong>Material logistics solved</strong>
              <span>Delivering specialty materials to rural Grant County communities requires planning and supplier relationships. We've built the supply chain so you're not waiting weeks on a cabinet order because no one planned for the distance.</span>
            </div>
          </div>
          <div class="sa-why-point">
            <div class="sa-why-point-icon"><?php echo lucide_icon('home', '', 'width:20px;height:20px'); ?></div>
            <div>
              <strong>Deep familiarity with existing stock</strong>
              <span>Most homes in Mount Vernon, Canyon City, and John Day were built between 1940 and 1985. We've remodeled hundreds of them and know exactly where the surprises hide — old wiring, uninsulated walls, settling foundations — and how to price for it honestly.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="reveal-scale">
        <div class="sa-why-photo">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg"
               alt="Superior Home Builders construction work in Eastern Oregon"
               width="460" height="575" loading="lazy">
          <div class="sa-why-photo-tag">25+ Years — Eastern Oregon Built</div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="sa-divider" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 C480,0 960,56 1440,25 L1440,56 L0,56 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- ══════════════════════════════════════════════════
     SERVICES OFFERED ACROSS ALL AREAS
════════════════════════════════════════════════════ -->
<section class="sa-services-strip" aria-label="Services available across all areas">
  <div class="container">
    <h3 class="reveal-up">Services available in all locations</h3>
    <div class="sa-services-chips">
      <?php
      $serviceIcons = [
        'bathroom-remodeling'  => 'bath',
        'kitchen-remodeling'   => 'utensils',
        'windows-and-doors'    => 'door-open',
        'decks'                => 'tree-pine',
        'framing'              => 'hammer',
        'custom-home-building' => 'home',
        'general-remodeling'   => 'wrench',
        'commercial-construction' => 'building-2',
      ];
      foreach ($services as $si => $svc):
        $icon = $serviceIcons[$svc['slug']] ?? 'check-circle';
        $accentClass = ($si % 3 === 0) ? 'sa-chip--accent' : '';
      ?>
      <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/"
         class="sa-chip <?php echo $accentClass; ?> reveal-up reveal-delay-<?php echo ($si % 4) + 1; ?>">
        <?php echo lucide_icon($icon, '', 'width:15px;height:15px'); ?>
        <?php echo htmlspecialchars($svc['name']); ?>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="sa-divider" style="background:var(--color-primary)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C360,10 1080,56 1440,15 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- ══════════════════════════════════════════════════
     FINAL CTA
════════════════════════════════════════════════════ -->
<section class="sa-cta" aria-label="Get a free estimate">
  <div class="container reveal-up">
    <h2>Ready to build or remodel in Eastern Oregon?</h2>
    <p>Tell us your city and your project — we'll let you know if we're the right fit and schedule a free on-site estimate. No obligation, no pressure, just honest answers from an experienced Eastern Oregon contractor.</p>
    <div class="sa-cta-row">
      <a href="/contact/" class="btn btn-primary btn-lg">Request a Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-secondary btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
