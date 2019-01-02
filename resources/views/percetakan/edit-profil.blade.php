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
          <div class="form-group"><label class="control-label fwsb">Nama Percetakan</label>
            <p class="small help-block no-mti pb-10">Isi nama lengkap Percetakan, agar terlihat lebih profesional di mata client</p>
            <div class="row">
              <div class="col-sm-12">
                <input class="form-control input-lg mb-20" type="text" value="Digital Printing" name="" id="" />
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
                <input class="form-control input-lg contact-number mb-20" placeholder="" type="text" value="" name="" id="" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label fwsb">Kota</label>
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
              <label class="control-label fwsb">Alamat</label>
              <div class="row">
                <div class="col-sm-12">
                  <textarea class="form-control js-autosize mb-20" rows="3" name="" id="" placeholder="Alamat"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label fwsb">Tentang percetakan</label>
              <p class="small help-block no-mti pb-10">Masukan Informasi yang dapat membantu untuk mempromosikan Percetakan Anda.</p>
              <div class="row">
                <div class="col-sm-12">
                  <textarea class="form-control js-autosize bio mb-20" rows="3" name="" id="" placeholder="Tentang"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label fwsb">Foto Profil</label>
            <p class="small help-block no-mti pb-10"></p>
            <div class="row">
              <div class="col-sm-6">
                <img class="img-thumbnail img-circle img-responsive" width="175" src="" alt="Foto profil" />
                <div class="space">
                  
                </div>
                <input type="file" name="" id="" />
                <input type="hidden" name="" id="" />
              </div>
            </div>
          </div>
          <div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <div id="footer">
        @include('partials.footer-percetakan')
    </div>

    @include('partials.import-foot')
  </body>
</html>