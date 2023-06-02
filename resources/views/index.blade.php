@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
   {{--  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}"> -->-- --}}
    <style>
    .sticky .lightlogo{display: none;} .darklogo{display: none;} .sticky .darklogo{display: block;}
            .homedemoview{background: #fff;    border: 1px solid #E9E9E9;    padding: 26px;    border-radius: 8px;}
            .nameofitem{display: flex;    grid-gap: 15px;    justify-content: space-between;    margin-top: 30px;    flex-direction: row;    align-items: center;}
            .list-h-demo{display: flex; grid-gap: 20px;}
            .list-h-demo li{position: relative;}
            .list-h-demo li::after {  content: "|";    position: absolute;    top: 50%;    right: -14px;    -webkit-transform: translateY(-50%);    -ms-transform: translateY(-50%);    transform: translateY(-50%);}
            .list-h-demo li:last-child::after { display: none;}
            .title{background: var(--black-bg-3);    padding: 10px 20px;    border-radius: 8px;    margin-bottom: 20px;    display: inline-block;}
        </style>
@endpush
@section('content')

    <section class="demo-7-hero text-white">
    <div class="herodiv">
    <video autoplay muted loop id="myVideo" poster="images/object/worlds.jpg">
    <source src="{{ asset('images/object/worlds.mp4') }}" type="video/mp4">
    </video>
    </div>
    <div class="container-fluid index-up">
    <div class="row justify-content-center">
    <div class="col-lg-5">
    <div class="hero-content">
    <h1 class="mb20 wow fadeInUp" data-wow-delay=".8s"> Design Products<br> Deliver Experience </h1>
    <p class="wow fadeInUp" data-wow-delay="1.2s">A full-service digital marketing firm that specialises in human-centered experiences.</p>
    <a href="contact-1.html" class="sw-btn sw-blue-btn wow fadeInUp mt40" data-wow-delay="1.4s">Get a quote <i class="fa-solid fa-arrow-trend-up"></i></a>
    <div class="hero-iconsets wow fadeInUp" data-wow-delay="1.6s">
    <a href="#"><img src="{{ asset('images/icons/goodfirm-1.svg') }}" alt="img"></a>
    <a href="#"><img src="{{ asset('images/icons/clutch-1.svg') }}" alt="img"></a>
    <a href="#"><img src="{{ asset('images/icons/google-1.svg') }}" alt="img"></a>
    </div>
    </div>
    </div>
    <div class="col-lg-7 mmt40">
    <div class="hero-rght-sw wow fadeInUp" data-wow-delay="1.8s">
    <div class="video-button"> <a href="https://www.youtube.com/watch?v=Aty3TV4Yn4I" class="video-play"> <span class="play-btn"> <i class="fa fa-play"></i> </span> </a> </div>
    <h3>We Design Digital Solutions <span>For Brands, Companies & Startups  </span> to help businesses digitally transform.</h3>
    </div>
    <div class="cardsevc service--cards owl-carousel wow fadeInUp" data-wow-delay="2.5s">
    <div class="service-card-div service-slide">
    <a href="#">
    <div class="service-images"><img src="{{ asset('images/object/Other-07.png') }}" alt="#"></div>
    <div class="service-name">Web <br> Design </div>
    <div class="circleffect">
    <div class="animation">&nbsp;</div>
    </div>
    </a>
    </div>
    <div class="service-card-div service-slide">
    <a href="#">
    <div class="service-images"><img src="{{ asset('images/object/Other-04.png') }}" alt="#"></div>
    <div class="service-name">App <br> Development </div>
    <div class="circleffect">
    <div class="animation">&nbsp;</div>
    </div>
    </a>
    </div>
    <div class="service-card-div service-slide">
    <a href="#">
    <div class="service-images"><img src="{{ asset('images/object/Other-20.png') }}" alt="#"></div>
    <div class="service-name">Graphic <br> Design </div>
    <div class="circleffect">
    <div class="animation">&nbsp;</div>
    </div>
    </a>
    </div>
    <div class="service-card-div service-slide">
    <a href="#">
    <div class="service-images"><img src="{{ asset('images/object/Other-11.png') }}" alt="#"></div>
    <div class="service-name">Web Application <br> Development </div>
    <div class="circleffect">
    <div class="animation">&nbsp;</div>
    </div>
    </a>
    </div>
    <div class="service-card-div service-slide">
    <a href="#">
    <div class="service-images"><img src="{{ asset('images/object/Other-16.png') }}" alt="#"></div>
    <div class="service-name">Ecommerce <br> Development </div>
    <div class="circleffect">
    <div class="animation">&nbsp;</div>
    </div>
    </a>
    </div>
    <div class="service-card-div service-slide">
    <a href="#">
    <div class="service-images"><img src="{{ asset('images/object/Other-13.png') }}" alt="#"></div>
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


    <section class="aboutblock section-space">
    <div class="container">
    <div class="row justify-content-between">
    <div class="col-lg-6">
    <div class="about-conent paragraph">
    <span class="scriptheading dashbefore mb15 wow fadeIn" data-wow-delay=".2s" data-wow-duration="1500ms">WHO WE ARE</span>
    <h2 class="mb20 wow fadeIn" data-wow-delay=".4s" data-wow-duration="1500ms">The Best Experts of IT & Development Domain For Your Project</h2>
    <p class="wow fadeIn" data-wow-delay=".6s" data-wow-duration="1500ms">Rapid innovation is an essential feature of digital information technology. TechnoPert understands the importance of remaining current through frequent self-reinvention. We accomplish this by continually attracting the brightest minds in modern digital paradigms and platforms.</p>
    <p class="wow fadeIn" data-wow-delay=".8s" data-wow-duration="1500ms">By maintaining a roster of skilled technology professionals across every business function, TechnoPert distinguishes itself by offering its client organizations a single touchpoint to address all of their enterprise technology needs.</p>
    <a href="contact-1.html" class="sw-btn sw-blue-btn mt30">Read More</a>
    </div>
    </div>
    <div class="col-lg-5 mmt40">
    <div class="row blockcntr swpt1">
    <div class="counter-numbers  demo2counter col-lg-6 col-md-12">
    <div class="counter-setdiv shadow wow fadeIn" data-wow-delay=".1s">
    <img src="{{ asset('images/icons/rocket.gif') }}" alt="img">
    <p> <span data-count-to="08" class="odometer"></span>+</p>
    <span class="countertag">Years Experience</span>
    </div>
    <div class="counter-setdiv shadow wow fadeIn" data-wow-delay=".7s">
    <img src="{{ asset('images/icons/laptop.gif') }}" alt="img">
    <p><span data-count-to="500" class="odometer"></span>+</p>
    <span class="countertag">Projects Delivered</span>
    </div>
    </div>
    <div class="counter-numbers  demo2counter col-lg-6 col-md-12 seccnt">
    <div class="counter-setdiv shadow wow fadeIn" data-wow-delay=".4s">
    <img src="{{ asset('images/icons/user.gif') }}" alt="img">
    <p><span data-count-to="80" class="odometer"></span>+</p>
    <span class="countertag">Talented Team</span>
    </div>
    <div class="counter-setdiv shadow wow fadeIn" data-wow-delay="1s">
    <img src="{{ asset('images/icons/earth.gif') }}" alt="img">
    <p><span data-count-to="50" class="odometer"></span>+</p>
    <span class="countertag">Countries Served</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space bkbg3">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-7 col-lg-8 text-center">
    <h2 class="text-gradient-1 mb15 wow fadeIn" data-wow-delay=".2s">Services We Provide</h2>
    <p class="wow fadeIn" data-wow-delay=".4s">TechnoPert overcomes challenges, achieves results, and adds value to our clients and partners. Take a look at some of our clients' success stories.</p>
    </div>
    </div>
    <div class="row mt30 dm4">
    <div class="col-lg-3 col-sm-6 mt30 wow fadeIn" data-wow-delay=".1s">
    <div class="sw-card white-bg shadow">
    <img src="{{ asset('images/icons/app.png') }}" alt="icon" class="innercardiocn">
    <h3 class="swbttitlex">App<br> Development</h3>
    <p>Unleash your app's potential with our extraordinary development expertise.</p>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 mt30 wow fadeIn" data-wow-delay=".4s">
    <div class="sw-card white-bg shadow">
    <img src="{{ asset('images/icons/ux-design.png') }}" alt="icon" class="innercardiocn">
    <h3 class="swbttitlex">Web<br> Development</h3>
    <p>Unleash your app's potential with our extraordinary development expertise.</p>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s">
    <div class="sw-card white-bg shadow">
    <img src="{{ asset('images/icons/content.png') }}" alt="icon" class="innercardiocn">
    <h3 class="swbttitlex">Content<br> Marketing</h3>
    <p>Ignite your brand's growth with our exceptional content marketing strategies.</p>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.2s">
    <div class="sw-card white-bg shadow">
    <img src="{{ asset('images/icons/online-shop.png') }}" alt="icon" class="innercardiocn">
    <h3 class="swbttitlex">eCommerce<br> Development</h3>
    <p>Elevate your online business with our exceptional e-commerce development solutions.</p>
    </div>
    </div>
    </div>
    <div class="row index-up wow fadeIn" data-wow-delay=".8s">
    <div class="col-lg-12">
    <div class="tech-slider mt100">
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


    <section class="word-block-div section-space">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <h2 class="text-gradient-1 wow fadeInUp" data-wow-delay=".4s">Latest Projects</h2>
    <a href="portfolio.html" class="inline-btn mt20 wow fadeInUp" data-wow-delay=".8s">View all Projects <i class="fa-solid fa-arrow-trend-up"></i></a>
    </div>
    <div class="col-lg-6 mmt30">
    <p class=" wow fadeInUp" data-wow-delay="1.2s">TechnoPert overcomes challenges, achieves results, and adds value to our clients and partners. Take a look at some of our clients' success stories. Take a look at some of our clients' success stories.</p>
    </div>
    </div>
    </div>
    <div class="container-fluid mt60">
    <div class="row  wow fadeInUp" data-wow-delay="1.4s">
    <div class="col-lg-12">
    <div class="work-slide owl-carousel full-button centerbtns">
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-1.jpg') }}" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Kyntra: Online Shopping</h3>
    <p class="mt5">Flutter Development</p>
    </div>
    </div>
    </div>
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-2.jpg') }}" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Bradley's Bakery</h3>
    <p class="mt5">Web Design</p>
    </div>
    </div>
    </div>
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-3.jpg') }}" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Tango Fashion Store</h3>
    <p class="mt5">App Development</p>
    </div>
    </div>
    </div>
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-4.jpg') }}" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Ruppay Investment</h3>
    <p class="mt5">iOs Development</p>
    </div>
    </div>
    </div>
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-5.jpg') }}" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Kiya NFT Market</h3>
    <p class="mt5">Web Development</p>
    </div>
    </div>
    </div>
    <div class="our-works">
    <div class="work-imags"><a href="#"><img src="{{ asset('images/portfolio/work-3.jpg') }}" alt="work" class="card-img-round"></a></div>
    <div class="infoblocis">
    <div class="nameofitem">
    <h3>Tango Fashion Store</h3>
    <p class="mt5">App Development</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space">
    <div class="container index-up">
    <div class="row justify-content-between">
    <div class="col-lg-4">
    <div class="roundimg"><img src="{{ asset('images/common/attractive-laughing-freelancer.jpg') }}" alt="img" class="w-100"></div>
    </div>
    <div class="col-lg-7 mmt40">
    <h3 class="text-gradient-1 mb15 wow fadeIn" data-wow-delay=".2s">Elevate Your Business. Unlock Growth Potential</h3>
    <p class="wow fadeIn" data-wow-delay=".6s">At TechnoPert, we specialize in transforming businesses and driving success. With our innovative solutions and expert guidance, we empower organizations to thrive in the digital landscape. Partner with us and witness the positive impact we can make on your business.</p>
    <p class="wow fadeIn" data-wow-delay=".8s">TechnoPert overcomes challenges, achieves results, and adds value to our clients and partners. Take a look at some of our clients' success stories. Take a look at some of our clients' success stories.</p>
    <h5 class="mt30 wow fadeIn" data-wow-delay=".9s">Why Choose TechnoPert?</h5>
    <ul class="bulletpoints mt30  wow fadeInUp" data-wow-delay="1s">
    <li>Proven track record. Tailored solutions. Unmatched expertise. Cutting-edge technologies. Results-driven approach.</li>
    <li>Client-centric approach. Innovation-powered solutions. Exceeding expectations. Inspiring growth.</li>
    <li>Strategic thinking. Exceptional outcomes. Collaborative partnerships. Enduring success.</li>
    </ul>
    </div>
    </div>
    </div>

    <div class="cta-block-sw-bkt ctacnttr">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="cta-design-block-sw gradient-1 v-center">
    <div class="cta-info-div-bkt">
    <h3 class="mb15">Let's Create an Amazing Project Together!</h3>
    <p>Web design app development for Android & iOS. We have over 5 years of experience in helping companies.</p>
    <a href="#" class="sw-btn sw-white-btn mt30">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
    </div>
    <div class="cta-img-div-bkt"><img src="{{ asset('images/common/app-mockup-2.svg') }}" alt="img"></div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="container index-up">
    <div class="row justify-content-between">
    <div class="col-lg-6">
    <h3 class="text-gradient-1 mb15 wow fadeIn" data-wow-delay=".2s">Get An Exclusively Brewed Digital Solution For Your Business</h3>
    <p class="wow fadeIn" data-wow-delay=".6s">At TechnoPert, we believe in delivering digital solutions that are meticulously crafted for your business. We understand that every organization has unique goals, challenges, and requirements. That's why we offer exclusively brewed digital solutions tailored to your specific needs. Our team of experts will work closely with you to understand your business inside out and design a customized strategy that aligns perfectly with your objectives.</p>
    <a href="#" class="sw-btn sw-blue-btn mt30 wow fadeInUp" data-wow-delay="1s">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
    <div class="medianumbers mt40">
    <div class="mediablock wow fadeInUp" data-wow-delay=".8s">
    <div class="ex---">
    <div class="progressbar circle-bar orange" data-value="100"></div>
    </div>
    <div class="stats-break"></div>
    <p>Delighting customers through unparalleled satisfaction is our driving force.</p>
    </div>
    <div class="mediablock mt30 wow fadeInUp" data-wow-delay="1s">
    <div class="ex---">
    <div class="progressbar circle-bar blue" data-value="100"></div>
    </div>
    <div class="stats-break"></div>
    <p>Our services exemplify extraordinary prowess, fueled by unwavering dedication and relentless pursuit of perfection.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 position-relative mmt40">
    <div class="roundimg wow fadeIn" data-wow-delay="1.2s"><img src="{{ asset('images/common/company.jpg') }}" alt="img" class="w-100"></div>
    <div class="img-overthe-card wow fadeIn" data-wow-delay="1.6s">
    <h4>Excellent Executive</h4>
    <p>TechnoPert</p>
    <div class="card-v-light"></div>
    <div class="mediablock mt30">
    <div class="user-image wh"><img src="{{ asset('images/team/mabidm.jpg') }}" alt="review"></div>
    <div class="user-content">
    <h5>Muhammad Abid Maqbool</h5>
    <p>CEO at TechnoPert</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="industry-work section-space bg-efffect-1 bkbg3 pb300">
    <div class="container index-up">
    <div class="row">
    <div class="col-lg-10">
    <span class="scriptheading dashbefore mb15">We Work In</span>
    <h2 class="text-gradient-1">Our Industry Wise Solution</h2>
    </div>
    </div>
    <div class="row justify-content-between">
    <div class="col-lg-12">
    <div class="cate-with-img-main">
    <div class="roundiconwithdata wow fadeIn" data-wow-delay=".1s">
    <div class="imgimg"><img src="{{ asset('images/icons/house.svg') }}" alt="img"> </div>
    <p>Real Estate</p>
    </div>
    <div class="roundiconwithdata wow fadeIn" data-wow-delay=".4s">
    <div class="imgimg"><img src="{{ asset('images/icons/travel-luggage.svg') }}" alt="img"> </div>
    <p>Tour & Travels</p>
    </div>
    <div class="roundiconwithdata wow fadeIn" data-wow-delay=".7s">
    <div class="imgimg"><img src="{{ asset('images/icons/magistrate.svg') }}" alt="img"> </div>
    <p>Education</p>
    </div>
    <div class="roundiconwithdata wow fadeIn" data-wow-delay="1s">
    <div class="imgimg"><img src="{{ asset('images/icons/car.svg') }}" alt="img"> </div>
    <p>Transport</p>
    </div>
    <div class="roundiconwithdata wow fadeIn" data-wow-delay="1.3s">
    <div class="imgimg"><img src="{{ asset('images/icons/calendar.svg') }}" alt="img"> </div>
    <p>Event</p>
    </div>
    <div class="roundiconwithdata wow fadeIn" data-wow-delay="1.6s">
    <div class="imgimg"><img src="{{ asset('images/icons/online-shop.svg') }}" alt="img"> </div>
    <p>eCommerce</p>
    </div>
    <div class="roundiconwithdata wow fadeIn" data-wow-delay="1.9s">
    <div class="imgimg"><img src="{{ asset('images/icons/game-controller.svg') }}" alt="img"> </div>
    <p>Game</p>
    </div>
    <div class="roundiconwithdata wow fadeIn" data-wow-delay="2.2s">
    <div class="imgimg"><img src="{{ asset('images/icons/healthcare.svg') }}" alt="img"> </div>
    <p>Healthcare</p>
    </div>
    <div class="roundiconwithdata wow fadeIn" data-wow-delay="2.5s">
    <div class="imgimg"><img src="{{ asset('images/icons/piggy-bank.svg') }}" alt="img"> </div>
    <p>Finance</p>
    </div>
    <div class="roundiconwithdata wow fadeIn" data-wow-delay="2.8s">
    <div class="imgimg"><img src="{{ asset('images/icons/restaurant.svg') }}" alt="img"> </div>
    <p>Restaurant</p>
    </div>
    <div class="roundiconwithdata wow fadeIn" data-wow-delay="3.1s">
    <div class="imgimg"><img src="{{ asset('images/icons/layers.svg') }}" alt="img"> </div>
    <p>On-Demand</p>
    </div>
    <div class="roundiconwithdata wow fadeIn" data-wow-delay="3.4s">
    <div class="imgimg"><img src="{{ asset('images/icons/grocery-bag.svg') }}" alt="img"> </div>
    <p>Grocery</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="office-interior imageoutofbox pb100">
    <div class="container">
    <div class="row">
    <div class="col-lg-9">
    <div class="imageoutbox">
    <img src="{{ asset('images/common/office-building.jpg') }}" alt="office" class="card-img-round  wow fadeIn" data-wow-delay=".2s">
    </div>
    </div>
    </div>
    <div class="row mt60 mmt40">
    <div class="col-lg-6">
    <div class="title-heading wow fadeIn" data-wow-delay=".4s">
    <h2>Trusted Web Design Company Since 2008</h2>
    </div>
    </div>
    <div class="col-lg-6 mmt30">
    <div class="title-paragraph wow fadeIn" data-wow-delay=".6s">
    <p>We are a Web development company. we provide web design, app development, digital marketing services.
    As you can imagine, the market is evolving with every new platform and feature added to an website. The number of developers jumping into this field has grown over time which means more users need responsive websites in order for them not only stand out from other ones but also have fast response times when visitors click on your site.
    </p>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="clients-section section-space bg--1">
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
    <div class="TechnoPert-card-noise card-img-round pt30">
    <div class="review-img-block">
    <div class="user-image"><img src="{{ asset('images/common/user-image.jpg') }}" alt="review"></div>
    <div class="user-content">
    <h5>Karan Kumar</h5>
    <p>CTO @ Amber Fund</p>
    </div>
    </div>
    <div class="review-content mt30 mb30">
    <p>TechnoPert's expertise in SEO and digital marketing exceeded my expectations. Their strategic approach and attention to detail boosted my website's visibility, organic traffic, and search engine rankings. With improved user experience and higher conversions, TechnoPert made a remarkable impact on my business. I highly recommend their services for online growth and success.</p>
    </div>
    <div class="review-footer pair-block">
    <div class="image-icon">
    <a href="#"><img src="{{ asset('images/icons/google.png') }}" alt="icon"></a>
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
    <div class="TechnoPert-card-noise card-img-round pt30">
    <div class="review-img-block">
    <div class="user-image"><img src="{{ asset('images/common/user-image-2.jpg') }}" alt="review"></div>
    <div class="user-content">
    <h5>Mike Smith</h5>
    <p>Business Man</p>
    </div>
    </div>
    <div class="review-content mt30 mb30">
    <p>I had an exceptional experience with TechnoPert's e-commerce web development services. Their skilled team created a robust and user-friendly online store, paying meticulous attention to detail. The visually appealing platform and seamless shopping experience resulted in a significant boost in my online business. I highly recommend TechnoPert for top-notch e-commerce web development.</p>
    </div>
    <div class="review-footer pair-block">
    <div class="image-icon">
    <a href="#"><img src="{{ asset('images/icons/google.png') }}" alt="icon"></a>
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
    <div class="TechnoPert-card-noise card-img-round pt30">
    <div class="review-img-block">
    <div class="user-image"><img src="{{ asset('images/common/user-image-3.jpg') }}" alt="review"></div>
    <div class="user-content">
    <h5>Riya Smily</h5>
    <p>CEO @ Tema Security</p>
    </div>
    </div>
    <div class="review-content mt30 mb30">
    <p>TechnoPert and their exceptional team have been a pleasure to work with. Their passionate professionals showcased expertise, attention to detail, and excellent communication throughout our project. Their collaborative approach, commitment to excellence, and timely delivery exceeded our expectations. I highly recommend TechnoPert for top-notch software development services.</p>
    </div>
    <div class="review-footer pair-block">
    <div class="image-icon">
    <a href="#"><img src="{{ asset('images/icons/google.png') }}" alt="icon"></a>
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
    <div class="TechnoPert-card-noise card-img-round pt30">
    <div class="review-img-block">
    <div class="user-image"><img src="{{ asset('images/common/user-image-4.jpg') }}" alt="review"></div>
    <div class="user-content">
    <h5>Oliver Kanjorva</h5>
    <p>Business Man</p>
    </div>
    </div>
    <div class="review-content mt30 mb30">
    <p>I'm highly satisfied with TechnoPert's desktop and mobile app development services. Their expertise in creating applications for multiple platforms was outstanding. They delivered high-quality solutions tailored to my requirements, ensuring seamless functionality. Their commitment to customer satisfaction is commendable. I highly recommend TechnoPert for efficient and reliable app development.</p>
    </div>
    <div class="review-footer pair-block">
    <div class="image-icon">
    <a href="#"><img src="{{ asset('images/icons/google.png') }}" alt="icon"></a>
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
    <a href="#" class="wow fadeIn" data-wow-delay=".2s"><img src="{{ asset('images/clients/trustplot.svg') }}" alt="#"> </a>
    <a href="#" class="wow fadeIn" data-wow-delay=".4s"><img src="{{ asset('images/clients/clutchreview.svg') }}" alt="#"> </a>
    <a href="#" class="wow fadeIn" data-wow-delay=".6s"><img src="{{ asset('images/clients/appstore.svg') }}" alt="#"> </a>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="contactblock section-space bkbg3 bg--2">
        <div class="container">
        <div class="row justify-content-between v-center">
        <div class="col-lg-5">
        <div class="contactinfodivv">
        <div class="con-block-sw-div">
        <h2 class="mb10">Let's get in touch</h2>
        <p>We will catch you as early as we receive the message</p>
        <div class="contactinfodivsw mt30">
        <div class="contactnumberdiv">
        <p class="mb5 linktitle">We're Available 24/7. Call Now.</p>
        <a href="#"><i class="fa-solid fa-tty mr10"></i> 91 123 4567 890</a>
        <a href="#"><i class="fa-brands fa-whatsapp mr10"></i> 91 123 4567 890</a>
        </div>
        <div class="contactnumberdiv mt30">
        <p class="mb5 linktitle">Send Us an Email:</p>
        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="127a60526b7d6760657770617b66773c717d7f">[email&#160;protected]</span></a>
        <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="4f262129200f36203a3d382a2d3c263b2a612c2022">[email&#160;protected]</span></a>
        </div>
        <div class="contactnumberdiv mt30">
        <p class="mb5 linktitle">Chat on Skype:</p>
        <a href="#"><i class="fa-solid fa-envelope mr10"></i>Blueket:live</a>
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
        <div class="col-lg-7 mmt40 pad-left-70">
        <div class="contact-form-card-pr contact-block-sw iconin">
        <h4>Have Question? Write a Message</h4>
        <div class="form-block blueketform mt40">
        <form action="#" id="contactform" method="post">
        <div class="fieldsets row">
        <div class="col-md-6 form-group floating-label">
        <div class="formicon"><i class="fa-solid fa-user"></i></div>
        <input type="text" placeholder=" " required="required" id="name" class="floating-input" name="fullname">
        <label>Full Name*</label>
        <div class="error-label"></div>
        </div>
        <div class="col-md-6 form-group floating-label">
        <div class="formicon"><i class="fa-solid fa-phone"></i></div>
        <input type="tel" placeholder=" " required="required" id="mobile_number" class="floating-input" name="mobile_number">
        <label>Mobile Number*</label>
        <div class="error-label"></div>
        </div>
        </div>
        <div class="fieldsets row">
        <div class="col-md-6 form-group floating-label">
        <div class="formicon"><i class="fa-solid fa-envelope"></i></div>
        <input type="email" placeholder=" " required="required" id="email" class="floating-input" name="email">
        <label>Email Address*</label>
        <div class="error-label"></div>
        </div>
        <div class="col-md-6 form-group floating-label">
        <div class="formicon"><i class="fa-solid fa-rectangle-list"></i></div>
        <select required="required" id="interested_in" class="floating-select" name="interested_in">
        <option value>&nbsp;</option>
        <option value="Graphic Design">Graphic Design</option>
        <option value="Web Design">Web Design</option>
        <option value="App Design">App Design</option>
        <option value="Other">Other</option>
        </select>
        <label>Interested In*</label>
        <div class="error-label"></div>
        </div>
        </div>
        <div class="fieldsets row">
        <div class="col-md-12 form-group floating-label">
        <div class="formicon"><i class="fa-solid fa-message"></i></div>
        <textarea placeholder=" " required="required" id="description" class="floating-input" name="description"></textarea>
        <label>Brief about the project*</label>
        <div class="error-label"></div>
        </div>
        </div>
        <div class="custom-control custom-checkbox customcheck">
        <input type="checkbox" class="custom-control-input ctminpt" id="agree" name="agree" checked="checked">
        <label class="custom-control-label ctmlabl" for="agree">By clicking the “Submit” button you agree to our <a href="javascript:void(0)">Terms &amp; Conditions</a>.</label>
        </div>
        <div class="fieldsets mt20"> <button type="submit" name="submit" class="porkai-btn"><span>Submit</span> <span class="loader"></span></button> </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>

    <footer class="footer-design-sw pt80 pb30 text-white swdarkfooter">
    <div class="container index-up">
    <div class="row justify-content-between">
    <div class="col-lg-4">
    <div class="footer-brand-info">
    <div class="footer-logo-sw">
    <a href="#"><img src="{{ asset('images/technopert-nobg.png') }}" alt="logo" class="light"></a>
    <a href="#"><img src="{{ asset('images/technopert-nobg.png') }}" alt="logo" class="dark"></a>
    </div>

    <div class="ft-address-blocks mt60">
    <div class="subsc-div-sw">
    <h5>Subscribe to Our Newsletter and Get the Latest Insights.</h5>
    <div class="TechnoPertsubscriptionbox mt30">
    <form>
    <div class="form-inputs subsform">
    <input type="tel" class="form-controls" placeholder="Enter Your Email">
    <button type="submit" class="sw-orange-btn"><i class="fa-solid fa-paper-plane"></i></button>
    </div>
    </form>
    </div>
    </div>
    </div>


    <div class="social-link-sw mt40">
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
    <div class="col-lg-6">
    <div class="row mt40 sw-hover-1">
    <div class="col-lg-4 col-md-6 col-6 mt30">
    <div class="footer-links">
    <h5 class="linktitle">Company Links</h5>
    <ul class="mt20">
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">Careers</a></li>
    <li><a href="#">Our Team</a></li>
    <li><a href="#">Media Coverage</a></li>
    <li><a href="#">Referral Program</a></li>
    <li><a href="#">Case Studies</a></li>
    <li><a href="#">Client Testimonials</a></li>
    </ul>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-6 mt30">
    <div class="footer-links">
    <h5 class="linktitle">Technologies</h5>
    <ul class="mt20">
    <li><a href="#">React JS</a></li>
    <li><a href="#">Laravel</a></li>
    <li><a href="#">CodeIgniter</a></li>
    <li><a href="#">Node JS</a></li>
    <li><a href="#">WordPress</a></li>
    <li><a href="#">Magento</a></li>
    <li><a href="#">ReactJS</a></li>
    <li><a href="#">KnockoutJs</a></li>
    </ul>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-6 mt30">
    <div class="footer-links">
    <h5 class="linktitle">Our Services</h5>
    <ul class="mt20">
    <li><a href="#">Web Application</a></li>
    <li><a href="#">Mobile App Development</a></li>
    <li><a href="#">Microsoft Development</a></li>
    <li><a href="#">Front End Development</a></li>
    <li><a href="#">eCommerce Development</a></li>
    <li><a href="#">Cross-platform App</a></li>
    <li><a href="#">Opensource Development</a></li>
    <li><a href="#">UI/UX Design</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="footerbreak swhr">
    <div class="award-badge-block mt50">
    <a href="#"><img src="{{ asset('images/icons/award-badge-1.png') }}" alt="icon"></a>
    <a href="#"><img src="{{ asset('images/icons/award-badge-2.png') }}" alt="icon"></a>
    <a href="#"><img src="{{ asset('images/icons/award-badge-3.png') }}" alt="icon"></a>
    <a href="#"><img src="{{ asset('images/icons/award-badge-5.png') }}" alt="icon"></a>
    <a href="#"><img src="{{ asset('images/icons/award-badge-6.png') }}" alt="icon"></a>
    <a href="#"><img src="{{ asset('images/icons/award-badge-7.png') }}" alt="icon"></a>
    </div>
    </div>
    <div class="footercreditandrevielinks swhr pt20 mt60">
        <div class="row">
        <div class="col-lg-12">
        <div class="footercreditnote sw-hover-1">
        <div>
        <p>© 2023 All Rights Reserved By <a href="#"> TechnoPert</a></p>
        </div>
        <div class="linkftsw">
        <ul class="list-h-styled">
        <li><a href="#">Sitemap</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Privacy Policy</a></li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>


    </div>
    </footer>

    {{-- <!-- @include('admin.transactions.components.addCost')-- --}}
    {{-- @include('admin.transactions.components.editCost') -->-- --}}
@endsection
@push('js')
    {{-- <!-- @include('admin.components.datatableScript') -->-- --}}
    <script>

    </script>

   {{--  <!-- @include('admin.transactions.components.addItemsScript') -->-- --}}
@endpush

