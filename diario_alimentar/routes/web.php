<?php

use App\Http\Controllers\AguaController;
use App\Http\Controllers\AtividadeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AlimentoController;
use App\Http\Controllers\RefeicaoController;


Route::get('/welcome', [UsuarioController::class, 'index']);

Route::get('/refeicao/create', [RefeicaoController::class, 'create']);

Route::get('/1', [RefeicaoController::class, 'index']);
Route::get('/refeicao', [RefeicaoController::class, 'show']);

Route::get('/usuario', [UsuarioController::class, 'index']);
Route::get('/alimento', [AlimentoController::class, 'index']);
Route::get('/refeicao', [RefeicaoController::class, 'show']);
Route::get('/agua', [AguaController::class, 'index']);
Route::get('/atividade', [AtividadeController::class, 'index']);

