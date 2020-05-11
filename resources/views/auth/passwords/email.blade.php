<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="apple-touch-icon" sizes="76x76" href="klorofil/img/logoDoang.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/klorofil/img/logoDoang.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <title>SMP CENDEKIA BAZNAS</title>
    </head>

    <body>
    <div class="mt-5">
    <div class="mx-auto" style="width: 710px">
    <div class="card">
  <div class="card-body">
  <div class="row mx-lg-n5">
    <div class="col-4">
    
    <img src="/klorofil/img/logoDoang.png" alt="Logo" 
            class="img-responsive logo">

</div>
<div class="col-8">
<div class="ml-5">
<div class="mt-5">
  <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-4">
                        <a class="btn btn-link" href="http://127.0.0.1:8000/login">
                        <-Back
                                </a>
                        </div>
                    </form>
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