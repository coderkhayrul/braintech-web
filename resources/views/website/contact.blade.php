@extends('layouts.website-layout')
@section('website-content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Contact</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    @php
    $contact_info = App\Models\ContactInformation::where('cont_status', 1)->firstOrFail();
    @endphp
    <div class="rs-contact pt-120 md-pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 md-mb-60">
                    <div class="contact-box">
                        <div class="sec-title mb-45">
                            <span class="sub-text new-text white-color">Let's Talk</span>
                            <h2 class="title white-color">Speak With Expert Engineers.</h2>
                        </div>
                        <div class="address-box mb-25">
                            <div class="address-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Email:</span>
                                <a href="tel:123222-8888">{{ $contact_info['cont_email1'] }}</a>
                            </div>
                        </div>
                        <div class="address-box mb-25">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Phone:</span>
                                <a href="#">{{ $contact_info['cont_phone1'] }}</a>
                            </div>
                        </div>
                        <div class="address-box">
                            <div class="address-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Address:</span>
                                <div class="desc">{{ $contact_info['cont_add1'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-70 md-pl-15">
                    <div class="contact-widget">
                        <div class="sec-title2 mb-40">
                            <span class="sub-text contact mb-15">Get In Touch</span>
                            <h2 class="title testi-title">Fill The Form Below</h2>
                        </div>
                        {{-- Error Alert Notification --}}
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                <strong>{{ Session::get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @elseif (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                <strong>{{ Session::get('error') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form action="{{ route('website.contact-submit') }}" method="post">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control @error('cm_name') is-invalid @enderror" type="text"
                                            name="cm_name" placeholder="Name">
                                        @error('cm_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control @error('cm_email') is-invalid @enderror" type="email"
                                            name="cm_email" placeholder="E-Mail">
                                        @error('cm_email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control @error('cm_phone') is-invalid @enderror" type="text"
                                            name="cm_phone" placeholder="Phone Number">
                                        @error('cm_phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control @error('cm_subject') is-invalid @enderror" type="text"
                                            name="cm_subject" placeholder="Your Subject">
                                        @error('cm_subject')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 mb-30">
                                        <textarea class="from-control @error('cm_message') is-invalid @enderror"
                                            name="cm_message" placeholder="Your message Here"></textarea>
                                        @error('cm_message')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mb-0">
                                        <input class="readon learn-more submit" type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-canvas pt-120 md-pt-80">
            {{-- https://maps.google.com/maps?q=rstheme&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed --}}
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3651.189228340115!2d90.37656646492894!3d23.754359194542044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1646990074529!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
    <!-- Contact Section Start -->
@endsection
