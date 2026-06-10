<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Custom Home Builders Serving Salem, OR | Superior Home Builders';
$pageDescription = 'Superior Home Builders takes select custom home builds and major remodeling projects in Salem, OR. Eastern Oregon craftsmanship for Willamette Valley clients. Licensed Oregon contractor. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/salem/';
$currentPage     = 'service-area';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604111859-dai6kd-20230910_202910.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',          'url' => $siteUrl . '/'],
  ['name' => 'Service Areas', 'url' => $siteUrl . '/service-area/'],
  ['name' => 'Salem',         'url' => $siteUrl . '/areas/salem/'],
]);

$localBusiness = [
  '@context' => 'https://schema.org',
  '@type'    => 'HomeAndConstructionBusiness',
  '@id'      => $siteUrl . '/areas/salem/#local',
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
    'name'          => 'Salem',
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
    'q' => 'Does Superior Home Builders take projects in the Salem, Oregon area?',
    'a' => 'Superior Home Builders takes select projects in the Salem, OR metro area — primarily custom home builds and major whole-home renovations for clients who specifically want our Eastern Oregon craftsmanship and project management approach. We\'re selective about Salem projects because of the distance from our Mount Vernon base, but for the right scope we are absolutely available. Contact us to discuss your project.',
  ],
  [
    'q' => 'How does building in Salem, OR differ from Eastern Oregon construction?',
    'a' => 'Salem\'s Willamette Valley climate is fundamentally different from Eastern Oregon — higher rainfall, milder temperatures, and less extreme seasonal variation. Foundation and moisture management details change accordingly. Permit processes in Salem run through the City of Salem Building Services for properties within city limits. We are familiar with the differences and adjust our specs to match the local climate and code requirements of any project location.',
  ],
  [
    'q' => 'What types of Salem projects would Superior Home Builders consider?',
    'a' => 'We\'re best suited for Salem clients who want a full custom home build, a comprehensive whole-home renovation, or a large-scale addition project — scopes where our design-to-build project management approach creates real value. We are not a fit for smaller cosmetic remodels in Salem where a local Willamette Valley contractor would be more economical. Reach out and describe your project — we\'ll be straightforward about whether we\'re the right fit.',
  ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   SALEM SERVICE AREA — Superior Home Builders
   Premium page styles | var() tokens only
   Techniques: layered hero (::before + ::after), floating accent,
   asymmetric intro with dark stats panel, bento local context,
   services grid, compare panel, FAQ accordion, SVG dividers,
   multi-direction reveals, text-accent signature emphasis
   ════════════════════════════════════════════════════════════════════ */

.area-hero {
  position: relative; min-height: 68vh; display: flex; align-items: center;
  background-image: url('<?php echo $heroImage; ?>');
  background-size: cover; background-position: center 55%;
  padding-top: var(--nav-height); overflow: hidden;
}
.area-hero::before {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(140deg,
    rgba(var(--color-primary-rgb),0.96) 0%,
    rgba(var(--color-secondary-rgb),0.83) 50%,
    rgba(var(--color-primary-rgb),0.50) 100%);
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

/* ── INTRO SPLIT ────────────────────────────────────────────── */
.area-intro { padding: var(--space-4xl) 0; background: var(--color-bg); }
.area-intro-grid { display: grid; grid-template-columns: 1fr 360px; gap: var(--space-4xl); align-items: start; }
.area-intro-content h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); }
.area-intro-content p.answer-block { font-size: var(--fs-body); color: var(--color-text); line-height: 1.75; max-width: 65ch; margin-bottom: var(--space-lg); }
.area-identity { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.7; padding: var(--space-md) var(--space-lg); border-left: 3px solid var(--color-accent); background: var(--color-card-tint-1); border-radius: 0 var(--radius) var(--radius) 0; margin-bottom: var(--space-xl); }
.area-scope-card {
  background: var(--color-primary); border-radius: var(--radius-lg);
  padding: var(--space-2xl); color: #fff; position: relative; overflow: hidden;
}
.area-scope-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at 85% 15%, rgba(var(--color-accent-rgb),0.12) 0%, transparent 65%); }
.area-scope-card h3 { font-family: var(--font-heading); font-size: 1.25rem; font-weight: 700; color: #fff; margin-bottom: var(--space-xl); position: relative; }
.area-scope-list { list-style: none; padding: 0; margin: 0 0 var(--space-xl); position: relative; display: flex; flex-direction: column; gap: var(--space-md); }
.area-scope-list li { display: flex; gap: var(--space-sm); align-items: flex-start; }
.area-scope-list li svg { color: var(--color-accent); flex-shrink: 0; margin-top: 2px; }
.area-scope-list li strong { display: block; font-size: var(--fs-sm); color: #fff; margin-bottom: 1px; }
.area-scope-list li span { font-size: var(--fs-xs); color: rgba(255,255,255,0.60); line-height: 1.5; display: block; }

/* ── WHAT WE BRING ──────────────────────────────────────────── */
.area-value { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.area-value-grid { display: grid; grid-template-columns: 420px 1fr; gap: var(--space-4xl); align-items: center; }
.area-value-photo { position: relative; border-radius: var(--radius-lg); overflow: hidden; aspect-ratio: 4/5; box-shadow: var(--shadow-lg); }
.area-value-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
.area-value-photo::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg,transparent 60%,rgba(var(--color-primary-rgb),0.55) 100%); }
.area-value-badge { position: absolute; bottom: var(--space-lg); left: var(--space-lg); right: var(--space-lg); background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading); font-size: 0.9rem; font-weight: 800; padding: var(--space-sm) var(--space-md); border-radius: var(--radius); z-index: 2; text-align: center; }
.area-value-content h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-lg); }
.area-value-content p { font-size: var(--fs-body); color: var(--color-text); line-height: 1.75; max-width: 65ch; margin-bottom: var(--space-xl); }
.area-value-points { display: flex; flex-direction: column; gap: var(--space-lg); margin-bottom: var(--space-xl); }
.area-value-point { display: flex; gap: var(--space-md); align-items: flex-start; }
.area-value-point .icon-wrap { width: 44px; height: 44px; border-radius: var(--radius); background: var(--color-card-tint-1); border: 1px solid rgba(var(--color-primary-rgb),0.08); display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--color-secondary); }
.area-value-point div strong { display: block; font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 2px; }
.area-value-point div span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }

