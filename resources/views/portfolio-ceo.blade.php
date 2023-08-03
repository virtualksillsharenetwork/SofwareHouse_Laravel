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
 
<section class="demo-8-hero">
    <div class="container">
    <div class="row justify-content-between">
    <div class="col-lg-4 index-up">
    <div class="hero-content text-clips">
    <h1 class="mb20 wow fadeInUp" data-wow-delay=".2s">M. Abid Maqbool</h1>
    <div class="social-link-sw mt40 wow fadeInUp" data-wow-delay=".4s">
    <span class="linktitle wow fadeInUp" data-wow-delay=".6s">Follow Me</span>
    <ul class="footer-social-sw mt10 sw-hover-2 wow fadeInUp" data-wow-delay=".8s">
    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
    <li> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
    <li> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-4 mmt40">
    <div class="hero-content-2 index-up">
    <span class="scriptheading dashbefore mb15 wow fadeIn" data-wow-delay=".2s">Introduction</span>
    <h3 class="mb20 wow fadeInUp" data-wow-delay=".4s">Web Application Developer, Operational Manager & TechoPert CEO</h3>
    <p class="wow fadeInUp" data-wow-delay=".6s">Crafting digital experiences that captivate users, a master of code who transforms ideas into functional web applications.

        Orchestrating seamless operations, a visionary leader who optimizes processes, empowers teams, and drives success.
        Guiding innovation and growth, a visionary trailblazer leading TechnoPert to new heights with strategic acumen and unwavering passion.</p>
    <a href="tel:+923006916670" class="sw-btn sw-blue-btn mt60 wow fadeInUp" data-wow-delay=".8s">Discuss Your Project</a>
    </div>
    <div class="porttraiimg">
    <div class="portrait-img"><img src="images/team/mabidm-nobg.png" alt="img" style="top: 0 !important;margin-top:250px !important;"></div>
    <div class="portrait-bg"><img src="images/shape/shape-animate.svg" alt="img"></div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="bkbg3 section-space overbelowblck bg--2">
    <div class="container">
    <div class="row justify-content-between">
    <div class="col-lg-5">
    <div class="about-conent paragraph">
    <span class="scriptheading dashbefore mb15 wow fadeIn" data-wow-delay=".2s">Who I Am?</span>
    <h3 class="mb20 wow fadeIn" data-wow-delay=".4s">Read More About Me.</h3>
    <p class="wow fadeIn" data-wow-delay=".6s">A dynamic self-motivated professional with over four years experience Possess valuable transferable skills
        including outstanding communication skills and a very capable organizer with the ability of multi-tasking.
        Known for a contagious compassion for excellence, a talent for resourcefulness, motivational leadership
        Proficient in one-on-one and group instruction, self-directed with proven decision-making skills Quick to
        arden and make good use of new ideas and information and reliable conscientious in all he takes on.</p>
    <div class="contactinkediv mt40">
    <span class="linktitle">Send Us an Email:</span>
    <a href="mailto:abidmaqbool20@gmail.com"><span class="__cf_email__" data-cfemail="b2dbdcd4ddf2cbddc7c0c5d7d0c1dbc6d79cd1dddf">abidmaqbool20@gmail.com</span></a>
    </div>
    <div class="contactinkediv mt30">
    <span class="linktitle">Give Us a Call:</span>
    <a href="tel:+923121431660">92 312 143 1660</a>
    </div>
    </div>
    </div>
    <div class="col-lg-6 mmt40">
    <h4 class="singlequotes mb20 wow fadeIn" data-wow-delay=".4s">I strive for two things in design: simplicity and clarity. Great design is born of those two things.</h4>
    <p class="wow fadeIn" data-wow-delay=".6s">Blueket provides digital products for worldwide brands on the web, mobile, and linked platforms. Expertise helps Blueket tackle the world's most difficult challenges.</p>
    <div class="portfoliostatus personalstatt mt40 wow fadeIn" data-wow-delay=".8s">
    <div class="counter-numbers row-blocks">
    <div class="counter-setdiv">
    <p> <span data-count-to="500" class="odometer"></span>+</p>
    <span class="countertag">Projects Delivered</span>
    </div>
    <div class="counter-setdiv">
    <p><span data-count-to="200" class="odometer"></span>+</p>
    <span class="countertag">Happy Clients</span>
    </div>
    <div class="counter-setdiv">
    <p><span data-count-to="15" class="odometer"></span>+</p>
    <span class="countertag">Served Countries</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

