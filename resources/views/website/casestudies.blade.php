@extends('layouts.website-layout')
@section('website-content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Case Studies</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>Case Studies</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Project Section Start -->
    @php
    $projects = App\Models\Project::where('project_status', 1)
        ->orderBy('project_order', 'DESC')
        ->limit(4)
        ->get();
    @endphp
    <div class="rs-project style5 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">

                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('uploads/project/' . $project['project_image']) }}" alt="images">
                            </div>
                            <div class="project-content">
                                <div class="p-icon"><a href="{{ route('website.casestudie.single') }}"><i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="project-inner">
                                    <h3 class="title"><a
                                            href="{{ route('website.casestudie.single') }}">{{ $project->project_title }}</a>
                                    </h3>
                                    <span class="category"><a
                                            href="{{ route('website.casestudie.single') }}">{{ $project->proCategory->procate_name }}</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Project Section End -->
@endsection
