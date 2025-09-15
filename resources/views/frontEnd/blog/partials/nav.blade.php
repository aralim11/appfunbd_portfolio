<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('blog.index')}}">AppFunBD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{route('blog.index')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('portfolio.index')}}" target="__blank">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('blog.contact')}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>