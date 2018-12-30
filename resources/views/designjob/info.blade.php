<!DOCTYPE html>
<html>
<head>
	<title>Pasang Job Desain</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" href="{{asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<noscript><link rel="stylesheet" type="text/css" href="{{ asset('css/noJS.css') }}" /></noscript>
<body>
    <div id="container">
        <div id="header">
	        @include('partials.navbar-percetakan')
        </div>

        <div id="body">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>{{$job->title}}</h1>
						<p>{{$job->description}}</p>
						<p>Rp.{{$job->budget}}</p>
					</div>
				</div>

				<div class="card">
					<h5 class="card-header">Featured</h5>
					<div class="card-body">
						<div>
							<h3>Bider satu</h3>
							<p>Saya yakin saya bisa mengerjakan apa yang anda minta</p>
							<button class="btn btn-success">Terima</button>
						</div>
						<hr>
						<div>
							<h3>Bider satu</h3>
							<p>Saya yakin saya bisa mengerjakan apa yang anda minta</p>
							<button class="btn btn-success">Terima</button>
						</div>
						<hr>
						<div>
							<h3>Bider satu</h3>
							<p>Saya yakin saya bisa mengerjakan apa yang anda minta</p>
							<button class="btn btn-success">Terima</button>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div id="footer">
            @include('partials.footer-percetakan')
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>