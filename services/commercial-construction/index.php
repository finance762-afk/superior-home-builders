<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Commercial Construction in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Commercial construction services in Mount Vernon, OR. Shops, offices, warehouses, and tenant build-outs for Grant County businesses. Licensed contractor since 2001. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/commercial-construction/';
$currentPage      = 'services';
$heroImage        = '/assets/images/commercial-construction-eastern-oregon.webp';
$heroImagePreload = $heroImage;
$ogImage          = $siteUrl . $heroImage;  // og:image stays absolute

$faqs = [
  ['q' => 'What commercial construction services are available in Mount Vernon, OR?',
   'a' => 'Superior Home Builders handles ground-up commercial construction — shops, warehouses, agricultural structures, and small office buildings — as well as additions and tenant build-outs for existing commercial spaces in Grant County. We serve businesses throughout the region including John Day and Canyon City. One contractor manages the full commercial build process.'],
  ['q' => 'How is commercial construction permitting different from residential in Oregon?',
   'a' => 'Commercial projects require a commercial building permit, which involves plan review by the Oregon Building Codes Division in addition to local building department approval. Commercial electrical and plumbing inspections follow different code paths than residential. Larger commercial buildings may require engineered plans stamped by a licensed Oregon engineer. We have experience navigating both Oregon commercial code and Grant County\'s specific requirements.'],
  ['q' => 'How much does commercial construction cost in Grant County?',
   'a' => 'Commercial builds vary widely by type. A metal post-frame shop building runs $40–$80 per square foot. A stick-framed commercial building with full interior finish runs $120–$220 per square foot. Tenant build-outs run $40–$120 per square foot depending on plumbing, HVAC, and electrical scope. Superior Home Builders provides written estimates after reviewing your specific project requirements on-site.'],
  ['q' => 'How do you minimize disruption to an operating business during construction?',
   'a' => 'For additions and build-outs on occupied properties, we work in a sequence that preserves access to the operating portion of the business. We schedule demolition and noisy phases during off-hours where agreed. Our commercial client Greg O. in Mount Vernon specifically noted that we never held up his operation during a shop addition — scheduling around his business hours was a deliberate part of our plan from day one.'],
  ['q' => 'Can Superior Home Builders handle agricultural construction in Eastern Oregon?',
   'a' => 'Yes — agricultural structures including barns, equipment storage buildings, hay storage, and agricultural processing facilities are within our scope. Eastern Oregon\'s agricultural community is well represented in our project history. These projects often involve engineered post-frame buildings, but the same site work, foundation, and trade coordination principles apply. We\'ve built for Grant County agricultural operations since 2001.'],
  ['q' => 'What is a tenant build-out and does Superior Home Builders handle it?',
   'a' => 'A tenant build-out is the interior construction work that transforms a raw commercial shell into a functional business space — partition walls, lighting, plumbing fixtures, flooring, HVAC distribution, and finishes. We handle the complete tenant build-out scope for commercial tenants throughout Grant County, coordinating with building owners and commercial landlords as needed to meet lease requirements and schedule.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',                   'url' => $siteUrl . '/'],
  ['name' => 'Services',               'url' => $siteUrl . '/services'],
  ['name' => 'Commercial Construction','url' => $siteUrl . '/services/commercial-construction/'],
]);
$serviceSchema = [
  '@context'  => 'https://schema.org',
  '@type'     => 'Service',
  '@id'       => $siteUrl . '/services/commercial-construction#service',
  'name'      => 'Commercial Construction',
  'url'       => $siteUrl . '/services/commercial-construction/',
  'provider'  => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Mount Vernon, OR', 'addressRegion' => 'OR'],
  'description' => 'Commercial construction services in Mount Vernon, OR for Grant County businesses — ground-up commercial builds, shop and warehouse additions, agricultural structures, and tenant build-outs. Licensed Oregon general contractor with commercial permit experience since 2001.',
];
$faqSchema   = generateFAQSchema($faqs);
$schemaGraph = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* Page-specific styles only — the shared service page template
   lives in framework.css */
