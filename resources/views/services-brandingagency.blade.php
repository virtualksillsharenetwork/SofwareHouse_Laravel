
@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
   {{--  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}"> -->-- --}}

@endpush
@section('content')
 

<section class="demo-6-hero bkbg0 shape-main">

<div class="shape-div1 shapesvg">
<div class="imgshp ssp1 rellax" data-rellax-speed="-2"><img src="{{ asset('images/shape/59.svg') }}" alt="img"></div>
<div class="imgshp ssp2 rellax" data-rellax-speed="-1"><img src="{{ asset('images/shape/38.svg') }}" alt="img"></div>
</div>
<div class="shape-div2 shapesvg">
<div class="imgshp ssp3 rellax" data-rellax-speed="-3"><img src="{{ asset('images/shape/24.svg') }}" alt="img"></div>
<div class="imgshp ssp4 rellax" data-rellax-speed="-1"><img src="{{ asset('images/shape/60.svg') }}" alt="img"></div>
</div>
<div class="shapesvg ssp5">
<div class="imgshp"><img src="{{ asset('images/shape/10.svg') }}" alt="img"></div>
</div>
<div class="shapesvg ssp6">
<div class="imgshp"><img src="{{ asset('images/shape/44.svg') }}" alt="img"></div>
</div>

<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10">
<div class="hero-content text-center">
<h1 class="mb20 text-gradient-1 h1 wow fadeInUp" data-wow-delay=".2s">We're Taking <span class="textimg"><img src="{{ asset('images/team/team.jpg') }}" alt="img"></span> Brands Beyond Their <span class="textimg"><img src="{{ asset('images/team/competition.jpg') }}" alt="img"></span> Competition.</h1>
<p class="wow fadeInUp" data-wow-delay=".4s">A full-service digital marketing firm that specialises in human-centered experiences. We bring companies and people together.</p>
<div class="mt40">
<!-- <form>
<div class="form-inputs heroform">
<input type="email" class="form-controls" placeholder="Enter Your Email">
<button type="submit" class="sw-btn sw-orange-btn"><i class="fa-solid fa-paper-plane"></i></button>
</div>
</form> -->
<p class="bottombtn wow fadeInUp" data-wow-delay=".6s">Quality Service ✨ Guaranteed</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="service-block-div section-space shape-main bg--1">

<div class="shapesvg ssp7">
<div class="imgshp rellax" data-rellax-speed="0.5" data-rellax-percentage="-0.1"><img src="{{ asset('images/shape/24.svg') }}" alt="img"></div>
</div>
<div class="shapesvg ssp8">
<div class="imgshp rellax" data-rellax-speed="0.5" data-rellax-percentage="-0.1"><img src="{{ asset('images/shape/3.svg') }}" alt="img"></div>
</div>

<div class="container">
<div class="row justify-content-center text-center">
<div class="col-xl-7 col-lg-8">
<h2 class="text-gradient-1 mb15 wow fadeIn" data-wow-delay=".2s">Services We Provide</h2>
<p class="wow fadeIn" data-wow-delay=".4s">Technopert overcomes challenges, achieves results, and adds value to our clients and partners. Take a look at some of our clients' success stories.</p>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row mt60">
<div class="col-lg-12">
<div class="service-cards owl-carousel">
<div class="service-card-div gradient-1">
<a href="#">
<div class="service-images"><img src="{{ asset('images/service/creator-rafiki.svg') }}" alt="#"></div>
<div class="service-name">Web <br> Design </div>
<div class="circleffect">
<div class="animation">&nbsp;</div>
</div>
</a>
</div>
<div class="service-card-div gradient-2">
<a href="#">
<div class="service-images"><img src="{{ asset('images/service/app.svg') }}" alt="#"></div>
<div class="service-name">App <br> Development </div>
<div class="circleffect">
<div class="animation">&nbsp;</div>
</div>
</a>
</div>
<div class="service-card-div gradient-3">
<a href="#">
<div class="service-images"><img src="{{ asset('images/service/design.svg') }}" alt="#"></div>
<div class="service-name">Graphic <br> Design </div>
<div class="circleffect">
<div class="animation">&nbsp;</div>
</div>
</a>
</div>
<div class="service-card-div gradient-4">
<a href="#">
<div class="service-images"><img src="{{ asset('images/service/blockcain.svg') }}" alt="#"></div>
<div class="service-name">Blockchain <br> Development </div>
<div class="circleffect">
<div class="animation">&nbsp;</div>
</div>
</a>
</div>
<div class="service-card-div gradient-5">
<a href="#">
<div class="service-images"><img src="{{ asset('images/service/ecommerce.svg') }}" alt="#"></div>
<div class="service-name">Ecommerce <br> Development </div>
<div class="circleffect">
<div class="animation">&nbsp;</div>
</div>
</a>
</div>
<div class="service-card-div gradient-6">
<a href="#">
<div class="service-images"><img src="{{ asset('images/service/marketing.svg') }}" alt="#"></div>
<div class="service-name">Digital <br> Marketing </div>
<div class="circleffect">
<div class="animation">&nbsp;</div>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="aboutblock section-space bkbg2 shape-main">

<div class="shape-div3 shapesvg">
<div class="imgshp ssp10 rellax" data-rellax-speed="-1" data-rellax-percentage="0"><img src="{{ asset('images/shape/27.svg') }}" alt="img"></div>
<div class="imgshp ssp9 rellax" data-rellax-speed="-0" data-rellax-percentage="0"><img src="{{ asset('images/shape/18.svg') }}" alt="img"></div>
</div>

<div class="container">
<div class="row justify-content-between">
<div class="col-lg-8">
<div class="about-conent paragraph">
<span class="scriptheading dashbefore mb15 wow fadeIn" data-wow-delay=".2s" data-wow-duration="1500ms">WHO WE ARE</span>
<h2 class="mb20 wow fadeIn" data-wow-delay=".4s" data-wow-duration="1500ms">Hire the Best Web, Desktop and Mobile App Developers For Your Project</h2>
<p class="wow fadeIn" data-wow-delay=".6s" data-wow-duration="1500ms">Expertise helps Technopert tackle the world's most difficult challenges. Technopert provides digital products for worldwide brands on the web, mobile, and linked platforms. Expertise helps Technopert tackle the world's most difficult challenges. Technopert provides digital products for worldwide brands on the web, mobile, and linked platforms.</p>
<p class="wow fadeIn" data-wow-delay=".8s" data-wow-duration="1500ms">Expertise helps Technopert tackle the world's most difficult challenges. Technopert provides digital products for worldwide brands on the web.</p>

<div class="item-pair mt40 wow fadeIn" data-wow-delay="1s" data-wow-duration="1500ms">
<a href="/contact-us" class="sw-btn sw-blue-btn">Get Started</a>
<!-- <div class="videobutton">
<a class="video-play" href="https://www.youtube.com/watch?v=Aty3TV4Yn4I"><span class="button-play"></span></a>
<span>Watch Video</span>
</div> -->
</div>

</div>
</div>
<div class="col-lg-2 mmt40">
<div class="counter-numbers homepagecounter">
<div class="counter-setdiv wow fadeIn" data-wow-delay="1.1s" data-wow-duration="1500ms">
<p> <span data-count-to="150" class="odometer"></span>+</p>
<span class="countertag">Professionals Team</span>
</div>
<div class="counter-setdiv wow fadeIn" data-wow-delay="1.2s" data-wow-duration="1500ms">
<p><span data-count-to="010" class="odometer"></span>+</p>
<span class="countertag">Years of Average Experience</span>
</div>
<div class="counter-setdiv wow fadeIn" data-wow-delay="1.3s" data-wow-duration="1500ms">
<p><span data-count-to="120" class="odometer"></span>k</p>
<span class="countertag">Successful Projects Delivered</span>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="section-space">
<div class="container">
<div class="row justify-content-between v-center">
<div class="col-lg-5 position-relative wow fadeIn" data-wow-delay=".2s" data-wow-duration="1500ms">
<div class="roundimg index-up"><img src="{{ asset('images/common/office-img.png') }}" alt="img"></div>
<div class="aftershape">
<img src="{{ asset('images/shape/69.svg') }}" alt="img" class="aash1 rellax" data-rellax-speed="0.1" data-rellax-percentage="-0.1">
<img src="{{ asset('images/shape/23.svg') }}" alt="img" class="aash2 rellax" data-rellax-speed="-0.1" data-rellax-percentage="-0.1">
</div>
</div>
<div class="col-lg-6 mmt40 wow fadeIn" data-wow-delay=".4s" data-wow-duration="1500ms">
<span class="scriptheading dashbefore mb15">Why Choose Us!</span>
<h3>Why Hire The Technopert As Your Application Development Company?</h3>
<div class="medialist mt40">
<div class="mediablock">
<div class="icondiv"><img src="{{ asset('images/icons/experience.png') }}" alt="icon"></div>
<div class="mediainfoblock">
<h5 class="mb10">Experienced & Skilled Resources </h5>
<p>Technopert is a company that specialises in risk management and general safety. We will bring value to your business farm while also ensuring.</p>
</div>
</div>
<div class="mediablock mt30">
<div class="icondiv"><img src="{{ asset('images/icons/on-time.png') }}" alt="icon"></div>
<div class="mediainfoblock">
<h5 class="mb10">Cost-effective & On-time Delivery</h5>
<p>If you think to have a better outcome with low cost then Technopert is the one. We are offering the best technology solution at an affordable price.</p>
</div>
</div>
<div class="mediablock mt30">
<div class="icondiv"><img src="{{ asset('images/icons/investment.png') }}" alt="icon"></div>
<div class="mediainfoblock">
<h5 class="mb10">Flexible Pricing & Working Models</h5>
<p>We always ensure that our task is handed over within the given time. Our main priority is customers gratification.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="cta-block-sw-bkt mb100 shape-main">

<div class="shapesvg ssp11">
<div class="imgshp rellax" data-rellax-speed="-1" data-rellax-percentage="0.5"><img src="{{ asset('images/shape/60.svg') }}" alt="img"></div>
</div>

<div class="container wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1500ms">
<div class="row">
<div class="col-lg-12">
<div class="cta-design-block-sw v-center bkbg0 bg--1">
<div class="cta-infoss">
<h3 class="mb15">Want to Hire Resources to Work With You?</h3>
<p>Web design app development for any kind of platforms. We have over 5 years of experience in helping companies.</p>
<a href="/contact-us" class="sw-btn sw-blue-btn mt30">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
</div>
<div class="cta-img-div-bkt"><img src="{{ asset('images/common/app-mockup-2.svg') }}" alt="img"></div>
</div>
</div>
</div>
</div>
</div>


<section class="tech-block section-space position-relative overflow-hidden bkbg3">

<div class="shape-div4 shapesvg">
<div class="imgshp ssp12 rellax" data-rellax-speed="-1.5" data-rellax-percentage="0"><img src="{{ asset('images/shape/99.svg') }}" alt="img"></div>
<div class="imgshp ssp13 rellax" data-rellax-speed="-1" data-rellax-percentage="0"><img src="{{ asset('images/shape/18.svg') }}" alt="img"></div>
</div>

<div class="sw-half-circle-block1 shcb index-down"></div>
<div class="sw-half-circle-block2 shcb index-down"></div>
<div class="container index-up">
<div class="row justify-content-center">
<div class="col-lg-8 text-center">
<h2 class="text-gradient-1 mb15 wow fadeIn" data-wow-delay=".2s">Our Workplace Technologies</h2>
<h5 class="mb15 italic wow fadeIn" data-wow-delay=".4s">Our Workplace Technologies" section of the Human Resources Department's website.</h5>
<p class="wow fadeIn" data-wow-delay=".6s">Our Workplace Technologies Center is focused on working with business leaders to help them maximize their productivity, reduce costs and meet social needs in the 21st century. Our Workplace Technologies Center is focused on working with business leaders to help them maximize their productivity, reduce costs and meet social needs in the 21st century.</p>
</div>
</div>
<div class="row index-up wow fadeIn" data-wow-delay=".8s">
<div class="col-lg-12">
<div class="tech-slider mt60">
<div class="sw-icon-slider owl-carousel">
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/android.svg') }}" alt="Android"> </div>
<div class="slider-icon-text">
<p>Android </p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/aws.svg') }}" alt="aws"> </div>
<div class="slider-icon-text">
<p>aws</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/figma.svg') }}" alt="figma"> </div>
<div class="slider-icon-text">
<p>figma</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/firebase.svg') }}" alt="firebase"> </div>
<div class="slider-icon-text">
<p>firebase</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/flutter.svg') }}" alt="flutter"> </div>
<div class="slider-icon-text">
<p>flutter</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/Google-cloud.svg') }}" alt="Google-cloud"> </div>
<div class="slider-icon-text">
<p>Google-cloud</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/java.svg') }}" alt="java">
</div>
<div class="slider-icon-text">
<p>Java</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/Kotlin.svg') }}" alt="Kotlin"> </div>
<div class="slider-icon-text">
<p>Kotlin</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/magento.svg') }}" alt="magento"> </div>
<div class="slider-icon-text">
<p>magento</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/Node.js.svg') }}" alt="Node.js">
</div>
<div class="slider-icon-text">
<p>Node.js</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/python.svg') }}" alt="python">
</div>
<div class="slider-icon-text">
<p>python</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/react.svg') }}" alt="react">
</div>
<div class="slider-icon-text">
<p>react</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/sketch.svg') }}" alt="sketch">
</div>
<div class="slider-icon-text">
<p>sketch</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/sqlite.svg') }}" alt="sqlite">
</div>
<div class="slider-icon-text">
<p>sqlite</p>
</div>
</div>
<div class="icon-slider-block">
<div class="slider-icon"> <img src="{{ asset('images/icons/tech-icons/swift.svg') }}" alt="swift">
</div>
<div class="slider-icon-text">
<p>swift</p>
</div>
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
