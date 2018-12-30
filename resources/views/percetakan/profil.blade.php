<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
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
            <div class="col-md-1 pt-3">
                <a href="" class="btn btn-outline-primary" style="width: 100px">Edit</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
          <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="background-color: #f1f1f1">
                <a href="{{ url('percetakan/services/create') }}" class="btn btn-outline-primary mb-2">Tambah Layanan</a>
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Layanan</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Riwayat Pesanan</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Projek Desain</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Transaksi</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Informasi Percetakan</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ulasan</a>
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
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Riwayat Pesanan</div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Projek Desain</div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Transaksi</div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Informasi Percetakan</div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Ulasan</div>
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

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $('.services-list').on('click', '#show_modal_delete',function(){
            var id = $(this).data('id');

            $('#id_hapus').val(id);

            $('#modal_hapus_service').modal('show');
        });
    </script>
</body>
</html>