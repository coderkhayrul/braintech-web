@extends('layouts.website-layout')
@section('website-content')
    <!-- Slider Section Start -->
    @include('website.includes.slider')
    <!-- Slider Section End -->

    <!-- Services Section Start -->
    @php
    $services = App\Models\Service::where('service_status', 1)
        ->orderBy('service_order', 'ASC')
        ->limit(4)
        ->get();
    @endphp
    <div class="rs-services main-home style1 pt-100 md-pt-70">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img src="{{ asset('uploads/service/' . $service['service_image']) }}" alt="">
                                </div>
                            </div>
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="services-title"><a
                                            href="{{ $service['service_url'] }}">{{ $service['service_title'] }}</a>
                                    </h3>
                                </div>
                                <div class="services-desc">
                                    <p>
                                        {{ $service['service_subtitle'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- About Section Start -->
    <div class="rs-about bg4 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 md-mb-50">
                    <div class="images">
                        <img src="{{ asset('website') }}/assets/images/about/about-2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style2">About Us</div>
                            <h2 class="title pb-38">
                                We Are Increasing Business Success With Technology
                            </h2>
                            <div class="desc pb-35">
                                Over 25 years working in IT services developing software applications and mobile
                                apps for clients all over the world.
                            </div>
                            <p class="margin-0 pb-15">
                                We denounce with righteous indignation and dislike men who are so beguiled and
                                demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs
                                to those who fail in their duty through weakness of will, which is the same as
                                saying.
                            </p>
                        </div>
                        <div class="btn-part">
                            <a class="readon learn-more contact-us" href="contact.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <div class="pt-relative rs-services style4 modify1 services3 gray-color pt-120 md-pt-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <span class="sub-text">Services</span>
                <h2 class="title">
                    We Are Offering All Kinds of IT Solutions Services
                </h2>
            </div>
        </div>
        <div class="bg-section pb-120 md-pb-80">
            <div class="container">
                <div class="row gray-color pb-35 pl-25 pr-25 md-pl-0 md-pr-0">
                    <div class="col-lg-4 col-md-6 mb-20">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('website') }}/assets/images/services/main-home/icons/1.png" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="software-development.html">Software Development</a></h2>
                                <p class="desc">
                                    At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                    center.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-20">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('website') }}/assets/images/services/main-home/icons/2.png" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="web-development.html">Web Development</a></h2>
                                <p class="desc">
                                    At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                    center.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-20">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('website') }}/assets/images/services/main-home/icons/3.png" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="analytic-solutions.html">Analytic Solutions</a></h2>
                                <p class="desc">
                                    At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                    center.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-20">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('website') }}/assets/images/services/main-home/icons/4.png" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="cloud-and-devops.html">Clould & DevOps</a></h2>
                                <p class="desc">
                                    At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                    center.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-20">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('website') }}/assets/images/services/main-home/icons/5.png" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="product-design.html">Product & Design</a></h2>
                                <p class="desc">
                                    At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                    center.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('website') }}/assets/images/services/main-home/icons/6.png" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="data-center.html">Data Center</a></h2>
                                <p class="desc">
                                    At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data
                                    center.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-part text-center mt-65">
                    <a class="readon learn-more contact-us" href="web-development.html">View All Services</a>
                </div>
            </div>
            <div class="shape-part">
                <div class="left-side">
                    <img src="{{ asset('website') }}/assets/images/services/shape-2.png" alt="">
                </div>
                <div class="right-side">
                    <img src="{{ asset('website') }}/assets/images/services/shape-3.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Call Us Section Start -->
    <div class="rs-call-us bg1 pt-120 md-pt-80">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-6">
                    <div class="image-part">
                        <img src="{{ asset('website') }}/assets/images/call-us/contact-here.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rs-contact-box text-center">
                        <div class="address-item mb-25">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <div class="sec-title3">
                            <span class="sub-text">CALL US 24/7</span>
                            <h2 class="title">(+123) 456-9989</h2>
                            <p class="desc">Have any idea or project for in your mind call us or schedule a
                                appointment. Our representative will reply you shortly.</p>
                        </div>
                        <div class="btn-part mt-40 md-mb-60">
                            <a class="readon lets-talk" href="contact.html">Let's Talk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call Us Section Start -->

    <!-- Counter Section Start -->
    <div class="rs-counter main-counter-home">
        <div class="counter-top-area text-center bg2">
            <div class="row">
                <div class="col-lg-4 md-mb-40">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count k">80</span>
                            </div>
                            <h3 class="title">Happy Clients</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-40">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count plus">50</span>
                            </div>
                            <h3 class="title">Companies</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count plus">230</span>
                            </div>
                            <h3 class="title">Projects Done</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Process Section Start -->
    <div class="rs-process pt-180 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 md-mb-40">
                    <div class="process-wrap bg3">
                        <div class="sec-title mb-30">
                            <div class="sub-text new">Working Process</div>
                            <h2 class="title white-color">
                                Our Working Process - How We Work For Our Customers
                            </h2>
                        </div>
                        <div class="btn-part mt-40">
                            <a class="readon learn-more contact-us" href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-30 md-pl-15">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-40">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        1.
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title"> Discovery</h3>
                                    </div>
                                    <p class="number-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus
                                        odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-40">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        2.
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Planning</h3>
                                    </div>
                                    <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus
                                        odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 sm-mb-40">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        3.
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Execute</h3>
                                    </div>
                                    <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus
                                        odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        4.
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Deliver</h3>
                                    </div>
                                    <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus
                                        odio ac nibh luctus, in porttitor theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Section End -->

    <!-- Project Section Start -->
    <div class="rs-project bg5 style1 pt-120 md-pt-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45 md-mb-30">
                <span class="sub-text white-color">Project</span>
                <h2 class="title white-color">
                    We Are Offering All Kinds of IT Solutions Services
                </h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true"
                data-md-device-dots="false">
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img
                                src="{{ asset('website') }}/assets/images/project/main-home/1.jpg" alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Product Design</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img
                                src="{{ asset('website') }}/assets/images/project/main-home/2.jpg" alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Product Engineering</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img
                                src="{{ asset('website') }}/assets/images/project/main-home/3.jpg" alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Analytic Solutions</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img
                                src="{{ asset('website') }}/assets/images/project/main-home/4.jpg" alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Growth Strategies</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img
                                src="{{ asset('website') }}/assets/images/project/main-home/5.jpg" alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Platform Integration</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-img">
                        <a href="case-studies-style1.html"><img
                                src="{{ asset('website') }}/assets/images/project/main-home/6.jpg" alt="images"></a>
                    </div>
                    <div class="project-content">
                        <h3 class="title"><a href="case-studies-style1.html">Innovative Interfaces</a></h3>
                        <span class="category"><a href="case-studies-style1.html">IT Technology</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Section End -->

    <!-- Pricing section start -->
    <div class="rs-pricing white-bg pt-255 pb-150 md-pb-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <span class="sub-text">Pricing</span>
                <h2 class="title">
                    Our Pricing Plan
                </h2>
                <div class="heading-line">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 md-mb-50">
                    <div class="pricing-table new-style">
                        <div class="pricing-badge">
                            Silver
                        </div>
                        <div class="pricing-icon">
                            <img src="{{ asset('website') }}/assets/images/pricing/main-home/icons/1.png" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">29.99</span>
                                <span class="table-period">Monthly Package</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                                <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon buy-now" href="single-team.html">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-50">
                    <div class="pricing-table primary-bg">
                        <div class="pricing-badge white-color-bg">
                            Gold
                        </div>
                        <div class="pricing-icon">
                            <img src="{{ asset('website') }}/assets/images/pricing/main-home/icons/2.png" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">39.99</span>
                                <span class="table-period">Monthly Package</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon buy-now" href="single-team.html">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-table new-style">
                        <div class="pricing-badge">
                            Platinum
                        </div>
                        <div class="pricing-icon">
                            <img src="{{ asset('website') }}/assets/images/pricing/main-home/icons/3.png" alt="">
                        </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text">79.99</span>
                                <span class="table-period">Monthly Package</span>
                            </div>
                        </div>
                        <div class="pricing-table-body">
                            <ul>
                                <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                            </ul>
                        </div>
                        <div class="btn-part">
                            <a class="readon buy-now" href="single-team.html">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing section end -->

    <!-- Testimonial Section Start -->
    <div class="rs-testimonial main-home style2 bg5 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <span class="sub-text white-color">Testimonial</span>
                <h2 class="title testi-title white-color">
                    What Saying Our Customers
                </h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false"
                data-nav-speed="false" data-md-device="2" data-md-device-nav="false" data-md-device-dots="true"
                data-center-mode="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true"
                data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false">
                <div class="testi-item">
                    <div class="author-desc">
                        <div class="desc"><img class="quote"
                                src="{{ asset('website') }}/assets/images/testimonial/main-home/quote-white.png"
                                alt="">Capitalize on low
                            hanging fruit to identify a ballpark value added activity to beta test. Override the
                            digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along
                            the information highway.</div>
                        <div class="author-img">
                            <img src="{{ asset('website') }}/assets/images/testimonial/main-home/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="author-part">
                        <a class="name" href="#">Mariya Khan</a>
                        <span class="designation">CEO, Brick Consulting</span>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="author-desc">
                        <div class="desc"><img class="quote"
                                src="{{ asset('website') }}/assets/images/testimonial/main-home/quote-white.png"
                                alt="">Capitalize on low
                            hanging fruit to identify a ballpark value added activity to beta test. Override the
                            digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along
                            the information highway.</div>
                        <div class="author-img">
                            <img src="{{ asset('website') }}/assets/images/testimonial/main-home/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="author-part">
                        <a class="name" href="#">Sonia Akhter</a>
                        <span class="designation">Graphic Designer</span>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="author-desc">
                        <div class="desc"><img class="quote"
                                src="{{ asset('website') }}/assets/images/testimonial/main-home/quote-white.png"
                                alt="">Capitalize on low
                            hanging fruit to identify a ballpark value added activity to beta test. Override the
                            digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along
                            the information highway.</div>
                        <div class="author-img">
                            <img src="{{ asset('website') }}/assets/images/testimonial/main-home/3.jpg" alt="">
                        </div>
                    </div>
                    <div class="author-part">
                        <a class="name" href="#">Deluar Hossen</a>
                        <span class="designation">Web Developer</span>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="author-desc">
                        <div class="desc"><img class="quote"
                                src="{{ asset('website') }}/assets/images/testimonial/main-home/quote-white.png"
                                alt="">Capitalize on low
                            hanging fruit to identify a ballpark value added activity to beta test. Override the
                            digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along
                            the information highway.</div>
                        <div class="author-img">
                            <img src="{{ asset('website') }}/assets/images/testimonial/main-home/4.jpg" alt="">
                        </div>
                    </div>
                    <div class="author-part">
                        <a class="name" href="#">Asif Ahmed</a>
                        <span class="designation">App Developer</span>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="author-desc">
                        <div class="desc"><img class="quote"
                                src="{{ asset('website') }}/assets/images/testimonial/main-home/quote-white.png"
                                alt="">Capitalize on low
                            hanging fruit to identify a ballpark value added activity to beta test. Override the
                            digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along
                            the information highway.</div>
                        <div class="author-img">
                            <img src="{{ asset('website') }}/assets/images/testimonial/main-home/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="author-part">
                        <a class="name" href="#">Mariya Khan</a>
                        <span class="designation">CEO, Brick Consulting</span>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="author-desc">
                        <div class="desc"><img class="quote"
                                src="{{ asset('website') }}/assets/images/testimonial/main-home/quote-white.png"
                                alt="">Capitalize on low
                            hanging fruit to identify a ballpark value added activity to beta test. Override the
                            digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along
                            the information highway.</div>
                        <div class="author-img">
                            <img src="{{ asset('website') }}/assets/images/testimonial/main-home/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="author-part">
                        <a class="name" href="#">Sonia Akhter</a>
                        <span class="designation">Graphic Designer</span>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="author-desc">
                        <div class="desc"><img class="quote"
                                src="{{ asset('website') }}/assets/images/testimonial/main-home/quote-white.png"
                                alt="">Capitalize on low
                            hanging fruit to identify a ballpark value added activity to beta test. Override the
                            digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along
                            the information highway.</div>
                        <div class="author-img">
                            <img src="{{ asset('website') }}/assets/images/testimonial/main-home/3.jpg" alt="">
                        </div>
                    </div>
                    <div class="author-part">
                        <a class="name" href="#">Deluar Hossen</a>
                        <span class="designation">Web Developer</span>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="author-desc">
                        <div class="desc"><img class="quote"
                                src="{{ asset('website') }}/assets/images/testimonial/main-home/quote-white.png"
                                alt="">Capitalize on low
                            hanging fruit to identify a ballpark value added activity to beta test. Override the
                            digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along
                            the information highway.</div>
                        <div class="author-img">
                            <img src="{{ asset('website') }}/assets/images/testimonial/main-home/4.jpg" alt="">
                        </div>
                    </div>
                    <div class="author-part">
                        <a class="name" href="#">Asif Ahmed</a>
                        <span class="designation">App Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Blog Section Start -->
    <div id="rs-blog" class="rs-blog pb-120 pt-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <span class="sub-text">Blogs</span>
                <h2 class="title testi-title">
                    Read Our Latest Tips & Tricks
                </h2>
                <div class="heading-line">

                </div>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false"
                data-md-device-dots="false">
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/main-home/1.jpg"
                                alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Software Development</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 16 Nov 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Necessity May Give Us Your Best Virtual
                                Court System</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so
                            beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/main-home/2.jpg"
                                alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html"> Web Development</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 20 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Tech Products That Makes Its Easier to
                                Stay at Home</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so
                            beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/main-home/3.jpg"
                                alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">It Services</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 22 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Open Source Job Report Show More Openings
                                Fewer</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so
                            beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/main-home/4.jpg"
                                alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Artifical Intelligence</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 26 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Types of Social Proof What its Makes Them
                                Effective</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so
                            beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/main-home/5.jpg"
                                alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">Digital Technology</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 28 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Tech Firms Support Huawei Restriction,
                                Balk at Cost</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so
                            beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/main-home/6.jpg"
                                alt=""></a>
                        <ul class="post-categories">
                            <li><a href="blog-details.html">It Services</a></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> 30 December 2020</li>
                            <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Servo Project Joins The Linux Foundation
                                Fold Desco</a></h3>
                        <p class="desc">We denounce with righteous indige nation and dislike men who are so
                            beguiled...</p>
                        <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Partner Start -->
    @php
    $partners = App\Models\Partner::where('partner_status', 1)
        ->OrderBy('partner_id', 'ASC')
        ->get();
    @endphp
    <div class="rs-partner pt-80 pb-70">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false"
                data-md-device-dots="false">
                @foreach ($partners as $partner)
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="https://{{ $partner['partner_url'] }}" target="_blank">
                                <img class="hover-logo"
                                    src="{{ asset('uploads/partner/' . $partner['partner_logo']) }}" alt="">
                                <img class="main-logo"
                                    src="{{ asset('uploads/partner/' . $partner['partner_logo']) }}" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Partner End -->
@endsection
