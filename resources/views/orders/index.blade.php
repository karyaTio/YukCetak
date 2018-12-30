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

            <section class="container">
                <div class="row mt-2">
                    <div class="col-md-12 ">
                        <nav class="navbar navbar-light bg-light justify-content-between">
                          <a class="navbar-brand">Pesanan Cetak</a>
                          <form class="form-inline float-left">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        </nav>
                    </div>
                </div>

                <div class="row mt-2">

                    <div class="card w-100 mt-1">
                        <div class="card-body">
                            <div class="row col-md-12" style="padding-left: 0px; padding-right: 0px">
                                <div class="col-md-2" align="center" style="padding-left: 0px">
                                    <img src="https://via.placeholder.com/150x150">
                                </div>
                                <div class="col-md-7">
                                    <h3>Pesanan</h3>
                                    <p style="margin-bottom: 1px">Total Cetak</p>
                                    <p>Pesan</p>
                                </div>
                                <div class="col-md-3" style="padding-right: 0px">
                                    <div class="float-right" align="center">
                                        <div>
                                            <h5 style="margin-bottom: 0px">Total Biaya</h5>
                                            <label>Rp.100.000</label>
                                        </div>
                                        <div class="row">
                                            <div style="padding-right: 10px">
                                                <a href="" class="btn btn-success" style="width: 100px">Terima</a>
                                            </div>
                                            <div>
                                                <a href="" class="btn btn-danger" style="width: 100px">Tolak</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- <section class="container mt-4">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pesanan</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Banner</td>
                            <td>Buat banner ini</td>
                            <td>
                                <button class="btn btn-success">Terima</button>
                                <button class="btn btn-danger">Tolak</button>
                            </td>
                        </tr>
                    </tbody>
                    </table>
            </section> -->
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