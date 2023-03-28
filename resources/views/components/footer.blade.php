<footer class="site-footer background-black-2">
    <img src="/assets/images/shapes/footer-bg-1-1.png" alt="" class="site-footer__shape-1">
    <img src="/assets/images/shapes/footer-bg-1-2.png" alt="" class="site-footer__shape-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="footer-widget footer-widget__about-widget">
                    <a href="index.html" class="footer-widget__logo">
                        <img src="/assets/images/logo-light.png" alt="" width="105" height="43">
                    </a>
                    <p class="thm-text-dark">Atiam rhoncus sit amet adip
                        scing sed ipsum. Lorem ipsum
                        dolor sit amet adipiscing <br>
                        sem neque.</p>
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                <div class="footer-widget footer-widget__contact-widget">
                    <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__contact">
                        <li>
                            <i class="fa fa-phone-square"></i>
                            <a href="tel:666-888-0000">666 888 0000</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@company.com">info@company.com</a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker-alt"></i>
                            <a href="#">66 top broklyn street.
                                New York</a>
                        </li>
                    </ul><!-- /.list-unstyled footer-widget__contact -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
            <div class="col-6 col-md-6 col-lg-6 col-xl-2">
                <div class="footer-widget footer-widget__links-widget">
                    <h3 class="footer-widget__title">Links</h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li>
                            <a href="index.html">Top Sellers</a>
                        </li>
                        <li>
                            <a href="products.html">Shopping</a>
                        </li>
                        <li>
                            <a href="about.html">About Store</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="contact.html">Help</a>
                        </li>
                    </ul><!-- /.list-unstyled footer-widget__contact -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
            <div class="col-6 col-md-6 col-lg-6 col-xl-2">
                <div class="footer-widget">
                    <h3 class="footer-widget__title">Ссылки</h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li>
                            <a href="{{ route('subroute',['sub'=>'franshiza']) }}">Франшиза</a>
                        </li>
                        <li>
                            <a href="#">Дни рождения</a>
                        </li>
                        <li>
                            <a href="#">Новый год</a>
                        </li>
                        <li>
                            <a href="#">Каникулы</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="footer-widget">
                    <h3 class="footer-widget__title">Быть в курсе новостей</h3>
                    <form action="#" data-url="YOUR_MAILCHIMP_URL" class="mc-form">
                        <input type="email" name="EMAIL" id="mc-email" placeholder="Введите ваш Email">
                        <button type="submit">Подписаться</button>
                    </form>
                    <div class="mc-form__response"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <hr>
            <div class="inner-container text-center">
                <div class="bottom-footer__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
                <p class="thm-text-dark text-uppercase">Разработано {{--<span class="dynamic-year"></span>--}}<a href="http://code-me.ru">code-me</a></p>
            </div>
        </div>
    </div>
</footer>
</div>




<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{ asset('/assets/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('/assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('/assets/vendors/countdown/countdown.min.js') }}"></script>
<!-- template js -->
<script src="{{ asset('/assets/js/organik.js') }}"></script>
</body>
</html>