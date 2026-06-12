<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Home Building & Remodeling in Canyon City, OR | Superior Home Builders';
$pageDescription = 'Superior Home Builders serves Canyon City, OR with custom home construction, kitchen & bathroom remodeling, framing, decks, and commercial builds. Licensed Grant County contractor minutes from Canyon City. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/canyon-city/';
$currentPage     = 'service-area';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604098293-gywzxu-20220724_152529.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',          'url' => $siteUrl . '/'],
  ['name' => 'Service Areas', 'url' => $siteUrl . '/service-area/'],
  ['name' => 'Canyon City',   'url' => $siteUrl . '/areas/canyon-city/'],
]);

$localBusiness = [
  '@context' => 'https://schema.org',
  '@type'    => 'HomeAndConstructionBusiness',
  '@id'      => $siteUrl . '/areas/canyon-city/#local',
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
    'name'          => 'Canyon City',
    'addressRegion' => 'OR',
    'postalCode'    => '97820',
  ],
  'provider' => ['@id' => $siteUrl . '/#organization'],
];

$schemaMarkup = json_encode(
  ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $localBusiness]],
  JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
);

$faqs = [
  [
    'q' => 'Does Superior Home Builders take construction projects in Canyon City, OR?',
    'a' => 'Yes — Canyon City is one of our closest service areas. Our Mount Vernon headquarters is just 6 miles from Canyon City, which means no travel fees and a crew that can be on-site quickly. We take custom home builds, kitchen remodels, bathroom renovations, deck installations, framing projects, and commercial builds throughout Canyon City and the surrounding 97820 area.',
  ],
  [
    'q' => 'Are older historic homes in Canyon City harder to remodel?',
    'a' => 'Canyon City has some of the oldest residential construction in Grant County — buildings dating to the 1870s and 1880s alongside the more typical 1940s–1980s housing stock. Older homes often have true-dimension framing lumber, older wiring, and limited insulation. We inspect before writing estimates and price for what we\'re likely to find, so the scope of work is clear before demo begins.',
  ],
  [
    'q' => 'Who handles building permits in Canyon City, OR?',
    'a' => 'Canyon City shares the Grant County Building Department (located in Canyon City itself) for most construction permits. Superior Home Builders handles all permit applications, plan submittals, and inspection scheduling on your behalf — you don\'t need to navigate the county office yourself. We\'ve worked with this department for over 25 years and know the process thoroughly.',
  ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   CANYON CITY SERVICE AREA — Superior Home Builders
   Premium page styles | var() tokens only
   Techniques: layered hero (::before + ::after), floating accent,
   asymmetric content/stats split, bento local signals, services grid,
   compare/why section, FAQ accordion, SVG dividers, multi-direction reveals
   ════════════════════════════════════════════════════════════════════ */

.area-hero {
  position: relative; min-height: 68vh; display: flex; align-items: center;
  background-image: url('<?php echo $heroImage; ?>');
  background-size: cover; background-position: center 35%;
  padding-top: var(--nav-height); overflow: hidden;
}
.area-hero::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(130deg,
    rgba(var(--color-primary-rgb),0.96) 0%,
    rgba(var(--color-secondary-rgb),0.80) 55%,
    rgba(var(--color-primary-rgb),0.55) 100%);
  z-index: 1;
}
.area-hero::after {
  content: ''; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  background-size: 180px; z-index: 2; pointer-events: none;
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

/* ── INTRO ──────────────────────────────────────────────────── */
.area-intro { padding: var(--space-4xl) 0; background: var(--color-bg); position: relative; overflow: hidden; }
.area-intro-pull {
  font-family: var(--font-heading); font-size: clamp(1.4rem,2.5vw,2.1rem);
  font-weight: 700; font-style: italic; color: var(--color-primary);
  border-left: 4px solid var(--color-accent); padding-left: var(--space-xl);
  max-width: 70ch; margin: 0 auto var(--space-3xl); line-height: 1.45;
}
.area-intro-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-4xl); align-items: start; }
.area-intro-content h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); }
.area-intro-content p.answer-block { font-size: var(--fs-body); color: var(--color-text); line-height: 1.75; max-width: 65ch; margin-bottom: var(--space-lg); }
.area-identity { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.7; padding: var(--space-md) var(--space-lg); border-left: 3px solid var(--color-accent); background: var(--color-card-tint-1); border-radius: 0 var(--radius) var(--radius) 0; margin-bottom: var(--space-xl); }
.area-photo-cluster { position: relative; }
.area-photo-primary { border-radius: var(--radius-lg); overflow: hidden; aspect-ratio: 4/3; box-shadow: var(--shadow-lg); }
.area-photo-primary img { width: 100%; height: 100%; object-fit: cover; display: block; }
.area-photo-accent {
  position: absolute; bottom: -var(--space-lg); left: -var(--space-lg);
  width: 140px; aspect-ratio: 1; border-radius: var(--radius-lg);
  overflow: hidden; box-shadow: var(--shadow-md);
  border: 3px solid var(--color-bg); bottom: calc(-1 * var(--space-lg));
  left: calc(-1 * var(--space-lg));
}
.area-photo-accent img { width: 100%; height: 100%; object-fit: cover; display: block; }

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

