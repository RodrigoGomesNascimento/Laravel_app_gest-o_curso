<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\ContatoControler;
>>>>>>> 521a829 (first app_gestão)
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
<<<<<<< HEAD
*/
/*

as rotas podem ser assim ou com string e o controller fazendo a vez da função de callback

Route::get('/', function () {
    return ('Hello wordd');
});
Route::get('/sobre-nos', function () {
    return ('Sobre-nós');
});
Route::get('/contato', function () {
    return ('Contato');
});*/

/* principais verbos http que controlam as requisiçoes para p servidor são
get
post
put
patch
delete
options
 é passado dois parametro
 Route::get($uri, $callback) função que indica ação a ser tomada qnto ao caminho.
*/


Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');

//rota com parametros.
Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
 function(string $nome = 'Não informado', string $categoria = 'Não informada', string $assunto = 'desconhecido', string $mensagem = 'mensagem não informada') {
    echo "Estamos aaquiii: .$nome - $categoria - $assunto - $mensagem";
});
=======

    Route::get('/', function () {
    return view('welcome');
});

/* //rotas com parametros
    rotas com parametros podem tb ser passada em branco ou desde que haja uma
    previsão para isso como (?) e os argumentos padrões passados para preenchimento
    e tem que ser da direita para a esquerda.

    Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{menssagem?}', function(
    string $nome = 'Desconhecido',
    string $categoria = 'Indefinida',
    string $assunto = 'Não especificado',
    string $menssagem = 'Mensagem não adicionada'

    ){
    echo "Estamos aqui : $nome - $categoria - $assunto - $menssagem" ;
});

//parametros com expressões regulares.

Route::get('/contato/{nome}/{categoria_id}', function(
    string $nome = 'Desconhecido',
    int $categoria_id = 1 //1 - 'Informação',
    ){
    echo "Estamos aqui : $nome - $categoria_id" ;
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');//tem que ser inteiro e pelo menos um numero.
/*Redirecionamento de rotas
     Route::get('/rota1', function() {
     echo 'Rota 1 ';
 })->name('site.rota1');

 Route::get('/rota2', function() {

     return redirect()->route('site.rota1');

 })->name('site.rota2');

 //Route::redirect('/rota2', '/rota1');
 */

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobrenos', 'SpbreNosController@sobrenos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){

    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

Route::fallback(function() {
    echo 'A Rota acessada não exite. <a href="'.route('site.index').'">Clique aqui</a> para ir para pagina index';
});

     Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

>>>>>>> 521a829 (first app_gestão)
