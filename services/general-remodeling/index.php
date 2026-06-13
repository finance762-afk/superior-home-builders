<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Home Remodeling in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'General home remodeling and renovation in Mount Vernon, OR. Single rooms to whole-house renovations. Licensed contractor serving Grant County since 2001. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/general-remodeling/';
$currentPage      = 'services';
$heroImage        = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$faqs = [
  ['q' => 'What types of home remodeling does Superior Home Builders handle in Mount Vernon?',
   'a' => 'We handle every scope of home remodeling in Mount Vernon and across Grant County — single room updates, basement conversions, garage conversions, room additions, full floor-level renovations, and whole-house makeovers. Anything that involves structural work, finish carpentry, flooring, painting, or fixture replacement is in our scope. We are the general contractor of record and manage all trades.'],
  ['q' => 'How much does home remodeling cost in Grant County, OR?',
   'a' => 'Single room refreshes run $8,000–$20,000. Mid-size renovations involving multiple rooms or an addition run $25,000–$80,000. Full whole-house renovations in Eastern Oregon ranchers typically run $60,000–$150,000 or more depending on scope and finish level. Cost depends heavily on whether structural work is involved, your fixture and material selections, and the current condition of the home. We provide written estimates after an on-site visit — no guessing.'],
  ['q' => 'Can I live in my home during a remodel?',
   'a' => 'Yes for most projects. We contain work areas, maintain access to functional bathrooms and kitchen where possible, and schedule the most disruptive work in focused phases. Whole-house renovations sometimes require temporary relocation for 2–4 weeks during major demo phases. We discuss this upfront before any work begins so there are no surprises about what living through the project will look like.'],
  ['q' => 'Do you handle permits for home renovations in Oregon?',
   'a' => 'Yes — we apply for and manage all required permits. In Oregon, permits are required for structural work, electrical upgrades, plumbing changes, HVAC modifications, and changes to the building envelope. Cosmetic work like flooring, paint, and fixture replacement without moving plumbing typically does not need a permit. We know Grant County permit requirements and manage the process as part of every project.'],
  ['q' => 'How do you handle unexpected issues discovered during a renovation?',
   'a' => 'Eastern Oregon homes from the 1970s–90s regularly have surprises behind walls — knob-and-tube wiring, galvanized pipe, asbestos in insulation or floor tile, deteriorated subfloor. We give every client a contingency discussion upfront so this isn\'t a shock. When we find something, we document it, price the fix, and get your approval before proceeding. No undisclosed charges.'],
  ['q' => 'Can you phase a large renovation to fit our budget?',
   'a' => 'Yes — we frequently design renovation scopes in phases. Phase 1 might be structural work and a new bathroom; Phase 2 six months later is the kitchen. This approach lets homeowners invest on their timeline while ensuring the phases integrate properly — we design the full scope first so each phase sets up the next correctly.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',               'url' => $siteUrl . '/'],
  ['name' => 'Services',           'url' => $siteUrl . '/services'],
  ['name' => 'General Remodeling', 'url' => $siteUrl . '/services/general-remodeling/'],
]);
$serviceSchema = [
  '@context'  => 'https://schema.org',
  '@type'     => 'Service',
  '@id'       => $siteUrl . '/services/general-remodeling#service',
  'name'      => 'General Home Remodeling',
  'url'       => $siteUrl . '/services/general-remodeling/',
  'provider'  => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Mount Vernon, OR', 'addressRegion' => 'OR'],
  'description' => 'General home remodeling and renovation services in Mount Vernon, OR — single room refreshes, additions, basement and garage conversions, and whole-house renovations for Grant County homeowners. Licensed Oregon general contractor since 2001.',
];
$faqSchema   = generateFAQSchema($faqs);
$schemaGraph = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* Page-specific styles only — the shared service page template
   lives in framework.css */
