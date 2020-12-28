@extends('layouts.app')

@section('content')
<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">A propos</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Accueil</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>A propos</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">Les statistiques de Smart Minds</h2>
          </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="210">0</strong>
            </div>
            <span class="caption">Elèves</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="23">0</strong>
            </div>
            <span class="caption">Formateurs</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="75">0</strong>
            </div>
            <span class="caption">% de pratique</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="4">0</strong>
            </div>
            <span class="caption">Sessions chaque année</span>
          </div>

            
        </div>
      </div>
    </section>

    
    <section class="site-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <!--<a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788"></a>-->
              <span class="play-icon"><span class="icon-play"></span></span>
              <img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow">
            </a>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-title mb-3">Smart Minds, Le centre de formations informatiques par excellence</h2>
            <p class="lead">Avec son équipe de professionnels du domaine, la panoplie des formations qu'ils propose et l'encadrement continu de ses élèves, Smart Minds est le choix ultime pour vos formations</p>
          </div>
        </div>
      </div>
    </section>

   
    <section class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Notre équipe</h2>
          </div>
        </div>

        <div class="row align-items-center block__69944">

          <div class="col-md-6">
            <img src="images/person_6.jpg" alt="Image" class="img-fluid mb-4 rounded">
          </div>

          <div class="col-md-6">
            <h3>Laura Sandion</h3>
            <p class="text-muted">Directrice de Smart Minds</p>
            <p>"Smart Minds, c'est plus qu'un centre de formation, c'est un espace de créativité".</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>

          <div class="col-md-6 order-md-2 ml-md-auto">
            <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-4 rounded">
          </div>

          <div class="col-md-6">
            <h3>Samir Derkim</h3>
            <p class="text-muted">Responsable formations</p>
            <p>"Rien ne prouve de plus l'excellence de notre centre que les profils de ses élèves".</p>
            <div class="social mt-4">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
      </div>
    </section>
  
@section('content')