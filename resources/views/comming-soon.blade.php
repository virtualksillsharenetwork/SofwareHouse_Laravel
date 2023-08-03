@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
   {{--  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}"> -->-- --}}

@endpush
@section('content')

<div class="comming-soon linebg">
<div class="main-sw">
<div class="header">
<div class="container">
<div class="row v-center">
    

</div>
</div>
</div>
<div class="middle-block shape-main">

<div class="shape-div1 shapesvg">
<div class="imgshp ssp1 rellax" data-rellax-speed="-2"><img src="images/shape/59.svg" alt="img"></div>
<div class="imgshp ssp2 rellax" data-rellax-speed="-1"><img src="images/shape/18.svg" alt="img"></div>
</div>
<div class="shape-div2 shapesvg">
<div class="imgshp ssp3 rellax" data-rellax-speed="-3"><img src="images/shape/24.svg" alt="img"></div>
<div class="imgshp ssp4 rellax" data-rellax-speed="-1"><img src="images/shape/2.svg" alt="img"></div>
</div>

<div class="container">
<div class="row v-center justify-content-between">
<div class="col-lg-5">
<div class="page-content">
<p class="scriptheading">Coming Soon</p>
<h1>This page is under construction, will be uploaded soon.</h1>
<form class="mt30">
<div class="col-lg-6 col-7 text-right"><a href="/" class="sw-btn sw-orange-btn header-btn"><i class="fa-solid fa-arrow-circle-left"></i> <span>Go Back to Home</span></a></div>

<!-- <div class="form-inputs heroform w-100">
<input type="tel" class="form-controls" placeholder="Enter Your Email">
<button type="submit" class="sw-btn sw-orange-btn"><i class="fa-solid fa-paper-plane"></i></button>
</div> -->
</form>
<div class="mt30 col-lg-6 col-7 text-right"><a href="tel:+923006916670" class="sw-btn sw-orange-btn header-btn"><i class="fa-solid fa-phone"></i> <span>+92 300 691 6670</span></a></div>
<div class="coundown mt40">
<p class="mb20 linktitle">We Launch In:</p>
<div class="coming-soon-header">
<div class="coming-soon-countdown">
<ul>
<li>
<div class="ct-time ct-time-days">&nbsp;</div>
<div class="ct-label">days</div>
</li>
<li>
<div class="ct-time ct-time-hours">&nbsp;</div>
<div class="ct-label">hours</div>
</li>
<li>
<div class="ct-time ct-time-minutes">&nbsp;</div>
<div class="ct-label">minutes</div>
</li>
<li>
<div class="ct-time ct-time-seconds">&nbsp;</div>
<div class="ct-label">seconds</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6  mmt40">
<div class="roundimg">
<img src="images/common/working.svg" alt="img" class="img-fluid">
</div>
</div>
</div>
</div>
</div>
</div>
</div>

    {{-- <!-- @include('admin.transactions.components.addCost')-- --}}
    {{-- @include('admin.transactions.components.editCost') -->-- --}}
@endsection
@push('js')
    {{-- <!-- @include('admin.components.datatableScript') -->-- --}}
    <script>

    </script>

   {{--  <!-- @include('admin.transactions.components.addItemsScript') -->-- --}}
@endpush
