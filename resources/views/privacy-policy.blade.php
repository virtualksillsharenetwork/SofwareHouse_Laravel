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

    <section class="breadcrum-area contactuspage bg-efffect-2">
<div class="container index-up">
<div class="row v-center justify-content-between">
<div class="col-lg-6">
<div class="breadcrum-area-content">
<ul class="list-h-styled mb30">
<li><a href="/">Home</a></li>
<li class="active">Privacy Policy</li>
</ul>
<h2 class="mb15">Privacy Policy</h2>
</div>
</div>
</div>
</div>
</section>


<section class="section-space">
<div class="container">
<div class="row">
<div class="col-xl-12 col-lg-12 col-xl-8  col-md-12 col-12">
<div class="paragraph-block">
<h4>What Information Do We Collect ? </h4>
<p>At TechnoPert, we collect information about you when you use our Website to access our services and other online products (collectively, the "Services"), as well as through other interactions and communications you have with us. The term "Services" encompasses various applications, websites, widgets, email notifications, and other mediums, or portions of such mediums, through which you have accessed this Privacy Policy.</p>
<h4>What Do We Do Of Your Information ?</h4>
<p>Any of the Information We collect may be used for following purposes:</p>
<ul class="blueketlist number mt20 mb30">
<li>To Analyse Your Purpose.</li>
<li>To Provide the Solutions.</li>
<li>To Improve Our Service.</li>
<li>To Process Further Interaction.</li>
<li>To Administer Contest, Promotion, Survey or other Site Features. </li>
</ul>
<h4>How Do We Protect Your Information ?</h4>
<p>We Implement a variety of Security Measures to maintain Safety of Personal Information when you enter, submit, or access your personal information.</p>
<h4>Do We Use Cookies ?</h4>
<p>We may change this Privacy Policy from time to time. If we decide to change this Privacy Policy, we will inform you by posting the revised Privacy Policy on the Site. Those changes will go into effect on the "Last updated" date shown at the end of this Privacy Policy. By continuing to use the Site or Services, you consent to the revised Privacy Policy. We encourage you to periodically review the Privacy Policy for the latest information on our privacy practices.</p>
<h4>Do We Disclose Any Information To Outside Parties ?</h4>
<p>We do not sell, trade, or otherwise transfer to outside parties your personal information. This doesn't include third parties who assist us in operating our website, conducting our business, or servicing you as long as those Parties agree to keep information private.</p>
<h4>Third Party Links</h4>
<p>We may include or offer Third Party products or services on Our Website. These Third Party Sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked site.</p>
<h4>Online Privacy Protection Act Compliance</h4>
<p>Technopert does not knowingly collect personally identifiable information (PII) from persons under the age of 13. If you are under the age of 13, please do not provide us with information of any kind whatsoever. </p>
<h4>Children Online Privacy Protection Act Compliance</h4>
<p>Technopert does not knowingly collect personally identifiable information (PII) from persons under the age of 13. If you are under the age of 13, please do not provide us with information of any kind whatsoever. </p>
<h4>Consent</h4>
<p>By Using Our Site, You consent to our Privacy Policy.</p>
<h4>Last Update</h4>
<p>This Privacy Policy was last updated on Friday, 01 July, 2022.</p>
</div>
</div>
</div>
</div>
</section>

@include('layouts.partials.footer-3')

    {{-- <!-- @include('admin.transactions.components.addCost')-- --}}
    {{-- @include('admin.transactions.components.editCost') -->-- --}}
@endsection
@push('js')
    {{-- <!-- @include('admin.components.datatableScript') -->-- --}}
    <script>

    </script>

   {{--  <!-- @include('admin.transactions.components.addItemsScript') -->-- --}}
@endpush
