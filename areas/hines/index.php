<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Home Building & Construction in Hines, OR | Superior Home Builders';
$pageDescription = 'Superior Home Builders serves Hines, OR with custom home construction, remodeling, decks & framing in Harney County. Licensed Oregon contractor CCB# 147123. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/hines/';
$currentPage     = 'service-area';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604101037-ig7pay-20220727_101642.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',          'url' => $siteUrl . '/'],
  ['name' => 'Service Areas', 'url' => $siteUrl . '/service-area/'],
  ['name' => 'Hines',         'url' => $siteUrl . '/areas/hines/'],
]);

$localBusiness = [
  '@context' => 'https://schema.org',
  '@type'    => 'HomeAndConstructionBusiness',
  '@id'      => $siteUrl . '/areas/hines/#local',
  'name'     => $siteName,
  'url'      => $siteUrl . '/',
  'telephone' => $phone,
  'address'  => [
    '@type'           => 'PostalAddress',
    'addressLocality' => 'Mount Vernon',
    'addressRegion'   => 'OR',
    'postalCode'      => '97865',
    'addressCountry'  => 'US',
  ],
  'areaServed' => [
    '@type'         => 'City',
    'name'          => 'Hines',
    'addressRegion' => 'OR',
    'postalCode'    => '97738',
    'containedInPlace' => [
      '@type' => 'AdministrativeArea',
      'name'  => 'Harney County',
    ],
  ],
  'provider' => ['@id' => $siteUrl . '/#organization'],
];

$faqs = [
  [
    'q' => 'Does Superior Home Builders serve Hines, OR?',
    'a' => 'Yes — Hines is a regular service area for Superior Home Builders. We\'re based in Mount Vernon and travel to Hines and the surrounding Harney County area for custom home builds, kitchen and bathroom remodels, deck installations, framing projects, and general remodeling. Permits for Hines projects go through Harney County, and we have experience navigating the county building process on projects here.',
  ],
  [
    'q' => 'What are the biggest construction challenges for homes in Hines, OR?',
    'a' => 'Hines sits at approximately 4,100 feet on the edge of Oregon\'s high desert, right alongside Burns. That elevation means significant temperature swings — cold, dry winters with wind exposure from the open Harney Basin, and hot summers that stress materials differently than lower-elevation or coastal climates. The high-desert environment also creates soil conditions that can shift under foundations over time. We account for all of these factors when specifying materials and engineering on every Hines project.',
  ],
  [
    'q' => 'Can Superior Home Builders work on older homes near the historic Hines Lumber area?',
    'a' => 'Absolutely. The Hines community grew significantly during the Hines Lumber era and much of the residential housing stock dates to the mid-20th century — homes built for a working-class mill town in a remote high-desert setting. These properties often have undersized insulation, older electrical systems, and crawl spaces that need attention before remodeling work starts. We assess all of these systems before writing an estimate so there are no surprises mid-project.',
  ],
];

$schemaMarkup = json_encode(
  ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $localBusiness, generateFAQSchema($faqs)]],
  JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   HINES SERVICE AREA — Superior Home Builders
   Premium page styles | var() tokens only
   Techniques: layered hero (::before gradient + ::after noise), floating
   accent circle, asymmetric photo+content split, bento local signals,
   services grid with tinted cards, why-us numbered points, FAQ accordion,
   SVG wave dividers, multi-direction scroll reveals, stat watermark
   ════════════════════════════════════════════════════════════════════ */

