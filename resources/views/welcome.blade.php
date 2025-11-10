<?php
$imageUrl = 'frontEnd/portfolio/image/appfunbd_cover.png';
$url = 'https://appfunbd.com';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>AppFunBD — Service & Contact</title>

    <!-- Simple reset + Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('frontEnd/portfolio/css/appfunbd_style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $url; ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Smart web solutions — quick response, fast delivery, friendly support.">
    <meta property="og:description"
        content="Website development, web application, API integrations, website performance optimization, n8n
                            automation etc.">
    <meta property="og:image" content="{{ asset($imageUrl) }}">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:site_name" content="<?php echo $url; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Smart web solutions — quick response, fast delivery, friendly support.">
    <meta name="twitter:description"
        content="Website development, web application, API integrations, website performance optimization, n8n
                            automation etc.">
    <meta name="twitter:image" content="{{ asset($imageUrl) }}">

    <!-- Additional Meta Tags -->
    <meta name="author" content="Abdul Alim">
    <meta name="keywords"
        content="Automation, Software Engineer, Web Scraping, n8n, Laravel, php, Webseite Development">
    <meta name="theme-color" content="#ffffff">

</head>

<body>
    <div class="wrap">
        <div class="card" role="region" aria-label="AppFunBD contact card">
            <div class="left">
                <div class="brand">
                    <div class="logo">AF</div>
                    <div>
                        <h1>AppFunBD</h1>
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
                        <!-- phone SVG -->
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.86 19.86 0 0 1-3.07-8.63A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12 1.01.45 2 .99 2.9a2 2 0 0 1-.45 2.11L8.21 9.79a16 16 0 0 0 6 6l1.05-1.05a2 2 0 0 1 2.11-.45c.9.54 1.9.87 2.9.99A2 2 0 0 1 22 16.92z"
                                fill="#0f172a" />
                        </svg>
                        <a href="tel:+8801675342612">+880 1675 342 612</a>
                    </div>

                    <div class="chip" role="listitem" title="Email">
                        <!-- mail SVG -->
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M3 8.5v7A2.5 2.5 0 0 0 5.5 18h13A2.5 2.5 0 0 0 21 15.5v-7L12 12 3 8.5z"
                                fill="#0f172a" />
                            <path d="M3 6.5A2.5 2.5 0 0 1 5.5 4h13A2.5 2.5 0 0 1 21 6.5V7.1L12 11 3 7.1V6.5z"
                                fill="#0f172a" />
                        </svg>
                        <a href="mailto:aralim11@gmail.com">aralim11@gmail.com</a>
                    </div>

                    <!-- WhatsApp -->
                    <div class="chip" role="listitem" title="WhatsApp">
                        <svg width="16" height="16" viewBox="0 0 32 32" fill="none">
                            <path fill="#25D366"
                                d="M16 .5A15.5 15.5 0 0 0 2.5 16c0 2.74.73 5.42 2.12 7.76L2 30l6.47-2.54A15.5 15.5 0 1 0 16 .5Z" />
                            <path fill="#fff"
                                d="M23.1 19.28c-.38-.19-2.2-1.08-2.54-1.2-.34-.13-.6-.19-.85.19s-.98 1.2-1.2 1.45-.44.28-.82.09a12.69 12.69 0 0 1-3.72-2.3 13.91 13.91 0 0 1-2.58-3.19c-.27-.47 0-.72.2-.91.2-.18.47-.47.7-.71.23-.23.31-.39.46-.65.15-.26.08-.49 0-.68-.09-.19-.84-2.05-1.16-2.81-.31-.74-.62-.64-.85-.65-.22 0-.47-.01-.72-.01a1.39 1.39 0 0 0-1 .46c-.34.38-1.3 1.27-1.3 3.1s1.33 3.6 1.52 3.85c.19.25 2.61 3.99 6.32 5.6.88.38 1.56.61 2.09.78.88.28 1.68.24 2.31.14.71-.1 2.2-.9 2.5-1.78.31-.88.31-1.64.21-1.79-.1-.15-.34-.24-.72-.43Z" />
                        </svg>
                        <a href="https://wa.me/8801675342612" target="_blank">Chat on WhatsApp</a>
                    </div>

                    <!-- Telegram -->
                    <div class="chip" role="listitem" title="Telegram">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                            <path fill="#0088cc"
                                d="M9.993 15.577 9.86 20.5c.414 0 .594-.177.81-.389l1.944-1.858 4.028 2.953c.738.407 1.263.193 1.454-.68l2.637-12.39c.27-1.223-.442-1.704-1.176-1.405L3.58 10.47c-1.197.466-1.179 1.144-.203 1.452l4.93 1.54 11.47-7.182-9.785 9.297Z" />
                        </svg>
                        <a href="https://t.me/aralim11" target="_blank">Telegram</a>
                    </div>

                    <div class="chip" role="listitem" title="WeChat">
                        <small>Portfolio: <a href="{{ route('portfolio.index') }}" target="_blank"
                                rel="noopener">appfunbd.com/portfolio</a></small>
                    </div>
                </div>
            </aside>

        </div>
    </div>

    <div class="foot">Built with ❤️ — AppFunBD</div>
</body>

</html>
