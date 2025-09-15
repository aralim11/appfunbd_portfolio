<footer class="site-footer" id="site-footer">
    <div class="container">
        <div class="row footer-bottom">
            <div class="col-md-6">
                <p class="copyright-text">
                    All rights reserved &copy; {{ date('Y') }} <a href="{{ $data['footer']['link'] }}"
                        target="__blank">{{
                        $data['footer']['copyright'] }}</a>.
                </p>
            </div>
            <div class="col-md-6">
                <ul class="list-inline text-md-end">
                    <li class="list-inline-item">
                        <a href="#site-header">
                            <i class="bi bi-arrow-up-circle">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>