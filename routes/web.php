<?php

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
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}',
 function(string $nome, string $categoria, string $assunto, string $mensagem) {
    echo "Estamos aaquiii: .$nome - $categoria - $assunto - $mensagem";
});
