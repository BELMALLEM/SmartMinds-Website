@extends('layouts.app')

@section('content')


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
            @if (Session::has('flash_message'))
               <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
            @endif
            <form method="post" action="{{ Route('inscrireFormation.store') }}" class="p-4 border rounded">
            @csrf
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <h3>
                    <label class="text-black" for="fname">Formation(s) Choisie(s)</label>
                  </h3>
                  <div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" id="JAVA" value="option1" name="JAVA">
                        Formation JAVA
                      </label>
                    </div>
                  </div>
                  <div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" id="CCNA" value="option2" name="CCNA">
                        Formation CCNA
                      </label>
                    </div>
                  </div>
                  <div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" id="CompTIA" value="option1" name="CompTIA">
                        Formation CompTIA Cybersecurity Analyst
                      </label>
                    </div>
                  </div>
                  <div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" id="PHPSY" value="option1" name="PHPSY">
                        Formation PHP/Symphony
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <h3>Choisissez une session</h3>
              <select name="session">
                   <option value="Automn">Automn</option>
                   <option value="Hiver">Hiver</option>
                   <option value="Printemp">Printemp</option>
                   <option value="Ete">Ete</option>
              </select>

              </div>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="S'inscrire" class="btn px-4 btn-primary text-white">
                </div>
              </div>
      
            </form>
          </div>
    </section>
    @endsection('content')
