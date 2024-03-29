
<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="LERAMIZ Landing Page Template">
<meta name="keywords" content="LERAMIZ, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title> {{config('app.name') . " - " . basename($_SERVER['REQUEST_URI'])}} </title>


<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('public/img/favicon/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('public/img/favicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('public/img/favicon/favicon-16x16.png')}}">
<link rel="manifest" href="/site.webmanifest">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ URL::asset('public/css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{URL::asset('public/css/bootstrap.css')}}"/>
<link rel="stylesheet" href="{{URL::asset('public/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{URL::asset('public/css/animate.css')}}"/>
<link rel="stylesheet" href="{{URL::asset('public/css/owl.carousel.css')}}"/>
<link rel="stylesheet" href="{{URL::asset('public/css/style.css')}}"/>

