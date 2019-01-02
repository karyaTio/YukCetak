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
    <section class="container mt-4">
        <div class="row">
            <div class="col-md-7 mr-5 ml-5">
                <h1 style="color: #25e9fd; margin-bottom: 20px">YukCetak!<span class="text-desainer">Tambah Layanan</span></h1>
                <form method="POST" action="{{ url('percetakan/services') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="name" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="desc" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="lama">Lama pengerjaan</label>
                        <input type="text" class="form-control" id="lama" name="finish_time" placeholder="Lama Pengerjaan">
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select class="custom-select" name="category">
                            <option selected>Open this select menu</option>
                            <option value="banner">Banner</option>
                            <option value="kartu_nama">Kartu nama</option>
                            <option value="flyer">Flyer</option>
                            <option value="brosur">Brosur</option>
                            <option value="poster">Poster</option>
                            <option value="baju">Baju</option>
                            <option value="square_card">Square Card</option>
                            <option value="kop_surat">Kop Surat</option>
                            <option value="Amplop">Amplop</option>
                            <option value="mug">Mug</option>
                            <option value="foto">Foto</option>
                            
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="psd">
                            <label class="form-check-label" for="defaultCheck1">
                                Photoshop
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="crl">
                            <label class="form-check-label" for="defaultCheck2">
                                Corel Draw
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck3" name="ai">
                            <label class="form-check-label" for="defaultCheck3">
                                Ilustrator
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
    
            <div class="col-md-3">
                <div class="card bg-dark text-white">
                    <img class="card-img" src="{{ asset('image/bg-iklan.png')}}" alt="Card image">
                    <div class="card-img-overlay">
                        <div align="center" style="margin-top: 100px; font-size: 20px">
                            <p class="card-title" style="margin-bottom: 1px">Tambahkan</p>
                            <p class="card-title" style="margin-bottom: 1px">Layanan yang ada</p>
                            <p class="card-title" style="margin-bottom: 1px">Di Percetakan Anda</p>
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