<!DOCTYPE html>
<html>
<head>
	<title>Pesanan Saya</title>
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

		<section class="container mt-2">
			@foreach ($orders as $index => $order)
			<div class="row mt-2">
				<div class="card w-100 mt-1">
					<div class="card-body">
					  	<div class="row col-md-12" style="padding-left: 0px; padding-right: 0px">
					  		<div class="col-md-2" align="center" style="padding-left: 0px">
					  			<img class="img-fluid" src="{{ url('/storage/'.$order->attachment)}}">
					  		</div>
					  		<div class="col-md-7">
					  			<h4>{{$services[$index]->name}}</h4>
					  			<p style="font-size: 16px">Jumlah Cetak {{$order->quantity}}</p>
								  <p style="font-size: 16px">cara antar {{$order->delivery_method}}</p>
								  <p>{{$order->message}}</p>
					  		</div>
					  		<div class="col-md-3" style="padding-right: 0px">
				  				<div class="float-left pl-4" align="center">
				  					<div>
				  						<p>status : {{$order->status}}</p>
				  					</div>
				  					<a href="" class="btn btn-primary btn-sm" style="width: 150px">Detail Pesanan</a>
				  				</div>
					  		</div>
					  	</div>
					</div>
				</div>
			</div>
			@endforeach
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