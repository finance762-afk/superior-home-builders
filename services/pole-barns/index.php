<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Pole Barns & Agricultural Buildings in Eastern Oregon | Superior Home Builders';
$pageDescription  = 'Pole barns, horse barns, hay sheds, barndominiums & RV storage garages across Grant & Harney Counties. Licensed CCB# 147123. Built for Eastern Oregon ranching since 2001. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/pole-barns/';
$currentPage      = 'services';
$heroImageUrl     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604089870-onrdei-20220414_073700.jpg';
$heroImagePreload = $heroImageUrl;
$ogImage          = $heroImageUrl;

$faqs = [
  ['q' => 'How much does a pole barn cost in Eastern Oregon?',
   'a' => 'Basic 30x40 open storage pole barns in Grant County start around $25,000–$45,000. Horse barns with stalls run $45,000–$100,000+ depending on stall count, tack room size, and finish level. Barndominiums — combined living and shop/barn structures — start around $100,000–$200,000 for the structure, depending on size and finish. Every project gets a written estimate after a site visit.'],
  ['q' => 'Can you build a barndominium in Grant County, OR?',
   'a' => 'Yes. Barndominiums are a growing choice in Eastern Oregon — they combine a shop, garage, or barn with living quarters under one roof and permit as a residential structure. Grant County\'s building department handles these as standard residential permits. We design the structure, pull the permit, and build it as a complete project.'],
  ['q' => 'What size pole barn do most Eastern Oregon ranches need?',
   'a' => 'A 40x60 is the most common size for multipurpose storage and equipment — big enough for a hay stack and two pieces of equipment side by side. Horse barns are typically sized per stall: plan for 14x14 per stall minimum, with a 12-foot center aisle. RV barns for Class A coaches need to be at least 16 feet wide and 14 feet tall at the door opening. We can help you think through the sizing for your operation before writing an estimate.'],
  ['q' => 'Do you build RV storage garages in Eastern Oregon?',
   'a' => 'Yes. RV storage garages are a regular project for us throughout Grant and Harney Counties. A fully enclosed RV garage for a Class A motorhome typically runs 16x40 or 18x45, with a 14-foot door opening and 15-foot interior clearance. We build them as standalone structures with concrete floors, overhead doors, and optional electrical.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',                                'url' => $siteUrl . '/'],
  ['name' => 'Services',                            'url' => $siteUrl . '/services/'],
  ['name' => 'Pole Barns & Agricultural Buildings', 'url' => $siteUrl . '/services/pole-barns/'],
]);
$serviceSchema = [
  '@context'    => 'https://schema.org',
  '@type'       => 'Service',
  '@id'         => $siteUrl . '/services/pole-barns/#service',
  'name'        => 'Pole Barns & Agricultural Buildings',
  'url'         => $siteUrl . '/services/pole-barns/',
  'provider'    => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Eastern Oregon', 'addressRegion' => 'OR'],
  'description' => 'Pole barns, horse barns, hay sheds, barndominiums, and RV storage garages built across Grant and Harney Counties. Engineered for Eastern Oregon wind and snow loads. Licensed CCB# 147123, serving Eastern Oregon ranchers since 2001.',
];
$faqSchema    = generateFAQSchema($faqs);
$schemaGraph  = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ── Pole Barns Service Page ─────────────────────────────────────────────── */
.sp-hero {
  position: relative;
  min-height: 68vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImageUrl; ?>');
  background-size: cover;
  background-position: center 35%;
  padding-top: var(--nav-height);
}
.sp-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(115deg, rgba(var(--color-primary-rgb), 0.93) 0%, rgba(var(--color-secondary-rgb), 0.76) 52%, rgba(var(--color-primary-rgb), 0.50) 100%);
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
  <section class="sp-hero" aria-label="Pole barns and agricultural buildings in Eastern Oregon">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('warehouse'); ?> Agricultural Contractor</span>
            <h1>Pole Barns &amp; Ag Buildings<br><em>Built for Eastern Oregon</em></h1>
            <p class="hero-answer">Superior Home Builders constructs pole barns, horse barns, hay sheds, barndominiums, and RV storage garages across Grant and Harney Counties. Every structure is sized and engineered for Eastern Oregon ranching operations — not suburban storage. We've been building agricultural structures in this climate since 2001. Licensed CCB# <?php echo htmlspecialchars($licenseNumber); ?>. Free written estimate after a site visit.</p>
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
            <h3>What we build for Eastern Oregon ranchers</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Horse barns, hay sheds, RV barns</li>
              <li><?php echo lucide_icon('check-circle'); ?> Barndominiums &amp; storage barns</li>
              <li><?php echo lucide_icon('check-circle'); ?> RV storage garages built to order</li>
              <li><?php echo lucide_icon('check-circle'); ?> Sized for Eastern OR ranching operations</li>
              <li><?php echo lucide_icon('check-circle'); ?> Grant &amp; Harney County permitted</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Discuss Your Project</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Pole Barns &amp; Agricultural Buildings</span>
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
  <section class="sp-problem" aria-label="Pole barn types and options for Eastern Oregon ranches">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "A pole barn built for the Willamette Valley is not the same as one built for Grant County's snow loads, open-land wind, and a ranching operation that works year-round."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('ruler'); ?></div>
          <h3>Pole barn sizing for your land</h3>
          <p>We size every pole barn to the operation — hay storage requires span and clearance requirements different from a horse barn or equipment shed. Before writing any estimate, we walk the site and discuss current and future needs. A 40x60 built right costs less over 20 years than a 30x40 you outgrow in five.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('home'); ?></div>
          <h3>Barndominium design options</h3>
          <p>Barndominiums combine living quarters with a shop, garage, or working barn under one roof. They permit as residential structures in Grant County and deliver more usable square footage per dollar than a separate house and outbuilding. We handle the full scope — design, permit, and build.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('package'); ?></div>
          <h3>Hay &amp; equipment storage</h3>
          <p>Hay storage barns need height clearance for stacking, proper ventilation to prevent spoilage, and wide door openings for equipment. Equipment storage needs span width and door height matched to your machinery. We build both as purpose-designed structures for the John Day River valley and surrounding area.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('truck'); ?></div>
          <h3>RV storage &amp; garage builds</h3>
          <p>Class A motorhome storage requires 14-foot door openings and 15-foot interior clearance at minimum. We build RV storage garages as standalone structures with concrete floors, overhead doors, and optional electrical — sized to the coach. Both Grant County and Harney County projects available.</p>
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
  <section class="sp-expert" aria-label="Why Superior Home Builders for pole barns in Grant County">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>"
               alt="Pole barn and agricultural building construction by Superior Home Builders in Grant County, Eastern Oregon"
               width="420" height="525" loading="lazy">
          <div class="sp-expert-photo-badge">Agricultural Builds Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do Eastern Oregon ranchers choose Superior Home Builders for pole barns near me in Grant County?</h2>
          <p class="answer-block">We understand agricultural construction in Eastern Oregon because we've been part of this ranching community since 2001. Grant and Harney Counties have specific structural demands — heavy snow loads, sustained high winds across open ranch land, and the practical realities of a working agricultural property. We don't adapt suburban pole barn specs to a ranching context. We build for the operation from the start, in a climate we know firsthand.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Built for Eastern Oregon wind &amp; snow</strong>
                <span>Pole barns on open ranch land in Grant and Harney Counties face sustained wind exposure and heavy snow loads that require specific engineering. We size posts, bays, and roof framing for local conditions — not averaged Pacific Northwest specs that don't account for the high-desert climate at elevation.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Agricultural knowledge — we understand ranching needs</strong>
                <span>We know the difference between a hay storage barn and a working horse barn. Stall sizing, center aisle width, tack room placement, ventilation for hay storage, manure clearances — these details matter on a working ranch, and we incorporate them from the design stage, not as an afterthought.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Full scope: permits, concrete, framing, roofing, doors</strong>
                <span>One contractor handles the full project — site prep, concrete footings, pole framing, metal roofing, siding, doors, and electrical rough-in. We pull the Grant County or Harney County permit and coordinate required inspections. You don't chase multiple subs or manage the schedule yourself.</span>
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
  <section class="sp-breakdown" aria-label="What is included in a pole barn build in Eastern Oregon">
    <div class="container">
      <div class="sp-includes-two-col">
        <div class="reveal-left">
          <h2>What's included in a pole barn project in Eastern Oregon?</h2>
          <p class="answer-block">From site prep to final walk-through, Superior Home Builders handles every component of your agricultural building project under one contract and one license number. No subcontracted unknowns, no gaps in the schedule.</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Site prep &amp; concrete footings</li>
            <li><?php echo lucide_icon('check'); ?> Pole framing &amp; structural bays</li>
            <li><?php echo lucide_icon('check'); ?> Metal roofing &amp; siding panels</li>
            <li><?php echo lucide_icon('check'); ?> Sliding doors &amp; overhead doors</li>
            <li><?php echo lucide_icon('check'); ?> Tack rooms &amp; interior partitions</li>
            <li><?php echo lucide_icon('check'); ?> Electrical rough-in</li>
            <li><?php echo lucide_icon('check'); ?> Paint &amp; trim finish</li>
            <li><?php echo lucide_icon('check'); ?> Permit handling (Grant or Harney County)</li>
          </ul>
        </div>
        <div class="reveal-right">
          <h2>Common agricultural structure types we build</h2>
          <p class="answer-block">Every agricultural building project is different. These are the most common structure types we build across Grant and Harney Counties:</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Open-front hay storage barns (30x40 to 60x100)</li>
            <li><?php echo lucide_icon('check'); ?> Horse barns with stalls, tack room &amp; center aisle</li>
            <li><?php echo lucide_icon('check'); ?> Equipment &amp; shop buildings</li>
            <li><?php echo lucide_icon('check'); ?> Barndominiums (residential + working structure)</li>
            <li><?php echo lucide_icon('check'); ?> RV storage garages (single and multi-bay)</li>
            <li><?php echo lucide_icon('check'); ?> Covered arenas (engineered spans)</li>
            <li><?php echo lucide_icon('check'); ?> Combination livestock &amp; hay barns</li>
            <li><?php echo lucide_icon('check'); ?> Commercial agricultural storage structures</li>
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
  <section class="sp-faq" aria-label="Pole barn FAQ for Grant County and Eastern Oregon">
    <div class="container">
      <h2>Frequently asked questions about pole barns near Eastern Oregon</h2>
      <p class="answer-block" style="text-align:center;max-width:58ch;margin:0 auto;">Answers to what Grant and Harney County property owners ask most about agricultural building construction.</p>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-pb-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-pb-<?php echo $i; ?>">
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
  <section class="sp-final-cta" aria-label="Get a free pole barn estimate in Eastern Oregon">
    <div class="container">
      <h2>Ready to build your pole barn near Mount Vernon, OR?</h2>
      <p>Superior Home Builders has been constructing agricultural buildings across Grant and Harney Counties since 2001. We understand ranching operations, Eastern Oregon's structural demands, and what local building departments require. Get a written estimate after a site visit — no obligation, no pressure.</p>
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
  <section class="sp-related" aria-label="Other construction services in Grant County Oregon">
    <div class="container">
      <h2>Other Services You May Need</h2>
      <div class="services-grid">
        <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604131715-gsv7qf-20250819_192028.jpg"
                 alt="Garage construction in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('warehouse'); ?></div>
            <h3>Garages</h3>
            <ul>
              <li>Detached &amp; attached builds</li>
              <li>Oversized &amp; RV-height options</li>
              <li>Concrete floors &amp; electrical</li>
            </ul>
            <a href="/services/garages/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg"
                 alt="Residential framing in Grant County Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('hammer'); ?></div>
            <h3>Framing</h3>
            <ul>
              <li>New construction &amp; additions</li>
              <li>Engineered lumber options</li>
              <li>Residential &amp; agricultural</li>
            </ul>
            <a href="/services/framing/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
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
              <li>Engineered for snow loads</li>
              <li>Residential &amp; agricultural</li>
            </ul>
            <a href="/services/roofing/" class="service-card__cta">Learn more</a>
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
