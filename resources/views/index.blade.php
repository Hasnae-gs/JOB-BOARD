<!DOCTYPE html>
<html lang="en">
  <head>
  <title>job | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-4	">
		<figure><img src="{{asset('reg/logo.png')}}" alt="sing up image"></figure>	  

          <a class="navbar-brand" href="index.php"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="url('/')" class="nav-link">Accueil</a></li>
              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Emplois
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href={{url('/searchofrg')}}>Offres en region</a>
          <a class="dropdown-item" href={{url('/search')}}>Recherche avancée</a>
         
      </li>


	          <li class="nav-item"><a href={{url('/contact')}} class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="{{url('login/candidat')}}" class="nav-link">Trouver Offre</a></li>
			  <li class="nav-item cta "><a href="{{ url('login/employeur')}}" class="nav-link">Poster Offre </a></li>


	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    @yield('content')
    <div class="hero-wrap img" style="background-image: url(images/bg_1.jpg);">
      <div class="overlay"></div>
      <div class="container">
      	<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
	        <div class="col-md-10 d-flex align-items-center ftco-animate">
	        	<div class="text text-center pt-5 mt-md-5">
              <p> Trouvez un Job, emploi, opportunités de carriére </p>
	        	<h1> Le Moyen le Plus Simple d'Obtenir Votre Nouvel Emploi</h1>
							<div class="ftco-counter ftco-no-pt ftco-no-pb">
			        	<div class="row">
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-worldwide"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="{{$nbrc}}"></strong>
					                <span>Candidat</span>
				                </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-visitor"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="{{$nbre}}"></strong>
					                <span>Entreprise</span>
					              </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-resume"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="{{$nbro}}"></strong>
					                <span>Offre
</span>
					              </div>
				              </div>
				            </div>
				          </div>
				        </div>
              </div>
              <br> <br> <br>
							<p> Au Maroc, dans les domaines public et privé, des politiques favorisent l’emploi des personnes
                 handicapées. Malgré les mécanismes d’emploi direct et d’emploi indirect des personnes handicapées, il demeure des freins à l’embauche. La mise en place de divers moyens en faveur 
                de l’emploi des personnes handicapées bénéficie d’une reconnaissance internationale.</p>
	          </div>
	        </div>
	    	</div>
      </div>
    </div>

    		

	<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center mb-5">
         <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-0">Top Categories</h2>
         </div>
      </div>
      <div class="row">
         @foreach($data as $ac)  
         <div class="col-xs-6 col-sm-4">
            <ul class="category text-center">
               <li><a href="#">{{ $ac->domaine }} <br>******************</a></li>
            </ul>
         </div>
         @endforeach
      </div>
      
</section>
<section class="ftco-section bg-light">
   <div class="container">
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
            @foreach(App\Employeur::all() as $req)
             <div class="">
                

             <a href="{{url('plusentreprises',$req->id)}}" class="company-wrap">
                   <img src="{{$req->logo}}" alt="" class="img-fluid" alt="Colorlib Free Template">
                      <br>
                   @endforeach
                <br> <br>
             </div>
          </div>
         
        </div>
		 </section>

	
		     

	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Excellence Hub</h2>
              <p>Site de rectrutement <br> des personnes en <br> situation d'handicape.</p>
              
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Employeur</h2>
              <p> Selon la loi, à ce jour, chaque entreprise de plus de 20 salariés est tenue d'embaucher des travailleurs handicapés à hauteur de 6% de leurs effectifs.
               Veuillez : </p>
              <ul class="list-unstyled">
                <li><a href="{{ url('login/employeur')}}" class="pb-1 d-block">Poster Offre</a></li>

                
              </ul>
              
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Candidat</h2>
              <p> Trouvez vos opportunités d'emploi pour intégrer une entreprise. Veuillez :</p>
              <ul class="list-unstyled">
                <li><a  href="{{url('login/candidat')}}" class="pb-1 d-block">Trouver Offre</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">GROUPE AMH</h2>
             <p> Le groupe <a href="https://groupeamh.org/"> AMH </a> ou anciennement <span>Amicale marocaine des handicapés</span>, est un groupement associatif
                d'entrepreneuriat social marocain .</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">DES QUESTION ?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Groupe AMH , 77 Boulevard 9 Avril, Casablanca</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+05229-85051</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Cantact@Groupeamh.org</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
