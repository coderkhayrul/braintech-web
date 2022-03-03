{{-- @if (url()->current() == route('website.home'))
    @include('website.includes.banner')
@endif --}}

@include('website.includes.header')

<body class="defult-home">

    <!--Preloader area start here-->
    @include('website.includes.loader')
    <!--Preloader area End here-->

    <!-- Main content Start -->
    <div class="main-content">

        <!--Full width header Start-->
        @include('website.includes.navbar')
        <!--Full width header End-->
        @yield('website-content')
    </div>
    <!-- Main content End -->
    @include('website.includes.footer')
