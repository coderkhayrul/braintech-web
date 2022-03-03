@extends('layouts.website-layout')
@section('website-content')

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img4">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Blog</h1>
        <ul>
            <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                <a class="active" href="index.html">Home</a>
            </li>
            <li>Blog</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section Start -->
<div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-last">
                <div class="widget-area">
                    <div class="search-widget mb-50">
                        <div class="search-wrap">
                            <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                            <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                        </div>
                    </div>
                    <div class="recent-posts mb-50">
                        <div class="widget-title">
                            <h3 class="title">Latest Posts</h3>
                        </div>
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/1.jpg" alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-details.html">Pen Source Job Report Show More Openings Fewer </a>
                                <span class="date">
                                    <i class="fa fa-calendar"></i>
                                    January 21, 2020
                                </span>
                            </div>
                        </div>
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/2.jpg" alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-details.html">Tech Products That Makes Its Easier to Stay at Home</a>
                                <span class="date">
                                    <i class="fa fa-calendar"></i>
                                    January 21, 2020
                                </span>
                            </div>
                        </div>
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/3.jpg" alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-details.html">Necessity May Give Us Your Best Virtual Court System </a>
                                <span class="date">
                                    <i class="fa fa-calendar"></i>
                                    January 21, 2020
                                </span>
                            </div>
                        </div>
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/4.jpg" alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-details.html">Servo Project Joins The Linux Foundation Fold Desco </a>
                                <span class="date">
                                    <i class="fa fa-calendar"></i>
                                    January 21, 2020
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="categories mb-50">
                        <div class="widget-title">
                            <h3 class="title">Categories</h3>
                        </div>
                        <ul>
                            <li><a href="#">Application Testing</a></li>
                            <li><a href="#">Artifical Intelligence</a></li>
                            <li><a href="#">Digital Technology</a></li>
                            <li><a href="#">IT Services</a></li>
                            <li><a href="software-development.html">Software Development</a></li>
                            <li><a href="web-development.html">Web Development</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pr-35 md-pr-15">
                <div class="row">
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/1.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Application Testing</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Open Source Job Report Show More
                                        Openings Fewer</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> admin
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled and
                                    demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/2.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Application Testing</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Tech Products That Makes Its Easier
                                        to Stay at Home</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> admin
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled and
                                    demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/3.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Application Testing</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Necessity May Give Us Your Best
                                        Virtual Court System</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> admin
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled and
                                    demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/4.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-single.html">Application Testing</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Servo Project Joins The Linux
                                        Foundation Fold Desco</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> admin
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled and
                                    demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/5.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Software Development</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Servo Project Joins The Linux
                                        Foundation Fold Desco</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> admin
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled and
                                    demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/6.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Software Development</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Necessity May Give Us Your Best
                                        Virtual Court System</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> admin
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled and
                                    demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/7.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Web Development</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Tech Products That Makes Its Easier
                                        to Stay at Home</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> admin
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled and
                                    demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/8.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">It Services</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Open Source Job Report Show More
                                        Openings Fewer</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> admin
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled and
                                    demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/9.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-single.html">Artifical Intelligence</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Types of Social Proof What its Makes
                                        Them Effective</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> admin
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled and
                                    demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('website') }}/assets/images/blog/inner/10.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-single.html">Digital Technology</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Tech Firms Support Huawei
                                        Restriction, Balk at Cost</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> January 10, 2020
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> admin
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled and
                                    demo realized by the charms of pleasure of the moment, so blinded by desire, that...
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section End -->
@endsection
