<!DOCTYPE html>
<html>
<head>
	<title>Pasang Job Desain</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/gijgo.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<noscript><link rel="stylesheet" type="text/css" href="{{ asset('css/noJS.css') }}" /></noscript>
<body>
	@include('partials.navbar-percetakan')

		<section class="container mt-4">
				<div class="row">
						<div class="col-md-7 mr-5 ml-5">
					<h1 style="color: #25e9fd; margin-bottom: 20px">YukCetak!<span class="text-desainer">Job</span></h1>
					<form method="POST" action="{{ url('percetakan/design') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control" name="title" placeholder="Masukkan Judul">
					</div>
					<div class="form-group">
						<label>Jelaskan kebutuhan anda secara lengkap</label>
						<textarea type="text" class="form-control" name="description" style="height: 100px"></textarea>
					</div>
					<div class="form-group">
						<label>File Attachment</label>
						<div class="card">
						<div class="card-body">
							<input type="file" name="attachment" class="form-control-file">
						</div>
						</div>
					</div>
					<div class="form-group">
						<label>Kapan job ini ditutup</label>
						<div class="input-group flex-nowrap">
							<input id="datepicker" name="deadline" width="300">
							<p style="padding-left: 20px">Berapa hari dari sekarang</p>
						</div>
					</div>
					
					<div class="form-group">
						<label>Berapa budget anda untuk job ini ?</label>
						<div style="margin-top: .5rem;" class="row">
						<div class="col-lg-2">
							<div class="form-group">
								<select class="form-control" id="exampleFormControlSelect1">
									<option>IDR</option>
									<option>USD</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<input type="number" name="budget" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
						</div>
					</div>
					</div>
					<div class="row float-right pr-2">
						<div style="padding: 5px">
							<button type="button" class="btn btn-secondary">Batal</button>
						</div>
						<div style="padding: 5px">
							<button type="submit" class="btn btn-primary">Posting Job</button>
						</div>
					</div>
					</form>
						</div>
										
						<div class="col-md-3">
								<div class="card bg-dark text-white">
										<img class="card-img" src="{{ asset('image/bg-iklan.png')}}" alt="Card image">
										<div class="card-img-overlay">
											<div align="center" style="margin-top: 100px; font-size: 20px">
												<p class="card-title" style="margin-bottom: 1px">Pasang job desain</p>
												<p class="card-title" style="margin-bottom: 1px">dan temukan</p>
												<p class="card-title" style="margin-bottom: 1px">Desainer Terbaik</p>
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
    <script type="text/javascript" src="{{ asset('js/gijgo.min.js') }}"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
</body>
</html>