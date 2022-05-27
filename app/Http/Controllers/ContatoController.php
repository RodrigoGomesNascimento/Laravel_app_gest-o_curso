<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class ContatoController extends Controller
{
    public function contato() {
        return view('site.contato');
    }
}
