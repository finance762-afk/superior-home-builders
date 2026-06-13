<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Home Building & Construction in Long Creek, OR | Superior Home Builders';
$pageDescription = 'Superior Home Builders (CCB# 147123) serves Long Creek, OR with custom home construction, remodeling, decks, and framing in north Grant County. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/long-creek/';
$currentPage     = 'service-area';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604098293-gywzxu-20220724_152529.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',          'url' => $siteUrl . '/'],
  ['name' => 'Service Areas', 'url' => $siteUrl . '/service-area/'],
  ['name' => 'Long Creek',    'url' => $siteUrl . '/areas/long-creek/'],
]);

$localBusiness = [
  '@context' => 'https://schema.org',
  '@type'    => 'HomeAndConstructionBusiness',
  '@id'      => $siteUrl . '/areas/long-creek/#local',
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
    'name'          => 'Long Creek',
    'addressRegion' => 'OR',
    'postalCode'    => '97856',
    'containedIn'   => [
      '@type' => 'AdministrativeArea',
      'name'  => 'Grant County',
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
    'q' => 'Does Superior Home Builders serve Long Creek, OR?',
    'a' => 'Yes — Long Creek is a service area for Superior Home Builders. We\'re based in Mount Vernon and travel regularly to communities throughout Grant County, including Long Creek on Hwy 395 in the north end of the county. We handle custom home builds, remodels, deck construction, framing, and kitchen and bathroom renovations. All permits go through the Grant County Building Department in Canyon City, which we\'ve worked with for over 25 years.',
  ],
  [
    'q' => 'What construction challenges are unique to building in Long Creek at 3,200 feet?',
    'a' => 'Long Creek sits at 3,200 feet in timbered mountain terrain north of John Day, which creates several site-specific challenges. Winter snowloads are significant and must be engineered into roof and deck structures from the spec stage. The surrounding timber country means site access and material delivery require advance planning — especially on properties set back from Hwy 395. Older ranch and logging-era homes in the area often have minimal insulation and aging electrical systems that need updating before interior work begins. We account for all of this before we write an estimate.',
  ],
  [
    'q' => 'Can Superior Home Builders work on homes and outbuildings in the Long Creek School and Middle Fork John Day River area?',
    'a' => 'Absolutely. Properties near Long Creek School, along the Middle Fork John Day River corridor, and throughout the surrounding ranching and logging community are familiar territory for us. We\'ve worked on ranch homes, agricultural outbuildings, and rural residential properties throughout north Grant County. Whether you\'re renovating a decades-old home on a working ranch or building new in the timber country around Long Creek, we understand the logistics and conditions specific to this part of the county.',
  ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   LONG CREEK SERVICE AREA — Superior Home Builders
   Premium page styles | var() tokens only
   Techniques: layered hero (::before gradient + ::after noise), floating
   accent circle, asymmetric photo+content split, bento local signals,
   services grid, why-us numbered points, FAQ accordion, SVG dividers,
   stat watermark, multi-direction reveals
   ════════════════════════════════════════════════════════════════════ */

.area-hero {
  position: relative; min-height: 68vh; display: flex; align-items: center;
  background-image: url('<?php echo $heroImage; ?>');
  background-size: cover; background-position: center 40%;
  padding-top: var(--nav-height); overflow: hidden;
}
.area-hero::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(125deg,
    rgba(var(--color-primary-rgb),0.96) 0%,
    rgba(var(--color-secondary-rgb),0.80) 50%,
    rgba(var(--color-primary-rgb),0.55) 100%);
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

<section class="area-hero" aria-label="Long Creek service area">
  <div class="area-hero-floating" aria-hidden="true"></div>
  <div class="area-hero-inner">
    <div class="container">
      <span class="area-hero-eyebrow"><?php echo lucide_icon('map-pin'); ?> Long Creek, OR &middot; North Grant County &middot; 3,200 ft</span>
      <h1>Home Building &amp; Construction in<br><em>Long Creek, OR</em></h1>
      <p class="area-hero-answer">Superior Home Builders serves Long Creek with custom home construction, remodeling, deck building, framing, and kitchen and bathroom renovations in the timbered mountain country of north Grant County. Our crew is based in Mount Vernon, 45 miles south on Hwy 395, and we know the ranching and logging community of Long Creek — the snowloads, the older housing stock, and what it takes to get materials and equipment to this part of the county.</p>
      <div class="area-hero-trust">
        <span class="area-hero-trust-item"><?php echo lucide_icon('mountain'); ?> 3,200 ft elevation expertise</span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Oregon Licensed &middot; CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('calendar'); ?> Serving Grant County since 2001</span>
      </div>
      <div class="area-hero-actions">
        <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate in Long Creek</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
        <?php endif; ?>
      </div>
      <nav class="area-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">›</span>
        <a href="/service-area/">Service Areas</a><span class="sep">›</span>
        <span aria-current="page">Long Creek</span>
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
<section class="area-intro" aria-label="About construction in Long Creek, OR">
  <div class="area-intro-watermark" aria-hidden="true">LONG CREEK</div>
  <div class="container">
    <div class="area-intro-grid">
      <div class="reveal-left">
        <h2>What does it take to build and remodel homes in Long Creek's timbered mountain country?</h2>
        <p class="answer-block">Long Creek is a small ranching community of roughly 200 residents in the mountains of north Grant County, sitting at 3,200 feet along Hwy 395 near the Middle Fork John Day River. It is one of the more remote communities in the county, with a housing stock that reflects its history — working ranches, older homes built for the logging and agricultural economy, and properties where outbuildings are as important as the main house. Building and remodeling here requires a contractor who plans for mountain weather, knows how to get materials to the north end of the county, and understands what these older homes actually need before a project starts.</p>
        <p class="area-identity">Superior Home Builders is a licensed Oregon general contractor (CCB# 147123) based in Mount Vernon, serving Long Creek and Grant County with custom home building, remodeling, deck construction, and framing since 2001.</p>
        <a href="/contact/" class="btn btn-primary">Request a Free Estimate</a>
      </div>
      <div class="reveal-scale">
        <div class="area-intro-photo">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604098293-gywzxu-20220724_152529.jpg"
               alt="Construction framing project in Grant County Oregon by Superior Home Builders"
               width="420" height="560" loading="lazy">
          <div class="area-intro-photo-tag">Serving Long Creek — 25+ Years</div>
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
<section class="area-locals" aria-label="Long Creek construction context">
  <div class="container">
    <div class="area-locals-header reveal-up">
      <h2>Why does building in Long Creek call for a contractor who knows north Grant County?</h2>
      <p>Long Creek's elevation, timber-country terrain, and ranch-centered housing stock create conditions that demand genuine local knowledge — not a crew making a one-time drive up Hwy 395.</p>
    </div>
    <div class="area-bento">
      <div class="area-bento-card reveal-up reveal-delay-1">
        <div class="icon-wrap"><?php echo lucide_icon('snowflake'); ?></div>
        <h3>Mountain snowloads at 3,200 feet</h3>
        <p>Long Creek's elevation in the timbered terrain north of John Day means significant winter snowloads — more than communities lower in the valley. Every deck, roof addition, and new build we do in Long Creek is engineered with these loads in mind from the first drawing. We don't treat it as an add-on; it's standard practice for working at this elevation in north Grant County.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-2">
        <div class="icon-wrap"><?php echo lucide_icon('tractor'); ?></div>
        <h3>Ranching and logging community housing</h3>
        <p>Long Creek grew up around ranching and the timber industry, and its residential properties reflect that history. Many homes are older ranch-style builds that haven't seen significant work in decades — and outbuildings, barns, and shop structures are often as much a priority as the main residence. We've worked on this type of property throughout Grant County and know how to assess what's needed before writing an estimate.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-3">
        <div class="icon-wrap"><?php echo lucide_icon('truck'); ?></div>
        <h3>North county logistics from Mount Vernon</h3>
        <p>At 45 miles north of Mount Vernon on Hwy 395, Long Creek is one of the longer drives in our service area. Material deliveries, equipment staging, and crew scheduling all require planning that contractors unfamiliar with north Grant County frequently underestimate. We've been coordinating project logistics to this part of the county for over 25 years — it's accounted for in every timeline we write.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-4">
        <div class="icon-wrap"><?php echo lucide_icon('droplets'); ?></div>
        <h3>Middle Fork John Day River corridor</h3>
        <p>Properties near the Middle Fork John Day River and Long Creek's surrounding drainages can face moisture management challenges in crawl spaces and lower levels, particularly in spring when snowmelt runs heavy through the timber. We assess moisture and drainage conditions as part of every estimate on properties in this corridor — it's a step that prevents expensive surprises after the project is finished.</p>
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
<section class="area-services" aria-label="Services available in Long Creek OR">
  <div class="container">
    <h2 class="reveal-up">Construction services available in <span class="text-accent">Long Creek, OR</span></h2>
    <div class="services-grid">
      <?php
      $serviceData = [
        ['slug'=>'custom-home-building','icon'=>'home','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg','bullets'=>['Full design-to-build process','High-elevation snowload specs','Grant County permitted']],
        ['slug'=>'general-remodeling','icon'=>'wrench','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg','bullets'=>['Ranch &amp; logging-era homes','Additions &amp; structural repairs','Interior finish work']],
        ['slug'=>'kitchen-remodeling','icon'=>'utensils','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604305411-iws3zu-467311955_10160913944502734_1381678653232378695_n.jpg','bullets'=>['Cabinets, countertops &amp; layout','Electrical &amp; plumbing updated','Permits handled']],
        ['slug'=>'bathroom-remodeling','icon'=>'bath','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604306051-1cn5ph-467748149_10161026648862734_1486565757297760050_n.jpg','bullets'=>['Walk-in shower conversions','Vanity &amp; fixture upgrades','Full plumbing rough-in']],
        ['slug'=>'decks','icon'=>'tree-pine','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604099376-0r19op-20220724_154635.jpg','bullets'=>['Mountain snowload-engineered','Timber country views','Composite &amp; treated wood']],
        ['slug'=>'framing','icon'=>'hammer','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg','bullets'=>['New builds &amp; additions','Outbuilding &amp; shop framing','Structural repairs']],
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
               alt="<?php echo htmlspecialchars($svc['name']); ?> near Long Creek, OR by Superior Home Builders"
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
<section class="area-why" aria-label="Why Superior Home Builders in Long Creek">
  <div class="container">
    <div class="area-why-grid">
      <div class="reveal-scale">
        <div class="area-why-photo">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604304191-9h3673-466678023_10160894523422734_2342757114398857707_n.jpg"
               alt="Superior Home Builders crew on a Grant County construction project"
               width="480" height="600" loading="lazy">
          <div class="area-why-badge">Long Creek's Local Builder</div>
        </div>
      </div>
      <div class="reveal-right">
        <h2>Why do Long Creek property owners call Superior Home Builders instead of a contractor from outside Grant County?</h2>
        <p class="answer-block">Long Creek is one of the most remote communities we serve — small, tight-knit, and 45 miles from our home base in Mount Vernon. That distance matters. Contractors who aren't familiar with north Grant County regularly underestimate material lead times, don't account for the snowloads at 3,200 feet, and aren't set up to manage the logistics of working this far from a supply center. We've been doing exactly this for over 25 years. Long Creek property owners get the same level of planning and craftsmanship as any project in John Day or Mount Vernon — just with the added logistics experience to make it happen reliably in the north end of the county.</p>
        <div class="area-why-points">
          <div class="area-why-point">
            <span class="num">01</span>
            <div>
              <strong>We know ranching and timber-country properties</strong>
              <span>Long Creek's homes and outbuildings are built for a working rural life. We've renovated and built on agricultural properties throughout Grant County and understand what these structures need — from aging electrical in a 1950s ranch house to new framing on a shop addition near Long Creek School.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">02</span>
            <div>
              <strong>Mountain elevation specs are built into every project</strong>
              <span>At 3,200 feet in north Grant County, snowloads and temperature swings are real factors — not hypothetical. We engineer for them by default, whether that's a deck off the back of a Long Creek ranch house or a new build up on a timber property.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">03</span>
            <div>
              <strong>County permits and material logistics handled</strong>
              <span>Grant County Building Department permitting, material sourcing from across Eastern Oregon, scheduled delivery to the Hwy 395 corridor — we manage the moving parts that make north county projects complicated for contractors who don't have the relationships and routines we've built over 25 years.</span>
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
<section class="area-faq" aria-label="Long Creek construction FAQ">
  <div class="container">
    <h2 class="reveal-up">Common questions about construction near me in Long Creek, OR</h2>
    <p class="answer-block reveal-up reveal-delay-1">Answers for Long Creek homeowners and property owners planning remodels, new builds, or additions in the 97856 area of north Grant County.</p>
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
<section class="area-final-cta" aria-label="Get a free estimate in Long Creek">
  <div class="container reveal-up">
    <h2>Ready to start your Long Creek project?</h2>
    <p>Superior Home Builders brings 25+ years of Grant County construction experience to Long Creek and the north end of Hwy 395. Free on-site estimate, written scope, honest timeline — from a contractor who knows this community and builds for the conditions here.</p>
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
