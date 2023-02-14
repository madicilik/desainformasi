@extends('layouts.landing')
@section('title', 'Profile')
@section('content')
  
<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">

           <h2>MAKSUD</h2>
        
        <p>Program Desa Informasi lahir dari Lembaga Penelitian& Pengabdian pada Masyarakat (LPPM) AMIK Bumi Nusantara Cirebon yang dalam Implementasinya bekerjasama dengan Pemerintah Daerah Kabupaten / Kota adalah dimaksudkan
          untuk membantu desa mendapatkan layanan Informasi dengan memanfaatkan Teknologi Informasi yang dapat meningkatkan layanan aparatur desa kepada
          masyarakat, membantu menghidupkan dinamika sosial budaya dan perekonomian di desa, sehingga dapat tumbuh dan bersaing mengikuti kemajuan zaman di era
          Teknologi Informasi global yang saat ini sedang berjalan.</p>
         <h2>TUJUAN</h2>
         <P>Program Desa Informasi dilaksanakan dengan tujuan sebagai berikut : <br><br>
            1. Memudahkan koordinasi dalam pola hubungan antar aparatur mulai dari
            &nbsp;&nbsp;&nbsp;&nbsp;tingkat pemerintah desa, kecamatan, kabupaten, provinsi dan pusat.<br>
            2. Meningkatkan kapasitas dan wawasan aparatur desa sehingga dapat 
            &nbsp;&nbsp;&nbsp;&nbsp;meningkatan performa kantor desa dalam memberikan pelayanan kepada &nbsp;&nbsp;&nbsp;&nbsp;masyarakat desanya.<br>
            3. Memberikan kemudahan layanan kebutuhan administrasi masyarakat di
            &nbsp;&nbsp;&nbsp;&nbsp;kantor desa dengan menggunakan alat yang berbasis Teknologi Informasi.<br>
            4. Membantu masyarakat desa mendapatkan Informasi yang lebih luas &nbsp;&nbsp;&nbsp;&nbsp;terkait berbagai hal dari pemerintah daerah, provinsi dan pusat atau 
            &nbsp;&nbsp;&nbsp;&nbsp;informasi produk komersil yang dibutuhkan masyarakat, termasuk iklan &nbsp;&nbsp;&nbsp;&nbsp;produk Usaha Mikro Kecil dan Menengah dari desa tersebut atau sesama &nbsp;&nbsp;&nbsp;&nbsp;desa se kecamatan dan se kabupaten/kota. <br>
            5. Membantu mendinamisasikan kehidupan masyarakat desa dengan &nbsp;&nbsp;&nbsp;&nbsp;menikmati kemajuan Teknologi Informasi untuk menunjang peningkatan 
            &nbsp;&nbsp;&nbsp;&nbsp;diberbagai aspek kehidupan masyarakat.<br>
            6. Meningkatkan shilaturahim dan gotong royong dalam masyarakat desa,
            &nbsp;&nbsp;&nbsp;&nbsp;melalui pertukaran informasi antar desa.</P>
        </div><!-- Col end -->

        <div class="col-lg-6 mt-lg-0">
          
          <div id="page-slider" class="page-slider small-bg">

              <div class="item" style="background-image:url( {{ asset('assets/1.png') }})">
                <div class="container">
                    <div class="box-slider-content">
                        
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url( {{ asset('assets/2.png') }})">
                <div class="container">
                    <div class="box-slider-content">
                        
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url( {{ asset('assets/4.png') }})">
                <div class="container">
                    <div class="box-slider-content">
                      
                    </div>
                </div>
              </div><!-- Item 1 end -->
          </div><!-- Page slider end-->          
        

        </div><!-- Col end -->

        
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

       
<section id="ts-team" class="ts-team">
  <div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
          
          <h3 class="section-sub-title">Professional Team</h3>
        </div>
    </div><!--/ Title row end -->

    <div class="row">
        <div class="col-lg-12">
          <div id="team-slide" class="team-slide">

            @foreach ($profile as $t)
            
              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('foto_team/'. $t->foto) }}" alt="team-img" width="100px" height="350px">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">{{ $t->nama }}</h3>
                      <p class="ts-description">{{ $t->jabatan }}</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 6 end -->
              @endforeach

          </div><!-- Team slide end -->
        </div>
    </div><!--/ Content row end -->
  </div><!--/ Container end -->
</section><!--/ Team end -->
@endsection