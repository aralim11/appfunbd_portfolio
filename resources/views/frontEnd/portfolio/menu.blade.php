<!-- SITE HEADER -->
<header class="site-header" id="site-header">
    <nav class="navbar navbar-expand-xl" id="site-navbar">
        <div class="container">
            {{-- <a class="navbar-brand" href="index.html"><img class="img-fluid"
                    src="{{ asset('frontEnd/portfolio/image/mehadi.me_logo.png') }}" alt="fungi logo"></a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    @foreach ($data['navBar']['menuItems'] as $menuItems)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{$menuItems['id']}}">{{$menuItems['name']}}</a>
                    </li>
                    @endforeach
                </ul> <!-- .navbar-nav -->
                {{-- <ul class="nav-social list-inline">
                    @foreach ($data['navBar']['socialMedia'] as $socialMedia)
                    <li class="list-inline-item"><a href="{{ $socialMedia['link'] }}" target="__blank"><i
                                class="{{ $socialMedia['icon'] }}"></i></a></li>
                    @endforeach
                </ul> --}}
            </div>
        </div> <!-- .container -->
    </nav> <!-- .navbar -->
</header> <!-- .site-header -->