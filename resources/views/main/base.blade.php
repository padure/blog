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
                                    <form name="register-form" action="register" method="POST" class="register-form">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                                            <input type="text" class="form-control" placeholder="Numele" aria-describedby="basic-addon1" name="nume">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                                            <input type="text" class="form-control" placeholder="Prenumele" aria-describedby="basic-addon1" name="prenume">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                            <input type="email" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1" name="email">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                            <input type="password" class="form-control" placeholder="Parola" aria-describedby="basic-addon1" name="parola">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                                            <input type="number" name="quantity" class="form-control" min="1" max="120" placeholder="Virsta" name="virsta">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary btn-reg">Register</button>
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
                                    <form name="register-form" action="register" method="POST" class="register-form">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                            <input type="email" class="form-control" placeholder="E-mail" name="email" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                            <input type="password" class="form-control" placeholder="Parola" name="parola" aria-describedby="basic-addon1">
                                        </div>
                                    </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-reg">Logare</button>
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
