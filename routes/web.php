<?php
// Autenticação e Página
Route::get('/', 'AutenticacaoController@index');
Route::post('/', 'AutenticacaoController@logon');
Route::get('/logout', 'AutenticacaoController@logout');
Route::get('/home', 'HomeController@index');

Route::get('/home/{tema}', function ($tema='normal'){
   \Session::put('sistema_tema', $tema);
   return redirect('/home')->with('message', 'Tema alterado com sucesso!');
});

Route::group(['middleware' => 'usuario'], function () {
    
    Route::resource('produto', 'ProdutoController');
    Route::resource('departamento', 'DepartamentoController');
    Route::resource('servico', 'ServicoController');
    Route::resource('conta', 'ContaController');
    Route::resource('usuario', 'UsuarioController');
    Route::resource('movimentacao', 'MovimentacaoController');
    Route::resource('usuario','UsuarioController');
    Route::resource('chamado','ChamadoController');
    
});
    
Route::get('/icomoon', function () {
    return view('fonts');
});

Route::get('/{app}', function ($app) {
    return view("$app/list");
});

Route::get('/{app}/{router}', function ($app, $router="list") {
    return view("$app/$router");
});
