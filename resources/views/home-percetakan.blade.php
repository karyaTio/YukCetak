<!DOCTYPE html>
<html>
<head>
	<title>Home Percetakan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<noscript><link rel="stylesheet" type="text/css" href="{{ asset('css/noJS.css') }}" /></noscript>
<body>
	@include('partials.navbar-percetakan')

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
					  <a class="navbar-brand">Cari Desainer</a>
					  <form class="form-inline float-left">
					    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					  </form>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
		    <div class="col-md-3 pl-1">
		        <div class="card">
		            <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
		            <div class="card-body">
		                <h5 class="card-title" style="margin-bottom: 5px">Judul</h5><hr style="margin-bottom: 8px">
		                <div align="right">
			                <p style="margin-bottom: 2px">by : Nama Desainer</p>
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
		    <div class="col-md-3 pl-1">
		        <div class="card">
		            <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
		            <div class="card-body">
		                <h5 class="card-title" style="margin-bottom: 5px">Judul</h5><hr style="margin-bottom: 8px">
		                <div align="right">
			                <p style="margin-bottom: 2px">by : Nama Desainer</p>
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
		    <div class="col-md-3 pl-1">
		        <div class="card">
		            <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
		            <div class="card-body">
		                <h5 class="card-title" style="margin-bottom: 5px">Judul</h5><hr style="margin-bottom: 8px">
		                <div align="right">
			                <p style="margin-bottom: 2px">by : Nama Desainer</p>
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
		    <div class="col-md-3 pl-1">
		        <div class="card">
		            <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
		            <div class="card-body">
		                <h5 class="card-title" style="margin-bottom: 5px">Judul</h5><hr style="margin-bottom: 8px">
		                <div align="right">
			                <p style="margin-bottom: 2px">by : Nama Desainer</p>
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

		<div class="row mt-2">
		    <div class="col-md-3 pl-1">
		        <div class="card">
		            <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
		            <div class="card-body">
		                <h5 class="card-title" style="margin-bottom: 5px">Judul</h5><hr style="margin-bottom: 8px">
		                <div align="right">
			                <p style="margin-bottom: 2px">by : Nama Desainer</p>
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
		    <div class="col-md-3 pl-1">
		        <div class="card">
		            <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
		            <div class="card-body">
		                <h5 class="card-title" style="margin-bottom: 5px">Judul</h5><hr style="margin-bottom: 8px">
		                <div align="right">
			                <p style="margin-bottom: 2px">by : Nama Desainer</p>
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
		    <div class="col-md-3 pl-1">
		        <div class="card">
		            <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
		            <div class="card-body">
		                <h5 class="card-title" style="margin-bottom: 5px">Judul</h5><hr style="margin-bottom: 8px">
		                <div align="right">
			                <p style="margin-bottom: 2px">by : Nama Desainer</p>
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
		    <div class="col-md-3 pl-1">
		        <div class="card">
		            <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
		            <div class="card-body">
		                <h5 class="card-title" style="margin-bottom: 5px">Judul</h5><hr style="margin-bottom: 8px">
		                <div align="right">
			                <p style="margin-bottom: 2px">by : Nama Desainer</p>
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
	</section>

	@include('partials.footer-percetakan')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>