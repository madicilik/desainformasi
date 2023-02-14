<header id="header" class="header-two">
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                <img src="{{ asset('assets/3.png') }}" alt="" width="15%" height="15%"> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ Route::is('index') ? 'active' : '' }}"><a class="nav-link" href="{{ Route('index') }}"> Home</a></li>
                        <li class="nav-item {{ Route::is('profile') ? 'active' : '' }}"><a class="nav-link" href="{{ Route('profile') }}"> About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ Route('beritas') }}">Artikel</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ Route('galleri') }}"> Galleri</a></li>
                        <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}"><a class="nav-link" href="{{ Route('contact') }}"> Kontak</a></li>
                       
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>