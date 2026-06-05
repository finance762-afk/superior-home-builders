<?php
/**
 * functions.php — Shared helper functions
 * Superior Home Builders | Page One Insights v6.1
 */

/**
 * Returns true if the given page slug matches $currentPage (set by calling page).
 */
function isActivePage(string $page): bool {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Formats a 10-digit US phone number to (XXX) XXX-XXXX.
 * Returns the original string unchanged if it can't be parsed.
 */
function formatPhone(string $phone): string {
    $digits = preg_replace('/\D/', '', $phone);
    if (strlen($digits) === 11 && $digits[0] === '1') {
        $digits = substr($digits, 1);
    }
    if (strlen($digits) !== 10) {
        return $phone;
    }
    return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
}

/**
 * Converts a service name to a URL slug.
 * e.g. "Bathroom Remodeling" → "bathroom-remodeling"
 */
function getServiceSlug(string $name): string {
    return strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $name), '-'));
}

/**
 * Converts a city name to a URL slug.
 * e.g. "Mount Vernon" → "mount-vernon"
 */
function getAreaSlug(string $city): string {
    return strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $city), '-'));
}

/**
 * Generates a Service schema JSON-LD array for a single service.
 * Returns a PHP array — json_encode() to embed.
 */
function generateServiceSchema(array $service): array {
    global $siteName, $siteUrl;
    return [
        '@context' => 'https://schema.org',
        '@type'    => 'Service',
        'name'     => $service['name'],
        'url'      => $siteUrl . '/services/' . $service['slug'] . '/',
        'provider' => [
            '@type' => 'HomeAndConstructionBusiness',
            '@id'   => $siteUrl . '/#organization',
            'name'  => $siteName,
        ],
        'areaServed' => [
            '@type'       => 'Place',
            'name'        => 'Mount Vernon, OR',
            'addressRegion' => 'OR',
        ],
        'description' => $service['description'] ?? '',
    ];
}

/**
 * Generates a FAQPage schema JSON-LD array.
 * $faqs should be [ ['q' => '...', 'a' => '...'], ... ]
 * Returns a PHP array — json_encode() to embed.
 */
function generateFAQSchema(array $faqs): array {
    $items = array_map(function($faq) {
        return [
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $faq['a'],
            ],
        ];
    }, $faqs);

    return [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $items,
    ];
}

/**
 * Generates a BreadcrumbList schema array.
 * $items = [ ['name' => '...', 'url' => '...'], ... ]
 */
function generateBreadcrumbSchema(array $items): array {
    $listItems = [];
    foreach ($items as $i => $item) {
        $listItems[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $item['name'],
            'item'     => $item['url'],
        ];
    }
    return [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $listItems,
    ];
}

/**
 * Returns an HTML meta tags string for title, description, and canonical.
 * Use for dynamic page SEO generation if needed.
 */
function generateMetaTags(string $title, string $description, string $canonical): string {
    $t = htmlspecialchars($title,       ENT_QUOTES, 'UTF-8');
    $d = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
    $c = htmlspecialchars($canonical,   ENT_QUOTES, 'UTF-8');
    return "<title>{$t}</title>\n"
         . "  <meta name=\"description\" content=\"{$d}\">\n"
         . "  <link rel=\"canonical\" href=\"{$c}\">\n";
}

/**
 * Returns a safe absolute URL for a given relative path.
 */
function absoluteUrl(string $path): string {
    global $siteUrl;
    return rtrim($siteUrl, '/') . '/' . ltrim($path, '/');
}
