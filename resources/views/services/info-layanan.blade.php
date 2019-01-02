<!DOCTYPE html>
<html>
<head>
	<title>Info Layanan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<noscript><link rel="stylesheet" type="text/css" href="{{ asset('css/noJS.css') }}" /></noscript>
<body>
	@include('partials.navbar-percetakan')
    <section class="container mt-4">
        <div class="row">
            <div class="col-md-7 mr-5 ml-5">
                <h1 style="color: #25e9fd; margin-bottom: 20px">YukCetak!<span class="text-desainer">Informasi Layanan</span></h1>
                <div class="form-group">
                    <h5>Nama</h5>
                    <input type="text" class="form-control" id="nama" name="name" placeholder="Nama" readonly>
                </div>
                <div class="form-group">
                    <h5>Deskripsi</h5>
                    <textarea type="text" class="form-control" id="deskripsi" name="desc" placeholder="Deskripsi" readonly></textarea>
                </div>
                <div class="form-group">
                    <h5>Lama pengerjaan</h5>
                    <input type="text" class="form-control" id="lama" name="finish_time" placeholder="Lama Pengerjaan" readonly>
                </div>
                <div class="form-group">
                    <h5 for="">Kategori</h5>
                    <input type="text" class="form-control" id="lama" name="finish_time" placeholder="Katagori" readonly>
                </div>

                <div class="form-group">
                    <h5>File extension yang dapat digunakan</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck3" name="ps" checked="">
                        <label>JPEG</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck3" name="ps" checked="">
                        <label>PNG</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck3" name="ps" checked="">
                        <label> Photoshop</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck3" name="ps" checked="">
                        <label>Corel Draw</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck3" name="ps" checked="">
                        <label>Ilustrator</label>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3">
                <div class="card bg-dark text-white">
                    <img class="card-img" src="{{ asset('image/bg-iklan.png')}}" alt="Card image">
                    <div class="card-img-overlay">
                        <div align="center" style="margin-top: 100px; font-size: 20px">
                            <p class="card-title" style="margin-bottom: 1px">Berikan</p>
                            <p class="card-title" style="margin-bottom: 1px">Layanan yang Terbaik</p>
                            <p class="card-title" style="margin-bottom: 1px">Untuk Pelanggan Anda</p>
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