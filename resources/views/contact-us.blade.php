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
    <a href="tel:+923121431660"><i class="fa-solid fa-tty mr10"></i> 92 312 143 1660</a>
    <a href="tel:+923121431660"><i class="fa-brands fa-whatsapp mr10"></i> 92 348 165 5055</a>
    </div>
    <div class="contactnumberdiv mt30">
    <p class="mb5 linktitle">Send Us an Email:</p>
    <a href="mailto:abidmaqbool@technopert.com"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="d3babdb5bc93aabca6a1a4b6b1a0baa7b6fdb0bcbe">abidmaqbool@technopert.com</span></a>
    <a href="mailto:abidmaqbool20@gmail.com"><i class="fa-solid fa-envelope mr10"></i> <span class="__cf_email__" data-cfemail="1d756f5d6472686f6a787f6e746978337e7270">abidmaqbool20@gmail.com</span></a>
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


    <section class="breadcrum-area innerheadbg text-white" data-background="images/common/head-bg-2.jpg">
    <div id="particles-js"></div>
    <div class="container index-up">
    <div class="row justify-content-between">
    <div class="col-lg-6">
    <div class="breadcrum-area-content">
    <ul class="list-h-styled mb30">
    <li><a href="index.html">Home</a></li>
    <li class="active">Contact</li>
    </ul>
    <h2 class="mb15">Contact Us</h2>
    <p>If you have questions, need support, or anything else, please fill the form below. We are here to help you.</p>
    </div>
    </div>
    </div>
    </div>
    </section>


    <section class="contactblock section-space">
    <div class="container">
    <div class="row justify-content-center v-center">
    <div class="col-lg-5 padding-right-70">
    <div class="continfoblck">
    <h3 class="mb10 text-gradient-1">Let's get in touch!</h3>
    <p>Your information is safe with us. We guarantees 100% data security. We don’t use emails for spamming.</p>
    <div class="contactinkediv contactblk shadow mt20">
    <span class="scriptheading mb5"><i class="fa-solid fa-envelope mr10"></i> Send Us an Email:</span>
    <p class="f15 mb10">Our support team will get back to in 24-h during standard business hours.</p>
    <a href="https://separateweb.com/cdn-cgi/l/email-protection#670e090108271e081215100205140e13024904080a" class="d-block"><span class="__cf_email__" data-cfemail="50393e363f10293f2522273532233924357e333f3d">[email&#160;protected]</span></a>
    <a href="https://separateweb.com/cdn-cgi/l/email-protection#573e393138172e382225203235243e23327934383a" class="d-block"><span class="__cf_email__" data-cfemail="95fde7d5ecfae0e7e2f0f7e6fce1f0bbf6faf8">[email&#160;protected]</span></a>
    </div>
    <div class="contactinkediv contactblk shadow mt20">
    <span class="scriptheading mb5"><i class="fa-solid fa-tty mr10"></i> Phone/Whatsapp:</span>
    <p class="f15 mb10">Assistance Hours: Mon – Sat, 10 am to 7 pm</p>
    <a href="tel:+911234567900" class="d-block">91 123 4567 890</a>
    <a href="tel:+911234567900" class="d-block">91 123 4560 890</a>
    </div>
    <div class="contactinkediv contactblk shadow mt20">
    <span class="scriptheading mb5"><i class="fa-brands fa-skype mr10"></i> Chat on Skype</span>
    <p class="f15 mb10">We Are Online: Monday – Friday, 9 am to 5 pm</p>
    <a href="tel:+911234567900">TechnoPert:live</a>
    </div>
    </div>
    </div>
    <div class="col-lg-7 mmt40">

    <div class="contact-form-card-pr contact-block-sw iconin">
    <h3>Hey! there :)</h3>
    <div class="form-block blueketform mt30">
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
    <div class="fieldsets mt20"> <button type="submit" name="submit" class="porkai-btn w-100"><span>Submit</span> <span class="loader"></span></button> </div>
    </form>
    </div>
    <div class="form-btm-set text-center">
    <h5>We Deliver</h5>
    <div class="icon-setss mt20">
    <div class="icon-rows">
    <div class="icon-imgg"><img src="images/icons/money.svg" alt="#"></div>
    <div class="icon-txt">
    <p>Best Price</p>
    </div>
    </div>
    <div class="icon-rows">
    <div class="icon-imgg"><img src="images/icons/quality.svg" alt="#"></div>
    <div class="icon-txt">
    <p>Quality Service</p>
    </div>
    </div>
    <div class="icon-rows">
    <div class="icon-imgg"><img src="images/icons/call-agent.svg" alt="#"></div>
    <div class="icon-txt">
    <p>Good Support</p>
    </div>
    </div>
    <div class="icon-rows">
    <div class="icon-imgg"><img src="images/icons/satisfaction.svg" alt="#"></div>
    <div class="icon-txt">
    <p>Satisfaction</p>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    </section>


    <div class="container-full">
    <div class="rows">
    <div class="col-lg-12">
    <div class="mapblock">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.578132478395!2d74.35869421439518!3d31.520369281399246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904422ab5ed9f%3A0x63d6aaf7e9d4fc18!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1622557412323!5m2!1sen!2s"></iframe>
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

