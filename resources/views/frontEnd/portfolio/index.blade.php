<?php
$imageUrl = 'frontEnd/portfolio/image/cover.png';
$url = 'https://appfunbd.com';
$canonical = $url . '/portfolio';
$ogImage = $url . '/' . $imageUrl;

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'ProfilePage',
            '@id' => $canonical . '#webpage',
            'url' => $canonical,
            'name' => $data['meta_title'],
            'description' => $data['meta_description'],
            'isPartOf' => ['@id' => $url . '/#website'],
            'mainEntity' => ['@id' => $canonical . '#person'],
        ],
        [
            '@type' => 'Person',
            '@id' => $canonical . '#person',
            'name' => $data['full_name'],
            'jobTitle' => 'Software Engineer | Web Application Developer',
            'email' => 'mailto:' . $data['email'],
            'telephone' => '+8801675342612',
            'image' => $url . '/frontEnd/portfolio/image/IMG_E8007.png',
            'url' => $canonical,
            'worksFor' => ['@id' => $url . '/#organization'],
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Dhaka',
                'addressCountry' => 'BD',
            ],
            'knowsAbout' => ['PHP', 'Laravel', 'WordPress', 'REST API', 'FastAPI', 'n8n', 'AI Automation', 'MySQL', 'JavaScript'],
            'sameAs' => [
                'https://www.linkedin.com/in/aralim11/',
                'https://github.com/aralim11',
            ],
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id' => $canonical . '#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $url],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Portfolio', 'item' => $canonical],
            ],
        ],
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.google-analytics')
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- Favicon -->
    <link href="{{ asset('frontEnd/portfolio/image/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('frontEnd/portfolio/image/favicon.ico') }}" rel="icon" type="image/x-icon" />
    <!-- Icons -->
    <link href="{{ asset('frontEnd/portfolio/css/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontEnd/portfolio/css/pe-helper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontEnd/portfolio/css/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontEnd/portfolio/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&amp;family=Poppins:wght@700;900&amp;display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link href="{{ asset('frontEnd/portfolio/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontEnd/portfolio/css/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontEnd/portfolio/css/leaflet.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontEnd/portfolio/css/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontEnd/portfolio/css/style.css') }}" rel="stylesheet" type="text/css" />

    <title>{{ $data['meta_title'] }}</title>
    <meta name="description" content="{{ $data['meta_description'] }}">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ $canonical }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="profile">
    <meta property="og:title" content="{{ $data['meta_title'] }}">
    <meta property="og:description" content="{{ $data['meta_description'] }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:site_name" content="AppFunBD">
    <meta property="og:locale" content="en_US">
    <meta property="profile:first_name" content="Abdul">
    <meta property="profile:last_name" content="Alim">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $data['meta_title'] }}">
    <meta name="twitter:description" content="{{ $data['meta_description'] }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <!-- Additional Meta Tags -->
    <meta name="author" content="Abdul Alim">
    <meta name="keywords"
        content="Abdul Alim, Software Engineer Bangladesh, Laravel developer, PHP developer Dhaka, web application developer, n8n automation, REST API developer, WordPress developer, portfolio">
    <meta name="theme-color" content="#ffffff">

    <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

    <style>
        .err_msg_box {
            border: solid 1px red;
        }
    </style>
</head>

<body class="home-minimal" data-bs-spy="scroll" data-bs-target="#site-navbar" x-data="appData">
    <!-- PRE LOADER -->
    <div class="preloader js-preloader flex-center">
        <div class="dots">
            <div class="dot">
            </div>
            <div class="dot">
            </div>
            <div class="dot">
            </div>
        </div>
    </div>
    <!-- .page-loader -->

    <!-- SITE HEADER -->
    @include('frontEnd.portfolio.menu')
    <!-- .site-header -->

    <!-- HERO AREA -->
    @include('frontEnd.portfolio.header')
    <!-- .hero-area -->

    <!-- ABOUT SECTION -->
    @include('frontEnd.portfolio.about')
    <!-- .about-section -->

    <!-- SKILL SECTION -->
    @include('frontEnd.portfolio.skills')
    <!-- .skill-section -->

    <!-- PORTFOLIO SECTION -->
    @include('frontEnd.portfolio.portfolio')
    <!-- .portfolio-section -->

    <!-- SERVICE SECTION -->
    @include('frontEnd.portfolio.service')
    <!-- .service-section -->

    <!-- RESUME SECTION -->
    @include('frontEnd.portfolio.resume')
    <!-- .resume-section -->

    <!-- CONTACT SECTION -->
    @include('frontEnd.portfolio.contact')
    <!-- .contact-section -->

    <!-- SITE FOOTER -->
    @include('frontEnd.portfolio.footer')
    <!-- .site-section -->

    <!-- .site-footer -->
    <script src="{{ asset('frontEnd/portfolio/js/jquery.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/leaflet.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/aos.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/jquery.preloadinator.min.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/typer.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/magicmouse.js') }}"></script>
    <script src="{{ asset('frontEnd/portfolio/js/script.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function sendMessage() {
            const inputName = $('#inputName').val();
            const inputEmail = $('#inputEmail').val();
            const inputMessage = $('#inputMessage').val();

            $.ajax({
                url: "{{ route('contact.send') }}",
                method: "POST",
                dataType: "json",
                data: {
                    _token: "{{ csrf_token() }}",
                    inputName: inputName,
                    inputEmail: inputEmail,
                    inputMessage: inputMessage,
                    g_recaptcha_response: grecaptcha.getResponse(),
                },

                success: function(response) {
                    console.log(response);

                    if (response.status == "success") {
                        rmvErrorClass('send_contact_form');
                        blankValue('send_contact_form');
                        $(".g_recaptcha_response").text('Message sent successfully');

                    }
                },

                error: function(error) {
                    rmvErrorClass('send_contact_form')
                    errorMsg(error);
                },
            });
        }

        /**
         * blank input value
         */
        function blankValue(class_id) {
            $('.' + class_id).find('select, textarea, input').val('');
            $(".multiple-select, .single-select").val('');
        }

        /**
         * errorMsg
         *
         * @params error
         * @return alert
         */
        function errorMsg(error) {
            $.each(error.responseJSON.errors, function(key, value) {
                $("." + key).text(value[0]);
                $("#" + key).addClass("err_msg_box");
            });
        }

        /**
         * rmvErrorClass
         *
         * @param class
         */
        function rmvErrorClass(class_id) {
            $('.' + class_id).find('.error_txt').text('');
            $('.' + class_id).find('select, textarea, input').removeClass('err_msg_box');
        }
    </script>
</body>

</html>
