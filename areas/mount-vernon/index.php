<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Home Building & Remodeling in Mount Vernon, OR | Superior Home Builders';
$pageDescription = 'Superior Home Builders is Mount Vernon, OR\'s home base — licensed general contractor for custom home building, kitchen & bathroom remodeling, decks, framing, and commercial construction in Grant County since 2001.';
$canonicalUrl    = $siteUrl . '/areas/mount-vernon/';
$currentPage     = 'service-area';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604089870-onrdei-20220414_073700.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',          'url' => $siteUrl . '/'],
  ['name' => 'Service Areas', 'url' => $siteUrl . '/service-area/'],
  ['name' => 'Mount Vernon',  'url' => $siteUrl . '/areas/mount-vernon/'],
]);

$localBusiness = [
  '@context' => 'https://schema.org',
  '@type'    => 'HomeAndConstructionBusiness',
  '@id'      => $siteUrl . '/areas/mount-vernon/#local',
  'name'     => $siteName,
  'url'      => $siteUrl . '/',
  'telephone' => $phone,
  'address'  => [
    '@type'           => 'PostalAddress',
    'streetAddress'   => $address['street'],
    'addressLocality' => 'Mount Vernon',
    'addressRegion'   => 'OR',
    'postalCode'      => '97865',
    'addressCountry'  => 'US',
  ],
  'areaServed' => [
    '@type'         => 'City',
    'name'          => 'Mount Vernon',
    'addressRegion' => 'OR',
  ],
  'provider' => ['@id' => $siteUrl . '/#organization'],
];

$schemaMarkup = json_encode(
  ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $localBusiness]],
  JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
);

