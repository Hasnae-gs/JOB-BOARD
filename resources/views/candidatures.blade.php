@extends('employeur.layouts')

@section('content')

<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{url('/employeur')}}">Espace Employeur <i class="ion-ios-arrow-forward"></i></a></span> <span>Candidature</span></p>
            <h1 class="mb-3 bread">Suivi de candidature</h1>
          </div>
        </div>
      </div>
</div>


<section class="ftco-section bg-light">
      <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">    
            <table class="table table-bordered table-hover table-sm">
              <thead>
              <tr>
                  <th scope="col">Nom</th>
                  <th scope="col">Email</th>  
                  <th scope="col">Poste</th> 
                  <th scope="col">Type Handicape</th> 


              </tr>
              </thead>
              <tbody>
                @foreach($data as $req)
                <tr>
                  <th><a href="{{ route('pluscandidat',$req->id)}}">{{ $req->name}}</a></th>
                  <th> {{ $req->email}}</th>
                  <th> {{ $req->descriptif_poste}}</th>
                  <th> {{ $req->type_handicape}}</th>


                  <th><a class="btn btn-success" href="{{route('accepter',['idd'=>$req->id_demande])}}">Accepter</a></th>
                  <th><a class="btn btn-danger" href="{{route('refuser',['idd'=>$req->id_demande])}}">Refuser</a></th>

                </tr>
                @endforeach
              </tbody>
            </table>
            </div>

            <div class="col-lg-4">
              <div class="p-4 mb-3 bg-white">
                <h3 class="h5 text-black mb-3">Contact Info</h3>
                <p class="mb-0 font-weight-bold">Address</p>
                <p class="mb-4">Groupe AMH , 77 Boulevard 9 Avril, Casablanca</p>

                <p class="mb-0 font-weight-bold">Phone</p>
                <p class="mb-4"><a href="#">+05229-85051</a></p>

                <p class="mb-0 font-weight-bold">Email Address</p>
                <p class="mb-0"><a href="#"><span class="__cf_email__" data-cfemail="671e081215020a060e0b2703080a060e094904080a">Contact@Groupeamh.org</span></a></p>

              </div>
              
              <div class="p-4 mb-3 bg-white">
                <h3 class="h5 text-black mb-3">Groupe AMH </h3>
                <p>Fondé en 1992 et reconnu d’utilité publique, notre groupement associatif d’entrepreneuriat social intervient dans les domaines de la santé, de l’autonomie, de l’éducation et de la formation.</p>
                <p><a href="https://groupeamh.org/" class="btn btn-primary  py-2 px-4">Plus info</a></p>
              </div>

              <div class="p-4 mb-3 bg-white">
                <img src="{{asset('images/handicap-2-.jpg')}}"  width="100%" >
              </div>
              <div class="p-4 mb-3 bg-white">

                <img src="{{asset('images/handicap-1-.jpg')}}"  width="100%" >
              </div>
              <div class="p-4 mb-3 bg-white">

                <img src="{{asset('images/handicap-3-.jpg')}}"  width="100%" >

              </div>
        </div>






            </div>
          </div>
        </div>






        
    </section>
@endsection