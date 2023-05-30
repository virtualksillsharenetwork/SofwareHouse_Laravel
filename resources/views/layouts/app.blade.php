<!doctype html>
<html lang="en">

<head>
    @include('layouts.partials.head')
    @stack('cs')

</head>
<body>

<div class="preloader">
<div class="preloader_inner">0%</div>
<div class="loaderlogo"><img src="{{ asset('images/logo-white.svg') }}" alt="logo"></div>
</div>


<header class="header animation">
<div class="container">
<div class="wrapper">

<div class="header-item-left">
<a href="index.html" class="brandlogo">
<img src="{{ asset('images/logo-white.svg') }}" alt="logo" class="lightlogo">
<img src="{{ asset('images/logo-black.svg') }}" alt="logo" class="darklogo">
</a>
</div>
@include('layouts.partials.header')
{{-- <!-- @include('layouts.partials.sidebar') -->--}}
@yield('content')



@include('layouts.partials.footer')


@include('layouts.partials.scripts')
@stack('js')
</body>
</html>
