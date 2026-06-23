<?php

use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\RefeicaoController;
use App\Http\Controllers\AlimentoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AguaController;

use Illuminate\Support\Facades\Route;

//Tela home
Route::get('/welcome', function () { return view('welcome');});

Route::get('/', function () { return view('welcome'); });

Route::get('/home', [PerfilController::class, 'home'])->middleware('auth')->name('home');


//Tela perfil usuário
Route::get('/perfil/show', [PerfilController::class, 'index'])->middleware('auth');

//Tela para editar perfil do usuário
Route::get('/perfil/edit/{id}', [PerfilController::class, 'edit'])->middleware('auth');
Route::put('/perfil/update/{id}', [PerfilController::class, 'update'])->middleware('auth');


//Form criar alimento
Route::get('/alimentos/create', [AlimentoController::class, 'create'])->middleware('auth');
Route::post('/alimentos', [AlimentoController::class, 'store']);


//Form criar refeicao
Route::get('/diario/create', [RefeicaoController::class, 'create'])->middleware('auth');
Route::post('/diario', [RefeicaoController::class, 'store']);

//Mostrar refeições
Route::get('/diario/dashboard', [RefeicaoController::class, 'dashboard'])->middleware('auth');

//Mostrar uma refeição especifica
Route::get('/diario/{id}', [RefeicaoController::class, 'show']);

//Editar refeição
Route::get('/diario/edit/{id}', [RefeicaoController::class, 'edit'])->middleware('auth');
Route::put('/diario/update/{id}', [RefeicaoController::class, 'update'])->middleware('auth');

//Excluir refeição
Route::delete('/diario/{id}', [RefeicaoController::class, 'destroy']);

//Excluir alimento
Route::delete(
    '/refeicao/{refeicao_id}/alimento/{alimento_id}',
    [RefeicaoController::class, 'removerAlimentoDaRefeicao']
);

//Adicionar ou editar alimento na refeição 
Route::get('/diario/editAlimento/{id}', [RefeicaoController::class, 'editAlimento']);
Route::put('/diario/updateAlimento/{id}', [RefeicaoController::class, 'updateAlimento']);

Route::get('/refeicao/{id}', [RefeicaoController::class, 'addAlimento'])->middleware('auth');
Route::put('/refeicao/update/addAlimento/{id}', [RefeicaoController::class, 'update'])->middleware('auth');

Route::get('/relatorio/diario', [RefeicaoController::class, 'diario'])->middleware('auth');
Route::get('/relatorio/mensal', [RefeicaoController::class, 'mensal'])->middleware('auth');
Route::get('/relatorio/semanal', [RefeicaoController::class, 'semanal'])->middleware('auth');

Route::get('/agua/create', [AguaController::class, 'create'])->middleware('auth');
Route::post('/agua', [AguaController::class, 'store']);
Route::get('/agua/dashboard', [AguaController::class, 'dashboard'])->middleware('auth');
Route::get('/agua/{id}', [AguaController::class, 'show'])->middleware('auth');
Route::delete('/agua/{id}', [AguaController::class, 'destroy']);
Route::get('/agua/edit/{id}', [AguaController::class, 'edit']);
Route::put('/agua/update/{id}', [AguaController::class, 'update']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});









