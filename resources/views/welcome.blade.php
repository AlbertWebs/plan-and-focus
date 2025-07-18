@extends('front.master')
@section('content')
@include('front.slider')
<!-- Page Conttent -->
   <main class="page-content">
      @include('former-about')
      @include('front.pages.about')
      @include('front.pages.services')
      @include('front.pages.why')  
      @include('front.pages.portfolio')
      @include('front.pages.counter')
      <!-- Start Blog Area -->
      {{-- @include('front.blog') --}}
      <!-- End Blog Area -->
      @include('front.pages.contact')
   </main>
<!--// Page Conttent -->
@endsection