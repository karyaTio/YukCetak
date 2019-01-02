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

    <div class="container mt-4">

      <div class="card card-default card-freelancer-dashboard">
        <div class="card-body">
          <h2 class="dashboard-title category pb-10">Edit Profil</h2>
          <div class="form-group"><label class="control-label fwsb">Nama Lengkap</label>
            <p class="small help-block no-mti pb-10">Isi nama lengkap kamu, agar terlihat lebih profesional di mata client</p>
            <div class="row">
              <div class="col-sm-12">
                <input class="form-control input-lg mb-20" type="text" value="Ragil Satrio" name="" id="" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label fwsb">
              <span class="translation_missing" title="translation missing: id.members.new.label.member_title.title">Title</span>
            </label><p class="small help-block no-mti pb-10">Contoh: Web dan UI Designer</p>
            <div class="row">
              <div class="col-sm-12">
                <input class="form-control input-lg mb-20" placeholder="" type="text" value="2D Design, Motion Graphic" name="" id="" />
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
                  <div class="radio">
                    <label class="radio-inline mr-20">
                      <input type="radio" value="male" checked="checked" name="" id="" />Laki - Laki
                    </label>
                    <label class="radio-inline">
                      <input type="radio" value="female" name="" id="" />Perempuan
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label fwsb">Tanggal Lahir</label>
              <div class="row">
                <div class="col-sm-12">
                  <input class="form-control input-lg mb-20 datepicker" value="" type="text" name="" id="" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label fwsb">Tentang Desainer</label>
              <p class="small help-block no-mti pb-10">Masukan Informasi yang dapat membantu untuk mempromosikan Anda dan bisnis Anda. Profil Anda akan langsung dikirimkan kepada client kami ketika Anda melamar <br> ke sebuah job. Dari data kami 70% dari client merekrut freelancer yang memiliki profil yang lengkap.</p>
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
        @include('partials.footer')
    </div>

    @include('partials.import-foot')
</body>
</html>