<div class="rs-slider style1">
    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true"
        data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false"
        data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false"
        data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false"
        data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1"
        data-md-device-nav="true" data-md-device-dots="false">
        @php
            $banners = App\Models\Banner::where('ban_status', 1)->get();
        @endphp
        {{-- @dd($banners); --}}
        @foreach ($banners as $key => $banner)
            <div class="slider-content slide{{ $key }}"
                style="background-image: url('{{ asset('uploads/banner/' . $banner['ban_image']) }}')">
                <div class="container">
                    <div class="content-part">
                        <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                            {{ $banner['ban_title'] }}</div>
                        <h1 class="sl-title mb-mb-10 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">
                            {{ $banner['ban_mid_title'] }}</h1>
                        <div class="sl-desc wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            {{ $banner['ban_subtitle'] }}
                        </div>
                        <div class="sl-btn wow fadeInUp" data-wow-delay="200ms" data-wow-duration="3000ms">
                            <a class="readon learn-more slider-btn"
                                href="{{ $banner['ban_url'] }}">{{ $banner['ban_button'] }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
