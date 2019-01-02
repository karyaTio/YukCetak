<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.import-head')
</head>

<body>
    <div id="header">
        @include('partials.navbar')
    </div>

    <div class="banner container-fluid">

    </div>

    <div class="container">

        <div class="banner-detail row">
            <div class="col-md-3 banner-img-container">
                <img class="img-fluid banner-img img-thumbnail" src="https://via.placeholder.com/200x200" alt="">
            </div>
            <div class="col-md-6">
                <h3>{{ $designer->first_name . ' ' . $designer->last_name}}</h3>
                <p>{{ $designer->email }}</p>
            </div>
            <div class="col-md-3 pt-4">
                <a href="" class="btn btn-primary">Edit Profil</a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <hr>

    <div class="container">
        <div class="row">
          <div class="col-3">
            <div class="nav flex-column nav-pills pr-2 pl-2 pt-1" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="background-color: #f1f1f1">
                <a href="{{ url('percetakan/services/create') }}" class="btn btn-outline-primary mb-2">Upload Portfolio</a>
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Portfolio</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Job saya</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Informasi Desainer</a>
            </div>
          </div>
          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <section class="container">
                      <div class="row">
                          <div class="col-md-3 pl-1">
                              <div class="card">
                                  <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                                  <div class="card-body">
                                      <h5 class="card-title">Judul</h5>
                                      <a href="" class="btn btn-primary btn-block btn-sm">Detail</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 pl-1">
                              <div class="card">
                                  <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                                  <div class="card-body">
                                      <h5 class="card-title">Judul</h5>
                                      <a href="" class="btn btn-primary btn-block btn-sm">Detail</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 pl-1">
                              <div class="card">
                                  <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                                  <div class="card-body">
                                      <h5 class="card-title">Judul</h5>
                                      <a href="" class="btn btn-primary btn-block btn-sm">Detail</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 pl-1">
                              <div class="card">
                                  <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                                  <div class="card-body">
                                      <h5 class="card-title">Judul</h5>
                                      <a href="" class="btn btn-primary btn-block btn-sm">Detail</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="row mt-2">
                          <div class="col-md-3 pl-1">
                              <div class="card">
                                  <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                                  <div class="card-body">
                                      <h5 class="card-title">Judul</h5>
                                      <a href="" class="btn btn-primary btn-block btn-sm">Detail</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 pl-1">
                              <div class="card">
                                  <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                                  <div class="card-body">
                                      <h5 class="card-title">Judul</h5>
                                      <a href="" class="btn btn-primary btn-block btn-sm">Detail</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 pl-1">
                              <div class="card">
                                  <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                                  <div class="card-body">
                                      <h5 class="card-title">Judul</h5>
                                      <a href="" class="btn btn-primary btn-block btn-sm">Detail</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 pl-1">
                              <div class="card">
                                  <img class="card-img-top img-fluid" src="https://via.placeholder.com/300x200" alt="Card image cap">
                                  <div class="card-body">
                                      <h5 class="card-title">Judul</h5>
                                      <a href="" class="btn btn-primary btn-block btn-sm">Detail</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Riwayat Pesanan</div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Projek Desain</div>
            </div>
          </div>
        </div>
    </div>
        
        <!-- <div class="container mt-5">
            <br>
            <hr>
            <ul class="nav ">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Portfolio Desain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Informasi Desainer</a>
                </li>
            </ul>
            
            <hr>
        </div> -->

    <div id="footer">
        @include('partials.footer')
    </div>

    @include('partials.import-foot')
</body>
</html>