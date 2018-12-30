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
    <div class="container">
        <form method="POST" action="{{ url('percetakan/services/update') }}">
            @csrf
            <input type="hidden" name="id" id="id" value="{{ $service->id }}">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="name" placeholder="Nama" value="{{ $service->name }}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="description" placeholder="Deskripsi" value="{{ $service->description }}">
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
                    <option value="baju">Baju</option>
                </select>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="psd" @if ($service->psd) checked @endif >
                    <label class="form-check-label" for="defaultCheck1">
                        Photoshop
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" name="crl" @if ($service->crl) checked @endif>
                    <label class="form-check-label" for="defaultCheck2">
                        Corel Draw
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck3" name="ai" @if ($service->ai) checked @endif>
                    <label class="form-check-label" for="defaultCheck3">
                        Ilustrator
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="show_size">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('percetakan/services/'. $service->id .'/sizes')}}" method="post">
                    @csrf
                <input type="hidden" value="{{ $service->id }}">
                <div class="form-group">
                    <label for="">Lebar</label>
                    <input type="text" class="form-control" name="width">
                </div>
                <div class="form-group">
                    <label for="">Tinggi</label>
                    <input type="text" class="form-control" name="height">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
            </div>
        </div>
    </div>

	@include('partials.footer-percetakan')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>