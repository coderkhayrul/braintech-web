<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Not Found</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website') }}/assets/images/fav.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/fonts/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/animate.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/responsive.css">

</head>

<body class="defult-home">

    <!--Preloader area start here-->
    <div id="loader" class="loader">
        <div class="loader-container"></div>
    </div>
    <!--Preloader area End here-->

    <!-- Main content Start -->
    <div class="main-content">
        <div class="page-error">
            <div class="container">
                <div class="error-not-found">
                    <div class="error-content">
                        <h2 class="title"><span>404</span>oops! page not found</h2>
                        <div class="btn-part">
                            <a href="{{ route('website.home') }}" class="readon learn-more">Back To Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content End -->

    <!-- modernizr js -->
    <script src="{{ asset('website') }}/assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('website') }}/assets/js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('website') }}/assets/js/bootstrap.min.js"></script>
    <!-- wow js -->
    <script src="{{ asset('website') }}/assets/js/wow.min.js"></script>
    <!-- op nav js -->
    <script src="{{ asset('website') }}/assets/js/jquery.nav.js"></script>
    <!-- plugins js -->
    <script src="{{ asset('website') }}/assets/js/plugins.js"></script>
    <!-- main js -->
    <script src="{{ asset('website') }}/assets/js/main.js"></script>
</body>

</html>
