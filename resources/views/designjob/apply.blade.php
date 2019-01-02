<!DOCTYPE html>
<html>
<head>
	<title>Job Deskripsi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	@include('partials.import-head')
<body>
	<div id="header">
		@include('partials.navbar')
	</div>

	<div id="body">
		<section class="container mt-4">
			<form action="" method="POST">
				<div class="form-group">
					<label for="">Bid</label>
					<input type="number" class="form-control" name="bid" placeholder="masukkan jumlah bid">
				</div>
				<div class="form-group">
					<label class="control-label fwsb">Deskripsi</label>
					<p class="small help-block no-mti pb-10">Masukan deskripsi yang menarik agar anda diterima untuk job ini.</p>
					<textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="masukkan deskripsi anda min.200 kata"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Bid</button>
				</div>
			</form>
		</section>
	</div>

	<div id="footer">
		@include('partials.footer')
	</div>

    @include('partials.import-foot')
</body>
</html> 