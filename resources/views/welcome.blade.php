<!DOCTYPE html>
<html>
<head>
    <title>YukCetak!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="padding: 0;">
            <div class="background text-center" style="padding-top: 200px">
                <h1 style="color: #fff">YukCetak!<span class="text-desainer">Desainer</span></h1>
                <p style="font-size: 20px; color: #fff; font-style: thin;">With Great Design <br> Comes <br> Great Responsibility</p>
                <a class="btn btn-light" href="{{ url('/landing-page') }}">Masuk Desainer</a>
            </div>
        </div>
        <div class="col-lg-6" style="padding: 0;">
            <div class="background2 text-center" style="padding-top: 200px">
                <h1>YukCetak!<span class="text-desainer">Percetakan</span></h1>
                <p style="font-size: 20px; font-style: thin;">With Great Quality <br> Comes <br> Great Responsibility</p>
                <a class="btn btn-primary" href="{{ url('/percetakan/login') }}">Masuk Percetakan</a>
            </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>