.sp-hero { position: relative; min-height: 68vh; display: flex; align-items: center; background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center 35%; padding-top: var(--nav-height); }
.sp-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient( 125deg, rgba(var(--color-primary-rgb), 0.94) 0%, rgba(var(--color-secondary-rgb), 0.80) 52%, rgba(var(--color-primary-rgb), 0.60) 100% ); z-index: 1; }
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
.sp-expert-grid { display: grid; grid-template-columns: 1fr 420px; gap: var(--space-3xl); align-items: center; }
.sp-expert-photo::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb), 0.55) 100%); }
.sp-expert-photo-badge { position: absolute; bottom: var(--space-lg); right: var(--space-lg); background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading); font-weight: 800; font-size: 0.9rem; padding: var(--space-sm) var(--space-md); border-radius: 8px; z-index: 2; line-height: 1.35; }
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
  <section class="sp-hero" aria-label="Home remodeling hero">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('wrench'); ?> Home Remodeling</span>
            <h1>Home Remodeling in<br><em>Mount Vernon, OR</em></h1>
            <p class="hero-answer">We handle every scope of home remodeling in Mount Vernon—from single-room updates to whole-house renovations—with the local expertise that matters. Unlike generic contractors, we design projects specifically for Mount Vernon's unique climate and building codes, ensuring your remodeling performs reliably in our environment. As your general contractor of record, we combine transparent pricing and timeline communication with sustainable building practices that increase your home's energy efficiency. We back every project with comprehensive post-construction support and warranty coverage, because your investment deserves more than a contractor—it deserves a local partner committed to your home's long-term quality.</p>
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
            <h3>What homeowners tell us matters</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> One GC manages the full scope</li>
              <li><?php echo lucide_icon('check-circle'); ?> Written estimate — no verbal numbers</li>
              <li><?php echo lucide_icon('check-circle'); ?> Permits applied for and managed</li>
              <li><?php echo lucide_icon('check-circle'); ?> Contingency process for surprises</li>
              <li><?php echo lucide_icon('check-circle'); ?> Phasing available to fit your budget</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Schedule an On-Site Visit</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">General Remodeling</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- SVG Divider: wave slides right -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,14 C360,56 1080,0 1440,32 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       2. PROBLEM STATEMENT
  ═══════════════════════════════════════ -->
  <section class="sp-problem" aria-label="Signs you need a home remodel">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "Most Eastern Oregon homeowners prefer to renovate the home they have rather than relocate — the question is how to do it without chaos."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('users'); ?></div>
          <h3>Home that no longer fits your family</h3>
          <p>Growing families need more space, more storage, and different room configurations. What worked in 2004 doesn't work with teenage kids, a home office, or aging in place needs.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('zap'); ?></div>
          <h3>Outdated systems hiding in the walls</h3>
          <p>1980s Eastern Oregon homes often have electrical panels at capacity, galvanized supply lines, and inadequate insulation. A renovation is the right time to address these while walls are already open.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('heart'); ?></div>
          <h3>A house you want to stay in but can't love</h3>
          <p>Proximity to work and community in Grant County means many homeowners prefer to renovate rather than relocate. Transforming your current home is often better than starting over somewhere else.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('building'); ?></div>
          <h3>Investment property or estate updating</h3>
          <p>Rental properties and estate homes in Grant County often need systematic updating before they're rentable or saleable. We handle the full renovation scope efficiently under one contract.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: wide flat S-curve -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,8 C480,60 960,0 1440,44 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       3. EXPERT POSITIONING
  ═══════════════════════════════════════ -->
  <section class="sp-expert" aria-label="Why choose Superior Home Builders for home remodeling">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-content reveal-left">
          <h2>Why do Grant County homeowners trust Superior Home Builders for whole-house renovations?</h2>
          <p class="answer-block">We've been renovating homes in Mount Vernon, John Day, Canyon City, and Prairie City since 2001. Local homeowners choose us because one contractor manages the entire project — structural, finish, permits, and trade coordination — so you're not chasing down a dozen different subs with a dozen different schedules.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>General remodeling experience across every room type</strong>
                <span>We've renovated bathrooms, kitchens, living rooms, master suites, laundry rooms, basements, garages, and full houses in Eastern Oregon. No scope is unfamiliar.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Permit knowledge for Grant County</strong>
                <span>Remodeling permits in rural Oregon can be navigated more or less smoothly depending on how well you know the process. We know what Grant County requires and have the relationships to move projects through efficiently.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Upfront about what we find</strong>
                <span>Eastern Oregon homes from the 1960s–90s have surprises. We don't hide them and bill later. We open the scope conversation the moment we find something unexpected behind a wall.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
        </div>
        <div class="sp-expert-photo reveal-scale">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604103182-ak0uqe-20221109_161614_1_.jpg"
               alt="Superior Home Builders renovation work in progress at a Grant County home in Eastern Oregon"
               width="420" height="520" loading="lazy">
          <div class="sp-expert-photo-badge">25 Years<br>Grant County</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: shallow opposing curve -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,42 C360,0 1080,56 1440,18 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       4. SERVICE BREAKDOWN
  ═══════════════════════════════════════ -->
  <section class="sp-breakdown" aria-label="What's included in a home remodel">
    <div class="container">
      <div class="sp-breakdown-grid">
        <div class="reveal-left">
          <h2>What does a Superior Home Builders remodeling project actually include?</h2>
          <p class="answer-block">Every remodeling project is scoped in writing before work begins. Here's what a full-scope renovation in Mount Vernon, OR covers — from demo through final walk-through.</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Demo &amp; debris removal</li>
            <li><?php echo lucide_icon('check'); ?> Subfloor inspection &amp; repair</li>
            <li><?php echo lucide_icon('check'); ?> Framing &amp; structural work</li>
            <li><?php echo lucide_icon('check'); ?> Electrical updates</li>
            <li><?php echo lucide_icon('check'); ?> Plumbing updates</li>
            <li><?php echo lucide_icon('check'); ?> Insulation &amp; vapor barrier</li>
            <li><?php echo lucide_icon('check'); ?> Drywall &amp; texture</li>
            <li><?php echo lucide_icon('check'); ?> Flooring installation</li>
            <li><?php echo lucide_icon('check'); ?> Trim &amp; interior doors</li>
            <li><?php echo lucide_icon('check'); ?> Cabinetry &amp; built-ins</li>
            <li><?php echo lucide_icon('check'); ?> Paint (interior/exterior)</li>
            <li><?php echo lucide_icon('check'); ?> Permit application &amp; inspection</li>
          </ul>
          <a href="/contact/" class="btn btn-primary">Request a Free Estimate</a>
        </div>
        <div class="reveal-right">
          <div style="margin-bottom:var(--space-lg)">
            <h3 style="font-family:var(--font-heading);font-size:1.4rem;color:var(--color-primary);margin-bottom:var(--space-md)">How does the remodeling process work?</h3>
          </div>
          <div class="sp-process-timeline">
            <div class="sp-step">
              <div class="sp-step-num">1</div>
              <div class="sp-step-body">
                <strong>On-site assessment &amp; written scope</strong>
                <span>We walk every space, photograph existing conditions, and produce a written scope and estimate. No guessing about what's included — the scope document covers every line item before you sign anything.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">2</div>
              <div class="sp-step-body">
                <strong>Permit application &amp; scheduling</strong>
                <span>Applicable permits are applied for. Material lead times are identified. Trades are scheduled in the right sequence — structural before finish, rough-ins before drywall.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">3</div>
              <div class="sp-step-body">
                <strong>Structural &amp; rough-in work</strong>
                <span>Demo, framing, and mechanical rough-ins happen first while walls are open. Inspections are scheduled at each phase so the project moves forward with proper sign-off.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">4</div>
              <div class="sp-step-body">
                <strong>Finish work &amp; final walk-through</strong>
                <span>Flooring, cabinetry, trim, paint, and fixtures — then a detailed walk-through with the homeowner before final payment. We don't consider it done until you do.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: steep left-to-right rise -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,4 C720,64 720,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       5. PROOF / REVIEWS
  ═══════════════════════════════════════ -->
  <section class="sp-proof" aria-label="Customer reviews and project photos">
    <div class="container">
      <h2>What do Grant County homeowners say about remodeling with Superior Home Builders?</h2>
      <p class="answer-block">Real renovations in Eastern Oregon — from 1970s ranchers in Prairie City to investment properties near John Day. Every review below is from an actual Superior Home Builders project in Grant County.</p>
      <div class="sp-proof-grid reveal-up">
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"We hired Superior for a whole-house renovation on a 1970s rancher. They found issues hidden behind the walls and handled them without drama or surprise charges. Honest people doing honest work — that's rare."</p>
          <div class="sp-testimonial-meta">
            <strong>Dan &amp; Carol F.</strong>
            <span>Prairie City, OR — Whole-House Renovation</span>
          </div>
        </div>
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"New windows throughout the house made a huge difference in heating bills. The deck they built is solid — every contractor who's seen it comments on the quality. They do what they say they'll do."</p>
          <div class="sp-testimonial-meta">
            <strong>Linda H.</strong>
            <span>Canyon City, OR — Windows &amp; Deck</span>
          </div>
        </div>
      </div>
      <div class="sp-proof-photos reveal-scale">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604104586-837vw8-20221127_142618.jpg"
             alt="Home renovation in progress at a Grant County property by Superior Home Builders" width="600" height="440" loading="lazy">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604169523-2ffusu-image_13_.jpg"
             alt="Interior remodeling work completed by Superior Home Builders in Eastern Oregon" width="300" height="220" loading="lazy">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604170464-37ufln-image_14_.jpg"
             alt="Finish carpentry and interior renovation by Superior Home Builders in Mount Vernon OR" width="300" height="220" loading="lazy">
      </div>
    </div>
  </section>

  <!-- SVG Divider: gentle mid-roll -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C480,0 960,56 1440,22 L1440,56 L0,56 Z" fill="var(--color-primary)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       6. COMPARISON
  ═══════════════════════════════════════ -->
  <section class="sp-compare" aria-label="How Superior Home Builders compares to other remodeling contractors">
    <div class="container">
      <h2 class="reveal-up">How does Superior Home Builders handle remodeling differently than other contractors?</h2>
      <p class="answer-block reveal-up reveal-delay-1">The difference between a smooth renovation and a frustrating one usually comes down to process. Here's what sets us apart on home remodeling projects in Mount Vernon and Grant County.</p>
      <div class="sp-compare-table">
        <div class="sp-compare-col sp-compare-col--bad reveal-left">
          <h3>Typical remodeling contractor</h3>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Scope creep — work added verbally, billed at the end</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Permits skipped to save time</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Multiple subs who don't coordinate with each other</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Surprise charges when hidden conditions are found</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Work starts before materials are confirmed available</span></div>
        </div>
        <div class="sp-compare-col sp-compare-col--good reveal-right">
          <h3>Superior Home Builders</h3>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Written scope — any additions require a signed change order</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>All required permits pulled before work begins</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>One GC manages the full trade sequence</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Contingency discussed upfront; surprises documented before proceeding</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Material lead times confirmed before work phases are scheduled</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: deep opposite roll -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,44 C360,8 1080,56 1440,12 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       7. FAQ
  ═══════════════════════════════════════ -->
  <section class="sp-faq" aria-label="Home remodeling FAQ">
    <div class="container">
      <h2 class="reveal-up">Frequently asked questions about home remodeling in Mount Vernon, OR</h2>
      <p class="answer-block reveal-up reveal-delay-1">Straight answers to the questions Grant County homeowners ask most before starting a renovation project with Superior Home Builders.</p>
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
  <section class="sp-final-cta" aria-label="Get a free home remodeling estimate">
    <div class="container reveal-up">
      <h2>Ready to renovate your home in Mount Vernon?</h2>
      <p>Get a free, written estimate from Eastern Oregon's most experienced residential renovation contractor. We visit your home near me in Mount Vernon, assess every space, and give you real numbers with no obligation and no pressure.</p>
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
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604143637-sycb6k-image.jpg"
                 alt="Bathroom remodeling in Mount Vernon OR by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('bath'); ?></div>
            <h3>Bathroom Remodeling</h3>
            <p class="service-card__desc">Full bathroom renovations from tile and fixtures to custom walk-in showers.</p>
            <ul>
              <li>Tile fixtures &amp; plumbing</li>
              <li>Custom walk-in showers</li>
              <li>Full vanity &amp; lighting</li>
            </ul>
            <a href="/services/bathroom-remodeling/" class="service-card__cta">Learn more</a>
          </div>
        </article>

        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604145059-2lrm2s-image_1_.jpg"
                 alt="Kitchen remodeling by Superior Home Builders in Grant County Oregon"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('utensils'); ?></div>
            <h3>Kitchen Remodeling</h3>
            <p class="service-card__desc">Kitchen renovations from cabinet replacement to full layout redesigns.</p>
            <ul>
              <li>Custom cabinetry &amp; islands</li>
              <li>Countertop &amp; appliance install</li>
              <li>Full layout redesigns</li>
            </ul>
            <a href="/services/kitchen-remodeling/" class="service-card__cta">Learn more</a>
          </div>
        </article>

        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80"
                 alt="Custom home building in Mount Vernon OR by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('home'); ?></div>
            <h3>Custom Home Building</h3>
            <p class="service-card__desc">Design-to-completion custom home construction throughout Grant County.</p>
            <ul>
              <li>Design-to-completion builds</li>
              <li>Site prep &amp; foundation</li>
              <li>25+ years local expertise</li>
            </ul>
            <a href="/services/custom-home-building/" class="service-card__cta">Learn more</a>
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
