<!DOCTYPE html>
<html>
<head>
	<title>Detail Percetakan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

<style>
.grid-container {
  display: grid;
  grid-template-columns: 25% 25% 25% 25%;
  padding: 10px;
  column-gap: 20px;
  grid-row-gap: 20px;
}
</style>
<body>

    @include('partials.navbar')

    
    <div class="banner container-fluid">

    </div>

    <div class="container">

        <div class="banner-detail row">
            <div class="col-md-3 banner-img-container">
                <img class="img-fluid banner-img img-thumbnail" src="https://via.placeholder.com/200x200" alt="">
            </div>
            <div class="col-md-6">
                <h3>Nama Percetakan</h3>
                <p style="margin-bottom: 4px">percetakan@gmail.com</p>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
            </div>
            <div class="col-md-3 pt-4">
                <a href="" class="btn btn-primary">Kirim Pesan</a>
            </div>
        </div>
    </div>

    
    <div class="container mt-5">
        <br>
        <hr>
        <ul class="nav ">
            <li class="nav-item">
                <a class="nav-link active" href="#">Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ulasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Informasi Percetakan</a>
            </li>
        </ul>
        
        <hr>
    </div>
    
    <section class="container">
        <div class="grid-container">
            @foreach ($services as $service)
            <div class="card">
                <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$service->name}}</h5>
                    <p class="card-text">{{$service->price}}</p>
                    <a href="{{ url('/desainer/percetakan/services/'.$service->id) }}" class="btn btn-primary btn-block">Pesan</a>
                </div>
            </div>
            @endforeach
            @foreach ($services as $service)
            <div class="card">
                <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$service->name}}</h5>
                    <p class="card-text">{{$service->price}}</p>
                    <a href="{{ url('/desainer/percetakan/services/'.$service->id) }}" class="btn btn-primary btn-block">Pesan</a>
                </div>
            </div>
            @endforeach
            @foreach ($services as $service)
            <div class="card">
                <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$service->name}}</h5>
                    <p class="card-text">{{$service->price}}</p>
                    <a href="{{ url('/desainer/percetakan/services/'.$service->id) }}" class="btn btn-primary btn-block">Pesan</a>
                </div>
            </div>
            @endforeach
            @foreach ($services as $service)
            <div class="card">
                <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$service->name}}</h5>
                    <p class="card-text">{{$service->price}}</p>
                    <a href="{{ url('/desainer/percetakan/services/'.$service->id) }}" class="btn btn-primary btn-block">Pesan</a>
                </div>
            </div>
            @endforeach
            @foreach ($services as $service)
            <div class="card">
                <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$service->name}}</h5>
                    <p class="card-text">{{$service->price}}</p>
                    <a href="{{ url('/desainer/percetakan/services/'.$service->id) }}" class="btn btn-primary btn-block">Pesan</a>
                </div>
            </div>
            @endforeach
            @foreach ($services as $service)
            <div class="card">
                <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$service->name}}</h5>
                    <p class="card-text">{{$service->price}}</p>
                    <a href="{{ url('/desainer/percetakan/services/'.$service->id) }}" class="btn btn-primary btn-block">Pesan</a>
                </div>
            </div>
            @endforeach
            @foreach ($services as $service)
            <div class="card">
                <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$service->name}}</h5>
                    <p class="card-text">{{$service->price}}</p>
                    <a href="{{ url('/desainer/percetakan/services/'.$service->id) }}" class="btn btn-primary btn-block">Pesan</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    @include('partials.footer')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>