<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>            
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
                    <div class="login-title"><strong>Insira seu email, para gerar uma nova senha para o mesmo</strong></div>
                    <form method="POST" action="acesso" class="form-horizontal">
                      {!! csrf_field() !!}
                    
                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email"/>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="{{ url('login') }}" class="btn btn-link btn-block">Acessar Area de Login</a>
                        </div>

                        <div class="col-md-6">
                            <input type="submit" value="Enviar Email" class="btn btn-info btn-block">
                        </div>
                        
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                </div>
            </div>
            
        </div>
        
    </body>
</html>






