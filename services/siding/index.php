<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Siding Installation in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Hardie Board, T1-11, log siding, metal siding & mobile home skirting across Eastern Oregon. Engineered for UV, freeze-thaw & high desert conditions. Licensed CCB# 147123. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/siding/';
$currentPage      = 'services';
$heroImageUrl     = 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=1200&q=80';
$heroImagePreload = $heroImageUrl;
$ogImage          = $heroImageUrl;

$faqs = [
  ['q' => 'What siding holds up best in Eastern Oregon\'s climate?',
   'a' => 'For residential homes, Hardie Board (fiber cement siding) is our first recommendation for Eastern Oregon. It resists the UV degradation that destroys vinyl and wood siding faster at altitude, handles freeze-thaw without absorbing moisture, and holds paint for 15+ years. T1-11 is appropriate for agricultural buildings, shops, and lower-cost residential builds — it\'s economical, repairs easily, and looks right on rural Eastern Oregon properties. Log siding is chosen for aesthetic fit — it performs well when properly sealed but requires more maintenance than fiber cement.'],
  ['q' => 'Do you install Hardie siding on older homes in Grant County?',
   'a' => 'Yes. Replacing older wood or vinyl siding with Hardie Board is one of our most common exterior projects in Mount Vernon, John Day, and surrounding communities. On older homes, the siding replacement often uncovers moisture damage behind the existing panels — we assess and repair substrate damage before the new siding goes on. We handle the full scope: removal, moisture barrier, flashing at windows and penetrations, siding installation, and trim.'],
  ['q' => 'Can you install mobile home skirting in Eastern Oregon?',
   'a' => 'Yes — mobile home skirting is part of our regular work across Grant and Harney Counties. Proper skirting keeps rodents and moisture out from under mobile homes, reduces heat loss in winter, and is required for most mobile home park installations. We install vinyl skirting panels with proper venting and access panels. For mobile homes being insulated or renovated more extensively, we can coordinate skirting with other work as part of a larger project.'],
  ['q' => 'What is T1-11 siding and when is it appropriate?',
   'a' => 'T1-11 is a grooved plywood panel product commonly used on agricultural buildings, shops, storage structures, and rural residential construction. It\'s appropriate when you want a solid wood-based panel at a lower cost than fiber cement, and when the look fits the use — it\'s most common on outbuildings, barns, and rural ranch homes in Eastern Oregon. T1-11 needs to be painted and maintained to prevent moisture infiltration, particularly at the bottom edge near grade.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',     'url' => $siteUrl . '/'],
  ['name' => 'Services', 'url' => $siteUrl . '/services/'],
  ['name' => 'Siding',   'url' => $siteUrl . '/services/siding/'],
]);
$serviceSchema = [
  '@context'    => 'https://schema.org',
  '@type'       => 'Service',
  '@id'         => $siteUrl . '/services/siding/#service',
  'name'        => 'Siding Installation',
  'url'         => $siteUrl . '/services/siding/',
  'provider'    => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Eastern Oregon', 'addressRegion' => 'OR'],
  'description' => 'Hardie Board fiber cement, T1-11, log siding, metal siding, and mobile home skirting installation across Grant and Harney Counties. Engineered for Eastern Oregon\'s UV exposure, freeze-thaw cycles, and high-desert climate conditions. Licensed CCB# 147123.',
];
$faqSchema    = generateFAQSchema($faqs);
$schemaGraph  = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ── Siding Service Page ─────────────────────────────────────────────────── */
.sp-hero {
  position: relative;
  min-height: 68vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImageUrl; ?>');
  background-size: cover;
  background-position: center 30%;
  padding-top: var(--nav-height);
}
.sp-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(110deg, rgba(var(--color-primary-rgb), 0.93) 0%, rgba(var(--color-secondary-rgb), 0.78) 50%, rgba(var(--color-primary-rgb), 0.50) 100%);
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
  <section class="sp-hero" aria-label="Siding installation in Mount Vernon and Eastern Oregon">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('layers'); ?> Siding Contractor</span>
            <h1>Siding Built for<br><em>Eastern Oregon</em></h1>
            <p class="hero-answer">Hardie Board, T1-11, log siding, metal siding, and mobile home skirting across Grant and Harney Counties. Eastern Oregon's high-altitude UV exposure, hard freeze-thaw cycles, and high-desert conditions demand siding chosen and installed for this specific climate — not a generic Pacific Northwest specification. Superior Home Builders has been siding homes and buildings here since 2001. Licensed CCB# <?php echo htmlspecialchars($licenseNumber); ?>.</p>
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
            <h3>Siding options across Grant &amp; Harney Counties</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Hardie Board (fiber cement) siding</li>
              <li><?php echo lucide_icon('check-circle'); ?> T1-11 &amp; log siding options</li>
              <li><?php echo lucide_icon('check-circle'); ?> Metal siding for barns &amp; commercial</li>
              <li><?php echo lucide_icon('check-circle'); ?> Mobile home skirting installation</li>
              <li><?php echo lucide_icon('check-circle'); ?> Licensed contractor CCB# <?php echo htmlspecialchars($licenseNumber); ?></li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Discuss Your Siding Project</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Siding</span>
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
  <section class="sp-problem" aria-label="Siding types and climate considerations for Eastern Oregon">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "Vinyl siding that holds up fine in the Willamette Valley fails early in Eastern Oregon's high-UV, hard freeze-thaw environment. Material choice and installation quality determine how long the exterior actually lasts."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('sun'); ?></div>
          <h3>Hardie Board performance in Eastern OR climate</h3>
          <p>Fiber cement siding resists the UV degradation that destroys vinyl and degrades wood at Eastern Oregon's elevations. Hardie Board holds its factory or field-applied paint for 15+ years in Grant County's high-desert sun, doesn't absorb moisture during freeze-thaw cycles, and doesn't crack or warp under temperature extremes. It's the most durable residential siding option in this climate.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('layers'); ?></div>
          <h3>T1-11 for agricultural &amp; rural builds</h3>
          <p>T1-11 plywood panels are the standard siding product on agricultural buildings, shops, and rural residential construction throughout Eastern Oregon. They're economical, repair easily, and look appropriate on outbuildings and ranch homes. T1-11 requires proper painting and maintenance to perform — we seal the bottom edge and all penetrations correctly at installation.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('tree-pine'); ?></div>
          <h3>Log siding for authentic mountain look</h3>
          <p>Log siding — half-log profile cedar or pine — delivers a genuine timber look on ranch homes, cabins, and custom builds in Eastern Oregon. It performs well when properly sealed and stained, and fits the architectural character of Grant County's rural landscape. It requires more maintenance than fiber cement but is a legitimate long-term choice for the right application.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('home'); ?></div>
          <h3>Mobile home skirting benefits</h3>
          <p>Skirting on mobile homes in Grant and Harney Counties reduces heat loss from uninsulated crawl spaces in Eastern Oregon winters, prevents rodent intrusion under the structure, manages ground moisture, and is required at most mobile home parks. Properly installed skirting with ventilation and access panels extends the comfort and lifespan of the home significantly.</p>
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
  <section class="sp-expert" aria-label="Why Superior Home Builders for siding in Eastern Oregon">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>"
               alt="Siding installation on a home in Grant County Eastern Oregon by Superior Home Builders"
               width="420" height="525" loading="lazy">
          <div class="sp-expert-photo-badge">Siding Eastern OR Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do Mount Vernon homeowners choose Superior Home Builders for siding near me in Eastern Oregon?</h2>
          <p class="answer-block">Siding fails in Eastern Oregon for predictable reasons — wrong material for the climate, inadequate moisture barrier behind the panels, poor flashing at windows and penetrations, or cutting corners on the bottom edge at grade. We've been replacing siding throughout Grant and Harney Counties since 2001 and we see the same failure modes repeatedly. We install siding correctly the first time, with the moisture management details that determine whether it lasts 10 years or 30.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Eastern Oregon UV destroys cheap siding faster</strong>
                <span>High-altitude UV at Eastern Oregon elevations degrades vinyl siding, unpainted wood, and low-grade composites significantly faster than coastal or valley climates. We recommend materials appropriate to this UV exposure — Hardie Board for residential, T1-11 or metal for agricultural — not whatever is cheapest at the lumber yard.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>We match siding to structure and purpose</strong>
                <span>The right siding for a ranch home in the John Day basin is not the same as the right siding for a livestock barn or a commercial shop. We match material, profile, and finish to the building type, budget, and expected maintenance commitment — then install it correctly for that application.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Proper installation is everything — flashing, moisture barrier, trim</strong>
                <span>Most siding failures in Eastern Oregon originate at window flashing, penetration seals, and bottom-edge moisture intrusion — not in the panel itself. We install housewrap, flash every opening correctly, and seal all penetrations before any panel goes on. On older homes, we assess substrate damage before the new siding is installed.</span>
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
  <section class="sp-breakdown" aria-label="What is included in siding installation in Mount Vernon OR">
    <div class="container">
      <div class="sp-includes-two-col">
        <div class="reveal-left">
          <h2>What's included in a siding project in Eastern Oregon?</h2>
          <p class="answer-block">Every siding installation by Superior Home Builders covers the full exterior scope — from removal of the old material to paint and trim finish. We don't leave moisture management details to guesswork or another contractor.</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Existing siding removal &amp; disposal</li>
            <li><?php echo lucide_icon('check'); ?> Moisture barrier &amp; housewrap installation</li>
            <li><?php echo lucide_icon('check'); ?> Corner boards &amp; J-channel</li>
            <li><?php echo lucide_icon('check'); ?> Hardie or T1-11 panel installation</li>
            <li><?php echo lucide_icon('check'); ?> Window &amp; door trim wrap</li>
            <li><?php echo lucide_icon('check'); ?> Caulking &amp; sealing at penetrations</li>
            <li><?php echo lucide_icon('check'); ?> Painting (Hardie prefinished or field-painted)</li>
            <li><?php echo lucide_icon('check'); ?> Mobile home skirting panels &amp; vents</li>
          </ul>
        </div>
        <div class="reveal-right">
          <h2>Siding types we install across Grant &amp; Harney Counties</h2>
          <p class="answer-block">We install the siding products that perform in Eastern Oregon's specific climate and suit the structure type. These are the most common options:</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Hardie Board lap siding (residential homes)</li>
            <li><?php echo lucide_icon('check'); ?> Hardie Panel vertical siding</li>
            <li><?php echo lucide_icon('check'); ?> T1-11 plywood panels (ag buildings, shops)</li>
            <li><?php echo lucide_icon('check'); ?> Half-log cedar siding (cabins, custom homes)</li>
            <li><?php echo lucide_icon('check'); ?> Corrugated metal siding (commercial, agricultural)</li>
            <li><?php echo lucide_icon('check'); ?> Vinyl skirting for mobile homes</li>
            <li><?php echo lucide_icon('check'); ?> Substrate repair &amp; moisture remediation</li>
            <li><?php echo lucide_icon('check'); ?> Full exterior repaints (Hardie or wood)</li>
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
  <section class="sp-faq" aria-label="Siding FAQ for Mount Vernon OR and Eastern Oregon">
    <div class="container">
      <h2>Frequently asked questions about siding near Mount Vernon, OR</h2>
      <p class="answer-block" style="text-align:center;max-width:58ch;margin:0 auto;">What Grant and Harney County homeowners ask most about siding choices, installation, and mobile home skirting in Eastern Oregon.</p>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-sd-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-sd-<?php echo $i; ?>">
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
  <section class="sp-final-cta" aria-label="Get a free siding estimate in Mount Vernon OR">
    <div class="container">
      <h2>Ready to replace or install siding near Mount Vernon, OR?</h2>
      <p>Superior Home Builders has been siding homes and buildings across Grant and Harney Counties since 2001. We select materials for Eastern Oregon's climate and install them with the moisture management details that determine how long the exterior lasts. Free estimates — no obligation, no pressure.</p>
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
                 alt="Metal roofing in Eastern Oregon by Superior Home Builders"
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
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604110512-hpeyxa-20230904_195415.jpg"
                 alt="Gutter installation in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('droplets'); ?></div>
            <h3>Gutters</h3>
            <ul>
              <li>Sized for Eastern OR snowmelt</li>
              <li>Residential &amp; commercial</li>
              <li>Fascia assessment included</li>
            </ul>
            <a href="/services/gutters/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604157333-7yq7b6-image_7_.jpg"
                 alt="Exterior painting in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('paintbrush'); ?></div>
            <h3>Painting</h3>
            <ul>
              <li>Exterior &amp; interior painting</li>
              <li>Hardie &amp; wood siding finishes</li>
              <li>Residential &amp; commercial</li>
            </ul>
            <a href="/services/painting/" class="service-card__cta">Learn more</a>
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
