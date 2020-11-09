@section('content')

<!DOCTYPE html>
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

            <div class="container pt-4">
            <h3 class="h5 text-black mb-3">les nouveaux CV</h3>
              
<table class="table table-bordered table-hover ">
  <thead>

<tr>
<th scope="col">name</th>


</tr>
  </thead>
  <tbody>
  @foreach($data as $req)
    <tr>
    <th><a href="{{ route('pluscandidatd',$req->id-condidat)}}">{{ $req->name}}</a></th>
		

     </tr>
     @endforeach
  </tbody>
</table>
</div>


          </div>
        </div>
      </div>
    </section>
		
	

  </body>
</html>