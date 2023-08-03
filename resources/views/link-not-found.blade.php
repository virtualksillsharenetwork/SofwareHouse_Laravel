@extends('layouts.app')
@section('title', 'Home Page')
@push('cs')
     {{-- @include('components.datatableStyle')-- --}}
   {{--  <!-- <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/dashboard-ecommerce.css')}}"> -->-- --}}

@endpush
@section('content')

    <div class="error404page">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="imgblock"><img src="images/common/page404.svg" alt="404 error" class="img-fluid"></div>
<div class="pagecontentss text-center">
<h2>Error 404</h2>
<h4>Page Not Found</h4>
<a href="/" class="sw-btn sw-blue-btn mt30">GO BACK HOME <i class="fa-solid fa-arrow-trend-up"></i></a>
</div>
</div>
</div>
</div>
</div>


    {{-- <!-- @include('admin.transactions.components.addCost')-- --}}
    {{-- @include('admin.transactions.components.editCost') -->-- --}}
@endsection
@push('js')
    {{-- <!-- @include('admin.components.datatableScript') -->-- --}}
    <script>

    </script>

   {{--  <!-- @include('admin.transactions.components.addItemsScript') -->-- --}}
@endpush
