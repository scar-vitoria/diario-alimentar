<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Alimento;
use App\Models\Refeicao; 

class AlimentoController extends Controller
{
   
    public function create(){
        return view('alimentos.create');
    }

    public function store(Request $request) {

        $alimento = new alimento;

        $alimento->nomeReferencia = $request->nomeReferencia;
        $alimento->tipoReferencia = $request->tipoReferencia;
        $alimento->quantidadeReferencia = $request->quantidadeReferencia;
        $alimento->medidaReferencia = $request->medidaReferencia;
        $alimento->calReferencia = $request->calReferencia;
        $alimento->carbReferencia = $request->carbReferencia;
        $alimento->proteinReferencia = $request->proteinReferencia;
        
        $alimento->save();
        
        /*mudar rota quando a tela refeições estiver pronta*/
        return redirect('/diario/create')->with('success', 'Alimento adicionado com sucesso!');
    }

    public function show($id){
        $alimento = Alimento::findOrFail($id);

        return view('alimentos.show', ['alimento' => $alimento, 'alimentoOwner' => $alimentoOwner]);
    }



    public function destroy($id) {

        Alimento::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Alimento excluído com sucesso.');

    }

    public function edit($id) {

        $user = auth()->user();
        
        $alimento = Alimento::findOrFail($id);

        if($user->id != $alimento->user_id) {
         
            return redirect('/dashboard');
        }

        return view('alimentos.edit', ['alimento' => $alimento]);

    }

    public function update(Request $request) {

        $data = $request->all();

        Alimento::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Alimento alterado com sucesso');

    }


}
