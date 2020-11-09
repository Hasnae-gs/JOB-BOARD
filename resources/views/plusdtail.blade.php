@extends('offres.layouts')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
@section('content')


<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
     <div class="row no-gutters slider-text align-items-end justify-content-start">
       <div class="col-md-12 ftco-animate text-center mb-5">
          <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{url('/employeur')}}">Espace Employeur <i class="ion-ios-arrow-forward"></i></a></span> <span>Suivi candidature</span></p>
         <h1 class="mb-3 bread">Détails du Candidat </h1>
       </div>
     </div>
   </div>
</div>


<section class="ftco-section bg-light">
<div class="container">
   <div class="row">
      <div class="col-md-12 col-lg-8 mb-5">
         <style type="text/css">
            .bar
            {
            width:770px;
            height :15px;
            color: rgb(510, 51, 51);
            font-weight:bold ;
            background-color:#211861;
            }
            .tab
            {
            width:770px;
            height :10px;
            font-size: 10pt;
            color: rgb(51, 51, 51);
            font-weight:bold ;
            }
            .donee
            {
            color: rgb(36, 64, 97);
            font-weight :bold ;
            text-align :left ;
            vertical-align :top ;
            }
            .text
            {
            color: black; 
            font-family:Verdana ;
            font-weight :normal; 
            text-align :left ;
            vertical-align :top ;
            }
            .disin
            {
            color: rgb(51, 51, 51);
            font-family :Times New Roman;
            width :20px;
            }
         </style>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <table align="center">
                     <tr>
                        <td align="center">
                           @foreach($data as $ac)
                           <img src="{{$ac->photo}}" style="width:20%">	 
                           
                           @endforeach 
                        </td>
                     </tr>
                  </table>
                  <table align="center">
                     <tr>
                        @foreach($data as $ac)
                        <td class="text">{{ $ac->description }}</td>
                        @endforeach

                     </tr>

                  </table>
                  <br>

                  <div class="panel panel-primary">
                     <div class="panel-heading">
                        <h3  class="panel-title" > Etat Civil :  </h3>
                     </div>
                     <div class="panel-body">
                        <table align="center" class="tab">
                           @foreach($data as $ac)
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Nom : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->name }}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Prénom : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->prenom }}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Date de Naissance : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->ddn }}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Adresse :</h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->adresse }}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Téléphone :</h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->tele }}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Email :</h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->email }}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Type d'handicape :</h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->type_handicape }}</p>
                              </td>
                           </tr>
                           @endforeach
                        </table>
                     </div>
                  </div>
                  <div class="panel panel-primary">
                     <div class="panel-heading">
                        <h3  class="panel-title" > Formation :  </h3>
                     </div>
                     <div class="panel-body">
                        <table align="center" class="tab">
                           @foreach($j as $ac)
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Intitule : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->intitule}}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Niveau : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->niveau}}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Etablissement : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->etablissement}}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Date : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->date}}</p>
                              </td>
                           </tr>
                           @endforeach
                        </table>
                     </div>
                  </div>
                  <div class="panel panel-primary">
                     <div class="panel-heading">
                        <h3  class="panel-title" > Experience :  </h3>
                     </div>
                     <div class="panel-body">
                        <table align="center" class="tab">
                           @foreach($jb as $ac)
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Poste : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->poste}}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Domaine : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->domaine}}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Entreprise  : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->entreprise}}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Date : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->date}}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Type de contrat  : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->type_contrat}}</p>
                              </td>
                           </tr>
                           @endforeach
                        </table>
                     </div>
                  </div>
                  <div class="panel panel-primary">
                     <div class="panel-heading">
                        <h3  class="panel-title" > Langues  :  </h3>
                     </div>
                     <div class="panel-body">
                        <table align="center" class="tab">
                           @foreach($job as $ac)                            
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Langue  : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->Langue}}</p>
                              </td>
                           </tr>
                           <tr>
                              <td style="width:400px;" class="donee">
                                 <h3>Niveau  : </h3>
                              </td>
                              <td style="width:400px;" class="donee">
                                 <p class="media-heading">{{ $ac->niveau}}</p>
                              </td>
                           </tr>
                           @endforeach
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="p-4 mb-3 bg-white">
         @foreach($data as $ac)

            <h3> <strong> Documents necessaire :  </strong></h3>
           
            <button type="button" class="btn btn-info btn-lg btn-block" >
            <a href="{{$ac->CV}}" class="stretched-link text-light"> 
                  <strong> CV      </strong>    </a> </button>
            
           
            <button type="button" class="btn btn-danger btn-lg btn-block">
              <strong>LETTRE DE MOTIVATION</strong> <a href="{{$ac->lettre_motivation}}" class="stretched-link text-light"> 
            </button>
            @endforeach
         </div>
         <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Groupe AMH </h3>
            <p style="color:black;">Fondé en 1992 et reconnu d’utilité publique, notre groupement associatif d’entrepreneuriat social intervient dans les domaines de la santé, de l’autonomie, de l’éducation et de la formation.</p>
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
</section>
@endsection