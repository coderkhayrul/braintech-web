@extends('layouts.website-layout')
@section('website-content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img4">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Our Team</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>Our Team</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Team Section Start -->
    @php
    $teammembers = App\Models\TeamMember::where('team_status', 1)
        ->orderBy('team_order', 'ASC')
        ->get();
    @endphp
    <div class="rs-team modify1 pt-120 pb-95 md-pt-80 md-pb-75">
        <div class="container">
            <div class="row">
                @foreach ($teammembers as $teammember)
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="#"><img src="{{ asset('website') }}/assets/images/team/style1/1.jpg"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="single-team.html">Makhaia Antitni</a></h4>
                                <span class="designation">President & CEO</span>
                                <ul class="team-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="team-item-wrap">
                        <div class="team-wrap">
                            <div class="image-inner">
                                <a href="#"><img src="{{ asset('website') }}/assets/images/team/style1/1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="person-name"><a href="single-team.html">Makhaia Antitni</a></h4>
                            <span class="designation">President & CEO</span>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team Section End -->
@endsection
