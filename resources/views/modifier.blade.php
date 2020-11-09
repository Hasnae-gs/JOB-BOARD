@extends('employeur.layouts')

@section('content')

    

<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{url('/employeur')}}">Espace Employeur <i class="ion-ios-arrow-forward"></i></a></span> <span>Profil</span></p>
            <h1 class="mb-3 bread">Modifier Profil </h1>
          </div>
        </div>
      </div>
</div>


<section class="ftco-section bg-light">

<div class=" " style="width : 100%; padding-top : 200px; padding-bottom : 20px;" >
<div class="card" style="width: 60rem; margin : 0 auto;">
<div class="card-body">
   <h3 class='text-center text-info' style="font-family: 'Brady Bunch Remastered',Georgia,'Times New Roman','DejaVu Serif',serif;">modifier votre profil Employeur </h3>
   <br>
   <form method="post" action="{{url('/update_info/')}}" class="form-horizontal" role="form">
      @csrf
      @if(session()->has('message'))
    <div class="text-danger">
        {{ session()->get('message') }} <br>
    </div>
@endif
            
      <div class="form-row">
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">name<span class='text-danger'> *</span></label>
            <input name="name" class="form-control" type="text" value="{{$employeurs->name}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">prenom<span class='text-danger'> *</span></label>
            <input name="prenom" class="form-control" type="text" value="{{$employeurs->prenom}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">email<span class='text-danger'> *</span></label>
            <input name="email" class="form-control" type="text" value="{{$employeurs->email}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">password<span class='text-danger'> *</span></label>
            <input name="password" class="form-control" type="text" value="{{$employeurs->password}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">identifiant<span class='text-danger'> *</span></label>
            <input name="identifiant" class="form-control" type="text" value="{{$employeurs->identifiant}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">raison_sosial<span class='text-danger'> *</span></label>
            <input name="raison_sosial" class="form-control" type="text" value="{{$employeurs->raison_sosial}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">type_entreprise<span class='text-danger'> *</span></label>
            <input name="type_entreprise" class="form-control" type="text" value="{{$employeurs->type_entreprise}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">secteur<span class='text-danger'> *</span></label>
            <input name="secteur" class="form-control" type="text" value="{{$employeurs->secteur}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">tele<span class='text-danger'> *</span></label>
            <input name="tele" class="form-control" type="Number" value="{{$employeurs->tele}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">site<span class='text-danger'> *</span></label>
            <input name="site" class="form-control" type="text" value="{{$employeurs->site}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">ville<span class='text-danger'> *</span></label>
            <input name="ville" class="form-control" type="text" value="{{$employeurs->ville}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">poste<span class='text-danger'> *</span></label>
            <input name="poste" class="form-control" type="text" value="{{$employeurs->poste}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">coordonnees<span class='text-danger'> *</span></label>
            <input name="coordonnees" class="form-control" type="text" value="{{$employeurs->coordonnees}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">description<span class='text-danger'> *</span></label>
            <input name="description" class="form-control" type="text" value="{{$employeurs->description}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">politique<span class='text-danger'> *</span></label>
            <input name="politique" class="form-control" type="text" value="{{$employeurs->politique}}">
         </div>
         <div class="form-group col-md-6">
            <label style="color : #E62E04;">accessibilite<span class='text-danger'> *</span></label>
            <input name="accessibilite" class="form-control" type="text" value="{{$employeurs->accessibilite}}">
         </div>
         <div class="text-center">
            <button type="submit"class="btn btn-info form-group font-weight-bold btn-lg">valider</button>
         </div>
         <div class="text-center">
            <a  href='#'>  return</a>
         </div>
      </div>
</div>
</form>
</div>
</div>
</section>
@endsection