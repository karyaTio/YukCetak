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
            <section class="container mt-4">

                <a href="{{ url('percetakan/design/create') }}" class="btn btn-primary mb-2">Pasang Job</a>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Bidders</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($designjob as $index => $design)
                        <tr>
                            <th scope="row">{{ $index + 1}}</th>
                            <td>{{$design->title}}</td>
                            <td>{{$design->description}}</td>
                            <td>{{$design->budget}}</td>
                            <td>3 bid</td>
                            <td>
                                <a href="{{ url('percetakan/design/info/'.$design->id) }}" class="btn btn-info">Info</a>
                                <a href="{{ url('percetakan/design/info/'.$design->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('percetakan/design/info/'.$design->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            </section>
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