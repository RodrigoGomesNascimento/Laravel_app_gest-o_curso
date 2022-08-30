<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Node\Stmt\Echo_;

class ContatoController extends Controller
{
    public function contato() {
=======

class ContatoController extends Controller
{
     public function contato() {
<<<<<<< HEAD
>>>>>>> 521a829 (first app_gestão)
        return view('site.contato');
=======

        // para testar se esta chengando os dados
        //var_dump($_POST);
        return view('site.contato', ['titulo' =>'Contato']);
>>>>>>> 784038a (Inserindo Migrate e Models)
=======
use App\SiteContato;

class ContatoController extends Controller
{
     public function contato(Request $request) {

        // para testar se esta chengando os dados
        //var_dump($_POST);

        //criar gravar no banco.
        //criar o retorno do input selected no form

        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];


        return view('site.contato', ['titulo' =>'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){
      /* $contato = new SiteContato();
       $contato->create($request->all());
       */
      $request->validate([
        'nome'=> 'required',//tem que ser o nome do input do form
        'telefone' => 'required',
        'email' => 'required',
        'motivo_contato' => 'required',
        'mensagem' => 'required',

      ]);
      SiteContato::create($request->all());

    return view('site.contato', ['titulo' =>'Contato']);//retornar a mesma pagina apos salvar.

>>>>>>> da12751 (Editado em casa)
    }
}
