@php
    $basic = App\Models\Basic::where('id', 1)->where('basic_status', 1)->firstOrFail();
    $coninfo = App\Models\ContactInformation::where('id', 1)->where('cont_status', 1)->firstOrFail();
@endphp
<div class="topbar-area">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-2">
                <div class="logo-part">
                    <a href="{{ route('website.home') }}"><img src="{{ asset('uploads/basic/' . $basic['basic_logo']) }}" alt="braintech"></a>
                </div>
            </div>

            <div class="col-lg-10 text-right">
                <ul class="rs-contact-info">
                    <li class="contact-part">
                        <i class="flaticon-location"></i>
                        <span class="contact-info">
                            <span>Address</span>
                            {{ $coninfo->cont_add1 }}
                        </span>
                    </li>
                    <li class="contact-part">
                        <i class="flaticon-email"></i>
                        <span class="contact-info">
                            <span>E-mail</span>
                            <a href="mailto:{{ $coninfo['cont_email1'] }}"> {{ $coninfo->cont_email1 }} </a>
                        </span>
                    </li>
                    <li class="contact-part no-border">
                        <i class="flaticon-call"></i>
                        <span class="contact-info">
                            <span>Phone</span>
                            {{ $coninfo->cont_phone1 }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>