<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <!-- Stylesheets -->
    <link href="{{asset('ui/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('ui/css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ui/css/slick.css')}}">
    <link href="{{asset('ui/css/style.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('ui/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('ui/images/favicon.png')}}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="js/respond.js"></script><![endif]-->
</head>
<div class="page-wrapper">
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
</div>
<script src="{{asset('ui/js/jquery.js')}}"></script>
<script src="{{asset('ui/js/popper.min.js')}}"></script>
<script src="{{asset('ui/js/bootstrap.min.js')}}"></script>
<script src="{{asset('ui/js/slick.min.js')}}"></script>
<script src="{{asset('ui/js/slick-animation.min.js')}}"></script>
<script src="{{asset('ui/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('ui/js/progress-bar.js')}}"></script>
<script src="{{asset('ui/js/wow.js')}}"></script>
<script src="{{asset('ui/js/appear.js')}}"></script>
<script src="{{asset('ui/js/mixitup.js')}}"></script>
<script src="{{asset('ui/js/script.js')}}"></script>
<body>
