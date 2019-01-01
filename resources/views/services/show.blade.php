<!DOCTYPE html>
<html>
<head>
	<title>Detail Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<body>

    @include('partials.navbar')

    <section class="container mt-4" id="body">

        <div class="row">
            <div class="col-md-4">
                <div class="img" align="center">
                    <img src="https://via.placeholder.com/300x300">
                </div>
            </div>

            <div class="col-md-6">

                <div class="row">
                    <div class="col-md-6">
                        <h2>{{$service->name}}</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="float-right pr-5">
                            <a class="btn btn-outline-primary btn-sm" href="#" role="button"><i class="fa fa-share-alt"></i> Bagikan</a>
                        </div>
                    </div>
                </div>

                <div class="star pt-1">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>

                <div class="pt-4">
                    <form action="{{ url('/desainer/percetakan/services/'. $service->id .'/orders') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah</label>
                                    <input type="number" class="form-control" name="quantity" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cara Antar</label>
                                    <select name="delivery_method" class="form-control" id="">
                                        <option value="Ambil Sendiri">Ambil sendiri</option>
                                        <option value="Gojek atau Grab">Gojek / Grab</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Pesan</label>
                            <textarea name="message" class="form-control" id="" cols="30" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Desain</label>
                            <input type="file" name="attachment" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <p>
                                <button type="button" class="btn btn-outline-primary"><i class="fa fa-thumbs-up"></i></button>
                                <button type="submit" class="btn btn-outline-primary btn-lg">Pesan</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/100x100" alt="Card image cap" style="padding: 20px; padding-bottom: 0px">
                <div class="card-body" style="padding: 10px" align="center">
                    <h6 class="card-title">{{$percetakan->name}}</h6>
                    <p class="card-text">Lokasi</p>
                    <div class="pt-1">
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-chat"></i> chat percetakan</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($packets as $index => $packet)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <th>paket {{$packet->name}}</th>
                        <th>jumlah {{$packet->quantity}}</th>
                        <td>mulai dari Rp.{{$packet->price}}</td>
                        <td>{{$packet->rating}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    @include('partials.footer')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>