<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.import-head')
</head>
<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="padding: 0;">
          <div class="background text-center" style="padding-top: 200px">
            <h1 style="color: #fff">YukCetak!<span class="text-desainer">Desainer</span></h1>
            <p style="font-size: 20px; color: #fff; font-style: thin;">With Great Design <br> Comes <br> Great Responsibility</p>
          </div>
        </div>
        <div class="col-lg-6" style="padding: 0;">
            <div class="" style="margin-top: 10px">
                <div class="text-center">
                    <h1>YukCetak!<span class="text-desainer">Desainer</span></h1>
                    <h4>Daftar</h4> <hr class="form-login">
                </div>
                <div class="form-login">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama depan</label>
                            <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama belakang</label>
                            <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="password-confirm"   >{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                      <p style="display: inline;">Tanggal Lahir</p>
                      <div style="margin-top: .5rem;" class="row">
                        
                        <div class="col-lg-4">
                          <div class="form-group">
                            <input type="number" class="form-control" id="exampleInputnumber1" aria-describedby="numberHelp" placeholder="Tanggal">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <input type="number" class="form-control" id="exampleInputnumber1" aria-describedby="numberHelp" placeholder="Bulan">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <input type="number" class="form-control" id="exampleInputnumber1" aria-describedby="numberHelp" placeholder="Tahun">
                          </div>
                        </div>
                      </div>
                      <div class="text-center">
                          <button type="submit" class="btn btn-primary form-login">Daftar</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>

    @include('partials.import-foot')
</body>
</html>