$faqs = [
  [
    'q' => 'Does Superior Home Builders take projects in Mount Vernon, OR?',
    'a' => 'Yes — Mount Vernon is Superior Home Builders\' home base. Our office and crew are based in Mount Vernon, which means faster project starts, no travel markups, and a team that genuinely knows the community. We take custom home builds, full remodels, decks, framing, window replacements, and commercial construction throughout the Mount Vernon area.',
  ],
  [
    'q' => 'What permit office handles construction in Mount Vernon, OR?',
    'a' => 'Construction permits in Mount Vernon are issued through Grant County\'s Building Department in Canyon City. Superior Home Builders handles all permit applications and inspection scheduling for every permitted project we take on — homeowners don\'t need to navigate the county office themselves.',
  ],
  [
    'q' => 'Are older homes in Mount Vernon harder to remodel?',
    'a' => 'Many homes in Mount Vernon were built between the 1940s and 1980s. Remodeling them often uncovers older wiring, minimal insulation, and settling in the foundation or framing. Because we\'ve worked on hundreds of these homes, we build a contingency assessment into every estimate and know what to look for before the demo begins. You won\'t face a surprise change order on day three.',
  ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   MOUNT VERNON SERVICE AREA — Superior Home Builders
   Premium page styles | var() tokens only
   Techniques: layered hero, bento local signals, asymmetric expert grid,
   process timeline, services-grid cards, FAQ accordion, floating accent,
   SVG dividers, multi-direction reveals
   ════════════════════════════════════════════════════════════════════ */

/* ── HERO ──────────────────────────────────────────────────── */
.area-hero {
  position: relative;
  min-height: 68vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImage; ?>');
  background-size: cover;
  background-position: center 45%;
  padding-top: var(--nav-height);
  overflow: hidden;
}
.area-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(120deg,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(var(--color-secondary-rgb), 0.82) 50%,
    rgba(var(--color-primary-rgb), 0.55) 100%);
  z-index: 1;
}
.area-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  background-size: 180px;
  z-index: 2;
  pointer-events: none;
}
.area-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) 0 var(--space-3xl);
  color: #fff;
}
.area-hero-eyebrow {
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
.area-hero h1 {
  font-family: var(--font-heading);
  font-size: var(--fs-h1);
  font-weight: 800;
  line-height: 1.05;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-lg);
}
.area-hero h1 em { font-style: italic; color: var(--color-accent); }
.area-hero-answer {
  font-size: clamp(1rem, 1.25vw, 1.15rem);
  color: rgba(255,255,255,0.85);
  max-width: 62ch;
  line-height: 1.75;
  margin-bottom: var(--space-xl);
}
.area-hero-trust {
  display: flex;
  gap: var(--space-lg);
  flex-wrap: wrap;
  margin-bottom: var(--space-xl);
}
.area-hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--fs-sm);
  color: rgba(255,255,255,0.75);
}
.area-hero-trust-item svg { color: var(--color-accent); flex-shrink: 0; }
.area-hero-actions {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.area-breadcrumb {
  margin-top: var(--space-2xl);
  font-size: var(--fs-xs);
  color: rgba(255,255,255,0.45);
}
.area-breadcrumb a { color: rgba(255,255,255,0.60); }
.area-breadcrumb a:hover { color: var(--color-accent); }
.area-breadcrumb .sep { margin: 0 4px; }

/* ── SVG DIVIDERS ───────────────────────────────────────────── */
.area-divider { display: block; width: 100%; overflow: hidden; line-height: 0; }
.area-divider svg { display: block; width: 100%; }

/* ── LOCAL SIGNALS ──────────────────────────────────────────── */
.area-locals {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  position: relative;
  overflow: hidden;
}
.area-locals-floating {
  position: absolute;
  top: -60px;
  right: -80px;
  width: 320px;
  height: 320px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.05);
  pointer-events: none;
}
.area-locals-intro {
  max-width: 70ch;
  margin: 0 auto var(--space-3xl);
  text-align: center;
}
.area-locals-intro h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.area-locals-intro p.answer-block {
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.75;
}
.area-bento {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-md);
}
.area-bento-card {
  border-radius: 12px;
  padding: var(--space-xl) var(--space-lg);
  position: relative;
  overflow: hidden;
}
.area-bento-card:nth-child(1) { background: var(--color-card-tint-1); }
.area-bento-card:nth-child(2) { background: var(--color-card-tint-2); }
.area-bento-card:nth-child(3) { background: var(--color-card-tint-3); }
.area-bento-card:nth-child(4) { background: var(--color-card-tint-neutral); }
.area-bento-card .icon-wrap {
  width: 44px;
  height: 44px;
  border-radius: 10px;
  background: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-md);
  color: var(--color-primary);
}
.area-bento-card h3 {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.area-bento-card p {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}

/* ── SERVICES IN THIS AREA ──────────────────────────────────── */
.area-services {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.area-services-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.area-services-header h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-sm);
}
.area-services-header p {
  font-size: var(--fs-body);
  color: var(--color-text-light);
  max-width: 60ch;
  margin: 0 auto;
  line-height: 1.7;
}
.services-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-md);
}
@media (max-width: 1199px) { .services-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 600px)  { .services-grid { grid-template-columns: 1fr; } }
.service-card-with-image {
  border-radius: var(--radius-md);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition), box-shadow var(--transition);
}
.service-card-with-image:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.service-card__image { position: relative; aspect-ratio: 5/3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .5s ease; }
.service-card-with-image:hover .service-card__image img { transform: scale(1.04); }
.service-card__body {
  padding: var(--space-lg) var(--space-md) var(--space-md);
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
  border-radius: 50%;
  background: #fff;
  box-shadow: var(--shadow-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: -44px;
  margin-bottom: var(--space-xs);
  color: var(--color-accent-dark);
  flex-shrink: 0;
}
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { font-family: var(--font-heading); color: var(--color-primary); margin: 0; font-size: 1.2rem; line-height: 1.2; }
.service-card__desc { color: var(--color-text); margin: 0; font-size: var(--fs-sm); line-height: 1.55; }
.service-card-with-image ul { list-style: none; padding: 0; margin: var(--space-xs) 0 0; width: 100%; text-align: left; display: flex; flex-direction: column; gap: var(--space-xs); border-top: 1px solid var(--color-border); padding-top: var(--space-md); }
.service-card-with-image ul li { font-size: 0.875rem; color: var(--color-text); padding-left: 1.25rem; position: relative; }
.service-card-with-image ul li::before { content: "•"; color: var(--color-accent-dark); font-weight: 700; position: absolute; left: .25rem; top: 0; }
.service-card__cta { margin-top: auto; padding: var(--space-sm) 0 0; color: var(--color-secondary); font-weight: 700; font-size: var(--fs-sm); border-top: 1px solid var(--color-border); width: 100%; text-align: center; transition: color var(--transition); }
.service-card__cta::after { content: " →"; display: inline-block; transition: transform var(--transition); }
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(3px); }
.card-tint-1 { background: var(--color-card-tint-1); }
.card-tint-2 { background: var(--color-card-tint-2); }
.card-tint-3 { background: var(--color-card-tint-3); }

