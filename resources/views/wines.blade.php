@extends('welcome')
@section('carteira')
<div class="form-group">
    <h1><center> Vinhos </center></h1>
</div>
</br></br>
<div class="col-sm-12">
	<form method="POST" action="{{strpos(Request::url(), 'editar') ? route('atualizar_wine', $wine->id) : route('salvar_wine')}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="form-group">
		        <label for="nome">Produtor</label>
		        <input type="text" class="form-control" name="producer" value="{{strpos(Request::url(), 'editar') ? $wine->producer : ''}}" id="descricao" required>
		    </div>

		    <div class="form-group">
		        <label for="nome">Nome do Vinho</label>
		        <input type="text" class="form-control" name="name" value="{{strpos(Request::url(), 'editar') ? $wine->name : ''}}" id="descricao">
		    </div>

		    <div class="form-group">
		        <label for="nome">País</label>
		        <input type="text" class="form-control" name="country" value="{{strpos(Request::url(), 'editar') ? $wine->country  : ''}}" id="descricao">
		    </div>
		    <div class="form-group">
		        <label for="nome">Tipo</label>
		        <input type="text" class="form-control" name="type" value="{{strpos(Request::url(), 'editar') ? $wine->type : ''}}" id="descricao">
		    </div>
		    <div class="form-group">
		        <label for="nome">Estilo</label>
		        <input type="text" class="form-control" name="style" value="{{strpos(Request::url(), 'editar') ? $wine->country  : ''}}" id="descricao">
		    </div>
		    <div class="form-group">
		        <label for="nome">Tipo da Uva</label>
		        <input type="text" class="form-control" name="grape" value="{{strpos(Request::url(), 'editar') ? $wine->grape : ''}}" id="descricao">
		    </div>
		     <div class="form-group">
		        <label for="nome">Harmonização</label>
		        <input type="text" class="form-control" name="harmonization" value="{{strpos(Request::url(), 'editar') ? $wine->harmonization : ''}}" id="descricao">
		    </div>
		    
		    <input type="submit" value="{{strpos(Request::url(), 'editar') ? 'Editar Vinho' : 'Cadastrar Vinho'}}" class="btn btn-default">
		</div>

		
		
	</form>
	    <div class="panel-body">
	            <table class="table">
	            <thead>
	                <tr>
	                    <th> País</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($wines as $wine)
	                <tr>
	                    <td>{{$wine->country}}</td>
	                    <td>
	                        <a href="{{route('editar_wine', $wine->id)}}" class="btn btn-sm btn-warning glyphicon glyphicon-pencil"></a>
	                    </td>
	                    <td>
	                        <a href="#" class="remover_wine" data-id="{{$wine->id}}"><li class="btn btn-sm btn-danger glyphicon glyphicon-remove"></li></a>
	                    </td>
	                </tr>
	                @endforeach
	            </tbody>
	        </table>
	    </div>
	</div>
</div>



        <script>
        
        		$('.remover_wine').click(function() 
        		{
		            var conta_id = $(this).attr("data-id");
		            deleteConta(conta_id);
		        });

				 function deleteConta(conta_id) {

					swal({
					  title: "Você quer remover esta conta ?",
					  text: "Você não poderá recuperar esta informação, após a remoção !",
					  type: "warning",
					  showCancelButton: true,
					  confirmButtonColor: "#DD6B55",
					  cancelButtonText: "Não",
					  confirmButtonText: "Sim, Remover Conta !",
					  closeOnConfirm: false
					},function() {
		                	$.ajax({
		                            
		                            url: "/usuario/contas/remover/"+conta_id,
		                            type: "get",
		                            
		                            
		                        })
		                        .done(function() {
		                            swal({
		                                title: "Removido!",
		                                text: "A conta foi removida com sucesso.",
		                                type: "success",
		                                confirmButtonText: "Ok"
		                            }, function() {
		                                setTimeout(function() { location.reload(1);}, 500);
		                            });
		                        }).error(function() {
		                    swal({
		                        title: "Erro",
		                        text: "A conta não pode ser removida.",
		                        type: "error",
		                        confirmButtonText: "Ok"
		                    }, function() {
		                        location.reload();
		                    });
		                });
            		});
			};




		</script>

@endsection