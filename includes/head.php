<?php
/**
 * head.php — Shared <head> component
 * Superior Home Builders | Page One Insights v6.1
 *
 * Variables expected from calling page (set BEFORE including this file):
 *   $pageTitle       — full <title> string
 *   $pageDescription — meta description (140–160 chars)
 *   $canonicalUrl    — absolute canonical URL for this page
 *   $currentPage     — slug for active nav state (e.g. 'home', 'services', 'about')
 *   $noindex         — (optional) true to suppress indexing (thank-you, etc.)
 *   $heroImagePreload — (optional) absolute URL to hero image for preload
 *   $ogImage         — (optional) override OG image; defaults to logo
 *   $cssVersion      — from config.php (cache-bust query param)
 */
if (!isset($siteName)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}

// Defaults
$_pageTitle = $pageTitle ?? ($siteName . ' | Custom Home Builders | ' . $address['city'] . ', ' . $address['state']);
$_pageDesc  = $pageDescription ?? ('Superior Home Builders delivers custom home construction and remodeling throughout Eastern Oregon. Licensed contractor serving ' . $address['city'] . ', OR and surrounding communities since ' . $yearEstablished . '.');
$_canonical = $canonicalUrl ?? ($siteUrl . '/');
$_ogImage   = $ogImage ?? $logoUrl;
$_noindex   = $noindex ?? false;

// Build service list for schema
$_schemaServices = [];
foreach ($services as $svc) {
    $_schemaServices[] = [
        '@type'       => 'Offer',
        'itemOffered' => [
            '@type' => 'Service',
            'name'  => $svc['name'],
            'url'   => $siteUrl . '/services/' . $svc['slug'] . '/',
        ],
    ];
}

// Build areaServed list
$_areaServed = [];
foreach ($serviceAreas as $area) {
    if (!empty($area['city'])) {
        $_areaServed[] = $area['city'] . ', ' . $area['state'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <title><?php echo htmlspecialchars($_pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($_pageDesc); ?>">

  <!-- Robots -->
<?php if ($_noindex): ?>
  <meta name="robots" content="noindex,nofollow">
<?php else: ?>
  <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large">
<?php endif; ?>

  <!-- Canonical -->
  <link rel="canonical" href="<?php echo htmlspecialchars($_canonical); ?>">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:title"       content="<?php echo htmlspecialchars($_pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($_pageDesc); ?>">
  <meta property="og:url"         content="<?php echo htmlspecialchars($_canonical); ?>">
  <meta property="og:image"       content="<?php echo htmlspecialchars($_ogImage); ?>">
  <meta property="og:site_name"   content="<?php echo htmlspecialchars($siteName); ?>">
  <meta property="og:locale"      content="en_US">

  <!-- GSC Verification -->
<?php if (!empty($gscVerification)): ?>
  <meta name="google-site-verification" content="<?php echo htmlspecialchars($gscVerification); ?>">
<?php endif; ?>

  <!-- Performance: Preconnects -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://db.pageone.cloud">
  <link rel="dns-prefetch" href="https://unpkg.com">

  <!-- Fonts: Merriweather (heading + accent italic) + Merriweather Sans (body) — variable wght+ital axes -->
  <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300..900;1,300..900&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300..900;1,300..900&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap">

  <!-- Hero image preload (reduces LCP when set by calling page) -->
<?php if (!empty($heroImagePreload)): ?>
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($heroImagePreload); ?>" fetchpriority="high">
<?php endif; ?>

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="icon" type="image/png"     href="/assets/images/favicon.png">
  <link rel="apple-touch-icon"          href="/assets/images/apple-touch-icon.png">

  <!-- Stylesheet with cache-bust -->
  <link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo htmlspecialchars($cssVersion ?? '1'); ?>">

  <!-- Google Analytics (uncomment and replace ID after launch) -->
  <!--
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($googleAnalyticsId); ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars($googleAnalyticsId); ?>');
  </script>
  -->

  <!-- JSON-LD: HomeAndConstructionBusiness (Homepage only — other pages reference #organization) -->
<?php if (($currentPage ?? '') === 'home'): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "HomeAndConstructionBusiness",
    "@id": "<?php echo $siteUrl; ?>/#organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "url": "<?php echo $siteUrl; ?>/",
    "telephone": "<?php echo htmlspecialchars($phone); ?>",
    "email": "<?php echo htmlspecialchars($email); ?>",
    "description": "<?php echo htmlspecialchars('Superior Home Builders has been delivering custom home construction and comprehensive remodeling services throughout Eastern Oregon for over ' . $yearsInBusiness . ' years. Licensed general contractor serving Mount Vernon, John Day, Canyon City, and surrounding communities.'); ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo htmlspecialchars($address['street']); ?>",
      "addressLocality": "<?php echo htmlspecialchars($address['city']); ?>",
      "addressRegion": "<?php echo htmlspecialchars($address['state']); ?>",
      "postalCode": "<?php echo htmlspecialchars($address['zip']); ?>",
      "addressCountry": "US"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "44.4168",
      "longitude": "-119.1051"
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
        "opens": "08:00",
        "closes": "17:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Saturday"],
        "opens": "09:00",
        "closes": "14:00"
      }
    ],
    "image": "<?php echo htmlspecialchars($logoUrl); ?>",
    "logo": "<?php echo htmlspecialchars($logoUrl); ?>",
    "priceRange": "$$",
    "foundingDate": "<?php echo $yearEstablished; ?>",
    "areaServed": <?php echo json_encode($_areaServed, JSON_UNESCAPED_SLASHES); ?>,
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Construction & Remodeling Services",
      "itemListElement": <?php echo json_encode($_schemaServices, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
    }
  }
  </script>
<?php else: ?>
  <!-- Non-homepage: reference organization by @id only -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "url": "<?php echo htmlspecialchars($_canonical); ?>",
    "name": "<?php echo htmlspecialchars($_pageTitle); ?>",
    "description": "<?php echo htmlspecialchars($_pageDesc); ?>",
    "isPartOf": {
      "@type": "WebSite",
      "url": "<?php echo $siteUrl; ?>/",
      "name": "<?php echo htmlspecialchars($siteName); ?>"
    },
    "provider": { "@id": "<?php echo $siteUrl; ?>/#organization" }
  }
  </script>
<?php endif; ?>

</head>
<body>
