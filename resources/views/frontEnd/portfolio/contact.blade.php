<section class="contact-section section-block section-sep" id="contact-section">
    <div class="container">
        <div class="section-title">
            <h2>Contact Me</h2>
            <p class="lead">
                Let's Connect: Reach Out and Let's Make Things Happen
            </p>
        </div>
        <!-- .section-title -->

        <!-- .row -->
        <div class="row">
            <div style="display: none" class="col-lg-6" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                <div class="map-wrapper" id="mapwrapper">
                </div>
            </div>
            <div class="col-lg-12 form-block" data-aos="fade-right" data-aos-delay="200" data-aos-duration="200">
                <h3>
                    Write me a message
                </h3>
                <div class="form-message">
                    <p>
                    </p>
                </div>
                <form action="#" class="row g-3 send_contact_form" id="fungi-contact">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="form-label visually-hidden" for="inputName">
                                Name
                            </label>
                            <input class="form-control" id="inputName" name="inputName" placeholder="Name*"
                                required="" type="text" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="form-label visually-hidden" for="inputEmail">
                                Email
                            </label>
                            <input class="form-control" id="inputEmail" name="inputEmail" placeholder="Email*"
                                required="" type="email" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label visually-hidden" for="inputMessage">
                            Message
                        </label>

                        <textarea class="form-control mb-3" id="inputMessage" name="inputMessage" placeholder="Your message here*"
                            required=""></textarea>

                        <div class="g-recaptcha" id="g_recaptcha"
                            data-sitekey="6LcCFEMrAAAAAAySEWu1v6_sOGTuIESMGzdEKDRV"></div>

                        <button class="btn btn-main mt-3" name="submit" type="button" onclick="sendMessage()">
                            Send Message
                        </button>

                        <span class="mt-1">
                            <small class="text-danger error_txt g_recaptcha_response ml-2"></small>
                        </span>
                    </div>
                </form>
                <!-- .row -->
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
