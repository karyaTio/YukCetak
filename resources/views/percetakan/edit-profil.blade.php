<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.import-head')
</head>

<body>
    <div id="header">
        @include('partials.navbar-percetakan')
    </div>

    <div class="container mt-4">

      <div class="card card-default card-freelancer-dashboard">
        <div class="card-body">
          <h2 class="dashboard-title category pb-10">Edit Profil</h2>

          <form method="POST" action="{{ url('percetakan/edit-profil') }}" enctype="multipart/form-data">
            @csrf
          <div class="form-group"><label class="control-label fwsb">Nama Percetakan</label>
            <p class="small help-block no-mti pb-10">Isi nama lengkap Percetakan, agar terlihat lebih profesional di mata client</p>
            <div class="row">
              <div class="col-sm-12">
                <input class="form-control input-lg mb-20" type="text" name="name" id="" />
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label fwsb">Nomor Telepon</label>
            <div class="row">
              <div class="col-sm-4">
                <select class="bs3-select form-control input-lg" name="" id="">
                  <option selected="selected" value="">Indonesia - +62</option>
                </select>
              </div>
              <div class="col-sm-8">
                <input class="form-control input-lg contact-number mb-20" placeholder="" type="text" value="" name="phone_number" id="" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label fwsb">Kota</label>
              <div class="row">
                <div class="col-sm-12">
                  <select class="bs3-select form-control input-lg" name="city" id="">
                    <option value="Bandar Lampung">Bandar Lampung</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label fwsb">Alamat</label>
              <div class="row">
                <div class="col-sm-12">
                  <textarea class="form-control js-autosize mb-20" rows="3" name="address" id="" placeholder="Alamat"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label fwsb">Tentang percetakan</label>
              <p class="small help-block no-mti pb-10">Masukan Informasi yang dapat membantu untuk mempromosikan Percetakan Anda.</p>
              <div class="row">
                <div class="col-sm-12">
                  <textarea class="form-control js-autosize bio mb-20" rows="3" name="about" id="" placeholder="Tentang"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label fwsb">Foto Profil</label>
            <p class="small help-block no-mti pb-10"></p>
            <input type="file" class="form-control-file" name="attachment" id="" />
          <div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    <div id="footer">
        @include('partials.footer-percetakan')
    </div>

    @include('partials.import-foot')
  </body>
</html>