.sp-hero { position: relative; min-height: 68vh; display: flex; align-items: center; background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center 40%; padding-top: var(--nav-height); }
.sp-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient( 115deg, rgba(var(--color-primary-rgb), 0.95) 0%, rgba(var(--color-secondary-rgb), 0.82) 50%, rgba(var(--color-primary-rgb), 0.58) 100% ); z-index: 1; }
.sp-hero::after { content: ''; position: absolute; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E"); background-size: 180px 180px; z-index: 2; pointer-events: none; }
.sp-hero-layout { display: grid; grid-template-columns: 1fr 360px; gap: var(--space-3xl); align-items: center; }
.sp-hero-eyebrow { display: inline-flex; align-items: center; gap: var(--space-xs); background: rgba(var(--color-accent-rgb), 0.14); border: 1px solid rgba(var(--color-accent-rgb), 0.32); color: var(--color-accent); font-size: var(--fs-xs); font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 5px var(--space-md); border-radius: 100px; margin-bottom: var(--space-md); }
.sp-hero h1 { font-family: var(--font-heading); font-size: var(--fs-h1); font-weight: 800; line-height: 1.05; color: #fff; margin-bottom: var(--space-lg); text-wrap: balance; }
.sp-hero p.hero-answer { font-size: clamp(1rem, 1.3vw, 1.15rem); color: rgba(255, 255, 255, 0.85); max-width: 60ch; line-height: 1.75; margin-bottom: var(--space-xl); }
.sp-hero-trust-item { display: flex; align-items: center; gap: var(--space-xs); font-size: var(--fs-sm); color: rgba(255, 255, 255, 0.75); }
.sp-hero-card { background: rgba(255, 255, 255, 0.07); border: 1px solid rgba(255, 255, 255, 0.15); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border-radius: 16px; padding: var(--space-2xl); color: #fff; }
.sp-hero-card h3 { font-family: var(--font-heading); font-size: 1.25rem; margin-bottom: var(--space-md); }
.sp-hero-card ul li { display: flex; align-items: center; gap: var(--space-sm); font-size: var(--fs-sm); color: rgba(255, 255, 255, 0.80); }
.sp-hero-card ul li svg { color: var(--color-accent); flex-shrink: 0; }
.sp-hero-breadcrumb { margin-top: var(--space-2xl); font-size: var(--fs-xs); color: rgba(255, 255, 255, 0.50); }
.sp-hero-breadcrumb a { color: rgba(255, 255, 255, 0.65); }
.sp-divider { display: block; width: 100%; overflow: hidden; line-height: 0; }
.sp-divider svg { display: block; width: 100%; }
.sp-problem-pull { font-family: var(--font-heading); font-size: clamp(1.45rem, 2.6vw, 2.25rem); font-weight: 700; font-style: italic; color: var(--color-primary); border-left: 4px solid var(--color-accent); padding-left: var(--space-xl); max-width: 70ch; margin: 0 auto var(--space-3xl); line-height: 1.45; }
.sp-bento-card p { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.65; }
.sp-expert-grid { display: grid; grid-template-columns: 420px 1fr; gap: var(--space-3xl); align-items: center; }
.sp-expert-photo::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb), 0.55) 100%); }
.sp-expert-photo-badge { position: absolute; bottom: var(--space-lg); left: var(--space-lg); background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading); font-weight: 800; font-size: 0.9rem; padding: var(--space-sm) var(--space-md); border-radius: 8px; z-index: 2; line-height: 1.35; }
.sp-expert-content h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); text-wrap: balance; }
.sp-expert-point div strong { display: block; font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 2px; }
.sp-expert-point div span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }
.sp-breakdown h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); text-wrap: balance; }
.sp-includes-list li svg { color: var(--color-accent-dark); flex-shrink: 0; }
.sp-process-timeline::before { content: ''; position: absolute; left: 24px; top: 48px; bottom: 48px; width: 2px; background: linear-gradient(180deg, var(--color-accent) 0%, rgba(var(--color-accent-rgb), 0.2) 100%); }
.sp-step-body span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.65; }
.sp-proof h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); text-align: center; text-wrap: balance; }
.sp-compare h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: #fff; text-align: center; margin-bottom: var(--space-md); text-wrap: balance; }
.sp-compare p.answer-block { font-size: var(--fs-body); color: rgba(255, 255, 255, 0.75); text-align: center; max-width: 58ch; margin: 0 auto var(--space-3xl); line-height: 1.75; }
.sp-compare-col--bad { background: rgba(255, 255, 255, 0.06); border: 1px solid rgba(255, 255, 255, 0.12); }
.sp-compare-col--good { background: rgba(var(--color-accent-rgb), 0.12); border: 1px solid rgba(var(--color-accent-rgb), 0.30); }
.sp-compare-col h3 { font-family: var(--font-heading); font-size: 1.1rem; margin-bottom: var(--space-lg); color: #fff; }
.sp-compare-row { display: flex; align-items: flex-start; gap: var(--space-sm); padding: var(--space-sm) 0; border-bottom: 1px solid rgba(255, 255, 255, 0.07); }
.sp-compare-row span { font-size: var(--fs-sm); color: rgba(255, 255, 255, 0.75); line-height: 1.55; }
.sp-compare-col--good .sp-compare-row span { color: rgba(255, 255, 255, 0.90); }
.sp-faq h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-align: center; margin-bottom: var(--space-md); text-wrap: balance; }
.sp-final-cta h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); text-wrap: balance; }
.sp-related h2 { font-family: var(--font-heading); font-size: var(--fs-h3); font-weight: 800; color: var(--color-primary); text-align: center; margin-bottom: var(--space-3xl); text-wrap: balance; }
.service-card-with-image { border-radius: var(--radius-md, 12px); overflow: hidden; display: flex; flex-direction: column; transition: transform var(--transition), box-shadow var(--transition); }
.service-card-with-image:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.service-card__image { position: relative; aspect-ratio: 5 / 3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; display: block; }
.service-card__body { padding: var(--space-lg) var(--space-md) var(--space-md); text-align: center; display: flex; flex-direction: column; align-items: center; gap: var(--space-sm); position: relative; }
.service-card__icon { width: 56px; height: 56px; border-radius: 50%; background: #fff; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin-top: -44px; margin-bottom: var(--space-xs); color: var(--color-accent); }
.service-card__icon i, .service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { font-family: var(--font-heading); color: var(--color-primary); margin: 0; font-size: 1.3rem; line-height: 1.2; }
.service-card__desc { color: var(--color-text); margin: 0; font-size: 0.95rem; line-height: 1.55; }
.service-card-with-image ul { list-style: none; padding: 0; margin: var(--space-xs) 0 0; width: 100%; text-align: left; display: flex; flex-direction: column; gap: var(--space-xs); border-top: 1px solid rgba(0, 0, 0, 0.06); padding-top: var(--space-md); }
.service-card-with-image ul li { font-size: 0.9rem; color: var(--color-text); padding-left: 1.25rem; position: relative; }
.service-card-with-image ul li::before { content: "•"; color: var(--color-accent); font-weight: 700; position: absolute; left: 0.25rem; top: 0; }
.service-card__cta { margin-top: auto; padding-top: var(--space-sm); color: var(--color-accent); font-weight: 600; text-decoration: none; font-size: 0.95rem; border-top: 1px solid rgba(0, 0, 0, 0.06); width: 100%; text-align: center; padding: var(--space-sm) 0 0; transition: color var(--transition); }
.service-card__cta::after { content: " →"; display: inline-block; transition: transform var(--transition); }
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(3px); }
@media (max-width: 1100px) {
  .services-grid { grid-template-columns: 1fr 1fr; }
}
.reveal-up { opacity: 0; transform: translateY(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-left { opacity: 0; transform: translateX(-28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-right { opacity: 0; transform: translateX(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-scale { opacity: 0; transform: scale(.93); transition: opacity .65s ease, transform .65s ease; }
.reveal-up.visible, .reveal-left.visible, .reveal-right.visible, .reveal-scale.visible { opacity: 1; transform: none; }
.reveal-delay-1 { transition-delay: .1s; }
.reveal-delay-2 { transition-delay: .2s; }
.reveal-delay-3 { transition-delay: .3s; }
.reveal-delay-4 { transition-delay: .4s; }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ═══════════════════════════════════════
       1. HERO
  ═══════════════════════════════════════ -->
  <section class="sp-hero" aria-label="Commercial construction hero">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('building-2'); ?> Commercial Construction</span>
            <h1>Commercial Construction in<br><em>Mount Vernon, OR</em></h1>
            <p class="hero-answer">Superior Home Builders brings specialized expertise in commercial construction to Mount Vernon and Grant County businesses. We understand Mount Vernon's distinct climate challenges and local building code requirements, designing and building shops, warehouses, agricultural facilities, and office buildings that are built to last in our region's conditions. Unlike generalist contractors, we combine ground-up construction expertise with sustainable building practices and transparent project management—you work with one experienced builder who manages the entire process and stands behind the work with comprehensive post-build support.</p>
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
            <h3>What Grant County businesses get</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Commercial permits applied and managed</li>
              <li><?php echo lucide_icon('check-circle'); ?> Scheduling around your business hours</li>
              <li><?php echo lucide_icon('check-circle'); ?> Commercial code inspection experience</li>
              <li><?php echo lucide_icon('check-circle'); ?> Written scope before work begins</li>
              <li><?php echo lucide_icon('check-circle'); ?> 25+ years of local builds</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Discuss Your Project</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Commercial Construction</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- SVG Divider: wave slides left -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,36 C360,0 1080,56 1440,18 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       2. PROBLEM STATEMENT
  ═══════════════════════════════════════ -->
  <section class="sp-problem" aria-label="Commercial construction needs in Grant County">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "Grant County businesses that build their own space stop paying rent into someone else's equity — and they get a facility built for how they actually work."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('expand'); ?></div>
          <h3>Business has outgrown its current space</h3>
          <p>Adding a shop bay, warehouse addition, or separate structure is often faster and cheaper than relocating. We build additions that tie into existing structures properly — no patchwork.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('tractor'); ?></div>
          <h3>Agricultural or industrial facilities need updating</h3>
          <p>Post-frame buildings, equipment storage, and processing facilities in Eastern Oregon age and eventually need structural reinforcement, re-roofing, or full replacement before they become a liability.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('landmark'); ?></div>
          <h3>New business needs a permanent location</h3>
          <p>A professionally constructed commercial building in Grant County is a long-term asset. Rent payments don't build equity. A well-built commercial structure does — and gives you control over your space.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('layout-panel-left'); ?></div>
          <h3>Tenant improvement for new business space</h3>
          <p>Raw commercial shells require substantial build-out before they're functional. Superior Home Builders manages the complete tenant improvement scope so business owners can focus on opening, not managing contractors.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: deep S-curve -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,50 C480,0 960,56 1440,10 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       3. EXPERT POSITIONING
  ═══════════════════════════════════════ -->
  <section class="sp-expert" aria-label="Why choose Superior Home Builders for commercial construction">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="/assets/images/commercial-project-grant-county.webp"
               alt="Commercial construction project by Superior Home Builders for a Grant County business"
               width="420" height="520" loading="lazy">
          <div class="sp-expert-photo-badge">Commercial Builds<br>Grant County</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do Grant County businesses choose Superior Home Builders for commercial construction?</h2>
          <p class="answer-block">We've been building for Eastern Oregon businesses since 2001 — shops, additions, tenant improvements, and agricultural structures throughout Grant County. Local business owners choose us because we understand commercial permit requirements, work around operating schedules, and manage the entire project scope under one contract so they can focus on running their business.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Commercial permit and code experience</strong>
                <span>Commercial construction in Oregon requires different code paths than residential. We've navigated commercial plan review, ODEQ requirements for commercial plumbing, and commercial electrical inspections in Grant County.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Business-hours aware scheduling</strong>
                <span>We understand that disrupting an operating business has real costs. We schedule work phases around your operations, not ours. Greg O. in Mount Vernon noted that we never held up his operation during a shop addition.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Full scope from site work to finish</strong>
                <span>We don't just frame commercial shells and leave. We manage the complete project including site work coordination, utilities, and all interior finish trades through a single contract with one point of contact.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: opposing sweep -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,6 C480,60 960,0 1440,46 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       4. SERVICE BREAKDOWN
  ═══════════════════════════════════════ -->
  <section class="sp-breakdown" aria-label="What's included in commercial construction">
    <div class="container">
      <div class="sp-breakdown-grid">
        <div class="reveal-left">
          <h2>What does a commercial construction project with Superior Home Builders include?</h2>
          <p class="answer-block">Every commercial project is scoped in writing before work begins. Here's what a full-scope commercial build in Mount Vernon, OR covers — from site assessment through certificate of occupancy.</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Site assessment &amp; layout</li>
            <li><?php echo lucide_icon('check'); ?> Commercial permit application</li>
            <li><?php echo lucide_icon('check'); ?> Site clearing &amp; grading</li>
            <li><?php echo lucide_icon('check'); ?> Foundation (slab, piers, grade beam)</li>
            <li><?php echo lucide_icon('check'); ?> Framing (wood or metal)</li>
            <li><?php echo lucide_icon('check'); ?> Exterior envelope (roofing, siding, windows)</li>
            <li><?php echo lucide_icon('check'); ?> Electrical rough-in (commercial)</li>
            <li><?php echo lucide_icon('check'); ?> Plumbing rough-in (commercial)</li>
            <li><?php echo lucide_icon('check'); ?> HVAC coordination</li>
            <li><?php echo lucide_icon('check'); ?> Insulation &amp; fire-rated assemblies</li>
            <li><?php echo lucide_icon('check'); ?> Interior finish (drywall, flooring, ceiling)</li>
            <li><?php echo lucide_icon('check'); ?> Final inspections &amp; certificate of occupancy</li>
          </ul>
          <a href="/contact/" class="btn btn-primary">Request a Commercial Estimate</a>
        </div>
        <div class="reveal-right">
          <div style="margin-bottom:var(--space-lg)">
            <h3 style="font-family:var(--font-heading);font-size:1.4rem;color:var(--color-primary);margin-bottom:var(--space-md)">How does the commercial build process work?</h3>
          </div>
          <div class="sp-process-timeline">
            <div class="sp-step">
              <div class="sp-step-num">1</div>
              <div class="sp-step-body">
                <strong>Site visit &amp; commercial assessment</strong>
                <span>We evaluate your site, review your business requirements and budget, and provide a written estimate covering the full commercial scope — before you commit to anything.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">2</div>
              <div class="sp-step-body">
                <strong>Commercial permit &amp; design coordination</strong>
                <span>Commercial plans are prepared by a licensed designer where required, permit is submitted, and material orders are placed with lead times confirmed before scheduling begins.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">3</div>
              <div class="sp-step-body">
                <strong>Site work, foundation &amp; framing</strong>
                <span>Site is prepared, foundation poured, and structure framed. Commercial framing follows different sequences than residential with fire-rated assemblies and commercial-grade structural requirements.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">4</div>
              <div class="sp-step-body">
                <strong>Mechanical, finish &amp; certificate of occupancy</strong>
                <span>Electrical, plumbing, and HVAC systems installed. Interior finishes applied. All commercial inspections completed. Certificate of occupancy obtained so your business can open on schedule.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: gentle right roll -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,16 C720,60 720,0 1440,36 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       5. PROOF / REVIEWS
  ═══════════════════════════════════════ -->
  <section class="sp-proof" aria-label="Customer reviews and commercial project photos">
    <div class="container">
      <h2>What do Grant County businesses say about working with Superior Home Builders?</h2>
      <p class="answer-block">Real commercial projects in Eastern Oregon — from shop additions in Mount Vernon to custom home builds in John Day. Every review reflects an actual Superior Home Builders project completed in Grant County.</p>
      <div class="sp-proof-grid reveal-up">
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"Used them to build out an addition on our shop. They worked around our business hours, never held us up, and delivered exactly what was drawn. Will use them again."</p>
          <div class="sp-testimonial-meta">
            <strong>Greg O.</strong>
            <span>Mount Vernon, OR — Commercial Shop Addition</span>
          </div>
        </div>
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"Superior Home Builders turned our empty lot into the home we'd been planning for years. They were upfront about costs, stuck to the schedule, and the framing crew was exceptional. Four years later the house is rock-solid."</p>
          <div class="sp-testimonial-meta">
            <strong>Travis &amp; Kelsey B.</strong>
            <span>John Day, OR — Custom Home Build</span>
          </div>
        </div>
      </div>
      <div class="sp-proof-photos reveal-scale">
        <img src="/assets/images/commercial-construction-eastern-oregon.webp"
             alt="Commercial construction site in Mount Vernon Oregon — Superior Home Builders crew at work" width="600" height="440" loading="lazy">
        <img src="/assets/images/commercial-building-grant-county.webp"
             alt="Commercial building work by Superior Home Builders serving Grant County Oregon" width="300" height="220" loading="lazy">
        <img src="/assets/images/commercial-structural-framing.webp"
             alt="Structural framing work by Superior Home Builders on a commercial project in Grant County" width="300" height="220" loading="lazy">
      </div>
    </div>
  </section>

  <!-- SVG Divider: asymmetric swell -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,32 C360,56 1080,0 1440,24 L1440,56 L0,56 Z" fill="var(--color-primary)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       6. COMPARISON
  ═══════════════════════════════════════ -->
  <section class="sp-compare" aria-label="How Superior Home Builders compares for commercial construction">
    <div class="container">
      <h2 class="reveal-up">How does Superior Home Builders approach commercial construction differently?</h2>
      <p class="answer-block reveal-up reveal-delay-1">The gap between a smooth commercial build and a costly, delayed one usually comes down to licensing, process, and respect for the operating business. Here's the difference in Mount Vernon and Grant County.</p>
      <div class="sp-compare-table">
        <div class="sp-compare-col sp-compare-col--bad reveal-left">
          <h3>Residential contractor doing commercial work</h3>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>No commercial licensing — risk to the building owner</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Commercial permits not pulled or mishandled</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Work disrupts business operations without advance notice</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>No experience with commercial code inspections</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Verbal scope — billing surprises at project end</span></div>
        </div>
        <div class="sp-compare-col sp-compare-col--good reveal-right">
          <h3>Superior Home Builders</h3>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Licensed Oregon GC with commercial project experience</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>All commercial permits applied for and managed</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Scheduling coordinated around your business operations</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Commercial code inspections navigated from experience</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Written scope and estimate before any work begins</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: wide flat reverse -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,48 C480,10 960,56 1440,8 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       7. FAQ
  ═══════════════════════════════════════ -->
  <section class="sp-faq" aria-label="Commercial construction FAQ">
    <div class="container">
      <h2 class="reveal-up">Frequently asked questions about commercial construction in Mount Vernon, OR</h2>
      <p class="answer-block reveal-up reveal-delay-1">Direct answers to the questions Grant County business owners ask before starting a commercial build or tenant improvement project near me in Mount Vernon.</p>
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
  <section class="sp-final-cta" aria-label="Get a free commercial construction estimate">
    <div class="container reveal-up">
      <h2>Ready to build or expand your business facility in Grant County?</h2>
      <p>Get a free, written estimate for your commercial construction project in Mount Vernon, OR. We visit your site, review your requirements and budget, and give you real numbers — no obligation, no pressure, no guessing.</p>
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
            <img src="/assets/images/custom-home-framing.webp"
                 alt="Framing services by Superior Home Builders in Grant County Oregon"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('hammer'); ?></div>
            <h3>Framing</h3>
            <p class="service-card__desc">Residential and commercial framing for new builds, additions, and renovations throughout Eastern Oregon.</p>
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
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80"
                 alt="Custom home building by Superior Home Builders in Mount Vernon OR"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('home'); ?></div>
            <h3>Custom Home Building</h3>
            <p class="service-card__desc">Design-to-completion custom home construction throughout Grant County since 2001.</p>
            <ul>
              <li>Design-to-completion builds</li>
              <li>Site prep &amp; foundation</li>
              <li>25+ years local expertise</li>
            </ul>
            <a href="/services/custom-home-building/" class="service-card__cta">Learn more</a>
          </div>
        </article>

        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg"
                 alt="General remodeling by Superior Home Builders in Eastern Oregon"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('wrench'); ?></div>
            <h3>General Remodeling</h3>
            <p class="service-card__desc">Home remodeling from single room updates to whole-house renovations across Grant County.</p>
            <ul>
              <li>Single rooms to whole homes</li>
              <li>Additions &amp; conversions</li>
              <li>Interior finish work</li>
            </ul>
            <a href="/services/general-remodeling/" class="service-card__cta">Learn more</a>
          </div>
        </article>

      </div>
    </div>
  </section>

<script>
document.querySelectorAll('.sp-faq-question').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.sp-faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.sp-faq-item.open').forEach(i => {
      i.classList.remove('open');
      i.querySelector('.sp-faq-question').setAttribute('aria-expanded','false');
    });
    if (!isOpen) { item.classList.add('open'); btn.setAttribute('aria-expanded','true'); }
  });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
