@extends('layouts.landing')
@section('title', 'Home')
@section('content')

<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url( {{ asset ('assets/images/banner/banner_promo1.jpeg') }})">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url( {{ asset ('assets/images/banner/banner_promo2.png') }})">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url( {{ asset ('assets/5.png')}} )">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                
              </div>
          </div>
        </div>
    </div>
  </div>
</div>


<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title" style="background:#fcad03">Iklankan Produk Anda Di Tempat Kami Silahkan Klik Pemesanan</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="#">Pesan Iklan</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ts-intro"><br><br><br>
                  <h4 class="" align="center">Apa Itu Desa Informasi?</h4>
                  <p align="center">'' Sebuah program yang membuka jendela informasi untuk mempermudah akses berbagai informasi dari dan ke desa atau wilayah sekitar,
                    sehingga membantu masyarakat desa mendapatkan layanan informasi dengan memanfaatkan teknologi informasi modern ''.
                  </p>
                </div><!-- Intro box end -->
            <div class="gap-20"></div>  
        </div><!-- Col end -->
        <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="ts-intro">
              <img src="{{ asset ('assets/images/banner/banner_promo2.png') }}" alt="img-fluid" width="550" height="300">
            </div><!-- Intro box end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="facts" class="facts-area dark-bg" style="background:#635424">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset ('assets/images/icon-image/fact1.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="1">0</span></h2>
                <h3 class="ts-facts-title">Lokasi Videotron</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset ('assets/images/icon-image/fact2.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="5">0</span></h2>
                <h3 class="ts-facts-title">Members</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset ('assets/images/icon-image/fact3.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="400">0</span></h2>
                <h3 class="ts-facts-title">Slot Aktif</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset ('assets/images/icon-image/fact4.png') }}" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="2">0</span></h2>
                <h3 class="ts-facts-title">Kota</h3>
              </div>
          </div><!-- Col end -->

        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="ts-facts-title" style="color:#ffc105">Manfaat Yang Kami Berikan</h2>
          <h3 class="section-sub-title"></h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset ('assets/images/icon-image/service-icon1.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#" style="color:#ffc105">Meningkatkan Ekonomi Desa</a></h3>
                <p>Dengan adanya teknologi akan mempermudah memajukan perekonomian desa.</p>
              </div>
          </div><!-- Service 1 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#" style="color:#ffc105">Membantu Pemasaran Produk Umkm</a></h3>
                <p>Videotron sebagai media promosi produk umkm.</p>
              </div>
          </div><!-- Service 2 end -->

          

        </div><!-- Col end -->

        <div class="col-lg-4 text-center">
          <img loading="lazy" class="img-fluid" src="{{ asset('assets/images/services/iklan-videotron_kuningan.jpg') }}" alt="service-avater-image">
        </div><!-- Col end -->

        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#" style="color:#ffc105">Menjadi Desa Modern</a></h3>
                <p>Masyarakat desa mampu memanfaatkan teknologi informasi sebagai sarana untuk meningkatkan segala aspek kehidupan di desa.</p>
              </div>
          </div><!-- Service 4 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon5.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#" style="color:#ffc105">Mudah Mendapatkan Informasi</a></h3>
                <p>Dengan adanya program desa informasi masyarakat desa akan mudah mendapatkan informasi yang diperlukan dalam kehidupan sehari-hari.</p>
              </div>
          </div><!-- Service 5 end -->

         
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->

<section id="main-container" class="main-container pb-4">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
      <h2 class="ts-facts-title column-title" style="color:#ffc105">Leader Desa Informasi</h2>
      </div>
    </div>
    <!--/ Title row end -->
    <div class="row">
    @foreach ($profiles as $p)
      <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
            <img loading="lazy" src="{{ asset('foto_team/'. $p->foto) }}" class="card-img-top" alt="team-img" height="280px">
          </div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name">{{ $p->nama }}</h3>
            <p class="ts-designation">{{ $p->jabatan }}</p>
           
            <div class="team-social-icons">
              <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
              <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            <!--/ social-icons-->
          </div>
        </div>
        <!--/ Team wrapper 3 end -->
      </div><!-- Col end -->

      @endforeach
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->


<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="ts-facts-title column-title">Testimoni Pelaku Umkm</h3>

          <div id="testimonial-slide" class="testimonial-slide">
            @foreach ($tes as $t)
            
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                     {{ $t->deskripsi }}
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{ asset('foto_testimoni/'. $t->foto) }}" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">{{ $t->nama }}</h3>
                          <span class="quote-subtext">{{ $t->jabatan }}</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->
              @endforeach
          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="ts-facts-title column-title">Didukung Oleh</h3>
         
          <div class="row all-clients">
           @foreach ($mitras as $m)
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href=""><img loading="lazy" class="img-fluid" src="{{ asset('foto_mitra/'. $m->foto) }}" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 1 end -->

              @endforeach

          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->
@endsection
