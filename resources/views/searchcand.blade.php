@extends('indx')
@section('content')

<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread">CV-Théques :  </h1>
          </div>
        </div>
      </div>
    </div>
    {!! Form::open(['action' => 'SearchController@index', 'method' => 'GET']) !!}


		<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <div class="form-group">
                <div> 
                    <label> intitule :  </label>
                    <input type="text" name="intitule" id="intitule" placeholder="intitule">
                </div>


                <div> 
                    <label> Region :  </label>
                    <select type="text" name="region" placeholder="region" id="region">
                        <option value="">indeferent</option>
                        <option value="Casablanca-Settat">Casablanca-Settat</option>
                        <option value="Rabat-Salé-Kenitra">Rabat-Salé-Kénitra</option>
                        <option value="Marrakech-Safi">Marrakech-Safi</option>
                        <option value="Tanger-Tetouan-Al Hoceima">Tanger-Tétouan-Al Hoceïma</option>
                        <option value="Fes-Meknes">Fès-Meknès</option>
                        <option value="l'Oriental">l'Oriental</option>
                        <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                        <option value="Souss-Massa">Souss-Massa</option>
                        <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                        <option value="Bani Mellal-Khenifra">Béni Mellal-Khénifra</option>
                        <option value="Laayoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                        <option value="Dakhla-Oued Ed Dahab">Dakhla-Oued Ed Dahab</option>
                    </select>
                </div>



                <div>
                    <label> Annees Experience :  </label>
                    <select type="text"  name="nad" id="nad" placeholder="Nombre d’années d’expérience ">
                        <option value="">indeferent</option>
                        <option value="Debutant">Débutant</option>
                        <option value="Entre1et3ans">Entre 1 et 3 ans d'expérience</option>
                        <option value="Entre3et5ans"> Entre 3 et 5 ans d'expérience</option>
                        <option value="Entre5et10 ans"> Entre 5 et 10 ans d'expérience</option>
                        <option value="Plusde10ans">Plus de 10 ans d'expérience</option>
                    </select>
                </div>


            {{form::Submit('submit',['class'=> 'btn btn-primary'])}}
            </div>









           
          </div>
        </div>
    </div>
    </section>








@endsection