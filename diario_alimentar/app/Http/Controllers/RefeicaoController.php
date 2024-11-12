<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refeicao;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class RefeicaoController extends Controller
{
    public function index(): Factory|View{
        
        //Envia todos os alimentos para a VIEW - Obtém todas as refeições do banco de dados
        $refeicoes = Refeicao::all();
        return view('welcome', ['refeicoes' => $refeicoes]);
    }

    public function create(): Factory|View{
        $refeicoes = Refeicao::all();
     
        return view('refeicao/create', ['refeicoes' => $refeicoes]);
    }
}    