/* ── BENTO ──────────────────────────────────────────────────── */
.area-locals { padding: var(--space-4xl) 0; background: var(--color-bg); }
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
.area-services { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
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
@media (max-width:1100px) { .area-intro-grid,.area-value-grid { grid-template-columns: 1fr; } .area-value-photo { aspect-ratio: 16/9; } }
@media (max-width:768px) { .area-bento { grid-template-columns: 1fr 1fr; } .area-hero-actions { flex-direction: column; } }
@media (max-width:480px) { .area-bento { grid-template-columns: 1fr; } }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="area-hero" aria-label="Salem service area">
  <div class="area-hero-inner">
    <div class="container">
      <span class="area-hero-eyebrow"><?php echo lucide_icon('map-pin'); ?> Salem, OR · Willamette Valley</span>
      <h1>Custom Home Builders Serving<br><em>Salem, OR</em></h1>
      <p class="area-hero-answer">Superior Home Builders is a licensed Oregon general contractor based in Mount Vernon that takes select custom home builds and major remodeling projects in the Salem metro area. Clients in South Salem, West Salem, and the surrounding Willamette Valley who want the craftsmanship and project management discipline of an experienced Eastern Oregon contractor — without the high-volume production approach of large Salem builders — find in us exactly that.</p>
      <div class="area-hero-trust">
        <span class="area-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Oregon Licensed</span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('calendar'); ?> Est. 2004</span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('file-text'); ?> Free Estimate</span>
      </div>
      <div class="area-hero-actions">
        <a href="/contact/" class="btn btn-secondary btn-lg">Discuss Your Salem Project</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
        <?php endif; ?>
      </div>
      <nav class="area-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">›</span>
        <a href="/service-area/">Service Areas</a><span class="sep">›</span>
        <span aria-current="page">Salem</span>
      </nav>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-primary)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 C360,56 1080,0 1440,28 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- INTRO -->
