<?php
$url = 'https://appfunbd.com';
$homeUrl = url('/');
$imageUrl = 'frontEnd/portfolio/image/appfunbd_cover.png';
$canonical = $url . '/services/' . $service['slug'];
$keywords = 'AppFunBD, ' . $service['keywords'] . ', ' . implode(', ', $service['tech']);

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            '@id' => $canonical . '#service',
            'name' => $service['title'],
            'serviceType' => $service['service_type'],
            'description' => $service['meta_description'],
            'url' => $canonical,
            'image' => $url . '/' . $imageUrl,
            'areaServed' => $service['area_served'],
            'provider' => [
                '@type' => 'ProfessionalService',
                '@id' => $url . '/#organization',
                'name' => 'AppFunBD',
                'url' => $url,
                'telephone' => '+8801675342612',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'Dhaka',
                    'addressCountry' => 'BD',
                ],
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => $service['title'],
                'itemListElement' => array_map(function ($feature) {
                    return [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => $feature['title'],
                            'description' => $feature['description'],
                        ],
                    ];
                }, $service['features']),
            ],
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonical . '#webpage',
            'url' => $canonical,
            'name' => $service['meta_title'],
            'description' => $service['meta_description'],
            'isPartOf' => ['@id' => $url . '/#website'],
            'about' => ['@id' => $canonical . '#service'],
            'breadcrumb' => ['@id' => $canonical . '#breadcrumb'],
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id' => $canonical . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $url],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $url . '/#services'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $service['title'], 'item' => $canonical],
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
            }, $service['faqs']),
        ],
    ],
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>{{ $service['meta_title'] }}</title>
    <meta name="description" content="{{ $service['meta_description'] }}">
    <meta name="robots" content="index, follow">

    <link href="{{ asset('frontEnd/portfolio/image/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('frontEnd/portfolio/image/favicon.ico') }}" rel="icon" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('frontEnd/portfolio/css/appfunbd_style.css') }}" rel="stylesheet" type="text/css" />

    <link rel="canonical" href="{{ $canonical }}" />

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $service['meta_title'] }}">
    <meta property="og:description" content="{{ $service['meta_description'] }}">
    <meta property="og:image" content="{{ $url . '/' . $imageUrl }}">
    <meta property="og:image:alt" content="AppFunBD — Web Development & Automation in Bangladesh">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:site_name" content="AppFunBD">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $service['meta_title'] }}">
    <meta name="twitter:description" content="{{ $service['meta_description'] }}">
    <meta name="twitter:image" content="{{ $url . '/' . $imageUrl }}">

    <meta name="author" content="Abdul Alim">
    <meta name="keywords" content="{{ $keywords }}">
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
            <a href="{{ $homeUrl }}#services">Services</a>
            <span aria-hidden="true">/</span>
            <span aria-current="page">{{ $service['title'] }}</span>
        </nav>

        <!-- SERVICE HERO -->
        <section class="product-hero">
            <div class="container product-hero-grid">
                <div>
                    <span class="product-code" aria-hidden="true" style="--cat: {{ $service['accent'] }}">{{ $service['code'] }}</span>
                    <h1>{{ $service['h1'] }}</h1>
                    <p class="lead">{{ $service['intro'] }}</p>
                    <div class="hero-actions">
                        <a class="btn-main" href="{{ $homeUrl }}#contact">Get a Free Quote</a>
                        <a class="btn-outline" href="https://wa.me/8801675342612" target="_blank" rel="noopener noreferrer">Chat on WhatsApp</a>
                    </div>
                </div>
                <div class="product-hero-tile" style="--cat: {{ $service['accent'] }}" aria-hidden="true">
                    <span>{{ $service['code'] }}</span>
                </div>
            </div>
        </section>

        <!-- WHAT'S INCLUDED -->
        <section class="services" aria-labelledby="features-title">
            <div class="container">
                <div class="section-title">
                    <h2 id="features-title">What Our {{ $service['title'] }} Includes</h2>
                    <p class="lead">Everything you get when you work with AppFunBD.</p>
                </div>
                <div class="service-grid">
                    @foreach ($service['features'] as $index => $feature)
                        <div class="service-card">
                            <span class="service-icon" aria-hidden="true">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <h3>{{ $feature['title'] }}</h3>
                            <p>{{ $feature['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- PROCESS -->
        <section class="services" aria-labelledby="process-title">
            <div class="container">
                <div class="section-title">
                    <h2 id="process-title">How It Works</h2>
                    <p class="lead">A simple, transparent process from first call to launch.</p>
                </div>
                <ol class="service-grid process-grid">
                    @foreach ($service['process'] as $index => $step)
                        <li class="service-card">
                            <span class="service-icon" aria-hidden="true">{{ $index + 1 }}</span>
                            <h3>{{ $step['title'] }}</h3>
                            <p>{{ $step['description'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <!-- TECH STACK -->
        <section class="tech-stack" aria-labelledby="tech-title">
            <div class="container">
                <div class="section-title">
                    <h2 id="tech-title">Tools &amp; Technologies</h2>
                    <p class="lead">What we use to deliver {{ $service['title'] }}.</p>
                </div>
                <ul class="tech-badges">
                    @foreach ($service['tech'] as $tech)
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
                    <p class="lead">Common questions about our {{ $service['title'] }}.</p>
                </div>
                <div class="faq-list">
                    @foreach ($service['faqs'] as $faq)
                        <div class="faq-item">
                            <h3>{{ $faq['q'] }}</h3>
                            <p>{{ $faq['a'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @if (count($relatedServices))
            <!-- RELATED SERVICES -->
            <section class="products" aria-labelledby="related-title">
                <div class="container">
                    <div class="section-title">
                        <h2 id="related-title">Related Services</h2>
                        <p class="lead">Other services that pair well with {{ $service['title'] }}.</p>
                    </div>
                    <div class="product-grid">
                        @foreach ($relatedServices as $related)
                            <article class="product-card" style="--cat: {{ $related['accent'] }}">
                                <span class="product-code" aria-hidden="true">{{ $related['code'] }}</span>
                                <h3><a href="{{ route('services.show', $related['slug']) }}">{{ $related['title'] }}</a></h3>
                                <p>{{ $related['summary'] }}</p>
                                <a href="{{ route('services.show', $related['slug']) }}" class="product-link">Learn More &rarr;</a>
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
                        <h2 id="cta-title">Need {{ $service['title'] }}?</h2>
                        <p>Tell us what you need and we'll get back with a scope and quote within 24 hours.</p>
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
