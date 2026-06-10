<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Framing Contractor in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Expert residential and commercial framing in Mount Vernon, OR. New construction, additions, and structural work. Licensed general contractor serving Grant County since 2004. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/framing/';
$currentPage      = 'services';
$heroImage        = $siteUrl . '/assets/images/custom-home-framing.webp';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$faqs = [
  ['q'=>'What does a framing contractor do on a new home build in Mount Vernon, OR?',
   'a'=>'A framing contractor builds the structural skeleton — walls, floors, and roof — that every other trade attaches to. In a typical new build, framing takes 2–4 weeks for a 1,500–2,500 sq ft home and is the most labor-intensive phase. Everything from plumbing layout to cabinet placement depends on framing being square, level, and on plan.'],
  ['q'=>'How long does residential framing take in Grant County?',
   'a'=>'A standard single-story home takes 2–3 weeks of framing; two-story homes run 3–5 weeks; additions vary from 1–3 weeks depending on scope. Timeline depends on plan complexity, weather, and inspector availability for the rough framing inspection — all factors we account for in the project schedule we provide before work starts.'],
  ['q'=>'What\'s the difference between stick framing and engineered lumber?',
   'a'=>'Stick framing uses dimensional lumber cut to length on site. Engineered lumber — LVL beams, I-joists, and rim board — is stronger, more dimensionally stable, and resists warping in Eastern Oregon\'s climate swings. We use both depending on span, load, and budget, always per structural design or IRC span tables.'],
  ['q'=>'Do I need an engineer for framing a room addition in Oregon?',
   'a'=>'Additions involving load-bearing work or over certain square footage typically require engineered drawings in Oregon. The Grant County building department specifies requirements when the permit is applied for. We have established relationships with local structural engineers and facilitate the process — you don\'t have to navigate that yourself.'],
  ['q'=>'Can you frame an addition to my existing Grant County home?',
   'a'=>'Yes — additions are a significant part of our framing work. We assess the existing structure, determine how to tie in properly at the foundation and roof lines, frame the addition to match the existing design, and coordinate with rough plumbing and electrical before walls are closed. The tie-in is the most critical part, and it\'s where experience matters most.'],
  ['q'=>'What is included in a framing-only contract versus full general contractor scope?',
   'a'=>'Framing-only covers structural assembly — walls, floors, roof, sheathing, and rough openings for windows and doors. Full GC scope adds foundation coordination, mechanical rough-ins, insulation, and all finish trades under one contract. We offer both depending on your project structure, and we can discuss which makes sense for your situation during the initial consultation.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name'=>'Home',     'url'=> $siteUrl . '/'],
  ['name'=>'Services', 'url'=> $siteUrl . '/services'],
  ['name'=>'Framing',  'url'=> $siteUrl . '/services/framing/'],
]);
$serviceSchema = [
  '@context' => 'https://schema.org',
  '@type'    => 'Service',
  '@id'      => $siteUrl . '/services/framing#service',
  'name'     => 'Framing',
  'url'      => $siteUrl . '/services/framing/',
  'provider' => ['@type'=>'HomeAndConstructionBusiness','@id'=> $siteUrl . '/#organization'],
  'areaServed' => ['@type'=>'Place','name'=>'Mount Vernon, OR','addressRegion'=>'OR'],
  'description' => 'Expert residential and commercial framing services in Mount Vernon, OR. New construction, additions, load-bearing wall modifications, and structural framing for Grant County homeowners and businesses.',
];
$faqSchema = generateFAQSchema($faqs);
$schemaGraph = ['@context'=>'https://schema.org','@graph'=>[$breadcrumbs,$serviceSchema,$faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* Page-specific styles only — the shared service page template
   lives in framework.css */
.sp-hero { position: relative; min-height: 68vh; display: flex; align-items: center; background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center 35%; padding-top: var(--nav-height); }
.sp-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(125deg, rgba(var(--color-primary-rgb),0.94) 0%, rgba(var(--color-secondary-rgb),0.82) 50%, rgba(var(--color-primary-rgb),0.60) 100%); z-index: 1; }
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
.sp-expert-grid { display: grid; grid-template-columns: 1fr 440px; gap: var(--space-3xl); align-items: center; }
.sp-expert-photo { position: relative; border-radius: 16px; overflow: hidden; aspect-ratio: 4 / 5; order: 2; }
.sp-expert-photo::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb),0.55) 100%); }
.sp-expert-photo-badge { position: absolute; bottom: var(--space-lg); left: var(--space-lg); background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading); font-weight: 800; font-size: 0.95rem; padding: var(--space-sm) var(--space-md); border-radius: 8px; z-index: 2; }
.sp-expert-content { order: 1; }
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
  .sp-expert-photo { aspect-ratio: 16 / 9; order: 1; }
  .sp-expert-content { order: 2; }
  .services-grid { grid-template-columns: 1fr 1fr; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ═══════════════════════════════════════
       1. HERO
  ═══════════════════════════════════════ -->
  <section class="sp-hero" aria-label="Framing contractor hero">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><i data-lucide="hammer"></i> Framing</span>
            <h1>Framing Contractor in<br><em>Mount Vernon, OR</em></h1>
            <p class="hero-answer">In Mount Vernon, our framing contractors do more than build walls, floors, and roofs—we engineer the structural foundation with deep expertise in the region's unique climate and building codes. We understand Mount Vernon's freeze-thaw cycles and heavy precipitation patterns, which demand precision framing, proper moisture barriers, and strategic material selection from the ground up. Every frame we build is customized to your home's design and engineered for durability in our local climate. We bring transparent timelines, sustainable building practices, and post-build support to every project, so your frame doesn't just stand square and level—it stands the test of Mount Vernon's seasons.</p>
            <div class="sp-hero-trust">
              <span class="sp-hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
              <span class="sp-hero-trust-item"><i data-lucide="calendar"></i> Est. 2004</span>
              <span class="sp-hero-trust-item"><i data-lucide="file-text"></i> Free Written Estimate</span>
            </div>
            <div class="sp-hero-actions">
              <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate</a>
              <?php if (!empty($phone)): ?>
              <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><i data-lucide="phone"></i> Call Now</a>
              <?php endif; ?>
            </div>
          </div>
          <div class="sp-hero-card">
            <h3>Why builders choose our framing crews</h3>
            <ul>
              <li><i data-lucide="check-circle"></i> Frame checked square, level, and plumb</li>
              <li><i data-lucide="check-circle"></i> Engineered lumber where spans demand it</li>
              <li><i data-lucide="check-circle"></i> Rough framing inspection coordinated</li>
              <li><i data-lucide="check-circle"></i> Full GC scope available if needed</li>
              <li><i data-lucide="check-circle"></i> 20+ years in Eastern Oregon</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Schedule a Consultation</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Framing</span>
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
  <section class="sp-problem" aria-label="Signs you need framing work">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "Every finish trade — tile, cabinets, drywall, trim — builds on top of the frame. When framing is off, everything downstream is harder."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><i data-lucide="plus-square"></i></div>
          <h3>Planning a room addition</h3>
          <p>Additions need proper structural tie-in to the existing frame. Amateur framing at the connection point leads to settling, squeaking, and code violations that show up years later.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><i data-lucide="alert-triangle"></i></div>
          <h3>Sagging floors or walls</h3>
          <p>Floor joist failure, rim board rot, or undersized beams show up as visible deflection. These require proper structural framing repair — not cosmetic fixes or shimming.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><i data-lucide="layout"></i></div>
          <h3>Load-bearing wall removal</h3>
          <p>Opening a floor plan requires a properly engineered header or beam. An undersized header compresses, causing doors to stick, ceilings to crack, and eventually structural failure.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><i data-lucide="home"></i></div>
          <h3>New construction from the ground up</h3>
          <p>Quality framing sets the precision of every trade that follows. An out-of-square frame means crooked tile, sticking doors, and gaps in drywall that no amount of finish work can fully hide.</p>
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
  <section class="sp-expert" aria-label="Why choose Superior Home Builders for framing">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-content reveal-left">
          <h2>Why do Grant County builders and homeowners trust Superior Home Builders for structural framing?</h2>
          <p class="answer-block">We've been framing structures in Eastern Oregon since 2004 — homes, additions, and commercial buildings across Grant County. Our crews understand that framing precision at 1/8" tolerances isn't perfectionism — it's what makes every trade after ours work cleanly. We read structural drawings, coordinate with engineers, and manage rough inspections so you don't have to.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Structural precision matters to every trade that follows</strong>
                <span>Framing is where square, level, and plumb are established. Our crews work to 1/8" tolerances that make tile setters, cabinetmakers, and trim carpenters' jobs clean and predictable.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>20+ years framing in Eastern Oregon's climate</strong>
                <span>We understand how Eastern Oregon's dramatic temperature swings affect lumber. We specify the right species, grade, and moisture content to minimize post-framing movement as the structure settles.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>We read structural drawings and coordinate inspections</strong>
                <span>We review plans with structural engineers when required, interpret span tables correctly, and schedule rough framing inspections with the Grant County building department — without you chasing anyone down.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
        </div>
        <div class="sp-expert-photo reveal-scale">
          <img src="/assets/images/framing-crew-mount-vernon.webp"
               alt="Superior Home Builders framing crew working on a residential structure in Mount Vernon Oregon"
               width="440" height="550" loading="lazy">
          <div class="sp-expert-photo-badge">Serving Grant County Since 2004</div>
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
  <section class="sp-breakdown" aria-label="What's included in a framing project">
    <div class="container">
      <div class="sp-breakdown-grid">
        <div class="reveal-left">
          <h2>What does Superior Home Builders include in a residential framing contract?</h2>
          <p class="answer-block">Every framing project in Mount Vernon, OR is scoped to your specific plans. Here's what a full new-construction framing scope covers — from sill plate to sheathing.</p>
          <ul class="sp-includes-list">
            <li><i data-lucide="check"></i> Blueprint review &amp; layout</li>
            <li><i data-lucide="check"></i> Sill plate installation</li>
            <li><i data-lucide="check"></i> Floor joist &amp; subfloor system</li>
            <li><i data-lucide="check"></i> Exterior wall framing</li>
            <li><i data-lucide="check"></i> Interior wall framing</li>
            <li><i data-lucide="check"></i> Structural header installation</li>
            <li><i data-lucide="check"></i> Roof framing (rafters/trusses)</li>
            <li><i data-lucide="check"></i> Sheathing (OSB/plywood)</li>
            <li><i data-lucide="check"></i> Window &amp; door rough openings</li>
            <li><i data-lucide="check"></i> Stair framing</li>
            <li><i data-lucide="check"></i> Blocking &amp; backing</li>
            <li><i data-lucide="check"></i> Rough framing inspection coordination</li>
          </ul>
          <a href="/contact/" class="btn btn-primary">Request a Free Estimate</a>
        </div>
        <div class="reveal-right">
          <div style="margin-bottom:var(--space-lg)">
            <h3 style="font-family:var(--font-heading);font-size:1.4rem;font-weight:800;color:var(--color-primary);margin-bottom:var(--space-md)">How does the framing process work on a new build?</h3>
          </div>
          <div class="sp-process-timeline">
            <div class="sp-step">
              <div class="sp-step-num">1</div>
              <div class="sp-step-body">
                <strong>Plan review &amp; layout</strong>
                <span>We review your structural drawings, lay out the floor plan with precision, and verify the foundation is square and ready for framing to begin.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">2</div>
              <div class="sp-step-body">
                <strong>Floor system &amp; walls</strong>
                <span>Sill plates set, floor system framed with joists and subfloor, then exterior and interior walls raised and braced in sequence per the framing plan.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">3</div>
              <div class="sp-step-body">
                <strong>Roof system</strong>
                <span>Roof structure — rafters or engineered trusses — installed, sheathed, and prepared for the roofing contractor. Ridge, hips, and valleys built to plan.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">4</div>
              <div class="sp-step-body">
                <strong>Rough inspection &amp; handoff</strong>
                <span>We schedule the rough framing inspection with the Grant County building department and coordinate handoff to plumbing, HVAC, and electrical rough-in trades.</span>
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
  <section class="sp-proof" aria-label="Customer reviews and framing project photos">
    <div class="container">
      <h2>What do Grant County homeowners say about our framing work?</h2>
      <p class="answer-block">Real projects from John Day to Mount Vernon. Both reviews below are from clients with direct experience watching our framing crews work on their builds.</p>
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
          <p>"Used them to build out an addition on our shop. They worked around our business hours, never held us up, and delivered exactly what was drawn. The framing on the addition tied in perfectly to the original structure."</p>
          <div class="sp-testimonial-meta">
            <strong>Greg O.</strong>
            <span>Mount Vernon, OR — Commercial Addition</span>
          </div>
        </div>
      </div>
      <div class="sp-proof-photos reveal-scale">
        <img src="/assets/images/custom-home-framing.webp"
             alt="Residential framing in progress by Superior Home Builders in Mount Vernon Oregon" width="600" height="440" loading="lazy">
        <img src="/assets/images/framing-crew-mount-vernon.webp"
             alt="Structural wall framing detail on a Grant County new construction project" width="300" height="220" loading="lazy">
        <img src="/assets/images/custom-home-framing.webp"
             alt="Roof framing and sheathing on a Superior Home Builders project in Eastern Oregon" width="300" height="220" loading="lazy">
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
  <section class="sp-compare" aria-label="Why choose Superior Home Builders for framing over other contractors">
    <div class="container">
      <h2 class="reveal-up">How does framing from Superior Home Builders differ from a typical crew?</h2>
      <p class="answer-block reveal-up reveal-delay-1">Framing is often treated as a commodity — hire whoever is cheapest and fastest. The problems show up later, in every trade that builds on top of it. Here's what separates our approach.</p>
      <div class="sp-compare-table">
        <div class="sp-compare-col sp-compare-col--bad reveal-left">
          <h3>Typical framing crew</h3>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Frame is out of square — causes problems for every downstream trade</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Undersized headers over door and window openings</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Green lumber used without accounting for shrinkage and movement</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>No blocking installed for future grab bars or fixtures</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Rough framing inspection not scheduled — delays all mechanical trades</span></div>
        </div>
        <div class="sp-compare-col sp-compare-col--good reveal-right">
          <h3>Superior Home Builders</h3>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Frame checked for square, level, and plumb at every stage</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Headers sized per structural design or IRC span tables</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Proper species and grade specified for Eastern OR's climate</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Blocking installed for future needs per plan and owner intent</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Rough framing inspection coordinated before walls close</span></div>
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
  <section class="sp-faq" aria-label="Framing FAQ">
    <div class="container">
      <h2 class="reveal-up">Frequently asked questions about framing in Mount Vernon, OR</h2>
      <p class="answer-block reveal-up reveal-delay-1">Answers to the questions Grant County homeowners and builders ask most before starting a framing project — new construction or addition.</p>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up" id="faq-<?php echo $i; ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-ans-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <i data-lucide="plus-circle"></i>
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
  <section class="sp-final-cta" aria-label="Get a free framing estimate">
    <div class="container reveal-up">
      <h2>Ready to start framing in Mount Vernon, OR?</h2>
      <p>Get a free, written estimate from Eastern Oregon's most experienced framing and general contracting team. We visit your site, review the plans, and give you real numbers — no obligation, no pressure.</p>
      <div class="cta-row">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-secondary btn-lg"><i data-lucide="phone"></i> Call Now</a>
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
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604304191-9h3673-466678023_10160894523422734_2342757114398857707_n.jpg"
                 alt="Custom home building in Mount Vernon OR by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="home"></i></div>
            <h3>Custom Home Building</h3>
            <ul>
              <li>Design-to-completion builds</li>
              <li>Site prep &amp; foundation</li>
              <li>20+ years local expertise</li>
            </ul>
            <a href="/services/custom-home-building/" class="service-card__cta">Learn more</a>
          </div>
        </article>

        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="/assets/images/custom-deck-construction.webp"
                 alt="Custom deck construction in Grant County Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="tree-pine"></i></div>
            <h3>Decks</h3>
            <ul>
              <li>Composite &amp; pressure-treated</li>
              <li>Railings, stairs &amp; pergolas</li>
              <li>Built for Eastern OR winters</li>
            </ul>
            <a href="/services/decks/" class="service-card__cta">Learn more</a>
          </div>
        </article>

        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="/assets/images/commercial-construction-eastern-oregon.webp"
                 alt="Commercial construction project by Superior Home Builders in Eastern Oregon"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="building-2"></i></div>
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
