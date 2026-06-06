<?php
/**
 * Blog Index — Superior Home Builders
 * Page One Insights v6.1
 */
$pageTitle       = 'Blog | Superior Home Builders | Mount Vernon, OR';
$pageDescription = 'Construction tips, home-building insights, and expert guidance from Superior Home Builders — Eastern Oregon\'s trusted general contractor since 2004.';
$canonicalUrl    = 'https://superior-home-builders.pageone.cloud/blog/';
$currentPage     = 'blog';

$blogPosts = [
    [
        'slug'     => 'off-grid-solar-power-eastern-oregon',
        'title'    => 'Solar Power for Off-Grid Homes in Eastern Oregon: Panels, Batteries, Generators & Winter Planning',
        'excerpt'  => 'Off-grid solar is more than panels on a roof. A reliable system includes battery storage, backup generation, proper mechanical space, and a home designed to minimize waste. Here\'s what every off-grid homeowner in Eastern Oregon needs to plan before construction starts — especially for winter.',
        'image'    => 'https://i.imgur.com/ncxOF1x.jpeg',
        'alt'      => 'Eastern Oregon high desert terrain near Grant County — planning an off-grid home site with solar exposure, battery storage, generator placement, and mechanical room layout',
        'date'     => 'June 6, 2026',
        'dateISO'  => '2026-06-06',
        'category' => 'Construction & Building Tips',
        'readtime' => '22 min read',
    ],
    [
        'slug'     => 'off-grid-septic-systems-eastern-oregon',
        'title'    => 'Septic Systems for Off-Grid Homes in Eastern Oregon: What to Know Before You Build',
        'excerpt'  => 'The septic system can be one of the biggest factors in whether a rural Eastern Oregon property is practical to build on. The drain field location, soil conditions, required setbacks, and available area affect where the home can sit, where the driveway goes, and where the well needs to be placed. Here\'s what to know before you build.',
        'image'    => 'https://i.imgur.com/a8DWOTi.jpeg',
        'alt'      => 'Raw land in Eastern Oregon high desert near Grant County — evaluating a rural parcel for off-grid home construction including septic site evaluation, drain field placement, and well setbacks',
        'date'     => 'June 6, 2026',
        'dateISO'  => '2026-06-06',
        'category' => 'Construction & Building Tips',
        'readtime' => '20 min read',
    ],
    [
        'slug'     => 'off-grid-water-systems-eastern-oregon',
        'title'    => 'How Do You Get Water for an Off-Grid Home in Eastern Oregon?',
        'excerpt'  => 'Water planning should happen before the floor plan is finalized. A rural property may have the views and privacy you want — but if the well, cistern, pump system, freeze protection, and septic layout are not coordinated early, the project becomes expensive fast. Here\'s what every off-grid water system in Eastern Oregon needs.',
        'image'    => 'https://i.imgur.com/ncxOF1x.jpeg',
        'alt'      => 'Eastern Oregon high desert terrain near Grant County — site planning for an off-grid home water system including well location, cistern placement, and freeze protection',
        'date'     => 'June 6, 2026',
        'dateISO'  => '2026-06-06',
        'category' => 'Construction & Building Tips',
        'readtime' => '18 min read',
    ],
    [
        'slug'     => 'off-grid-home-permits-oregon',
        'title'    => 'Do You Need Permits to Build an Off-Grid Home in Oregon?',
        'excerpt'  => 'Off-grid means your home generates its own power and manages its own water and waste — it does not mean you can skip building permits. Here\'s what permit categories apply to off-grid construction in Oregon, from structural and electrical to septic and land use.',
        'image'    => 'https://i.imgur.com/P5mpaVS.jpeg',
        'alt'      => 'Custom home framing in progress on rural land in Eastern Oregon — off-grid home construction requires building permits, electrical permits, mechanical permits, and septic approval in Oregon',
        'date'     => 'June 6, 2026',
        'dateISO'  => '2026-06-06',
        'category' => 'Construction & Building Tips',
        'readtime' => '16 min read',
    ],
    [
        'slug'     => 'off-grid-home-cost-eastern-oregon',
        'title'    => 'How Much Does It Cost to Build an Off-Grid Home in Eastern Oregon?',
        'excerpt'  => 'Building off-grid is not just the cost of the house. The total budget depends on the home itself, the land, access road, site prep, well, septic, solar, and how remote the property is. Here\'s what every budget category includes and why site conditions are the biggest variable.',
        'image'    => 'https://i.imgur.com/LWms2FO.jpeg',
        'alt'      => 'Custom home construction framing in Eastern Oregon — building an off-grid home on rural land near Mount Vernon and Grant County',
        'date'     => 'June 6, 2026',
        'dateISO'  => '2026-06-06',
        'category' => 'Construction & Building Tips',
        'readtime' => '14 min read',
    ],
    [
        'slug'     => 'building-off-grid-home-raw-land-eastern-oregon',
        'title'    => 'Can You Build an Off-Grid Home on Raw Land in Eastern Oregon?',
        'excerpt'  => 'Buying rural land around Mount Vernon, John Day, or Prairie City and actually building on it are two different things. Here\'s what to check before you commit — access, permits, wells, septic, solar, site prep, and why calling a builder first saves money.',
        'image'    => 'https://i.imgur.com/a8DWOTi.jpeg',
        'alt'      => 'Raw land in Eastern Oregon high desert — evaluating a parcel for off-grid home construction near Grant County',
        'date'     => 'June 6, 2026',
        'dateISO'  => '2026-06-06',
        'category' => 'Construction & Building Tips',
        'readtime' => '11 min read',
    ],
    [
        'slug'     => 'off-the-grid-living-oregon',
        'title'    => 'Off-the-Grid Living in Oregon: Embracing Self-Reliance in the Pacific Northwest',
        'excerpt'  => 'Oregon\'s stunning landscapes make it a dream destination for off-grid living. But success demands careful planning — especially given the state\'s variable climate, regulations, and the critical importance of a knowledgeable local contractor.',
        'image'    => 'https://i.imgur.com/2qn995t.jpeg',
        'alt'      => 'Off-grid homestead in rural Oregon with Pacific Northwest forest backdrop',
        'date'     => 'June 6, 2026',
        'dateISO'  => '2026-06-06',
        'category' => 'Construction & Building Tips',
        'readtime' => '8 min read',
    ],
];

