@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
   {{--  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}"> -->-- --}}

@endpush
@section('content')
 
<section class="breadcrum-area innerheadbg text-white" data-background="images/common/head-bg-3.jpg">
    <div id="particles-js"></div>
    <div class="container index-up">
    <div class="row justify-content-between">
    <div class="col-lg-6">
    <div class="breadcrum-area-content">
    <ul class="list-h-styled mb30">
    <li><a href="index.html">Home</a></li>
    <li class="active">Service</li>
    </ul>
    <h2 class="mb15">Top-notch Solutions</h2>
    <p>We are a multi-award-winning digital consulting and engineering firm that provides end-to-end software solutions to enterprises.</p>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space linebg">
    <div class="container">
    <div class="row justify-content-between">
    <div class="col-xl-6 col-lg-6">
    <div class="paragraph-block">
    <h3>Trusted Mobile Application Development Company</h3>
    <p>As a trusted mobile application development company, we strive to deliver exceptional solutions that meet the evolving needs of our clients. With our expertise in the field and a commitment to quality, we ensure that our mobile applications are crafted to perfection. Our team of skilled professionals utilizes the latest technologies and follows industry best practices to create innovative and user-friendly mobile experiences.</p>
    </div>
    <ul class="progress-line mt30">
    <li> <p>Photoshop</p> <div class="progressbar line-bar orange" data-value="90"></div></li>
    <li> <p>Figma</p> <div class="progressbar line-bar blue" data-value="70"></div></li>
    <li> <p>Illustrator</p> <div class="progressbar line-bar yellow" data-value="95"></div></li>
    </ul>
    </div>
    <div class="col-xl-6 col-lg-6 mmt40">
    <div class="roundimg"><img src="images/service/ios-app.png" alt="img"></div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space bkbg2 darkbg2">
        <div class="container">
        <div class="row">
        <div class="col-lg-10">
        <span class="scriptheading dashbefore mb15">Our Service</span>
        <h2>Our Mobile App Development Services</h2>
        </div>
        </div>
        <div class="row mt30">
        <div class="col-lg-4 col-sm-6 mt30">
        <div class="sw-card swbdr">
        <div class="cardicon"><img src="images/icons/android.svg" alt="icon"></div>
        <h4>Android App Development</h4>
        <p>Our expert team specializes in Android app development, delivering innovative solutions for businesses in Pakistan and beyond. Trust us to bring your app ideas to life and create exceptional mobile experiences.</p>
        <div class="techusedin-sw">
        <span>Android Studio</span>
        <span>XML</span>
        <span>JAVA</span>
        </div>
        </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30">
        <div class="sw-card swbdr">
        <div class="cardicon"><img src="images/icons/ios.png" alt="icon"></div>
        <h4>IOS App Development</h4>
        <p>Our skilled team of developers will work closely with you to create engaging and user-friendly iOS applications that stand out in the market. Trust TechnoPert for top-notch iOS app development and take your business to new heights.</p>
        <div class="techusedin-sw">
        <span>React JS</span>
        <span>Swift</span>

        </div>
        </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30">
        <div class="sw-card swbdr">
        <div class="cardicon"><img src="images/icons/react-native.png" alt="icon"></div>
        <h4>Hybrid App</h4>
        <p>For efficient cross-platform app development, choose TechnoPert. Our team of skilled developers specializes in React Native, enabling us to create high-performance hybrid apps for both iOS and Android platforms.</p>
        <div class="techusedin-sw">
        <span>React JS</span>
        </div>
        </div>
        </div>

        <div class="col-lg-4 col-sm-6 mt30">
        <div class="sw-card swbdr">
        <div class="cardicon"><img src="images/icons/shop.png" alt="icon"></div>
        <h4>eCommerce app Development</h4>
        <p>Elevate your online business with TechnoPert's eCommerce app development services. Our expert team specializes in creating high-quality, feature-rich apps that enhance the shopping experience for your customers.</p>
        <div class="techusedin-sw">
        <span>React JS</span>
        <span>Angular JS</span>
        <span>Vue JS</span>
        </div>
        </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt30">
        <div class="sw-card swbdr">
        <div class="cardicon"><img src="images/icons/cloud-data.png" alt="icon"></div>
        <h4>Cloud Solution</h4>
        <p>Harness the power of the cloud for your mobile app with TechnoPert's cloud solutions. Our team will seamlessly integrate cloud services into your mobile app, allowing for scalable storage, enhanced security, and real-time data synchronization.</p>
        <div class="techusedin-sw">
        <span>AWS</span>
        <span>Firebase</span>
        <span>Docker</span>
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
    <div class="roundimg"><img src="images/service/mobile-ui.png" alt="img"></div>
    </div>
    <div class="col-xl-5 col-lg-5 mt30 m-order2">
    <div class="paragraph-block">
    <h3>Cross-plaform app Service</h3>
    <p>With our expertise in mobile app development, we deliver tailor-made solutions that cater to your unique business needs. Our team's deep understanding of the latest technologies and industry trends ensures that we provide cutting-edge web applications that drive growth and enhance user experiences.</p>

    <ul class="bulletpoints mt30">
        <li>IOS & Android Development, User-Centric Design, Cross-Platform Compatibility</li>
        <li>Native App Development, Hybrid App Development, App Testing & Quality Assurance</li>
        <li> App Maintenance & Support, App Store Optimization, Seamless User Experience</li>

    </ul>
    <a href="/contact-us" class="sw-btn sw-blue-btn mt30">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
    </div>
    </div>
    </div>
    <div class="row justify-content-between v-center mt100">
    <div class="col-xl-5 col-lg-5 mt30 m-order2">
    <div class="paragraph-block">
    <h3>Single OS Mobile App Service</h3>
    <p>Our highly skilled mobile app developers will work on transforming your app idea into an innovative and secure mobile application.</p>
    <p>Our mobile app development service combines creativity, innovation, and technical expertise to deliver high-quality mobile applications. From concept to launch, our team works closely with you to understand your vision and develop custom solutions that engage users and achieve your business objectives. </p>
    <ul class="bulletpoints mt30">

        <li>IOS or Android, Proferssional UI Design, App Testing & Quality Assurance</li>
        <li> Maintenance & Support, Play Store Optimization,Enhanced User Experience</li>

        </ul>
    <a href="/contact-us" class="sw-btn sw-blue-btn mt30">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 mt30 m-order1">
    <div class="roundimg"><img src="images/service/groceryapp.png" alt="img"></div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space bkbg2 bg--1">
    <div class="container">
    <div class="row v-center">
    <div class="col-lg-6">
    <img src="images/common/our-team.svg" alt="ourteam">
    </div>
    <div class="col-lg-6 mmt40">
    <span class="scriptheading dashbefore mb15">Why TechnoPert?</span>
    <h3>Why should you choose us?</h3>
    <div class="medialist mt40">
    <div class="mediablock">
    <div class="icondiv"><img src="images/icons/thumbs-up.png" alt="icon"></div>
    <div class="mediainfoblock">
    <h5 class="mb10">Assured services </h5>
    <p>TechnoPert is a company that specialises in risk management and general safety. We will bring value to your business farm while also ensuring.</p>
    </div>
    </div>
    <div class="mediablock mt30">
    <div class="icondiv"><img src="images/icons/budget.png" alt="icon"></div>
    <div class="mediainfoblock">
    <h5 class="mb10">Cost-effective Solution</h5>
    <p>If you think to have a better outcome with low cost then TechnoPert is the one. We are offering the best technology solution at an affordable price.</p>
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


    <section class="section-space bg--2">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="cta-design-block-sw v-center fcdsw p-0 m-0">
    <div class="cta-info-div-bkt whitebg">
    <h3 class="mb15">Want to Hire Resources to Work With You?</h3>
    <p>Web design, Web App Development, App development for Android & iOS and Desktop app and software development for MAC, Linux and Windows. We have over 5 years of experience in helping companies.</p>
    <a href="/contact-us" class="sw-btn sw-blue-btn mt30">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
    </div>
    <div class="cta-img-div-bkt"><img src="images/service/ecommerce-s.svg" alt="img"></div>
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
