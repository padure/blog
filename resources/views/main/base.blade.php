<!DOCTYPE html> 
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" >
        <link href="{{ asset("css/style.css") }}" rel="stylesheet" >
        <title>G Blog</title>
    </head>
    <body>
        <div class="col-md-12 back">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 logo" style="padding-left: 0; padding-right: 0;">
                            <a href="{{URL('/')}}">
                                 <img src="{{asset('images/admin/logo/logo.png')}}" alt='Imaginea Lipseste'>
                            </a>
                    </div>
                    <div class="col-md-12 my-menu" style="padding-left: 0; padding-right: 0;">
                        <nav class="navbar navbar-default" style="">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{URL('/')}}"><span class="glyphicon glyphicon-home"></span>Acasa</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="{{URL('/noutati')}}"><span class="glyphicon glyphicon-globe"></span>Noutati</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#RegisterForm"><span class="glyphicon glyphicon-user"></span>Inregistrare</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#LogareForm"><span class="glyphicon glyphicon-log-in"></span>Logare</a></li>
                            </ul>
                            <form class="navbar-form navbar-right">
                                <div class="form-group">
                                    <input type="text" class="form-controll">
                                </div>
                            </form>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav> 
                        <!-- Register -->
                        <div class="modal fade" id="RegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span>Inregistrare</h4>
                                </div>
                                <div class="modal-body">
                                    <form name="register-form" action="{{ route('register') }}" method="POST" class="register-form" role="form">
                                        {{ csrf_field() }}
                                        <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <span for="name" class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                                            <input id="name" type="text" class="form-control" placeholder="Numele" aria-describedby="basic-addon1" name="name" value="{{ old('name') }}" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="input-group {{ $errors->has('prenume') ? ' has-error' : '' }}">
                                            <span for="prenume" class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                                            <input id="prenume" type="text" class="form-control" placeholder="Prenumele" aria-describedby="basic-addon1" name="prenume" value="{{ old('prenume') }}" required autofocus>
                                            @if ($errors->has('prenume'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('prenume') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <span for="email" class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                            <input id="email" type="email" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <span for="password" class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                            <input id="password" type="password" class="form-control" placeholder="Parola" aria-describedby="basic-addon1" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="input-group">
                                            <span for="password-confirm" class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span></span>
                                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirma Parola" aria-describedby="basic-addon1" name="password_confirmation" required>
                                        </div>
                                        <div class="input-group {{ $errors->has('virsta') ? ' has-error' : '' }}">
                                            <span for="virsta" class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                                            <input id="virsta" type="number"  class="form-control" min="1" max="120" placeholder="Virsta"name="virsta" required>
                                            @if ($errors->has('virsta'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('virsta') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary btn-reg">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                          </div>
                        </div>
                        <!-- Logare -->
                        <div class="modal fade" id="LogareForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-log-in"></span>Logare</h4>
                              </div>
                              <div class="modal-body">
                                    <form name="register-form" action="{{ route('login') }}" method="POST" class="register-form" role="form">
                                    {{ csrf_field() }}
                                        <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <span for="email" class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                            <input type="email" class="form-control" placeholder="E-mail" name="email" aria-describedby="basic-addon1" id="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <span for="password" class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                            <input type="password" class="form-control" placeholder="Parola" name="password" aria-describedby="basic-addon1" id="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary btn-reg">Logare</button>
                                        </div>
                                    </form>
                              </div>
                            </div>
                          </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="container" style="">
            @yield("content")
        </div>
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        
    </body>
</html>
