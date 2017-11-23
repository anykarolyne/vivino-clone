 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



// Rotas de Autenticação
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Rotas de Cadastro
Route::get('cadastro', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');


//Rotas de Recuperação
Route::get('redefinir/acesso', 'Auth\PasswordController@getEmail');
Route::post('redefinir/acesso', 'Auth\PasswordController@postEmail');

//Rotas de resetar senha
Route::get('redefinir/senha/{token}', 'Auth\PasswordController@getReset');
Route::post('redefinir/senha', 'Auth\PasswordController@postReset');


Route::get('/', function () 
{
    return view('public.slide');
});



Route::group(['prefix' => 'usuario', 'middleware' => 'auth'], function () {

		//pagina principal

        Route::get('home', ['as'=>'home', 'uses'=>'HomeController@home']);
		Route::get('admin', ['as'=>'index', 'uses'=>'HomeController@index']);

		Route::get('editar', ['as'=>'editar_usuario', 'uses'=>'UserController@edit']);
		Route::post('atualizar', ['as'=>'atualizar_usuario', 'uses'=>'UserController@update']);

		Route::group(['prefix'=>'wines'], function(){
			Route::get('/',['as' => 'index_wine', 'uses'=>'WineController@index']);
			Route::post('salvar', ['as' => 'salvar_wine', 'uses' => 'WineController@store']);
			Route::get('editar/{id}', ['as' => 'editar_wine', 'uses' => 'WineController@edit']);
	    	Route::post('atualizar/{id}', ['as' => 'atualizar_wine', 'uses' => 'WineController@update']);
			Route::get('remover/{id}', ['as' => 'remover_wine', 'uses' => 'WineController@destroy']);

		});


	    // Images Route...
	    Route::get('/images/{folder}/{image?}/{size?}', ['as' => 'images', 'uses' => function($folder, $image, $size) {
	        $path = storage_path() . '/app/' . $folder . '/' . $image;
	        $img = Image::make($path)->resize(null, $size, function ($constraint) {
	            $constraint->aspectRatio();
	        });
	        return $img->response();
	    }]);
});