$schemaMarkup = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://superior-home-builders.pageone.cloud/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => 'https://superior-home-builders.pageone.cloud/blog/'],
    ],
], JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ════════════════════════════════════════════════════════════════════
   BLOG INDEX — Superior Home Builders
   Page-specific premium styles — uses var() tokens from framework.css
   Visual techniques: tinted hero, editorial card grid, hover reveals,
   category badges, SVG dividers, tinted card backgrounds
   ════════════════════════════════════════════════════════════════════ */

/* ── BLOG INDEX HERO ────────────────────────────────────────────── */
.blog-index-hero {
  background: var(--color-primary);
  padding-top: calc(var(--nav-height) + var(--space-3xl));
  padding-bottom: var(--space-3xl);
  position: relative;
  overflow: hidden;
}
.blog-index-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-secondary-rgb), 0.35) 0%, transparent 65%);
  pointer-events: none;
}
.blog-index-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px 200px;
  pointer-events: none;
}
.blog-index-hero__inner {
  position: relative;
  z-index: 1;
}
.blog-index-hero__breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-size: var(--fs-xs);
  color: rgba(255,255,255,0.55);
  margin-bottom: var(--space-xl);
  flex-wrap: wrap;
}
.blog-index-hero__breadcrumb a {
  color: rgba(255,255,255,0.55);
  transition: color var(--transition-fast);
}
.blog-index-hero__breadcrumb a:hover { color: var(--color-accent); }
.blog-index-hero__breadcrumb-sep { color: rgba(255,255,255,0.25); }
.blog-index-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3.4rem);
  font-weight: 900;
  letter-spacing: -0.03em;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-lg);
  line-height: 1.1;
}
.blog-index-hero h1 em {
  color: var(--color-accent);
  font-style: italic;
}
.blog-index-hero p {
  font-size: clamp(0.95rem, 1.5vw, 1.1rem);
  color: rgba(255,255,255,0.7);
  max-width: 52ch;
  line-height: 1.7;
}

/* ── SVG DIVIDER ────────────────────────────────────────────────── */
.divider-blog-hero {
  background: var(--color-bg);
  line-height: 0;
}
.divider-blog-hero svg { display: block; width: 100%; }

