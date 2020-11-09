@extends('employeur.layouts')
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
         <div class="col-md-12 ftco-animate text-center mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{url('/employeur')}}">Espace Employeur <i class="ion-ios-arrow-forward"></i></a></span> <span>Supprimer Compte</span></p>
            @foreach($job as $req)
            <h1 class="mb-3 bread">{{ $req->name}}  {{ $req->prenom }}</h1>
            <a class='btn btn-dark' href="modifier"> Modifier votre compte</a>
            <a class='btn' style='background-color :  #E62E04; color : white;' href="supprimer_employeur"> supprimer votre compte</a>
            @endforeach
         </div>
      </div>
   </div>
</div>
@endsection