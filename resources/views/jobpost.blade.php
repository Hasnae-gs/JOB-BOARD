@extends('Candidat.layouts')
@section('content')
<section>
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
      <p> Excellence Hub a été créé pour vous aider à trouver un emploi. Il y a des milliers d’offres en ligne actuellement et de nombreuses offres ouvertes aux travailleurs handicapés sont ajoutées en permanence. Vous êtes demandeur d’emploi ou vous êtes en poste et souhaitez changer de mission, votre carrière professionnelle évolue à partir d'ici.

         Que vous soyez avec un handicap moteur, auditif, ou mental, notre mission reste la même, mettre tout en oeuvre pour que handicap rime avec emploi. Toutes les offres de notre portail sont ouvertes aux personnes handicapées. A compétences égales, les entreprises handi-engagées qui proposent les offres d’emploi sur notre portail privilégierons une personne handicapé. </p>
      <div class="row">
         <div class="col-lg-9 pr-lg-5">
            <div class="row justify-content-center pb-3">
               <div class="col-md-12 heading-section ftco-animate">
                  <span class="subheading">Emplois récemment ajoutées.</span>
                  <h2 class="mb-4">Dernieres Postes Ajoutées cette semaine </h2>
               </div>
            </div>
            <div class="row">
               @foreach($job as $ac)
               <div class="col-md-12 ftco-animate">
                  <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                     <div class="one-third mb-4 mb-md-0">
                        <div class="job-post-item-header align-items-center">
                           <span class="subadge">[{{ $ac->type_contrat }}]</span>
                           <h2 class="mr-3 text-black"> <a href="{{ route('plusoff',$ac->id_offre)}}">{{ $ac->descriptif_poste }} </a></h2>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                           <div class="mr-3"><span class="icon-layers"></span>  <a href="#">{{ $ac->domaine }}</a></div>
                           <div><span class="icon-my_location"></span> <span>{{ $ac->region }}</span></div>
                        </div>
                     </div>
                     <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                        <div>
                           <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                           <span class="icon-heart"></span>
                           </a>
                        </div>
                        <a href="{{ route('plusoff',$ac->id_offre)}}" class="btn btn-primary py-2">POSTULER</a>
                     </div>
                  </div>
               </div>
               <!-- end -->
               @endforeach
            </div>
         </div>


         <div class="col-lg-3 sidebar">
            <div class="row justify-content-center pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <h2 class="mb-4">Top Recruitments</h2>
              </div>
            </div>
            <div class="sidebar-box ftco-animate">
               <div class="">
                  @foreach(App\Employeur::all() as $req)

               <a href="{{url('plusentreprises',$req->id)}}" class="company-wrap">
                     <img src="{{$req->logo}}" alt="" class="img-fluid" alt="Colorlib Free Template">
                        <br>
                     @endforeach
                  <br> <br>
               </div>
            </div>
           
          </div>
      </div>
   </div>
</section>





















