@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')

@endpush
@section('content')

<div class="offcanvas offcanvas-end sidebar-offcanvas" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-header">
    <div class="sidebarlogooff">
    <img src="images/logo-white.svg" alt="logo" class="sidewhitelogo">
    <img src="images/logo-black.svg" alt="logo" class="sidedarklogo">
    </div>
    <div class="cbtn">
    <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
    </div>
    </div>
    <div class="offcanvas-body">
    <div class="sidebarbody">
    <h4 class="mb10">Get In Touch</h4>
    <p>Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
    <div class="sidebarcontactblock mt50">
    <div class="contactnumberdiv">
    <p class="mb5 linktitle">We're Available 24/7. Call Now.</p>
    <a href="#"><i class="fa-solid fa-tty mr10"></i> 91 123 4567 890</a>
    <a href="#"><i class="fa-brands fa-whatsapp mr10"></i> 91 123 4567 890</a>
    </div>
    <div class="contactnumberdiv mt30">
    <p class="mb5 linktitle">Send Us an Email:</p>
    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="cca4be8cb5a3b9bebba9aebfa5b8a9e2afa3a1">[email&#160;protected]</span></a>
    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="b6dfd8d0d9f6cfd9c3c4c1d3d4c5dfc2d398d5d9db">[email&#160;protected]</span></a>
    </div>
    <div class="social-link-sw mt30">
    <span class="linktitle">Follow Us</span>
    <ul class="footer-social-sw mt10 sw-hover-2">
    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
    <li> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
    <li> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>


    <section class="breadcrum-area innerheadbg text-white" data-background="images/common/head-bg-1.jpg">
    <div id="particles-js"></div>
    <div class="container index-up">
    <div class="row justify-content-between">
    <div class="col-lg-6">
    <div class="breadcrum-area-content">
    <ul class="list-h-styled mb30">
    <li><a href="index.html">Home</a></li>
    <li class="active">Contact</li>
    </ul>
    <h2 class="mb15">About Us</h2>
    <p>We are a multi-award-winning digital consulting and engineering firm that provides end-to-end software solutions to enterprises.</p>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space overhidden">
    <div class="container">
    <div class="row justify-content-between">
    <div class="col-lg-6">
    <div class="text-conent paragraph mmt30">
    <h5 class="scriptheading dashbefore">About Us</h5>
    <h3 class="mt20 mb20">Who Are We?</h3>
    <h5 class="mb15">We are highly passionate about Web and Mobile application Development Services. </h5>
    <p>App design, web development, digital marketing, e-commerce solutions, and cloud development are just a few of the many services offered by our specialists. We use some of the greatest individuals in the sector and keep up with technology to develop cutting-edge digital goods that satisfy customer needs across several company verticals and sectors.</p>
    </div>
    <div class="row mt20">
    <div class="col-xl-6 col-lg-12 col-md-12 mt20">
    <ul class="bulletpoints">
    <li>Mobile Application Developers (React Native, JAVA)</li>
    <li>Desktop Software Developer (Winform, C#, Node.js, Electron.js)</li>
    </ul>
    </div>
    <div class="col-xl-6 col-lg-12 col-md-12 mt20">
    <ul class="bulletpoints">
    <li>Web Application (Laravel, Node.js).</li>
    <li>Web Design(Core, React, VUE.js)</li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-6 pad-left-70 mmt40">
    <div class="img-collage-sets ">
    <div class="blueketshape1 shapesw shapecontrol-4"></div>
    <div class="col-6-a">
    <div class="imgcover roundimg"> <img src="images/common/team-1.jpg" alt="img"></div>
    </div>
    <div class="col-6-b">
    <div class="imgcover roundimg"> <img src="images/common/team-2.jpg" alt="img"></div>
    </div>
    <div class="blueketshape2 shapesw shapecontrol-3"></div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <div class="ourteam">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12">
    <div class="paralleximg roundimg"><img src="images/common/team-all.jpg" alt="team view"></div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="counter-numbers row-blocks overtheimg fourcounter">
    <div class="counter-setdiv">
    <p> <span data-count-to="150" class="odometer"></span>+</p>
    <span class="countertag">Professionals Team</span>
    </div>
    <div class="counter-setdiv">
    <p><span data-count-to="010" class="odometer"></span>+</p>
    <span class="countertag">Years of Average Experience</span>
    </div>
    <div class="counter-setdiv">
    <p><span data-count-to="120" class="odometer"></span>k</p>
    <span class="countertag">Successful Projects Delivered</span>
    </div>
    <div class="counter-setdiv">
    <p><span data-count-to="050" class="odometer"></span>k</p>
    <span class="countertag">Happy Clients</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <section class="section-space pt-0">
    <div class="container">
    <div class="row justify-content-between align-end">
    <div class="col-lg-6">
    <div class="about-conent paragraph">
    <h2 class="wow fadeInUp" data-wow-delay=".2s">How we aid in brand development</h2>
    </div>
    </div>
    <div class="col-lg-5 mmt40">
    <div class="about-conent">
    <p class="wow fadeInUp" data-wow-delay=".4s">Blueket has Impressive features to build your website creatively and fast. The template has been created with such care that it is ready to suit all of your requirements.</p>
    </div>
    </div>
    </div>
    <div class="row mt30">
    <div class="col-lg-4 mt30">
    <div class="sw-card swbdr">
    <div class="cardicon"><img src="images/demo/edit.png" alt="icon"></div>
    <h4>Client Centric Approach</h4>
    <p>For any business, customers are always at the center. Being a leading web and mobile app development company.</p>
    </div>
    </div>
    <div class="col-lg-4 mt30">
    <div class="sw-card swbdr">
    <div class="cardicon"><img src="images/demo/paid-content.png" alt="icon"></div>
    <h4>Effective Collaboration</h4>
    <p>For any business, customers are always at the center. Being a leading web and mobile app development company.</p>
    </div>
    </div>
    <div class="col-lg-4 mt30">
    <div class="sw-card swbdr">
    <div class="cardicon"><img src="images/demo/feature.png" alt="icon"></div>
    <h4>On-Time Delivery</h4>
    <p>For any business, customers are always at the center. Being a leading web and mobile app development company.</p>
    </div>
    </div>
    <div class="col-lg-4 mt30">
    <div class="sw-card swbdr">
    <div class="cardicon"><img src="images/demo/code.png" alt="icon"></div>
    <h4>Customer Relationship</h4>
    <p>For any business, customers are always at the center. Being a leading web and mobile app development company.</p>
    </div>
    </div>
    <div class="col-lg-4 mt30">
    <div class="sw-card swbdr">
    <div class="cardicon"><img src="images/demo/technical-support.png" alt="icon"></div>
    <h4>24/7 Support</h4>
    <p>For any business, customers are always at the center. Being a leading web and mobile app development company.</p>
    </div>
    </div>
    <div class="col-lg-4 mt30">
    <div class="sw-card swbdr">
    <div class="cardicon"><img src="images/demo/update.png" alt="icon"></div>
    <h4>Returning Offer</h4>
    <p>For any business, customers are always at the center. Being a leading web and mobile app development company.</p>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space bkbg0">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <img src="images/common/our-team.svg" alt="ourteam">
    </div>
    <div class="col-lg-6 mmt40">
    <span class="scriptheading dashbefore mb15">Why Blueket?</span>
    <h4>Here are some reasons why customers choose Blueket over a competitor</h4>
    <div class="medialist mt40">
    <div class="mediablock">
    <div class="icondiv"><img src="images/icons/thumbs-up.png" alt="icon"></div>
    <div class="mediainfoblock">
    <h5 class="mb10">Assured services </h5>
    <p>Blueket is a company that specialises in risk management and general safety. We will bring value to your business farm while also ensuring.</p>
    </div>
    </div>
    <div class="mediablock mt30">
    <div class="icondiv"><img src="images/icons/budget.png" alt="icon"></div>
    <div class="mediainfoblock">
    <h5 class="mb10">Cost-effective Solution</h5>
    <p>If you think to have a better outcome with low cost then Blueket is the one. We are offering the best technology solution at an affordable price.</p>
    </div>
    </div>
    <div class="mediablock mt30">
    <div class="icondiv"><img src="images/icons/clipboard.png" alt="icon"></div>
    <div class="mediainfoblock">
    <h5 class="mb10">On-time Delivery</h5>
    <p>We always ensure that our task is handed over within the given time. Our main priority is customers gratification.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="clients-section section-space">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-10 text-center">
    <span class="scriptheading mb15 wow fadeIn" data-wow-delay=".2s">Review/Feedback</span>
    <h2 class="text-gradient-1 wow fadeIn" data-wow-delay=".4s">Happy Clients With Digital Transformation</h2>
    </div>
    </div>
    <div class="row mt60">
    <div class="col-lg-12">
    <div class="review-slider owl-carousel full-button">
    <div class="blueket-card-noise card-img-round pt30">
    <div class="review-img-block">
    <div class="user-image"><img src="images/common/user-image.jpg" alt="review"></div>
    <div class="user-content">
    <h5>Karan Kumar</h5>
    <p>CTO @ Amber Fund</p>
    </div>
    </div>
    <div class="review-content mt30 mb30">
    <p>When it comes to website development and SEO, Blueket has been the best company I've worked with so far. We hired them for both of our businesses and have seen a drastic increase in our customer base.</p>
    </div>
    <div class="review-footer pair-block">
    <div class="image-icon">
    <a href="#"><img src="images/icons/google.png" alt="icon"></a>
    </div>
    <div class="starrating">
    <ul>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="blueket-card-noise card-img-round pt30">
    <div class="review-img-block">
    <div class="user-image"><img src="images/common/user-image-2.jpg" alt="review"></div>
    <div class="user-content">
    <h5>Mike Smith</h5>
    <p>Business Man</p>
    </div>
    </div>
    <div class="review-content mt30 mb30">
    <p>When it comes to website development and SEO, Blueket has been the best company I've worked with so far. We hired them for both of our businesses and have seen a drastic increase in our customer base.</p>
    </div>
    <div class="review-footer pair-block">
    <div class="image-icon">
    <a href="#"><img src="images/icons/google.png" alt="icon"></a>
    </div>
    <div class="starrating">
    <ul>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="blueket-card-noise card-img-round pt30">
    <div class="review-img-block">
    <div class="user-image"><img src="images/common/user-image-3.jpg" alt="review"></div>
    <div class="user-content">
    <h5>Riya Smily</h5>
    <p>CEO @ Tema Security</p>
    </div>
    </div>
    <div class="review-content mt30 mb30">
    <p>When it comes to website development and SEO, Blueket has been the best company I've worked with so far. We hired them for both of our businesses and have seen a drastic increase in our customer base.</p>
    </div>
    <div class="review-footer pair-block">
    <div class="image-icon">
    <a href="#"><img src="images/icons/google.png" alt="icon"></a>
    </div>
    <div class="starrating">
    <ul>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="blueket-card-noise card-img-round pt30">
    <div class="review-img-block">
    <div class="user-image"><img src="images/common/user-image-4.jpg" alt="review"></div>
    <div class="user-content">
    <h5>Oliver Kanjorva</h5>
    <p>Business Man</p>
    </div>
    </div>
    <div class="review-content mt30 mb30">
    <p>When it comes to website development and SEO, Blueket has been the best company I've worked with so far. We hired them for both of our businesses and have seen a drastic increase in our customer base.</p>
    </div>
    <div class="review-footer pair-block">
    <div class="image-icon">
    <a href="#"><img src="images/icons/google.png" alt="icon"></a>
    </div>
    <div class="starrating">
    <ul>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    <li> <a href="javascript:void(0)" class="checked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row mt60 v-center">
    <div class="col-lg-4">
    <h4>Read More Review on</h4>
    <p class="mt15">Read our client's testimonials all around the web. We deliver quality service that loves everyone.</p>
    </div>
    <div class="col-lg-8">
    <div class="review-links mt30">
    <a href="#" class="wow fadeIn" data-wow-delay=".2s"><img src="images/clients/trustplot.svg" alt="#"> </a>
    <a href="#" class="wow fadeIn" data-wow-delay=".4s"><img src="images/clients/clutchreview.svg" alt="#"> </a>
    <a href="#" class="wow fadeIn" data-wow-delay=".6s"><img src="images/clients/appstore.svg" alt="#"> </a>
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

