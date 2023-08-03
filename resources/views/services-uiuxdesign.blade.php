
@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
   {{--  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}"> -->-- --}}

@endpush
@section('content')
 
<section class="hero-slider hero-style" id="home">
<div class="swiper-container">

<div class="swiper-wrapper">

<div class="swiper-slide">
<div class="slide-inner slide-bg-image" data-background="{{ asset('images/hero/slider-1.jpg') }}">
<div class="container">
<div data-swiper-parallax="300" class="slide-title">
<span class="scriptheading dashbefore mb15 wow fadeIn" data-wow-delay=".2s" data-wow-duration="1500ms">Creative Agency</span>
<h2>We Are a Bunch of Future Holders, Making The Digital World Better.</h2>
</div>
<div data-swiper-parallax="400" class="slide-text">
<p>A full-service digital marketing firm that specialises in human-centered experiences. We bring companies and people together.</p>
</div>
<div class="clearfix"></div>
<div data-swiper-parallax="500" class="slide-btns">
<a href="contact-1.html" class="sw-btn sw-blue-btn">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
</div>
</div>
</div>
</div>


<div class="swiper-slide">
<div class="slide-inner slide-bg-image" data-background="{{ asset('images/hero/slider-2.jpg') }}">
<div class="container">
<div data-swiper-parallax="300" class="slide-title">
<span class="scriptheading dashbefore mb15 wow fadeIn" data-wow-delay=".2s" data-wow-duration="1500ms">Creative Agency</span>
<h2>We Build Global Experiences That Customers Love</h2>
</div>
<div data-swiper-parallax="400" class="slide-text">
<p>A full-service digital marketing firm that specialises in human-centered experiences. We bring companies and people together.</p>
</div>
<div class="clearfix"></div>
<div data-swiper-parallax="500" class="slide-btns">
<a href="/contact-us" class="sw-btn sw-blue-btn">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
</div>
</div>
</div>
</div>

</div>


<div class="swiper-pagination"></div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
</section>



    @include('layouts.partials.footer-2')
    {{-- <!-- @include('admin.transactions.components.addCost')-- --}}
    {{-- @include('admin.transactions.components.editCost') -->-- --}}
@endsection
@push('js')
    {{-- <!-- @include('admin.components.datatableScript') -->-- --}}
    <script>

    </script>

   {{--  <!-- @include('admin.transactions.components.addItemsScript') -->-- --}}
@endpush
