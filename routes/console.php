<?php

use App\Http\Controllers\frontEnd\ProductController;
use App\Http\Controllers\frontEnd\ServiceController;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('sitemap:generate', function () {
    $baseUrl = 'https://appfunbd.com';
    $imageBase = $baseUrl . '/frontEnd/portfolio/image/';

    // lastmod = when the page's source files last changed: uncommitted edits use the
    // file's modified time, otherwise the last git commit that touched them.
    $lastModified = function (array $files): string {
        $files = collect($files)
            ->map(fn ($f) => base_path($f))
            ->flatMap(fn ($f) => is_dir($f) ? glob($f . '/*.php') : [$f])
            ->filter(fn ($f) => file_exists($f))
            ->values()
            ->all();
        $relative = implode(' ', array_map(fn ($f) => escapeshellarg($f), $files));
        $dirty = trim((string) @shell_exec('git -C ' . escapeshellarg(base_path()) . " status --porcelain -- $relative 2>&1"));
        $committed = trim((string) @shell_exec('git -C ' . escapeshellarg(base_path()) . " log -1 --format=%cs -- $relative 2>&1"));

        if ($dirty === '' && preg_match('/^\d{4}-\d{2}-\d{2}$/', $committed)) {
            return $committed;
        }

        return date('Y-m-d', max(array_map('filemtime', $files)));
    };

    $homeFiles = ['resources/views/welcome.blade.php', 'app/Http/Controllers/frontEnd/ServiceController.php', 'app/Http/Controllers/frontEnd/ProductController.php'];
    $portfolioFiles = ['app/Http/Controllers/frontEnd/PortfolioController.php', 'resources/views/frontEnd/portfolio'];
    $serviceFiles = ['app/Http/Controllers/frontEnd/ServiceController.php', 'resources/views/frontEnd/services/show.blade.php'];
    $productFiles = ['app/Http/Controllers/frontEnd/ProductController.php', 'resources/views/frontEnd/products/show.blade.php'];

    $urls = [
        [
            'loc' => $baseUrl . '/',
            'lastmod' => $lastModified($homeFiles),
            'changefreq' => 'weekly',
            'priority' => '1.0',
            'images' => [
                ['loc' => $imageBase . 'appfunbd_cover.png'],
            ],
        ],
        [
            'loc' => $baseUrl . '/portfolio',
            'lastmod' => $lastModified($portfolioFiles),
            'changefreq' => 'monthly',
            'priority' => '0.8',
            'images' => [
                ['loc' => $imageBase . 'IMG_E8007.png'],
            ],
        ],
    ];

    foreach (ServiceController::catalogue() as $slug => $service) {
        $urls[] = [
            'loc' => $baseUrl . '/services/' . $slug,
            'lastmod' => $lastModified($serviceFiles),
            'changefreq' => 'monthly',
            'priority' => '0.8',
        ];
    }

    foreach (ProductController::catalogue() as $slug => $product) {
        $urls[] = [
            'loc' => $baseUrl . '/products/' . $slug,
            'lastmod' => $lastModified($productFiles),
            'changefreq' => 'monthly',
            'priority' => '0.8',
        ];
    }

    $e = fn (string $value) => htmlspecialchars($value, ENT_XML1 | ENT_QUOTES, 'UTF-8');

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">' . "\n";
    foreach ($urls as $url) {
        $xml .= "    <url>\n";
        $xml .= '        <loc>' . $e($url['loc']) . "</loc>\n";
        $xml .= '        <lastmod>' . $url['lastmod'] . "</lastmod>\n";
        $xml .= '        <changefreq>' . $url['changefreq'] . "</changefreq>\n";
        $xml .= '        <priority>' . $url['priority'] . "</priority>\n";
        foreach ($url['images'] ?? [] as $image) {
            $xml .= "        <image:image>\n";
            $xml .= '            <image:loc>' . $e($image['loc']) . "</image:loc>\n";
            $xml .= "        </image:image>\n";
        }
        $xml .= "    </url>\n";
    }
    $xml .= "</urlset>\n";

    file_put_contents(public_path('sitemap.xml'), $xml);

    $this->info('Sitemap written to public/sitemap.xml with ' . count($urls) . ' URLs.');
})->purpose('Regenerate public/sitemap.xml from the site routes and service/product catalogues');
