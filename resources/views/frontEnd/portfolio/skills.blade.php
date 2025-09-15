<section class="skill-section section-block section-sep" id="skill-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 content-block" data-aos="fade-down" data-aos-duration="2000">
                <h2>
                    <span>
                        My Skills
                    </span>
                    Languages & Frameworks
                </h2>
                <p>
                    This section showcases my proficiency in various frameworks and tools associated with the
                    programming languages.
                </p>
            </div>
            <div class="col-xl-6 progress-block">
                <div class="row hidden-md-up">
                    @foreach ($data['languages'] as $skills)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">{{$skills}}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>