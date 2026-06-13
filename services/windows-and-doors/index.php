<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Windows and Doors in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Window replacement and door installation in Mount Vernon, OR. Energy-efficient vinyl, wood, and fiberglass windows for Eastern Oregon\'s climate. Licensed contractor serving Grant County since 2001. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/windows-and-doors/';
$currentPage      = 'services';
$heroImage        = '/assets/images/window-installation-mount-vernon.webp';
$heroImagePreload = $heroImage;
$ogImage          = $siteUrl . $heroImage;  // og:image stays absolute

$faqs = [
  ['q' => 'How much does window replacement cost in Mount Vernon, OR?',
   'a' => 'Vinyl double-pane window replacement in the Mount Vernon area typically runs $400–$900 per window installed, including labor and trim-out. A full-house replacement with 10–15 windows comes to $6,000–$18,000 depending on window count, style selection, and whether any openings need modification. We provide a written per-window estimate after measuring on-site.'],
  ['q' => 'How long does window installation take in Grant County?',
   'a' => 'Most homes with 8–15 windows are completed in 1–3 days. A single entry door replacement is typically a half-day install. Larger projects combining windows and multiple door units may run 2–4 days. Timing depends on the number of openings, whether framing work is required, and custom sizing lead times.'],
  ['q' => 'What types of windows do you install in Eastern Oregon?',
   'a' => 'We install vinyl, wood, clad-wood, and fiberglass frame windows. For Eastern Oregon\'s climate — cold winters and significant temperature swings — we specify double-pane low-E glass with argon fill. U-factor and solar heat gain coefficient (SHGC) selection matters for Grant County homes: lower U-factor for heat retention, moderate SHGC to capture winter solar gain. We help you choose the right spec for your home\'s orientation and exposure.'],
  ['q' => 'Do I need a permit for window replacement in Oregon?',
   'a' => 'Like-for-like replacement in the same rough opening generally does not require a permit in Oregon. Enlarging an existing opening, creating a new opening, or making structural modifications to the header does require a building permit. Superior Home Builders handles the permit application, structural drawings if required, and all inspections as part of the project.'],
  ['q' => 'What energy savings can I expect from new windows in Eastern Oregon?',
   'a' => 'Properly specified replacement windows can reduce heating costs 15–25% in Eastern Oregon homes, particularly when replacing failed-seal double-pane or single-pane windows. Low-E glass with argon fill dramatically reduces conductive heat loss in Grant County\'s cold winters. The return on investment is faster here than in the mild Willamette Valley due to the higher heating load.'],
  ['q' => 'Can you replace an exterior door at the same time as windows?',
   'a' => 'Yes — combining window and door replacement on a single project is common and cost-effective. One mobilization, one permit (when required), and one crew finish the entire scope. We install entry doors, sliding patio doors, French doors, and garage side-entry doors. If you\'re planning an exterior refresh, combining everything into one project makes sense.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',              'url' => $siteUrl . '/'],
  ['name' => 'Services',          'url' => $siteUrl . '/services'],
  ['name' => 'Windows and Doors', 'url' => $siteUrl . '/services/windows-and-doors/'],
]);
$serviceSchema = [
  '@context'  => 'https://schema.org',
  '@type'     => 'Service',
  '@id'       => $siteUrl . '/services/windows-and-doors#service',
  'name'      => 'Windows and Doors',
  'url'       => $siteUrl . '/services/windows-and-doors/',
  'provider'  => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed' => ['@type' => 'Place', 'name' => 'Mount Vernon, OR', 'addressRegion' => 'OR'],
  'description' => 'Window replacement and door installation services in Mount Vernon, OR. Vinyl, wood, and fiberglass window options with low-E argon glass specified for Eastern Oregon\'s heating-dominated climate. Serving Grant County homeowners since 2001.',
];
$faqSchema   = generateFAQSchema($faqs);
$schemaGraph = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* Page-specific styles only — the shared service page template
   lives in framework.css */
