@extends('Candidat.layouts')
@section('content')
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="author" content="colorlib.com">
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
   <link href="{{asset('sear/css/main.css')}}" rel="stylesheet" />
</head>
<!-- En tête  --> 
<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
         <div class="col-md-12 ftco-animate text-center mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{url('/jobpost')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Offres en Region</span></p>
            <h1 class="mb-3 bread">Recherche Simple des offres en région  </h1>
         </div>
      </div>
   </div>
</div>
<section class="ftco-section bg-light">
   <div class="container">
   <div class="row">
      <div class="col-md-12 col-lg-8 mb-5">
         <p> Par défaut, l’onglet recherche propose une recherche simple des offres par région . Elle permet de chercher en même temps  :
            le type de contrat et la date de dépot de l'offre 
         </p>
         <div class="s010">
            <form method="get" action="{{route('searchofrg')}}">
               <div class="inner-form">
                  <div class="advance-search">
                     <div class="row">
                        <div class="input-field">
                           <div class="input-select">
                              <select type="text" name="search" placeholder="region">
                                 <option value="">indeferent</option>
                                 <option value="Casablanca-Settat">Casablanca-Settat</option>
                                 <option value="Rabat-Sale-Kenitra">Rabat-Salé-Kénitra</option>
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
                        </div>
                        <div class="row third">
                           <div class="input-field">
                              <button type="submit" class="btn-search"><span ></span>chercher</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <table class="table table-bordered table-hover table-sm ">
            <thead>
               <tr class="table-danger">
                  <td> Poste </td>
                  <td> Region </td>
                  <td> Date   </td>
               </tr>
            </thead>
            <tbody>
               @foreach($data as $ac)
               <tr>
                  <td>
                     <div class="one-third mb-4 mb-md-0">
                        <div class="job-post-item-header align-items-center">
                           <span class="subadge">({{ $ac->type_contrat }})</span>
                           <u>
                              <h5><a href="{{ route('plusoff',$ac->id_offre)}}">{{ $ac->descriptif_poste }}</a></h5>
                           </u>
                  </td>
                  <td>				  
                  <p class="media-heading">{{ $ac->region }}</p>
                  </td>
                  <td>				  
                  <p class="media-heading">{{ $ac->date_depot }}</p>
                  </td>
               </tr>
                  @endforeach
            </tbody>
         </table>
         </div>

         <div class="col-lg-3 sidebar">
            <div class="row justify-content-center pb-3">
              <div class="col-md-12 heading-section ftco-animate">
              </div>
            </div>
            <div class="sidebar-box ftco-animate">
               <div class="">
                  @foreach(App\Employeur::all() as $req)

                  <a href="#" class="company-wrap">
                     <img src="{{$req->logo}}" alt="" class="img-fluid" alt="Colorlib Free Template">
                        <br>
                     @endforeach
                  <br> <br>
               </div>
            </div>
           
          </div>
         </div>
        
      </div>



      
   </div>
</div>
</section>
</body>
</html>
<script src="{{asset('sear/js/extention/choices.js')}}"></script>
<script>
   const customSelects = document.querySelectorAll("select");
   const deleteBtn = document.getElementById('delete')
   const choices = new Choices('select',
   {
     searchEnabled: false,
     itemSelectText: '',
     removeItemButton: true,
   });
   for (let i = 0; i < customSelects.length; i++)
   {
     customSelects[i].addEventListener('addItem', function(event)
     {
       if (event.detail.value)
       {
         let parent = this.parentNode.parentNode
         parent.classList.add('valid')
         parent.classList.remove('invalid')
       }
       else
       {
         let parent = this.parentNode.parentNode
         parent.classList.add('invalid')
         parent.classList.remove('valid')
       }
     }, false);
   }
   deleteBtn.addEventListener("click", function(e)
   {
     e.preventDefault()
     const deleteAll = document.querySelectorAll('.choices__button')
     for (let i = 0; i < deleteAll.length; i++)
     {
       deleteAll[i].click();
     }
   });
   
</script>
@endsection