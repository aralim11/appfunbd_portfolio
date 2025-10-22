<?php
$imageUrl = 'https://mehadi.me/image/mehadi.me_cover.png';
$url = 'https://appfunbd.com';
?>

<!DOCTYPE html>
<html lang="zxx" xmlns:x-bind="http://www.w3.org/1999/xhtml">

<head>
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

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.7/cdn.js"
        integrity="sha512-RvlcAHDQH6uKcb1vPjIKzztHySEHd0T7gpAMZ/Mg22UjeKMJRlZtTLC2iBoZ3l+CSiW+TGapC6+F4YKZ9PKqVw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>
        {{ $data['title'] }}
    </title>
    <meta name="description" content="{{ $data['description'] }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $url; ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $data['title'] }}">
    <meta property="og:description" content="{{ $data['description'] }}">
    <meta property="og:image" content="<?php echo $imageUrl; ?>">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:site_name" content="MEHADI.ME">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $data['title'] }}">
    <meta name="twitter:description" content="{{ $data['description'] }}">
    <meta name="twitter:image" content="<?php echo $imageUrl; ?>">

    <!-- Additional Meta Tags -->
    <meta name="author" content="Abdul Alim">
    <meta name="keywords" content="RPA, Robomotion, UiPath, Automation, Software Engineer, Data Mining, Web Scraping">
    <meta name="theme-color" content="#ffffff">

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
    <script src="{{ asset('frontEnd/portfolio/js/data.js') }}"></script>
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
