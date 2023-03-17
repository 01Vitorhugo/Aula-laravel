<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstaticoController extends Controller
{
    public function index(){
        return view('site.estatico');
    }
    public function show(){
        return view('site.estatico',['id'=>'1', 'produto'=>'Camisa', 'fornecedor'=>'Xiiique', 'preco'=>'250']);
    } 
}
