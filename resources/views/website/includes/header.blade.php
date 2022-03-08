<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @php
        $basic = App\Models\Basic::where('id', 1)
            ->where('basic_status', 1)
            ->firstOrFail();
    @endphp
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>{{ $basic['basic_company'] . $basic['basic_title'] }}</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/basic/' . $basic['basic_favicon']) }}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/fonts/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/off-canvas.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/assets/css/responsive.css">

    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
