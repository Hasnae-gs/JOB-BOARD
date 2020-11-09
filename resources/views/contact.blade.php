@extends('indx')
@section('content')


 
<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread">Contactez - nous </h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>



          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Addresse:</span> Groupe AMH , 77 Boulevard 9 Avril, Casablanca</p>
          </div>
          <div class="col-md-3">
            <p><span>Téléphone:</span> <a href="tel://+ (212)5229-85051">+05229-85051</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Adresse Electronique:</span> <a href="mailto:Contact@Groupeamh.org">Contact@Groupeamh.org</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Site Web</span> <a href="https://groupeamh.org/">https://groupeamh.org/</a></p>
          </div>
        </div>
        <div class="row block-9">
            <div class="col-md-5">
              <div style="width: 100%">
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=77%20Boulevard%209%20Avril,%20Casablanca%2020000+(groupe%20amh)&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm">Road Trip Planner</a></div>             </div>
          <div class="col-md-6 ">
            <form action="{{ url( '/contact' ) }}"  method="post" class="bg-white p-5 contact-form">
            @csrf
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nom" names="nom" id="nom">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" name="email" id="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Sujet" name="sujet" id="sujet">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message" id="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
