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
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ulasan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Informasi Percetakan</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <section class="container mt-4">
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
                  </div>
              </section>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="card mt-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-2">
                      <img alt="gantvespa - Sribulancer" class="img-responsive img-thumbnail img-circle avatar-member" src="https://sribulancer-production-sg.s3.ap-southeast-1.amazonaws.com/assets/media/freelancer_member/5c26def54049a14fd703d9ff/thumb_7f8b110837.jpg" width="100" height="100"/>
                    </div>
                    <div class="col-md-10">
                      <div class="applicant-identity">
                        <div class="user-name-date-applied mb-10">
                          <h4 class="no-mt iblocks font2"><a href="/id/users/gantvespa">gantiwa Sastra</a></h4>
                          <p>Date Applied: 02 Jan 2019 - 14:30</p>
                          <p>Kualitas dan proses pengerjaan sangat baik</p>
                        </div>
                        <div class="user-rating rating mb-10">
                          <span class="text-muted">
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
              </div>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="card card-default card-freelancer-dashboard mt-4">
                <div class="card-body">
                  <h2 class="dashboard-title category pb-10">Informasi Percetakan</h2>
                  <div class="form-group"><label class="control-label fwsb">Nama Percetakan</label>
                    <div class="row">
                      <div class="col-sm-12">
                        <input class="form-control input-lg mb-20" type="text" value="Limatiga Printing" name="" id="" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label fwsb">Nomor Telepon</label>
                    <div class="row">
                      <div class="col-sm-12">
                        <input class="form-control input-lg contact-number mb-20" placeholder="" type="text" value="087779744759" name="" id="" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label fwsb">
                      <span class="translation_missing" title="translation missing: id.members.new.label.city">Kota</span>
                    </label>
                      <div class="row">
                        <div class="col-sm-12">
                          <select class="bs3-select form-control input-lg" name="" id="">
                            <option value="">Bandar Lampung</option>
                            <option value="">Jakarta</option>
                            <option value="">Bandung</option>
                            <option value="">Yogyakarta</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label"></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label fwsb">Alamat</label>
                      <div class="row">
                        <div class="col-sm-12 mb-20">
                          <input class="form-control input-lg contact-number mb-20" placeholder="" type="text" value="Sukarame" name="" id="" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label fwsb">Tentang Percetakan</label>
                      <div class="row">
                        <div class="col-sm-12">
                          <textarea class="form-control js-autosize bio mb-20" rows="3" name="" id="" placeholder="Tentang"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>

    @include('partials.footer')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>