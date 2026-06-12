<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Bathroom Remodeling in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Custom bathroom remodeling in Mount Vernon, OR. Tile, plumbing, fixtures, walk-in showers, and full renovations. Licensed contractor serving Grant County since 2001. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/bathroom-remodeling/';
$currentPage      = 'services';
$heroImage        = '/assets/images/bathroom-remodel-tile.webp';
$heroImagePreload = $heroImage;
$ogImage          = $siteUrl . $heroImage;  // og:image stays absolute

$faqs = [
  ['q'=>'How much does a bathroom remodel cost in Mount Vernon, OR?',
   'a'=>'A bathroom remodel in the Mount Vernon area typically runs $10,000–$35,000 depending on size, fixture selections, and whether plumbing is being relocated. A cosmetic update with new tile, vanity, and fixtures lands at the lower end; a full gut-and-rebuild with custom tile and a walk-in shower sits at $20,000–$35,000. We provide a detailed written estimate after an on-site visit.'],
  ['q'=>'How long does a bathroom renovation take in Grant County?',
   'a'=>'Most bathroom remodels in our area take 2–4 weeks from demo to final inspection. Smaller updates — replacing a vanity, retiling a shower — can be completed in 3–7 business days. Full gut renovations including plumbing relocation and custom tile run 3–4 weeks. We give every client a written project schedule before work starts.'],
  ['q'=>'Do I need a permit for a bathroom remodel in Mount Vernon?',
   'a'=>'Permits are required for any work involving plumbing changes, electrical upgrades, or structural modifications. Cosmetic updates like replacing fixtures, vanities, and flooring without moving plumbing typically do not require a permit. Superior Home Builders handles all permit applications and inspections as part of every project.'],
  ['q'=>'Can I stay in my home during a bathroom remodel?',
   'a'=>'Yes — most homeowners stay in their homes throughout a bathroom renovation. We contain the work area and maintain access to other bathrooms in the house. If a home has only one bathroom, we work with you to minimize the disruption window, often scheduling the plumbing rough-in and finish in a compressed timeline.'],
  ['q'=>'What materials do you recommend for bathroom tile in Eastern Oregon?',
   'a'=>'For Eastern Oregon homes, we recommend porcelain tile for shower walls and floors — it handles moisture, temperature swings, and freeze-thaw cycles better than ceramic. Luxury vinyl plank (LVP) is an excellent choice for bathroom floors outside the shower due to its durability and warmth underfoot. We carry multiple grades and help you choose based on budget and use.'],
  ['q'=>'Does Superior Home Builders handle bathroom plumbing, or do I need to hire a plumber separately?',
   'a'=>'We manage the complete scope internally. Our crews handle demo, framing, tile, fixture installation, and coordinate licensed plumbing and electrical work. You deal with one contractor and one schedule — not separate subs who won\'t coordinate with each other.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name'=>'Home',               'url'=> $siteUrl . '/'],
  ['name'=>'Services',           'url'=> $siteUrl . '/services'],
  ['name'=>'Bathroom Remodeling','url'=> $siteUrl . '/services/bathroom-remodeling/'],
]);
$serviceSchema = [
  '@context' => 'https://schema.org',
  '@type'    => 'Service',
  '@id'      => $siteUrl . '/services/bathroom-remodeling#service',
  'name'     => 'Bathroom Remodeling',
  'url'      => $siteUrl . '/services/bathroom-remodeling/',
  'provider' => ['@type'=>'HomeAndConstructionBusiness','@id'=> $siteUrl . '/#organization'],
  'areaServed' => ['@type'=>'Place','name'=>'Mount Vernon, OR','addressRegion'=>'OR'],
  'description' => 'Custom bathroom remodeling services in Mount Vernon, OR including tile installation, plumbing upgrades, vanity and fixture replacement, walk-in shower construction, and full bathroom renovations for Grant County homeowners.',
];
$faqSchema = generateFAQSchema($faqs);
$schemaGraph = ['@context'=>'https://schema.org','@graph'=>[$breadcrumbs,$serviceSchema,$faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* Page-specific styles only — the shared service page template
   lives in framework.css */
.sp-hero { position: relative; min-height: 65vh; display: flex; align-items: center; background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center 40%; padding-top: var(--nav-height); }
.sp-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(110deg, rgba(var(--color-primary-rgb),0.92) 0%, rgba(var(--color-secondary-rgb),0.78) 55%, rgba(var(--color-primary-rgb),0.55) 100%); z-index: 1; }
.sp-hero-layout { display: grid; grid-template-columns: 1fr 380px; gap: var(--space-3xl); align-items: center; }
.sp-hero-eyebrow { display: inline-flex; align-items: center; gap: var(--space-xs); background: rgba(var(--color-accent-rgb),0.15); border: 1px solid rgba(var(--color-accent-rgb),0.35); color: var(--color-accent); font-size: var(--fs-xs); font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 5px var(--space-md); border-radius: 100px; margin-bottom: var(--space-md); }
.sp-hero h1 { font-family: var(--font-heading); font-size: var(--fs-h1); font-weight: 800; line-height: 1.05; color: #fff; margin-bottom: var(--space-lg); }
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
.sp-problem-pull { font-family: var(--font-heading); font-size: clamp(1.5rem, 2.8vw, 2.4rem); font-weight: 700; font-style: italic; color: var(--color-primary); border-left: 4px solid var(--color-accent); padding-left: var(--space-xl); max-width: 70ch; margin: 0 auto var(--space-3xl); line-height: 1.4; }
.sp-bento-card h3 { font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: var(--color-primary); margin-bottom: var(--space-sm); }
.sp-bento-card p { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }
.sp-expert-grid { display: grid; grid-template-columns: 420px 1fr; gap: var(--space-3xl); align-items: center; }
.sp-expert-photo::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 60%, rgba(var(--color-primary-rgb),0.5) 100%); }
.sp-expert-photo-badge { position: absolute; bottom: var(--space-lg); left: var(--space-lg); background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading); font-weight: 800; font-size: 0.95rem; padding: var(--space-sm) var(--space-md); border-radius: 8px; z-index: 2; }
.sp-expert-content h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); }
.sp-expert-point div strong { display: block; font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 2px; }
.sp-expert-point div span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.55; }
.sp-breakdown h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); }
.sp-includes-list li svg { color: var(--color-accent-dark); flex-shrink:0; }
.sp-process-timeline::before { content: ''; position: absolute; left: 24px; top: 48px; bottom: 48px; width: 2px; background: linear-gradient(180deg, var(--color-accent) 0%, rgba(var(--color-accent-rgb),0.2) 100%); }
.sp-step-body span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }
.sp-proof h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); text-align: center; }
.sp-compare h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: #fff; text-align: center; margin-bottom: var(--space-md); }
.sp-compare p.answer-block { font-size: var(--fs-body); color: rgba(255,255,255,0.75); text-align: center; max-width: 58ch; margin: 0 auto var(--space-3xl); line-height: 1.75; }
.sp-compare-col--bad { background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); }
.sp-compare-col--good { background: rgba(var(--color-accent-rgb),0.12); border: 1px solid rgba(var(--color-accent-rgb),0.30); }
.sp-compare-col h3 { font-family: var(--font-heading); font-size: 1.1rem; margin-bottom: var(--space-lg); color: #fff; }
.sp-compare-row { display: flex; align-items: flex-start; gap: var(--space-sm); padding: var(--space-sm) 0; border-bottom: 1px solid rgba(255,255,255,0.07); }
.sp-compare-row span { font-size: var(--fs-sm); color: rgba(255,255,255,0.75); line-height: 1.55; }
.sp-compare-col--good .sp-compare-row span { color: rgba(255,255,255,0.90); }
.sp-faq h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-align: center; margin-bottom: var(--space-md); }
.sp-final-cta h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); margin-bottom: var(--space-md); }
.sp-related h2 { font-family: var(--font-heading); font-size: var(--fs-h3); font-weight: 800; color: var(--color-primary); text-align: center; margin-bottom: var(--space-3xl); }
.reveal-up { opacity:0; transform:translateY(28px); transition:opacity .65s ease,transform .65s ease; }
.reveal-left { opacity:0; transform:translateX(-28px); transition:opacity .65s ease,transform .65s ease; }
.reveal-right { opacity:0; transform:translateX(28px); transition:opacity .65s ease,transform .65s ease; }
.reveal-scale { opacity:0; transform:scale(.93); transition:opacity .65s ease,transform .65s ease; }
.reveal-up.visible,.reveal-left.visible,.reveal-right.visible,.reveal-scale.visible { opacity:1; transform:none; }
.reveal-delay-1 { transition-delay:.1s }
.reveal-delay-2 { transition-delay:.2s }
.reveal-delay-3 { transition-delay:.3s }
.reveal-delay-4 { transition-delay:.4s }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ═══════════════════════════════════════
       1. HERO
  ═══════════════════════════════════════ -->
  <section class="sp-hero" aria-label="Bathroom remodeling hero">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('bath'); ?> Bathroom Remodeling</span>
            <h1>Bathroom Remodeling in<br><em>Mount Vernon, OR</em></h1>
            <p class="hero-answer">A bathroom remodel in Mount Vernon requires understanding our region's unique climate and building codes. Superior Home Builders brings deep local expertise to every project, with personalized design consultation that incorporates energy-efficient solutions and sustainable practices. Our bathroom remodels typically range from $10,000–$35,000, with transparent pricing and detailed written estimates after our on-site assessment. You'll benefit from our commitment to quality beyond completion—including comprehensive warranty coverage and dedicated post-build support.</p>
            <div class="sp-hero-trust">
              <span class="sp-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Licensed &amp; Insured</span>
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
            <h3>Why homeowners choose us</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> One crew, start to finish</li>
              <li><?php echo lucide_icon('check-circle'); ?> Written schedule before demo begins</li>
              <li><?php echo lucide_icon('check-circle'); ?> Permits handled for you</li>
              <li><?php echo lucide_icon('check-circle'); ?> 25+ years in Grant County</li>
              <li><?php echo lucide_icon('check-circle'); ?> No surprise change orders</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Schedule a Consultation</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Bathroom Remodeling</span>
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
  <section class="sp-problem" aria-label="Signs you need a bathroom remodel">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "Your bathroom should work as hard as your home — not fight you every morning."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('droplets'); ?></div>
          <h3>Persistent moisture damage</h3>
          <p>Grout cracking, mold appearing at caulk lines, or water staining behind tile are signs the waterproofing has failed — a cosmetic fix won't stop the underlying damage.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('package-open'); ?></div>
          <h3>Storage that doesn't work</h3>
          <p>A bathroom built for a previous family's habits rarely works for yours. Vanity storage that's too shallow, no linen space, and counter clutter are all solvable with a proper layout redesign.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('zap-off'); ?></div>
          <h3>Outdated plumbing and fixtures</h3>
          <p>Pre-1990s plumbing in Eastern Oregon homes often uses galvanized or polybutylene pipe that's past its service life. A remodel is the right time to re-pipe while walls are open.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('thermometer-snowflake'); ?></div>
          <h3>Cold floors, poor ventilation</h3>
          <p>Inadequate ventilation causes moisture buildup that damages walls and ceilings over time. Radiant floor heating and a proper exhaust fan upgrade solve both comfort and long-term durability.</p>
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
       3. EXPERT POSITIONING
  ═══════════════════════════════════════ -->
  <section class="sp-expert" aria-label="Why choose Superior Home Builders for bathroom remodeling">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="/assets/images/bathroom-remodel-tile.webp"
               alt="Tile installation on a Superior Home Builders bathroom remodel in Mount Vernon Oregon"
               width="420" height="520" loading="lazy">
          <div class="sp-expert-photo-badge">25+ Years in Grant County</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do Grant County homeowners choose Superior Home Builders for bathroom renovations?</h2>
          <p class="answer-block">We've remodeled bathrooms from Mount Vernon to Prairie City for over two decades. Local homeowners choose us because we handle every trade under one roof — you get one crew, one schedule, and one point of contact instead of coordinating between a tile sub, a plumber, and a general who barely shows up.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Integrated crew — no subcontractor chaos</strong>
                <span>Our crews handle demo, framing, tile, and fixture installation. We coordinate licensed plumbing and electrical so you never have to chase down a sub.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Written schedule from day one</strong>
                <span>Before demo begins, you have a day-by-day project schedule. Eastern Oregon homeowners deal with enough uncertainty — your remodel timeline shouldn't be one of them.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Real experience with Grant County homes</strong>
                <span>We know what's behind the walls in 1970s Grant County ranchers — galvanized pipe, blocking that's not where the plans say, and subflooring that needs reinforcement before tile goes down.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
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
  <section class="sp-breakdown" aria-label="What's included in a bathroom remodel">
    <div class="container">
      <div class="sp-breakdown-grid">
        <div class="reveal-left">
          <h2>What's included in a Superior Home Builders bathroom remodel?</h2>
          <p class="answer-block">Every bathroom remodel is scoped to your specific needs — from a single fixture swap to a full gut renovation. Here's what's covered in a standard full remodel in Mount Vernon, OR.</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Demo &amp; debris removal</li>
            <li><?php echo lucide_icon('check'); ?> Subfloor inspection &amp; repair</li>
            <li><?php echo lucide_icon('check'); ?> Plumbing rough-in &amp; relocation</li>
            <li><?php echo lucide_icon('check'); ?> Waterproofing &amp; cement board</li>
            <li><?php echo lucide_icon('check'); ?> Tile walls &amp; floors</li>
            <li><?php echo lucide_icon('check'); ?> Walk-in shower or tub/shower combo</li>
            <li><?php echo lucide_icon('check'); ?> Vanity, sink &amp; faucet installation</li>
            <li><?php echo lucide_icon('check'); ?> Toilet replacement</li>
            <li><?php echo lucide_icon('check'); ?> Exhaust fan &amp; lighting</li>
            <li><?php echo lucide_icon('check'); ?> Paint &amp; trim</li>
            <li><?php echo lucide_icon('check'); ?> Permit application &amp; inspection</li>
            <li><?php echo lucide_icon('check'); ?> Final cleanup</li>
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
                <strong>Free on-site consultation &amp; estimate</strong>
                <span>We visit your home, assess the scope, discuss your goals and budget, and provide a written estimate — no obligation and no cost to you.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">2</div>
              <div class="sp-step-body">
                <strong>Demo &amp; subfloor prep</strong>
                <span>Old tile, fixtures, and drywall come out. We inspect the subfloor and framing, repair anything that needs it, and ensure a clean, solid substrate before new materials go in.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">3</div>
              <div class="sp-step-body">
                <strong>Plumbing, waterproofing &amp; tile</strong>
                <span>Plumbing is roughed in, waterproofing membrane applied, and tile set. This phase takes the longest — precision here determines how your bathroom looks and holds up for the next 20 years.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">4</div>
              <div class="sp-step-body">
                <strong>Fixtures, finish work &amp; final inspection</strong>
                <span>Vanity, toilet, faucets, lighting, mirrors, and trim are all installed. We schedule the permit inspection, walk you through the finished space, and leave the site clean.</span>
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
      <path d="M0,20 C720,60 720,0 1440,30 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       5. PROOF / REVIEWS
  ═══════════════════════════════════════ -->
  <section class="sp-proof" aria-label="Customer reviews and project photos">
    <div class="container">
      <h2>What do Mount Vernon homeowners say about the remodel experience?</h2>
      <p class="answer-block">Real projects, real homeowners — from Grant County to Prairie City. Every review below reflects an actual Superior Home Builders project in Eastern Oregon.</p>
      <div class="sp-proof-grid reveal-up">
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"We had both the kitchen and master bath redone at the same time. I was nervous about living through it, but the crew kept the mess contained and finished ahead of schedule. The tile work alone is worth every penny."</p>
          <div class="sp-testimonial-meta">
            <strong>Mike R.</strong>
            <span>Mount Vernon, OR — Kitchen &amp; Bathroom Remodel</span>
          </div>
        </div>
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"New windows throughout the house made a huge difference in heating bills. The deck they built is solid, but the bathroom remodel is what I brag about most — the walk-in shower is exactly what we asked for, and the grout lines are perfect."</p>
          <div class="sp-testimonial-meta">
            <strong>Linda H.</strong>
            <span>Canyon City, OR — Windows &amp; Bathroom Remodel</span>
          </div>
        </div>
      </div>
      <div class="sp-proof-photos reveal-scale">
        <img src="/assets/images/bathroom-remodel-tile.webp"
             alt="Completed bathroom remodel by Superior Home Builders in Mount Vernon Oregon" width="600" height="440" loading="lazy">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604147279-gcsj2m-image_3_.jpg"
             alt="Custom tile shower installation in Grant County Oregon" width="300" height="220" loading="lazy">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604148523-9gqjfg-image_4_.jpg"
             alt="Bathroom vanity and fixture installation by Superior Home Builders" width="300" height="220" loading="lazy">
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,30 C480,0 960,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-primary)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       6. COMPARISON
  ═══════════════════════════════════════ -->
  <section class="sp-compare" aria-label="Why choose Superior Home Builders over other contractors">
    <div class="container">
      <h2 class="reveal-up">How does Superior Home Builders compare to other bathroom contractors?</h2>
      <p class="answer-block reveal-up reveal-delay-1">Most contractors in rural Eastern Oregon rely heavily on subcontractors they don't always control. Here's what sets us apart for bathroom remodeling in Mount Vernon and Grant County.</p>
      <div class="sp-compare-table">
        <div class="sp-compare-col sp-compare-col--bad reveal-left">
          <h3>Typical contractor</h3>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Verbal estimate — numbers change at billing</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Multiple subs who don't communicate</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>You handle permits and inspections</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Schedule slips without explanation</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('x-circle', '', 'color:#f87171;width:18px;height:18px'); ?><span>Unfamiliar with Eastern OR home construction</span></div>
        </div>
        <div class="sp-compare-col sp-compare-col--good reveal-right">
          <h3>Superior Home Builders</h3>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Written, itemized estimate — no surprises</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>One integrated crew, one point of contact</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>We pull permits and manage all inspections</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>Written schedule before demo begins</span></div>
          <div class="sp-compare-row"><?php echo lucide_icon('check-circle', '', 'color:var(--color-accent);width:18px;height:18px'); ?><span>25+ years building in Grant County</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,10 1080,56 1440,15 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       7. FAQ
  ═══════════════════════════════════════ -->
  <section class="sp-faq" aria-label="Bathroom remodeling FAQ">
    <div class="container">
      <h2 class="reveal-up">Frequently asked questions about bathroom remodeling in Mount Vernon, OR</h2>
      <p class="answer-block reveal-up reveal-delay-1">Straight answers to the questions Grant County homeowners ask most before starting a bathroom renovation project.</p>
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
  <section class="sp-final-cta" aria-label="Get a free bathroom remodel estimate">
    <div class="container reveal-up">
      <h2>Ready to transform your bathroom in Mount Vernon?</h2>
      <p>Get a free, written estimate from Eastern Oregon's most experienced residential remodeling contractor. We visit your home, assess the scope, and give you real numbers — no obligation, no pressure.</p>
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
        <?php
        $related = array_filter($services, fn($s) => $s['slug'] !== 'bathroom-remodeling');
        $related = array_values($related);
        $relatedPhotos = [
          'kitchen-remodeling'     => '/assets/images/kitchen-remodel-mount-vernon.webp',
          'windows-and-doors'      => '/assets/images/window-installation-mount-vernon.webp',
          'general-remodeling'     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg',
        ];
        $relatedIcons = ['kitchen-remodeling'=>'utensils','windows-and-doors'=>'door-open','general-remodeling'=>'wrench'];
        $relatedBullets = [
          'kitchen-remodeling'  => ['Custom cabinetry &amp; islands','Countertop &amp; appliance install','Full layout redesigns'],
          'windows-and-doors'   => ['Energy-efficient replacements','Vinyl, wood &amp; fiberglass','Entry doors &amp; sliders'],
          'general-remodeling'  => ['Single rooms to whole homes','Additions &amp; conversions','Interior finish work'],
        ];
        $tints = ['card-tint-1','card-tint-2','card-tint-3'];
        $shown = array_slice($related, 0, 3);
        foreach ($shown as $ri => $rs):
          $rphoto = $relatedPhotos[$rs['slug']] ?? '';
          $ricon  = $relatedIcons[$rs['slug']] ?? 'tool';
          $rbullets = $relatedBullets[$rs['slug']] ?? ['Quality workmanship','Local expertise','Free estimates'];
        ?>
        <article class="service-card-with-image <?php echo $tints[$ri % 3]; ?> reveal-up reveal-delay-<?php echo ($ri+1); ?>">
          <div class="service-card__image">
            <img src="<?php echo htmlspecialchars($rphoto); ?>"
                 alt="<?php echo htmlspecialchars($rs['name']); ?> in Mount Vernon OR"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon($ricon); ?></div>
            <h3><?php echo htmlspecialchars($rs['name']); ?></h3>
            <ul>
              <?php foreach ($rbullets as $b): ?><li><?php echo $b; ?></li><?php endforeach; ?>
            </ul>
            <a href="/services/<?php echo htmlspecialchars($rs['slug']); ?>/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <?php endforeach; ?>
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
