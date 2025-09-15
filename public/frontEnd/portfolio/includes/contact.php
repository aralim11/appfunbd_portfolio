<section class="contact-section section-block section-sep" id="contact-section">
    <div class="container">
        <div class="section-title">
            <h2 x-text="contact.title"></h2>
            <p class="lead" x-text="contact.subtitle"></p>
        </div>
        <!-- .section-title -->

        <!-- .row -->
        <div class="row">
            <div style="display: none" class="col-lg-6" data-aos="fade-right" data-aos-delay="100"
                 data-aos-duration="1000">
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
                <form action="send_email.php" class="row g-3" id="fungi-contact" method="POST">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="form-label visually-hidden" for="inputName">
                                Name
                            </label>
                            <input class="form-control" id="inputName" name="inputName" placeholder="Name*" required=""
                                   type="text"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="form-label visually-hidden" for="inputEmail">
                                Email
                            </label>
                            <input class="form-control" id="inputEmail" name="inputEmail" placeholder="Email*"
                                   required="" type="email"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label visually-hidden" for="inputMessage">
                            Message
                        </label>

                        <textarea class="form-control mb-3" id="inputMessage" name="inputMessage"
                                  placeholder="Your message here*" required=""></textarea>

                        <div class="h-captcha" data-sitekey="b317a9fe-ad2d-4bc3-a830-23e7a7f9f60a"></div>

                        <button class="btn btn-main" name="submit" type="submit">
                            Send Message
                        </button>
                    </div>
                </form>
                <!-- .row -->
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>