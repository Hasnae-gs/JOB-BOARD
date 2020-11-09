@extends('offres.layouts')
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
         <div class="col-md-12 ftco-animate text-center mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{url('/employeur')}}">Espace Employeur <i class="ion-ios-arrow-forward"></i></a></span> <span>Mes postes</span></p>
            <h1 class="mb-3 bread">Modifier une Offre </h1>
         </div>
      </div>
   </div>
</div>

<div class=" " style="width : 100%; padding-top : 200px; padding-bottom : 20px;" >
   <div class="card" style="width: 60rem; margin : 0 auto;">
      <div class="card-body">

         <h3 class='text-center text-info' style="font-family: 'Brady Bunch Remastered',Georgia,'Times New Roman','DejaVu Serif',serif;">         <p> Veuillez modifier votre offre à l'aide du formulaire suivant : </p>
         </h3>
         <br>
         <form action="{{url('/update_offre/'.$offre->id_offre)}}" method="post"  enctype="multipart/form-data" name="monform">
            @csrf
            @if(session()->has('message'))
            <div class="text-danger">
               {{ session()->get('message') }} <br>
            </div>
            @endif
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">nref<span class='text-danger'> *</span></label>
                  <input name="nref" class="form-control" type="text" value="{{$offre->nref}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">date_depot<span class='text-danger'> *</span></label>
                  <input name="date_depot" class="form-control" type="date" value="{{$offre->date_depot}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">descriptif_poste<span class='text-danger'> *</span></label>
                  <input name="descriptif_poste" class="form-control" type="text" value="{{$offre->descriptif_poste}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">niveau_etude<span class='text-danger'> *</span></label>
                  <input name="niveau_etude" class="form-control" type="text" value="{{$offre->niveau_etude}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">domaine<span class='text-danger'> *</span></label>
                  <input name="domaine" class="form-control" type="text" value="{{$offre->domaine}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">niveau_experience<span class='text-danger'> *</span></label>
                  <input name="niveau_experience" class="form-control" type="text" value="{{$offre->niveau_experience}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">competence<span class='text-danger'> *</span></label>
                  <input name="competence" class="form-control" type="text" value="{{$offre->competence}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">qualite<span class='text-danger'> *</span></label>
                  <input name="qualite" class="form-control" type="text" value="{{$offre->qualite}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">langue<span class='text-danger'> *</span></label>
                  <input name="langue" class="form-control" type="text" value="{{$offre->langue}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">adresse<span class='text-danger'> *</span></label>
                  <input name="adresse" class="form-control" type="text" value="{{$offre->adresse}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">ville<span class='text-danger'> *</span></label>
                  <input name="ville" class="form-control" type="text" value="{{$offre->ville}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">region<span class='text-danger'> *</span></label>
                  <input name="region" class="form-control" type="text" value="{{$offre->region}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">poste_cadre<span class='text-danger'> *</span></label>
                  <input name="poste_cadre" class="form-control" type="text" value="{{$offre->poste_cadre}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">type_contrat<span class='text-danger'> *</span></label>
                  <input name="type_contrat" class="form-control" type="text" value="{{$offre->type_contrat}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">debut_mission<span class='text-danger'> *</span></label>
                  <input name="debut_mission" class="form-control" type="date" value="{{$offre->debut_mission}}">
               </div>
               <div class="form-group col-md-6">
                  <label style="color : #E62E04;">procedure<span class='text-danger'> *</span></label>
                  <input name="procedure" class="form-control" type="text" value="{{$offre->procedure}}">
               </div>
               <div class="text-center">
                  <button type="submit"   class="btn btn-info "> Déposer l'offre</button> 
               </div>
               <div class="text-center">
                  <button  onClick="javascript:history.go(-1)"> Retourner </button>
               </div>
            </div>
      </div>
      </form>
   </div>
</div>
@endsection