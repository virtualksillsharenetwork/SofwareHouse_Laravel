@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
   {{--  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}"> -->-- --}}

@endpush
@section('content')


<div class="offcanvas offcanvas-end sidebar-offcanvas" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-header">
    <div class="sidebarlogooff">
    <img src="images/technopert-nobg.png" alt="logo" class="sidewhitelogo">
    <img src="images/technopert-nobg.png" alt="logo" class="sidedarklogo">
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
    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="5e362c1e27312b2c293b3c2d372a3b703d3133">[email&#160;protected]</span></a>
    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="d5bcbbb3ba95acbaa0a7a2b0b7a6bca1b0fbb6bab8">[email&#160;protected]</span></a>
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


    <section class="breadcrum-area innerheadbg text-white" data-background="images/common/head-bg-3.jpg">
    <div id="particles-js"></div>
    <div class="container index-up">
    <div class="row justify-content-between">
    <div class="col-lg-6">
    <div class="breadcrum-area-content">
    <ul class="list-h-styled mb30">
    <li><a href="index.html">Home</a></li>
    <li class="active">Portfolio</li>
    </ul>
    <h2 class="mb15">Some of Our Best Work That We Are Proud of</h2>
    <p>Expertise helps Blueket tackle the world's most difficult challenges. Blueket provides digital products for worldwide brands on the web.</p>
    </div>
    </div>
    <div class="col-lg-5 flex-end mmt30 text-white">
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
    <div class="row mt20">
    <div class="col-lg-12">
    <div class="filters filter-button-group">
    <ul>
    <li class="active" data-filter="*">All</li>
    <li data-filter=".webdesign">Web Design</li>
    <li data-filter=".appdevelop">App Development</li>
    <li data-filter=".brand">Brand Identity</li>
    <li data-filter=".graphic">Graphic Design</li>
    </ul>
    </div>
    </div>
    </div>
    <div class="row mt20 content grid blueketworktile cardaclr">
    <div class="col-xl-4 col-md-6 mt30 grid-item brand">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-1.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Investment App</h3>
    <p class="mt5">Flutter App Development</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item brand">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-2.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Fashion App</h3>
    <p class="mt5">React App Development</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item appdevelop">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-3.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Tour & Travels App</h3>
    <p class="mt5">Android App</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item appdevelop">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-4.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Interior Design</h3>
    <p class="mt5">UI/UX Design</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item appdevelop">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-5.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Fashion App</h3>
    <p class="mt5">React App Development</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item webdesign">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-6.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>yoga Wellness</h3>
    <p class="mt5">Wordpress Development</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item appdevelop">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-7.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Fashion Store</h3>
    <p class="mt5">iOs Development</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item appdevelop webdesign">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-8.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Furniture Store</h3>
    <p class="mt5">Wordpress Development</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item brand">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-9.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Logo Design</h3>
    <p class="mt5">Graphic & Branding</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item brand graphic">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-10.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Mockup Design</h3>
    <p class="mt5">Graphic Design</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item brand">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-11.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Logo Design</h3>
    <p class="mt5">Graphic & Branding</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30  grid-item brand webdesign">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-12.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Responsive Mockup</h3>
    <p class="mt5">Wordpress Development</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item brand">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-13.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Corporate Branding</h3>
    <p class="mt5">Graphic Design</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 brand grid-item">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-14.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Corporate Branding</h3>
    <p class="mt5">Graphic Design</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item graphic">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-15.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Flyer Design</h3>
    <p class="mt5">Graphic Design</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item webdesign">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-16.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Finance website</h3>
    <p class="mt5">PHP Development</p>
    </div>
    </div>
    </div>
    </a>
    </div>
    <div class="col-xl-4 col-md-6 mt30 grid-item graphic">
    <a href="#.">
    <div class="portfolidiv">
    <div class="portfolioimg roundimg">
    <img src="images/portfolio/portfolio-17.jpg" alt="portflio">
    <div class="viewportfolititem animation"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
    </div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Web Banner Design</h3>
    <p class="mt5">Graphic Design</p>
    </div>
    </div>
    </div>
    </a>
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

