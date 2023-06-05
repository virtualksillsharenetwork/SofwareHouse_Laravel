@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
   {{--  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}"> -->-- --}}

@endpush
@section('content')

<section class="breadcrum-area big-breadcrum-area bg-efffect-2">
    <div class="container index-up">
    <div class="row justify-content-center text-center">
    <div class="col-lg-6">
    <div class="breadcrum-area-content">
    <ul class="list-h-styled mb30">
    <li><a href="index.html">Home</a></li>
    <li class="active">Portfolio</li>
    </ul>
    <h2 class="mb15">Some of our Best work that we are Proud of</h2>
    <p>Expertise helps Blueket tackle the world's most difficult challenges. Blueket provides digital products for worldwide brands on the web.</p>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space bg--2">
    <div class="container">

    <div class="row isotope-items-wrap">
    <div class="col-lg-4 col-md-6 col-sm-12 mt30 grid-sizer"></div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-1.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Kyntra: Online Shopping</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-2.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Bradley's Bakery</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-3.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Tommy Fashio Store</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-4.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Finance App</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-5.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>NFT Marketplace</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-6.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Health Tracker</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-1.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Kyntra: Online Shopping</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-2.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Bradley's Bakery</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-3.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Tommy Fashio Store</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-4.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Finance App</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-5.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>NFT Marketplace</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mt30 isotope-item">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="images/portfolio/work-6.jpg" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Health Tracker</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
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
