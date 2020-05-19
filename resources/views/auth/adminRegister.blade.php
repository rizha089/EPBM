<!doctype html>
<html lang="en">
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
  <div class="mt-5">
        <div class="mb-5">
    <div class="card" >
    <div class="row">
    <div class="col-sm">
        <img src="/klorofil/img/lOGIN.jpg" alt="Logo" class="img-responsive logo">
    </div>
        

    <div class="col-sm">
    <div class="mt-5">
      
      <h5 class="card-title">REGISTER ADMIN</h5>
      <p class="card-text"><div class="panel panel-default">
              
      <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.register') }}">
                      {{ csrf_field() }}
                      
                      <div class="col-md-8">
                      <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                          <label for="username" class="control-label">Username</label>

                          
                              <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                              @if ($errors->has('username'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('username') }}</strong>
                                  </span>
                              @endif
                          
                      </div>

                      
    
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="control-label">Password</label>

                          
                              <input id="password" type="password" class="form-control" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                          

                          
                            <label for="password-confirm" class="control-label">Confirm Password</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            
                        
                                <div class="mt-2">
                        <div class="form-group">
                            <div class="col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div></p>
      </div>
      </div>
    </div>

   
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="/js/bootstrap.min.js"></script>
  </body>
</html>