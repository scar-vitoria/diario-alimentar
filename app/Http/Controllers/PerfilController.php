<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Refeicao;
use App\Models\Perfil;
use App\Models\Agua;
use App\Models\Alimento;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PerfilController extends Controller
{
   
    public function home(){
        $refeicoes = Refeicao::with('alimentos')
            ->where('user_id', auth()->id())
            ->whereDate('data', Carbon::today())
            ->get();

        $totalCalorias = 0;
        $totalCarboidratos = 0;
        $totalProteinas = 0;
        $totalContador = 0;

        $totalContador = Agua::whereDate('data', Carbon::today())
            ->sum('quant');
        
        foreach($refeicoes as $refeicao){

            foreach($refeicao->alimentos as $alimento){

                $quantidade = $alimento->pivot->quantidadeConsumida;

                $totalCalorias +=
                    ($alimento->calReferencia * $quantidade)
                    / $alimento->quantidadeReferencia;

                $totalCarboidratos +=
                    ($alimento->carbReferencia * $quantidade)
                    / $alimento->quantidadeReferencia;

                $totalProteinas += ($alimento->proteinReferencia / 100) * $quantidade;
            }
        }

        return view('home', compact('totalCalorias', 'totalCarboidratos', 'totalProteinas', 'totalContador'
        ));
    }

    public function index(){
        
        $user = auth()->user();

        $perfil = Perfil::where('user_id', $user->id)->first();

        return view('perfil.show', ['perfil' => $perfil]);
    }

    public function store(Request $request) {

        $perfil = new Perfil;

        $user = auth()->user();

        $perfil->user_id = $user->id;
        $perfil->apelido = $user->name;
        $perfil->nasc = $request->nasc;
        $perfil->peso = $request->peso;
        $perfil->altura = $request->altura;
        $perfil->genero = $request->genero;
        $perfil->objetivo = $request->objetivo;
       
        $perfil->save();

        $perfil->user_id = $user->id;

        return redirect('/perfil/show');
    } 

    public function edit() {

        $user = auth()->user();
        
        $perfil = Perfil::where('user_id', $user->id)->firstOrFail();

        return view('perfil.edit', ['perfil' => $perfil]);
    }    

    public function update(Request $request, $id)
    {
        $perfil = Perfil::where('user_id', $id)->firstOrFail();

        $perfil = Perfil::findOrFail($id);

        $perfil->update([
            'peso' => $request->peso,
            'altura' => $request->altura,
            'nasc' => $request->nasc,
            'genero' => $request->genero,
            'objetivo' => $request->objetivo,
        ]);

        return redirect('/perfil/show')->with('msg', 'Perfil alterado com sucesso');
    }

    public function destroy($id) {

        User::findOrFail($id)->delete();

        return view('/welcome')->with('msg', 'Usuário excluído com sucesso.');
    }

    //exibe os detalhes de uma refeicao
    public function show($id){

        $perfil = Perfil::where('user_id', auth()->id())->first();

        return view('perfil.show', compact('perfil'));

    }

    //tabela com as rereições cadastradas
    public function dashboard(){

        $user = auth()->user();

        $refeicoes = $user->refeicoes;

        return view('refeicoes.dashboard', ['refeicoes' => $refeicoes]);
    }

     

}
