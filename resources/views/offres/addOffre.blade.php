@extends('employeur.layouts')

@section('content')

    

<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{url('/employeur')}}">Espace Employeur <i class="ion-ios-arrow-forward"></i></a></span> <span>Mes postes</span></p>
            <h1 class="mb-3 bread">Ajouter une Offre </h1>
          </div>
        </div>
      </div>
</div>







    <div class=" " style="width : 100%; padding-top : 200px; padding-bottom : 20px;" >
<div class="card" style="width: 60rem; margin : 0 auto;">
<div class="card-body">
<h3 class='text-center text-info' style="font-family: 'Brady Bunch Remastered',Georgia,'Times New Roman','DejaVu Serif',serif;">Déposez votre offre gratuitement</h3>
<br>
<form action="{{url('/save_offre')}}" method="post"  enctype="multipart/form-data" name="monform">
@csrf
@if(session()->has('message'))
    <div class="text-danger">
        {{ session()->get('message') }} <br>
    </div>
@endif
  <div class="form-row">
        <div class="form-group col-md-6">
            <label style="color : #E62E04;">nref<span class='text-danger'> *</span></label>
            <input type="number" class="form-control" name="nref" required value="{{ old('nref') }}">
        </div>

        <div class="form-group col-md-6">
            <label style="color : #E62E04;">date_depot<span class='text-danger'> *</span></label>
            <input type="date" class="form-control" name="date_depot" required value="{{ old('date_depot') }}">
        </div>



        <div class="form-group col-md-6">
            <label style="color : #E62E04;">descriptif_poste<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="descriptif_poste" required value="{{ old('descriptif_poste') }}">
        </div> <div class="form-group col-md-6">

            <label style="color : #E62E04;">niveau_etude<span class='text-danger'> *</span></label>
         <select type="text" class="form-control" name="niveau_etude" required value="{{ old('niveau_etude') }}">
         <option value="primaire">primaire</option>
            <option value="seccondaire collegial">seccondaire collegial</option>
            <option value="niveau bac"> niveau bac</option>
            <option value="bac"> bac</option>
            <option value="Bac+2">Bac+2(DEUG , BTS , DUT , DEUST)</option>
            <option value="Bac+3">Bac+3(Licence, licence professionnelle)</option>
            <option value="Bac+4">Bac+4(Maîtrise, master 1)</option>
            <option value="Bac+5">Bac+5(Master, diplôme d'études approfondies, diplôme d'études supérieures spécialisées, diplôme d'ingénieur)</option>
        </select>

        </div>

        <div class="form-group col-md-6">

                <label style="color : #E62E04;">domaine<span class='text-danger'> *</span></label>
                <input type="text" class="form-control" name="domaine" required value="{{ old('domaine') }}">
        </div>
        



        <div class="form-group col-md-6">
            <label style="color : #E62E04;">niveau_experience<span class='text-danger'> *</span></label>
            <select type="text" class="form-control" name="niveau_experience" required value="{{ old('niveau_experience') }}">
            <option value="Debutant">Débutant</option> 
            <option value="Entre 1 et 3ans">Entre 1 et 3 ans d'expérience</option>
            <option value="Entre 3 et 5 ans"> Entre 3 et 5 ans d'expérience</option>
            <option value="Entre 5 et 10 ans"> Entre 5 et 10 ans d'expérience</option>
            <option value="Plus de 10 ans">Plus de 10 ans d'expérience</option>
            </select>
        </div> <div class="form-group col-md-6">

            <label style="color : #E62E04;">competence<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="competence" required value="{{ old('competence') }}">
        </div>



        <div class="form-group col-md-6">
            <label style="color : #E62E04;">qualite<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="qualite" required value="{{ old('qualite') }}">
        </div> <div class="form-group col-md-6">
            <label style="color : #E62E04;">langue<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="langue" required value="{{ old('langue') }}">
        </div>



        <div class="form-group col-md-6">
            <label style="color : #E62E04;">adresse<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="adresse" required value="{{ old('adresse') }}">
        </div> <div class="form-group col-md-6">
            <label style="color : #E62E04;">ville<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="ville" required value="{{ old('ville') }}">
        </div>



        <div class="form-group col-md-6">
        <label style="color : #E62E04;">Region<span class='text-danger'> *</span></label>
        <select type="text" class="form-control" name="region" required value="{{ old('region') }}"> 
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
        </div> <div class="form-group col-md-6">
            <label style="color : #E62E04;">poste_cadre<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="poste_cadre" required value="{{ old('poste_cadre') }}">
        </div>



        
        


        <div class="form-group col-md-6">

        <select type="text" class="form-control" name="type_contrat" required value="{{ old('type_contrat') }}"> 
         <option value="">type de contrat</option>
         <option value="CDI(Contrat à durée indéterminée)">CDI</option>
         <option value="CDD(Contrat à durée déterminée)">CDD </option>
         <option value="CTT(Contrat de travail temporaire)">CTT </option>
         <option value="CUI(Contrat unique d'insertion)">CUI </option>
         <option value="CAE(Contrat d'accompagnement dans l'emploi)">CAE</option>
         <option value="CIE( Contrat initiative emploi)">CIE </option>
         <option value="Contrat de professionnalisation">Contrat de professionnalisation</option>
         <option value="Contrat d'apprentissage">Contrat d'apprentissage</option>

           </select>
           </div>


            <label style="color : #E62E04;">debut_mission<span class='text-danger'> *</span></label>
            <input type="date" class="form-control" name="debut_mission" required value="{{ old('debut_mission') }}">
        </div>
        <div class="form-group col-md-6">
            <label style="color : #E62E04;">procedure<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="procedure" required value="{{ old('procedure') }}">
        </div>



        
           
      <div class="text-center">
        <button type="submit"   class="btn btn-info form-group font-weight-bold btn-lg"> Déposer l'offre</button>
      </div>

      <div class="text-center">
        <a  href="employeur">  return</a>
      </div>
      
    </div>
  </div>

  
</form>
</div>
</div>
</div>



@endsection