.area-hero {
  position: relative; min-height: 68vh; display: flex; align-items: center;
  background-image: url('<?php echo $heroImage; ?>');
  background-size: cover; background-position: center 40%;
  padding-top: var(--nav-height); overflow: hidden;
}
.area-hero::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(122deg,
    rgba(var(--color-primary-rgb),0.94) 0%,
    rgba(var(--color-secondary-rgb),0.78) 52%,
    rgba(var(--color-primary-rgb),0.50) 100%);
  z-index: 1;
}
.area-hero::after {
  content: ''; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  background-size: 180px; z-index: 2; pointer-events: none;
}
.area-hero-floating {
  position: absolute; width: 400px; height: 400px; border-radius: 50%;
  background: rgba(var(--color-accent-rgb),0.05); top: -80px; right: -80px;
  z-index: 2; pointer-events: none;
}
.area-hero-inner { position: relative; z-index: 3; width: 100%; padding: var(--space-4xl) 0 var(--space-3xl); color: #fff; }
.area-hero-eyebrow {
  display: inline-flex; align-items: center; gap: var(--space-xs);
  background: rgba(var(--color-accent-rgb),0.15); border: 1px solid rgba(var(--color-accent-rgb),0.35);
  color: var(--color-accent); font-size: var(--fs-xs); font-weight: 700;
  letter-spacing: 0.12em; text-transform: uppercase; padding: 5px var(--space-md);
  border-radius: 100px; margin-bottom: var(--space-md);
}
.area-hero h1 {
  font-family: var(--font-heading); font-size: var(--fs-h1); font-weight: 800;
  line-height: 1.05; color: #fff; text-wrap: balance; margin-bottom: var(--space-lg);
}
.area-hero h1 em { font-style: italic; color: var(--color-accent); }
.area-hero-answer {
  font-size: clamp(1rem,1.25vw,1.15rem); color: rgba(255,255,255,0.85);
  max-width: 62ch; line-height: 1.75; margin-bottom: var(--space-xl);
}
.area-hero-trust { display: flex; gap: var(--space-lg); flex-wrap: wrap; margin-bottom: var(--space-xl); }
.area-hero-trust-item { display: flex; align-items: center; gap: var(--space-xs); font-size: var(--fs-sm); color: rgba(255,255,255,0.75); }
.area-hero-trust-item svg { color: var(--color-accent); flex-shrink: 0; }
.area-hero-actions { display: flex; gap: var(--space-md); flex-wrap: wrap; }
.area-breadcrumb { margin-top: var(--space-2xl); font-size: var(--fs-xs); color: rgba(255,255,255,0.45); }
.area-breadcrumb a { color: rgba(255,255,255,0.60); }
.area-breadcrumb a:hover { color: var(--color-accent); }
.area-breadcrumb .sep { margin: 0 4px; }
.area-divider { display: block; width: 100%; overflow: hidden; line-height: 0; }
.area-divider svg { display: block; width: 100%; }

/* ── INTRO SPLIT ────────────────────────────────────────────── */
.area-intro { padding: var(--space-4xl) 0; background: var(--color-bg); position: relative; overflow: hidden; }
.area-intro-watermark {
  position: absolute; right: -20px; bottom: -20px;
  font-family: var(--font-heading); font-size: clamp(80px,12vw,140px);
  font-weight: 900; color: rgba(var(--color-primary-rgb),0.04);
  line-height: 1; pointer-events: none; user-select: none;
}
.area-intro-grid { display: grid; grid-template-columns: 1fr 420px; gap: var(--space-4xl); align-items: center; position: relative; }
.area-intro-content h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); }
.area-intro-content p.answer-block { font-size: var(--fs-body); color: var(--color-text); line-height: 1.75; max-width: 65ch; margin-bottom: var(--space-lg); }
.area-identity {
  font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.7;
  padding: var(--space-md) var(--space-lg); border-left: 3px solid var(--color-accent);
  background: var(--color-card-tint-1); border-radius: 0 var(--radius) var(--radius) 0;
  margin-bottom: var(--space-xl);
}
.area-intro-photo { border-radius: var(--radius-lg); overflow: hidden; aspect-ratio: 3/4; box-shadow: var(--shadow-lg); position: relative; }
.area-intro-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
.area-intro-photo::after {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(180deg,transparent 60%,rgba(var(--color-primary-rgb),0.5) 100%);
}
.area-intro-photo-tag {
  position: absolute; bottom: var(--space-lg); left: var(--space-lg); right: var(--space-lg);
  background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading);
  font-size: 0.85rem; font-weight: 800; padding: 8px var(--space-md);
  border-radius: var(--radius); z-index: 2; text-align: center;
}

/* ── BENTO ──────────────────────────────────────────────────── */
.area-locals { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.area-locals-header { text-align: center; margin-bottom: var(--space-3xl); }
.area-locals-header h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-sm); }
.area-locals-header p { font-size: var(--fs-body); color: var(--color-text-light); max-width: 60ch; margin: 0 auto; line-height: 1.7; }
.area-bento { display: grid; grid-template-columns: repeat(4,1fr); gap: var(--space-md); }
.area-bento-card { border-radius: 12px; padding: var(--space-xl) var(--space-lg); }
.area-bento-card:nth-child(1) { background: var(--color-card-tint-1); }
.area-bento-card:nth-child(2) { background: var(--color-card-tint-2); }
.area-bento-card:nth-child(3) { background: var(--color-card-tint-3); }
.area-bento-card:nth-child(4) { background: var(--color-card-tint-neutral); }
.area-bento-card .icon-wrap {
  width: 44px; height: 44px; border-radius: 10px; background: var(--color-accent);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: var(--space-md); color: var(--color-primary);
}
.area-bento-card h3 { font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700; color: var(--color-primary); margin-bottom: var(--space-sm); }
.area-bento-card p { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }

