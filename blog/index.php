<?php
/**
 * Blog Index — Superior Home Builders
 * Page One Insights v6.1
 */
$pageTitle       = 'Blog | Superior Home Builders | Mount Vernon, OR';
$pageDescription = 'Construction tips, home-building insights, and expert guidance from Superior Home Builders — Eastern Oregon\'s trusted general contractor since 2004.';
$canonicalUrl    = 'https://superiorhomebuilderscorp.com/blog/';
$currentPage     = 'blog';

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

$schemaMarkup = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://superiorhomebuilderscorp.com/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => 'https://superiorhomebuilderscorp.com/blog/'],
    ],
], JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* Blog index page styles — shared .blog-card styles live in framework.css */
.blog-index-hero { background: var(--color-primary); padding-top: calc(var(--nav-height) + var(--space-3xl)); padding-bottom: var(--space-3xl); position: relative; overflow: hidden; }
.blog-index-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(var(--color-secondary-rgb), 0.35) 0%, transparent 65%); pointer-events: none; }
.blog-index-hero::after { content: ''; position: absolute; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E"); background-size: 200px 200px; pointer-events: none; }
.blog-index-hero__inner { position: relative; z-index: 1; }
.blog-index-hero__breadcrumb { display: flex; align-items: center; gap: var(--space-sm); font-size: var(--fs-xs); color: rgba(255,255,255,0.55); margin-bottom: var(--space-xl); flex-wrap: wrap; }
.blog-index-hero__breadcrumb a { color: rgba(255,255,255,0.55); transition: color var(--transition-fast); }
.blog-index-hero__breadcrumb a:hover { color: var(--color-accent); }
.blog-index-hero__breadcrumb-sep { color: rgba(255,255,255,0.25); }
.blog-index-hero h1 { font-family: var(--font-heading); font-size: clamp(2rem, 4vw, 3.4rem); font-weight: 900; letter-spacing: -0.03em; color: #fff; text-wrap: balance; margin-bottom: var(--space-lg); line-height: 1.1; }
.blog-index-hero h1 em { color: var(--color-accent); font-style: italic; }
.blog-index-hero p { font-size: clamp(0.95rem, 1.5vw, 1.1rem); color: rgba(255,255,255,0.7); max-width: 52ch; line-height: 1.7; }
.divider-blog-hero { background: var(--color-bg); line-height: 0; }
.divider-blog-hero svg { display: block; width: 100%; }
.blog-grid-section { background: var(--color-bg); padding: var(--space-4xl) 0; }
.blog-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-xl); margin-top: var(--space-2xl); }
.blog-empty { text-align: center; padding: var(--space-3xl); color: var(--color-text-light); }
.blog-cta { background: var(--color-bg-alt); border-radius: var(--radius-lg); padding: var(--space-2xl) var(--space-xl); display: flex; align-items: center; gap: var(--space-2xl); margin-top: var(--space-3xl); border: 1px solid var(--color-border); }
.blog-cta__icon { width: 64px; height: 64px; min-width: 64px; background: var(--color-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; }
.blog-cta__icon i, .blog-cta__icon svg { width: 28px; height: 28px; }
.blog-cta__copy { flex: 1; }
.blog-cta__copy h3 { font-family: var(--font-heading); font-size: clamp(1.05rem, 1.8vw, 1.35rem); font-weight: 900; color: var(--color-primary); margin-bottom: var(--space-xs); text-wrap: balance; }
.blog-cta__copy p { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; margin: 0; }
@media (max-width: 1024px) {
  .blog-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 767px) {
  body { padding-bottom: 66px; }
  .blog-grid { grid-template-columns: 1fr; }
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
