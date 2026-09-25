<?php
$url = 'https://appfunbd.com';
$homeUrl = url('/');
$imageUrl = 'frontEnd/portfolio/image/appfunbd_cover.png';
$title = 'AppFunBD | Laravel, PHP & WordPress Web Developer in Bangladesh';
$description = 'AppFunBD (Abdul Alim) — Software Engineer in Dhaka, Bangladesh building Laravel & PHP web apps, WordPress websites, REST APIs, and n8n AI automation. Fast delivery, 24/7 support.';
$keywords = 'AppFunBD, Abdul Alim, web developer Bangladesh, Laravel developer, PHP developer Dhaka, WordPress developer, REST API development, n8n automation expert, AI automation developer, FastAPI developer, software engineer Bangladesh, website development company, freelance web developer Dhaka, Elementor WordPress developer, web application development, website maintenance service, CRM software Bangladesh, lead management system, POS software, point of sale system, order management system, call center software, complaint management system, custom business software solution';

$services = [
    ['icon' => 'code', 'title' => 'Laravel & PHP Web Development', 'description' => 'Custom Laravel and PHP web applications built for performance, security, and scalability — from business websites to complex internal tools.'],
    ['icon' => 'wordpress', 'title' => 'WordPress Website Development', 'description' => 'Responsive WordPress websites using Elementor, custom themes, and plugin integrations for businesses that need a fast, professional online presence.'],
    ['icon' => 'api', 'title' => 'REST API Development & Integration', 'description' => 'Secure, well-documented REST APIs with Laravel Sanctum, JWT, and FastAPI that connect your apps, websites, and third-party services.'],
    ['icon' => 'automation', 'title' => 'n8n & AI Workflow Automation', 'description' => 'End-to-end automation with n8n, Google Gemini AI, WhatsApp, Facebook, and webhooks to eliminate repetitive tasks and speed up operations.'],
    ['icon' => 'bug', 'title' => 'Bug Fixing & Performance Optimization', 'description' => 'Diagnosing and fixing issues in PHP, Laravel, JavaScript, and jQuery codebases while improving speed, stability, and user experience.'],
    ['icon' => 'support', 'title' => 'Website Maintenance & Support', 'description' => 'Ongoing maintenance, security updates, and feature enhancements so your website keeps running smoothly around the clock.'],
];

$products = collect(\App\Http\Controllers\frontEnd\ProductController::catalogue())
    ->map(fn ($item, $slug) => $item + ['slug' => $slug, 'description' => $item['meta_description']])
    ->values()
    ->all();

