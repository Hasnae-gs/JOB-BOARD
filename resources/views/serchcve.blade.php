@extends('employeur.layouts')
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
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{url('/employeur')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>CVthéques</span></p>
            <h1 class="mb-3 bread">Recherche avancée des CV  </h1>
         </div>
      </div>
   </div>
</div>

<section class="ftco-section bg-light">
  <div class="container">
  <div class="row">
     <div class="col-md-12 col-lg-8 mb-5">
        <p> la recherche multicritére permet la recherche d'information permettant de combiner plusieurs
           termes de recherche dans un même champ ou dans plusieurs champs, et qui nécessite des opérateurs de recherche.
           Ce qui permet aux employeurs de trouver le profil du personnes adéquat :
        </p>
        <div class="s010">
          <form method="get" action="{{route('serchcve')}}">
            {{csrf_field()}}  
            <div class="inner-form">
              <div class="advance-search">
                <span class="desc">RECHERCHE AVANCEE</span>
                 <div class="row">

                  <div class="input-field">
                    <div class="input-select">
                      <select type="text" name="region" placeholder="region" id="region" class="form-control">
                        <option value="">region</option>
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
                    </div>
                  </div>

                  <div class="input-field">
                    <div class="input-select">
                      <select type="text"  name="ville" id="ville" placeholder="ville">
                        <option value="">ville</option>
                        @foreach(App\Candidat::all() as $req)
                        <option value="{{$req->ville}}">{{$req->ville}}</option>
                        @endforeach                     
                        </select>
                    </div>
                  </div>


                  <div class="input-field">
                    <div class="input-select">
                      <select type="text"  name="type_handicape" id="type_handicape" placeholder="type_handicape">
                        <option value="handicap moteur">Handicap moteur</option>
                          <option value="handicap auditif">handicap auditif</option>
                          <option value="handicap visuel">handicap visuel</option>
                          <option value="handicap Psychique">handicap Psychique</option>
                          <option value="autre">autre</option>
                        </select>
                    </div>
                  </div>
<br> <br>
                <div class="row second">

                  <div class="input-field">
                    <div class="input-select">
                      <select type="text"  name="nad" id="nad" placeholder="nad">
                        <option value="">Nombre d’années d’expérience</option>
                          @foreach(App\Candidat::all() as $req)
                          <option value="{{$req->nad}}">{{$req->nad}}</option>
                          @endforeach                 
                      </select>     
                    </div>
                  </div>

                  <div class="input-field">
                    <div class="input-select">
                      <select type="text"  name="domaine" id="domaine" placeholder="domaine">
                        <option value="">domaine</option>
                        @foreach(App\Candidat::all() as $req)
                        <option value="{{$req->domaine}}">{{$req->domaine}}</option>
                        @endforeach                                       
                      </select>
                    </div>
                  </div>

                
                </div>
                  <div class="row third">
                    <div class="input-field">
                      <div class="group-btn">
                        <button class="btn-delete" id="delete">RESET</button>
                       <button type="submit" class="btn-search"><span ></span>Chercher</button>
                      </div>
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
           <th > Nom </th>
           <th > Email </th>
           <th > Domaine   </th>
           <th> Niveau d'experience</th>
        </tr>
     </thead>
     <tbody>
      @foreach($data as $req)
      <tr>
          <td>
            <p><a href="{{ route('pluscandidat',$req->id)}}">{{ $req->name}}</a></p>
          </td>
           <td>				  
              <p class="media-heading">{{ $req->email}}</p>
           </td>
           <td>				  
              <p class="media-heading"> {{ $req->domaine}}</p>
           </td>
           <td>				  
            <p class="media-heading"> {{ $req->nad}}</p>
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

        <a href="{{url('plusentreprises',$req->id)}}" class="company-wrap">
          <img src="{{$req->logo}}"   alt="" class="img-fluid" alt="Colorlib Free Template">
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


                  

         

        
         
            

      

    

             











