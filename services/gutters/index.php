<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Gutter Installation in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Gutter installation on homes & commercial buildings across Grant & Harney Counties. Snowmelt & rain management critical in Eastern Oregon. Licensed CCB# 147123. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/gutters/';
$currentPage      = 'services';
$heroImageUrl     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604110512-hpeyxa-20230904_195415.jpg';
$heroImagePreload = $heroImageUrl;
$ogImage          = $heroImageUrl;

$faqs = [
  ['q' => 'Why is gutter installation important in Eastern Oregon?',
   'a' => 'Eastern Oregon\'s snowmelt season — typically March through May — produces significant roof runoff in a short window. Without gutters, that water drains directly against the foundation and into crawl spaces, causing moisture damage, erosion, and eventually structural problems. In the John Day River basin and surrounding valleys, spring runoff is a genuine drainage challenge. Proper gutters and downspout routing are not optional for homes with any foundation vulnerability.'],
  ['q' => 'What size gutters do Eastern Oregon homes need?',
   'a' => 'Most Eastern Oregon homes perform well with 5-inch K-style gutters for standard roof pitches and drainage areas. Homes with large roof planes — common on custom builds and ranch-style homes — benefit from 6-inch gutters that move more volume per linear foot. We calculate drainage area and recommend the right size based on your roof geometry before any installation. Undersized gutters overflow during snowmelt season and defeat the purpose.'],
  ['q' => 'Do you install gutters on commercial buildings in Grant County?',
   'a' => 'Yes. Commercial gutters are a regular part of our work — we\'ve installed them on shops, warehouses, retail buildings, and agricultural structures throughout the county. Commercial installations typically use 6-inch or larger K-style or box gutter systems depending on the roof area and building use. We provide written estimates on commercial gutter projects the same as residential.'],
  ['q' => 'Can gutters handle Eastern Oregon\'s winter ice conditions?',
   'a' => 'Gutters in Eastern Oregon need to handle freeze-thaw cycles. We install with proper hanger spacing so gutters don\'t sag under ice load, and we recommend downspout extensions that terminate far enough from the foundation to prevent ice dams forming at grade. Ice and water shield at the eaves (if your roof is being re-roofed at the same time) is the most effective approach to ice damming, but gutter installation can be done independently.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',     'url' => $siteUrl . '/'],
  ['name' => 'Services', 'url' => $siteUrl . '/services/'],
  ['name' => 'Gutters',  'url' => $siteUrl . '/services/gutters/'],
]);
$serviceSchema = [
  '@context'    => 'https://schema.org',
  '@type'       => 'Service',
  '@id'         => $siteUrl . '/services/gutters/#service',
  'name'        => 'Gutter Installation',
  'url'         => $siteUrl . '/services/gutters/',
  'provider'    => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Eastern Oregon', 'addressRegion' => 'OR'],
  'description' => 'Gutter installation on residential and commercial buildings throughout Grant and Harney Counties. Snowmelt and rain management systems engineered for Eastern Oregon\'s spring runoff and freeze-thaw climate. Licensed CCB# 147123.',
];
$faqSchema    = generateFAQSchema($faqs);
$schemaGraph  = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ── Gutters Service Page ────────────────────────────────────────────────── */
.sp-hero {
  position: relative;
  min-height: 68vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImageUrl; ?>');
  background-size: cover;
  background-position: center 40%;
  padding-top: var(--nav-height);
}
.sp-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(120deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-secondary-rgb), 0.74) 55%, rgba(var(--color-primary-rgb), 0.48) 100%);
  z-index: 1;
}
.sp-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.sp-hero-inner { position: relative; z-index: 3; width: 100%; padding: var(--space-3xl) 0 var(--space-2xl); }
.sp-hero-layout { display: grid; grid-template-columns: 1fr 380px; gap: var(--space-3xl); align-items: center; }
.sp-hero-eyebrow {
  display: inline-flex; align-items: center; gap: var(--space-xs);
  background: rgba(var(--color-accent-rgb), 0.15); border: 1px solid rgba(var(--color-accent-rgb), 0.40);
  color: var(--color-accent); font-size: var(--fs-xs); font-weight: 700;
  letter-spacing: 0.12em; text-transform: uppercase; padding: 5px var(--space-md); border-radius: 100px; margin-bottom: var(--space-md);
}
.sp-hero-eyebrow svg { width: 14px; height: 14px; }
.sp-hero h1 { font-family: var(--font-heading); font-size: clamp(2.1rem, 4.8vw, 3.4rem); font-weight: 800; line-height: 1.05; color: #fff; text-wrap: balance; margin-bottom: var(--space-lg); }
.sp-hero h1 em { font-style: italic; color: var(--color-accent); }
p.hero-answer { font-size: clamp(1rem, 1.25vw, 1.1rem); color: rgba(255,255,255,0.84); max-width: 58ch; line-height: 1.75; margin-bottom: var(--space-xl); }
.sp-hero-trust { display: flex; flex-wrap: wrap; gap: var(--space-md); margin-bottom: var(--space-xl); }
.sp-hero-trust-item { display: flex; align-items: center; gap: var(--space-xs); font-size: var(--fs-sm); color: rgba(255,255,255,0.72); }
.sp-hero-trust-item svg { width: 15px; height: 15px; color: var(--color-accent); flex-shrink: 0; }
.sp-hero-actions { display: flex; flex-wrap: wrap; gap: var(--space-md); }
.sp-hero-card {
  background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.15);
  backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px); border-radius: 16px; padding: var(--space-2xl); color: #fff;
}
.sp-hero-card h3 { font-family: var(--font-heading); font-size: 1.25rem; margin-bottom: var(--space-lg); text-wrap: balance; }
.sp-hero-card ul { list-style: none; padding: 0; margin: 0 0 var(--space-xl); display: flex; flex-direction: column; gap: var(--space-sm); }
.sp-hero-card ul li { display: flex; align-items: center; gap: var(--space-sm); font-size: var(--fs-sm); color: rgba(255,255,255,0.82); }
.sp-hero-card ul li svg { color: var(--color-accent); width: 16px; height: 16px; flex-shrink: 0; }
.sp-hero-breadcrumb { margin-top: var(--space-2xl); font-size: var(--fs-xs); color: rgba(255,255,255,0.48); }
.sp-hero-breadcrumb a { color: rgba(255,255,255,0.62); }
.sp-hero-breadcrumb a:hover { color: var(--color-accent); }
.sp-hero-breadcrumb .sep { margin: 0 var(--space-xs); }
.sp-divider { display: block; width: 100%; overflow: hidden; line-height: 0; }
.sp-divider svg { display: block; width: 100%; }
.sp-problem { padding: var(--space-4xl) 0; background: var(--color-bg); }
.sp-problem-pull {
  font-family: var(--font-heading); font-size: clamp(1.4rem, 2.5vw, 2.2rem); font-weight: 700; font-style: italic;
  color: var(--color-primary); border-left: 4px solid var(--color-accent); padding-left: var(--space-xl);
  max-width: 70ch; margin: 0 auto var(--space-3xl); line-height: 1.45; text-wrap: balance;
}
.sp-bento { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-md); }
.sp-bento-card {
  background: var(--color-bg-alt); border: 1px solid var(--color-border); border-radius: 14px;
  padding: var(--space-xl) var(--space-lg); transition: transform var(--transition), box-shadow var(--transition);
}
.sp-bento-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.sp-bento-card .icon-wrap {
  width: 48px; height: 48px; border-radius: 10px; background: rgba(var(--color-accent-rgb), 0.12);
  display: flex; align-items: center; justify-content: center; margin-bottom: var(--space-md); color: var(--color-accent-dark);
}
.sp-bento-card .icon-wrap svg { width: 22px; height: 22px; }
.sp-bento-card h3 { font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: var(--color-primary); margin-bottom: var(--space-sm); text-wrap: balance; }
.sp-bento-card p { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.65; }
.sp-expert { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.sp-expert-grid { display: grid; grid-template-columns: 420px 1fr; gap: var(--space-3xl); align-items: center; }
.sp-expert-photo { position: relative; border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-lg); }
.sp-expert-photo img { width: 100%; height: 100%; object-fit: cover; display: block; aspect-ratio: 4/5; }
.sp-expert-photo::after {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb), 0.55) 100%); pointer-events: none;
}
.sp-expert-photo-badge {
  position: absolute; bottom: var(--space-lg); left: var(--space-lg);
  background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading);
  font-weight: 800; font-size: 0.92rem; padding: var(--space-sm) var(--space-md); border-radius: 8px; z-index: 2;
}
.sp-expert-content h2 { font-family: var(--font-heading); font-size: clamp(1.6rem, 2.8vw, 2.3rem); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); line-height: 1.2; }
.answer-block { font-size: var(--fs-body); color: var(--color-text-light); line-height: 1.75; margin-bottom: var(--space-xl); }
.sp-expert-points { display: flex; flex-direction: column; gap: var(--space-lg); margin-top: var(--space-xl); }
.sp-expert-point { display: flex; gap: var(--space-lg); align-items: flex-start; }
.sp-expert-point .num { font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--color-accent); line-height: 1; min-width: 2.5rem; opacity: 0.7; }
.sp-expert-point div strong { display: block; font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 4px; }
.sp-expert-point div span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }
.sp-breakdown { padding: var(--space-4xl) 0; background: var(--color-bg); }
.sp-breakdown h2 { font-family: var(--font-heading); font-size: clamp(1.6rem, 2.6vw, 2.2rem); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); line-height: 1.2; }
.sp-includes-two-col { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3xl); align-items: start; }
.sp-includes-list { list-style: none; padding: 0; margin: var(--space-lg) 0 0; display: flex; flex-direction: column; gap: var(--space-sm); }
.sp-includes-list li { display: flex; align-items: center; gap: var(--space-sm); font-size: var(--fs-sm); color: var(--color-text); line-height: 1.5; }
.sp-includes-list li svg { color: var(--color-accent-dark); width: 17px; height: 17px; flex-shrink: 0; }
.sp-faq { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.sp-faq h2 { font-family: var(--font-heading); font-size: clamp(1.6rem, 2.8vw, 2.3rem); font-weight: 800; color: var(--color-primary); text-align: center; text-wrap: balance; margin-bottom: var(--space-md); }
.sp-faq-list { max-width: 760px; margin: var(--space-2xl) auto 0; display: flex; flex-direction: column; gap: var(--space-sm); }
.sp-faq-item { background: var(--color-bg); border: 1px solid var(--color-border); border-radius: 12px; overflow: hidden; transition: box-shadow var(--transition); }
.sp-faq-item:hover { box-shadow: var(--shadow); }
.sp-faq-question {
  width: 100%; background: none; border: none; cursor: pointer; padding: var(--space-lg) var(--space-xl);
  display: flex; justify-content: space-between; align-items: center; gap: var(--space-md);
  font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700; color: var(--color-primary); text-align: left; line-height: 1.4;
}
.sp-faq-question svg { width: 20px; height: 20px; flex-shrink: 0; color: var(--color-accent-dark); transition: transform var(--transition); }
.sp-faq-item.open .sp-faq-question svg { transform: rotate(45deg); }
.sp-faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.38s ease, padding 0.25s ease; font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.75; padding: 0 var(--space-xl); }
.sp-faq-item.open .sp-faq-answer { max-height: 500px; padding: 0 var(--space-xl) var(--space-lg); }
.sp-final-cta { padding: var(--space-4xl) 0; background: var(--color-bg); text-align: center; }
.sp-final-cta h2 { font-family: var(--font-heading); font-size: clamp(1.7rem, 3vw, 2.5rem); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); line-height: 1.2; }
.sp-final-cta p { font-size: var(--fs-body); color: var(--color-text-light); max-width: 58ch; margin: 0 auto var(--space-2xl); line-height: 1.75; }
.cta-row { display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center; }
.sp-related { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.sp-related h2 { font-family: var(--font-heading); font-size: clamp(1.5rem, 2.5vw, 2rem); font-weight: 800; color: var(--color-primary); text-align: center; text-wrap: balance; margin-bottom: var(--space-3xl); }
.services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-md); }
.service-card-with-image { border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; transition: transform var(--transition), box-shadow var(--transition); }
.service-card-with-image:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.service-card__image { position: relative; aspect-ratio: 5/3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.45s ease; }
.service-card-with-image:hover .service-card__image img { transform: scale(1.04); }
.service-card__body { padding: var(--space-lg) var(--space-md) var(--space-md); text-align: center; display: flex; flex-direction: column; align-items: center; gap: var(--space-sm); position: relative; flex: 1; }
.service-card__icon { width: 56px; height: 56px; border-radius: 50%; background: #fff; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin-top: -44px; margin-bottom: var(--space-xs); color: var(--color-accent-dark); flex-shrink: 0; }
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { font-family: var(--font-heading); color: var(--color-primary); margin: 0; font-size: 1.25rem; line-height: 1.2; }
.service-card-with-image ul { list-style: none; padding: 0; margin: var(--space-xs) 0 0; width: 100%; text-align: left; display: flex; flex-direction: column; gap: var(--space-xs); border-top: 1px solid var(--color-border); padding-top: var(--space-md); }
.service-card-with-image ul li { font-size: var(--fs-sm); color: var(--color-text); padding-left: 1.25rem; position: relative; }
.service-card-with-image ul li::before { content: "•"; color: var(--color-accent-dark); font-weight: 700; position: absolute; left: 0.25rem; }
.service-card__cta { margin-top: auto; padding: var(--space-sm) 0 0; color: var(--color-secondary); font-weight: 700; font-size: var(--fs-sm); border-top: 1px solid var(--color-border); width: 100%; text-align: center; transition: color var(--transition); }
.service-card__cta::after { content: " →"; }
.service-card__cta:hover { color: var(--color-primary); }
.card-tint-1 { background: var(--color-card-tint-1); }
.card-tint-2 { background: var(--color-card-tint-2); }
.card-tint-3 { background: var(--color-card-tint-3); }
.reveal-up    { opacity: 0; transform: translateY(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-left  { opacity: 0; transform: translateX(-28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-right { opacity: 0; transform: translateX(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-scale { opacity: 0; transform: scale(.93); transition: opacity .65s ease, transform .65s ease; }
.reveal-up.visible, .reveal-left.visible, .reveal-right.visible, .reveal-scale.visible { opacity: 1; transform: none; }
.reveal-delay-1 { transition-delay: .1s; }
.reveal-delay-2 { transition-delay: .2s; }
.reveal-delay-3 { transition-delay: .3s; }
.reveal-delay-4 { transition-delay: .4s; }
@media (max-width: 1100px) {
  .sp-hero-layout { grid-template-columns: 1fr; }
  .sp-hero-card { display: none; }
  .sp-expert-grid { grid-template-columns: 1fr; }
  .sp-expert-photo { max-width: 480px; margin: 0 auto; }
  .sp-includes-two-col { grid-template-columns: 1fr; }
  .sp-bento { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .sp-bento { grid-template-columns: 1fr; }
  .services-grid { grid-template-columns: 1fr 1fr; }
  .sp-hero-actions { flex-direction: column; }
}
@media (max-width: 480px) { .services-grid { grid-template-columns: 1fr; } }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ═══════════════════════════════════════
       1. HERO
  ═══════════════════════════════════════ -->
  <section class="sp-hero" aria-label="Gutter installation in Mount Vernon and Eastern Oregon">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('droplets'); ?> Gutter Installation</span>
            <h1>Gutters Installed Right<br><em>in Mount Vernon, OR</em></h1>
            <p class="hero-answer">Proper gutter systems direct snowmelt and rain away from foundations — critical in Eastern Oregon. Superior Home Builders installs gutters on residential and commercial buildings throughout Grant and Harney Counties, sized and routed for the spring runoff volumes this climate produces. Free estimates across both counties. Licensed CCB# <?php echo htmlspecialchars($licenseNumber); ?>.</p>
            <div class="sp-hero-trust">
              <span class="sp-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Licensed &amp; Insured &middot; CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
              <span class="sp-hero-trust-item"><?php echo lucide_icon('calendar'); ?> Est. <?php echo (int)$yearEstablished; ?></span>
              <span class="sp-hero-trust-item"><?php echo lucide_icon('file-text'); ?> Free Written Estimate</span>
            </div>
            <div class="sp-hero-actions">
              <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate</a>
              <?php if (!empty($phone)): ?>
              <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
              <?php endif; ?>
            </div>
          </div>
          <div class="sp-hero-card">
            <h3>Gutter services across Grant &amp; Harney Counties</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Residential &amp; commercial gutter installs</li>
              <li><?php echo lucide_icon('check-circle'); ?> Snowmelt &amp; rain management</li>
              <li><?php echo lucide_icon('check-circle'); ?> Downspout routing &amp; splash blocks</li>
              <li><?php echo lucide_icon('check-circle'); ?> Fascia &amp; soffit assessment included</li>
              <li><?php echo lucide_icon('check-circle'); ?> Free estimates across both counties</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Schedule a Gutter Assessment</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Gutters</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C360,56 1080,0 1440,28 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       2. BENTO
  ═══════════════════════════════════════ -->
  <section class="sp-problem" aria-label="Why gutters matter in Eastern Oregon climate">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "Eastern Oregon's March-to-May snowmelt window dumps months of accumulated roof load in a few weeks. A home without gutters in the John Day basin drains directly into the foundation — every single year."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('cloud-snow'); ?></div>
          <h3>Foundation protection from snowmelt</h3>
          <p>Snowmelt season in Grant County concentrates months of snow into weeks of runoff. Without gutters, this water flows off the eave, saturates soil against the foundation, and eventually infiltrates crawl spaces and basements. Gutters route this volume away from the structure to safe discharge points.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('wind'); ?></div>
          <h3>Eastern Oregon's wet spring runoff</h3>
          <p>The John Day River valley and surrounding terrain can receive 4–8 inches of rainfall in March and April on top of snowmelt. Homes on slopes or near grade changes are especially vulnerable. Downspout placement and extension routing determine whether water exits safely or works toward the foundation.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('shield'); ?></div>
          <h3>Fascia &amp; soffit damage prevention</h3>
          <p>Overflowing or missing gutters direct water over the fascia board repeatedly — it's the most common cause of fascia rot on Eastern Oregon homes. We assess the condition of your fascia and soffit before installing gutters and address any deterioration before it becomes a structural repair.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('building-2'); ?></div>
          <h3>Commercial gutter systems</h3>
          <p>Shops, warehouses, and agricultural structures in Grant County need appropriately sized gutter systems for their large roof areas. A 60x100 shop roof carries enormous runoff volume during a wet spring. We size commercial gutters to move that volume without overflow and without constant maintenance.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,10 C480,60 960,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       3. EXPERT SECTION
  ═══════════════════════════════════════ -->
  <section class="sp-expert" aria-label="Why Superior Home Builders for gutters in Eastern Oregon">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>"
               alt="Gutter installation on a home in Eastern Oregon by Superior Home Builders"
               width="420" height="525" loading="lazy">
          <div class="sp-expert-photo-badge">Serving Grant &amp; Harney Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do Mount Vernon homeowners trust Superior Home Builders for gutters near me in Eastern Oregon?</h2>
          <p class="answer-block">Gutter installation is not just about hanging a channel — it's about understanding where the water needs to go and how much of it will come off the roof in March and April in Eastern Oregon. We've been working on homes and buildings throughout Grant and Harney Counties since 2001. We assess drainage conditions, size the system correctly, and route downspouts where they actually solve the problem, not just where they're easy to install.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Eastern Oregon snowmelt is a foundation threat</strong>
                <span>We approach every gutter installation with spring snowmelt as the design condition — not a random rainstorm. That means calculating roof drainage area, selecting appropriate gutter size, and routing downspouts to discharge points that won't saturate the foundation zone or erode the yard.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Proper downspout routing matters</strong>
                <span>A downspout that terminates at the foundation wall defeats the purpose of gutters entirely. We route downspouts to discharge at least 6 feet from the structure and add extensions or underground drains where the grade requires it. Splash blocks are included on every residential installation.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>We assess fascia and soffit before installing</strong>
                <span>Rotten or damaged fascia cannot support gutters. Before any installation, we inspect the fascia board and soffit condition and address deterioration first. Installing gutters over damaged fascia is a waste of materials and a guarantee of callbacks — we don't do it.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light);margin-top:var(--space-lg)">Last Updated: <?php echo date('F Y'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,0 1080,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       4. INCLUDES LIST
  ═══════════════════════════════════════ -->
  <section class="sp-breakdown" aria-label="What is included in gutter installation in Mount Vernon OR">
    <div class="container">
      <div class="sp-includes-two-col">
        <div class="reveal-left">
          <h2>What's included in a gutter installation in Eastern Oregon?</h2>
          <p class="answer-block">Every gutter project by Superior Home Builders includes a thorough site assessment and complete installation — from removing old gutters to final flow testing. No partial scopes, no components left for another contractor.</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Existing gutter removal &amp; disposal</li>
            <li><?php echo lucide_icon('check'); ?> New gutter channel installation</li>
            <li><?php echo lucide_icon('check'); ?> End caps, connectors &amp; miters</li>
            <li><?php echo lucide_icon('check'); ?> Downspout installation</li>
            <li><?php echo lucide_icon('check'); ?> Downspout extensions &amp; splash blocks</li>
            <li><?php echo lucide_icon('check'); ?> Fascia inspection &amp; repair (if needed)</li>
            <li><?php echo lucide_icon('check'); ?> Hangers &amp; mounting hardware</li>
            <li><?php echo lucide_icon('check'); ?> Final flow testing</li>
          </ul>
        </div>
        <div class="reveal-right">
          <h2>Gutter options for homes &amp; buildings in Grant County</h2>
          <p class="answer-block">We select gutter type and size based on your roof drainage area, pitch, and the Eastern Oregon climate conditions specific to your property location:</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> 5-inch K-style gutters (most residential homes)</li>
            <li><?php echo lucide_icon('check'); ?> 6-inch K-style gutters (large roof planes, ranch-style homes)</li>
            <li><?php echo lucide_icon('check'); ?> Commercial box gutters (shops, warehouses, ag structures)</li>
            <li><?php echo lucide_icon('check'); ?> Aluminum (standard) and steel options</li>
            <li><?php echo lucide_icon('check'); ?> Round and rectangular downspout profiles</li>
            <li><?php echo lucide_icon('check'); ?> Underground downspout extensions where grade requires</li>
            <li><?php echo lucide_icon('check'); ?> Gutter replacement on mobile homes</li>
            <li><?php echo lucide_icon('check'); ?> Re-pitch and re-hang of existing sagging gutters</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,20 C720,56 1440,0 1440,0 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       5. FAQ
  ═══════════════════════════════════════ -->
  <section class="sp-faq" aria-label="Gutter FAQ for Mount Vernon OR and Eastern Oregon">
    <div class="container">
      <h2>Frequently asked questions about gutters near Mount Vernon, OR</h2>
      <p class="answer-block" style="text-align:center;max-width:58ch;margin:0 auto;">What Grant County homeowners and building owners ask most about gutter installation and drainage in Eastern Oregon.</p>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-gt-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-gt-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['a']); ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C720,0 1440,56 1440,56 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       6. FINAL CTA
  ═══════════════════════════════════════ -->
  <section class="sp-final-cta" aria-label="Get a free gutter estimate in Mount Vernon OR">
    <div class="container">
      <h2>Ready for proper gutters near Mount Vernon, OR?</h2>
      <p>Superior Home Builders has been protecting Eastern Oregon homes from water damage since 2001. We install gutter systems sized for the snowmelt conditions that challenge Grant County foundations every spring. Free estimates — no obligation, no pressure.</p>
      <div class="cta-row">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-secondary btn-lg"><?php echo lucide_icon('phone'); ?> Call Us Now</a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,0 C360,56 1080,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       7. RELATED SERVICES
  ═══════════════════════════════════════ -->
  <section class="sp-related" aria-label="Other exterior services in Eastern Oregon">
    <div class="container">
      <h2>Other Services You May Need</h2>
      <div class="services-grid">
        <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604305411-iws3zu-467311955_10160913944502734_1381678653232378695_n.jpg"
                 alt="Metal roofing installation in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('hard-hat'); ?></div>
            <h3>Roofing</h3>
            <ul>
              <li>Metal roofing systems</li>
              <li>Mobile home roof-overs</li>
              <li>Permits handled in-house</li>
            </ul>
            <a href="/services/roofing/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=600&q=80"
                 alt="Siding installation on a home in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('layers'); ?></div>
            <h3>Siding</h3>
            <ul>
              <li>Hardie Board &amp; T1-11</li>
              <li>Mobile home skirting</li>
              <li>Full moisture barrier system</li>
            </ul>
            <a href="/services/siding/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604157610-hamrrh-image_8_.jpg"
                 alt="Storm damage repair in Grant County Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('shield-check'); ?></div>
            <h3>Storm Damage Repair</h3>
            <ul>
              <li>Wind &amp; hail damage</li>
              <li>Emergency repairs available</li>
              <li>Insurance documentation help</li>
            </ul>
            <a href="/services/storm-damage-repair/" class="service-card__cta">Learn more</a>
          </div>
        </article>
      </div>
    </div>
  </section>

<script>
document.querySelectorAll('.sp-faq-question').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var item = btn.closest('.sp-faq-item');
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.sp-faq-item.open').forEach(function(i) {
      i.classList.remove('open');
      i.querySelector('.sp-faq-question').setAttribute('aria-expanded', 'false');
    });
    if (!isOpen) {
      item.classList.add('open');
      btn.setAttribute('aria-expanded', 'true');
    }
  });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
