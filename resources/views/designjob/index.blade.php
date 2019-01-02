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

            <div class="container mt-3">
                <div class="row">
                  <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="background-color: #f1f1f1">
                        <a href="{{ url('percetakan/design/create') }}" class="btn btn-outline-primary mb-2">Tambah Job Desain</a>
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Job Aktif</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Job Selesai</a>
                    </div>
                  </div>
                  <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
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
                                      <a href="{{ url('percetakan/design/info/'.$design->id) }}" class="btn btn-info"><i class="fa fa-info"></i></a>
                                      <a href="{{ url('percetakan/design/info/'.$design->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                      <a href="{{ url('percetakan/design/info/'.$design->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                      </div>
                      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Budget</th>
                                    <th scope="col">Bidders</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($designjob as $index => $design)
                                <tr>
                                    <th scope="row">{{ $index + 1}}</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>3 bid</td>
                                    <td>Job telah selesai</td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
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