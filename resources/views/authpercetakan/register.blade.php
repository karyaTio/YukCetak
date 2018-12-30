<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="padding: 0;">
          <div class="background text-center" style="padding-top: 200px">
            <h1 style="color: #fff">YukCetak!<span class="text-desainer">Percetakan</span></h1>
            <p style="font-size: 20px; color: #fff; font-style: thin;">With Great Quality <br> Comes <br> Great Responsibility</p>
          </div>
        </div>
        <div class="col-lg-6" style="padding: 0;">
            <div class="" style="margin-top: 50px">
                <div class="text-center">
                    <h1>YukCetak!<span class="text-desainer">Percetakan</span></h1>
                    <h4>Daftar</h4> <hr class="form-login">
                </div>
                <div class="form-login">
                    <form method="POST" action="{{ route('percetakan.register.submit') }}">
                            @csrf
                      <div class="form-group">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nama Percetakan" required autofocus >

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group" style="margin-bottom: 10px">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                      </div>
                      <div class="form-group" style="margin-bottom: 10px">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" name="number" placeholder="contoh : 089768....">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" style="width: 100%;" placeholder="Alamat"></textarea>
                      </div>
                      <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!-- @include('partials.footer')-->

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>