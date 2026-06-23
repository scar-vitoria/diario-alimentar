<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Refeicao;
use App\Models\Alimento;
use App\Models\User;
use Carbon\Carbon;

class RefeicaoController extends Controller
{

    public function create(){
        $alimentos = Alimento::all();
        
        return view('diario.create', ['alimentos' => $alimentos]);
    }

    public function store(Request $request) {

        $refeicao = new refeicao;

        $refeicao->data = $request->data;
        $refeicao->tipo = $request->tipo;
        $refeicao->periodo = $request->periodo;
        $refeicao->user_id = auth()->id();

        $refeicao->save();

        // Associa alimentos com suas quantidades
        if ($request->has('alimentos')) {
            foreach ($request->alimentos as $alimento) {
                if (isset($alimento['id']) && !empty($alimento['quantidadeConsumida'])) {
                    $refeicao->alimentos()->attach($alimento['id'], ['quantidadeConsumida' => $alimento['quantidadeConsumida']]);
                }
            }
        }

        $user = auth()->user();

        $refeicao->user_id = $user->id;

        $refeicao->save();
    
        return redirect('/home') -> with('msg', 'Refeição cadastrada com sucesso');
    }

    public function show($id){

         $refeicao = Refeicao::with('alimentos')->findOrFail($id);

        return view('diario.show', compact('refeicao'));
    }

    public function edit($id) {

        $refeicao = Refeicao::findOrFail($id);
        $alimentos = Alimento::all();
     
        return view('diario.edit', compact('refeicao', 'alimentos'));
    }

    public function update(Request $request, $id) {

        $refeicao = Refeicao::findOrFail($id);

        $refeicao->update([
            'data' => $request->data,
            'tipo' => $request->tipo,
            'periodo' => $request->periodo, 
        ]);

        return redirect('/diario/dashboard')
            ->with('msg', 'Refeição atualizada com sucesso!');    
    }


    public function destroy($id) {

        Refeicao::findOrFail($id)->delete();

        return redirect('diario/dashboard')->with('msg', 'Refeição excluída com sucesso.');

    }

    public function semanal(Request $request){
        //semanas existentes
        $semanas = Refeicao::where('user_id', auth()->id())
            ->selectRaw("
                YEAR(data) as ano,
                WEEK(data, 1) as semana
            ")
            ->distinct()
            ->orderBy('ano', 'desc')
            ->orderBy('semana', 'desc')
            ->get();

        $semanaSelecionada = $request->semana;

        $refeicoes = Refeicao::with('alimentos')
            ->where('user_id', auth()->id())
            ->when($semanaSelecionada, function ($query) use ($semanaSelecionada) {

                [$ano, $semana] = explode('-', $semanaSelecionada);

                $query->whereYear('data', $ano)
                    ->whereRaw('WEEK(data, 1) = ?', [$semana]);
            })
            ->get();

        return view('relatorio.semanal', compact(
            'semanas',
            'refeicoes',
            'semanaSelecionada'
        ));
    }

    
    public function dashboard(){

        $user = auth()->user();

        $refeicoes = $user->refeicoes;

        $refeicaoCadastrada = $user->refeicaoCadastrada;

        return view('diario.dashboard', ['refeicoes' => $refeicoes, 'refeicaoCadastrada' => $refeicaoCadastrada]);
    }

    public function diario(Request $request){
        // datas únicas para o select
        $datas = Refeicao::where('user_id', auth()->id())
            ->select('data')
            ->distinct()
            ->orderBy('data', 'desc')
            ->get();

        // data selecionada
        $dataSelecionada = $request->data;

        // refeições da data
        $refeicoes = Refeicao::with('alimentos')
            ->where('user_id', auth()->id())
            ->when($dataSelecionada, function ($query) use ($dataSelecionada) {
                $query->whereDate('data', $dataSelecionada);
            })
            ->get();

        return view('relatorio.diario', compact(
            'datas',
            'refeicoes',
            'dataSelecionada'
        ));
       
    }

    public function mensal(Request $request){
        // meses registrados
        $meses = Refeicao::where('user_id', auth()->id())
            ->selectRaw("DATE_FORMAT(data, '%Y-%m') as mes")
            ->distinct()
            ->orderBy('mes', 'desc')
            ->get();

        // mês selecionado
        $mesSelecionado = $request->mes;

        $refeicoes = Refeicao::with('alimentos')
            ->where('user_id', auth()->id())
            ->when($mesSelecionado, function ($query) use ($mesSelecionado) {

                $ano = Carbon::parse($mesSelecionado)->year;
                $mes = Carbon::parse($mesSelecionado)->month;

                $query->whereYear('data', $ano)
                    ->whereMonth('data', $mes);
            })
            ->orderBy('data')
            ->get();

        return view('relatorio.mensal', compact(
            'meses',
            'refeicoes',
            'mesSelecionado'
        ));
    }

    public function editAlimento($id){
        $refeicao = Refeicao::findOrFail($id);
        $alimentos = Alimento::all();

        return view('diario.editAlimento', compact('refeicao', 'alimentos'));

    }
    
    public function updateAlimento(Request $request, $id) {

        $refeicao = Refeicao::findOrFail($id);

        foreach ($request->alimentos as $alimentoId => $dados) {

            if (
                isset($dados['id']) &&
                !empty($dados['quantidadeConsumida'])
            ) {

                $refeicao->alimentos()->syncWithoutDetaching([
                    $alimentoId => [
                        'quantidadeConsumida' => $dados['quantidadeConsumida']
                    ]
                ]);
            }
        }

        return redirect('/diario/dashboard')
            ->with('msg', 'Alimentos adicionados com sucesso!');
    }

    public function removerAlimentoDaRefeicao($refeicao_id, $alimento_id) {

        $user = auth()->user();

        $refeicao = Refeicao::where('id', $refeicao_id)
            ->where('user_id', $user->id)
            ->firstOrFail();

        $alimento = Alimento::findOrFail($alimento_id);

        $refeicao->alimentos()->detach($alimento_id);

        return redirect('/diario/dashboard')
            ->with('msg', 'Alimento removido do diário: ' . $alimento->nomeReferencia);

    }


}
