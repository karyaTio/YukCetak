<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.import-head')
    <style>
    
.grid-container {
    display: grid;
    grid-template-columns: 25% 25% 25% 25%;
    padding: 10px;
    column-gap: 20px;
    grid-row-gap: 20px;
}

    </style>
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
                <a href="{{ url('desainer/edit-profil') }}" class="btn btn-outline-primary">Edit Profil</a>
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
                <a class="btn btn-outline-primary mb-2" data-toggle="modal" data-target="#exampleModal">Upload Portfolio</a>
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Portfolio</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Job saya</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Informasi Desainer</a>
            </div>
          </div>
          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <section class="container">
                      <div class="grid-container">
                      @foreach ($designs as $design)
                        <div class="card">
                            <img style="max-height:200px;" class="card-img-top img-fluid" src="{{ url('/storage/'.$design->attachment) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$design->title}}</h5>
                                <a href="" class="btn btn-primary btn-block btn-sm">Detail</a>
                            </div>
                        </div>                    
                      @endforeach
                    </div>
                  </section>
              </div>


              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Job saya</div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="card card-default card-freelancer-dashboard">
                  <div class="card-body">
                    <h2 class="dashboard-title category pb-10">Informasi Desainer</h2>
                    <div class="form-group"><label class="control-label fwsb">Nama Lengkap</label>
                      <div class="row">
                        <div class="col-sm-12">
                          <input class="form-control input-lg mb-20" type="text" value="Ragil Satrio" name="" id="" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label fwsb">
                        <span class="translation_missing" title="translation missing: id.members.new.label.member_title.title">Title</span>
                      </label>
                      <div class="row">
                        <div class="col-sm-12">
                          <input class="form-control input-lg mb-20" placeholder="" type="text" value="2D Design, Motion Graphic" name="" id="" />
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
                        <label class="control-label fwsb">Jenis Kelamin</label>
                        <div class="row">
                          <div class="col-sm-12 mb-20">
                            <input class="form-control input-lg contact-number mb-20" placeholder="" type="text" value="Laki - Laki" name="" id="" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label fwsb">Tanggal Lahir</label>
                        <div class="row">
                          <div class="col-sm-12">
                            <input class="form-control input-lg mb-20 datepicker" value="29 Mei 1995" type="text" name="" id="" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label fwsb">Tentang Desainer</label>
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
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Portfolio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <form method="POST" action="{{ url('desainer/design') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Desain</label>
                    <input class="form-control" name="title" id="id" placeholder="Judul Desain">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload file</label>
                    <input type="file" name="attachment" class="form-control-file" id="exampleFormControlFile1">
                    <small class="form-text text-muted">upload file berformat .jpeg atau .png</small>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Upload Portfolio</button>
            </form>
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