<!-- 
    <section class="section-space bkbg3 bg--1">
    <div class="container">
    <div class="row justify-content-between">
    <div class="col-lg-5">
    <div class="position-stick">
    <span class="scriptheading dashbefore mb15 wow fadeIn" data-wow-delay=".2s">Experience</span>
    <h2 class="mb20 wow fadeIn" data-wow-delay=".4s">My Work Experience</h2>
    <p class="wow fadeIn" data-wow-delay=".6s">Expertise helps Blueket tackle the world's most difficult challenges. Blueket provides digital products for worldwide brands on the web, mobile, and linked platforms. Expertise helps Blueket tackle the world's most difficult challenges.</p>
    <div class="item-pair mt40 wow fadeIn" data-wow-delay="1s">
    <a href="tel:+923069513612" class="sw-btn sw-blue-btn">Get Started</a>
    {{--<div class="videobutton">
    <a class="video-play" href="https://www.youtube.com/watch?v=Aty3TV4Yn4I"><span class="button-play"></span></a>
    <span>Watch Video</span>
    </div>-- --}}
    </div>
    </div>
    </div>
    <div class="col-xl-6 mmt40">
    <div class="timeline-blcok wow fadeIn" data-wow-delay=".6s">
    <ul class="timeline">
    <li class="timeline-event">
    <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
    <p class="timeline-event-thumbnail">May 2018 – PRESENT</p>
    <h3>UI DEVELOPER</h3>
    <h4>UltraSoft Ltd, Jaipur, IN</h4>
    <p>Responsible for front-end of application and provided technical guidance and solutions, including development of flexible layouts for mobile, tablet and desktop devices.</p>
    </div>
    </li>
    <li class="timeline-event">
    <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
    <p class="timeline-event-thumbnail">June 2015 - May 2018</p>
    <h3>FRONT-END DEVELOPER</h3>
    <h4>Bluesoft Media, Jaipur, IN</h4>
    <p>Responsible for front-end of application and provided technical guidance and solutions, including development of flexible layouts for mobile, tablet and desktop devices.</p>
    </div>
    </li>
    <li class="timeline-event">
    <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
    <p class="timeline-event-thumbnail">Jan 2010 - Feb 2015</p>
    <h3>UI/UX Freelancer</h3>
    <h4>Misha Infotech, Jaipur, IN</h4>
    <p>Responsible for front-end of application and provided technical guidance and solutions, including development of flexible layouts for mobile, tablet and desktop devices.</p>
    </div>
    </li>
    <li class="timeline-event">
    <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
    <p class="timeline-event-thumbnail">Jan 2008 - Feb 2010</p>
    <h3>Freelancer</h3>
    <h4>Blueket Template, India</h4>
    <p>Responsible for front-end of application and provided technical guidance and solutions, including development of flexible layouts for mobile, tablet and desktop devices.</p>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section> -->



    <footer class="footer-design-sw pt80 pb30">
    <div class="container">

    <div class="followaccounts">
    <a class="mediablock wow fadeIn" data-wow-delay=".1s" href="#">
    <div class="icondiv"><img src="images/icons/linkedin.png" alt="icon"></div>
    <div class="mediainfoblock">
    <h5>Linkedin </h5>
    <p>Follow Me</p>
    </div>
    </a>

    <a class="mediablock wow fadeIn" data-wow-delay="1.6s" href="#">
    <div class="icondiv"><img src="images/icons/upwork.svg" alt="icon"></div>
    <div class="mediainfoblock">
    <h5>UpWork </h5>
    <p>Buy My Service</p>
    </div>
    </a>
    <a class="mediablock wow fadeIn" data-wow-delay="1.9s" href="#">
    <div class="icondiv"><img src="images/icons/fiverr-icon.svg" alt="icon"></div>
    <div class="mediainfoblock">
    <h5>Fiverr </h5>
    <p>Buy My Service</p>
    </div>
    </a>
    <a class="mediablock wow fadeIn" data-wow-delay="2.2s" href="#">
    <div class="icondiv"><img src="images/icons/freelancer.svg" alt="icon"></div>
    <div class="mediainfoblock">
    <h5>Freelancer </h5>
    <p>Buy My Service</p>
    </div>
    </a>
    </div>

    <div class="footercreditandrevielinks mt30 pt30">
    <div class="row">
    <div class="col-lg-12">
    <div class="footercreditnote">
    <a href="#"><img src="images/technopert-nobg.png" alt="logo" class="dark"></a>
    <div class="footerlink-sol">
    <div class="linkftsw sw-hover-1">
    <ul class="list-h-styled flnclnk">
    <li><a href="/">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Company Services</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="footercreditandrevielinks swhr pt20 mt30">
    <div class="row">
    <div class="col-lg-12">
    <div class="footercreditnote sw-hover-1">
    <div>
     <p>© 2023 All Rights Reserved By <a href="#"> TechnoPert</a></p>
    </div>
    <div class="linkftsw">
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
    </div>
    </footer>

    {{-- <!-- @include('admin.transactions.components.addCost')-- --}}
    {{-- @include('admin.transactions.components.editCost') -->-- --}}
@endsection
@push('js')
    {{-- <!-- @include('admin.components.datatableScript') -->-- --}}
    <script>
       window.addEventListener('load', (event) => {
                document.body.classList.add("darkmode");
                document.getElementById('blueket').checked = true;
                localStorage.setItem('darkModeStatus', 'true');
        });
    </script>

   {{--  <!-- @include('admin.transactions.components.addItemsScript') -->-- --}}
@endpush

