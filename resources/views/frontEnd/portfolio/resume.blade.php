<!-- RESUME SECTION -->
<section class="resume-section section-block section-sep" id="resume-section">
    <div class="container">
        <div class="section-title">
            <h2>My Resume</h2>
            <p class="lead">
                My Education and Work Experience
            </p>
        </div>
        <div class="row">
            <div class="col-lg-6 education-block" data-aos="fade-right" data-aos-duration="1500">
                <h3>My Education</h3>
                <ul>
                    @foreach ($data['resume']['education'] as $education)
                        <li class="d-flex align-items-start">
                            <div class="icon-block">
                                <div class="icon-box"><i class="pe-7s-study"></i></div>
                            </div>
                            <div class="content-wrapper">
                                <h4>{{ $education['degree'] }} <span>{{ $education['year'] }}</span></h4>
                                <h5>{{ $education['institution'] }}</h5>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6 education-block" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400">
                <h3>My Experience</h3>
                <ul>
                    @foreach ($data['resume']['experience'] as $experience)
                        <li class="d-flex align-items-start">
                            <div class="icon-block">
                                <div class="icon-box"><i class="pe-7s-portfolio"></i></div>
                            </div>
                            <div class="content-wrapper">
                                <h4>{{ $experience['position'] }} <span>{{ $experience['year'] }}</span></h4>
                                <h5>{{ $experience['company'] }}</h5>
                                <p>
                                    {{ $experience['description'] }}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
