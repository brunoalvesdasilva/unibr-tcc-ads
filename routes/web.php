<?php

// Autenticação e Página
Route::get('/', 'AutenticacaoController@index');
Route::post('/', 'AutenticacaoController@logon');
Route::get('/logout', 'AutenticacaoController@logout');


Route::get('/home', function () {
    return view('sistema/home');
});

Route::resource('produto', 'ProdutoController');
Route::resource('departamento', 'DepartamentoController');
Route::resource('servico', 'ServicoController');
Route::resource('conta', 'ContaController');
Route::resource('movimentacao', 'MovimentacaoController');
Route::resource('usuario','UsuarioController');
Route::resource('chamado','ChamadoController');
//});
    
Route::get('/icomoon', function () {
    return view('fonts');
});

Route::get('/{app}', function ($app) {
    return view("$app/list");
});

Route::get('/{app}/{router}', function ($app, $router="list") {
    return view("$app/$router");
});
