@extends('Candidat.layouts')
@section('content')

<div class="hero-wrap hero-wrap-2" style="background-image: url('inv/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
         <div class="col-md-12 ftco-animate text-center mb-5">
            <h1 class="mb-3 bread">Espace Candidat</h1>
         </div>
      </div>
   </div>
</div>

<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center mb-5">
         <div class="col-md-7 heading-section text-center ftco-animate">
         @foreach($data as $ac)  

            <h2 class="mb-0">{{ $ac->identifiant}}</h2>
            <img src="{{$ac->logo}}" alt="" class="img-fluid" alt="Colorlib Free Template">

            {{ $ac->description}}
            @endforeach

         </div>
      </div>
      
      </div>
      
</section>

<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 pr-lg-4">
						<div class="row">
							<div class="col-md-12 ftco-animate">
		            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
		              <div class="one-third mb-4 mb-md-0">
		               
                      <table class="table table-bordered table-hover table-sm ">
            <thead>
               <tr class="table-danger">
                  <td> Poste </td>
                  <td> Region </td>
                  <td> Date   </td>
               </tr>
            </thead>
            <tbody>
               @foreach($dt as $ac)
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
		            </div>
		          </div><!-- end -->
		        </div>
                </div>
		      </div>
              @foreach($data as $ac)

                <div class="col-lg-3 sidebar">


                <div class="sidebar-box bg-white p-4 ftco-animate">
		        	<h3 class="heading-sidebar">raison_sosial</h3>
                    {{ $ac->raison_sosial }}               
		        </div>

                <div class="sidebar-box bg-white p-4 ftco-animate">
		        	<h3 class="heading-sidebar">type_entreprise</h3>
                    {{ $ac->type_entreprise }}               

              
		        </div>

                <div class="sidebar-box bg-white p-4 ftco-animate">
		        	<h3 class="heading-sidebar"></h3>
                    {{ $ac->ville}}
                    {{ $ac->site}}
                    {{ $ac->tele}}
       

              
		        </div>

                <div class="sidebar-box bg-white p-4 ftco-animate">
		        	<h3 class="heading-sidebar">type_entreprise</h3>
                    {{ $ac->politique }}               

              
		        </div>

                </div>
                @endforeach
