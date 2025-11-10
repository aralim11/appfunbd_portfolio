<!-- ABOUT SECTION -->
<section class="about-section section-block section-sep" id="about-section" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 image-block" data-aos="fade-right" data-aos-delay="200" data-aos-duration="2000">
                <div class="img-wrapper about-img-wrap" data-tilt data-tilt-max="10">
                    <img class="about-img-1 img-fluid" src="{{ asset('frontEnd/portfolio/image/IMG_E8007.png') }}"
                        style="height: 634px; width: 508px;" alt="about image">
                </div>
            </div>
            <div class="col-xl-6 content-block" data-aos="fade-right" data-aos-delay="400" data-aos-duration="2000">
                <h2><span>About Me</span>{{ $data['designation'] }}</h2>
                <p>
                    {{ $data['description'] }}
                </p>
                <div class="personal-details row">
                    <div class="col-md-4">
                        <ul class="personal-info">
                            <li>
                                <h4>Name</h4>
                                <p>{{ $data['full_name'] }}</p>
                            </li>
                        </ul> <!-- .personal-info -->
                    </div> <!-- .col-md-6 -->
                    <div class="col-md-4">
                        <ul class="personal-info">
                            <li>
                                <h4>Email</h4>
                                <p>{{ $data['email'] }}</p>
                            </li>
                        </ul> <!-- .personal-info -->
                    </div> <!-- .col-md-6 -->
                    <div class="col-md-4">
                        <ul class="personal-info">
                            <li>
                                <h4>Address</h4>
                                <p>{{ $data['address'] }}</p>
                            </li>
                        </ul> <!-- .personal-info -->
                    </div> <!-- .col-md-6 -->
                </div> <!-- .personal-details -->
                <a class="btn-main" href="{{ asset('frontEnd/portfolio/image/CV_of_Abdul_Alim.pdf') }}"
                    download>Download CV</a>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</section> <!-- .about-section -->
