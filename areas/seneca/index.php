<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Home Building & Construction in Seneca, OR | Superior Home Builders';
$pageDescription = 'Superior Home Builders serves Seneca, OR with custom home construction, remodeling, decks, and framing. Licensed Grant County contractor CCB# 147123. Free estimates in 97873.';
$canonicalUrl    = $siteUrl . '/areas/seneca/';
$currentPage     = 'service-area';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604105979-qifw3f-20230813_180947.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',          'url' => $siteUrl . '/'],
  ['name' => 'Service Areas', 'url' => $siteUrl . '/service-area/'],
  ['name' => 'Seneca',        'url' => $siteUrl . '/areas/seneca/'],
]);

$localBusiness = [
  '@context' => 'https://schema.org',
  '@type'    => 'HomeAndConstructionBusiness',
  '@id'      => $siteUrl . '/areas/seneca/#local',
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
    'name'          => 'Seneca',
    'addressRegion' => 'OR',
    'postalCode'    => '97873',
    'containedIn'   => [
      '@type' => 'AdministrativeArea',
      'name'  => 'Grant County',
    ],
  ],
  'provider' => ['@id' => $siteUrl . '/#organization'],
];

$faqs = [
  [
    'q' => 'Does Superior Home Builders serve Seneca, OR?',
    'a' => 'Yes — Seneca is a service area for Superior Home Builders. We\'re based in Mount Vernon and travel to Seneca for custom home construction, remodeling, deck builds, framing, and related work across the 97873 zip code. All permits are coordinated through the Grant County Building Department, which we\'ve worked with throughout Grant County for over 25 years.',
  ],
  [
    'q' => 'What are the biggest construction challenges for homes in Seneca, OR?',
    'a' => 'Seneca sits at 4,676 feet — one of the highest towns in Oregon — in the Bear Valley basin, and holds the record for some of the coldest temperatures ever recorded in the state. Construction at this elevation demands roof and deck structures engineered for extreme snowloads, deep-frost foundation design, and insulation well beyond standard Oregon code minimums. Freeze-thaw cycles are intense here, affecting concrete, wood, and mechanical systems alike. We build for these conditions as standard practice, not as an add-on.',
  ],
  [
    'q' => 'Can Superior Home Builders work on ranch properties and older homes near Silver Creek in Seneca?',
    'a' => 'Absolutely. The Seneca area is ranch country — properties along Silver Creek and through Bear Valley tend to be working agricultural operations with older residential structures and outbuildings that need renovation or replacement. We\'ve renovated farmhouses and ranch homes throughout Grant County and are comfortable with the challenges they present: minimal original insulation, aging electrical and plumbing, and structures that weren\'t engineered for modern snowload requirements. We assess all of this before writing an estimate.',
  ],
];

$faqSchema = generateFAQSchema($faqs);

$schemaMarkup = json_encode(
  ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $localBusiness, $faqSchema]],
  JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   SENECA SERVICE AREA — Superior Home Builders
   Premium page styles | var() tokens only
   Techniques: layered hero (::before gradient + ::after noise), floating
   accent circle, asymmetric photo+content, bento local signals, services
   grid, why-us numbered points, FAQ accordion, SVG dividers,
   multi-direction reveals, stat watermark, pull-quote identity block
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