/* ── BLOG GRID SECTION ──────────────────────────────────────────── */
.blog-grid-section {
  background: var(--color-bg);
  padding: var(--space-4xl) 0;
}
.blog-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-xl);
  margin-top: var(--space-2xl);
}

/* ── BLOG CARD ──────────────────────────────────────────────────── */
.blog-card {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  border: 1px solid var(--color-border);
}
.blog-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
}
.blog-card__image-wrap {
  position: relative;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}
.blog-card__image-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
  display: block;
}
.blog-card:hover .blog-card__image-wrap img {
  transform: scale(1.05);
}
.blog-card__category-badge {
  position: absolute;
  top: var(--space-md);
  left: var(--space-md);
  background: rgba(var(--color-primary-rgb), 0.82);
  backdrop-filter: blur(6px);
  color: var(--color-accent);
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 4px 10px;
  border-radius: var(--radius-full);
  border: 1px solid rgba(var(--color-accent-rgb), 0.3);
}
.blog-card__body {
  padding: var(--space-xl);
  display: flex;
  flex-direction: column;
  flex: 1;
  gap: var(--space-sm);
}
.blog-card__meta {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  font-size: var(--fs-xs);
  color: var(--color-text-light);
}
.blog-card__meta i,
.blog-card__meta svg { width: 12px; height: 12px; }
.blog-card__meta-item {
  display: flex;
  align-items: center;
  gap: 4px;
}
.blog-card h2 {
  font-family: var(--font-heading);
  font-size: clamp(1rem, 1.6vw, 1.2rem);
  font-weight: 900;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  line-height: 1.3;
  text-wrap: balance;
  margin: 0;
}
.blog-card h2 a {
  transition: color var(--transition-fast);
}
.blog-card h2 a:hover { color: var(--color-secondary); }
.blog-card__excerpt {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.7;
  margin: 0;
  flex: 1;
}
.blog-card__read-more {
  margin-top: var(--space-md);
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-size: var(--fs-sm);
  font-weight: 700;
  color: var(--color-secondary);
  transition: color var(--transition-fast), gap var(--transition-fast);
  border-top: 1px solid var(--color-border);
  padding-top: var(--space-md);
}
.blog-card__read-more:hover {
  color: var(--color-primary);
  gap: var(--space-md);
}
.blog-card__read-more i,
.blog-card__read-more svg { width: 14px; height: 14px; }

/* ── EMPTY GRID STATE ───────────────────────────────────────────── */
.blog-empty {
  text-align: center;
  padding: var(--space-3xl);
  color: var(--color-text-light);
}

/* ── FEATURED POST (first post spans 2 cols when multiple) ──────── */
.blog-card--featured {
  grid-column: 1 / -1;
  flex-direction: row;
}
.blog-card--featured .blog-card__image-wrap {
  width: 52%;
  min-width: 52%;
  aspect-ratio: auto;
  height: 320px;
}
.blog-card--featured .blog-card__body {
  padding: var(--space-2xl);
}
.blog-card--featured h2 {
  font-size: clamp(1.2rem, 2vw, 1.6rem);
}
.blog-card--featured .blog-card__excerpt {
  font-size: var(--fs-base);
}

/* ── CTA BANNER ─────────────────────────────────────────────────── */
.blog-cta {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-2xl) var(--space-xl);
  display: flex;
  align-items: center;
  gap: var(--space-2xl);
  margin-top: var(--space-3xl);
  border: 1px solid var(--color-border);
}
.blog-cta__icon {
  width: 64px;
  height: 64px;
  min-width: 64px;
  background: var(--color-secondary);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
}
.blog-cta__icon i,
.blog-cta__icon svg { width: 28px; height: 28px; }
.blog-cta__copy { flex: 1; }
.blog-cta__copy h3 {
  font-family: var(--font-heading);
  font-size: clamp(1.05rem, 1.8vw, 1.35rem);
  font-weight: 900;
  color: var(--color-primary);
  margin-bottom: var(--space-xs);
  text-wrap: balance;
}
.blog-cta__copy p {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* ── RESPONSIVE ─────────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .blog-grid { grid-template-columns: repeat(2, 1fr); }
  .blog-card--featured { flex-direction: column; }
  .blog-card--featured .blog-card__image-wrap { width: 100%; min-width: 0; height: auto; aspect-ratio: 16 / 9; }
}
@media (max-width: 767px) {
  body { padding-bottom: 66px; }
  .blog-grid { grid-template-columns: 1fr; }
  .blog-card--featured { grid-column: auto; }
  .blog-cta { flex-direction: column; text-align: center; }
}
</style>

