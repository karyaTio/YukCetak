<!DOCTYPE html>
<html>
<head>
	<title>Home Desainer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<noscript><link rel="stylesheet" type="text/css" href="{{ asset('css/noJS.css') }}" /></noscript>
<body>
	@include('partials.navbar')

	  <section class="container-fluid mt-2">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="{{ asset('image/1.png')}}" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{ asset('image/2.png')}}" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{ asset('image/3.png')}}" alt="Third slide">
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

	<section class="container-fluid">
		<div class="row mt-2">
			<div class="col-md-4 offset-md-8">
				<form class="form-inline">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>
			</div>
		</div>

		<div class="row mt-1">
			<div class="col-md-6">
				<img class="img-fluid" src="{{ asset('image/gambar.jpg')}}" alt="Third slide">
			</div>

			<div class="col-md-6 text-center" style="padding-top: 100px">
				<h2>Pilih Percetakan <br>Upload Desain mu <br>Tunggu notifikasi</h2>
			</div>
		</div>
	</section>

	<section class="section-official container mt-2 shadow">
		<p>Daftar percetakan</p>
		@foreach ($percetakan as $item)
				<a href="{{ url('desainer/percetakan/' . $item->id) }}">{{ $item->name }}</a>
		@endforeach
	</section>

	<section class="section-official container mt-2 shadow">

		<h5>Official Printing</h5>

		<div class="row">
			<div  class="col-md-3">
				<img class="img-fluid" src="{{ asset('image/banner-office.jpg')}}" alt="Third slide">
			</div>
			<div class="col-md-9">
				<div class="row">

					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      	<div class="row">
					      		<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid shadow-sm" src="{{ asset('image/office1.jpg')}}" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      				</div>

		      				<div class="row mt-1">
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      				</div>
					    </div>
					    <div class="carousel-item">
					      <div class="row">
					      		<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid shadow-sm" src="{{ asset('image/office1.jpg')}}" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      				</div>

		      				<div class="row mt-1">
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      					<div class="col-md-3 pl-1">
		      						<a href="{{ asset('/percetakan/show') }}"><img class="img-fluid" src="https://via.placeholder.com/300x200" alt="Third slide"></a>
		      					</div>
		      				</div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="width: 5%">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="width: 5%">
					    <span class="carousel-control-next-icon" aria-hidden="true""></span>
					  </a>
					</div>
			</div>
		</div>
	</section>

	<section class="container mt-4" style="padding-left: 0px; padding-right: 0px">
		<div class="card">
		  <h5 class="card-header">Katagori</h5>
		  <div class="card-body text-center">
		    <div class="row">
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ asset('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Banner
		    		  </div></a>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ url('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Kartu Nama
		    		  </div></a>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ url('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Poster
		    		  </div></a>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ url('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Brosur
		    		  </div></a>
		    		</div>
		    	</div>
		    </div>
		    <div class="row mt-1">
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ url('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Foto
		    		  </div></a>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ url('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Baju
		    		  </div></a>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ url('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Mug
		    		  </div></a>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ url('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Flyer
		    		  </div></a>
		    		</div>
		    	</div>
		    </div>
		    <div class="row mt-1">
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ url('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Amplop
		    		  </div></a>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ url('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Square Card
		    		  </div></a>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ url('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Kop Surat
		    		  </div></a>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="card">
		    		  <a style="text-decoration: none;" href="{{ url('/Katagori') }}"><div class="card-body" style="padding: 5px">
		    		    Cover
		    		  </div></a>
		    		</div>
		    	</div>
		    </div>
		  </div>
		</div>
	</section>

	@include('partials.footer')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>