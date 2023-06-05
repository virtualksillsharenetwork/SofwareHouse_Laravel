@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
   {{--  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}"> -->-- --}}

@endpush
@section('content')

<section class="breadcrum-area big-breadcrum-area bg-efffect-2">
    <div class="container index-up">
    <div class="row justify-content-between">
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
    <div class="col-lg-5 flex-end mmt30">
    <h5>Portfolio on Other Websites.</h5>
    <div class="portfolio-source dashedbdr animation">
    <div class="port-ref-link">
    <a href="#"><img src="images/icons/dribbble.svg" alt="dribbble-logo"> <span>Dribbble</span> </a>
    </div>
    <div class="port-ref-link">
    <a href="#"><img src="images/icons/behance.svg" alt="dribbble-logo"> <span>Behance</span> </a>
    </div>
    <div class="port-ref-link">
    <a href="#"><img src="images/icons/instagram.svg" alt="dribbble-logo"> <span>Instagram</span> </a>
    </div>
    <div class="port-ref-link">
    <a href="#"><img src="images/icons/artstations.svg" alt="dribbble-logo"> <span>Artstations</span> </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space bg--2">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <h4>Our Selected <span class="light-et">Works</span></h4>
    <p class="mt15">Your ingenious digital partner for expanding your brand globally.</p>
    </div>
    </div>

    <div class="row mt30 justify-content-between v-center">
    <div class="col-lg-6 order1 mt30 wow fadeIn" data-wow-delay=".2s">
    <div class="card-img-round">
    <img src="images/portfolio/work-1.jpg" alt="project">
    </div>
    </div>
    <div class="col-lg-5 order2 mt30 wow fadeIn" data-wow-delay=".6s">
    <div class="project-card-info">
    <span class="scriptheading mb15">Figma, UI/UX, Android</span>
    <h3>Multi-Vendor eCommerce Store Android App</h3>
    <a href="#" class="sw-btn sw-blue-btn mt50">Live View <i class="fa-solid fa-arrow-trend-up"></i></a>

    <div class="icon-label mt50">
    <div class="icon-data">
    <img src="images/icons/python.svg" alt="Python">
    <p>Python</p>
    </div>
    <div class="icon-data">
    <img src="images/icons/react.svg" alt="figma">
    <p>React</p>
    </div>
    <div class="icon-data">
    <img src="images/icons/figma.svg" alt="figma">
    <p>Figma</p>
    </div>
    <div class="icon-data">
    <img src="images/icons/android.svg" alt="Android">
    <p>Android</p>
    </div>
    </div>

    </div>
    </div>
    </div>


    <div class="row mt30 justify-content-between v-center">
    <div class="col-lg-5 order2 mt30 wow fadeIn" data-wow-delay=".2s">
    <div class="project-card-info">
    <span class="scriptheading mb15">Photoshop, PhP, HTML</span>
    <h3>Restaurant Web Development</h3>
    <a href="#" class="sw-btn sw-blue-btn mt50">Live View <i class="fa-solid fa-arrow-trend-up"></i></a>

    <div class="icon-label mt50">
    <div class="icon-data">
    <img src="images/icons/python.svg" alt="Python">
    <p>Python</p>
    </div>
    <div class="icon-data">
    <img src="images/icons/react.svg" alt="figma">
    <p>React</p>
    </div>
    <div class="icon-data">
    <img src="images/icons/figma.svg" alt="figma">
    <p>Figma</p>
    </div>
    <div class="icon-data">
    <img src="images/icons/android.svg" alt="Android">
    <p>Android</p>
    </div>
    </div>

    </div>
    </div>
    <div class="col-lg-6 order1 mt30 wow fadeIn" data-wow-delay=".6s">
    <div class="card-img-round">
    <img src="images/portfolio/work-2.jpg" alt="project">
    </div>
    </div>
    </div>


    <div class="row mt30 justify-content-between v-center">
    <div class="col-lg-6 order1 mt30 wow fadeIn" data-wow-delay=".2s">
    <div class="card-img-round">
    <img src="images/portfolio/work-3.jpg" alt="project">
    </div>
    </div>
    <div class="col-lg-5 order2 mt30 wow fadeIn" data-wow-delay=".6s">
    <div class="project-card-info">
    <span class="scriptheading mb15">Adobe XD, Java, React</span>
    <h3>Fashion Store iOs App & Web Design</h3>
    <a href="#" class="sw-btn sw-blue-btn mt50">Live View <i class="fa-solid fa-arrow-trend-up"></i></a>

    <div class="icon-label mt50">
    <div class="icon-data">
    <img src="images/icons/python.svg" alt="Python">
    <p>Python</p>
    </div>
    <div class="icon-data">
    <img src="images/icons/react.svg" alt="figma">
    <p>React</p>
    </div>
    <div class="icon-data">
    <img src="images/icons/figma.svg" alt="figma">
    <p>Figma</p>
    </div>
    <div class="icon-data">
    <img src="images/icons/android.svg" alt="Android">
    <p>Android</p>
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
