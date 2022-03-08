<!-- Footer Start -->
@php
$basic = App\Models\Basic::where('id', 1)->where('basic_status', 1)->firstOrFail();
$con_info = App\Models\ContactInformation::where('id', 1)->where('cont_status', 1)->firstOrFail();
$social = App\Models\SocialMedia::where('id', 1)->where('sm_status', 1)->firstOrFail();
@endphp
<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-logo mb-30">
                        <a href="index.html"><img src="{{ asset('uploads/basic/' . $basic['basic_logo']) }}" alt=""></a>
                    </div>
                    <div class="textwidget pb-30">
                        <p>{{ $basic['basic_title'] }}</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li>
                            <a href="{{ $social['sm_facebook'] }}" target="_blank"><span><i
                                        class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="{{ $social['sm_twitter'] }} " target="_blank"><span><i
                                        class="fa fa-twitter"></i></span></a>
                        </li>

                        <li>
                            <a href="{{ $social['sm_linkedin'] }} " target="_blank"><span><i
                                        class="fa fa-linkedin"></i></span></a>
                        </li>
                        <li>
                            <a href="{{ $social['sm_instagram'] }} " target="_blank"><span><i
                                        class="fa fa-instagram"></i></span></a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                    <h3 class="widget-title">IT Services</h3>
                    <ul class="site-map">
                        <li><a href="software-development.html">Software Development</a></li>
                        <li><a href="web-development.html">Web Development</a></li>
                        <li><a href="analytic-solutions.html">Analytic Solutions</a></li>
                        <li><a href="web-development.html">Cloud and DevOps</a></li>
                        <li><a href="web-development.html">Product Design</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                    <h3 class="widget-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">{{ $con_info['cont_add1'] }}</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:{{ $con_info['cont_phone1'] }}">{{ $con_info['cont_phone1'] }}</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:{{ $con_info['cont_email1'] }}">{{ $con_info['cont_email1'] }}</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-clock-1"></i>
                            <div class="desc">
                                Opening Hours: 10:00 - 18:00
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12">
                    <h3 class="widget-title">Newsletter</h3>
                    <p class="widget-desc">We denounce with righteous and in and dislike men who are so beguiled and
                        demo realized.</p>
                    <form action="{{ route('website.newsletter') }}" method="POST">
                        @csrf
                        <p>
                            <input type="email" name="ns_email" placeholder="Your email address" required="">
                            
                            <button class="paper-plane"><input type="submit" value="Sign up"></button>
                            <i class="flaticon-send"></i>
                        </p>
                    </form>
                    
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 text-right md-mb-10 order-last">
                    <ul class="copy-right-menu">
                        <li><a href="{{ route('website.home') }}">Home</a></li>
                        <li><a href="{{ route('website.about') }}">About</a></li>
                        <li><a href="{{ route('website.blog') }}">Blog</a></li>
                        <li><a href="{{ route('website.home') }}">Shop</a></li>
                        <li><a href="{{ route('website.home') }}">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>&copy; 2021 All Rights Reserved. Developed By <a href="https://coderkhayrul.xyz/">Khayrul
                                Shanto</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- modernizr js -->
<script src="{{ asset('website') }}/assets/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="{{ asset('website') }}/assets/js/jquery.min.js"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{ asset('website') }}/assets/js/bootstrap.min.js"></script>
<!-- Menu js -->
<script src="{{ asset('website') }}/assets/js/rsmenu-main.js"></script>
<!-- op nav js -->
<script src="{{ asset('website') }}/assets/js/jquery.nav.js"></script>
<!-- owl.carousel js -->
<script src="{{ asset('website') }}/assets/js/owl.carousel.min.js"></script>
<!-- wow js -->
<script src="{{ asset('website') }}/assets/js/wow.min.js"></script>
<!-- Skill bar js -->
<script src="{{ asset('website') }}/assets/js/skill.bars.jquery.js"></script>
<script src="{{ asset('website') }}/assets/js/jquery.counterup.min.js"></script>
<!-- counter top js -->
<script src="{{ asset('website') }}/assets/js/waypoints.min.js"></script>
<!-- swiper js -->
<script src="{{ asset('website') }}/assets/js/swiper.min.js"></script>
<!-- particles js -->
<script src="{{ asset('website') }}/assets/js/particles.min.js"></script>
<!-- magnific popup js -->
<script src="{{ asset('website') }}/assets/js/jquery.magnific-popup.min.js"></script>
<!-- plugins js -->
<script src="{{ asset('website') }}/assets/js/plugins.js"></script>
<!-- pointer js -->
<script src="{{ asset('website') }}/assets/js/pointer.js"></script>
<!-- contact form js -->
<script src="{{ asset('website') }}/assets/js/contact.form.js"></script>
<!-- main js -->
<script src="{{ asset('website') }}/assets/js/main.js"></script>
</body>

</html>
