@extends('indx')
@section('content')


   

<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{ url('/')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>S'inscrire</span></p>
            
           <h1 class="mb-3 bread" >INSCRIPTION EMPLOYEUR</h1>
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
                                    <label for="identifiant" class="required">{{ __('Identifiant') }}</label>
                                    <input id="identifiant" type="text" class=" @error('identifiant') is-invalid @enderror" name="identifiant" value="{{ old('identifiant') }}" required autocomplete="identifiant" autofocus>

                                @error('identifiant')
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
                                    <label for="raison_sosial" class="required">{{ __('raison_sosial') }}</label>
                                    <input id="raison_sosial" type="text" class="@error('raison_sosial') is-invalid @enderror" name="raison_sosial" value="{{ old('raison_sosial') }}" required autocomplete="raison_sosial" autofocus>

                                @error('raison_sosial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div> 


                                  <div class="form-input">
                                    <label for="type_entreprise" class="required">{{ __('type_entreprise') }}</label>
                                   <input id="type_entreprise" type="text" class="@error('type_entreprise') is-invalid @enderror" name="type_entreprise" value="{{ old('type_entreprise') }}" required autocomplete="type_entreprise" autofocus>

                                @error('type_entreprise')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input">
                                    <label for="secteur" class="required">{{ __('secteur') }}</label>
                                   <input id="secteur" type="text" class="@error('secteur') is-invalid @enderror" name="secteur" value="{{ old('secteur') }}" required autocomplete="secteur" autofocus>

                                @error('secteur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input">
                                    <label for="effectif" class="required">{{ __('effectif') }}</label>
                                   <input id="effectif" type="text" class="@error('effectif') is-invalid @enderror" name="effectif" value="{{ old('effectif') }}" required autocomplete="effectif" autofocus>

                                @error('effectif')
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
                                    <label for="tele" class="required">{{ __('tele') }}</label>
                                   <input id="tele" type="number" class=" @error('tele') is-invalid @enderror" name="tele" value="{{ old('tele') }}" required autocomplete="tele" autofocus>

                                @error('tele')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                                  <div class="form-input">
                                    <label for="site" class="required">{{ __('site') }}</label>
                                   <input id="site" type="text" class=" @error('site') is-invalid @enderror" name="site" value="{{ old('site') }}" required autocomplete="site" autofocus>

                                @error('site')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input">
                                    <label for="poste" class="required">{{ __('poste') }}</label>
                                   <input id="tele" type="text" class=" @error('poste') is-invalid @enderror" name="poste" value="{{ old('poste') }}" required autocomplete="poste" autofocus>

                                @error('poste')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                 <div class="form-input">
                                    <label for="coordonnees" class="required">{{ __('coordonnees') }}</label>
                                   <input id="coordonnees" type="number" class=" @error('coordonnees') is-invalid @enderror" name="coordonnees" value="{{ old('coordonnees') }}" required autocomplete="coordonnees" autofocus>

                                @error('coordonnees')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>



                                  <div class="form-input">
                                    <label for="logo" >{{ __('logo') }}</label>
                                   <input id="logo" type="file" class=" @error('logo') is-invalid @enderror" name="logo"  >

                                @error('logo')
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
                                    <label for="nbr_handicap">{{ __('nbr_handicap') }}</label>
                                     <input id="nbr_handicap" type="number" class=" @error('nbr_handicap') is-invalid @enderror" name="nbr_handicap" value="{{ old('nbr_handicap') }}" required autocomplete="nbr_handicap" autofocus>

                                @error('nbr_handicap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-input">
                                    <label for="politique" class="required">{{ __('politique') }}</label>
                                    <input id="politique" type="text" class=" @error('politique') is-invalid @enderror" name="politique" value="{{ old('politique') }}" required autocomplete="politique" autofocus>

                                @error('politique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                  <div class="form-input" class="required">
                                    <label for="accessibilite">{{ __('accessibilite') }}</label>
                                   <input id="accessibilite" type="text" class=" @error('accessibilite') is-invalid @enderror" name="accessibilite" value="{{ old('accessibilite') }}" required autocomplete="accessibilite" autofocus>

                                @error('accessibilite')
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
