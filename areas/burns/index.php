<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Home Building & Construction in Burns, OR | Superior Home Builders';
$pageDescription = 'Superior Home Builders serves Burns, OR (Harney County) with custom homes, remodeling, decks & framing. Licensed Oregon contractor CCB# 147123. Free estimates. Call today.';
$canonicalUrl    = $siteUrl . '/areas/burns/';
$currentPage     = 'service-area';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604104586-837vw8-20221127_142618.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',          'url' => $siteUrl . '/'],
  ['name' => 'Service Areas', 'url' => $siteUrl . '/service-area/'],
  ['name' => 'Burns',         'url' => $siteUrl . '/areas/burns/'],
]);

$localBusiness = [
  '@context' => 'https://schema.org',
  '@type'    => 'HomeAndConstructionBusiness',
  '@id'      => $siteUrl . '/areas/burns/#local',
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
    'name'          => 'Burns',
    'addressRegion' => 'OR',
    'postalCode'    => '97720',
    'containedInPlace' => [
      '@type' => 'AdministrativeArea',
      'name'  => 'Harney County',
    ],
  ],
  'provider' => ['@id' => $siteUrl . '/#organization'],
];

$schemaMarkup = json_encode(
  ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $localBusiness]],
  JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
);

$faqs = [
  [
    'q' => 'Does Superior Home Builders serve Burns, OR?',
    'a' => 'Yes — Burns is a regular service area for Superior Home Builders. We travel to Burns and throughout Harney County for custom home construction, general remodeling, kitchen and bathroom renovations, deck installations, framing, and commercial projects. Burns is located roughly 100 miles south of our Mount Vernon base via US-395 and US-20, and we factor that into every project schedule and estimate. Permits for Burns projects go through Harney County, which we have experience navigating.',
  ],
  [
    'q' => 'What are the biggest construction challenges for homes in Burns at 4,147 feet elevation?',
    'a' => 'Burns sits at 4,147 feet on the edge of the Great Basin high desert — a climate that combines hard freezes, significant temperature swings between day and night, intense UV exposure, and occasional heavy snow events. These conditions accelerate wear on roofing, siding, and exterior finishes faster than lower-elevation sites. Foundation work must account for the high desert\'s clay-heavy soils, which expand and contract significantly with moisture. We spec every Burns project with these conditions as the baseline, not as an afterthought.',
  ],
  [
    'q' => 'Can Superior Home Builders remodel older homes near the Silvies River corridor in Burns?',
    'a' => 'Absolutely. The residential neighborhoods near the Silvies River corridor and around Burns High School include a wide range of housing stock, much of it built between the 1940s and 1980s. These homes often need updated insulation for the desert climate extremes, electrical panel upgrades, and plumbing modernization. We\'ve renovated similar high-desert properties throughout Eastern Oregon and understand the specific challenges that come with older construction at elevation — undersized insulation for the cold, dried-out framing from low humidity, and aging mechanical systems. We assess all of it before writing your estimate.',
  ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   BURNS SERVICE AREA — Superior Home Builders
   Premium page styles | var() tokens only
   Techniques: layered hero (::before gradient + ::after noise), floating
   accent circle, asymmetric photo+content, bento local signals,
   services grid, why-us numbered points, FAQ accordion, SVG section
   dividers, multi-direction scroll reveals, stat watermark
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
    rgba(var(--color-primary-rgb),0.96) 0%,
    rgba(var(--color-secondary-rgb),0.80) 50%,
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
  background: rgba(var(--color-accent-rgb),0.05); top: -80px; right: -80px; z-index: 2; pointer-events: none;
}
.area-hero-inner { position: relative; z-index: 3; width: 100%; padding: var(--space-4xl) 0 var(--space-3xl); color: #fff; }
.area-hero-eyebrow {
  display: inline-flex; align-items: center; gap: var(--space-xs);
  background: rgba(var(--color-accent-rgb),0.15); border: 1px solid rgba(var(--color-accent-rgb),0.35);
  color: var(--color-accent); font-size: var(--fs-xs); font-weight: 700;
  letter-spacing: 0.12em; text-transform: uppercase; padding: 5px var(--space-md);
  border-radius: 100px; margin-bottom: var(--space-md);
}
.area-hero h1 { font-family: var(--font-heading); font-size: var(--fs-h1); font-weight: 800; line-height: 1.05; color: #fff; text-wrap: balance; margin-bottom: var(--space-lg); }
.area-hero h1 em { font-style: italic; color: var(--color-accent); }
.area-hero-answer { font-size: clamp(1rem,1.25vw,1.15rem); color: rgba(255,255,255,0.85); max-width: 62ch; line-height: 1.75; margin-bottom: var(--space-xl); }
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
.area-identity { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.7; padding: var(--space-md) var(--space-lg); border-left: 3px solid var(--color-accent); background: var(--color-card-tint-1); border-radius: 0 var(--radius) var(--radius) 0; margin-bottom: var(--space-xl); }
.area-intro-photo { border-radius: var(--radius-lg); overflow: hidden; aspect-ratio: 3/4; box-shadow: var(--shadow-lg); position: relative; }
.area-intro-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
.area-intro-photo::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg,transparent 60%,rgba(var(--color-primary-rgb),0.5) 100%); }
.area-intro-photo-tag { position: absolute; bottom: var(--space-lg); left: var(--space-lg); right: var(--space-lg); background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading); font-size: 0.85rem; font-weight: 800; padding: 8px var(--space-md); border-radius: var(--radius); z-index: 2; text-align: center; }

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
.area-bento-card .icon-wrap { width: 44px; height: 44px; border-radius: 10px; background: var(--color-accent); display: flex; align-items: center; justify-content: center; margin-bottom: var(--space-md); color: var(--color-primary); }
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
@media (max-width:1100px) { .area-intro-grid,.area-why-grid { grid-template-columns: 1fr; } .area-intro-photo,.area-why-photo { aspect-ratio: 16/9; } .area-intro-watermark { display: none; } }
@media (max-width:768px) { .area-bento { grid-template-columns: 1fr 1fr; } .area-hero-actions { flex-direction: column; } }
@media (max-width:480px) { .area-bento { grid-template-columns: 1fr; } }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="area-hero" aria-label="Burns, OR service area hero">
  <div class="area-hero-floating" aria-hidden="true"></div>
  <div class="area-hero-inner">
    <div class="container">
      <span class="area-hero-eyebrow"><?php echo lucide_icon('map-pin'); ?> Burns, OR &middot; Harney County &middot; 4,147 ft</span>
      <h1>Home Building &amp; Construction in<br><em>Burns, OR</em></h1>
      <p class="area-hero-answer">Superior Home Builders serves Burns and Harney County with custom home construction, kitchen and bathroom remodeling, deck installations, framing, and commercial projects. Burns is the county seat of Harney County — the largest county by area in Oregon — and we understand the high desert conditions, remote logistics, and older housing stock that define construction work here at 4,147 feet on the edge of the Great Basin.</p>
      <div class="area-hero-trust">
        <span class="area-hero-trust-item"><?php echo lucide_icon('mountain'); ?> 4,147 ft high desert expertise</span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Oregon Licensed &middot; CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('calendar'); ?> Serving Eastern Oregon since 2001</span>
      </div>
      <div class="area-hero-actions">
        <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate in Burns</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
        <?php endif; ?>
      </div>
      <nav class="area-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">›</span>
        <a href="/service-area/">Service Areas</a><span class="sep">›</span>
        <span aria-current="page">Burns</span>
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
<section class="area-intro" aria-label="About construction in Burns, OR">
  <div class="area-intro-watermark" aria-hidden="true">BURNS</div>
  <div class="container">
    <div class="area-intro-grid">
      <div class="reveal-left">
        <h2>What does it take to build and remodel homes in Burns, OR at 4,147 feet on the high desert?</h2>
        <p class="answer-block">Burns sits at the county seat of Harney County — the largest county by area in all of Oregon — on the northern edge of the Great Basin high desert. At 4,147 feet, the climate delivers hard winters, intense summer UV exposure, and dramatic day-to-night temperature swings that stress exterior materials far faster than the Oregon coast or Willamette Valley. Add the remoteness of the region, the aging residential neighborhoods along the Silvies River corridor near Harney District Hospital and Burns High School, and the challenge of sourcing specialty materials for a community of roughly 2,800 people, and you have a construction environment that demands real experience in Eastern Oregon — not just a general contractor willing to make the drive.</p>
        <p class="area-identity">Superior Home Builders is a licensed Oregon general contractor (CCB# 147123) based in Mount Vernon, serving Burns and Harney County with custom home building, remodeling, and construction services since 2001.</p>
        <a href="/contact/" class="btn btn-primary">Request a Free Estimate</a>
      </div>
      <div class="reveal-scale">
        <div class="area-intro-photo">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604104586-837vw8-20221127_142618.jpg"
               alt="Construction project in Burns, Oregon by Superior Home Builders"
               width="420" height="560" loading="lazy">
          <div class="area-intro-photo-tag">Serving Burns &amp; Harney County — 25+ Years</div>
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
<section class="area-locals" aria-label="Burns construction context and challenges">
  <div class="container">
    <div class="area-locals-header reveal-up">
      <h2>Why do Burns construction projects demand a contractor who knows Harney County?</h2>
      <p>Burns is 100 miles from our Mount Vernon base and 130+ miles from the nearest urban supply center. The high desert climate, local permitting, and the character of Harney County housing stock all require specific experience — not a first-visit learning curve on your project.</p>
    </div>
    <div class="area-bento">
      <div class="area-bento-card reveal-up reveal-delay-1">
        <div class="icon-wrap"><?php echo lucide_icon('thermometer'); ?></div>
        <h3>High desert temperature extremes</h3>
        <p>Burns experiences some of the widest daily and seasonal temperature swings in Oregon — summer days above 90°F and winter lows below 0°F are both common. Exterior materials, roofing, siding, and decking must be specified to handle this range. We select materials and spec connections that perform over decades in Harney County's climate, not just at sea level.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-2">
        <div class="icon-wrap"><?php echo lucide_icon('building-2'); ?></div>
        <h3>Older residential stock near the Silvies River</h3>
        <p>The neighborhoods surrounding Burns High School, the Harney County Courthouse, and the Silvies River corridor contain much of Burns's older housing inventory — homes from the 1940s through 1980s that were built for a different era of energy costs and building codes. Remodeling these homes to meet current standards while respecting their character is work we've done throughout Eastern Oregon's high-desert communities.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-3">
        <div class="icon-wrap"><?php echo lucide_icon('truck'); ?></div>
        <h3>Remote material logistics</h3>
        <p>Burns is a long way from major building supply centers. Getting specialty materials — custom windows, engineered lumber, specific hardware — to a Burns project requires planning and supplier relationships that only come from years of delivering work in remote Eastern Oregon. We build the logistics into every project timeline from day one so material delays don't become your problem.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-4">
        <div class="icon-wrap"><?php echo lucide_icon('sun'); ?></div>
        <h3>Intense UV exposure at elevation</h3>
        <p>At 4,147 feet on the high desert, UV index levels are significantly higher than lower elevations, and the low humidity accelerates drying and cracking in wood products, caulks, and painted surfaces. We specify UV-resistant finishes and exterior materials appropriate to Burns's conditions — the same considerations that apply to builds near Malheur National Wildlife Refuge and the broader Great Basin region.</p>
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
<section class="area-services" aria-label="Services available in Burns OR">
  <div class="container">
    <h2 class="reveal-up">Construction services available in <span class="text-accent">Burns, OR</span></h2>
    <div class="services-grid">
      <?php
      $serviceData = [
        ['slug'=>'custom-home-building','icon'=>'home','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg','bullets'=>['Full design-to-build service','High desert climate specs','Harney County permitted']],
        ['slug'=>'general-remodeling','icon'=>'wrench','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg','bullets'=>['Whole-house renovations','Additions &amp; room conversions','Interior finish work']],
        ['slug'=>'kitchen-remodeling','icon'=>'utensils','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604305411-iws3zu-467311955_10160913944502734_1381678653232378695_n.jpg','bullets'=>['Cabinets, countertops &amp; layout','Electrical &amp; plumbing updates','Permits handled']],
        ['slug'=>'bathroom-remodeling','icon'=>'bath','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604306051-1cn5ph-467748149_10161026648862734_1486565757297760050_n.jpg','bullets'=>['Walk-in shower conversions','Vanity &amp; fixture upgrades','Full plumbing rough-in']],
        ['slug'=>'decks','icon'=>'tree-pine','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604099376-0r19op-20220724_154635.jpg','bullets'=>['Engineered for desert snowloads','Composite &amp; treated lumber','Harney County code compliant']],
        ['slug'=>'framing','icon'=>'hammer','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg','bullets'=>['New builds &amp; room additions','Outbuilding &amp; barn framing','Structural repair work']],
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
               alt="<?php echo htmlspecialchars($svc['name']); ?> in Burns, OR by Superior Home Builders"
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
<section class="area-why" aria-label="Why Superior Home Builders for Burns OR">
  <div class="container">
    <div class="area-why-grid">
      <div class="reveal-scale">
        <div class="area-why-photo">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=480&q=80"
               alt="Superior Home Builders construction work serving Burns and Harney County Oregon"
               width="480" height="600" loading="lazy">
          <div class="area-why-badge">Burns &amp; Harney County's Trusted Builder</div>
        </div>
      </div>
      <div class="reveal-right">
        <h2>Why should Burns homeowners choose Superior Home Builders for construction near me in Harney County?</h2>
        <p class="answer-block">Burns is the county seat of the largest county in Oregon by area — and that remoteness is a real factor when hiring a contractor. A crew that doesn't know the Burns area will spend your project timeline learning the logistics, the Harney County permit process, and the climate conditions they should have planned for from the start. We've been doing Eastern Oregon construction since 2001 and we understand what it takes to deliver a quality project in a community like Burns — 100+ miles from the nearest major supply center and at an elevation where the climate doesn't forgive poor material choices.</p>
        <div class="area-why-points">
          <div class="area-why-point">
            <span class="num">01</span>
            <div>
              <strong>We know Harney County's permit process</strong>
              <span>Burns projects run through Harney County's building department. We've worked with rural county building departments across Eastern Oregon for over two decades — the permit process, inspection timelines, and code requirements in Harney County are not new to us.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">02</span>
            <div>
              <strong>High desert specs are built into every estimate</strong>
              <span>At 4,147 feet in the Great Basin, Burns's climate demands UV-resistant finishes, materials rated for wide temperature swings, and structural specs that account for desert snowload events. We don't add these as line-item upcharges — they're how we build throughout the region.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">03</span>
            <div>
              <strong>Material logistics handled from day one</strong>
              <span>Getting the right materials to Burns on time is a real logistical challenge. We pre-order, plan delivery windows, and coordinate around our project schedule so you're never waiting on a missed shipment. This is part of what you're hiring us for.</span>
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
<section class="area-faq" aria-label="Burns OR construction FAQ">
  <div class="container">
    <h2 class="reveal-up">Common questions about construction near me in Burns, OR</h2>
    <p class="answer-block reveal-up reveal-delay-1">Answers for Burns homeowners and property owners planning remodels, new builds, or additions in the 97720 zip code and throughout Harney County.</p>
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
<section class="area-final-cta" aria-label="Get a free estimate in Burns OR">
  <div class="container reveal-up">
    <h2>Ready to start your Burns, OR project?</h2>
    <p>Superior Home Builders brings 25+ years of Eastern Oregon construction experience to Burns and Harney County. Free on-site estimate, written scope, honest timeline. We know the high desert — and we'll treat your project right from the first nail to the final walkthrough.</p>
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
