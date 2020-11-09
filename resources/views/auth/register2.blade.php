@extends('indx')
@section('content')


   

<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{ url('/')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>S'inscrire</span></p>
            
           <h1 class="mb-3 bread" >INSCRIPTION CANDIDAT</h1>
          </div>
        </div>
      </div>
    </div>
<br> <br>
 <!-- Font Icon -->
 <link rel="stylesheet" href="{{asset('reg/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('reg/vendor/nouislider/nouislider.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('reg/css/style.css')}}">
             <div class="main">

              <div class="container">
                 <div class="signup-content">
                     <div class="signup-img">
                         <!-- <img src="{{asset('reg/images/form-img.jpg')}}" alt=""> -->
                         <div class="signup-img-content">
                         
                        </div>
                    </div>
                <div class="signup-form">


                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                    @else
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                    @endisset
                        @csrf
                        <label for="name" class="required"> Champs obligatoires </label>
                               <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="name" class="required">{{ __('Name') }}</label>
                                    <input tyid="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">{{ __('prenom') }}</label>
                                    <input id="prenom" type="text" class=" @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus />
                                     @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                                 <div class="form-input">
                                    <label for="email" class="required">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input">
                                    <label for="password" class="required">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                              <div class="form-input">
                                    <label for="password-confirm" class="required">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password"/>
                                </div>

                                  <div class="form-input">
                                    <label for="civilite" class="required">{{ __('civilite') }}</label>
                                    <input id="civilite" type="text" class="@error('civilite') is-invalid @enderror" name="civilite" value="{{ old('civilite') }}" required autocomplete="civilite" autofocus>

                                @error('civilite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div> 


                                  <div class="form-input">
                                    <label for="cin" class="required">{{ __('cin') }}</label>
                                   <input id="cin" type="text" class="@error('cin') is-invalid @enderror" name="cin" value="{{ old('cin') }}" required autocomplete="cin" autofocus>

                                @error('cin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input">
                                    <label for="ddn" class="required">{{ __('ddn') }}</label>
                                   <input id="ddn" type="date" class="@error('ddn') is-invalid @enderror" name="ddn" value="{{ old('ddn') }}" required autocomplete="ddn" autofocus>

                                @error('ddn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input">
                                    <label for="adresse" class="required">{{ __('adresse') }}</label>
                                   <input id="adresse" type="text" class="@error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            
                         <div class="form-group">
                             <div class="form-input">
                                    <label for="ville" class="required">{{ __('ville') }}</label>
                                    <input id="ville" type="text" class=" @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>

                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                  <div class="form-input">
                                    <label for="region" class="required">{{ __('region') }}</label>
                                   <select id="region" type="text" class=" @error('region') is-invalid @enderror" name="region" value="{{ old('region') }}" required autocomplete="region" autofocus>
                                   <option value="">region</option>
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
                                @error('region')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                            <div class="form-input">
                                    <label for="type_handicape" class="required">{{ __('type_handicape') }}</label>
                                   <select id="type_handicape" type="text" class=" @error('type_handicape') is-invalid @enderror" name="type_handicape" value="{{ old('type_handicape') }}" required autocomplete="type_handicape" autofocus>
                                   <option value="">type_handicape</option>

                                   <option value="handicap moteur">Handicap moteur</option>
                                    <option value="handicap auditif">handicap auditif</option>
                                    <option value="handicap visuel">handicap visuel</option>
                                    <option value="handicap Psychique">handicap Psychique</option>
                                    <option value="autre">autre</option>
                                </select>
                                @error('type_handicape')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input">
                                    <label for="tele" class="required">{{ __('tele') }}</label>
                                   <input id="tele" type="number" class=" @error('tele') is-invalid @enderror" name="tele" value="{{ old('tele') }}" required autocomplete="tele" autofocus>

                                @error('tele')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                 <div class="form-input">
                                    <label for="mobilite_geographique" class="required">{{ __('mobilite_geographique') }}</label>
                                   <select id="mobilite_geographique" type="text" class=" @error('mobilite_geographique') is-invalid @enderror" name="mobilite_geographique" value="{{ old('mobilite_geographique') }}" required autocomplete="mobilite_geographique" autofocus>
                                   <option value="nationale">nationale</option>
                                    <option value="régionale">régionale</option>
                                </select>
                                @error('mobilite_geographique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                  <div class="form-input">
                                    <label for="photo" class="required">{{ __('photo') }}</label>
                                   <input id="photo" type="file" class=" @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                                <div class="form-input" class="required">
                                    <label for="competences_informatiques">{{ __('competences_informatiques') }}</label>
                                    <input id="competences_informatiques" type="text" class=" @error('competences_informatiques') is-invalid @enderror" name="competences_informatiques" value="{{ old('competences_informatiques') }}" required autocomplete="competences_informatiques" autofocus>

                                @error('competences_informatiques')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input">
                                    <label for="CV" class="required">{{ __('CV') }}</label>
                                   <input id="CV" type="file" class=" @error('CV') is-invalid @enderror" name="CV" value="{{ old('CV') }}" required autocomplete="CV" autofocus>

                                @error('CV')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input">
                                    <label for="lettre_motivation" class="required">{{ __('lettre_motivation') }}</label>
                                   <input id="lettre_motivation" type="file" class=" @error('lettre_motivation') is-invalid @enderror" name="lettre_motivation" value="{{ old('lettre_motivation') }}" required autocomplete="lettre_motivation" autofocus>

                                @error('lettre_motivation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input" class="required">
                                    <label for="description">{{ __('description') }}</label>
                                     <input id="description" type="text" class=" @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-input" class="required">
                                    <label for="domaine">{{ __('domaine') }}</label>
                                     <input id="domaine" type="text" class=" @error('domaine') is-invalid @enderror" name="domaine" value="{{ old('domaine') }}" required autocomplete="domaine" autofocus>

                                @error('domaine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input">
                                    <label for="nad" class="required">{{ __('nad') }}</label>
                                    <select id="nad" type="text" class=" @error('nad') is-invalid @enderror" name="nad" value="{{ old('nad') }}" required autocomplete="nad" autofocus> 
                                    <option value="">Nombre d’années d’expérience</option> 

                                        <option value="Debutant">Débutant</option> 
                                        <option value="Entre 1 et 3 ans d'expérience">Entre 1 et 3 ans d'expérience</option>
                                        <option value="Entre 3 et 5 ans d'expérience"> Entre 3 et 5 ans d'expérience</option>
                                        <option value="Entre 5 et 10 ans d'expérience"> Entre 5 et 10 ans d'expérience</option>
                                        <option value="Plus de 10 ans d'expérience">Plus de 10 ans d'expérience</option>
                                        </select>
                                @error('nad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                
                               

                         <div class="form-submit">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                            </button>                            
                                <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>


                      

                    </form>
                </div>
            </div>
        </div>
    </div>
    <p style ="color:black;"> Les informations nominatives recueillies dans le cadre de la création de votre compte sont traitées conformément à la loi du 6 janvier 1978 'Informatique et Liberté'. En application de l'article 27 de cette loi, vous disposez d'un droit d'accès, de rectification et de retrait des données vous concernant en nous contactant.</p>

</div>


<!-- JS -->
<script src="{{asset('reg/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('reg/vendor/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('reg/vendor/wnumb/wNumb.js')}}"></script>
<script src="{{asset('reg/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('reg/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
<script src="{{asset('reg/js/main.js')}}"></script> 

@endsection