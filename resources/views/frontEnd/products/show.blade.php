<?php
$url = 'https://appfunbd.com';
$homeUrl = url('/');
$imageUrl = 'frontEnd/portfolio/image/appfunbd_cover.png';
$canonical = $url . '/products/' . $product['slug'];
$keywords = 'AppFunBD, ' . $product['title'] . ', ' . implode(', ', $product['tech']) . ', software development Bangladesh, Dhaka software company';

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'SoftwareApplication',
            '@id' => $canonical . '#software',
            'name' => $product['title'],
            'description' => $product['meta_description'],
            'applicationCategory' => 'BusinessApplication',
            'operatingSystem' => 'Web-based',
            'url' => $canonical,
            'image' => asset($imageUrl),
            'provider' => ['@id' => $url . '/#organization'],
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id' => $canonical . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $url],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Products', 'item' => $url . '/#products'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $product['title'], 'item' => $canonical],
            ],
        ],
        [
            '@type' => 'FAQPage',
            '@id' => $canonical . '#faq',
            'mainEntity' => array_map(function ($faq) {
                return [
                    '@type' => 'Question',
                    'name' => $faq['q'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq['a'],
                    ],
                ];
            }, $product['faqs']),
        ],
    ],
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?php echo $product['meta_title']; ?></title>
    <meta name="description" content="<?php echo $product['meta_description']; ?>">
    <meta name="robots" content="index, follow">

    <link href="{{ asset('frontEnd/portfolio/image/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('frontEnd/portfolio/image/favicon.ico') }}" rel="icon" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('frontEnd/portfolio/css/appfunbd_style.css') }}" rel="stylesheet" type="text/css" />

    <link rel="canonical" href="<?php echo $canonical; ?>" />

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $product['meta_title']; ?>">
    <meta property="og:description" content="<?php echo $product['meta_description']; ?>">
    <meta property="og:image" content="{{ asset($imageUrl) }}">
    <meta property="og:url" content="<?php echo $canonical; ?>">
    <meta property="og:site_name" content="AppFunBD">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $product['meta_title']; ?>">
    <meta name="twitter:description" content="<?php echo $product['meta_description']; ?>">
    <meta name="twitter:image" content="{{ asset($imageUrl) }}">

    <meta name="author" content="Abdul Alim">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="theme-color" content="#ffffff">

    <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</head>

<body>
    <a class="skip-link" href="#main-content">Skip to content</a>

    @include('frontEnd.appfunbd.partials.header')

    <main id="main-content">
        <nav class="breadcrumb-nav container" aria-label="Breadcrumb">
            <a href="{{ $homeUrl }}">Home</a>
            <span aria-hidden="true">/</span>
            <a href="{{ $homeUrl }}#products">Products</a>
            <span aria-hidden="true">/</span>
            <span aria-current="page">{{ $product['title'] }}</span>
        </nav>

        <!-- PRODUCT HERO -->
        <section class="product-hero">
            <div class="container product-hero-grid">
                <div>
                    <span class="product-code" aria-hidden="true" style="--cat: {{ $product['accent'] }}">{{ $product['code'] }}</span>
                    <h1>{{ $product['h1'] }}</h1>
                    <p class="lead">{{ $product['intro'] }}</p>
                    <div class="hero-actions">
                        <a class="btn-main" href="{{ $homeUrl }}#contact">Request a Demo</a>
                        @if ($product['demo_link'])
                            <a class="btn-outline" href="{{ $product['demo_link'] }}" target="_blank" rel="noopener noreferrer">View Live Demo</a>
                        @else
                            <a class="btn-outline" href="https://wa.me/8801675342612" target="_blank" rel="noopener noreferrer">Chat on WhatsApp</a>
                        @endif
                    </div>
                </div>
                <div class="product-hero-tile" style="--cat: {{ $product['accent'] }}" aria-hidden="true">
                    <span>{{ $product['code'] }}</span>
                </div>
            </div>
        </section>

        <!-- FEATURES -->
        <section class="services" aria-labelledby="features-title">
            <div class="container">
                <div class="section-title">
                    <h2 id="features-title">Key Features</h2>
                    <p class="lead">What's included in the {{ $product['title'] }}.</p>
                </div>
                <div class="service-grid">
                    @foreach ($product['features'] as $index => $feature)
                        <div class="service-card">
                            <span class="service-icon" aria-hidden="true">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <h3>{{ $feature['title'] }}</h3>
                            <p>{{ $feature['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- TECH STACK -->
        <section class="tech-stack" aria-labelledby="tech-title">
            <div class="container">
                <div class="section-title">
                    <h2 id="tech-title">Built With</h2>
                    <p class="lead">Technologies used to build the {{ $product['title'] }}.</p>
                </div>
                <ul class="tech-badges">
                    @foreach ($product['tech'] as $tech)
                        <li>{{ $tech }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <!-- FAQ -->
        <section class="faq-section" aria-labelledby="faq-title">
            <div class="container">
                <div class="section-title">
                    <h2 id="faq-title">Frequently Asked Questions</h2>
                    <p class="lead">Common questions about the {{ $product['title'] }}.</p>
                </div>
                <div class="faq-list">
                    @foreach ($product['faqs'] as $faq)
                        <div class="faq-item">
                            <h3>{{ $faq['q'] }}</h3>
                            <p>{{ $faq['a'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @if (count($relatedProducts))
            <!-- RELATED PRODUCTS -->
            <section class="products" aria-labelledby="related-title">
                <div class="container">
                    <div class="section-title">
                        <h2 id="related-title">Related Business Solutions</h2>
                        <p class="lead">Other ready-made systems that pair well with the {{ $product['title'] }}.</p>
                    </div>
                    <div class="product-grid">
                        @foreach ($relatedProducts as $related)
                            <article class="product-card" style="--cat: {{ $related['accent'] }}">
                                <span class="product-code" aria-hidden="true">{{ $related['code'] }}</span>
                                <h3><a href="{{ route('products.show', $related['slug']) }}">{{ $related['title'] }}</a></h3>
                                <p>{{ $related['meta_description'] }}</p>
                                <a href="{{ route('products.show', $related['slug']) }}" class="product-link">Learn More &amp; Get Pricing &rarr;</a>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- CTA -->
        <section class="contact-section" id="contact-cta" aria-labelledby="cta-title">
            <div class="container">
                <div class="cta-band">
                    <div>
                        <h2 id="cta-title">Ready to build your {{ $product['title'] }}?</h2>
                        <p>Tell us about your workflow and we'll get back with a scope and quote within 24 hours.</p>
                    </div>
                    <div class="hero-actions">
                        <a class="btn-main" href="tel:+8801675342612">Call +880 1675 342 612</a>
                        <a class="btn-outline" href="mailto:aralim11@gmail.com">Email Us</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('frontEnd.appfunbd.partials.footer', ['footerProducts' => $allProducts])
</body>

</html>