<section class="area-hero" aria-label="Seneca service area">
  <div class="area-hero-floating" aria-hidden="true"></div>
  <div class="area-hero-inner">
    <div class="container">
      <span class="area-hero-eyebrow"><?php echo lucide_icon('mountain'); ?> Seneca, OR &middot; Bear Valley &middot; 4,676 ft Elevation</span>
      <h1>Home Building &amp; Construction in<br><em>Seneca, OR</em></h1>
      <p class="area-hero-answer">Superior Home Builders serves Seneca with custom home construction, remodeling, decks, framing, and more — built for the extreme conditions at the highest elevations in Grant County. Our crew is based in Mount Vernon and has been working throughout the county, including remote high-altitude communities like Seneca in the Bear Valley basin, for over 25 years.</p>
      <div class="area-hero-trust">
        <span class="area-hero-trust-item"><?php echo lucide_icon('mountain'); ?> 4,676 ft elevation expertise</span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Oregon Licensed &middot; CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('calendar'); ?> Serving Grant County since 2001</span>
      </div>
      <div class="area-hero-actions">
        <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate in Seneca</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
        <?php endif; ?>
      </div>
      <nav class="area-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">›</span>
        <a href="/service-area/">Service Areas</a><span class="sep">›</span>
        <span aria-current="page">Seneca</span>
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
<section class="area-intro" aria-label="About construction in Seneca, OR">
  <div class="area-intro-watermark" aria-hidden="true">SENECA</div>
  <div class="container">
    <div class="area-intro-grid">
      <div class="reveal-left">
        <h2>What does building in Oregon's highest-elevation community actually require?</h2>
        <p class="answer-block">Seneca sits at 4,676 feet in the Bear Valley basin at the southern end of Grant County — one of the highest incorporated communities in the state and one of the coldest. Record low temperatures have been recorded here, and the extreme winters that define life in Seneca also define the engineering requirements for anything built here. Standard Oregon residential construction specs are not sufficient at this altitude. Roof systems have to carry snowloads that most valley contractors won't account for, foundations must be designed for deep frost penetration, and insulation values need to reflect temperatures that routinely drop well below what lower-elevation properties ever see. Superior Home Builders has been working in Grant County's high-elevation terrain for over 25 years and we apply that experience to every Seneca project from the first conversation.</p>
        <p class="area-identity">Superior Home Builders is a licensed Oregon general contractor (CCB# 147123) based in Mount Vernon, serving Seneca and Grant County with custom home building, remodeling, and construction since 2001.</p>
        <a href="/contact/" class="btn btn-primary">Request a Free Estimate</a>
      </div>
      <div class="reveal-scale">
        <div class="area-intro-photo">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604105979-qifw3f-20230813_180947.jpg"
               alt="Construction work in rural Grant County Oregon by Superior Home Builders"
               width="420" height="560" loading="lazy">
          <div class="area-intro-photo-tag">Serving Seneca &amp; Bear Valley — 25+ Years</div>
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
<section class="area-locals" aria-label="Seneca construction context">
  <div class="container">
    <div class="area-locals-header reveal-up">
      <h2>Why does construction near me in Seneca, OR demand a different level of expertise?</h2>
      <p>Seneca's record cold, high altitude, Silver Creek drainage, and working ranch heritage create construction conditions that set it apart from anywhere else in Grant County.</p>
    </div>
    <div class="area-bento">
      <div class="area-bento-card reveal-up reveal-delay-1">
        <div class="icon-wrap"><?php echo lucide_icon('thermometer-snowflake'); ?></div>
        <h3>Extreme cold demands deeper engineering</h3>
        <p>Seneca holds some of the coldest temperature records in Oregon history. At 4,676 feet in the Bear Valley basin, frost penetration reaches depths far below what standard foundation specs account for. Every project we build in Seneca is engineered for these conditions — footings, slab design, and insulation values are all specified for the actual climate, not the state minimum.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-2">
        <div class="icon-wrap"><?php echo lucide_icon('cloud-snow'); ?></div>
        <h3>Oregon's highest snowloads at this elevation</h3>
        <p>At the southern end of Grant County and surrounded by higher terrain, Seneca accumulates significant snowpack each winter. Roof structures, deck framing, and any addition or covered structure must be designed to carry these loads safely. We engineer to the actual snowload zone for 97873 — not the lower-elevation defaults that show up in standard plan packages.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-3">
        <div class="icon-wrap"><?php echo lucide_icon('waves'); ?></div>
        <h3>Silver Creek drainage and site moisture</h3>
        <p>Silver Creek and the Bear Valley drainage basin create moisture management challenges for properties in and around Seneca, especially during spring snowmelt. Foundation waterproofing, crawl space conditions, and grading around structures all need more attention here than in drier, lower-elevation sites. We assess site drainage before finalizing any estimate on a Seneca property.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-4">
        <div class="icon-wrap"><?php echo lucide_icon('tractor'); ?></div>
        <h3>Ranch country housing and outbuildings</h3>
        <p>Seneca is working ranch country — the approximately 200 residents and their properties are tied to the agricultural economy of Bear Valley, and the housing stock reflects that. Older ranch homes, livestock facilities, hay storage, and outbuildings are the norm. We're experienced renovating and building in this context, matching the practical, durable construction style that works here.</p>
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
<section class="area-services" aria-label="Services available in Seneca OR">
  <div class="container">
    <h2 class="reveal-up">Construction services available in <span class="text-accent">Seneca, OR</span></h2>
    <div class="services-grid">
      <?php
      $serviceData = [
        ['slug'=>'custom-home-building','icon'=>'home','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg','bullets'=>['High-altitude climate specs','Full design-to-build service','Grant County permitted']],
        ['slug'=>'general-remodeling','icon'=>'wrench','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg','bullets'=>['Ranch home renovations','Whole-house or room-by-room','Interior &amp; structural work']],
        ['slug'=>'kitchen-remodeling','icon'=>'utensils','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604305411-iws3zu-467311955_10160913944502734_1381678653232378695_n.jpg','bullets'=>['Cabinets, countertops &amp; layout','Electrical &amp; plumbing updated','Permits included']],
        ['slug'=>'bathroom-remodeling','icon'=>'bath','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604306051-1cn5ph-467748149_10161026648862734_1486565757297760050_n.jpg','bullets'=>['Walk-in shower conversions','Vanity &amp; fixture upgrades','Full plumbing rough-in']],
        ['slug'=>'decks','icon'=>'tree-pine','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604099376-0r19op-20220724_154635.jpg','bullets'=>['Snowload-rated structures','Composite &amp; treated wood','Bear Valley view decks']],
        ['slug'=>'framing','icon'=>'hammer','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg','bullets'=>['New builds &amp; additions','Outbuilding &amp; barn framing','Structural repairs']],
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
               alt="<?php echo htmlspecialchars($svc['name']); ?> in Seneca, OR by Superior Home Builders"
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
<section class="area-why" aria-label="Why Superior Home Builders in Seneca">
  <div class="container">
    <div class="area-why-grid">
      <div class="reveal-scale">
        <div class="area-why-photo">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=480&q=80"
               alt="Superior Home Builders crew working on a Grant County construction project"
               width="480" height="600" loading="lazy">
          <div class="area-why-badge">Seneca's High-Country Builder</div>
        </div>
      </div>
      <div class="reveal-right">
        <h2>Why hire a contractor who already knows what it takes to build at 4,676 feet in Seneca?</h2>
        <p class="answer-block">Most contractors who travel to Seneca from outside Eastern Oregon underestimate what the elevation actually means for a build. The snowloads, the frost depth, the insulation requirements, the logistics of getting materials to a community of 200 people in one of the coldest valleys in Oregon — these aren't things you figure out on your first job here. We've been building and remodeling throughout Grant County since 2001, and we bring that accumulated experience to every Seneca project we take on.</p>
        <div class="area-why-points">
          <div class="area-why-point">
            <span class="num">01</span>
            <div>
              <strong>We engineer for Bear Valley's actual conditions</strong>
              <span>Seneca's cold records and high snowloads aren't edge cases to us — they're the baseline we plan from. Every structural element, every insulation spec, every foundation detail on a Seneca project reflects what the 97873 climate actually demands.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">02</span>
            <div>
              <strong>Ranch and agricultural construction is our territory</strong>
              <span>Bear Valley is working ranch country and we've built and renovated in this environment for years. Whether it's updating an older ranch house, adding a covered porch, or building a new structure on agricultural land, we know what durable, practical construction looks like out here.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">03</span>
            <div>
              <strong>Logistics to remote communities, handled</strong>
              <span>Seneca is one of the more isolated communities in Grant County. Getting materials here on time and coordinating permits through Canyon City requires planning that comes from doing this work in Eastern Oregon for over two decades. We don't pass supply-chain headaches to the client.</span>
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
<section class="area-faq" aria-label="Seneca construction FAQ">
  <div class="container">
    <h2 class="reveal-up">Common questions about construction near me in Seneca, OR</h2>
    <p class="answer-block reveal-up reveal-delay-1">Answers for Seneca homeowners and property owners in the 97873 area planning new builds, remodels, or additions in Bear Valley.</p>
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
<section class="area-final-cta" aria-label="Get a free estimate in Seneca">
  <div class="container reveal-up">
    <h2>Ready to build in Seneca, OR?</h2>
    <p>Superior Home Builders brings 25+ years of Grant County construction experience to Seneca and Bear Valley. Free on-site estimate, written scope, honest timeline. We know what it takes to build right at 4,676 feet — and we'll treat your property accordingly.</p>
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