/* ── WHY US ─────────────────────────────────────────────────── */
.area-why {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.area-why-grid {
  display: grid;
  grid-template-columns: 480px 1fr;
  gap: var(--space-4xl);
  align-items: center;
}
.area-why-photo {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  aspect-ratio: 4 / 5;
  box-shadow: var(--shadow-lg);
}
.area-why-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
.area-why-photo::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb), 0.55) 100%);
}
.area-why-badge {
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
.area-why-content h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-lg);
}
.area-why-content p.answer-block {
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.75;
  max-width: 65ch;
  margin-bottom: var(--space-xl);
}
.area-why-points {
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
  margin-bottom: var(--space-xl);
}
.area-why-point {
  display: flex;
  gap: var(--space-md);
  align-items: flex-start;
}
.area-why-point .num {
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 900;
  color: var(--color-accent-dark);
  min-width: 34px;
  line-height: 1;
}
.area-why-point div strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: 2px;
}
.area-why-point div span {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}
.area-identity {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.7;
  padding: var(--space-md) var(--space-lg);
  border-left: 3px solid var(--color-accent);
  background: var(--color-card-tint-1);
  border-radius: 0 var(--radius) var(--radius) 0;
  max-width: 65ch;
}

/* ── FAQ ────────────────────────────────────────────────────── */
.area-faq { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.area-faq h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.area-faq p.answer-block {
  font-size: var(--fs-body);
  color: var(--color-text-light);
  text-align: center;
  max-width: 60ch;
  margin: 0 auto var(--space-3xl);
  line-height: 1.75;
}
.area-faq-list { max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: var(--space-md); }
.area-faq-item { border: 1px solid var(--color-border); border-radius: 10px; overflow: hidden; }
.area-faq-question {
  width: 100%; background: none; border: none;
  display: flex; align-items: center; justify-content: space-between;
  gap: var(--space-md); padding: var(--space-lg) var(--space-xl);
  font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700;
  color: var(--color-primary); cursor: pointer; text-align: left;
}
.area-faq-question:hover { background: var(--color-bg); }
.area-faq-question svg { flex-shrink: 0; transition: transform var(--transition); color: var(--color-accent-dark); }
.area-faq-item.open .area-faq-question svg { transform: rotate(45deg); }
.area-faq-answer {
  display: none;
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--fs-body);
  color: var(--color-text-light);
  line-height: 1.75;
  border-top: 1px solid var(--color-border);
}
.area-faq-item.open .area-faq-answer { display: block; }

