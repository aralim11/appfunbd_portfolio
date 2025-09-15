<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href={{ asset('frontEnd/blog/css/styles.css') }} rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    @include('frontEnd.blog.partials.nav')

    <!-- Page header with logo and tagline-->
    @include('frontEnd.blog.partials.banner')

    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                @if (Route::currentRouteName() === 'blog.index')
                    @include('frontEnd.blog.partials.featured')
                @endif

                <!-- Nested row for non-featured blog posts-->
                @yield('content')

                <!-- Pagination-->
                @if (Route::currentRouteName() === 'blog.index')
                    @include('frontEnd.blog.widgets.pagination')
                @endif
            </div>

            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                @include('frontEnd.blog.widgets.search')

                <!-- Categories widget-->
                @include('frontEnd.blog.widgets.category')
            </div>
        </div>
    </div>
    <!-- Footer-->
    @include('frontEnd.blog.partials.footer')

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src={{ asset('frontEnd/blog/js/scripts.js') }}></script>
</body>

</html>