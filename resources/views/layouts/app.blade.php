<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>SmartMinds </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Marouane BELMALLEM" />
    <link rel="shortcut icon" href="https://cdn.freebiesupply.com/logos/large/2x/open-source-logo-svg-vector.svg">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css">
    

     
    
   
</head>
<body>
    <div id="app">
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid navbar-light">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index">Smart Minds</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index" class="nav-link active">Accueil</a></li>
              <li><a href="about">A propos</a></li>
              <li><a href="formations">Formations</a></li>
              <li><a href="blog">Blog</a></li>
              <li><a href="contact">Contactez-nous</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
                <!-- Authentication Links -->
                @guest
                   <div class="row">
                        <a href="{{ route('login') }}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <li class="nav-item">
                           <a href="{{ route('register') }}" class="btn btn-outline-danger  border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                            <div class="row">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            </div>
                @endguest
              

        </div>
      </div>
    </header>

        <main class="py-4">
            @yield('content')
        </main>

       <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Smart Minds</h3>
            <ul class="list-unstyled">
              <li>+212 569 874 225</li>
              <li>contact@smartminds.com</li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Liens Rapides</h3>
            <ul class="list-unstyled">
              <li><a href="#">A propos</a></li>
              <li><a href="#">Formations</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">S'inscrire</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Adresse</h3>
            <ul class="list-unstyled">
              <li>Casablanca@: 54, rue al amir, Anfa, Casablanca</li>
              <li>Rabat@: 22,rue les fleurs, Quartier Essalam, Rabat </li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contactez-nous</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
              
            &copy;<script>document.write(new Date().getFullYear());</script><i  aria-hidden="true"></i><a href="https://colorlib.com" target="_blank" ></a>
            </small></p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>
    </div>
</body>
</html>
