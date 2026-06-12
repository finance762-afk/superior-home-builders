<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Custom Home Building in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Build your custom home in Mount Vernon, OR with Superior Home Builders. Full design-to-completion construction in Grant County since 2001. New builds, site prep, foundation to finish. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/custom-home-building/';
$currentPage      = 'services';
$heroImage        = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604304191-9h3673-466678023_10160894523422734_2342757114398857707_n.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$faqs = [
  ['q'=>'How much does it cost to build a custom home in Mount Vernon, OR?',
   'a'=>'Custom construction in Grant County typically ranges $180–$320 per sq ft depending on design, finish level, and site conditions. A 1,800 sq ft home runs $325,000–$576,000 at current material costs. Superior Home Builders provides a detailed written estimate after a site visit and design consultation — there are too many variables for an accurate number without seeing the land and scope.'],
  ['q'=>'How long does it take to build a custom home in Eastern Oregon?',
   'a'=>'From lot purchase to move-in, 10–18 months is typical: 1–2 months for design and permitting, 8–14 months for construction. Timeline depends heavily on plan complexity, site conditions, and permit review timelines at the Grant County building department. We build the construction schedule before work starts so you know what to expect at each phase.'],
  ['q'=>'Do I need an architect before hiring Superior Home Builders?',
   'a'=>'Not necessarily. We work from your sketches, existing plans, or refer you to design professionals we\'ve worked with in Eastern Oregon. Some clients bring complete architectural drawings; others start with a rough idea and we help develop the scope before engaging a designer. We\'ll tell you upfront what the permit process requires for your specific project.'],
  ['q'=>'What is included in a custom home build from Superior Home Builders?',
   'a'=>'We offer full GC scope: site prep and grading, foundation, framing, exterior envelope, insulation, mechanical rough-ins (coordinated), drywall, finish carpentry, flooring, cabinetry, countertops, interior and exterior paint, and final punch-out. You have one point of contact for the entire project — from permit application to move-in walk.'],
  ['q'=>'How do custom homes in Grant County handle the Eastern Oregon climate?',
   'a'=>'Homes in the Blue Mountain foothills face cold winters with significant snow loads, and hot dry summers. We design in proper insulation specs (R-21 walls, R-49+ attic), vapor barriers, high-efficiency HVAC, and a tight building envelope from the start — not as afterthoughts. Eastern Oregon\'s climate requires building science decisions made at the framing and insulation stage, not at move-in.'],
  ['q'=>'Can Superior Home Builders build on land I already own in Grant County?',
   'a'=>'Yes — most of our custom builds start with clients who own or are purchasing land in the Mount Vernon, John Day, or Canyon City areas. We do a site assessment to evaluate access, septic feasibility, well requirements, and grade before putting numbers on paper. The site assessment is part of the initial consultation at no additional charge.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name'=>'Home',                 'url'=> $siteUrl . '/'],
  ['name'=>'Services',             'url'=> $siteUrl . '/services'],
  ['name'=>'Custom Home Building', 'url'=> $siteUrl . '/services/custom-home-building/'],
]);
$serviceSchema = [
  '@context' => 'https://schema.org',
  '@type'    => 'Service',
  '@id'      => $siteUrl . '/services/custom-home-building#service',
  'name'     => 'Custom Home Building',
  'url'      => $siteUrl . '/services/custom-home-building/',
  'provider' => ['@type'=>'HomeAndConstructionBusiness','@id'=> $siteUrl . '/#organization'],
  'areaServed' => ['@type'=>'Place','name'=>'Mount Vernon, OR','addressRegion'=>'OR'],
  'description' => 'Full design-to-completion custom home building in Mount Vernon, OR. Site prep, foundation, framing, exterior envelope, mechanical coordination, finish carpentry, and final punch-out for Grant County homeowners.',
];
$faqSchema = generateFAQSchema($faqs);
$schemaGraph = ['@context'=>'https://schema.org','@graph'=>[$breadcrumbs,$serviceSchema,$faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* Page-specific styles only — the shared service page template
   lives in framework.css */
.sp-hero { position: relative; min-height: 72vh; display: flex; align-items: center; background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center 40%; padding-top: var(--nav-height); }
.sp-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(var(--color-primary-rgb),0.95) 0%, rgba(var(--color-secondary-rgb),0.80) 48%, rgba(var(--color-primary-rgb),0.55) 100%); z-index: 1; }
.sp-hero-layout { display: grid; grid-template-columns: 1fr 380px; gap: var(--space-3xl); align-items: center; }
.sp-hero-eyebrow { display: inline-flex; align-items: center; gap: var(--space-xs); background: rgba(var(--color-accent-rgb),0.15); border: 1px solid rgba(var(--color-accent-rgb),0.35); color: var(--color-accent); font-size: var(--fs-xs); font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 5px var(--space-md); border-radius: 100px; margin-bottom: var(--space-md); }
.sp-hero h1 { font-family: var(--font-heading); font-size: var(--fs-h1); font-weight: 800; line-height: 1.05; color: #fff; margin-bottom: var(--space-lg); text-wrap: balance; }
.sp-hero p.hero-answer { font-size: clamp(1rem,1.3vw,1.15rem); color: rgba(255,255,255,0.85); max-width: 60ch; line-height: 1.75; margin-bottom: var(--space-xl); }
.sp-hero-trust-item { display: flex; align-items: center; gap: var(--space-xs); font-size: var(--fs-sm); color: rgba(255,255,255,0.75); }
.sp-hero-card { background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.15); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border-radius: 16px; padding: var(--space-2xl); color: #fff; }
.sp-hero-card h3 { font-family: var(--font-heading); font-size: 1.3rem; margin-bottom: var(--space-md); }
.sp-hero-card ul li { display: flex; align-items: center; gap: var(--space-sm); font-size: var(--fs-sm); color: rgba(255,255,255,0.80); }
.sp-hero-card ul li svg { color: var(--color-accent); flex-shrink:0; }
.sp-hero-breadcrumb { margin-top: var(--space-2xl); font-size: var(--fs-xs); color: rgba(255,255,255,0.50); }
.sp-hero-breadcrumb a { color: rgba(255,255,255,0.65); }
.sp-divider { display:block; width:100%; overflow:hidden; line-height:0; }
.sp-divider svg { display:block; width:100%; }
.sp-problem-pull { font-family: var(--font-heading); font-size: clamp(1.5rem, 2.8vw, 2.4rem); font-weight: 700; font-style: italic; color: var(--color-primary); border-left: 4px solid var(--color-accent); padding-left: var(--space-xl); max-width: 72ch; margin: 0 auto var(--space-3xl); line-height: 1.4; }
.sp-bento-card p { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.65; }
.sp-expert-grid { display: grid; grid-template-columns: 440px 1fr; gap: var(--space-3xl); align-items: center; }
.sp-expert-photo::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb),0.60) 100%); }
.sp-expert-photo-badge { position: absolute; bottom: var(--space-lg); left: var(--space-lg); background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading); font-weight: 800; font-size: 0.95rem; padding: var(--space-sm) var(--space-md); border-radius: 8px; z-index: 2; }
.sp-expert-content h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); text-wrap: balance; }
.sp-expert-point div strong { display: block; font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 3px; }
.sp-expert-point div span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.60; }
.sp-breakdown h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); text-wrap: balance; }
.sp-includes-list li svg { color: var(--color-accent-dark); flex-shrink:0; }
.sp-process-timeline::before { content: ''; position: absolute; left: 24px; top: 48px; bottom: 48px; width: 2px; background: linear-gradient(180deg, var(--color-accent) 0%, rgba(var(--color-accent-rgb),0.15) 100%); }
.sp-step-body span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.65; }
.sp-proof h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); text-align: center; text-wrap: balance; }
.sp-compare h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: #fff; text-align: center; margin-bottom: var(--space-md); text-wrap: balance; }
.sp-compare p.answer-block { font-size: var(--fs-body); color: rgba(255,255,255,0.75); text-align: center; max-width: 58ch; margin: 0 auto var(--space-3xl); line-height: 1.75; }
.sp-compare-col--bad { background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); }
.sp-compare-col--good { background: rgba(var(--color-accent-rgb),0.12); border: 1px solid rgba(var(--color-accent-rgb),0.30); }
.sp-compare-col h3 { font-family: var(--font-heading); font-size: 1.1rem; margin-bottom: var(--space-lg); color: #fff; }
.sp-compare-row { display: flex; align-items: flex-start; gap: var(--space-sm); padding: var(--space-sm) 0; border-bottom: 1px solid rgba(255,255,255,0.07); }
.sp-compare-row span { font-size: var(--fs-sm); color: rgba(255,255,255,0.75); line-height: 1.55; }
.sp-compare-col--good .sp-compare-row span { color: rgba(255,255,255,0.90); }
.sp-faq h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-align: center; margin-bottom: var(--space-md); text-wrap: balance; }
.sp-final-cta h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); text-wrap: balance; }
.sp-related h2 { font-family: var(--font-heading); font-size: var(--fs-h3); font-weight: 800; color: var(--color-primary); text-align: center; margin-bottom: var(--space-3xl); text-wrap: balance; }
.service-card-with-image { border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; transition: transform var(--transition), box-shadow var(--transition); }
.service-card-with-image:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.service-card__image { position: relative; aspect-ratio: 5 / 3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.45s ease; }
.service-card-with-image:hover .service-card__image img { transform: scale(1.04); }
.service-card__body { padding: var(--space-lg) var(--space-md) var(--space-md); text-align: center; display: flex; flex-direction: column; align-items: center; gap: var(--space-sm); position: relative; }
.service-card__icon { width: 56px; height: 56px; border-radius: 50%; background: #fff; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin-top: -44px; margin-bottom: var(--space-xs); color: var(--color-accent-dark); }
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { font-family: var(--font-heading); color: var(--color-primary); margin: 0; font-size: 1.25rem; line-height: 1.2; }
.service-card-with-image ul { list-style: none; padding: 0; margin: var(--space-xs) 0 0; width: 100%; text-align: left; display: flex; flex-direction: column; gap: var(--space-xs); border-top: 1px solid rgba(0,0,0,0.06); padding-top: var(--space-md); }
.service-card-with-image ul li { font-size: 0.9rem; color: var(--color-text); padding-left: 1.25rem; position: relative; }
.service-card-with-image ul li::before { content: "•"; color: var(--color-accent-dark); font-weight: 700; position: absolute; left: 0.25rem; top: 0; }
.service-card__cta { margin-top: auto; color: var(--color-accent-dark); font-weight: 600; text-decoration: none; font-size: 0.95rem; border-top: 1px solid rgba(0,0,0,0.06); width: 100%; text-align: center; padding: var(--space-sm) 0 0; transition: color var(--transition); }
.service-card__cta::after { content: " →"; display: inline-block; transition: transform var(--transition); }
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(3px); }
.reveal-up { opacity:0; transform:translateY(28px); transition:opacity .65s ease,transform .65s ease; }
.reveal-left { opacity:0; transform:translateX(-28px); transition:opacity .65s ease,transform .65s ease; }
.reveal-right { opacity:0; transform:translateX(28px); transition:opacity .65s ease,transform .65s ease; }
.reveal-scale { opacity:0; transform:scale(.93); transition:opacity .65s ease,transform .65s ease; }
.reveal-up.visible,.reveal-left.visible,.reveal-right.visible,.reveal-scale.visible { opacity:1; transform:none; }
.reveal-delay-1 { transition-delay:.10s; }
.reveal-delay-2 { transition-delay:.20s; }
.reveal-delay-3 { transition-delay:.30s; }
.reveal-delay-4 { transition-delay:.40s; }
@media (max-width: 1100px) {
  .services-grid { grid-template-columns: 1fr 1fr; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ═══════════════════════════════════════
       1. HERO
  ═══════════════════════════════════════ -->
  <section class="sp-hero" aria-label="Custom home building hero">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('home'); ?> Custom Home Building</span>
            <h1>Custom Home Building in<br><em>Mount Vernon, OR</em></h1>
            <p class="hero-answer">Custom home construction in Mount Vernon presents unique challenges—our region's heavy rainfall, clay-rich soil, and specific building code requirements demand expertise most general contractors simply don't have. Superior Home Builders specializes in Mount Vernon's climate and conditions, designing homes that perform in our weather while meeting local standards. Our transparent approach includes a detailed site assessment to understand your property's specific needs, followed by a written estimate that reflects the true cost of building right in Mount Vernon—whether that's reinforced foundations for our soil conditions, premium weatherproofing, or energy-efficient systems that cut heating costs in our cool Pacific Northwest climate. We don't just build; we partner with you through construction and beyond with ongoing support and warranty coverage specific to Mount Vernon's environmental demands.</p>
            <div class="sp-hero-trust">
              <span class="sp-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Licensed &amp; Insured &middot; CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
              <span class="sp-hero-trust-item"><?php echo lucide_icon('calendar'); ?> Est. 2001</span>
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
            <h3>What sets our builds apart</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Full GC scope — one contract</li>
              <li><?php echo lucide_icon('check-circle'); ?> Written estimate, itemized by phase</li>
              <li><?php echo lucide_icon('check-circle'); ?> Permits &amp; inspections managed</li>
              <li><?php echo lucide_icon('check-circle'); ?> Built for Eastern OR climate</li>
              <li><?php echo lucide_icon('check-circle'); ?> Can build on land you already own</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Start a Conversation</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Custom Home Building</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- SVG Divider: hero → problem -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C360,56 1080,0 1440,28 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       2. PROBLEM STATEMENT
  ═══════════════════════════════════════ -->
  <section class="sp-problem" aria-label="Reasons to build custom in Grant County">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "In a market with limited inventory, building custom isn't a luxury — it's often the only way to get a home that actually fits your life and land."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('search-x'); ?></div>
          <h3>Can't find the right home in Grant County</h3>
          <p>Inventory in rural Eastern Oregon is limited. Building custom means getting exactly what you need — layout, size, systems — rather than compromising on an existing structure and living with its shortcomings.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('expand'); ?></div>
          <h3>Existing home can't be expanded enough</h3>
          <p>When a renovation won't achieve your goals — wrong site, undersized footprint, too many compromises — new construction on a separate parcel gives you a fresh start with modern systems built right.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('sliders'); ?></div>
          <h3>Want control over every material and detail</h3>
          <p>Custom builds let you specify insulation values, window performance, structural upgrades, and finish quality from the foundation up. Spec homes and resale can't offer that level of control.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('landmark'); ?></div>
          <h3>Investment in Eastern Oregon land</h3>
          <p>Building a quality permanent home on land you own is one of the most durable investments in Grant County's real estate market. A well-built structure on your lot compounds in value over time.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: problem → expert -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,10 C480,60 960,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       3. EXPERT POSITIONING
  ═══════════════════════════════════════ -->
  <section class="sp-expert" aria-label="Why choose Superior Home Builders for your custom home">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604305411-iws3zu-467311955_10160913944502734_1361278653232378695_n.jpg"
               alt="Superior Home Builders completed custom home in Mount Vernon Oregon Grant County"
               width="440" height="550" loading="lazy">
          <div class="sp-expert-photo-badge">Built in Grant County Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do Grant County families choose Superior Home Builders for their custom home?</h2>
          <p class="answer-block">We've been building custom homes in the Mount Vernon, John Day, and Canyon City areas for over twenty years. Local families choose us because we run the full project — one contract, one crew, one schedule. You don't coordinate between a grader, a concrete sub, a framing crew, and separate finish trades. We manage it all and deliver a finished home, not a pile of handoffs.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Full scope, one contractor</strong>
                <span>Site prep, foundation, framing, and all finish trades run through one contract. You have one point of contact from permit application to move-in walk — not five separate subs who won't coordinate with each other.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>25+ years building in Eastern Oregon's specific conditions</strong>
                <span>Our crews know Grant County's soil conditions, design snow loads, wind exposure, and building department timelines. That experience saves months and protects your investment against costly surprises.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Transparent process from estimate to move-in</strong>
                <span>You receive a detailed written proposal covering every phase. Change orders exist but are always documented and priced in writing before any work proceeds — no verbal additions that show up on the final invoice.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: expert → breakdown -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,0 1080,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       4. SERVICE BREAKDOWN
  ═══════════════════════════════════════ -->
  <section class="sp-breakdown" aria-label="What's included in a custom home build">
    <div class="container">
      <div class="sp-breakdown-grid">
        <div class="reveal-left">
          <h2>What does a full custom home build from Superior Home Builders include?</h2>
          <p class="answer-block">We offer complete GC scope for custom home construction in Mount Vernon, OR. Every phase below is managed under one contract — from the day we set foot on your lot to the day you pick up your keys.</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Site assessment &amp; layout</li>
            <li><?php echo lucide_icon('check'); ?> Permit application &amp; management</li>
            <li><?php echo lucide_icon('check'); ?> Site clearing &amp; grading coordination</li>
            <li><?php echo lucide_icon('check'); ?> Foundation (slab, crawl, or basement)</li>
            <li><?php echo lucide_icon('check'); ?> Framing — floors, walls, roof</li>
            <li><?php echo lucide_icon('check'); ?> Exterior envelope (sheathing, wrap, siding, roofing)</li>
            <li><?php echo lucide_icon('check'); ?> Window &amp; door installation</li>
            <li><?php echo lucide_icon('check'); ?> Insulation (walls, ceiling, crawl)</li>
            <li><?php echo lucide_icon('check'); ?> Mechanical coordination (plumbing, HVAC, electrical)</li>
            <li><?php echo lucide_icon('check'); ?> Drywall, texture &amp; paint</li>
            <li><?php echo lucide_icon('check'); ?> Flooring, cabinetry &amp; countertops</li>
            <li><?php echo lucide_icon('check'); ?> Final punch-out &amp; inspection walk</li>
          </ul>
          <a href="/contact/" class="btn btn-primary">Request a Free Estimate</a>
        </div>
        <div class="reveal-right">
          <div style="margin-bottom:var(--space-lg)">
            <h3 style="font-family:var(--font-heading);font-size:1.4rem;font-weight:800;color:var(--color-primary);margin-bottom:var(--space-md)">How does the custom build process work from start to finish?</h3>
          </div>
          <div class="sp-process-timeline">
            <div class="sp-step">
              <div class="sp-step-num">1</div>
              <div class="sp-step-body">
                <strong>Consultation &amp; proposal</strong>
                <span>We visit your site, review your goals and budget, assess access, soil, and utility requirements, and provide a detailed written proposal covering all phases — no obligation.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">2</div>
              <div class="sp-step-body">
                <strong>Design, permits &amp; contracts</strong>
                <span>Architectural drawings finalized, permit application submitted to Grant County, contract signed, and a construction schedule prepared before any site work begins.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">3</div>
              <div class="sp-step-body">
                <strong>Site prep through lock-up</strong>
                <span>Foundation poured, framing completed, exterior envelope closed — the home is fully weathertight before interior trades begin. This is the largest phase by labor and timeline.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">4</div>
              <div class="sp-step-body">
                <strong>Interior finish &amp; move-in walk</strong>
                <span>Mechanical systems installed, finishes applied, final inspections completed, and a complete move-in walkthrough conducted with the homeowner before we hand over the keys.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: breakdown → proof -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,20 C720,60 720,0 1440,30 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       5. PROOF / REVIEWS
  ═══════════════════════════════════════ -->
  <section class="sp-proof" aria-label="Customer reviews and custom home project photos">
    <div class="container">
      <h2>What do Grant County homeowners say about their custom builds?</h2>
      <p class="answer-block">Real builds, real clients — from empty lots to finished homes in John Day and Mount Vernon. Both reviews below are from Superior Home Builders custom construction projects in Eastern Oregon.</p>
      <div class="sp-proof-grid reveal-up">
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"Superior Home Builders turned our empty lot into the home we'd been planning for years. They were upfront about costs, stuck to the schedule, and the framing crew was exceptional. Four years later the house is rock-solid."</p>
          <div class="sp-testimonial-meta">
            <strong>Travis &amp; Kelsey B.</strong>
            <span>John Day, OR — Custom Home Build</span>
          </div>
        </div>
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"We had both the kitchen and master bath redone at the same time. The crew kept the mess contained and finished ahead of schedule. The tile work alone is worth every penny — and they handled everything themselves, no handoffs."</p>
          <div class="sp-testimonial-meta">
            <strong>Mike R.</strong>
            <span>Mount Vernon, OR — Kitchen &amp; Bathroom Remodel</span>
          </div>
        </div>
      </div>
      <div class="sp-proof-photos reveal-scale">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604304797-ovpay8-466679242_10160894523457734_3638487413345304516_n.jpg"
             alt="Custom home build completed by Superior Home Builders in Grant County Oregon" width="600" height="440" loading="lazy">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604306051-1cn5ph-467748149_10161026648862734_1486565757297760050_n.jpg"
             alt="Exterior of a newly completed Superior Home Builders custom home in Eastern Oregon" width="300" height="220" loading="lazy">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604304191-9h3673-466678023_10160894523422734_2342757114398857707_n.jpg"
             alt="Custom home construction by Superior Home Builders in Mount Vernon Oregon" width="300" height="220" loading="lazy">
      </div>
    </div>
  </section>

  <!-- SVG Divider: proof → compare -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,30 C480,0 960,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-primary)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       6. COMPARISON
  ═══════════════════════════════════════ -->
  <section class="sp-compare" aria-label="Why choose Superior Home Builders over managing your own build">
    <div class="container">
      <h2 class="reveal-up">How does a Superior Home Builders custom build compare to managing your own GC scope?</h2>
      <p class="answer-block reveal-up reveal-delay-1">Some homeowners attempt to owner-manage their custom build by hiring individual subs. Here's the reality of what that looks like compared to a full GC contract with us.</p>
      <div class="sp-compare-table">
        <div class="sp-compare-col sp-compare-col--bad reveal-left">
          <h3>Owner-managed or weak GC</h3>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Multiple contracts with multiple subs — you coordinate scheduling conflicts</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Verbal scope with unclear allowances — changes cost extra at billing</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Design and construction not coordinated — every change creates rework</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Weather delays and permit delays not accounted for in schedule</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Limited experience navigating Grant County permit and inspection process</span></div>
        </div>
        <div class="sp-compare-col sp-compare-col--good reveal-right">
          <h3>Superior Home Builders</h3>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Single contract, full GC scope — one point of contact start to finish</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Written proposal with itemized scope, allowances, and phase milestones</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Design and build managed together to minimize change orders</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Schedule accounts for Eastern OR winter conditions and permit timelines</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>25+ years navigating Grant County building department and inspections</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: compare → FAQ -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,10 1080,56 1440,15 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       7. FAQ
  ═══════════════════════════════════════ -->
  <section class="sp-faq" aria-label="Custom home building FAQ">
    <div class="container">
      <h2 class="reveal-up">Frequently asked questions about custom home building in Mount Vernon, OR</h2>
      <p class="answer-block reveal-up reveal-delay-1">Straight answers to the questions Grant County families ask most before starting a custom home project — costs, timelines, land requirements, and what full GC scope actually means.</p>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up" id="faq-<?php echo $i; ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-ans-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus-circle'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-ans-<?php echo $i; ?>" role="region">
            <?php echo htmlspecialchars($faq['a']); ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       8. FINAL CTA
  ═══════════════════════════════════════ -->
  <section class="sp-final-cta" aria-label="Get a free custom home building estimate">
    <div class="container reveal-up">
      <h2>Ready to build your custom home near Mount Vernon, OR?</h2>
      <p>Get a free, written estimate from Grant County's most experienced custom home builder. We visit your lot, review your plans, and give you real numbers — no obligation, no pressure, no sales tactics.</p>
      <div class="cta-row">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-secondary btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       RELATED SERVICES
  ═══════════════════════════════════════ -->
  <section class="sp-related" aria-label="Other services you may need">
    <div class="container">
      <h2>Other Services You May Need</h2>
      <div class="services-grid">

        <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg"
                 alt="Residential framing by Superior Home Builders in Mount Vernon Oregon"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('hammer'); ?></div>
            <h3>Framing</h3>
            <ul>
              <li>Residential &amp; commercial</li>
              <li>New builds &amp; additions</li>
              <li>Engineered lumber &amp; steel</li>
            </ul>
            <a href="/services/framing/" class="service-card__cta">Learn more</a>
          </div>
        </article>

        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg"
                 alt="General remodeling project by Superior Home Builders in Grant County Oregon"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('wrench'); ?></div>
            <h3>General Remodeling</h3>
            <ul>
              <li>Single rooms to whole homes</li>
              <li>Additions &amp; conversions</li>
              <li>Interior finish work</li>
            </ul>
            <a href="/services/general-remodeling/" class="service-card__cta">Learn more</a>
          </div>
        </article>

        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604101037-ig7pay-20220727_101642.jpg"
                 alt="Commercial construction project by Superior Home Builders in Eastern Oregon"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('building-2'); ?></div>
            <h3>Commercial Construction</h3>
            <ul>
              <li>Shops, offices &amp; warehouses</li>
              <li>Ground-up &amp; tenant build-out</li>
              <li>On schedule, on budget</li>
            </ul>
            <a href="/services/commercial-construction/" class="service-card__cta">Learn more</a>
          </div>
        </article>

      </div>
    </div>
  </section>

<script>
// FAQ accordion
document.querySelectorAll('.sp-faq-question').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.sp-faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.sp-faq-item.open').forEach(i => {
      i.classList.remove('open');
      i.querySelector('.sp-faq-question').setAttribute('aria-expanded','false');
    });
    if (!isOpen) {
      item.classList.add('open');
      btn.setAttribute('aria-expanded','true');
    }
  });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
