@extends('layouts.app')

@section('content')
    <!-- HOME -->
  <section class="section-hero home-section overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Quelque soit votre besoin, Smart Minds va vous assurer l'ultime formation</h1>
            </div>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>
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
            <a href="descriptionFormation"></a>
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
                <span class="badge badge-success">S'inscrire</span>
              </div>
            </div>
            
          </li>
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="descriptionFormation"></a>
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
            <a href="descriptionFormation"></a>
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
            <a href="descriptionFormation"></a>
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

        <!--<div class="row pagination-wrap">
          <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
            <span>Showing 1-7 Of 43,167 Jobs</span>
          </div>
          <div class="col-md-6 text-center text-md-right">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Prev</a>
              <div class="d-inline-block">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>

      </div>-->
    </section>

  
@endsection('content')