/* ── SERVICES ───────────────────────────────────────────────── */
.area-services { padding: var(--space-4xl) 0; background: var(--color-bg); }
.area-services h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; text-align: center; margin-bottom: var(--space-3xl); }
.services-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: var(--space-md); }
@media (max-width:900px) { .services-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width:480px) { .services-grid { grid-template-columns: 1fr; } }
.service-card-with-image { border-radius: var(--radius-md); overflow: hidden; display: flex; flex-direction: column; transition: transform var(--transition), box-shadow var(--transition); }
.service-card-with-image:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.service-card__image { position: relative; aspect-ratio: 5/3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .5s ease; }
.service-card-with-image:hover .service-card__image img { transform: scale(1.04); }
.service-card__body { padding: var(--space-lg) var(--space-md) var(--space-md); text-align: center; display: flex; flex-direction: column; align-items: center; gap: var(--space-sm); position: relative; flex: 1; }
.service-card__icon { width: 56px; height: 56px; border-radius: 50%; background: #fff; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin-top: -44px; margin-bottom: var(--space-xs); color: var(--color-accent-dark); flex-shrink: 0; }
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { font-family: var(--font-heading); color: var(--color-primary); margin: 0; font-size: 1.2rem; line-height: 1.2; }
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
.area-why { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.area-why-grid { display: grid; grid-template-columns: 480px 1fr; gap: var(--space-4xl); align-items: center; }
.area-why-photo { position: relative; border-radius: var(--radius-lg); overflow: hidden; aspect-ratio: 4/5; box-shadow: var(--shadow-lg); }
.area-why-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
.area-why-photo::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg,transparent 60%,rgba(var(--color-primary-rgb),0.55) 100%); }
.area-why-badge { position: absolute; bottom: var(--space-lg); left: var(--space-lg); right: var(--space-lg); background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading); font-size: 0.9rem; font-weight: 800; padding: var(--space-sm) var(--space-md); border-radius: var(--radius); z-index: 2; text-align: center; }
.area-why-content h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-lg); }
.area-why-content p.answer-block { font-size: var(--fs-body); color: var(--color-text); line-height: 1.75; max-width: 65ch; margin-bottom: var(--space-xl); }
.area-why-points { display: flex; flex-direction: column; gap: var(--space-lg); margin-bottom: var(--space-xl); }
.area-why-point { display: flex; gap: var(--space-md); align-items: flex-start; }
.area-why-point .num { font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: var(--color-accent-dark); min-width: 34px; line-height: 1; }
.area-why-point div strong { display: block; font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 2px; }
.area-why-point div span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }

/* ── FAQ ────────────────────────────────────────────────────── */
.area-faq { padding: var(--space-4xl) 0; background: var(--color-bg); }
.area-faq h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-align: center; text-wrap: balance; margin-bottom: var(--space-md); }
.area-faq p.answer-block { font-size: var(--fs-body); color: var(--color-text-light); text-align: center; max-width: 60ch; margin: 0 auto var(--space-3xl); line-height: 1.75; }
.area-faq-list { max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: var(--space-md); }
.area-faq-item { border: 1px solid var(--color-border); border-radius: 10px; overflow: hidden; }
.area-faq-question { width: 100%; background: none; border: none; display: flex; align-items: center; justify-content: space-between; gap: var(--space-md); padding: var(--space-lg) var(--space-xl); font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700; color: var(--color-primary); cursor: pointer; text-align: left; }
.area-faq-question:hover { background: var(--color-bg-alt); }
.area-faq-question svg { flex-shrink: 0; transition: transform var(--transition); color: var(--color-accent-dark); }
.area-faq-item.open .area-faq-question svg { transform: rotate(45deg); }
.area-faq-answer { display: none; padding: 0 var(--space-xl) var(--space-lg); font-size: var(--fs-body); color: var(--color-text-light); line-height: 1.75; border-top: 1px solid var(--color-border); }
.area-faq-item.open .area-faq-answer { display: block; }

