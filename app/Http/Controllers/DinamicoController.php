<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinamicoController extends Controller
{
    public function index(string $nome ){
        return view('site.dinamico', ['nomes'=>$nome]);

        
    }
}
