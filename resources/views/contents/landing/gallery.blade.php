@extends('layouts.landing')
@section('title', 'Galleri')
@section('content')

<section id="main-container" class="main-container pb-1">
 
  <div class="container">
  <div class="text-center">
        <h3 class="section-sub-title">FOTO GALLERI</h3>
    </div>
    <div class="row">
    @foreach ($galleri as $ga)
        
   
      <div class="col-lg-4 col-md-6 mb-2">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
               <a href="{{ asset('foto_gallery/'. $ga->foto_galleri) }}">
              <img loading="lazy" class="w-100" src="{{ asset('foto_gallery/'. $ga->foto_galleri) }}" alt="foto-galleri"  width="260px" height="260px">
            </div>
        </div><!-- Service1 end -->
      </div><!-- Col 1 end -->
 @endforeach

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

@endsection