/* ── FINAL CTA ──────────────────────────────────────────────── */
.area-final-cta { padding: var(--space-4xl) 0; background: var(--color-primary); text-align: center; }
.area-final-cta h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: #fff; text-wrap: balance; margin-bottom: var(--space-md); }
.area-final-cta p { font-size: var(--fs-body); color: rgba(255,255,255,0.75); max-width: 58ch; margin: 0 auto var(--space-2xl); line-height: 1.75; }
.area-final-cta .cta-row { display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap; }

/* ── REVEALS ────────────────────────────────────────────────── */
.reveal-up    { opacity: 0; transform: translateY(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-left  { opacity: 0; transform: translateX(-28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-right { opacity: 0; transform: translateX(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-scale { opacity: 0; transform: scale(.93); transition: opacity .65s ease, transform .65s ease; }
.reveal-up.visible,.reveal-left.visible,.reveal-right.visible,.reveal-scale.visible { opacity: 1; transform: none; }
.reveal-delay-1{transition-delay:.1s}.reveal-delay-2{transition-delay:.2s}
.reveal-delay-3{transition-delay:.3s}.reveal-delay-4{transition-delay:.4s}

/* ── RESPONSIVE ─────────────────────────────────────────────── */
@media (max-width:1100px) {
  .area-intro-grid,.area-why-grid { grid-template-columns: 1fr; }
  .area-intro-photo,.area-why-photo { aspect-ratio: 16/9; }
  .area-intro-watermark { display: none; }
}
@media (max-width:768px) {
  .area-bento { grid-template-columns: 1fr 1fr; }
  .area-hero-actions { flex-direction: column; }
}
@media (max-width:480px) { .area-bento { grid-template-columns: 1fr; } }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="area-hero" aria-label="Hines OR service area">
  <div class="area-hero-floating" aria-hidden="true"></div>
  <div class="area-hero-inner">
    <div class="container">
      <span class="area-hero-eyebrow"><?php echo lucide_icon('map-pin'); ?> Hines, OR &middot; Harney County High Desert</span>
      <h1>Home Building &amp; Construction in<br><em>Hines, OR</em></h1>
      <p class="area-hero-answer">Superior Home Builders serves Hines with custom home construction, kitchen and bathroom remodeling, deck installations, and framing projects in Harney County. We're based in Mount Vernon and bring 25+ years of Eastern Oregon construction experience to Hines — a community built tough at 4,100 feet on the edge of the high desert, right next to Burns and Malheur National Forest.</p>
      <div class="area-hero-trust">
        <span class="area-hero-trust-item"><?php echo lucide_icon('mountain'); ?> 4,100 ft elevation expertise</span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Oregon Licensed &middot; CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('calendar'); ?> Serving since <?php echo $yearEstablished; ?></span>
      </div>
      <div class="area-hero-actions">
        <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate in Hines</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
        <?php endif; ?>
      </div>
      <nav class="area-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">›</span>
        <a href="/service-area/">Service Areas</a><span class="sep">›</span>
        <span aria-current="page">Hines</span>
      </nav>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-primary)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,15 C720,56 720,0 1440,38 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- INTRO SPLIT -->
<section class="area-intro" aria-label="About construction in Hines, OR">
  <div class="area-intro-watermark" aria-hidden="true">HINES</div>
  <div class="container">
    <div class="area-intro-grid">
      <div class="reveal-left">
        <h2>What makes building and remodeling in Hines, OR different from other parts of Eastern Oregon?</h2>
        <p class="answer-block">Hines sits at roughly 4,100 feet in elevation on the western edge of Harney County's high desert basin, just west of Burns along U.S. Route 20. At that altitude and in that climate, you're dealing with some of the most demanding construction conditions in Oregon — extreme temperature swings, persistent high-desert wind, and a housing inventory that was largely built during the Hines Lumber Company era of the mid-20th century. The Silvies River runs through the area and the proximity to Malheur National Forest means freeze-thaw cycles are severe and seasonal moisture from spring snowmelt can create crawl space and drainage challenges on older properties. Superior Home Builders has been working in communities like Hines across Eastern Oregon for over <?php echo $yearsInBusiness; ?> years, and we spec and price every project to match what the climate and building stock actually demand.</p>
        <p class="area-identity">Superior Home Builders is a licensed Oregon general contractor (CCB# <?php echo htmlspecialchars($licenseNumber); ?>) based in Mount Vernon, serving Hines and Harney County with custom home building, remodeling, and construction services since <?php echo $yearEstablished; ?>.</p>
        <a href="/contact/" class="btn btn-primary">Request a Free Estimate</a>
      </div>
      <div class="reveal-scale">
        <div class="area-intro-photo">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604101037-ig7pay-20220727_101642.jpg"
               alt="Superior Home Builders construction project serving Hines Oregon"
               width="420" height="560" loading="lazy">
          <div class="area-intro-photo-tag">Serving Hines &mdash; <?php echo $yearsInBusiness; ?>+ Years</div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C360,0 1080,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- LOCAL SIGNALS BENTO -->
<section class="area-locals" aria-label="Hines construction context">
  <div class="container">
    <div class="area-locals-header reveal-up">
      <h2>Why do Hines construction projects require high-desert expertise?</h2>
      <p>Hines is a small community with a distinct set of construction challenges — high elevation, a mill-town housing stock, and high-desert environmental conditions that demand a contractor who knows the territory.</p>
    </div>
    <div class="area-bento">
      <div class="area-bento-card reveal-up reveal-delay-1">
        <div class="icon-wrap"><?php echo lucide_icon('thermometer'); ?></div>
        <h3>Extreme high-desert temperature swings</h3>
        <p>At 4,100 feet in the Harney Basin, Hines experiences some of the most severe temperature variation in Oregon — frigid winters with persistent wind and hot, dry summers. These conditions stress building materials, particularly roofing, siding, and exterior decking. We select and specify materials rated for this climate on every Hines project from the start.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-2">
        <div class="icon-wrap"><?php echo lucide_icon('building-2'); ?></div>
        <h3>Mid-century mill-town housing stock</h3>
        <p>Much of Hines's residential inventory was built to house workers during the Hines Lumber Company's operating decades. These homes have character but frequently need significant system upgrades — insulation, electrical panels, and plumbing — before cosmetic remodeling work makes sense. We assess all of it before writing an estimate so projects don't stall mid-construction.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-3">
        <div class="icon-wrap"><?php echo lucide_icon('droplets'); ?></div>
        <h3>Silvies River drainage and spring moisture</h3>
        <p>The Silvies River corridor and surrounding high-desert terrain create distinct drainage patterns through the Hines and Burns area. Spring snowmelt from higher ground can push moisture into crawl spaces and basements on properties in low-lying zones. We evaluate drainage conditions as part of every estimate on Hines properties — it's one of the first things we look at.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-4">
        <div class="icon-wrap"><?php echo lucide_icon('truck'); ?></div>
        <h3>Remote logistics and Harney County permitting</h3>
        <p>Hines is a 3-plus hour drive from Bend and further from any large metropolitan supply hub. Getting materials to a job site here on time requires supplier relationships and planning that only come from years of working in rural Eastern Oregon. We also handle all Harney County building permits in-house — no learning curve, no delays waiting on a contractor unfamiliar with the local process.</p>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,25 C480,56 960,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- SERVICES -->
<section class="area-services" aria-label="Services available in Hines OR">
  <div class="container">
    <h2 class="reveal-up">Construction services available in <span class="text-accent">Hines, OR</span></h2>
    <div class="services-grid">
      <?php
      $serviceData = [
        [
          'slug'    => 'custom-home-building',
          'icon'    => 'home',
          'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg',
          'alt'     => 'Custom home construction in Hines OR by Superior Home Builders',
          'bullets' => ['Full design-to-build process','High-desert climate specs','Harney County permitted'],
        ],
        [
          'slug'    => 'general-remodeling',
          'icon'    => 'wrench',
          'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg',
          'alt'     => 'Home remodeling project near Hines Oregon by Superior Home Builders',
          'bullets' => ['Mill-era home renovations','Room additions &amp; conversions','Interior finish upgrades'],
        ],
        [
          'slug'    => 'kitchen-remodeling',
          'icon'    => 'utensils',
          'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604305411-iws3zu-467311955_10160913944502734_1381678653232378695_n.jpg',
          'alt'     => 'Kitchen remodel in Harney County Oregon by Superior Home Builders',
          'bullets' => ['Cabinets, counters &amp; layout','Electrical &amp; plumbing updated','Permits included'],
        ],
        [
          'slug'    => 'bathroom-remodeling',
          'icon'    => 'bath',
          'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604306051-1cn5ph-467748149_10161026648862734_1486565757297760050_n.jpg',
          'alt'     => 'Bathroom remodel near Hines Oregon by Superior Home Builders',
          'bullets' => ['Walk-in shower conversions','Vanity &amp; fixture upgrades','Full plumbing rough-in'],
        ],
        [
          'slug'    => 'decks',
          'icon'    => 'tree-pine',
          'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604099376-0r19op-20220724_154635.jpg',
          'alt'     => 'Deck construction near Hines Oregon by Superior Home Builders',
          'bullets' => ['Wind-rated deck structures','High-desert climate materials','Composite &amp; treated wood'],
        ],
        [
          'slug'    => 'framing',
          'icon'    => 'hammer',
          'photo'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg',
          'alt'     => 'Framing work near Hines Oregon by Superior Home Builders',
          'bullets' => ['New builds &amp; additions','Outbuilding framing','Structural repair &amp; replacement'],
        ],
      ];
      $tints = ['card-tint-1','card-tint-2','card-tint-3'];
      $svcBySlug = [];
      foreach ($services as $s) $svcBySlug[$s['slug']] = $s;
      foreach ($serviceData as $si => $sd):
        $svc = $svcBySlug[$sd['slug']] ?? ['name' => ucwords(str_replace('-', ' ', $sd['slug'])), 'slug' => $sd['slug']];
      ?>
      <article class="service-card-with-image <?php echo $tints[$si % 3]; ?> reveal-up reveal-delay-<?php echo ($si % 4) + 1; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($sd['photo']); ?>"
               alt="<?php echo htmlspecialchars($sd['alt']); ?>"
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

<div class="area-divider" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 C720,56 720,0 1440,35 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- WHY SUPERIOR -->
<section class="area-why" aria-label="Why Superior Home Builders in Hines">
  <div class="container">
    <div class="area-why-grid">
      <div class="reveal-scale">
        <div class="area-why-photo">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=480&q=80"
               alt="Superior Home Builders crew on a project in Eastern Oregon"
               width="480" height="600" loading="lazy">
          <div class="area-why-badge">Hines &amp; Harney County's Local Builder</div>
        </div>
      </div>
      <div class="reveal-right">
        <h2>Why should Hines homeowners hire Superior Home Builders instead of a contractor who doesn't know the high desert?</h2>
        <p class="answer-block">Hines is one of the most remote communities in Eastern Oregon — and that remoteness raises the cost of hiring the wrong contractor. A builder unfamiliar with the Harney Basin's climate, the county permitting process, or the material supply chain challenges of a 3-hour drive from Bend is going to cost you time, money, and quality. We've been working in Harney County and communities like Hines for over <?php echo $yearsInBusiness; ?> years and we've built our process around getting it right the first time in rural Oregon.</p>
        <div class="area-why-points">
          <div class="area-why-point">
            <span class="num">01</span>
            <div>
              <strong>We know Hines's building stock</strong>
              <span>The mid-century homes built during the Hines Lumber era are our territory. We know what to look for — undersized systems, original insulation, deferred maintenance on older plumbing — and we write estimates that account for reality, not just the cosmetic finish work.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">02</span>
            <div>
              <strong>High-desert specs are how we build</strong>
              <span>Wind exposure, extreme cold, and intense summer heat in the Harney Basin aren't special conditions to us — they're the baseline. Our material selections and structural specs for Hines projects reflect what the climate actually demands, not what would be fine in a milder environment.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">03</span>
            <div>
              <strong>Permits and logistics handled in-house</strong>
              <span>Harney County building permits, material sourcing, and coordinated delivery to Hines — we manage all of it. You don't have to chase down subcontractors or figure out a county process you've never navigated. We do this every day.</span>
            </div>
          </div>
        </div>
        <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,35 C360,0 1080,56 1440,15 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- FAQ -->
<section class="area-faq" aria-label="Hines OR construction FAQ">
  <div class="container">
    <h2 class="reveal-up">Common questions about construction near me in Hines, OR</h2>
    <p class="answer-block reveal-up reveal-delay-1">Answers for Hines and Harney County homeowners planning custom builds, remodels, or additions in the 97738 area.</p>
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

<!-- FINAL CTA -->
<section class="area-final-cta" aria-label="Get a free estimate in Hines OR">
  <div class="container reveal-up">
    <h2>Ready to start your Hines project?</h2>
    <p>Superior Home Builders brings <?php echo $yearsInBusiness; ?>+ years of Eastern Oregon construction expertise to Hines and Harney County. Free on-site estimate, written scope, honest timeline. We know the high desert — and we'll build it to last in this climate.</p>
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