$workSamples = [
    ['name' => 'AHS Corporation', 'category' => 'WordPress Website', 'accent' => 'wp', 'type' => 'image', 'img' => 'ahs_cor.png', 'link' => 'https://ahscorporationbd.com/', 'stack' => ['WordPress', 'Elementor', 'jQuery', 'MySQL'], 'description' => 'Export-import company website with a clean, professional layout showcasing global trading services.'],
    ['name' => 'Haider Rent A Car', 'category' => 'WordPress Website', 'accent' => 'wp', 'type' => 'image', 'img' => 'haider.png', 'link' => 'https://www.haiderrentacar.com/', 'stack' => ['WordPress', 'Elementor', 'jQuery', 'MySQL'], 'description' => 'Car rental company website with vehicle listings, pricing details, and direct contact options.'],
    ['name' => 'Lead Management System', 'category' => 'Laravel Web App', 'accent' => 'laravel', 'type' => 'image', 'img' => 'lead.png', 'link' => '#', 'stack' => ['Laravel', 'jQuery', 'MySQL', 'Bootstrap'], 'description' => 'CRM-style application for creating, assigning, and tracking sales leads through to conversion.'],
    ['name' => 'Task Management System', 'category' => 'Laravel Web App', 'accent' => 'laravel', 'type' => 'image', 'img' => 'task.png', 'link' => '#', 'stack' => ['Laravel', 'jQuery', 'MySQL', 'Bootstrap'], 'description' => 'Team task tracker with assignment, deadlines, and progress tracking for better collaboration.'],
    ['name' => 'Shop Accounting System', 'category' => 'Laravel Web App', 'accent' => 'laravel', 'type' => 'image', 'img' => 'accounting.png', 'link' => '#', 'stack' => ['Laravel', 'jQuery', 'MySQL', 'Bootstrap'], 'description' => 'Accounting platform for shop owners to track sales, expenses, and generate financial reports.'],
    ['name' => 'REST API (Sanctum)', 'category' => 'API Development', 'accent' => 'api', 'type' => 'code', 'img' => 'rest.png', 'link' => 'https://github.com/aralim11/laravel-sanctum-rest-api', 'stack' => ['Laravel', 'Sanctum', 'JWT', 'MySQL'], 'description' => 'Secure, scalable RESTful API built with Laravel Sanctum for easy integration with other applications.'],
    ['name' => 'FastAPI Service', 'category' => 'API Development', 'accent' => 'api', 'type' => 'code', 'img' => 'fast_api.png', 'link' => 'https://github.com/aralim11/fastapi-python', 'stack' => ['Python', 'FastAPI', 'SQLAlchemy'], 'description' => 'High-performance Python API built with FastAPI and SQLAlchemy for scalable backend services.'],
    ['name' => 'WhatsApp AI Chat Bot', 'category' => 'n8n Automation', 'accent' => 'automation', 'type' => 'image', 'img' => 'wa_n8n.png', 'link' => '#', 'stack' => ['n8n', 'WhatsApp', 'Gemini AI'], 'description' => 'Automated WhatsApp assistant using Gemini AI for image analysis, voice transcription, and replies.'],
    ['name' => 'AI Knowledge System (RAG)', 'category' => 'n8n Automation', 'accent' => 'automation', 'type' => 'image', 'img' => 'rag_n8n.png', 'link' => '#', 'stack' => ['n8n', 'Gemini AI', 'Supabase Vector Store'], 'description' => 'Automated pipeline turning Google Drive files into a searchable, AI-readable knowledge base.'],
];

$techStack = ['PHP', 'Laravel', 'Python', 'FastAPI', 'n8n', 'JavaScript', 'jQuery', 'WordPress', 'Elementor', 'MySQL', 'REST API', 'JWT / Sanctum', 'Gemini AI', 'Bootstrap', 'Webhook Integration'];