.sp-hero { position: relative; min-height: 65vh; display: flex; align-items: center; background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center 40%; padding-top: var(--nav-height); }
.sp-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient( 110deg, rgba(var(--color-primary-rgb), 0.93) 0%, rgba(var(--color-secondary-rgb), 0.80) 55%, rgba(var(--color-primary-rgb), 0.58) 100% ); z-index: 1; }
.sp-hero-layout { display: grid; grid-template-columns: 1fr 380px; gap: var(--space-3xl); align-items: center; }
.sp-hero-eyebrow { display: inline-flex; align-items: center; gap: var(--space-xs); background: rgba(var(--color-accent-rgb), 0.15); border: 1px solid rgba(var(--color-accent-rgb), 0.35); color: var(--color-accent); font-size: var(--fs-xs); font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 5px var(--space-md); border-radius: 100px; margin-bottom: var(--space-md); }
.sp-hero h1 { font-family: var(--font-heading); font-size: var(--fs-h1); font-weight: 800; line-height: 1.05; color: #fff; text-wrap: balance; margin-bottom: var(--space-lg); }
.sp-hero p.hero-answer { font-size: clamp(1rem, 1.3vw, 1.15rem); color: rgba(255, 255, 255, 0.85); max-width: 60ch; line-height: 1.75; margin-bottom: var(--space-xl); }
.sp-hero-trust-item { display: flex; align-items: center; gap: var(--space-xs); font-size: var(--fs-sm); color: rgba(255, 255, 255, 0.75); }
.sp-hero-card { background: rgba(255, 255, 255, 0.07); border: 1px solid rgba(255, 255, 255, 0.15); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border-radius: 16px; padding: var(--space-2xl); color: #fff; }
.sp-hero-card h3 { font-family: var(--font-heading); font-size: 1.3rem; margin-bottom: var(--space-md); text-wrap: balance; }
.sp-hero-card ul li { display: flex; align-items: center; gap: var(--space-sm); font-size: var(--fs-sm); color: rgba(255, 255, 255, 0.82); }
.sp-hero-card ul li svg { color: var(--color-accent); flex-shrink: 0; }
.sp-hero-breadcrumb { margin-top: var(--space-2xl); font-size: var(--fs-xs); color: rgba(255, 255, 255, 0.50); }
.sp-hero-breadcrumb a { color: rgba(255, 255, 255, 0.65); }
.sp-divider { display: block; width: 100%; overflow: hidden; line-height: 0; }
.sp-divider svg { display: block; width: 100%; }
.sp-problem-pull { font-family: var(--font-heading); font-size: clamp(1.5rem, 2.8vw, 2.4rem); font-weight: 700; font-style: italic; color: var(--color-primary); border-left: 4px solid var(--color-accent); padding-left: var(--space-xl); max-width: 70ch; margin: 0 auto var(--space-3xl); line-height: 1.4; text-wrap: balance; }
.sp-bento-card p { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }
.sp-expert-grid { display: grid; grid-template-columns: 1fr 420px; gap: var(--space-3xl); align-items: center; }
.sp-expert-photo::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb), 0.52) 100%); }
.sp-expert-photo-badge { position: absolute; bottom: var(--space-lg); left: var(--space-lg); background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading); font-weight: 800; font-size: 0.95rem; padding: var(--space-sm) var(--space-md); border-radius: 8px; z-index: 2; }
.sp-expert-content h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); }
.sp-expert-point div strong { display: block; font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 2px; }
.sp-expert-point div span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.55; }
.sp-breakdown h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); }
.sp-includes-list li svg { color: var(--color-accent-dark); flex-shrink: 0; }
.sp-process-timeline::before { content: ''; position: absolute; left: 24px; top: 48px; bottom: 48px; width: 2px; background: linear-gradient(180deg, var(--color-accent) 0%, rgba(var(--color-accent-rgb), 0.2) 100%); }
.sp-step-body span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }
.sp-proof h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-align: center; text-wrap: balance; margin-bottom: var(--space-md); }
.sp-compare h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: #fff; text-align: center; text-wrap: balance; margin-bottom: var(--space-md); }
.sp-compare p.answer-block { font-size: var(--fs-body); color: rgba(255, 255, 255, 0.75); text-align: center; max-width: 58ch; margin: 0 auto var(--space-3xl); line-height: 1.75; }
.sp-compare-col--bad { background: rgba(255, 255, 255, 0.06); border: 1px solid rgba(255, 255, 255, 0.12); }
.sp-compare-col--good { background: rgba(var(--color-accent-rgb), 0.12); border: 1px solid rgba(var(--color-accent-rgb), 0.30); }
.sp-compare-col h3 { font-family: var(--font-heading); font-size: 1.1rem; margin-bottom: var(--space-lg); color: #fff; text-wrap: balance; }
.sp-compare-row { display: flex; align-items: flex-start; gap: var(--space-sm); padding: var(--space-sm) 0; border-bottom: 1px solid rgba(255, 255, 255, 0.07); }
.sp-compare-row span { font-size: var(--fs-sm); color: rgba(255, 255, 255, 0.75); line-height: 1.55; }
.sp-compare-col--good .sp-compare-row span { color: rgba(255, 255, 255, 0.90); }
.sp-faq h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-align: center; text-wrap: balance; margin-bottom: var(--space-md); }
.sp-final-cta h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); }
.sp-related h2 { font-family: var(--font-heading); font-size: var(--fs-h3); font-weight: 800; color: var(--color-primary); text-align: center; text-wrap: balance; margin-bottom: var(--space-3xl); }
@media (max-width: 768px) {
  .services-grid { grid-template-columns: 1fr 1fr; }
}
.service-card-with-image { border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; transition: transform var(--transition), box-shadow var(--transition); }
.service-card-with-image:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.service-card__image { position: relative; aspect-ratio: 5/3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; display: block; }
.service-card__body { padding: var(--space-lg) var(--space-md) var(--space-md); text-align: center; display: flex; flex-direction: column; align-items: center; gap: var(--space-sm); position: relative; flex: 1; }
.service-card__icon { width: 56px; height: 56px; border-radius: 50%; background: #fff; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin-top: -44px; margin-bottom: var(--space-xs); color: var(--color-accent-dark); flex-shrink: 0; }
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { font-family: var(--font-heading); color: var(--color-primary); margin: 0; font-size: 1.25rem; }
.service-card-with-image ul { list-style: none; padding: 0; margin: var(--space-xs) 0 0; width: 100%; text-align: left; display: flex; flex-direction: column; gap: var(--space-xs); border-top: 1px solid var(--color-border); padding-top: var(--space-md); }
.service-card-with-image ul li { font-size: var(--fs-sm); color: var(--color-text); padding-left: 1.25rem; position: relative; }
.service-card-with-image ul li::before { content: "•"; color: var(--color-accent-dark); font-weight: 700; position: absolute; left: .25rem; }
.service-card__cta { margin-top: auto; padding: var(--space-sm) 0 0; color: var(--color-secondary); font-weight: 700; font-size: var(--fs-sm); border-top: 1px solid var(--color-border); width: 100%; text-align: center; transition: color var(--transition); }
.service-card__cta::after { content: " →"; }
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
  <section class="sp-hero" aria-label="Windows and doors hero">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('door-open'); ?> Windows &amp; Doors</span>
            <h1>Windows &amp; Doors in<br><em>Mount Vernon, OR</em></h1>
            <p class="hero-answer">Mount Vernon windows face demanding Pacific Northwest weather—heavy rain, temperature swings, and moisture challenges unique to our region. Rather than cookie-cutter replacements, Superior Home Builders customizes each window solution for your home's specific orientation, climate exposure, and architectural style. We pair energy-efficient frames suited to Mount Vernon's climate with personalized design consultation, so your windows reduce heating costs year-round while matching your home's character. Our on-site measurement and transparent per-window pricing means no surprises, and our post-installation support ensures your investment performs for decades in our challenging local conditions.</p>
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
            <h3>Why homeowners choose us for windows &amp; doors</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> On-site measurement before ordering</li>
              <li><?php echo lucide_icon('check-circle'); ?> Interior &amp; exterior trim included</li>
              <li><?php echo lucide_icon('check-circle'); ?> Low-E argon glass for Eastern OR</li>
              <li><?php echo lucide_icon('check-circle'); ?> Permits handled when required</li>
              <li><?php echo lucide_icon('check-circle'); ?> 25+ years serving Grant County</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Schedule a Consultation</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Windows &amp; Doors</span>
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
       2. PROBLEM STATEMENT
  ═══════════════════════════════════════ -->
  <section class="sp-problem" aria-label="Signs you need new windows or doors">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "A window that leaks air in January doesn't just cost you comfort — it costs you money every month the heating bill is due."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('wind'); ?></div>
          <h3>Drafts and air infiltration</h3>
          <p>If you feel cold air at the sash or frame edge in winter, the weatherstripping or seal has failed. No amount of caulking fixes a window that's past its service life — replacement is the only lasting solution.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('cloud-fog'); ?></div>
          <h3>Condensation between panes</h3>
          <p>Fog or moisture between the glass layers means the insulated glass unit seal has failed. The window is now a single-pane unit thermally — not insulating at all — and needs to be replaced, not resealed.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('move-horizontal'); ?></div>
          <h3>Sticking or difficult operation</h3>
          <p>Windows that stick, slam, or won't lock properly signal warped frames or hardware failure. In Eastern Oregon's freeze-thaw climate, wood frames that aren't properly protected expand and contract until they bind permanently.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('droplets'); ?></div>
          <h3>Visible decay or water damage</h3>
          <p>Rotted wood frames, water staining on sills, or paint that won't stay on the interior trim below a window are all signs of a failed seal or failed flashing. The longer this goes unaddressed, the more wall framing is compromised.</p>
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
       3. EXPERT POSITIONING (photo on RIGHT)
  ═══════════════════════════════════════ -->
  <section class="sp-expert" aria-label="Why choose Superior Home Builders for windows and doors">
    <div class="container">
      <!-- Content left, photo right -->
      <div class="sp-expert-grid">
        <div class="sp-expert-content reveal-left">
          <h2>Why do Eastern Oregon homeowners trust Superior Home Builders for window and door work?</h2>
          <p class="answer-block">We spec windows for Grant County's climate — not Portland's. Eastern Oregon homes face heating-dominated winters, intense summer UV, and significant temperature swing. The right U-factor and SHGC spec makes a real difference in your heating bills. We've been doing this work in Mount Vernon since 2001, and we trim out every opening inside and out.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Eastern Oregon climate expertise</strong>
                <span>We know what U-factor and SHGC values actually matter for Grant County winters — not what a big-box store recommends for the Willamette Valley. Argon fill, low-E coatings, and proper frame material selection are decisions that compound over the life of the window.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Full trim-out included</strong>
                <span>We don't just pop in the window and hand you a caulk gun. Interior and exterior trim, casing, and paint prep are part of every installation. The finish work is what separates a complete job from a rough replacement.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Combination projects welcome</strong>
                <span>Many Mount Vernon homeowners combine a window replacement with a door upgrade or exterior refresh — one mobilization, one permit process, one crew. It's more cost-effective and less disruptive than splitting the work across contractors.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
        </div>
        <div class="sp-expert-photo reveal-scale">
          <img src="/assets/images/new-windows-mount-vernon.webp"
               alt="Newly installed windows on a Mount Vernon Oregon home by Superior Home Builders showing exterior trim and framing detail"
               width="420" height="520" loading="lazy">
          <div class="sp-expert-photo-badge">Grant County Since 2001</div>
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
       4. SERVICE BREAKDOWN
  ═══════════════════════════════════════ -->
  <section class="sp-breakdown" aria-label="What's included in window and door replacement">
    <div class="container">
      <div class="sp-breakdown-grid">
        <div class="reveal-left">
          <h2>What does a window and door replacement project include in Mount Vernon, OR?</h2>
          <p class="answer-block">Every window and door project is scoped to your home's specific needs. Here is what a complete window replacement or door installation by Superior Home Builders includes from start to final inspection.</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Old window/door removal</li>
            <li><?php echo lucide_icon('check'); ?> Frame inspection &amp; repair</li>
            <li><?php echo lucide_icon('check'); ?> New window installation</li>
            <li><?php echo lucide_icon('check'); ?> Exterior trim &amp; flashing</li>
            <li><?php echo lucide_icon('check'); ?> Interior trim &amp; casing</li>
            <li><?php echo lucide_icon('check'); ?> Weatherstripping &amp; air sealing</li>
            <li><?php echo lucide_icon('check'); ?> Entry door installation</li>
            <li><?php echo lucide_icon('check'); ?> Door hardware &amp; lockset</li>
            <li><?php echo lucide_icon('check'); ?> Sliding patio doors</li>
            <li><?php echo lucide_icon('check'); ?> Interior/exterior paint prep</li>
            <li><?php echo lucide_icon('check'); ?> Cleanup &amp; debris removal</li>
            <li><?php echo lucide_icon('check'); ?> Permit application (when required)</li>
          </ul>
        </div>
        <div class="reveal-right">
          <h2 style="font-size:var(--fs-h3)">How does the window replacement process work?</h2>
          <p class="answer-block" style="margin-bottom:var(--space-lg)">Four clear steps from first visit to finished install.</p>
          <div class="sp-process-timeline">
            <div class="sp-step">
              <span class="sp-step-num">1</span>
              <div class="sp-step-body">
                <strong>Measure &amp; product selection</strong>
                <span>We visit your home to measure every rough opening and help you choose the right window style, glass type, and frame material for Grant County's climate. You leave the consultation with a line-item written estimate.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">2</span>
              <div class="sp-step-body">
                <strong>Order &amp; scheduling</strong>
                <span>Windows are ordered to your exact rough opening dimensions. Typical lead time is 2–4 weeks depending on custom sizing. We confirm your install date before the order ships.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">3</span>
              <div class="sp-step-body">
                <strong>Installation day</strong>
                <span>Old units come out, frames are inspected and repaired where needed, new units are set and flashed, then trimmed interior and exterior. Most homes are completed in 1–2 days depending on window count.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">4</span>
              <div class="sp-step-body">
                <strong>Weatherizing &amp; final inspection</strong>
                <span>Air sealing is verified, interior and exterior trim is finished, the site is cleaned, and a permit inspection is scheduled if the work required one. You get a complete, finished result — not a rough replacement.</span>
              </div>
            </div>
          </div>
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
       5. PROOF / REVIEWS
  ═══════════════════════════════════════ -->
  <section class="sp-proof" aria-label="Customer reviews for windows and doors in Mount Vernon OR">
    <div class="container">
      <h2>What do Grant County homeowners say about the window and door work?</h2>
      <p class="answer-block">Real feedback from real customers in Eastern Oregon — from single window replacements to full-house projects combined with deck construction.</p>
      <div class="sp-proof-grid">
        <div class="sp-testimonial reveal-up reveal-delay-1">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"New windows throughout the house made a huge difference in heating bills this winter. The deck they built off the back is solid — I've had three contractors look at it since and every one of them commented on the quality of the construction."</p>
          <div class="sp-testimonial-meta">
            <strong>Linda H.</strong>
            <span>Canyon City, OR — Windows &amp; Deck</span>
          </div>
        </div>
        <div class="sp-testimonial reveal-up reveal-delay-2">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"Superior Home Builders turned our empty lot into the home we'd been planning for years. They were upfront about costs, stuck to the schedule, and the framing crew was exceptional. Four years later the house is rock-solid — exactly what we wanted."</p>
          <div class="sp-testimonial-meta">
            <strong>Travis &amp; Kelsey B.</strong>
            <span>John Day, OR — Custom Home Build</span>
          </div>
        </div>
      </div>
      <div class="sp-proof-photos reveal-scale">
        <img src="/assets/images/window-installation-mount-vernon.webp"
             alt="Completed window installation on a Mount Vernon Oregon home showing finished exterior trim and multiple windows"
             width="800" height="500" loading="lazy">
        <img src="/assets/images/new-windows-mount-vernon.webp"
             alt="Window detail showing energy-efficient installation with exterior trim work by Superior Home Builders"
             width="400" height="220" loading="lazy">
        <img src="/assets/images/window-trim-casing-detail.webp"
             alt="Interior window trim and casing detail from a window replacement project in Grant County Oregon"
             width="400" height="220" loading="lazy">
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,0 C360,40 1080,0 1440,50 L1440,56 L0,56 Z" fill="var(--color-primary)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       6. COMPARISON
  ═══════════════════════════════════════ -->
  <section class="sp-compare" aria-label="Superior Home Builders vs typical contractor for windows">
    <div class="container">
      <h2>Why does the contractor you hire for windows and doors matter?</h2>
      <p class="answer-block">Not all window installations are equal. Here's what separates a complete, lasting job from a window swap that creates problems down the line.</p>
      <div class="sp-compare-table">
        <div class="sp-compare-col sp-compare-col--bad">
          <h3>Typical contractor</h3>
          <div class="sp-compare-row">
            <?php echo lucide_icon('x-circle', '', 'color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0'); ?>
            <span>Windows ordered without measuring the rough opening precisely — shimming fills the gap</span>
          </div>
          <div class="sp-compare-row">
            <?php echo lucide_icon('x-circle', '', 'color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0'); ?>
            <span>Interior trim is extra or not included — you finish it yourself</span>
          </div>
          <div class="sp-compare-row">
            <?php echo lucide_icon('x-circle', '', 'color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0'); ?>
            <span>Weatherstripping applied over existing decay rather than repairing the frame</span>
          </div>
          <div class="sp-compare-row">
            <?php echo lucide_icon('x-circle', '', 'color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0'); ?>
            <span>Installation done in a day regardless of window count — rushed finish work</span>
          </div>
          <div class="sp-compare-row">
            <?php echo lucide_icon('x-circle', '', 'color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0'); ?>
            <span>Generic glass spec with no consideration for Eastern OR's heating-dominated climate</span>
          </div>
        </div>
        <div class="sp-compare-col sp-compare-col--good">
          <h3>Superior Home Builders</h3>
          <div class="sp-compare-row">
            <?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:20px;height:20px;flex-shrink:0'); ?>
            <span>Rough openings measured on-site before the order is placed — every window fits correctly</span>
          </div>
          <div class="sp-compare-row">
            <?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:20px;height:20px;flex-shrink:0'); ?>
            <span>Full interior and exterior trim-out included in every installation</span>
          </div>
          <div class="sp-compare-row">
            <?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:20px;height:20px;flex-shrink:0'); ?>
            <span>Frame and sill inspected and repaired before the new window is set</span>
          </div>
          <div class="sp-compare-row">
            <?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:20px;height:20px;flex-shrink:0'); ?>
            <span>Timeline based on actual window count and complexity — work is done right, not fast</span>
          </div>
          <div class="sp-compare-row">
            <?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:20px;height:20px;flex-shrink:0'); ?>
            <span>Low-E argon glass specified for Eastern Oregon's cold winters and high heating load</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,56 C480,0 960,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       7. FAQ
  ═══════════════════════════════════════ -->
  <section class="sp-faq" aria-label="Window and door FAQ for Mount Vernon OR">
    <div class="container">
      <h2>Frequently asked questions about window and door replacement in Mount Vernon, OR</h2>
      <p class="answer-block">Answers to the questions we hear most often from Grant County homeowners considering a window or door project.</p>
      <div class="sp-faq-list">

        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-wd-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-wd-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['a']); ?>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C720,0 1440,56 1440,56 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       8. FINAL CTA + RELATED SERVICES
  ═══════════════════════════════════════ -->
  <section class="sp-final-cta" aria-label="Get a free window replacement estimate in Mount Vernon OR">
    <div class="container">
      <h2>Ready to replace your windows or doors near Mount Vernon, OR?</h2>
      <p>Superior Home Builders has been installing windows and doors in Grant County homes since 2001. We measure on-site, spec the right glass for Eastern Oregon's climate, and trim out every opening inside and out. Get a written estimate — no obligation.</p>
      <div class="cta-row">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-secondary btn-lg"><?php echo lucide_icon('phone'); ?> Call Us Now</a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="sp-related" aria-label="Other construction services in Mount Vernon OR">
    <div class="container">
      <h2>Other Services You May Need</h2>
      <div class="services-grid">
        <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
          <div class="service-card__image">
            <img src="/assets/images/custom-deck-construction.webp"
                 alt="Custom deck construction in Mount Vernon Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('tree-pine'); ?></div>
            <h3>Decks</h3>
            <ul>
              <li>Composite &amp; pressure-treated</li>
              <li>Railings, stairs &amp; pergolas</li>
              <li>Built for Eastern OR winters</li>
            </ul>
            <a href="/services/decks/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg"
                 alt="General remodeling project in Grant County Oregon by Superior Home Builders"
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
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80"
                 alt="Custom home construction in Mount Vernon Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('home'); ?></div>
            <h3>Custom Home Building</h3>
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
