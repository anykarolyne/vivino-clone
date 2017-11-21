@extends('welcome')
@section('carteira')
<div class="form-group">
    <h1><center> PERFIL </center></h1>
</div>
</br></br>
<div class="col-sm-12">
	 {!! Form::model($user, ['route' => ['atualizar_usuario'], 'files' => true]) !!}
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="form-group">
		        <label for="name">Primeiro Nome</label>
		        <input type="text" class="form-control" name="name" value="{{$user->firstName}}"  id="name" required>
		    </div>
		    <div class="form-group">
		        <label for="name">Ultimo Nome</label>
		        <input type="text" class="form-control" name="name" value="{{$user->lastName}}"  id="name" required>
		    </div>
		    <div class="form-group">
		        <label for="login">Login</label>
		        <input type="text" class="form-control" name="login" value="{{$user->login}}" id="login">
		    </div>
		    <div class="form-group">
		        <label for="email">E-mail</label>
		        <input type="text" class="form-control" name="email" value="{{$user->email}}" id="descricao">
		    </div>
		    <div class="form-group">
		        <label for="email">Senha</label>
		        <input type="password" class="form-control" name="password" id="descricao">
		    </div>

		    <div class="form-group">
		        <label for="photo">Foto</label>
		        {!! Form::file('photo', ['class' => 'form-control', 'id' => 'photo']) !!}
		    </div>

		    <div class="form-group">
            	<img src="{{($user->photo != NULL) ? route('images', [$user->photo, 150]) : '../theme/assets/images/users/userdefault.png'}}">
            	<img id="view-img" style="width: 150px; height: 150px" src="default.jpg">
    		</div><br><br>



		   <div class="col-md-6">
                <input type="submit" value="Editar" class="btn btn-info btn-block">
            </div>
        	
		</div>
	 {!! Form::close() !!}
</div>


		<script type="text/javascript" src="{{ URL::asset('theme/js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('theme/js/plugins/bootstrap/bootstrap-timepicker.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('theme/js/plugins/bootstrap/bootstrap-colorpicker.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('theme/js/plugins/bootstrap/bootstrap-file-input.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('theme/js/plugins/bootstrap/bootstrap-select.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('theme/js/plugins/tagsinput/jquery.tagsinput.min.js') }}"></script>

@endsection


@section('pbody')

<script>
$("#photo").change(function(){
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#view-img').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
});

</script>

@endsection
