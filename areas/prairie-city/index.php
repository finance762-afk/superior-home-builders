<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Home Building & Remodeling in Prairie City, OR | Superior Home Builders';
$pageDescription = 'Superior Home Builders serves Prairie City, OR with custom home construction, remodeling, decks, and framing near the Strawberry Mountain region. Licensed Grant County contractor. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/prairie-city/';
$currentPage     = 'service-area';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604105979-qifw3f-20230813_180947.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',          'url' => $siteUrl . '/'],
  ['name' => 'Service Areas', 'url' => $siteUrl . '/service-area/'],
  ['name' => 'Prairie City',  'url' => $siteUrl . '/areas/prairie-city/'],
]);

$localBusiness = [
  '@context' => 'https://schema.org',
  '@type'    => 'HomeAndConstructionBusiness',
  '@id'      => $siteUrl . '/areas/prairie-city/#local',
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
    'name'          => 'Prairie City',
    'addressRegion' => 'OR',
    'postalCode'    => '97869',
  ],
  'provider' => ['@id' => $siteUrl . '/#organization'],
];

$schemaMarkup = json_encode(
  ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $localBusiness]],
  JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
);

$faqs = [
  [
    'q' => 'Does Superior Home Builders serve Prairie City, OR?',
    'a' => 'Yes — Prairie City is a regular service area for Superior Home Builders. We\'re based in Mount Vernon and regularly work in Prairie City on custom home builds, kitchen and bathroom remodels, deck installations, framing projects, and window replacements. Projects in Prairie City go through the Grant County Building Department, which we\'ve worked with for over 25 years.',
  ],
  [
    'q' => 'What are the biggest construction challenges for homes near Strawberry Mountain?',
    'a' => 'Prairie City sits at 3,500 feet near the base of the Strawberry Mountain Wilderness — one of the higher elevations in Grant County. Snowloads are more significant than in lower parts of the valley, freeze-thaw cycles hit harder, and spring moisture from Strawberry Creek drainage can create foundation and crawl space issues in older homes. We build every project with these conditions accounted for from the spec stage.',
  ],
  [
    'q' => 'Can Superior Home Builders remodel older ranch homes in Prairie City?',
    'a' => 'Absolutely — Prairie City has a strong agricultural heritage and most of its residential housing stock dates to the 1940s–1980s, including farmhouses and ranch-style homes along Prairie Creek and the Strawberry Creek corridor. We\'ve renovated dozens of these properties throughout Grant County. The common challenges — minimal insulation, undersized electrical, older plumbing — are things we assess and price for before writing an estimate.',
  ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   PRAIRIE CITY SERVICE AREA — Superior Home Builders
   Premium page styles | var() tokens only
   Techniques: layered hero (::before gradient + ::after noise), floating
   accent accent circle, pull-quote, asymmetric photo+content, bento local
   signals, services grid, why-us points, FAQ accordion, SVG dividers,
   multi-direction reveals, stat watermark
   ════════════════════════════════════════════════════════════════════ */

.area-hero {
  position: relative; min-height: 68vh; display: flex; align-items: center;
  background-image: url('<?php echo $heroImage; ?>');
  background-size: cover; background-position: center 50%;
  padding-top: var(--nav-height); overflow: hidden;
}
.area-hero::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(118deg,
    rgba(var(--color-primary-rgb),0.95) 0%,
    rgba(var(--color-secondary-rgb),0.82) 48%,
    rgba(var(--color-primary-rgb),0.52) 100%);
  z-index: 1;
}
.area-hero::after {
  content: ''; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  background-size: 180px; z-index: 2; pointer-events: none;
}
.area-hero-floating {
  position: absolute; width: 360px; height: 360px; border-radius: 50%;
  background: rgba(var(--color-accent-rgb),0.06); top: -60px; right: -60px; z-index: 2; pointer-events: none;
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

<section class="area-hero" aria-label="Prairie City service area">
  <div class="area-hero-floating" aria-hidden="true"></div>
  <div class="area-hero-inner">
    <div class="container">
      <span class="area-hero-eyebrow"><?php echo lucide_icon('map-pin'); ?> Prairie City, OR · Strawberry Mountain Region</span>
      <h1>Home Building &amp; Remodeling in<br><em>Prairie City, OR</em></h1>
      <p class="area-hero-answer">Superior Home Builders serves Prairie City with custom home construction, kitchen and bathroom remodeling, deck installations, framing, and window replacements near the Strawberry Mountain Wilderness corridor. Our crew is based in Mount Vernon and knows Prairie City's agricultural ranch properties, older farmhouse inventory along Prairie Creek, and the demanding construction conditions at 3,500 feet in Grant County.</p>
      <div class="area-hero-trust">
        <span class="area-hero-trust-item"><?php echo lucide_icon('mountain'); ?> 3,500 ft elevation expertise</span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Oregon Licensed &middot; CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('calendar'); ?> Serving since 2001</span>
      </div>
      <div class="area-hero-actions">
        <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate in Prairie City</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
        <?php endif; ?>
      </div>
      <nav class="area-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">›</span>
        <a href="/service-area/">Service Areas</a><span class="sep">›</span>
        <span aria-current="page">Prairie City</span>
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
<section class="area-intro" aria-label="About construction in Prairie City, OR">
  <div class="area-intro-watermark" aria-hidden="true">PRAIRIE</div>
  <div class="container">
    <div class="area-intro-grid">
      <div class="reveal-left">
        <h2>What does it take to build and remodel homes near Strawberry Mountain in Prairie City, OR?</h2>
        <p class="answer-block">Prairie City sits at the eastern edge of Grant County, at higher elevation than Mount Vernon or John Day and closer to the Strawberry Mountain Wilderness — one of Eastern Oregon's most rugged wilderness areas. The combination of heavier snowfall, colder winters, and a housing stock that trends toward older agricultural construction means Prairie City projects demand a contractor with genuine local knowledge, not just general building experience. Superior Home Builders has worked on Prairie City properties for over 25 years and prices every project with these conditions in mind from the first estimate.</p>
        <p class="area-identity">Superior Home Builders is a licensed Oregon general contractor (CCB# 147123) based in Mount Vernon, OR, serving Prairie City and all of Grant County with custom home building, remodeling, and commercial construction since 2001.</p>
        <a href="/contact/" class="btn btn-primary">Request a Free Estimate</a>
      </div>
      <div class="reveal-scale">
        <div class="area-intro-photo">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604110512-hpeyxa-20230904_195415.jpg"
               alt="Construction project near Prairie City Oregon by Superior Home Builders"
               width="420" height="560" loading="lazy">
          <div class="area-intro-photo-tag">Serving Prairie City — 25+ Years</div>
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
<section class="area-locals" aria-label="Prairie City construction context">
  <div class="container">
    <div class="area-locals-header reveal-up">
      <h2>Why do Prairie City construction projects require specialized expertise?</h2>
      <p>Prairie City's elevation, agricultural character, and older housing stock create conditions that demand a contractor who knows Eastern Oregon — not just one who is willing to drive to it.</p>
    </div>
    <div class="area-bento">
      <div class="area-bento-card reveal-up reveal-delay-1">
        <div class="icon-wrap"><?php echo lucide_icon('snowflake'); ?></div>
        <h3>Highest snowloads in Grant County</h3>
        <p>At 3,500 feet near the Strawberry Mountain Wilderness, Prairie City sees heavier winter snowloads than lower parts of the valley. Deck structures, roofline additions, and framing for new construction all need to be engineered for this — we spec for it by default on every Prairie City project.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-2">
        <div class="icon-wrap"><?php echo lucide_icon('tractor'); ?></div>
        <h3>Agricultural ranch housing stock</h3>
        <p>Prairie City's residential properties lean heavily toward farmhouses, ranch homes, and outbuilding complexes tied to the local agricultural economy. Many were built between the 1930s and 1970s and haven't been significantly updated. Remodeling these homes means respecting their character while bringing systems — insulation, electrical, plumbing — up to current standards.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-3">
        <div class="icon-wrap"><?php echo lucide_icon('droplets'); ?></div>
        <h3>Strawberry Creek drainage</h3>
        <p>Properties near Strawberry Creek and Prairie Creek — the two primary drainages through Prairie City — can have moisture management challenges in basements and crawl spaces, particularly in early spring when snowmelt hits. We assess drainage as part of every estimate on properties in these corridors.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-4">
        <div class="icon-wrap"><?php echo lucide_icon('truck'); ?></div>
        <h3>Remote material logistics</h3>
        <p>Prairie City is 30+ miles from John Day and further from any major supply center. Getting specialty materials here on time requires the supplier relationships and planning that come from doing it for 20 years in this county. Our material logistics are built into every project timeline — no waiting on a truckload that wasn't ordered on time.</p>
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
<section class="area-services" aria-label="Services available in Prairie City OR">
  <div class="container">
    <h2 class="reveal-up">Construction services available in <span class="text-accent">Prairie City, OR</span></h2>
    <div class="services-grid">
      <?php
      $serviceData = [
        ['slug'=>'custom-home-building','icon'=>'home','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg','bullets'=>['Full design-to-build','High-elevation climate specs','Grant County permitted']],
        ['slug'=>'general-remodeling','icon'=>'wrench','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg','bullets'=>['Ranch &amp; farmhouse renovations','Additions &amp; conversions','Interior finish work']],
        ['slug'=>'kitchen-remodeling','icon'=>'utensils','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604145059-2lrm2s-image_1_.jpg','bullets'=>['Cabinets, countertops &amp; layout','Electrical &amp; plumbing updated','Permits included']],
        ['slug'=>'bathroom-remodeling','icon'=>'bath','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604143637-sycb6k-image.jpg','bullets'=>['Walk-in shower conversions','Vanity &amp; fixture upgrades','Full plumbing rough-in']],
        ['slug'=>'decks','icon'=>'tree-pine','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604099376-0r19op-20220724_154635.jpg','bullets'=>['Snowload-engineered decks','Mountain &amp; meadow views','Composite &amp; treated wood']],
        ['slug'=>'framing','icon'=>'hammer','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg','bullets'=>['New builds &amp; additions','Outbuilding framing','Structural repairs']],
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
               alt="<?php echo htmlspecialchars($svc['name']); ?> near Prairie City, OR by Superior Home Builders"
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
<section class="area-why" aria-label="Why Superior Home Builders in Prairie City">
  <div class="container">
    <div class="area-why-grid">
      <div class="reveal-scale">
        <div class="area-why-photo">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604306051-1cn5ph-467748149_10161026648862734_1486565757297760050_n.jpg"
               alt="Superior Home Builders project near Prairie City Oregon"
               width="480" height="600" loading="lazy">
          <div class="area-why-badge">Prairie City's Local Builder</div>
        </div>
      </div>
      <div class="reveal-right">
        <h2>Why should Prairie City homeowners hire Superior Home Builders instead of a general contractor from outside Grant County?</h2>
        <p class="answer-block">Prairie City is one of the more remote communities in Grant County — and that means the stakes are higher when you hire a contractor who doesn't know the area. Material deliveries require planning, permits go through an office in Canyon City, and the snowloads and temperatures at 3,500 feet are not what a contractor from the valley will default to engineering for. We've been doing this work in Prairie City for over 25 years and we build it right the first time.</p>
        <div class="area-why-points">
          <div class="area-why-point">
            <span class="num">01</span>
            <div>
              <strong>We know Prairie City's ag properties</strong>
              <span>Farmhouses, ranch-style homes, outbuildings, and the older Prairie Creek corridor housing stock are familiar territory. When we write an estimate for a Prairie City property, we're drawing on 25+ years of projects in this specific community.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">02</span>
            <div>
              <strong>High-elevation specs are standard for us</strong>
              <span>At 3,500 feet, Prairie City's snowloads and temperature extremes are simply what we plan for. We don't upcharge for "mountain work" — it's how we build throughout Grant County because it's the right way to build here.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">03</span>
            <div>
              <strong>Permits and materials handled</strong>
              <span>Grant County Building Department, material sourcing across Eastern Oregon, coordinated delivery to Prairie City — we handle the logistics that make rural construction difficult for unfamiliar contractors. You focus on the finished project.</span>
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
<section class="area-faq" aria-label="Prairie City construction FAQ">
  <div class="container">
    <h2 class="reveal-up">Common questions about construction near me in Prairie City, OR</h2>
    <p class="answer-block reveal-up reveal-delay-1">Answers for Prairie City homeowners and property owners planning remodels, new builds, or additions in the 97869 area.</p>
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
<section class="area-final-cta" aria-label="Get a free estimate in Prairie City">
  <div class="container reveal-up">
    <h2>Ready to start your Prairie City project?</h2>
    <p>Superior Home Builders brings Grant County's 25+ years of Eastern Oregon construction experience to Prairie City. Free on-site estimate, written scope, honest timeline. We know the area — and we'll treat your property right.</p>
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
