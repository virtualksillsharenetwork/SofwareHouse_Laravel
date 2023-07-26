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
    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="1d756f5d6472686f6a787f6e746978337e7270">[email&#160;protected]</span></a>
    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="7e171018113e07110b0c091b1c0d170a1b501d1113">[email&#160;protected]</span></a>
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


<section class="breadcrum-area contactuspage bg-efffect-2">
    <div class="container index-up">
    <div class="row v-center justify-content-between">
    <div class="col-lg-6">
    <div class="breadcrum-area-content">
    <ul class="list-h-styled mb30">
    <li><a href="index.html">Home</a></li>
    <li class="active">Service</li>
    </ul>
    <h2 class="mb15">Desktop Software Development</h2>
    <p>If you have questions, need support, or anything else, please fill the form below. We are here to help you.</p>
    <a href="/contact-us" class="sw-btn sw-blue-btn mt30">Hire a Desktop Developer</a>
    </div>
    </div>
    <div class="col-lg-5">
    <div class="imginheader roundimg"><img src="images/service/desktop-ui.png" alt="img"></div>
    </div>
    </div>
    </div>
    </section>

    <section class="industry-work section-space bg-efffect-1 bkbg2">
    <div class="container index-up">
    <div class="row">
    <div class="col-lg-10">
    <span class="scriptheading dashbefore mb15">We Work In</span>
    <h2 class="text-gradient-1">Our Industry Wise Solution</h2>
    </div>
    </div>
    <div class="row justify-content-between mt30">
    <div class="col-lg-3 mt30">
    <div class="sw-tabs-links stickyposition-sw">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
    <button class="nav-link active" id="sw1-tab" data-bs-toggle="tab" data-bs-target="#sw1" type="button" role="tab" aria-controls="sw1" aria-selected="true"><i class="fa-solid fa-cart-shopping"></i> Retails Industry</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="sw2-tab" data-bs-toggle="tab" data-bs-target="#sw2" type="button" role="tab" aria-controls="sw2" aria-selected="false"><i class="fa-solid fa-stethoscope"></i> Health Care</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="sw3-tab" data-bs-toggle="tab" data-bs-target="#sw3" type="button" role="tab" aria-controls="sw3" aria-selected="false"><i class="fa-solid fa-dumbbell"></i> Fitness</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="sw4-tab" data-bs-toggle="tab" data-bs-target="#sw4" type="button" role="tab" aria-controls="sw4" aria-selected="false"><i class="fa-solid fa-pizza-slice"></i> Food Delivery</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="sw5-tab" data-bs-toggle="tab" data-bs-target="#sw5" type="button" role="tab" aria-controls="sw5" aria-selected="false"><i class="fa-solid fa-house-chimney"></i> Real Estate</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="sw6-tab" data-bs-toggle="tab" data-bs-target="#sw6" type="button" role="tab" aria-controls="sw6" aria-selected="false"><i class="fa-solid fa-users"></i> Social Networking</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="sw7-tab" data-bs-toggle="tab" data-bs-target="#sw7" type="button" role="tab" aria-controls="sw7" aria-selected="false"><i class="fa-solid fa-graduation-cap"></i> Education</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="sw8-tab" data-bs-toggle="tab" data-bs-target="#sw8" type="button" role="tab" aria-controls="sw8" aria-selected="false"><i class="fa-solid fa-guitar"></i> Entertainment</button>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-lg-8 mt30">
    <div class="sw-tabs-data">
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="sw1" role="tabpanel" aria-labelledby="sw1-tab">
    <div class="sw-work-data">
    <div class="work-title-block">
    <h3 class="mb15">Retails Industry</h3>
    <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
    <div class="servicetags mt30">
    <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
    <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
    <a href="#" class="btgs dotinswbdr">Properties Listing</a>
    <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
    <a href="#" class="btgs dotinswbdr">Content Marketing</a>
    <a href="#" class="btgs dotinswbdr">Website Optimization</a>
    </div>
    </div>
    <div class="sw-work-preview mt45">
    <div class="sw-left-slot"><img src="images/portfolio/retail-1.jpg" alt="work" class="w-100 roundimg"></div>
    <div class="sw-right-slot"><img src="images/portfolio/retail-2.jpg" alt="work" class="w-100 roundimg"> <img src="images/portfolio/retail-3.jpg" alt="work" class="w-100 roundimg"></div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="sw2" role="tabpanel" aria-labelledby="sw2-tab">
    <div class="sw-work-data">
    <div class="work-title-block">
    <h3 class="mb15">Health Care</h3>
    <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
    <div class="servicetags mt30">
    <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
    <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
    <a href="#" class="btgs dotinswbdr">Properties Listing</a>
    <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
    <a href="#" class="btgs dotinswbdr">Content Marketing</a>
    <a href="#" class="btgs dotinswbdr">Website Optimization</a>
    </div>
    </div>
    <div class="sw-work-preview mt45">
    <div class="sw-left-slot"><img src="images/portfolio/healthCare-1.jpg" alt="work" class="w-100 roundimg"></div>
    <div class="sw-right-slot"><img src="images/portfolio/healthCare-2.jpg" alt="work" class="w-100 roundimg"> <img src="images/portfolio/healthCare-3.jpg" alt="work" class="w-100 roundimg"></div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="sw3" role="tabpanel" aria-labelledby="sw3-tab">
    <div class="sw-work-data">
    <div class="work-title-block">
    <h3 class="mb15">Fitness</h3>
    <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
    <div class="servicetags mt30">
    <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
    <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
    <a href="#" class="btgs dotinswbdr">Properties Listing</a>
    <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
    <a href="#" class="btgs dotinswbdr">Content Marketing</a>
    <a href="#" class="btgs dotinswbdr">Website Optimization</a>
    </div>
    </div>
    <div class="sw-work-preview mt45">
    <div class="sw-left-slot"><img src="images/portfolio/fitness-1.jpg" alt="work" class="w-100 roundimg"></div>
    <div class="sw-right-slot"><img src="images/portfolio/fitness-2.jpg" alt="work" class="w-100 roundimg"> <img src="images/portfolio/fitness-3.jpg" alt="work" class="w-100 roundimg"></div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="sw4" role="tabpanel" aria-labelledby="sw4-tab">
    <div class="sw-work-data">
    <div class="work-title-block">
    <h3 class="mb15">Food Delivery</h3>
    <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
    <div class="servicetags mt30">
    <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
    <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
    <a href="#" class="btgs dotinswbdr">Properties Listing</a>
    <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
    <a href="#" class="btgs dotinswbdr">Content Marketing</a>
    <a href="#" class="btgs dotinswbdr">Website Optimization</a>
    </div>
    </div>
    <div class="sw-work-preview mt45">
    <div class="sw-left-slot"><img src="images/portfolio/food-delivery-1.jpg" alt="work" class="w-100 roundimg"></div>
    <div class="sw-right-slot"><img src="images/portfolio/food-delivery-2.jpg" alt="work" class="w-100 roundimg"> <img src="images/portfolio/food-delivery-3.jpg" alt="work" class="w-100 roundimg"></div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="sw5" role="tabpanel" aria-labelledby="sw5-tab">
    <div class="sw-work-data">
    <div class="work-title-block">
    <h3 class="mb15">Real Estate</h3>
    <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
    <div class="servicetags mt30">
    <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
    <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
    <a href="#" class="btgs dotinswbdr">Properties Listing</a>
    <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
    <a href="#" class="btgs dotinswbdr">Content Marketing</a>
    <a href="#" class="btgs dotinswbdr">Website Optimization</a>
    </div>
    </div>
    <div class="sw-work-preview mt45">
    <div class="sw-left-slot"><img src="images/portfolio/realestate-1.jpg" alt="work" class="w-100 roundimg"></div>
    <div class="sw-right-slot"><img src="images/portfolio/realestate-2.jpg" alt="work" class="w-100 roundimg"> <img src="images/portfolio/realestate-3.jpg" alt="work" class="w-100 roundimg"></div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="sw6" role="tabpanel" aria-labelledby="sw6-tab">
    <div class="sw-work-data">
    <div class="work-title-block">
    <h3 class="mb15">Social Networking</h3>
    <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
    <div class="servicetags mt30">
    <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
    <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
    <a href="#" class="btgs dotinswbdr">Properties Listing</a>
    <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
    <a href="#" class="btgs dotinswbdr">Content Marketing</a>
    <a href="#" class="btgs dotinswbdr">Website Optimization</a>
    </div>
    </div>
    <div class="sw-work-preview mt45">
    <div class="sw-left-slot"><img src="images/portfolio/socialnetworking-1.jpg" alt="work" class="w-100 roundimg"></div>
    <div class="sw-right-slot"><img src="images/portfolio/retail-3.jpg" alt="work" class="w-100 roundimg"> <img src="images/portfolio/socialnetworking-2.jpg" alt="work" class="w-100 roundimg"></div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="sw7" role="tabpanel" aria-labelledby="sw7-tab">
    <div class="sw-work-data">
    <div class="work-title-block">
    <h3 class="mb15">Education</h3>
    <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
    <div class="servicetags mt30">
    <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
    <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
    <a href="#" class="btgs dotinswbdr">Properties Listing</a>
    <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
    <a href="#" class="btgs dotinswbdr">Content Marketing</a>
    <a href="#" class="btgs dotinswbdr">Website Optimization</a>
    </div>
    </div>
    <div class="sw-work-preview mt45">
    <div class="sw-left-slot"><img src="images/portfolio/education-1.jpg" alt="work" class="w-100 roundimg"></div>
    <div class="sw-right-slot"><img src="images/portfolio/education-2.jpg" alt="work" class="w-100 roundimg"> <img src="images/portfolio/education-3.jpg" alt="work" class="w-100 roundimg"></div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="sw8" role="tabpanel" aria-labelledby="sw8-tab">
    <div class="sw-work-data">
    <div class="work-title-block">
    <h3 class="mb15">Entertainment</h3>
    <p>A smart workflow remains at the center of any excellent experience. With a powerful digital solution, you can accelerate your digital transformation to match the particular demands of your industry.</p>
    <div class="servicetags mt30">
    <a href="#" class="btgs dotinswbdr">Customers Assistance</a>
    <a href="#" class="btgs dotinswbdr">Admin Dashboard</a>
    <a href="#" class="btgs dotinswbdr">Properties Listing</a>
    <a href="#" class="btgs dotinswbdr">Photo Editor Software</a>
    <a href="#" class="btgs dotinswbdr">Content Marketing</a>
    <a href="#" class="btgs dotinswbdr">Website Optimization</a>
    </div>
    </div>
    <div class="sw-work-preview mt45">
    <div class="sw-left-slot"><img src="images/portfolio/entertainment-1.jpg" alt="work" class="w-100 roundimg"></div>
    <div class="sw-right-slot"><img src="images/portfolio/entertainment-2.jpg" alt="work" class="w-100 roundimg"> <img src="images/portfolio/entertainment-3.jpg" alt="work" class="w-100 roundimg"></div>
    </div>
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
