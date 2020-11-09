@extends('Candidat.layouts')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
       
          <div class="col-md-12 col-lg-8 mb-5">
			     

<form action="{{url('/save_demande')}}" method="post"  enctype="multipart/form-data" name="monform">

          @foreach($data as $ac)

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
                              <a class="btn btn-info btn-lg btn-block"  href="{{route('postule',['ido'=>$ac->id_offre])}}">POSTULER</a>

                  
                              <br>

                               <div class="panel panel-primary">
                                    <div class="panel-heading">
                                       <h3  class="panel-title" > Description de poste </h3>
                                    </div>
                                    <div class="panel-body">{{ $ac->descriptif_poste }} </div>
                              </div>

                              <div class="panel panel-primary">
                                    <div class="panel-heading">
                                       <h3  class="panel-title" > Profil Recherché:  </h3>
                                    </div>
                                    <div class="panel-body">
                                      



                                    <table align="center" class="tab">
                  <tr>
                     <td style="width:400px;" class="donee"><h3>niveau_etude:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->niveau_etude }}</p></td>
                  </tr>
                  <tr>
                     <td style="width:400px;" class="donee"><h3>domaine:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->domaine }}</p></td>
                  </tr> <tr>
                     <td style="width:400px;" class="donee"><h3>niveau_experience:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->niveau_experience }}</p></td>
                  </tr> <tr>
                     <td style="width:400px;" class="donee"><h3>competence:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->competence }}</p></td>
                  </tr> <tr>
                     <td style="width:400px;" class="donee"><h3>langue:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->langue }}</p></td>
                  </tr> <tr>
                     <td style="width:400px;" class="donee"><h3>poste_cadre:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->poste_cadre }}</p></td>
                  </tr> <tr>
                     <td style="width:400px;" class="donee"><h3>type_contrat:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->type_contrat }}</p></td>
                  </tr>
                  <tr>
                     <td style="width:400px;" class="donee"><h3>debut_mission:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->debut_mission }}</p></td>
                  </tr><tr>
                     <td style="width:400px;" class="donee"><h3>qualite:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->qualite }}</p></td>
                  </tr><tr>
                     <td style="width:400px;" class="donee"><h3>type_contrat:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->type_contrat }}</p></td>
                  </tr>
               </table>

                                    
                                    
                                    </div>
                              </div>





                              <div class="panel panel-primary">
                                    <div class="panel-heading">
                                       <h3  class="panel-title" > ENTREPRISE </h3>
                                    </div>
                                    <div class="panel-body">
                                    
                                    
                                    <table align="center" class="tab">
                  <tr>
                     <td style="width:400px;" class="donee"><h3>Nom de l'entreprise:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->identifiant}}</p></td>
                  </tr>
                  <tr>
                     <td style="width:400px;" class="donee"><h3>Site Web:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->site}}</p></td>
                  </tr><tr>
                     <td style="width:400px;" class="donee"><h3>Agence:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->secteur}}</p></td>
                  </tr><tr>
                     <td style="width:400px;" class="donee"><h3>adresse:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->adresse}}</p></td>
                  </tr><tr>
                     <td style="width:400px;" class="donee"><h3>Téléphone:</h3></td>
                     <td style="width:400px;" class="donee"><p class="media-heading">{{ $ac->tele}}</p></td>
                  </tr>
                  </table>
                                    
                                    
                                    
                                     </div>
                              </div>

                              @endforeach

               <a class="btn btn-info btn-lg btn-block"  href="{{route('postule',['ido'=>$ac->id_offre])}}">POSTULER</a>

                     
               </div>

            </div>	

         </div>

        
</form>



   

            </div>

            <div class="col-lg-4">
              <div class="p-4 mb-3 bg-white">
                <h3> <strong>Partager cette offre d'Emploi </strong></h3>
                <p class="mb-4">Si cette annonce ne vous correspond pas,
                 pensez à vos amis en la partageant en quelques secondes par email, facebook ou twitter :</p>

                 <button type="button" class="btn btn-primary btn-lg btn-block">
                     Partager sur Facebook
                  </button>

                  <!-- <button type="button" class="btn btn-secondary btn-lg btn-block">
                     Partager sur Twitter
                  </button> -->

                  <button type="button" class="btn btn-danger btn-lg btn-block">
                     Partager Par Email
                  </button>

                  <button type="button" class="btn btn-yt"><i class="fab fa-youtube pr-1"></i> Youtube</button>


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
  		