/* ── SERVICES GRID ──────────────────────────────────────────── */
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
.area-why-grid { display: grid; grid-template-columns: 1fr 420px; gap: var(--space-4xl); align-items: center; }
.area-why-content h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-lg); }
.area-why-content p.answer-block { font-size: var(--fs-body); color: var(--color-text); line-height: 1.75; max-width: 65ch; margin-bottom: var(--space-xl); }
.area-why-points { display: flex; flex-direction: column; gap: var(--space-lg); margin-bottom: var(--space-xl); }
.area-why-point { display: flex; gap: var(--space-md); align-items: flex-start; }
.area-why-point .num { font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: var(--color-accent-dark); min-width: 34px; line-height: 1; }
.area-why-point div strong { display: block; font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 2px; }
.area-why-point div span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }
.area-why-photo { position: relative; border-radius: var(--radius-lg); overflow: hidden; aspect-ratio: 4/5; box-shadow: var(--shadow-lg); }
.area-why-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
.area-why-photo::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 60%, rgba(var(--color-primary-rgb),0.55) 100%); }
.area-why-badge { position: absolute; bottom: var(--space-lg); left: var(--space-lg); right: var(--space-lg); background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading); font-size: 0.9rem; font-weight: 800; padding: var(--space-sm) var(--space-md); border-radius: var(--radius); z-index: 2; text-align: center; }

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
.reveal-delay-1{transition-delay:.1s} .reveal-delay-2{transition-delay:.2s}
.reveal-delay-3{transition-delay:.3s} .reveal-delay-4{transition-delay:.4s}

/* ── RESPONSIVE ─────────────────────────────────────────────── */
@media (max-width:1100px) {
  .area-intro-grid,.area-why-grid { grid-template-columns: 1fr; }
  .area-why-photo { aspect-ratio: 16/9; }
}
@media (max-width:768px) { .area-bento { grid-template-columns: 1fr 1fr; }  .area-hero-actions { flex-direction: column; } }
@media (max-width:480px) { .area-bento { grid-template-columns: 1fr; } }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="area-hero" aria-label="Canyon City service area">
  <div class="area-hero-inner">
    <div class="container">
      <span class="area-hero-eyebrow"><?php echo lucide_icon('map-pin'); ?> Canyon City, OR · Historic Grant County</span>
      <h1>Home Building &amp; Remodeling in<br><em>Canyon City, OR</em></h1>
      <p class="area-hero-answer">Superior Home Builders serves Canyon City homeowners and business owners with custom home construction, kitchen and bathroom remodeling, framing, decks, windows and doors, and commercial builds. Our Mount Vernon headquarters is just 6 miles from Canyon City — we're the local contractor for this community, familiar with the historic housing stock along Canyon Creek and the permit processes at the Grant County Building Department right here in town.</p>
      <div class="area-hero-trust">
        <span class="area-hero-trust-item"><?php echo lucide_icon('map-pin'); ?> 6 miles from Canyon City</span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Oregon Licensed &middot; CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('building'); ?> Historic Home Experience</span>
      </div>
      <div class="area-hero-actions">
        <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate in Canyon City</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
        <?php endif; ?>
      </div>
      <nav class="area-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">›</span>
        <a href="/service-area/">Service Areas</a><span class="sep">›</span>
        <span aria-current="page">Canyon City</span>
      </nav>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-primary)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 C480,56 960,0 1440,32 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- INTRO -->