<section class="area-intro" aria-label="Superior Home Builders in Salem, OR">
  <div class="container">
    <div class="area-intro-grid">
      <div class="reveal-left">
        <h2>Why would a Salem homeowner hire a contractor based in Eastern Oregon?</h2>
        <p class="answer-block">That's a fair question, and here's the honest answer: Superior Home Builders is selective about Salem projects precisely because of the distance. We take Salem engagements when the scope justifies the commitment — custom home builds, comprehensive whole-home renovations, or large additions where our project management depth and construction quality genuinely differentiate us from a high-volume local builder. Salem clients who've found us through Grant County connections, word-of-mouth, or a targeted search for a custom home builder in Oregon value the personalized approach of a smaller, experienced firm over the production-line alternatives.</p>
        <p class="area-identity">Superior Home Builders is a licensed Oregon general contractor based in Mount Vernon, OR, serving Salem and select Willamette Valley clients with custom home construction and major remodeling since 2004. Oregon CCB License on file.</p>
        <a href="/contact/" class="btn btn-primary">Tell Us About Your Project</a>
      </div>
      <div class="area-scope-card reveal-scale">
        <h3><?php echo lucide_icon('check-square', '', 'width:18px;height:18px;vertical-align:middle;margin-right:6px'); ?> What we take in Salem</h3>
        <ul class="area-scope-list">
          <li>
            <?php echo lucide_icon('check-circle', '', 'width:16px;height:16px'); ?>
            <div><strong>Custom home builds</strong><span>Full design-to-build for clients who want genuine craftsmanship over production-home quality.</span></div>
          </li>
          <li>
            <?php echo lucide_icon('check-circle', '', 'width:16px;height:16px'); ?>
            <div><strong>Whole-home renovations</strong><span>Comprehensive projects — kitchens, bathrooms, additions, and structural changes as a single managed scope.</span></div>
          </li>
          <li>
            <?php echo lucide_icon('check-circle', '', 'width:16px;height:16px'); ?>
            <div><strong>Large-scale additions</strong><span>Room additions, second-story builds, detached structures, and ADUs where our experience adds real value.</span></div>
          </li>
          <li>
            <?php echo lucide_icon('x-circle', '', 'width:16px;height:16px;color:rgba(255,255,255,0.35)'); ?>
            <div><strong style="color:rgba(255,255,255,0.55)">Small cosmetic remodels</strong><span style="color:rgba(255,255,255,0.40)">For minor scope, a local Salem contractor is more economical. We'll tell you honestly if that's you.</span></div>
          </li>
        </ul>
        <a href="/contact/" class="btn btn-secondary w-full">Discuss Availability</a>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,10 C720,56 720,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- WHAT WE BRING -->
<section class="area-value" aria-label="What Superior Home Builders brings to Salem projects">
  <div class="container">
    <div class="area-value-grid">
      <div class="reveal-scale">
        <div class="area-value-photo">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604272736-wpmbnz-468453996_10161079313307734_5962081137845027174_n.jpg"
               alt="Custom home construction project by Superior Home Builders Oregon"
               width="420" height="525" loading="lazy">
          <div class="area-value-badge">Eastern Oregon Craftsmanship</div>
        </div>
      </div>
      <div class="reveal-right">
        <h2>What does Superior Home Builders bring to a custom home or renovation project in Salem?</h2>
        <p>The production-home industry in the Willamette Valley prioritizes throughput — getting a house to completion on a compressed schedule using standardized crews and materials. That model works for buyers who want a known product. For Salem clients who want a home that's genuinely custom — built to their specifications, managed by people who care about the outcome, and delivered with a level of craftsmanship that shows in 20 years — that's where we fit.</p>
        <div class="area-value-points">
          <div class="area-value-point">
            <div class="icon-wrap"><?php echo lucide_icon('layers', '', 'width:20px;height:20px'); ?></div>
            <div>
              <strong>Single-crew project management</strong>
              <span>Every project we take is managed by us — not dispatched to a network of subs who've never met each other. That means tighter sequencing, fewer handoff errors, and a consistent standard from framing to finish.</span>
            </div>
          </div>
          <div class="area-value-point">
            <div class="icon-wrap"><?php echo lucide_icon('file-text', '', 'width:20px;height:20px'); ?></div>
            <div>
              <strong>Written, locked-scope estimates</strong>
              <span>You know the full cost before we start. We assess the project, write an itemized estimate, and that estimate holds — not a verbal ballpark that evolves into change orders on week three.</span>
            </div>
          </div>
          <div class="area-value-point">
            <div class="icon-wrap"><?php echo lucide_icon('award', '', 'width:20px;height:20px'); ?></div>
            <div>
              <strong>20+ years of quality-first construction</strong>
              <span>We've built and remodeled throughout Oregon for over 20 years with a reputation that depends on every individual project — not on volume or marketing. That accountability translates directly into how we approach Salem work.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C480,0 960,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- BENTO: SALEM LOCAL CONTEXT -->
