@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
   {{--  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}"> -->-- --}}

@endpush
@section('content')
 
<section class="breadcrum-area bgimg" data-background="images/service/service-banner-1.jpg">
    <div class="container index-up">
    <div class="row v-center justify-content-between">
    <div class="col-lg-6">
    <div class="breadcrum-area-content crdbkt">
    <div class="bradecrumborderdesign-sw">
    <span class="vtextonborder">Web Design & Development</span>
    <h1>Creative Web Design Service</h1>
    <p>Our creative web development firm has been creating apps that are specifically adapted to our clients' needs.</p>
    <a href="/contact-us" class="sw-btn sw-orange-btn mt30">Hire a Web Developer</a>
    </div>
    <ul class="list-h-styled mt10">
    <li><a href="index.html">Home</a></li>
    <li><a href="index.html">Service</a></li>
    <li class="active">Web Development</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space">
    <div class="container">
    <div class="row justify-content-between v-center">
    <div class="col-lg-6">
    <div class="paragraph-block">
    <span class="scriptheading dashbefore mb15">Overview</span>
    <h2>Web Design Agency</h2>
    <h5><em>We specialize in the design and development of high-quality web applications that are tailored to help you reach new heights in your business.</em></h5>
    <p>Our proficient team of web application developers is dedicated to transforming your ideas into cutting-edge and secure web solutions. With a deep understanding of the latest technologies and industry trends, we deliver tailor-made web applications that cater to your unique business needs. Custom Web Development, Responsive Design, E-commerce Solutions
        CMS Development, Web Applications, API Integration, Performance Optimization
        Admin Panel Development, Content Management Systems, User Management
        Maintenance & Support, SEO & Digital Marketing, UI/UX Design</p>
    <p>Custom Web Development, Responsive Design, E-commerce Solutions
        CMS Development, Web Applications, API Integration, Performance Optimization
        Admin Panel Development, Content Management Systems, User Management
        Maintenance & Support, SEO & Digital Marketing, UI/UX Design.Partner with us for exceptional web application development that leverages the latest technologies, ensures optimal performance, and amplifies your online presence.</p>
    </div>
    </div>
    <div class="col-lg-5">
    <div class="img-collage-set row mmt40">
    <div class="blueketshape1 shapesw shapecontrol-4"></div>
    <div class="col-6 index-up">
    <div class="imgcover roundimg"> <img src="images/portfolio/website--1.jpg" alt="img"></div>
    </div>
    <div class="col-6 index-up">
    <div class="imgcover roundimg"> <img src="images/portfolio/website--2.jpg" alt="img"></div>
    </div>
    <div class="blueketshape2 shapesw shapecontrol-3"></div>
    </div>
    </div>
    </div>
    <div class="row mt60">
    <div class="col-lg-12">
    <div class="counter-numbers row-blocks fourcounter mt-0 mb-0">
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
    </section>



    <section class="section-space">
        <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-xl-6 col-lg-6">
        <div class="paragraph-block">
        <h2>Our Populor Services</h2>
        <p>Our highly skilled web app developers will work on transforming your app idea into an innovative and secure web application.</p>
        </div>
        </div>
        </div>
        <div class="row justify-content-between mt30 v-center">
        <div class="col-xl-6 col-lg-6 mt30 m-order1">
        <div class="roundimg"><img src="images/service/mockup-web.jpg" alt="img"></div>
        </div>
        <div class="col-xl-5 col-lg-5 mt30 m-order2">
        <div class="paragraph-block">
        <h3>Web Design Service</h3>
        <p>With our expertise in web app development, we deliver tailor-made solutions that cater to your unique business needs. Our team's deep understanding of the latest technologies and industry trends ensures that we provide cutting-edge web applications that drive growth and enhance user experiences.</p>

        <ul class="bulletpoints mt30">
        <li>Custom Web Development, Responsive Design, E-commerce Solutions</li>
        <li> CMS Development, Web Applications, API Integration, Performance Optimization</li>
        <li>  Maintenance & Support, SEO & Digital Marketing, UI/UX Design</li>

        </ul>
        <a href="/contact-us" class="sw-btn sw-blue-btn mt30">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
        </div>
        </div>
        </div>
        <div class="row justify-content-between v-center mt100">
        <div class="col-xl-5 col-lg-5 mt30 m-order2">
        <div class="paragraph-block">
        <h3>Web Application Service</h3>
        <p>Our highly skilled web app developers will work on transforming your app idea into an innovative and secure web application.</p>
        <p>Our web app development service combines creativity, innovation, and technical expertise to deliver high-quality web applications. From concept to launch, our team works closely with you to understand your vision and develop custom solutions that engage users and achieve your business objectives. </p>
        <ul class="bulletpoints mt30">
            <li>Responsive Web Design, User-Centric Interface, Cross-Browser Compatibility</li>
            <li>Custom Web Development, CMS Development, Web app Testing & Quality Assurance</li>
            <li>Website Maintenance & Support, SEO & Digital Marketing, Engaging User Experience</li>

            </ul>
        <a href="/contact-us" class="sw-btn sw-blue-btn mt30">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
        </div>
        </div>
        <div class="col-xl-6 col-lg-6 mt30 m-order1">
        <div class="roundimg"><img src="images/service/banner-design.jpg" alt="img"></div>
        </div>
        </div>
        </div>
        </section>


    <section class="section-space">
    <div class="container">
    <div class="row justify-content-between v-center">
    <div class="col-lg-6">
    <div class="img-collage-set row ">
    <div class="blueketshape1 shapesw shapecontrol-1"></div>
    <div class="col-4 ">
    <div class="imgcover roundimg"> <img src="images/common/developer.jpg" alt="img" class="w-100"></div>
    </div>
    <div class="col-6  flex-end">
    <div class="imgcover roundimg"> <img src="images/common/developer-2.jpg" alt="img"></div>
    </div>
    <div class="col-6  offset-md-1 mt30">
    <div class="imgcover roundimg"> <img src="images/common/compute-1.jpg" alt="img"></div>
    </div>
    <div class="col-4 align-self-start mt30">
    <div class="imgcover roundimg"> <img src="images/common/computer.jpg" alt="img" class="w-100"></div>
    </div>
    <div class="blueketshape2 shapesw shapecontrol-2"></div>
    </div>
    </div>
    <div class="col-lg-6 mmt40">
    <span class="scriptheading dashbefore mb15">Hire Us</span>
    <h4>Why Hire The TechnoPert As Your Web App Development Company?</h4>
    <div class="medialist mt40">
    <div class="mediablock">
    <div class="icondiv"><img src="images/icons/experience.png" alt="icon"></div>
    <div class="mediainfoblock">
    <h5 class="mb10">Experienced & Skilled Resources </h5>
    <p>TechnoPert is a company that specialises in risk management and general safety. We will bring value to your business farm while also ensuring.</p>
    </div>
    </div>
    <div class="mediablock mt30">
    <div class="icondiv"><img src="images/icons/on-time.png" alt="icon"></div>
    <div class="mediainfoblock">
    <h5 class="mb10">Cost-effective & On-time Delivery</h5>
    <p>If you think to have a better outcome with low cost then TechnoPert is the one. We are offering the best technology solution at an affordable price.</p>
    </div>
    </div>
    <div class="mediablock mt30">
    <div class="icondiv"><img src="images/icons/investment.png" alt="icon"></div>
    <div class="mediainfoblock">
    <h5 class="mb10">Flexible Pricing & Working Models</h5>
    <p>We always ensure that our task is handed over within the given time. Our main priority is customers gratification.</p>
    </div>
    </div>
    <div class="mediablock mt30">
    <div class="icondiv"><img src="images/icons/online-learning.png" alt="icon"></div>
    <div class="mediainfoblock">
    <h5 class="mb10">No Expenses on Training & Retaining</h5>
    <p>We always ensure that our task is handed over within the given time. Our main priority is customers gratification.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="tech-block bkbg0  section-space position-relative overflow-hidden">
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
    <div class="slider-icon"> <img src="images/icons/tech-icons/android.svg" alt="Android"> </div>
    <div class="slider-icon-text">
    <p>Android </p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/aws.svg" alt="aws"> </div>
    <div class="slider-icon-text">
    <p>aws</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/figma.svg" alt="figma"> </div>
    <div class="slider-icon-text">
    <p>figma</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/firebase.svg" alt="firebase"> </div>
    <div class="slider-icon-text">
    <p>firebase</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/flutter.svg" alt="flutter"> </div>
    <div class="slider-icon-text">
    <p>flutter</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/Google-cloud.svg" alt="Google-cloud"> </div>
    <div class="slider-icon-text">
    <p>Google-cloud</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/java.svg" alt="java">
    </div>
    <div class="slider-icon-text">
    <p>Java</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/Kotlin.svg" alt="Kotlin"> </div>
    <div class="slider-icon-text">
    <p>Kotlin</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/magento.svg" alt="magento"> </div>
    <div class="slider-icon-text">
    <p>magento</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/Node.js.svg" alt="Node.js">
    </div>
    <div class="slider-icon-text">
    <p>Node.js</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/python.svg" alt="python">
    </div>
    <div class="slider-icon-text">
    <p>python</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/react.svg" alt="react">
    </div>
    <div class="slider-icon-text">
    <p>react</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/sketch.svg" alt="sketch">
    </div>
    <div class="slider-icon-text">
    <p>sketch</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/sqlite.svg" alt="sqlite">
    </div>
    <div class="slider-icon-text">
    <p>sqlite</p>
    </div>
    </div>
    <div class="icon-slider-block">
    <div class="slider-icon"> <img src="images/icons/tech-icons/swift.svg" alt="swift">
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


    <section class="industry-work section-space bg-efffect-1">
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


    <section class="pricing-block section-space bkbg3 black-bg-1">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-10 text-center">
    <span class="scriptheading mb15">Our Pricing Plan</span>
    <h2 class="text-gradient-1">Choose a Plan That Works For You</h2>
    </div>
    </div>
    <div class="row mt60">
    <div class="col-lg-12">
    <div class="pricing-table-with-cta">

    <div class="pricing-table">
    <div class="pricing-column gradient-1 tblfirst">
        <div class="recomnd-block-sw">
            <div>MOST POPULAR</div>
            </div>
    <div class="p-head-sw">
    <h3>Hire a Developer</h3>
    <p>We'll schedule a kickoff call to introduce you to your new developer and set you up for success! </p>
    <h2 class="pricemain"><sup>$</sup><span>25 </span>/hour</h2>
    </div>
    <div class="p-btn-cta-sw">
    <div class="blueketbtn"><a href="/contact-us" class="sw-btn sw-white-btn">Hire Now <i class="fa-solid fa-right-long"></i></a></div>
    <a href="/contact-us" class="inline-btn txt-white mt15">Book a meeting <i class="fa-solid fa-square-phone-flip"></i></a>
    </div>
    <div class="what-in-plan-sw">
    <h5>What's included:</h5>
    <ul class="mt15">
    <li>Unlimited requests</li>
    <li>Unlimited revisions</li>
    <li>Dedicated Developer</li>
    <li>Full-time Availability</li>
    <li>Project Discussion</li>
    <li>Native source files included</li>
     </ul>
    </div>
    </div>
    <div class="pricing-column gradient-2">

    <div class="p-head-sw">
    <h3>Discuss Project</h3>
    <p>Based on your needs, we'll match you with the best-fitting developer in our network.</p>
    <h2 class="pricemain"><sup>N/A</sup><span></span></h2>
    </div>
    <div class="p-btn-cta-sw">
    <div class="blueketbtn"><a href="/contact-us" class="sw-btn sw-white-btn">Get Quote<i class="fa-solid fa-right-long"></i></a></div>
    <a href="/contact-us" class="inline-btn txt-white mt15">Book a Meeting <i class="fa-solid fa-square-phone-flip"></i></a>
    </div>
    <div class="what-in-plan-sw">
    <h5>What's included:</h5>
    <ul class="mt15">
    <li>Unlimited revisions</li>
    <li>Unlimited brands</li>
    <li>Unlimited team members</li>
    <li>Free stock photos</li>
    <li>Native source files included</li>
    <li>Priority support</li>
    <li>Advanced Solutions</li>
    </ul>
    </div>
    </div>
    <div class="pricing-column gradient-3 tblend">
    <div class="p-head-sw">
    <h3>Get Product</h3>
    <p>Get one of our ready-made products visit our products page to find out more about products</p>
    <h2 class="pricemain"><sup>N/A</sup><span> </span> </h2>
    </div>
    <div class="p-btn-cta-sw">
    <div class="blueketbtn"><a href="/projects-all" class="sw-btn sw-white-btn">Buy Now <i class="fa-solid fa-right-long"></i></a></div>
    <a href="tel:+923006916670" class="inline-btn txt-white mt15">Call for demo <i class="fa-solid fa-square-phone-flip"></i></a>
    </div>
    <div class="what-in-plan-sw">
    <h5>What's included:</h5>
    <ul class="mt15">
    <li>Customizations</li>
    <li>Documentation</li>
    <li>Dedicated support </li>
    <li>Training resources</li>
    <li>Regular updates </li>
    <li>Integration guidance</li>
    <li>Flexible licensing</li>
    </ul>
    </div>
    </div>
    </div>

    <div class="customersupportsecion">
    <div class="customersupportblock">
    <div class="block-asw"><img src="images/common/customer-support.svg" alt="img"></div>
    <h5 class="mb15 mt20">Request a Call Back</h5>
    <p>Read more about how TechnoPert works and how it can help you.</p>
    </div>
    <div class="conactinfoblock mt60">
    <h5>Have Questions?</h5>
    <div class="mediablock mt30">
    <div class="icondiv"><img src="images/icons/whatsapp-chat.png" alt="icon"></div>
    <div class="mediainfoblock">
    <p class="linktitle">Connect on WhatsApp</p>
    <a href="tel:+923069513612" class="contactlink">+92 306 9513612</a>
    </div>
    </div>
    <div class="mediablock mt30">
    <div class="icondiv"><img src="images/icons/chat.png" alt="icon"></div>
    <div class="mediainfoblock">
    <p class="linktitle">Begin a Quick Discussion</p>
    <a href="tel:+923069513612" class="contactlink">Live Chat With Us</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space white-bg darkbg2">
    <div class="container">
    <div class="row v-center justify-content-between">
    <div class="col-lg-5">
    <img src="images/common/doubt.svg" alt="img">
    </div>
    <div class="col-lg-6 mmt40">
    <span class="scriptheading dashbefore mb15">Have a Doubt?</span>
    <h3>Frequently Asked Question</h3>
    <div class="faq-sw1 mt30">
    <div class="accordion" id="accordionExample">

    <div class="accordion-item">
    <h2 class="accordion-header" id="heading1">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-sw-1" aria-expanded="true" aria-controls="faq-sw-1">
        What services does TechnoPert provide?
    </button>
    </h2>
    <div id="faq-sw-1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        TechnoPert provides a wide range of services including web application development, mobile app development, digital marketing, UI/UX design, and software consulting.
    </div>
    </div>
    </div>

    <div class="accordion-item">
    <h2 class="accordion-header" id="heading2">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-sw-2" aria-expanded="false" aria-controls="faq-sw-2">
        How experienced is the team at TechnoPert?
    </button>
    </h2>
    <div id="faq-sw-2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        The team at TechnoPert has extensive experience in their respective fields, with expertise in various technologies and industries. Our professionals are highly skilled and dedicated to delivering top-notch solutions.
    </div>
    </div>
    </div>

    <div class="accordion-item">
    <h2 class="accordion-header" id="heading3">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-sw-3" aria-expanded="false" aria-controls="faq-sw-3">
    What is the difference between custom and ready-to-use software?
    </button>
    </h2>
    <div id="faq-sw-3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        Custom software is tailored specifically to meet the unique needs and requirements of a business or organization. It is built from scratch and offers personalized functionalities and features. On the other hand, ready-to-use software is pre-built and available off-the-shelf, catering to common business needs. While custom software offers flexibility and scalability, ready-to-use software provides quick deployment and cost-effectiveness. The choice depends on the specific goals and resources of the business. At TechnoPert, we offer both options to ensure the best fit for our clients' needs.
    </div>
    </div>
    </div>

    <div class="accordion-item">
    <h2 class="accordion-header" id="heading4">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-sw-4" aria-expanded="false" aria-controls="faq-sw-4">
        Can TechnoPert handle projects of different sizes and complexities?
    </button>
    </h2>
    <div id="faq-sw-4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        Yes, TechnoPert has the capability to handle projects of various sizes and complexities. Whether you require a simple website or a complex enterprise-level application, our team has the expertise and resources to deliver outstanding results.
    </div>
    </div>
    </div>

    <div class="accordion-item">
    <h2 class="accordion-header" id="heading5">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-sw-5" aria-expanded="false" aria-controls="faq-sw-5">
        How does TechnoPert ensure the security of client projects?
    </button>
    </h2>
    <div id="faq-sw-5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
    <div class="accordion-body">
        At TechnoPert, we prioritize the security of our clients' projects. We follow industry best practices and implement robust security measures to safeguard sensitive information and maintain data confidentiality.
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
