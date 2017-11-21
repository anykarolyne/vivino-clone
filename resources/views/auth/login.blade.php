<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{ URL::asset('theme/css/theme-default.css') }}"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    <form action="{{ url('login') }}" class="form-horizontal" method="POST">
                    <div class="login-title"><strong>Email</strong></div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control" placeholder="Email"/>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group col-md-7">
                            <a href="{{ url('cadastro') }}" class="btn btn-link btn-block">Ainda não possui conta?</a>
                        </div>

                        <div class="form-group col-md-5">
                            <a href="{{ url('redefinir/acesso') }}" class="btn btn-link btn-block">Esqueceu a senha ?</a>
                        </div>
                    </div>
                    <center>
                        
                        <div class="form-group" style="width: 60%;">
                            <input type="submit" value="Logar" class="btn-wine" style="height: 50px;">
                        </div>
                    </center>
                    </form>
                </div>
                <div class="login-footer">
                </div>
            </div>
            
        </div>
        
    </body>
</html>






