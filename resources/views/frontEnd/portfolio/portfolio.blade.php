<!-- PORTFOLIO SECTION -->
<section class="portfolio-section section-block section-sep" id="portfolio-section">
    <div class="container">
        <div class="section-title">
            <h2>Portfolio</h2>
            <p class="lead">
                {{ $data['portfolio']['description'] }}
            </p>
        </div><!-- .section-title -->
        <div class="button-group filter-button-group">
            <button class="active" data-filter="*">All</button>
            @foreach ($data['portfolio']['items'] as $portfolio)
                <button class="" data-filter=".{{ $portfolio['id'] }}">{{ $portfolio['title'] }}</button>
            @endforeach
        </div>
        <div class="row grid" data-aos="fade-up" data-aos-duration="2000">
            @foreach ($data['portfolio']['items'] as $details)
                @foreach ($details['project'] as $project)
                    <div class="col-lg-4 col-md-6 grid-item {{ $details['id'] }}">
                        <div class="box">
                            <img src="{{ asset($project['img']['thumb_img']) }}" alt="portfolio image">
                            <div class="box-content">
                                <span class="category">{{ $details['title'] }}</span>
                                <h3 class="title">{{ $project['name'] }}</h3>
                            </div>
                            <div class="icon-box"><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#{{ $project['id'] }}"><i class="bi bi-plus-lg"></i></a></div>

                            <!-- Modal -->
                            <div class="modal fade" id="{{ $project['id'] }}" tabindex="-1"
                                aria-labelledby="{{ $project['id'] }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class="bi bi-x"></i></button>
                                            <div class="row item-content">
                                                <div class="col-xl-12">
                                                    <img src="{{ asset($project['img']['main_img']) }}"
                                                        alt="portfolio image">
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="content-wrapper">
                                                        <h2 class="item-title">{{ $project['name'] }}</h2>
                                                        <p>
                                                            {{ $project['description'] }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="meta-wrapper">
                                                        <ul class="item-meta">
                                                            <li>Project Type: <span
                                                                    class="meta-value">{{ $details['title'] }}</span>
                                                            </li>
                                                            <li>Client: <span
                                                                    class="meta-value">{{ $project['integrations'] }}</span>
                                                            </li>
                                                            @if ($project['link'] != '#')
                                                                <li>Demo Link: <span class="meta-value"><a
                                                                            href="{{ $project['link'] }}"
                                                                            target="__blank" style="color: black">Click
                                                                            Here</a></span>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>
