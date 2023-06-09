<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\EstaticoController;
use App\Http\Controllers\DinamicoController;
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

Route::get('/',[PrincipalController::class, 
'index']);

Route::get('/sobrenos',[SobreNosController::class,
'index']);

Route::get('/contato', [ContatoController::class, 
'index']);

Route::get('/estatico', [EstaticoController::class, 
'index']);

Route::get('/estatico-lista', [EstaticoController::class, 
'show']);

Route::get('/dinamico/{nome}', [DinamicoController::class, 
'index']);