/* ── FINAL CTA ──────────────────────────────────────────────── */
.area-final-cta { padding: var(--space-4xl) 0; background: var(--color-primary); text-align: center; }
.area-final-cta h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.area-final-cta p {
  font-size: var(--fs-body);
  color: rgba(255,255,255,0.75);
  max-width: 58ch;
  margin: 0 auto var(--space-2xl);
  line-height: 1.75;
}
.area-final-cta .cta-row {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── REVEALS ────────────────────────────────────────────────── */
.reveal-up    { opacity: 0; transform: translateY(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-left  { opacity: 0; transform: translateX(-28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-right { opacity: 0; transform: translateX(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-scale { opacity: 0; transform: scale(.93); transition: opacity .65s ease, transform .65s ease; }
.reveal-up.visible,.reveal-left.visible,.reveal-right.visible,.reveal-scale.visible { opacity: 1; transform: none; }
.reveal-delay-1{transition-delay:.1s} .reveal-delay-2{transition-delay:.2s}
.reveal-delay-3{transition-delay:.3s} .reveal-delay-4{transition-delay:.4s}

/* ── RESPONSIVE ─────────────────────────────────────────────── */
@media (max-width: 1100px) {
  .area-why-grid { grid-template-columns: 1fr; }
  .area-why-photo { aspect-ratio: 16/9; }
}
@media (max-width: 768px) {
  .area-bento { grid-template-columns: 1fr 1fr; }
  .area-hero-actions { flex-direction: column; }
}
@media (max-width: 480px) {
  .area-bento { grid-template-columns: 1fr; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ══════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════ -->
<section class="area-hero" aria-label="Mount Vernon service area hero">
  <div class="area-hero-inner">
    <div class="container">
      <span class="area-hero-eyebrow"><?php echo lucide_icon('map-pin'); ?> Mount Vernon, OR · Our Home Base</span>
      <h1>Custom Home Building &amp; Remodeling in<br><em>Mount Vernon, OR</em></h1>
      <p class="area-hero-answer">Superior Home Builders is based right here in Mount Vernon, OR — making us the local contractor Grant County homeowners and business owners call first for custom homes, kitchen and bathroom remodels, decks, framing, windows and doors, and commercial construction. We've built and remodeled throughout the Canyon Creek corridor and South Fork John Day River valley for over 25 years.</p>
      <div class="area-hero-trust">
        <span class="area-hero-trust-item"><?php echo lucide_icon('map-pin'); ?> Based in Mount Vernon</span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Licensed &amp; Insured &middot; CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('calendar'); ?> Est. 2001</span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('file-text'); ?> Free Written Estimate</span>
      </div>
      <div class="area-hero-actions">
        <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate in Mount Vernon</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
        <?php endif; ?>
      </div>
      <nav class="area-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">›</span>
        <a href="/service-area/">Service Areas</a><span class="sep">›</span>
        <span aria-current="page">Mount Vernon</span>
      </nav>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-primary)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,25 C480,56 960,0 1440,30 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- ══════════════════════════════════════════════════
     LOCAL SIGNALS
════════════════════════════════════════════════════ -->
<section class="area-locals" aria-label="About building in Mount Vernon, OR">
  <div class="area-locals-floating" aria-hidden="true"></div>
  <div class="container">
    <div class="area-locals-intro reveal-up">
      <h2>What makes building and remodeling in Mount Vernon, OR different?</h2>
      <p class="answer-block">Superior Home Builders has been serving the Mount Vernon community since 2001. As a licensed Oregon contractor based on Highway 395 in Grant County, we understand the specific conditions, housing stock, and permit processes that define construction near me in Mount Vernon. From the Canyon Creek drainage to the agricultural lands east of town, every project we take on benefits from 25+ years of local experience.</p>
    </div>
    <div class="area-bento">
      <div class="area-bento-card reveal-up reveal-delay-1">
        <div class="icon-wrap"><?php echo lucide_icon('thermometer'); ?></div>
        <h3>Eastern Oregon climate</h3>
        <p>Mount Vernon sits at roughly 2,800 feet in the Blue Mountains foothills. Temperature swings of 60°F between summer highs and winter lows, heavy snowloads, and hard freeze-thaw cycles demand construction practices rarely taught in valley contractor schools — we build for these conditions by default.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-2">
        <div class="icon-wrap"><?php echo lucide_icon('home'); ?></div>
        <h3>1940s–1980s housing stock</h3>
        <p>The majority of Mount Vernon homes were built between 1945 and 1985 — ranch-style and farmhouse layouts on the Canyon Creek corridor and along Hwy 395. Remodeling these homes often reveals undersized electrical panels, minimal ceiling insulation, and settled framing we know exactly how to address without ballooning your budget.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-3">
        <div class="icon-wrap"><?php echo lucide_icon('map'); ?></div>
        <h3>Grant County permits</h3>
        <p>Permits for construction in Mount Vernon are handled through Grant County Building Department in Canyon City, 6 miles away. We manage all permit applications and inspection scheduling — your project doesn't stall because the paperwork is unfamiliar territory for an out-of-area contractor.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-4">
        <div class="icon-wrap"><?php echo lucide_icon('truck'); ?></div>
        <h3>Material logistics solved</h3>
        <p>Getting specialty materials to Eastern Oregon takes planning — we have supplier relationships in John Day, Pendleton, and the Willamette Valley that keep your project from stalling on a cabinet delivery. Our 25+ years of projects in Grant County means we've solved every supply chain challenge this region presents.</p>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,10 C480,56 960,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- ══════════════════════════════════════════════════
     SERVICES
════════════════════════════════════════════════════ -->
<section class="area-services" aria-label="Services available in Mount Vernon, OR">
  <div class="container">
    <div class="area-services-header reveal-up">
      <span class="eyebrow-label">What We Build Here</span>
      <h2>What construction services does Superior Home Builders offer in <span class="text-accent">Mount Vernon, OR?</span></h2>
      <p>Every service we offer is available right here in our home community — no travel fees, no remote scheduling delays.</p>
    </div>
    <div class="services-grid">
      <?php
      $serviceData = [
        ['slug'=>'custom-home-building','icon'=>'home','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg','bullets'=>['Full design-to-build service','Eastern Oregon material expertise','Single crew — no sub chaos']],
        ['slug'=>'kitchen-remodeling','icon'=>'utensils','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604145059-2lrm2s-image_1_.jpg','bullets'=>['Cabinets, countertops &amp; layout','Plumbing &amp; electrical included','Permits handled for you']],
        ['slug'=>'bathroom-remodeling','icon'=>'bath','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604143637-sycb6k-image.jpg','bullets'=>['Custom tile &amp; fixtures','Walk-in shower conversions','Full plumbing upgrades']],
        ['slug'=>'decks','icon'=>'tree-pine','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604104586-837vw8-20221127_142618.jpg','bullets'=>['Composite &amp; pressure-treated','Mountain-view deck designs','Built for snow &amp; frost']],
        ['slug'=>'windows-and-doors','icon'=>'door-open','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604124347-3q5r39-Finished_windows_Southside.jpg','bullets'=>['Energy-efficient options','Vinyl, wood &amp; fiberglass','Entry doors &amp; sliders']],
        ['slug'=>'framing','icon'=>'hammer','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604097152-jcl4h7-20220724_152509.jpg','bullets'=>['Residential &amp; commercial','Additions &amp; new builds','Snow-load engineered framing']],
        ['slug'=>'general-remodeling','icon'=>'wrench','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg','bullets'=>['Single room to whole home','Additions &amp; conversions','Interior finish &amp; trim']],
        ['slug'=>'commercial-construction','icon'=>'building-2','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270979-4l74wp-468299739_10161024404097734_2434409497451082464_n.jpg','bullets'=>['Retail, office &amp; ag builds','Commercial remodels','Grant County permitted']],
      ];
      $tints = ['card-tint-1','card-tint-2','card-tint-3'];
      $svcBySlug = [];
      foreach ($services as $s) $svcBySlug[$s['slug']] = $s;
      foreach ($serviceData as $si => $sd):
        $svc = $svcBySlug[$sd['slug']] ?? ['name' => $sd['slug'], 'slug' => $sd['slug']];
      ?>
      <article class="service-card-with-image <?php echo $tints[$si % 3]; ?> reveal-up reveal-delay-<?php echo ($si % 4) + 1; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($sd['photo']); ?>"
               alt="<?php echo htmlspecialchars($svc['name']); ?> in Mount Vernon, OR by Superior Home Builders"
               width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo lucide_icon($sd['icon']); ?></div>
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <ul><?php foreach ($sd['bullets'] as $b): ?><li><?php echo $b; ?></li><?php endforeach; ?></ul>
          <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C360,0 1080,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- ══════════════════════════════════════════════════
     WHY SUPERIOR IN MOUNT VERNON
════════════════════════════════════════════════════ -->
<section class="area-why" aria-label="Why choose Superior Home Builders in Mount Vernon">
  <div class="container">
    <div class="area-why-grid">
      <div class="reveal-scale">
        <div class="area-why-photo">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=480&q=80"
               alt="Superior Home Builders crew on a Mount Vernon, OR construction project"
               width="480" height="600" loading="lazy">
          <div class="area-why-badge">Mount Vernon's Local Builder</div>
        </div>
      </div>
      <div class="reveal-right">
        <h2>Why do Mount Vernon homeowners choose Superior Home Builders over contractors from John Day or Bend?</h2>
        <p class="answer-block">When you hire a contractor from outside the community, you pay a travel premium — in time, in markup, and in the learning curve of working in Eastern Oregon conditions. Superior Home Builders is right here. We know the Grant County Building Department, the local suppliers, the Blue Mountains microclimates, and the quirks of every decade of residential construction in this valley.</p>
        <div class="area-why-points">
          <div class="area-why-point">
            <span class="num">01</span>
            <div>
              <strong>No travel fees — we're already here</strong>
              <span>Our shop and crew are based in Mount Vernon. That means no mobilization surcharges, no commute delays, and a crew that's on-site fast when scheduling opens up or a problem needs attention.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">02</span>
            <div>
              <strong>25+ years in these specific homes</strong>
              <span>We've worked in essentially every neighborhood and home style in Mount Vernon. That translates directly to better estimates — when we've opened up dozens of walls in 1960s ranch homes along Canyon Creek, we know what's behind them.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">03</span>
            <div>
              <strong>Community reputation matters here</strong>
              <span>In a town this size, your neighbors know who did your project and whether it was done right. We've been building our reputation in Mount Vernon for over two decades, and every job reflects it.</span>
            </div>
          </div>
        </div>
        <p class="area-identity">Superior Home Builders is a licensed Oregon general contractor based in Mount Vernon, OR, serving Grant County and Eastern Oregon with custom home construction and remodeling since 2001. Oregon CCB# 147123 — licensed and insured.</p>
        <p style="font-size:var(--fs-sm);color:var(--color-text-light);margin-top:var(--space-md)">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 C720,60 720,0 1440,35 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- ══════════════════════════════════════════════════
     FAQ
════════════════════════════════════════════════════ -->
<section class="area-faq" aria-label="Mount Vernon FAQ">
  <div class="container">
    <h2 class="reveal-up">Common questions about construction near me in Mount Vernon, OR</h2>
    <p class="answer-block reveal-up reveal-delay-1">Direct answers for Grant County homeowners planning a build or remodel in Mount Vernon and the surrounding area.</p>
    <div class="area-faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="area-faq-item reveal-up" id="faq-<?php echo $i; ?>">
        <button class="area-faq-question" aria-expanded="false" aria-controls="faq-ans-<?php echo $i; ?>">
          <?php echo htmlspecialchars($faq['q']); ?>
          <?php echo lucide_icon('plus-circle'); ?>
        </button>
        <div class="area-faq-answer" id="faq-ans-<?php echo $i; ?>" role="region">
          <?php echo htmlspecialchars($faq['a']); ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════
     FINAL CTA
════════════════════════════════════════════════════ -->
<section class="area-final-cta" aria-label="Get a free estimate in Mount Vernon">
  <div class="container reveal-up">
    <h2>Get a Free Estimate in Mount Vernon, OR</h2>
    <p>Whether you're planning a new home build, a kitchen renovation, a deck, or a commercial project in Mount Vernon — Superior Home Builders is ready. On-site consultation, written estimate, honest timeline. No obligation.</p>
    <div class="cta-row">
      <a href="/contact/" class="btn btn-secondary btn-lg">Request a Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
      <?php endif; ?>
    </div>
  </div>
</section>

<script>
document.querySelectorAll('.area-faq-question').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.area-faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.area-faq-item.open').forEach(i => {
      i.classList.remove('open');
      i.querySelector('.area-faq-question').setAttribute('aria-expanded','false');
    });
    if (!isOpen) { item.classList.add('open'); btn.setAttribute('aria-expanded','true'); }
  });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
