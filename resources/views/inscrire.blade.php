
<!doctype html>
<html lang="en">
  <head>
    <title>Smart Minds</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css">
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">

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
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.html">Smart Minds</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.html" class="nav-link active">Accueil</a></li>
              <li><a href="about.html">A propos</a></li>
              <li><a href="formations.html">Formations</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contactez-nous</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="post-job.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>S'inscrire</a>
              <a href="login.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Se connecter</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">S'inscrire</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Accueil</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>S'inscrire</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5 mx-auto">
            <h1 class="mb-4">S'inscrire dans Smart Minds</h1>
            <form action="/inscrire" class="p-4 border rounded" method="post">
            {{ csrf_field() }}
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nom</label>
                  <input type="text" id="fname" class="form-control" name = "name" placeholder="Nom de famille">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Prénom</label>
                  <input type="text" id="fname" class="form-control" name = "prenom" placeholder="Prenom">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="text" id="fname" class="form-control" name = "email" value="{{ old('email') }}" placeholder="Addresse email">
                  @if($errors->has('email'))
                  <p>{{ $errors->first('email') }}</p>
                  @endif
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Mot De Passe</label>
                  <input type="password" id="fname" class="form-control" name = "password" placeholder="Mot De Passe">
                </div>
              </div>
      
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Retaper le Mot De Passe</label>
                  <input type="password" id="fname" class="form-control" name = "passwordconfirmed" placeholder="Retaper le Mot De Passe">
                </div>
              </div>
              
              <p class="text-black">Vous êtes:</p>
              <div>
                <input type="radio" id="admin" name="droitacces" value="Administrateur">
                <label for="admin" class="text-black">Administrateur</label>
              </div>

              <div>
                <input type="radio" id="client" name="droitacces" value="client">
                <label for="admin" class="text-black">Client</label>
              </div>

              <div>
                <input type="radio" id="comptable" name="droitacces" value="comptable">
                <label for="admin" class="text-black">Comptable</label>
              </div>

              <div>
                <input type="radio" id="formateur" name="droitacces" value="formateur">
                <label for="admin" class="text-black">Formateur</label>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="S'inscrire" class="btn px-4 btn-primary text-white">
                </div>
              </div>
      
            </form>
          </div>
    </section>

    
    
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
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/quill.min.js"></script>
    
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>
   
   
     
  </body>
</html>


