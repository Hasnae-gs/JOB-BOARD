@extends('Candidat.layouts')
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
         <div class="col-md-12 ftco-animate text-center mb-5">
            <h1 class="mb-3 bread">Espace Candidat</h1>
         </div>
      </div>
   </div>
</div>
<section class="ftco-section bg-light">
   <div class="container">
      <div class="row">
         <p> Le tableau ci-dessus vous permet de visualizer le suivi de candidature pour {{$nb}} offres : </p>
         <table class="table table-bordered table-hover table-sm">
            <thead>
               <tr >
                  <th scope="col" class="table-info">NOM</th>
                  <th scope="col" class="table-info">DOMAINE</th>
                  <th scope="col" class="table-info">TYPE D'ENTREPRISE</th>
                  <th scope="col" class="table-info">VILLE</th>
                  <th scope="col" class="table-info">ETAT</th>
               </tr>
            </thead>
            <tbody>
               @foreach($data as $req)
               <tr >
                  <th> {{ $req->name}}</th>
                  <th> {{ $req->domaine}}</th>
                  <th> {{ $req->type_entreprise}}</th>
                  <th> {{ $req->ville}}</th>
                  <th> {{ $req->etat}}</th>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</section>