<!DOCTYPE html>
<html>
<head>
    <title>Masuk</title>
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
            <div class="" style="margin-top: 150px">
                <div class="text-center">
                    <h1>YukCetak!<span class="text-desainer">Desainer</span></h1>
                    <h4>Masuk</h4>
                </div>
                <div class="form-login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                      </div>
                        <div class="text-center pt-2">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="text-center">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="text-center">
                            <a class="btn btn-link" href="{{ url('/register') }}">
                                Daftar
                            </a>
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