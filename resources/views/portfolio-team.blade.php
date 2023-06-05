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
    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="59312b1920362c2b2e3c3b2a302d3c773a3634">[email&#160;protected]</span></a>
    <a href="#"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="472e292128073e283235302225342e33226924282a">[email&#160;protected]</span></a>
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


    <section class="breadcrum-area big-breadcrum-area bg-efffect-2">
    <div class="container index-up">
    <div class="row justify-content-between">
    <div class="col-lg-6">
    <div class="breadcrum-area-content">
    <ul class="list-h-styled mb30">
    <li><a href="index.html">Home</a></li>
    <li class="active">Contact</li>
    </ul>
    <h2 class="mb15">About Us</h2>
    <p>As a highly acclaimed digital consulting and engineering firm, we specialize in delivering comprehensive software solutions to a diverse range of clients. From enterprises and independent software vendors to digital agencies and startups, our expertise spans across industries.</p>
    <p>

        Since our establishment in 2008, we have proudly served more than 6800 clients hailing from over 38 countries. Our renowned agile/DevOps development methodology, strategic approach driven by service-level agreements (SLAs), and unwavering commitment to timely project delivery have firmly established our reputation in the industry.</p>
        <p>

        At our core, we offer a wide array of solutions including web development, website design, web application development, desktop software development, mobile app development, digital marketing, and design services. Our comprehensive suite of offerings ensures that we can cater to diverse client needs and deliver exceptional results.</p>
    </div>
    </div>
    <div class="col-lg-5 flex-end">
    <div class="img-collage-set row centershape mmt30">
    <div class="col-6 flex-end">
    <div class="imgcover roundimg"><img src="images/common/office-1.jpg" alt="img"></div>
    </div>
    <div class="col-6 flex-end mmt30">
    <div class="imgcover roundimg"> <img src="images/common/office-talk.jpg" alt="img"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space">
    <div class="container">
    <div class="row justify-content-between">
    <div class="col-lg-5">
    <div class="text-conent paragraph">
    <h3>To bring inspiration and innovation to every business in the world.</h3>
    <img src="images/common/team.svg" alt="Mission" class="mt30">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="text-conent paragraph mmt30">
    <h5 class="scriptheading dashbefore">Mission</h5>
    <p class="mt20">We are a multi-award-winning digital consulting and engineering firm that provides end-to-end Online solutions to enterprises, independent firms.</p>
    <h4 class="mt20 mb20">We are a multi-award-winning digital consulting and engineering firm that provides end-to-end software solutions to enterprises, independent software vendors, digital agencies, and startups.</h4>
    <p>Expertise helps TechnoPert tackle the world's most difficult challenges. TechnoPert provides digital products for worldwide brands on the web.</p>
    </div>
    </div>
    </div>
    <div class="row immt100">
    <div class="col-lg-12">
    <div class="paralleximg roundimg"><img src="images/common/office-view.jpg" alt="office view"></div>
    </div>
    </div>
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
    <div class="row justify-content-between">
    <div class="col-lg-6">
    <div class="text-conent paragraph">
    <h5 class="scriptheading dashbefore">Vision</h5>
    <h4 class="mt20 mb20">We are a multi-award-winning digital consulting and engineering firm that provides end-to-end Online solutions to enterprises, independent firms.</h4>
    <p>We are a multi-award-winning digital consulting and engineering firm that provides end-to-end software solutions to enterprises, independent software vendors, digital agencies, and startups.</p>
    </div>
    <div class="quote-text dashedbdr animation mt60">
    Our Team is Our Biggest Asset, And We Like Challenging Ourselves.
    </div>
    </div>
    <div class="col-lg-5">
    <div class="text-conent paragraph mmt30">
    <h3>To bring inspiration and innovation to every business in the world.</h3>
    <img src="images/common/achievements.svg" alt="Mission" class="mt30">
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space bkbg3 darkbg2">
    <div class="container">
    <div class="row">
    <div class="col-lg-8">
    <h2 class="mb15">Meet The Team</h2>
    <p>Our staff is full of talented, bright, and outgoing individuals. We push each other to be the greatest and happiest versions of ourselves on a daily basis.</p>
    </div>
    </div>
    <div class="row v-center mt30 justify-content-between">
    <div class="col-lg-6 mt30 ">
    <div class="roundimg">
    <img src="images/team/mabidm.jpg" alt="professional" class="w-100">
    </div>
    </div>
    <div class="col-lg-5 mt30">
    <div class="text-conent paragraph">
    <h3>Muhammad Abid Maqbool</h3>
    <p class="mt10 mb20 scriptheading">Founder & Director of TechnoPert</p>
    <p>The Founder & Director of TechnoPert is a visionary leader and seasoned professional, driving the company's success with strategic insights and a passion for innovation. With a wealth of experience and expertise, they have guided TechnoPert to become a renowned name in the industry. Their exceptional leadership, dedication, and forward-thinking approach have been instrumental in shaping the company's growth and reputation. As a true industry influencer, they continue to inspire the team to push boundaries and deliver cutting-edge solutions to clients worldwide.</p>
    <div class="teamsocialprofile">
    <span class="linktitle">Follow me on</span>
    <div class="sw-hover-2">
    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
    <a href="#"><i class="fa-brands fa-twitter"></i></a>
    <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row mt100">
    <div class="col-lg-12">
    <div class="fivecardrow-sw">
    <div class="card-user-photo-sw">
    <div class="img-ovrflo-sw">
    <div class="ioswmg animation roundimg"> <img src="images/team/mejazh.jpg" alt="professional"></div>
    <div class="user-info-div-sw">
    <h4>M. Ejaz Hanif</h4>
    <p>Executive Chairman</p>
    </div>
    </div>
    </div>
    <div class="card-user-photo-sw">
    <div class="img-ovrflo-sw">
    <div class="ioswmg animation roundimg"> <img src="images/team/mkhalid.jpg" alt="professional"></div>
    <div class="user-info-div-sw">
    <h4>M. Khalid</h4>
    <p>Project Manager</p>
    </div>
    </div>
    </div>
    <div class="card-user-photo-sw">
    <div class="img-ovrflo-sw">
    <div class="ioswmg animation roundimg"> <img src="images/team/team-2.jpg" alt="professional"></div>
    <div class="user-info-div-sw">
    <h4>Anil Kumar</h4>
    <p>Digital Marketing</p>
    </div>
    </div>
    </div>
    <div class="card-user-photo-sw">
    <div class="img-ovrflo-sw">
    <div class="ioswmg animation roundimg"> <img src="images/team/team-4.jpg" alt="professional"></div>
    <div class="user-info-div-sw">
    <h4>Sanya Doutol</h4>
    <p>Customer Relationship</p>
    </div>
    </div>
    </div>
    <div class="card-user-photo-sw">
    <div class="img-ovrflo-sw">
    <div class="ioswmg animation roundimg"> <img src="images/team/team-5.jpg" alt="professional"></div>
    <div class="user-info-div-sw">
    <h4>Mike Jonkoyk</h4>
    <p>React Developer</p>
    </div>
    </div>
    </div>
    <div class="card-user-photo-sw">
    <div class="img-ovrflo-sw">
    <div class="ioswmg animation roundimg"> <img src="images/team/team-6.jpg" alt="professional"></div>
    <div class="user-info-div-sw">
    <h4>Punit Chalovkik</h4>
    <p>Graphic Design</p>
    </div>
    </div>
    </div>
    <div class="card-user-photo-sw">
    <div class="img-ovrflo-sw">
    <div class="ioswmg animation roundimg"> <img src="images/team/mtayyab.jpg" alt="professional"></div>
    <div class="user-info-div-sw">
    <h4>M. Tayyab Ali</h4>
    <p>WordPress Development</p>
    </div>
    </div>
    </div>
    <div class="card-user-photo-sw">
    <div class="img-ovrflo-sw">
    <div class="ioswmg animation roundimg"> <img src="images/team/team-8.jpg" alt="professional"></div>
    <div class="user-info-div-sw">
    <h4>Tom Happy</h4>
    <p>Android Development</p>
    </div>
    </div>
    </div>
    <div class="card-user-photo-sw">
    <div class="img-ovrflo-sw">
    <div class="ioswmg animation roundimg"> <img src="images/team/team-9.jpg" alt="professional"></div>
    <div class="user-info-div-sw">
    <h4>Rocky Smile</h4>
    <p>Graphic Design</p>
    </div>
    </div>
    </div>
    <div class="card-user-photo-sw">
    <div class="img-ovrflo-sw">
    <div class="ioswmg animation roundimg"> <img src="images/team/team-10.jpg" alt="professional"></div>
    <div class="user-info-div-sw">
    <h4>Mohit Gavasker</h4>
    <p>Web Developer</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="section-space">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <img src="images/common/our-team.svg" alt="ourteam">
    </div>
    <div class="col-lg-6 mmt40">
    <span class="scriptheading dashbefore mb15">Why TechnoPert?</span>
    <h4>Here are some reasons why customers choose TechnoPert over a competitor</h4>
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


    <div class="cta-block-sw-bkt mb80">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="cta-design-block-sw gradient-2 v-center">
    <div class="cta-info-div-bkt">
    <h3 class="mb15">Want to Hire Resources to Work With You?</h3>
    <p>Designers and Developers for Android, iOS, Web, Windows & MAC. We have over 5 years of experience in helping companies.</p>
    <a href="#" class="sw-btn sw-white-btn mt30">Get Started <i class="fa-solid fa-arrow-trend-up"></i></a>
    </div>
    <div class="cta-img-div-bkt"><img src="images/common/app-mockup-2.svg" alt="img"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
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

