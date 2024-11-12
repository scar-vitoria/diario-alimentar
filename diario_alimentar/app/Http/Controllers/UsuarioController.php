<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Refeicao;

class UsuarioController extends Controller
{
    //rota principal 
    public function index() {
        
        $refeicoes = Refeicao::all();
        return view('welcome', ['refeicoes' => $refeicoes]);
    }
}
