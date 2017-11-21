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
                    <div class="login-title"><strong>Digite sua nova senha e confirme.</strong></div>
                    <form method="POST" action="{{url('redefinir/senha')}}" class="form-horizontal">
                    {!! csrf_field() !!}
                    <input type="hidden" name="token" value="{{ $token }}">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" value="{{ $email or old('email') }} " readonly="readonly"/>
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password"  placeholder="Senha"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirmar Senha"/>
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






