<section class="service-section section-block section-sep" id="service-section">
    <div class="container">
        <div class="section-title">
            <h2>{{$data['services']['title']}}</h2>
            <p class="lead">
                {{ $data['services']['description'] }}
            </p>
        </div><!-- .section-title -->
        <div class="row">
            @foreach ($data['services']['items'] as $items)
            <div class="col-xl-4 col-lg-6" data-aos="fade-up">
                <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                    <div class="icon-box"><i class="{{$items['icon']}}"></i></div>
                    <h3>{{$items['title']}}</h3>
                    <p>
                        {{$items['description']}}
                    </p>
                </div>
            </div>
            @endforeach
        </div><!-- .row -->
    </div> <!-- .container -->
</section>