$stats = [
    ['value' => '7+', 'label' => 'Years Experience'],
    ['value' => '18+', 'label' => 'Projects Delivered'],
    ['value' => '10+', 'label' => 'Technologies Mastered'],
    ['value' => '24/7', 'label' => 'Support Availability'],
];

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'ProfessionalService',
            '@id' => $url . '/#organization',
            'name' => 'AppFunBD',
            'image' => asset($imageUrl),
            'logo' => asset($imageUrl),
            'url' => $url,
            'telephone' => '+8801675342612',
            'email' => 'aralim11@gmail.com',
            'priceRange' => '$$',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Dhaka',
                'addressCountry' => 'BD',
            ],
            'areaServed' => 'Worldwide',
            'founder' => [
                '@type' => 'Person',
                'name' => 'Abdul Alim',
                'jobTitle' => 'Software Engineer | Web Application Developer',
                'sameAs' => [
                    'https://www.linkedin.com/in/aralim11/',
                    'https://github.com/aralim11',
                ],
            ],
            'sameAs' => [
                'https://www.linkedin.com/in/aralim11/',
                'https://github.com/aralim11',
            ],
            'makesOffer' => array_map(function ($service) {
                return [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => $service['title'],
                        'description' => $service['description'],
                    ],
                ];
            }, array_merge($services, $products)),
        ],
        [
            '@type' => 'WebSite',
            '@id' => $url . '/#website',
            'url' => $url,
            'name' => 'AppFunBD',
            'publisher' => ['@id' => $url . '/#organization'],
        ],
        [
            '@type' => 'ItemList',
            '@id' => $url . '/#products',
            'name' => 'AppFunBD Products & Business Solutions',
            'itemListElement' => array_values(array_map(function ($product, $index) use ($url) {
                return [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'item' => [
                        '@type' => 'Service',
                        'name' => $product['title'],
                        'url' => $url . '/products/' . $product['slug'],
                        'description' => $product['description'],
                        'provider' => ['@id' => $url . '/#organization'],
                    ],
                ];
            }, $products, array_keys($products))),
        ],
        [
            '@type' => 'ItemList',
            '@id' => $url . '/#work-samples',
            'name' => 'AppFunBD Work Samples',
            'itemListElement' => array_values(array_map(function ($project, $index) use ($url) {
                return [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'item' => [
                        '@type' => 'CreativeWork',
                        'name' => $project['name'],
                        'url' => $project['link'] !== '#' ? $project['link'] : $url . '/portfolio',
                        'image' => asset('frontEnd/portfolio/image/' . $project['img']),
                        'description' => $project['description'],
                        'keywords' => implode(', ', $project['stack']),
                    ],
                ];
            }, $workSamples, array_keys($workSamples))),
        ],
    ],
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="robots" content="index, follow">

    <!-- Favicon -->
    <link href="{{ asset('frontEnd/portfolio/image/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('frontEnd/portfolio/image/favicon.ico') }}" rel="icon" type="image/x-icon" />

    <!-- Simple reset + Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('frontEnd/portfolio/css/appfunbd_style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $url; ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="{{ asset($imageUrl) }}">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:site_name" content="AppFunBD">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="{{ asset($imageUrl) }}">

    <!-- Additional Meta Tags -->
    <meta name="author" content="Abdul Alim">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="theme-color" content="#ffffff">

    <!-- Structured Data -->
    <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</head>

<body>
    <a class="skip-link" href="#main-content">Skip to content</a>

    @include('frontEnd.appfunbd.partials.header')

    <main id="main-content">
        <!-- HERO -->
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow">Web Development &amp; Automation Studio in Dhaka, Bangladesh</p>
                    <h1>Laravel &amp; PHP Web Development, WordPress Sites, and n8n AI Automation — Built by Abdul Alim</h1>
                    <p class="lead">
                        AppFunBD helps businesses ship fast, secure, and scalable software: custom Laravel &amp; PHP
                        web applications, WordPress websites, REST API integrations, and n8n-powered AI automation
                        that removes repetitive manual work.
                    </p>
                    <div class="hero-actions">
                        <a class="btn-main" href="#contact">Get a Free Quote</a>
                        <a class="btn-outline" href="#work-samples">View Work Samples</a>
                    </div>
                    <ul class="hero-highlights">
                        <li>Fast delivery cycles</li>
                        <li>Transparent pricing</li>
                        <li>Post-launch support</li>
                    </ul>
                </div>
                <div class="hero-stats" aria-label="Experience summary">
                    @foreach ($stats as $stat)
                        <div class="stat-card">
                            <span class="stat-value">{{ $stat['value'] }}</span>
                            <span class="stat-label">{{ $stat['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- SERVICES -->
        <section class="services" id="services" aria-labelledby="services-title">
            <div class="container">
                <div class="section-title">
                    <h2 id="services-title">Web Development &amp; Automation Services</h2>
                    <p class="lead">Everything you need to launch, run, and automate your web presence — under one roof.</p>
                </div>
                <div class="service-grid">
                    @foreach ($services as $service)
                        <div class="service-card">
                            <span class="service-icon" aria-hidden="true">{{ strtoupper(substr($service['title'], 0, 1)) }}</span>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- PRODUCTS -->
        <section class="products" id="products" aria-labelledby="products-title">
            <div class="container">
                <div class="section-title">
                    <h2 id="products-title">Ready-Made Business Software Products</h2>
                    <p class="lead">
                        Ready-to-deploy CRM, POS, and management systems — customized to your workflow and launched
                        fast, or built from scratch as a custom business solution.
                    </p>
                </div>
                <div class="product-grid">
                    @foreach ($products as $product)
                        <article class="product-card" style="--cat: {{ $product['accent'] }}">
                            <span class="product-code" aria-hidden="true">{{ $product['code'] }}</span>
                            <h3><a href="{{ route('products.show', $product['slug']) }}">{{ $product['title'] }}</a></h3>
                            <p>{{ $product['description'] }}</p>
                            <a href="{{ route('products.show', $product['slug']) }}" class="product-link">Learn More &amp; Get Pricing &rarr;</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- WORK SAMPLES -->
        <section class="work-samples" id="work-samples" aria-labelledby="work-title">
            <div class="container">
                <div class="section-title">
                    <h2 id="work-title">Work Samples &amp; Recent Projects</h2>
                    <p class="lead">
                        A selection of Laravel web apps, WordPress websites, REST APIs, and n8n automations delivered
                        for real clients. <a href="{{ route('portfolio.index') }}">See the full portfolio &rarr;</a>
                    </p>
                </div>
                <div class="work-grid">
                    @foreach ($workSamples as $index => $project)
                        @php
                            $isExternal = $project['link'] !== '#';
                            $isGithub = $isExternal && str_contains($project['link'], 'github.com');
                            $linkHref = $isExternal ? $project['link'] : route('portfolio.index');
                            $linkLabel = ! $isExternal ? 'View Case Study' : ($isGithub ? 'View on GitHub' : 'Visit Live Site');
                        @endphp
                        <article class="work-card" data-accent="{{ $project['accent'] }}">
                            <div class="work-thumb">
                                <div class="browser-bar" aria-hidden="true"><span></span><span></span><span></span></div>
                                @if ($project['type'] === 'code')
                                    <div class="work-code">
                                        <span class="work-code-icon" aria-hidden="true">&lt;/&gt;</span>
                                    </div>
                                @else
                                    <img src="{{ asset('frontEnd/portfolio/image/' . $project['img']) }}"
                                        alt="{{ $project['name'] }} — {{ $project['category'] }} built with {{ implode(', ', $project['stack']) }}"
                                        loading="{{ $index < 3 ? 'eager' : 'lazy' }}" width="400" height="250" />
                                @endif
                                <span class="work-category">{{ $project['category'] }}</span>
                            </div>
                            <div class="work-body">
                                <h3>{{ $project['name'] }}</h3>
                                <p>{{ $project['description'] }}</p>
                                <ul class="work-stack">
                                    @foreach ($project['stack'] as $tech)
                                        <li>{{ $tech }}</li>
                                    @endforeach
                                </ul>
                                <a href="{{ $linkHref }}" @if ($isExternal) target="_blank" rel="noopener noreferrer" @endif class="work-link">{{ $linkLabel }} &rarr;</a>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="section-cta">
                    <a class="btn-outline" href="{{ route('portfolio.index') }}">View Full Portfolio</a>
                </div>
            </div>
        </section>

        <!-- TECH STACK -->
        <section class="tech-stack" id="tech-stack" aria-labelledby="tech-title">
            <div class="container">
                <div class="section-title">
                    <h2 id="tech-title">Languages, Frameworks &amp; Tools</h2>
                    <p class="lead">Core technologies used to build, integrate, and automate every project.</p>
                </div>
                <ul class="tech-badges">
                    @foreach ($techStack as $tech)
                        <li>{{ $tech }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="contact-section" id="contact" aria-labelledby="contact-title">
            <div class="container">
                <div class="card" role="region" aria-label="AppFunBD contact card">
                    <div class="left">
                        <div class="brand">
                            <div class="logo">AF</div>
                            <div>
                                <h2 id="contact-title">Let's Build Something Together</h2>
                                <p class="lead">Smart web solutions — quick response, fast delivery, friendly support.</p>
                            </div>
                        </div>

                        <div class="service" aria-labelledby="service-title">
                            <div class="service-icon">S</div>
                            <div class="service-info">
                                <h4 id="service-title">Our Services</h4>
                                <p>Website development, web application, API integrations, website performance optimization, n8n
                                    automation etc.</p>
                            </div>
                        </div>

                        <div style="margin-top:16px;">
                            <p style="margin:0 0 6px 0; font-weight:600;">Why choose us?</p>
                            <ul style="margin:8px 0 0 18px; color:var(--muted);">
                                <li>Fast delivery cycles</li>
                                <li>Transparent pricing</li>
                                <li>Post-launch support</li>
                            </ul>
                        </div>
                    </div>

                    <aside class="contact" aria-label="contact details">
                        <h3>Contact Us</h3>
                        <p class="desc">We're available 24 hours 7 days</p>

                        <div class="info" role="list">
                            <div class="chip" role="listitem" title="Phone">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.86 19.86 0 0 1-3.07-8.63A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12 1.01.45 2 .99 2.9a2 2 0 0 1-.45 2.11L8.21 9.79a16 16 0 0 0 6 6l1.05-1.05a2 2 0 0 1 2.11-.45c.9.54 1.9.87 2.9.99A2 2 0 0 1 22 16.92z"
                                        fill="#0f172a" />
                                </svg>
                                <a href="tel:+8801675342612">+880 1675 342 612</a>
                            </div>

                            <div class="chip" role="listitem" title="Email">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M3 8.5v7A2.5 2.5 0 0 0 5.5 18h13A2.5 2.5 0 0 0 21 15.5v-7L12 12 3 8.5z"
                                        fill="#0f172a" />
                                    <path d="M3 6.5A2.5 2.5 0 0 1 5.5 4h13A2.5 2.5 0 0 1 21 6.5V7.1L12 11 3 7.1V6.5z"
                                        fill="#0f172a" />
                                </svg>
                                <a href="mailto:aralim11@gmail.com">aralim11@gmail.com</a>
                            </div>

                            <div class="chip" role="listitem" title="WhatsApp">
                                <svg width="16" height="16" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                                    <path fill="#25D366"
                                        d="M16 .5A15.5 15.5 0 0 0 2.5 16c0 2.74.73 5.42 2.12 7.76L2 30l6.47-2.54A15.5 15.5 0 1 0 16 .5Z" />
                                    <path fill="#fff"
                                        d="M23.1 19.28c-.38-.19-2.2-1.08-2.54-1.2-.34-.13-.6-.19-.85.19s-.98 1.2-1.2 1.45-.44.28-.82.09a12.69 12.69 0 0 1-3.72-2.3 13.91 13.91 0 0 1-2.58-3.19c-.27-.47 0-.72.2-.91.2-.18.47-.47.7-.71.23-.23.31-.39.46-.65.15-.26.08-.49 0-.68-.09-.19-.84-2.05-1.16-2.81-.31-.74-.62-.64-.85-.65-.22 0-.47-.01-.72-.01a1.39 1.39 0 0 0-1 .46c-.34.38-1.3 1.27-1.3 3.1s1.33 3.6 1.52 3.85c.19.25 2.61 3.99 6.32 5.6.88.38 1.56.61 2.09.78.88.28 1.68.24 2.31.14.71-.1 2.2-.9 2.5-1.78.31-.88.31-1.64.21-1.79-.1-.15-.34-.24-.72-.43Z" />
                                </svg>
                                <a href="https://wa.me/8801675342612" target="_blank" rel="noopener noreferrer">Chat on WhatsApp</a>
                            </div>

                            <div class="chip" role="listitem" title="Telegram">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path fill="#0088cc"
                                        d="M9.993 15.577 9.86 20.5c.414 0 .594-.177.81-.389l1.944-1.858 4.028 2.953c.738.407 1.263.193 1.454-.68l2.637-12.39c.27-1.223-.442-1.704-1.176-1.405L3.58 10.47c-1.197.466-1.179 1.144-.203 1.452l4.93 1.54 11.47-7.182-9.785 9.297Z" />
                                </svg>
                                <a href="https://t.me/aralim11" target="_blank" rel="noopener noreferrer">Telegram</a>
                            </div>

                            <div class="chip chip-link" role="listitem">
                                <small>Portfolio: <a href="{{ route('portfolio.index') }}" target="_blank"
                                        rel="noopener noreferrer">appfunbd.com/portfolio</a></small>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    @include('frontEnd.appfunbd.partials.footer', ['footerProducts' => $products])
</body>

</html>
