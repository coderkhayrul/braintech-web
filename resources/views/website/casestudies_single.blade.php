@extends('layouts.website-layout')
@section('website-content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img2">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Case Studies Single</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="index.html">Home</a>
                </li>
                <li title="Go To Services">
                    <a class="active" href="case-studies-style1.html">Case Studies</a>
                </li>
                <li>Case Studies Single</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->


    <!-- Services Single Start -->
    <div class="rs-case-studies-single pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 md-mb-50">
                    <div class="services-img">
                        <img src="{{ asset('website') }}/assets/images/project/single/1.jpg" alt="">
                    </div>

                    <h2 class="mt-34">Expert People Launched Quality Projects</h2>

                    <p>European languages are members of the same family. The languages only differ in their
                        grammar, their pronu nciation and their most common words. pronunciation and more common
                        words. If several languages coalesce, the grammar of the resulting. Languages realizes why a
                        new common language would be desirable: one could refuse to pay expensive translators. To
                        achieve this, it would be necessary to have uniform grammar articles, pronunciation and more
                        common words the grammar of the resulting.</p>

                    <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                        approaches to corporate strategy foster collaborative thinking to further the overall value
                        proposition. Organically grow the holistic world view of disruptive innovation via workplace
                        diversity and empowerment. If several languages coalesce, the grammar of the resulting
                        realizes.</p>

                    <div class="services-img">
                        <img src="{{ asset('website') }}/assets/images/project/single/2.jpg" alt="">
                    </div>

                </div>
                <div class="col-lg-4 pl-32 md-pl-15">
                    <div class="ps-informations">
                        <h3 class="info-title">Project Info</h3>
                        <ul>
                            <li><span>Category:</span>IT Technology</li>
                            <li><span>Client: </span>Kers</li>
                            <li><span>Location: </span>Usa</li>
                            <li><span>Completed Date: </span>2018</li>
                            <li><span>Project Value: </span>50k</li>
                            <li><span>Mananer: </span>Skermset</li>
                            <li><span>Designer: </span>Istiak</li>
                        </ul>
                    </div>

                    <div class="brochures mb-50 mt-50">
                        <h3>Brochures</h3>
                        <p>
                            Cras enim urna, interdum nec por ttitor vitae, sollicitudin eu erosen. Praesent eget
                            mollis nulla sollicitudin.
                        </p>
                        <div class="pdf-btn">
                            <a class="readon learn-more pdf" href="contact.html">Download Now<i
                                    class="fa fa-file-pdf-o"></i></a>
                        </div>
                    </div>

                    <div class="services-add">
                        <div class="address-item mb-35">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <h2 class="title">Have any Questions? <br> Call us Today!</h2>
                        <div class="contact">
                            <a href="tel:123222-8888">(123) 222-8888</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Services Single End -->
@endsection
