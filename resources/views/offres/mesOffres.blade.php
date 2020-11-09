@extends('employeur.layouts')
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
         <div class="col-md-12 ftco-animate text-center mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{url('/employeur')}}">Espace Employeur <i class="ion-ios-arrow-forward"></i></a></span> <span>Offres</span></p>
            <h1 class="mb-3 bread">Offres en cours </h1>
         </div>
      </div>
   </div>
</div>


<section class="ftco-section contact-section bg-light">
   <div class="container">
   @if(session()->has('message'))
   <div class='container mb-2' style=" padding-top : 200px;" >
      <div class="card bg-info text-white shadow ">
         <div class="card-body">
            {{session()->get('message')}}
         </div>
      </div>
   </div>
   @endif

   <div class="container">
   <div class="card">
   <div class="card-body">
   <div class="d-flex bd-highlight mb-2 ml-2 mt-2" style="">
      <div class='p-2 flex-fill bd-highlight'>
         <a class='float-right btn'  style='background-color :  #E62E04; color : white;' href="add_offre">Créer une nouvelle offre</a>
      </div>
   </div>
   <div class="d-flex bd-highlight mb-4 ml-4 mt-4">
      <div class="row">
         @foreach($job as $ac)
         <div class="col-md-3">
            <div class="row p-4 flex-fill bd-highlight">
               <div class="m-3">
                  <h4 class="media-heading">{{ $ac->descriptif_poste }}</h4>
                  <p class="media-heading">({{ $ac->niveau_experience }})</p>
                  <a class='btn btn-dark' href="edit_offre/{{$ac->id_offre}}"> Modifier</a>
                  <a class='btn' style='background-color :  #E62E04; color : white;' href="supprimer_offre/{{$ac->id_offre}}"> supprimer</a>
                  </p>
                  <br/> <br/>
               </div>
            </div>
         </div>
         @endforeach
      </div>
     
    </div>
  </div>
</div>
</div>
</div>
</section>
</div>
@endsection