<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComprovanteController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\DeclaracaoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\NivelController;


use App\Http\Controllers\AuthController;/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('alunos', AlunoController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('comprovantes', ComprovanteController::class);
Route::resource('cursos', CursoController::class);
Route::resource('declaracoes', DeclaracaoController::class);
Route::resource('documentos', DocumentoController::class);
Route::resource('nivels', NivelController::class);
Route::resource('turmas', TurmaController::class);


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('home');
})->middleware('auth');