<!-- ════════════════════════════════════════════════════
     BLOG HERO
════════════════════════════════════════════════════ -->
<section class="blog-index-hero" aria-label="Blog">
  <div class="blog-index-hero__inner">
    <div class="container">

      <nav class="blog-index-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="blog-index-hero__breadcrumb-sep" aria-hidden="true">›</span>
        <span>Blog</span>
      </nav>

      <h1>
        From the Field — <em>Build Knowledge</em><br>
        from Eastern Oregon
      </h1>
      <p>
        Construction tips, off-grid building insights, and expert guidance from
        the Superior Home Builders team in Mount Vernon, OR.
      </p>

    </div>
  </div>
</section>

<!-- SVG divider -->
<div class="divider-blog-hero" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C360,50 1080,0 1440,30 L1440,50 L0,50 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     BLOG GRID
════════════════════════════════════════════════════ -->
<section class="blog-grid-section" aria-label="Blog posts">
  <div class="container">

    <div class="section-title reveal-up">
      <span class="eyebrow-label">Latest Articles</span>
      <h2>Builder Insights & <em style="color:var(--color-secondary);font-style:italic">Expert Advice</em></h2>
    </div>

    <?php if (!empty($blogPosts)): ?>
    <div class="blog-grid">
      <?php foreach ($blogPosts as $idx => $post): ?>
      <article class="blog-card <?php echo ($idx === 0 && count($blogPosts) === 1) ? 'blog-card--featured' : ''; ?> reveal-up reveal-delay-<?php echo min($idx + 1, 4); ?>" aria-label="<?php echo htmlspecialchars($post['title']); ?>">

        <div class="blog-card__image-wrap">
          <img
            src="<?php echo htmlspecialchars($post['image']); ?>"
            alt="<?php echo htmlspecialchars($post['alt']); ?>"
            width="800"
            height="450"
            loading="<?php echo $idx === 0 ? 'eager' : 'lazy'; ?>">
          <span class="blog-card__category-badge"><?php echo htmlspecialchars($post['category']); ?></span>
        </div>

        <div class="blog-card__body">
          <div class="blog-card__meta">
            <div class="blog-card__meta-item">
              <i data-lucide="calendar"></i>
              <time datetime="<?php echo htmlspecialchars($post['dateISO']); ?>"><?php echo htmlspecialchars($post['date']); ?></time>
            </div>
            <div class="blog-card__meta-item">
              <i data-lucide="clock"></i>
              <span><?php echo htmlspecialchars($post['readtime']); ?></span>
            </div>
          </div>

          <h2>
            <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>/">
              <?php echo htmlspecialchars($post['title']); ?>
            </a>
          </h2>

          <p class="blog-card__excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>

          <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>/" class="blog-card__read-more">
            Read Article <i data-lucide="arrow-right"></i>
          </a>
        </div>

      </article>
      <?php endforeach; ?>
    </div><!-- /.blog-grid -->
    <?php else: ?>
    <div class="blog-empty">
      <p>New articles coming soon. Check back for construction tips and building insights from our team.</p>
    </div>
    <?php endif; ?>

    <!-- CTA -->
    <div class="blog-cta reveal-up">
      <div class="blog-cta__icon" aria-hidden="true">
        <i data-lucide="hard-hat"></i>
      </div>
      <div class="blog-cta__copy">
        <h3>Ready to Start Your Build in Eastern Oregon?</h3>
        <p>Superior Home Builders has served Grant County and surrounding communities for over <?php echo $yearsInBusiness; ?> years. Contact us for a free, no-pressure estimate.</p>
      </div>
      <a href="/contact/" class="btn btn-primary">
        <i data-lucide="clipboard-list"></i>
        Get a Free Estimate
      </a>
    </div>

  </div>
</section>

<?php if (!empty($schemaMarkup)): ?>
<script type="application/ld+json"><?php echo $schemaMarkup; ?></script>
<?php endif; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
