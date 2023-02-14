@extends('layouts.landing')
@section('title', 'Contact')
@section('content')
<section id="main-container" class="main-container">
   <div class="container">
      <div class="row text-center">
         <div class="col-12">
            <h3 class="section-sub-title mb-4">Testimoni</h3>
         </div>
      </div>
      <!--/ Title row end -->

      <div class="row">
      @foreach ($testimonis as $ts)
         <div class="col-lg-4 col-md-6">
            <div class="quote-item quote-border mt-5">
               <div class="quote-text-border">
                 {{ $ts->deskripsi }}
               </div>

               <div class="quote-item-footer">
                  <img loading="lazy" class="testimonial-thumb" src="{{ asset('foto_testimoni/'. $ts->foto) }}" alt="testimonial">
                  <div class="quote-item-info">
                     <h3 class="quote-author">{{ $ts->nama }}</h3>
                     <span class="quote-subtext">{{ $ts->jabatan }}</span>
                  </div>
               </div>
            </div><!-- Quote item end -->
         </div><!-- End col md 4 -->

         @endforeach

      </div><!-- Content row end -->

   </div><!-- Container end -->
</section><!-- Main container end -->

@endsection