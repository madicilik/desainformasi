@extends('layouts.landing')
@section('title', 'Contact')
@section('content')
<!--/ Header end -->
<section id="news" class="news">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          
          <h3 class="section-sub-title">Artikel Terkini</h3>
        </div>
    </div>
    <!--/ Title row end -->
   
    <div class="row">
     @foreach ($beritas as $b)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-thumbnail" src="{{ asset('foto_informasi/'. $b->foto) }}">
                </a>
              </div>
              <div class="post-body ">
                <h4 class="post-title mb-3">
                    <a href="news-single.html" class="d-inline-block">{{ $b->judul }}</a>
                </h4>

                 <div class="entry-content">
                    <p>{{ $b->deskripsi }}.</p>
                     <i class="fas fa-calendar-week"></i> {{ $b->tgl_upload }}
                </div> 
               
              </div>
          </div><!-- Latest post end -->
          
        </div><!-- 1st post col end -->
    
      @endforeach
    </div>

  </div>
  <!--/ Container end -->
</section>
<!--/ News end -->


@endsection