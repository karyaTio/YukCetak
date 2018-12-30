<!DOCTYPE html>
<html>
<head>
	<title>Job Desain</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<noscript><link rel="stylesheet" type="text/css" href="{{ asset('css/noJS.css') }}" /></noscript>
<body>

	<div id="header">
		@include('partials.navbar')
	</div>

	<div id="body">
		<section class="container-fluid mt-2">
		  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="{{ asset('image/custom-bahasa.jpg')}}" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{ asset('image/product.jpg')}}" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://via.placeholder.com/1000x200" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</section>

		<section class="container">
			<div class="row mt-2">
				<div class="col-md-12 ">
					<nav class="navbar navbar-light bg-light justify-content-between">
					  <a class="navbar-brand">Cari Job Desain</a>
					  <form class="form-inline float-left">
					    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					  </form>
					</nav>
				</div>
			</div>

			<div class="row mt-2">

				@foreach ($designjob as $design)
				<div class="card w-100 mt-1">
					<div class="card-body">
					  	<div class="row col-md-12" style="padding-left: 0px; padding-right: 0px">
					  		<div class="col-md-2" align="center" style="padding-left: 0px">
					  			<img src="https://via.placeholder.com/150x150">
					  		</div>
					  		<div class="col-md-7">
					  			<h3>{{$design->title}}</h3>
					  			<p>{{$design->description}}</p>
					  		</div>
					  		<div class="col-md-3" style="padding-right: 0px">
					  			<div class="float-right" align="center">
					  				<a href="{{ url('/job-desain/' . $design->id) }}" class="btn btn-primary" style="width: 150px">Detail</a>
					  				<div class="pt-1">
					  					<label>Rp.{{$design->budget}}</label>
					  				</div>
					  				<div class="star">
					  				    <i class="fa fa-star"></i>
					  				    <i class="fa fa-star"></i>
					  				    <i class="fa fa-star"></i>
					  				    <i class="fa fa-star"></i>
					  				    <i class="fa fa-star-half"></i>
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					</div>
				</div>
				@endforeach
			</div>
		</section>
	</div>
	  
	<div id="footer">
		@include('partials.footer')
	</div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>