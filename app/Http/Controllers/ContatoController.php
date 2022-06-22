<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    }
}
