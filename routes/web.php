<?php
Route::get('/', function () {
    return view('home');
});

Route::resource('produto', 'ProdutoController');
Route::resource('departamento', 'DepartamentoController');
Route::resource('servico', 'ServicoController');
Route::resource('conta', 'ContaController');
Route::resource('usuario', 'UsuarioController');
Route::resource('movimentacao', 'MovimentacaoController');
Route::resource('usuario','UsuarioController');

Route::get('/icomoon', function () {
    return view('fonts');
});

Route::get('/{app}', function ($app) {
    return view("$app/list");
});

Route::get('/{app}/{router}', function ($app, $router="list") {
    return view("$app/$router");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
