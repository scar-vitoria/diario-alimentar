<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Agua;
use Illuminate\Http\Request;

class AguaController extends Controller
{
    public function create(){
        $agua = new Agua;

        return view('agua.create', ['agua' => $agua]);
    }

    public function store(Request $request) {

        $agua = new Agua;

        $user = auth()->user();

        $agua->data = $request->data;
        $agua->hora = $request->hora;
        $agua->quant = $request->quant;
        $agua->user_id_agua = $user->id;
     
        $agua->save();

        $agua->user_id = $user->id;

        return redirect('/home')-> with('msg', 'Consumo de água cadastrada com sucesso');
    } 

    public function dashboard(){
    
        $user = auth()->user();

        $aguas = $user->aguas;
           
     return view('agua/dashboard', ['aguas' => $aguas]);    
    }

    public function edit() {

        $user = auth()->user();
        
        $agua = Agua::where('user_id_agua', $user->id)->firstOrFail();

        return view('agua.edit', ['agua' => $agua]);
    }    

    public function update(Request $request, $id) {

       $agua = Agua::findOrFail($id);

        $agua->update([
            'data' => $request->data,
            'hora' => $request->hora,
            'quant' => $request->quant, 
        ]);

        return redirect('agua/dashboard')->with('msg', 'Registro alterado com sucesso');
    }

   
    public function destroy($id) {

        Agua::findOrFail($id)->delete();

        return redirect('agua/dashboard')->with('msg', 'Refeição excluída com sucesso.');
    }

    //exibe os detalhes de uma refeicao
    public function show($id){

        $agua = Agua::where('user_id_agua', auth()->id())->first();

        return view('agua.show', compact('agua'));
    }

}
