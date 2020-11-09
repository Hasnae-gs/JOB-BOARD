<html lang="en">
  <head>
    <title>Skillhunt - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <section>

    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          
          </div>
        </div>
      </div>
    </div>
	</section>

	<section>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-4	">
	    
          <a class="navbar-brand" href="index.php"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	      <ul class="navbar-nav ml-auto">
	      <li class="nav-item active"><a href="index.html" class="nav-link">Accueil</a></li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Emplois
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="{{url('searchofrg')}}">Offres en region</a>
          <a class="dropdown-item" href="{{url('searchofrg')}}">Recherche avancée</a>
         
      </li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">le Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>


	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	</section>

    <br><br><br>

@section('content')
<section>
<form action="{{route('saveexperience')}}" method="post"  enctype="multipart/form-data" name="monform">
@csrf

  <div class="form-row">
       


        <div class="form-group col-md-6">
            <label style="color : #E62E04;">poste<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="poste">
        </div>
        
        <div class="form-group col-md-6">
            <label style="color : #E62E04;">domaine<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="domaine" >
        </div>

        <div class="form-group col-md-6">
            <label style="color : #E62E04;">entreprise<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="entreprise">
        </div>
        <div class="form-group col-md-6">
            <label style="color : #E62E04;">date<span class='text-danger'> *</span></label>
            <input type="date" class="form-control" name="date" >
        </div>



        <div class="form-group col-md-6">
            <label style="color : #E62E04;">type_contrat<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="type_contrat">
        </div>         
        <br><br>
      <div>
      <button type="submit" class="btn btn-info form-group font-weight-bold btn-lg"> ajouter experience</button>
      </div>
      <div class="text-center">
</form>
</section>

<br><br><br>




<section>
<form action="{{route('saveformation')}}" method="post"  enctype="multipart/form-data" name="monform">
@csrf
@if(session()->has('message'))
    <div class="text-danger">
        {{ session()->get('message') }} <br>
    </div>
@endif
  <div class="form-row">
       



        <div class="form-group col-md-6">
            <label style="color : #E62E04;">intitule<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="intitule" required value="{{ old('intitule') }}">
        </div>


        <div class="form-group col-md-6">
            <label style="color : #E62E04;">niveau<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="niveau" required value="{{ old('niveau') }}">
        </div>

        
        <div class="form-group col-md-6">
            <label style="color : #E62E04;">etablissement<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="etablissement" required value="{{ old('etablissement') }}">
        </div>

        <div class="form-group col-md-6">
            <label style="color : #E62E04;">date<span class='text-danger'> *</span></label>
            <input type="date" class="form-control" name="date" required value="{{ old('date') }}">
        </div>
        <br><br>
           
      <div class="text-center">
      <button type="submit" class="btn btn-info form-group font-weight-bold btn-lg"> ajouter formation</button>
      </div>
      <div class="text-center">
</form>
</section>

<br><br><br>



<section>

<form action="{{route('savelangue')}}" method="post"  enctype="multipart/form-data" name="monform">
@csrf
@if(session()->has('message'))
    <div class="text-danger">
        {{ session()->get('message') }} <br>
    </div>
@endif
  <div class="form-row">
       



        <div class="form-group col-md-6">
            <label style="color : #E62E04;">Langue<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="Langue" required value="{{ old('Langue') }}">
        </div>
        <div class="form-group col-md-6">
            <label style="color : #E62E04;">niveau<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="niveau" required value="{{ old('niveau') }}">
        </div>         
        <br><br>

      <div class="text-center">
      <button type="submit" class="btn btn-info form-group font-weight-bold btn-lg"> ajouter langue</button>
      </div>
      <div class="text-center">
</form>
</section>


<section>

projet
<form action="{{route('saveprojet')}}" method="post"  enctype="multipart/form-data" name="monform">
@csrf
@if(session()->has('message'))
    <div class="text-danger">
        {{ session()->get('message') }} <br>
    </div>
@endif
  <div class="form-row">
       



        <div class="form-group col-md-6">
            <label style="color : #E62E04;">intitule<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="intitule" required value="{{ old('intitule') }}">
        </div>
        <div class="form-group col-md-6">
            <label style="color : #E62E04;">domaine<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="domaine" required value="{{ old('domaine') }}">
        </div>   
        <div class="form-group col-md-6">
            <label style="color : #E62E04;">localisation<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="localisation" required value="{{ old('localisation') }}">
        </div>   
        <div class="form-group col-md-6">
            <label style="color : #E62E04;">description<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="description" required value="{{ old('description') }}">
        </div>  

        <div class="form-group col-md-6">
            <label style="color : #E62E04;">budget  dh<span class='text-danger'> *</span></label>
            <input type="number" class="form-control" name="budget" required value="{{ old('budget') }}">
        </div>  
        <div class="form-group col-md-6">
            <label style="color : #E62E04;">motivation<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="motivation" required value="{{ old('motivation') }}">
        </div>  
        <div class="form-group col-md-6">
            <label style="color : #E62E04;">delai_realisation<span class='text-danger'> *</span></label>
            <input type="text" class="form-control" name="delai_realisation" required value="{{ old('delai_realisation') }}">
        </div>         
        <br><br>

      <div class="text-center">
      <button type="submit" class="btn btn-info form-group font-weight-bold btn-lg"> ajouter projet</button>
      </div>
      <div class="text-center">
</form>
</section>