<section class="area-locals" aria-label="Salem construction context">
  <div class="container">
    <div class="area-locals-header reveal-up">
      <h2>What does Superior Home Builders adapt for Willamette Valley projects in Salem?</h2>
      <p>Salem's building environment differs from Eastern Oregon in climate, code, and permit process. We adjust our approach for every project location.</p>
    </div>
    <div class="area-bento">
      <div class="area-bento-card reveal-up reveal-delay-1">
        <div class="icon-wrap"><?php echo lucide_icon('cloud-rain'); ?></div>
        <h3>Willamette Valley climate specs</h3>
        <p>Salem's wet winters and mild temperatures create different moisture management challenges than Eastern Oregon. Exterior assemblies, crawl space vapor barriers, deck flashing, and window installation all need to account for the valley's higher rainfall and sustained humidity — specifications we adjust for each project's location.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-2">
        <div class="icon-wrap"><?php echo lucide_icon('landmark'); ?></div>
        <h3>City of Salem Building Services</h3>
        <p>Projects within Salem city limits permit through City of Salem Building Services. The City of Salem has its own review timelines, inspector schedules, and documentation requirements. We navigate this process on your behalf and adjust our project schedule to match Salem's inspection rhythm.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-3">
        <div class="icon-wrap"><?php echo lucide_icon('home'); ?></div>
        <h3>Salem's custom home market</h3>
        <p>Salem has a range of residential submarkets — from South Salem Hills custom lots to West Salem across the Willamette to the Morningside and Fairmount Hill areas. Each neighborhood has its own aesthetic context and setback realities. We take time to understand the lot and its context before writing a spec for any custom build.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-4">
        <div class="icon-wrap"><?php echo lucide_icon('users'); ?></div>
        <h3>Right-fit clients only</h3>
        <p>We're direct about project fit. If your Salem project is a $20,000 bathroom refresh, there are excellent local contractors who will serve you better. If you're planning a custom home, a major addition, or a whole-home renovation and want a contractor who treats your project as if it's the most important one they have — that's us. Reach out and we'll tell you quickly whether we're the right fit.</p>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 C360,56 1080,0 1440,35 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- SERVICES -->
<section class="area-services" aria-label="Services available in Salem, OR">
  <div class="container">
    <h2 class="reveal-up">Services Superior Home Builders offers in <span class="text-accent">Salem, OR</span></h2>
    <div class="services-grid">
      <?php
      $serviceData = [
        ['slug'=>'custom-home-building','icon'=>'home','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg','bullets'=>['Full design-to-build scope','Willamette Valley climate specs','Oregon licensed &amp; permitted']],
        ['slug'=>'general-remodeling','icon'=>'wrench','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg','bullets'=>['Whole-home renovations','Additions &amp; second stories','Single managed scope']],
        ['slug'=>'kitchen-remodeling','icon'=>'utensils','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604145059-2lrm2s-image_1_.jpg','bullets'=>['Custom cabinets &amp; countertops','Layout changes &amp; wall removal','Full permit management']],
        ['slug'=>'bathroom-remodeling','icon'=>'bath','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604143637-sycb6k-image.jpg','bullets'=>['Walk-in shower conversions','Vanity &amp; tile upgrades','Plumbing rough-in included']],
        ['slug'=>'framing','icon'=>'hammer','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604097152-jcl4h7-20220724_152509.jpg','bullets'=>['Custom home framing','Additions &amp; ADUs','Structural repairs']],
        ['slug'=>'commercial-construction','icon'=>'building-2','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604271465-dqvg3l-468352707_10161044504572734_7925629043452829949_n.jpg','bullets'=>['Commercial builds &amp; remodels','Office &amp; retail construction','City of Salem permitted']],
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
               alt="<?php echo htmlspecialchars($svc['name']); ?> in Salem, OR by Superior Home Builders"
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
    <path d="M0,35 C720,0 720,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- FAQ -->
<section class="area-faq" aria-label="Salem construction FAQ">
  <div class="container">
    <h2 class="reveal-up">Questions about hiring Superior Home Builders for a project in Salem, OR</h2>
    <p class="answer-block reveal-up reveal-delay-1">Honest answers for Willamette Valley clients considering Superior Home Builders for custom home builds and major renovations in Salem and the surrounding area.</p>
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
<section class="area-final-cta" aria-label="Discuss your Salem project">
  <div class="container reveal-up">
    <h2>Interested in working with Superior Home Builders on your Salem project?</h2>
    <p>Tell us what you're building or renovating in the Salem area — we'll give you a straightforward answer about whether we're the right fit and what a project like yours typically involves. No obligation, no pressure.</p>
    <div class="cta-row">
      <a href="/contact/" class="btn btn-secondary btn-lg">Start the Conversation</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
      <?php endif; ?>
    </div>
    <p style="margin-top:var(--space-xl);font-size:var(--fs-sm);color:rgba(255,255,255,0.50)">Last Updated: <?php echo date('F Y'); ?></p>
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