<section class="area-intro" aria-label="About building in Canyon City, OR">
  <div class="container">
    <blockquote class="area-intro-pull reveal-up">
      "Canyon City's historic character is worth preserving — and it takes a contractor who knows the difference between renovation and replacement."
    </blockquote>
    <div class="area-intro-grid">
      <div class="reveal-left">
        <h2>What sets Canyon City construction projects apart from the rest of Grant County?</h2>
        <p class="answer-block">Canyon City is one of the oldest continuously occupied towns in Eastern Oregon, with settlement dating to the 1862 gold rush along Canyon Creek. That history means construction here often involves older structures — homes built with true-dimension lumber, original plaster and lathe walls, and foundation systems that predate modern codes. Superior Home Builders has remodeled historic properties throughout the Canyon Creek corridor, and we bring the knowledge to do that work correctly: preserving what matters, upgrading what needs to change, and meeting current code at every phase.</p>
        <p class="area-identity">Superior Home Builders is a licensed Oregon general contractor (CCB# 147123) based in Mount Vernon, OR, serving Canyon City and all of Grant County with custom home building, remodeling, and commercial construction since 2001. The Grant County Building Department — located in Canyon City — is our home permit office.</p>
        <a href="/contact/" class="btn btn-primary">Request a Free Estimate</a>
      </div>
      <div class="reveal-right">
        <div class="area-photo-cluster">
          <div class="area-photo-primary">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604104586-837vw8-20221127_142618.jpg"
                 alt="Remodeling project near Canyon City Oregon by Superior Home Builders"
                 width="560" height="420" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,35 C720,0 720,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- LOCAL SIGNALS BENTO -->
<section class="area-locals" aria-label="Local construction context for Canyon City">
  <div class="container">
    <div class="area-locals-header reveal-up">
      <h2>What do Canyon City homeowners need to know before starting a remodel or new build?</h2>
      <p>Canyon City's unique history, housing stock, and permit processes all shape how construction projects are planned and executed here.</p>
    </div>
    <div class="area-bento">
      <div class="area-bento-card reveal-up reveal-delay-1">
        <div class="icon-wrap"><?php echo lucide_icon('landmark'); ?></div>
        <h3>Grant County permits — on-site</h3>
        <p>The Grant County Building Department is located in Canyon City itself, making permit coordination especially efficient for our crew. We've worked with this office for over 25 years and handle all plan submittals, applications, and inspection scheduling on your behalf — no extra red tape for you.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-2">
        <div class="icon-wrap"><?php echo lucide_icon('archive'); ?></div>
        <h3>True-dimension historic framing</h3>
        <p>Canyon City homes from the early 1900s were framed with true-dimension lumber — a 2×4 that actually measures 2 inches by 4 inches. This affects how you marry modern materials to existing structures. We know how to work with it cleanly and we price for it in the estimate, not as a surprise mid-project.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-3">
        <div class="icon-wrap"><?php echo lucide_icon('droplets'); ?></div>
        <h3>Canyon Creek drainage concerns</h3>
        <p>Properties near Canyon Creek in Canyon City have specific drainage and moisture considerations — especially for basements, crawl spaces, and deck footings near the creek corridor. We assess site drainage before pouring any concrete or framing any subfloor, and include drainage mitigation in projects where it's warranted.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-4">
        <div class="icon-wrap"><?php echo lucide_icon('shield'); ?></div>
        <h3>Weatherproofing for elevation</h3>
        <p>Canyon City sits at 3,200 feet — slightly above John Day — which compounds Eastern Oregon's freeze-thaw cycles and snowload requirements. Window and door replacements, deck structures, and exterior framing additions all need Eastern Oregon climate specs that a contractor from outside the region won't apply by default.</p>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,10 C360,56 1080,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- SERVICES -->
<section class="area-services" aria-label="Services available in Canyon City OR">
  <div class="container">
    <h2 class="reveal-up">Services available to <span class="text-accent">Canyon City</span> homeowners and businesses</h2>
    <div class="services-grid">
      <?php
      $serviceData = [
        ['slug'=>'general-remodeling','icon'=>'wrench','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg','bullets'=>['Historic home renovations','Room additions &amp; conversions','Interior finish work']],
        ['slug'=>'kitchen-remodeling','icon'=>'utensils','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604145059-2lrm2s-image_1_.jpg','bullets'=>['Cabinets, countertops &amp; layout','Old wiring &amp; plumbing updated','Permits included']],
        ['slug'=>'bathroom-remodeling','icon'=>'bath','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604143637-sycb6k-image.jpg','bullets'=>['Vintage bath restorations','Walk-in shower upgrades','Full plumbing rough-in']],
        ['slug'=>'framing','icon'=>'hammer','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg','bullets'=>['Repairs to historic framing','Additions &amp; new structures','Snowload-engineered']],
        ['slug'=>'windows-and-doors','icon'=>'door-open','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604124347-3q5r39-Finished_windows_Southside.jpg','bullets'=>['Energy-efficient replacements','Historic proportions respected','Entry doors &amp; sliders']],
        ['slug'=>'decks','icon'=>'tree-pine','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604099376-0r19op-20220724_154635.jpg','bullets'=>['Creekside &amp; hillside decks','Snowload-engineered footings','Composite &amp; treated wood']],
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
               alt="<?php echo htmlspecialchars($svc['name']); ?> in Canyon City, OR"
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
    <path d="M0,25 C480,0 960,56 1440,15 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- WHY SUPERIOR -->
<section class="area-why" aria-label="Why choose Superior Home Builders for Canyon City projects">
  <div class="container">
    <div class="area-why-grid">
      <div class="reveal-left">
        <h2>Why do Canyon City homeowners call Superior Home Builders for their renovation projects?</h2>
        <p class="answer-block">Canyon City's housing stock has a character that generic remodel contractors often don't know how to handle. When you're updating a 1920s farmhouse near the Grant County Courthouse or adding a deck to a mid-century home on Canyon Creek, you want a contractor who respects what's already there and knows how to bring it up to code without destroying the character of the original structure. That's what we do.</p>
        <div class="area-why-points">
          <div class="area-why-point">
            <span class="num">01</span>
            <div>
              <strong>Historic structure expertise</strong>
              <span>We've remodeled homes throughout Canyon City and the surrounding Canyon Creek corridor — true-dimension lumber, original lathe-and-plaster walls, pre-code electrical — and we know exactly how to integrate modern systems cleanly.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">02</span>
            <div>
              <strong>The Grant County Building Department is our home office</strong>
              <span>The permit office that issues Canyon City construction permits is literally in this town. We've worked with this department for 25+ years — inspections get scheduled, questions get answered fast.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">03</span>
            <div>
              <strong>6 miles from our headquarters</strong>
              <span>When you're this close, there's no mobilization delay, no travel markup, and no crew that needed a map to find your street. We know Canyon City's neighborhoods and can respond fast when your project needs us.</span>
            </div>
          </div>
        </div>
        <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
      <div class="reveal-scale">
        <div class="area-why-photo">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604305411-iws3zu-467311955_10160913944502734_1361278653232378695_n.jpg"
               alt="Superior Home Builders construction work near Canyon City Oregon"
               width="420" height="525" loading="lazy">
          <div class="area-why-badge">Canyon City's Trusted Contractor</div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C360,10 1080,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- FAQ -->
<section class="area-faq" aria-label="Canyon City construction FAQ">
  <div class="container">
    <h2 class="reveal-up">Frequently asked questions about construction near me in Canyon City, OR</h2>
    <p class="answer-block reveal-up reveal-delay-1">Answers for homeowners planning remodeling and construction projects in Canyon City and the 97820 area.</p>
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
<section class="area-final-cta" aria-label="Get a free estimate in Canyon City">
  <div class="container reveal-up">
    <h2>Ready to build or remodel in Canyon City, OR?</h2>
    <p>Superior Home Builders is Canyon City's nearest licensed general contractor — 6 miles away, 25+ years of Grant County experience, and free on-site estimates for every project. No travel fees, no learning curve.</p>
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
