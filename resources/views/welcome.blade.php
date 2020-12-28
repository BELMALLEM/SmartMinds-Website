@extends('layouts.app')

@section('content')
    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row align-items-center content-center">
          <div class="col-md-12">
            <div class="text-center">
              <h1 class="text-white font-weight-bold" style="font-size: 7em;">Smart Minds</h1>
              <p style="font-size: 3em;">Le leader des formations informatiques au Maroc</p>
              <div class="center-block">
                <button type="button" class="btn btn-primary btn-lg btn-lg btn-lg mr-2">S'inscrire</button>
                <button type="button" href="#" class="border success text-white btn btn-default btn-lg btn-lg btn-lg ml-2">Savoir plus</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>
    
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <!--<div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
            <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
          </div>
        </div>-->
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

    

    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Les formations de Smart Minds</h2>
          </div>
        </div>
        
        <ul class="job-listings mb-5">
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="job-single.html"></a>
            <div class="job-listing-logo">
              <img src="images/New-CCNA-Routing-and-Switching-Certification-v3.0.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>Formation CISCO</h2>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> Casablanca, Rabat
              </div>
              <div class="job-listing-meta">
                <a href="inscrire.html">
                  <span class="badge badge-success ">S'inscrire
                  </span>
                </a>
              </div>
            </div>
            
          </li>
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="job-single.html"></a>
            <div class="job-listing-logo">
              <img src="images/java-certification.png" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>Formation JAVA</h2>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> Casablanca, Rabat 
              </div>
              <div class="job-listing-meta">
                <span class="badge badge-success">S'inscrire</span>
              </div>
            </div>
          </li>

          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="job-single.html"></a>
            <div class="job-listing-logo">
              <img src="images/cybersecurity-analyst-logo.png" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>Formation Comptia cybersecurity Analyst</h2>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> Casablanca
              </div>
              <div class="job-listing-meta">
                <span class="badge badge-success">S'inscrire</span>
              </div>
            </div>
          </li>

          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="job-single.html"></a>
            <div class="job-listing-logo">
              <img src="images/téléchargement.png" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>Formation PHP/Symphony</h2>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> Casablanca, Rabat
              </div>
              <div class="job-listing-meta">
                <span class="badge badge-success">S'inscrire</span>
              </div>
            </div>
          </li>

          

          
        </ul>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Convaincu ?</h2>
            <p class="mb-0 text-white lead">Alors rejoignez-nous le plus vite !</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="#" class="btn btn-warning btn-block btn-lg">S'inscrire</a>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section py-4">
      <div class="container">
  
        <div class="row align-items-center">
          <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h2 class="section-title mb-2">Nos partenaires</h2>
              </div>
            </div>
            
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/1.png" alt="Image" class="img-fluid logo-1">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/2.png" alt="Image" class="img-fluid logo-2">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/3.png" alt="Image" class="img-fluid logo-3">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/4.png" alt="Image" class="img-fluid logo-4">
          </div>
        </div>
      </div>
      <p></p>
    </section>

@section('content')