<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.import-head')
</head>
<body>

    @include('partials.navbar-percetakan')
    
    <div class="banner container-fluid">

    </div>

    <div class="container">

        <div class="banner-detail row">
            <div class="col-md-3 banner-img-container">
                <img class="img-fluid banner-img img-thumbnail" src="https://via.placeholder.com/200x200" alt="">
            </div>
            <div class="col-md-6">
                <h3>{{$percetakan->name}}</h3>
                <p style="margin-bottom: 4px">{{$percetakan->email}}</p>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
            </div>
            <div class="col-md-1 pt-3">
                <a href="{{ url('percetakan/edit-profil') }}" class="btn btn-outline-primary" style="width: 100px">Edit</a>
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
                <a href="{{ url('percetakan/services/create') }}" class="btn btn-outline-primary mb-2">Tambah Layanan</a>
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Layanan</a>
                <a class="nav-link" id="v-pills-riwayat-tab" data-toggle="pill" href="#v-pills-riwayat" role="tab" aria-controls="v-pills-riwayat" aria-selected="false">Riwayat Pesanan</a>
                <a class="nav-link" id="v-pills-projek-tab" data-toggle="pill" href="#v-pills-projek" role="tab" aria-controls="v-pills-projek" aria-selected="false">Projek Desain</a>
                <a class="nav-link" id="v-pills-informasi-tab" data-toggle="pill" href="#v-pills-informasi" role="tab" aria-controls="v-pills-informasi" aria-selected="false">Informasi Percetakan</a>
                <a class="nav-link" id="v-pills-ulasan-tab" data-toggle="pill" href="#v-pills-ulasan" role="tab" aria-controls="v-pills-ulasan" aria-selected="false">Ulasan</a>
            </div>
          </div>
          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <table class="table">
                      <thead>
                          <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Deskripsi</th>
                          <th scope="col">Aksi</th>
                          </tr>
                      </thead>
                      <tbody class="services-list">

                          @foreach($services as $index => $service)
                              <tr>
                                  <th scope="row">{{$index+1}}</th>
                                  <th>{{$service->name}}</th>
                                  <td>{{$service->description}}</td>
                                  <td>
                                      <button class="btn btn-info">Info</button>
                                      <a href="{{ url('/percetakan/services/' . $service->id . '/packets') }}" class="btn btn-success">Paket</a>
                                      <button type="button" class="btn btn-danger" id="show_modal_delete" data-toggle="modal" data-target="#exampleModal" data-id="{{ $service->id }}">Hapus</button>
                                  </td>
                              </tr>
                          @endforeach

                      </tbody>
                  </table>
              </div>
              <div class="tab-pane fade" id="v-pills-riwayat" role="tabpanel" aria-labelledby="v-pills-profile-tab">Riwayat Pesanan</div>
              <div class="tab-pane fade" id="v-pills-projek" role="tabpanel" aria-labelledby="v-pills-messages-tab">Projek Desain</div>
              <div class="tab-pane fade" id="v-pills-informasi" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="card card-default card-freelancer-dashboard">
                  <div class="card-body">
                    <h2 class="dashboard-title category pb-10">Informasi Percetakan</h2>
                    <div class="form-group"><label class="control-label fwsb">Nama Percetakan</label>
                      <div class="row">
                        <div class="col-sm-12">
                          <input class="form-control input-lg mb-20" type="text" value="{{ $percetakan->name }}" name="" id="" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label fwsb">Nomor Telepon</label>
                      <div class="row">
                        <div class="col-sm-12">
                          <input class="form-control input-lg contact-number mb-20" placeholder="" type="text" value="{{$percetakan->phone_number}}" name="" id="" />
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
                            <input class="form-control input-lg contact-number mb-20" placeholder="" type="text" value="{{$percetakan->address}}" name="" id="" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label fwsb">Tentang Percetakan</label>
                        <div class="row">
                          <div class="col-sm-12">
                            <textarea class="form-control js-autosize bio mb-20" rows="3" name="" id="" placeholder="Tentang">{{$percetakan->address}}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-ulasan" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="card">
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
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="modal_hapus_service">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Layanan ? </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus layanan ini ? </p>
            </div>
            <div class="modal-footer">
                <form action="{{url('/percetakan/services/delete')}}" method="post">
                    @csrf
                    <input type="hidden" name="id_hapus" id="id_hapus">
                    <button type="submit" class="btn btn-primary">Ya Lanjutkan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    @include('partials.footer-percetakan')

    @include('partials.import-foot')
    <script>
        $('.services-list').on('click', '#show_modal_delete',function(){
            var id = $(this).data('id');

            $('#id_hapus').val(id);

            $('#modal_hapus_service').modal('show');
        });
    </script>
</body>
</html>