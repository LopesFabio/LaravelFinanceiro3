<?php
//Route::TipodeRota('nome da url', 'NomedoController@NomedoMetodo')
Route::get('/cadastrar', 'Banco\CadastroController@create')->name('cadastrar')->middleware('auth');
Route::post('cadastroconfirm', 'Banco\CadastroController@store')->name('cadastrar')->middleware('auth');
Route::get('/banco/testes', 'Banco\CadastroController@testes')->middleware('auth');
Route::resource('/banco', 'Banco\CadastroController')->middleware('auth');

//rotas das contas
Route::get('/Contas/adcionar', 'Banco\Contas\ContaController@create')->name('cadconta')->middleware('auth');
Route::get('/contas/todas', 'Banco\Contas\ContaController@index')->name('todas.contas')->middleware('auth');
Route::get('/contas/tipos', 'Banco\Contas\Tipo_ContaController@index')->name('tipo.conta')->middleware('auth');
Route::resource('/conta', 'Banco\Contas\ContaController');

//Adcionar tipo de conta
Route::post('/tipo/teste', 'Banco\Contas\Tipo_ContaController@teste')->name('tipo.teste')->middleware('auth');
Route::get('/tipo-de-contas/excluir', 'Banco\Contas\Tipo_ContaController@show')->name('tipocontas.show')->middleware('auth');
Route::resource('/tipocontas', 'Banco\Contas\Tipo_ContaController')->middleware('auth');
//rota de teste
Route::get('/teste', 'Banco\Contas\ContaController@teste');

/*
 * Rotas de Vencimentos
 */
Route::post('vencimentos/lanceInsert', 'Vencimentos\VencimentoController@lanceInsert')->name('lance.inserir');
Route::get('vencimentos', 'Vencimentos\VencimentoController@historico')->name('vencimentos.historico')->middleware('auth');
Route::get('vencimentos/receber', 'Vencimentos\VencimentoController@receber')->name('vencimentos.receber')->middleware('auth');
Route::get('vencimentos/pagar', 'Vencimentos\VencimentoController@pagar')->name('vencimentos.pagar')->middleware('auth');
Route::get('vencimentos/lancar', 'Vencimentos\VencimentoController@lancar')->name('vencimentos.lancar')->middleware('auth');

//Rota para pagina de usuario
Route::get('/profile', 'usuarios\UsuarioController@index')->name('profile')->middleware('auth');


Route::get('/', function () {
    return view('home')->name('home');
});

Auth::routes();

Route::get('/', 'Home\HomeController@index')->name('home.index');
Route::get('/Painel', 'Painel\PainelController@index')->name('painel.index');
Route::get('/painel', 'Home\HomeController@index');
