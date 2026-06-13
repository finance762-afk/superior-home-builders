<?php
// sitemap.php — emits XML. Never hand-edit page/post lists into this file:
// pages come from the $pages registry below, posts come from $blogPosts
// (includes/blog-data.php). /sitemap.xml rewrites here via .htaccess.
header('Content-Type: application/xml; charset=utf-8');
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

$baseUrl = $siteUrl;

// Page registry — path, source file (for lastmod), changefreq, priority,
// and per-URL image entries (replaces the old sitemap-images.xml).
$pages = [
    [
        'path'       => '/',
        'file'       => '/index.php',
        'changefreq' => 'weekly',
        'priority'   => '1.0',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg', 'caption' => 'Superior Home Builders custom home construction project in Mount Vernon, Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270979-4l74wp-468299739_10161024404097734_2434409497451082464_n.jpg', 'caption' => 'Quality home remodeling and construction services in Grant County, Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604271465-dqvg3l-468352707_10161044504572734_7925629043452829949_n.jpg', 'caption' => 'Residential construction and renovation work by Superior Home Builders'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604272736-wpmbnz-468453996_10161079313307734_5962081137845027174_n.jpg', 'caption' => 'Superior Home Builders project showcasing craftsmanship and attention to detail'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604273137-ksvcbn-518240531_10161958113367734_8953895085965006897_n.jpg', 'caption' => 'Recent completed home construction project in Mount Vernon, Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604273571-obykf5-518342600_10161958398292734_1673049660887267998_n.jpg', 'caption' => 'Custom home building in the Blue Mountains foothills near Mount Vernon, OR'],
        ],
    ],
    [
        'path'       => '/services/',
        'file'       => '/services/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604089870-onrdei-20220414_073700.jpg', 'caption' => 'Superior Home Builders construction services in Eastern Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg', 'caption' => 'Home construction and remodeling services available in Grant County, OR'],
        ],
    ],
    [
        'path'       => '/services/custom-home-building/',
        'file'       => '/services/custom-home-building/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.9',
        'images'     => [
            ['src' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Custom home build completed by Superior Home Builders in Mount Vernon, Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604304797-ovpay8-466679242_10160894523457734_3638487413345304516_n.jpg', 'caption' => 'New custom home construction in Eastern Oregon with mountain views'],
            ['src' => 'https://images.unsplash.com/photo-1632759145351-1d592919f522?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'caption' => 'Custom home exterior and siding work in Grant County, Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604306051-1cn5ph-467748149_10161026648862734_1486565757297760050_n.jpg', 'caption' => 'Newly completed custom build near Mount Vernon, Oregon by Superior Home Builders'],
        ],
    ],
    [
        'path'       => '/services/general-remodeling/',
        'file'       => '/services/general-remodeling/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.9',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604157333-7yq7b6-image_7_.jpg', 'caption' => 'Home renovation and remodeling work by Superior Home Builders in Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604157610-hamrrh-image_8_.jpg', 'caption' => 'Whole-home renovation in progress in Grant County, Eastern Oregon'],
        ],
    ],
    [
        'path'       => '/services/kitchen-remodeling/',
        'file'       => '/services/kitchen-remodeling/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.9',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604147279-gcsj2m-image_3_.jpg', 'caption' => 'Kitchen remodeling with custom cabinetry by Superior Home Builders in Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604148523-9gqjfg-image_4_.jpg', 'caption' => 'Custom kitchen renovation with countertop and appliance upgrades in Eastern Oregon'],
        ],
    ],
    [
        'path'       => '/services/bathroom-remodeling/',
        'file'       => '/services/bathroom-remodeling/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.9',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604143637-sycb6k-image.jpg', 'caption' => 'Custom bathroom remodel completed by Superior Home Builders in Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604145059-2lrm2s-image_1_.jpg', 'caption' => 'Tile work and fixture installation for bathroom renovation in Eastern Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604145485-ddn578-image_2_.jpg', 'caption' => 'Completed bathroom remodeling project in Grant County, Oregon'],
        ],
    ],
    [
        'path'       => '/services/windows-and-doors/',
        'file'       => '/services/windows-and-doors/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604124347-3q5r39-Finished_windows_Southside.jpg', 'caption' => 'Finished window installation on south-facing exterior by Superior Home Builders'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604139501-amhjvj-Southside_showing_extra_windows.jpg', 'caption' => 'South side of home showing energy-efficient window installation in Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604127216-zp2jli-20240723_114655.jpg', 'caption' => 'Door and window replacement project completed in Grant County, Oregon'],
        ],
    ],
    [
        'path'       => '/services/decks/',
        'file'       => '/services/decks/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604152275-c23ksk-image_5_.jpg', 'caption' => 'Custom deck construction by Superior Home Builders in Eastern Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604155754-lm8f8x-image_6_.jpg', 'caption' => 'Outdoor deck addition with railings completed in Grant County, Oregon'],
        ],
    ],
    [
        'path'       => '/services/framing/',
        'file'       => '/services/framing/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604096131-uq4fqg-20220724_151821.jpg', 'caption' => 'Residential framing work in progress by Superior Home Builders in Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604097152-jcl4h7-20220724_152509.jpg', 'caption' => 'Structural framing for new construction in Grant County, Eastern Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604098293-gywzxu-20220724_152529.jpg', 'caption' => 'Wall framing and structural work by experienced builders in Oregon'],
        ],
    ],
    [
        'path'       => '/services/commercial-construction/',
        'file'       => '/services/commercial-construction/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604158766-8vgar0-image_9_.jpg', 'caption' => 'Commercial construction project completed by Superior Home Builders in Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604160341-4mzu4l-image_10_.jpg', 'caption' => 'Commercial building project in Eastern Oregon by Superior Home Builders'],
        ],
    ],
    [
        'path'       => '/service-area/',
        'file'       => '/service-area/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604162710-mw6is2-image_11_.jpg', 'caption' => 'Superior Home Builders serves Mount Vernon, John Day, Canyon City, Prairie City, and communities across Eastern Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604164592-w2al1l-image_12_.jpg', 'caption' => 'Construction and remodeling services across Grant County, Oregon'],
        ],
    ],
    [
        'path'       => '/areas/mount-vernon/',
        'file'       => '/areas/mount-vernon/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604099376-0r19op-20220724_154635.jpg', 'caption' => 'Home construction and remodeling in Mount Vernon, Oregon near the Blue Mountains'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604101037-ig7pay-20220727_101642.jpg', 'caption' => 'Residential project on Hwy 395 corridor in Mount Vernon, OR'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg', 'caption' => 'Construction work in the Canyon Creek corridor near Mount Vernon, Oregon'],
        ],
    ],
    [
        'path'       => '/areas/john-day/',
        'file'       => '/areas/john-day/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604103182-ak0uqe-20221109_161614_1_.jpg', 'caption' => 'Home remodeling services in John Day, Oregon — Grant County seat'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604104586-837vw8-20221127_142618.jpg', 'caption' => 'Construction project near the John Day River corridor in Grant County, Oregon'],
        ],
    ],
    [
        'path'       => '/areas/canyon-city/',
        'file'       => '/areas/canyon-city/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604105979-qifw3f-20230813_180947.jpg', 'caption' => 'Historic home renovation in Canyon City, Oregon — preserving 1860s mining era character'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604110512-hpeyxa-20230904_195415.jpg', 'caption' => 'Structural renovation work on a Canyon Creek corridor property in Canyon City, OR'],
        ],
    ],
    [
        'path'       => '/areas/prairie-city/',
        'file'       => '/areas/prairie-city/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604111859-dai6kd-20230910_202910.jpg', 'caption' => 'Home construction in Prairie City, Oregon near Strawberry Mountain Wilderness'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604131715-gsv7qf-20250819_192028.jpg', 'caption' => 'High-elevation construction project in Prairie City, OR — built for Grant County snowloads'],
        ],
    ],
    // ── New service pages (added June 2026) ──────────────────────────────────
    [
        'path'       => '/services/roofing/',
        'file'       => '/services/roofing/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://images.unsplash.com/photo-1632759145351-1d592919f522?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'caption' => 'Metal roofing installation by Superior Home Builders in Eastern Oregon'],
        ],
    ],
    [
        'path'       => '/services/pole-barns/',
        'file'       => '/services/pole-barns/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604089870-onrdei-20220414_073700.jpg', 'caption' => 'Pole barn and agricultural building construction by Superior Home Builders in Grant County Oregon'],
        ],
    ],
    [
        'path'       => '/services/gutters/',
        'file'       => '/services/gutters/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604110512-hpeyxa-20230904_195415.jpg', 'caption' => 'Gutter installation by Superior Home Builders in Eastern Oregon'],
        ],
    ],
    [
        'path'       => '/services/excavation/',
        'file'       => '/services/excavation/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg', 'caption' => 'Excavation and site work by Superior Home Builders in Grant County Oregon'],
        ],
    ],
    [
        'path'       => '/services/siding/',
        'file'       => '/services/siding/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=1200&q=80', 'caption' => 'Hardie siding and exterior cladding installation by Superior Home Builders in Eastern Oregon'],
        ],
    ],
    [
        'path'       => '/services/fencing/',
        'file'       => '/services/fencing/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604111859-dai6kd-20230910_202910.jpg', 'caption' => 'Cedar fencing installation by Superior Home Builders in Grant County Oregon'],
        ],
    ],
    [
        'path'       => '/services/painting/',
        'file'       => '/services/painting/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270979-4l74wp-468299739_10161024404097734_2434409497451082464_n.jpg', 'caption' => 'Interior and exterior painting services by Superior Home Builders in Eastern Oregon'],
        ],
    ],
    [
        'path'       => '/services/insulation/',
        'file'       => '/services/insulation/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604271465-dqvg3l-468352707_10161044504572734_7925629043452829949_n.jpg', 'caption' => 'Insulation and drywall installation by Superior Home Builders in Grant County Oregon'],
        ],
    ],
    [
        'path'       => '/services/electrical-plumbing-hvac/',
        'file'       => '/services/electrical-plumbing-hvac/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604272736-wpmbnz-468453996_10161079313307734_5962081137845027174_n.jpg', 'caption' => 'Electrical plumbing and HVAC services by Superior Home Builders in Eastern Oregon'],
        ],
    ],
    [
        'path'       => '/services/garages/',
        'file'       => '/services/garages/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604273137-ksvcbn-518240531_10161958113367734_8953895085965006897_n.jpg', 'caption' => 'Garage construction and additions by Superior Home Builders in Grant County Oregon'],
        ],
    ],
    [
        'path'       => '/services/storm-damage-repair/',
        'file'       => '/services/storm-damage-repair/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604169523-2ffusu-image_13_.jpg', 'caption' => 'Storm damage and wind damage repair by Superior Home Builders in Eastern Oregon'],
        ],
    ],
    // ── New area pages (Grant County + Harney County, added June 2026) ────────
    [
        'path'       => '/areas/dayville/',
        'file'       => '/areas/dayville/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.7',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg', 'caption' => 'Construction and remodeling services in Dayville Oregon along the John Day River corridor'],
        ],
    ],
    [
        'path'       => '/areas/long-creek/',
        'file'       => '/areas/long-creek/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.7',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604105979-qifw3f-20230813_180947.jpg', 'caption' => 'Home construction services in Long Creek Oregon northern Grant County'],
        ],
    ],
    [
        'path'       => '/areas/monument/',
        'file'       => '/areas/monument/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.7',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604110512-hpeyxa-20230904_195415.jpg', 'caption' => 'Building and remodeling services in Monument Oregon North Fork John Day River area'],
        ],
    ],
    [
        'path'       => '/areas/seneca/',
        'file'       => '/areas/seneca/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.7',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604111859-dai6kd-20230910_202910.jpg', 'caption' => 'High-elevation construction in Seneca Oregon Bear Valley at 4676 feet'],
        ],
    ],
    [
        'path'       => '/areas/burns/',
        'file'       => '/areas/burns/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.7',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604131715-gsv7qf-20250819_192028.jpg', 'caption' => 'Construction and remodeling services in Burns Oregon Harney County seat'],
        ],
    ],
    [
        'path'       => '/areas/hines/',
        'file'       => '/areas/hines/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.7',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604127216-zp2jli-20240723_114655.jpg', 'caption' => 'Home building and additions in Hines Oregon gateway to the Harney Basin'],
        ],
    ],

    [
        'path'       => '/about/',
        'file'       => '/about/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.7',
        'images'     => [
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604170464-37ufln-image_14_.jpg', 'caption' => 'Superior Home Builders team — over 25 years of construction experience in Eastern Oregon'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604179301-ru0crs-Solar_array_finished.jpg', 'caption' => 'Solar array installation completed by Superior Home Builders — expanding service offerings'],
            ['src' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604179882-as63pf-Solar_array_man_size.jpg', 'caption' => 'Large-scale solar array installation project demonstrating Superior Home Builders\' capabilities'],
        ],
    ],
    [
        'path'       => '/contact/',
        'file'       => '/contact/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.7',
    ],
    [
        'path'       => '/faq/',
        'file'       => '/faq/index.php',
        'changefreq' => 'monthly',
        'priority'   => '0.6',
    ],
    [
        'path'       => '/blog/',
        'file'       => '/blog/index.php',
        'changefreq' => 'weekly',
        'priority'   => '0.7',
    ],
    [
        'path'       => '/privacy-policy/',
        'file'       => '/privacy-policy/index.php',
        'changefreq' => 'yearly',
        'priority'   => '0.3',
    ],
    [
        'path'       => '/terms/',
        'file'       => '/terms/index.php',
        'changefreq' => 'yearly',
        'priority'   => '0.3',
    ],
    [
        'path'       => '/cookie-policy/',
        'file'       => '/cookie-policy/index.php',
        'changefreq' => 'yearly',
        'priority'   => '0.3',
    ],
    [
        'path'       => '/accessibility/',
        'file'       => '/accessibility/index.php',
        'changefreq' => 'yearly',
        'priority'   => '0.3',
    ],
];
function smLastmod(string $file): string {
    $abs = $_SERVER['DOCUMENT_ROOT'] . $file;
    return is_file($abs) ? date('Y-m-d', filemtime($abs)) : date('Y-m-d');
}
function smImageLoc(string $src, string $baseUrl): string {
    return (strpos($src, 'http') === 0) ? $src : $baseUrl . $src;
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php foreach ($pages as $page): ?>
  <url>
    <loc><?= htmlspecialchars($baseUrl . $page['path']) ?></loc>
    <lastmod><?= smLastmod($page['file']) ?></lastmod>
    <changefreq><?= $page['changefreq'] ?></changefreq>
    <priority><?= $page['priority'] ?></priority>
<?php foreach ($page['images'] ?? [] as $img): ?>
    <image:image>
      <image:loc><?= htmlspecialchars(smImageLoc($img['src'], $baseUrl)) ?></image:loc>
      <image:caption><?= htmlspecialchars($img['caption']) ?></image:caption>
    </image:image>
<?php endforeach; ?>
  </url>
<?php endforeach; ?>
<?php foreach ($blogPosts as $post): ?>
  <url>
    <loc><?= htmlspecialchars($baseUrl . '/blog/' . $post['slug'] . '/') ?></loc>
    <lastmod><?= $post['dateISO'] ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
    <image:image>
      <image:loc><?= htmlspecialchars(smImageLoc($post['image'], $baseUrl)) ?></image:loc>
      <image:caption><?= htmlspecialchars($post['alt']) ?></image:caption>
    </image:image>
  </url>
<?php endforeach; ?>
</urlset>
