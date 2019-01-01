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
					<input type="number" class="form-control" name="bid">
				</div>
				<div class="form-group">
					<textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button type="submit">Bid</button>
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