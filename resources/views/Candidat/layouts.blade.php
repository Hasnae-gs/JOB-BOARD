<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Handicap - Job </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('inv/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('inv/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('inv/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('inv/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('inv/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('inv/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('inv/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('inv/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('inv/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('inv/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('inv/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('inv/css/style.css')}}">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-4	">
	      <!-- <a class="navbar-brand" href="index.html">Skillhunt</a> -->
          <figure><img src="{{asset('reg/logo.png')}}" alt="sing up image"></figure>	  
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="{{ url('/jobpost')}}" class="nav-link">Accueil</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Emplois</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="{{url('searchofrg')}}">Offres en region</a>
                        <a class="dropdown-item" href="{{route('serchofr')}}">Recherche avancée</a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Services/Conseils</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="{{url('/juridique')}}">Service Juridique</a>
                        <a class="dropdown-item" href="{{url('/conseil')}}">Bien Rediger Votre CV</a>
                    </div>
                </li>
                
                <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>




                <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Mon Compte<span class="caret"></span> </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


               <a class="dropdown-item" href="{{url('/plusinfo')}}">
               Profil
            </a>
            <a class="dropdown-item" href="{{url('/candidaturs')}}">
               Suivi Candidatures
           </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Se déconnecter') }}
            </a>
            

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>


           

        </div>
    </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    

		@yield('content')
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
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('/inv/js/jquery.min.js')}}"></script>
  <script src="{{asset('inv/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('inv/js/popper.min.js')}}"></script>
  <script src="{{asset('inv/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('inv/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('inv/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('inv/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('inv/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('inv/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('inv/js/aos.js')}}"></script>
  <script src="{{asset('inv/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('inv/js/scrollax.min.js')}}"></script>
  <script src="{{asset('inv/js/google-map.js')}}"></script>
  <script src="{{asset('inv/js/main.js')}}"></script>
    
  </body>
</html>