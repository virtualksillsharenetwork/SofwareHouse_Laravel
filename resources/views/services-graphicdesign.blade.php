
@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
   {{--  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}"> -->-- --}}

@endpush
@section('content')
 
<section class="demo-5-hero">
<div class="sw-hero-shape">
<div class="sw-shape-1 sws1"><img src="{{ asset('images/shape/sw-1.svg') }}" alt="img"></div>
<div class="sw-shape-1 sws2"><img src="{{ asset('images/shape/sw-2.svg') }}" alt="img"></div>
<div class="sw-shape-1 sws3 floating-x"><img src="{{ asset('images/shape/sw-3.svg') }}" alt="img"></div>
<div class="sw-shape-1 sws4"><img src="{{ asset('images/shape/sw-4.svg') }}" alt="img"></div>
<div class="sw-shape-1 sws5"><img src="{{ asset('images/shape/sw-5.svg') }}" alt="img"></div>
<div class="sw-shape-1 sws6 floating-y"><img src="{{ asset('images/shape/sw-6.svg') }}" alt="img"></div>
<div class="sw-shape-1 sws7"><img src="{{ asset('images/shape/sw-7.svg') }}" alt="img"></div>
</div>
<div class="container index-up">
<div class="row justify-content-center">
<div class="col-lg-9">
<div class="hero-content text-center">
<h1 class="mb20 text-gradient-1 h1 wow fadeInUp" data-wow-delay=".2s"> Design. Think. Solve. Development.</h1>
<p class="wow fadeInUp" data-wow-delay=".4s">A full-service digital marketing firm that specialises in human-centered experiences. We bring companies and people together.</p>
<div class="mt40">
<a href="/contact-us" class="sw-btn sw-blue-btn">Get Started</a>
<p class="bottombtn wow fadeInUp" data-wow-delay=".6s">Quality Service ✨ Guaranteed</p>
</div>
</div>
</div>
</div>
</div>
<div class="wide-block-scroll index-up">
<div class="service-card-row scrollonmove">
<div class="our-works">
<div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-1.jpg') }}" alt="work" class="card-img-round"></a></div>
</div>
<div class="our-works">
<div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-2.jpg') }}" alt="work" class="card-img-round"></a></div>
</div>
<div class="our-works">
<div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-3.jpg') }}" alt="work" class="card-img-round"></a></div>
</div>
<div class="our-works">
<div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-4.jpg') }}" alt="work" class="card-img-round"></a></div>
</div>
<div class="our-works">
<div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-5.jpg') }}" alt="work" class="card-img-round"></a></div>
</div>
<div class="our-works">
<div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-3.jpg') }}" alt="work" class="card-img-round"></a></div>
</div>
</div>
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
