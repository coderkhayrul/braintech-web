{{-- {{  request()->routeIs('website.contactus') ? 'active' : '' }} --}}

<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Topbar Area Start -->
        @include('website.includes.topbar')
        <!-- Topbar Area End -->

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="logo-area">
                    <a href="index.html">
                        <img class="sticky-logo" src="{{ asset('website') }}/assets/images/logo-dark.png" alt="logo">
                    </a>
                </div>
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <div class="mobile-menu">
                            <a href="{{ route('website.home') }}" class="mobile-logo">
                                <img src="{{ asset('website') }}/assets/images/logo-light.png" alt="logo">
                            </a>
                            <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <li>
                                    <a href="{{ route('website.home') }}">Home</a>
                                </li>

                                <li>
                                    <a href="{{ route('website.about') }}">About</a>
                                </li>
                                <li>
                                    <a href="{{ route('website.service') }}">Services</a>
                                </li>

                                <li>
                                    <a href="{{ route('website.ourteam') }}">Our Team</a>
                                </li>

                                <li>
                                    <a href="{{ route('website.casestudies') }}">Case Studies</a>
                                </li>

                                <li>
                                    <a href="{{ route('website.blog') }}">Blog</a>
                                </li>

                                <li>
                                    <a href="{{ route('website.contactus') }}">Contact</a>
                                </li>
                            </ul> <!-- //.nav-menu -->
                        </nav>
                    </div> <!-- //.main-menu -->
                </div>
                <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                    <ul>
                        <li class="sidebarmenu-search">
                            <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal"
                                href="#">
                                <i class="flaticon-search"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="toolbar-sl-share">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->
</div>