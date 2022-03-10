@extends('layouts.website-layout')
@section('website-content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Services</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology">
                    <a class="active" href="{{ route('website.home') }}">Home</a>
                </li>
                <li>Services</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Services Section Start -->
    @php
    $services = App\Models\Service::where('service_status', 1)
        ->orderBy('service_order', 'DESC')
        ->limit(6)
        ->get();
    @endphp
    <div class="rs-services style2 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 mb-25">
                        <div class="flip-box-inner">
                            <div class="flip-box-wrap">
                                <div class="front-part">
                                    <div class="front-content-part">
                                        <div class="front-icon-part">
                                            <div class="icon-part">
                                                <img src="{{ asset('uploads/service/' . $service['service_image']) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="front-title-part">
                                            <h3 class="title"><a href="#">{{ $service['service_title'] }}</a>
                                            </h3>
                                        </div>
                                        <div class="front-desc-part">
                                            <p>
                                                {{ $service['service_details'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-front">
                                    <div class="back-front-content">
                                        <div class="back-title-part">
                                            <h3 class="back-title"><a href="#">{{ $service['service_title'] }}</a>
                                            </h3>
                                        </div>
                                        <div class="back-desc-part">
                                            <p class="back-desc"> {{ $service['service_details'] }}</p>
                                        </div>
                                        <div class="back-btn-part">
                                            <a class="readon view-more" href="#">Get In Touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Cta section start -->
    <div class="rs-cta style1 bg7 pt-80 pb-70">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 md-mb-30">
                        <span>Plan to Start a Project</span>
                        <div class="title-wrap">
                            <h2 class="epx-title">Our Experts Ready to Help You</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right md-text-left col-md-12">
                        <div class="button-wrap">
                            <a class="readon learn-more" href="{{ route('website.contactus') }}">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta section end -->
@endsection
