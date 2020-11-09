@extends('indx')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('log/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('log/css/style.css')}}">
</head>
<body>
<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{ url('/')}}">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Se connecter</span></p>
            <h1 class="mb-3 bread">Connexion Employeur</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="main">
    
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
               
                    <div class="signin-image">
                        <figure><img src="{{asset('log/images/signin-image.jpg')}}" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                    @isset($url)
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset

                        @csrf

                            <div class="form-group">
                               
                                <input type="email" name="email" id="email" class=" zmdi zmdi-account material-icons-name form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                
                                <input type="password" name="password" id="your_pass" placeholder="Password" class="zmdi zmdi-lock form-control @error('password') is-invalid @enderror" required autocomplete="current-password"/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                             <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input agree-term"" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label agree-term"" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            
                           

                       
                         <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary form-submit" names="singin" id="singin ">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ url('register/employeur') }}">
                                        <u>{{ __("s'inscrire") }}</u>
                                    </a>
                                @endif
                            </div>

                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{asset('log/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('log/js/main.js')}}"></script>
</body>


