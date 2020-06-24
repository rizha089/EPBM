<!doctype html>
<html lang="en">
<style>
span { width:100%; display:inline-block; }
span.align-right { text-align:right; }

</style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <title>SMP CENDEKIA BAZNAS</title>
  </head>

  <body>
  <div class="container">
  <div class="mt-log">

    <div class="card mb-8" >
  <div class="row no-gutters">
  <div class="col-md-6">
    <img src="{{ asset('/klorofil/img/lOGIN.jpg') }}" alt="Logo" class="img-responsive logo">
</div>
    <div class="col-md-6">
      <div class="card-body">
      <div class="mt-5">
        <h5 class="card-title">MASUK SEBAGAI SISWA</h5>
        <p class="card-text"><div class="panel panel-default">

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Alamat Surel</label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Kata Sandi</label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <a class="btn btn-link" href="{{ route('guru-login') }}" style="padding: 0px 0px 0px 300px;font-size:12px;">Masuk sebagai guru</a>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat Saya
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Masuk
                                </button>
                                <a class="btn btn-link" href="{{ route('register') }}">Daftar Baru</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                            <a class="btn btn-link" href="{{ route('password.request') }}">Lupa kata sandi?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div></p>

      </div>
    </div>
  </div>
</div>
            </div>
            </div>
            </div>
    </div>
</div>
   <script src="/js/bootstrap.min.js"></script>
  </body>

</html>
