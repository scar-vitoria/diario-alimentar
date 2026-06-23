@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')

<div class="back-white">

    <br><p class="text-center">Relátorio nutricional mensal</p>

    @php

    $totaisRefeicao = [];

    foreach($refeicoes as $refeicao){

        $tipo = $refeicao->tipo;

        // cria estrutura
        if(!isset($totaisRefeicao[$tipo])){

            $totaisRefeicao[$tipo] = [
                'calorias' => 0,
                'carboidratos' => 0,
                'proteinas' => 0,
            ];
        }

        foreach($refeicao->alimentos as $alimento){

            $quantidade = $alimento->pivot->quantidadeConsumida;

            $calorias =
                ($alimento->calReferencia * $quantidade)
                / $alimento->quantidadeReferencia;

            $carboidratos =
                ($alimento->carbReferencia * $quantidade)
                / $alimento->quantidadeReferencia;

            $proteinas =
                ($alimento->proteinReferencia * $quantidade)
                / $alimento->quantidadeReferencia;

            $totaisRefeicao[$tipo]['calorias'] += $calorias;

            $totaisRefeicao[$tipo]['carboidratos'] += $carboidratos;

            $totaisRefeicao[$tipo]['proteinas'] += $proteinas;
        }
    }

    @endphp

    <table class="table table_relatorio mt-3 mx-auto" style="font-size: 12px;">
        <thead>
            <tr>
                <th>
                    <form method="GET">
                        <div class="d-flex align-items-center" style="height: 10px">
                           
                            <div>
                                <select name="mes" id="mes" class="form-control"  onchange="this.form.submit()">
                                    <option>Selecionar mês</option>
                                    @foreach($meses as $item)
                                    <option
                                        value="{{ $item->mes }}"
                                        {{ $mesSelecionado == $item->mes ? 'selected' : '' }}
                                    >
                                        {{ \Carbon\Carbon::parse($item->mes)->format('m/Y') }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </th>
                <th style="background: #FF8C00; color: white; text-align: center">Calorias (kcal)</th>
                <th style="background: #6A5ACD; color: white; text-align: center">Carboidratos (g)</th>
                <th style="background: #32CD32; color: white;  text-align: center">Proteínas (g)</th>
            </tr>
        </thead>
    @if(empty( $mesSelecionado ))
    @else
    <tbody>
        @foreach($totaisRefeicao as $tipo => $total)
            <tr>
                <th style="text-align: left">
                    {{ $tipo }}
                </td>

                <th style="text-align: center">
                    {{ number_format($total['calorias'], 2, ',', '.') }}
                    kcal
                </th>

                <th style="text-align: center">
                    {{ number_format($total['carboidratos'], 2, ',', '.') }}
                    g
                </th>

                <th style="text-align: center">
                    {{ number_format($total['proteinas'], 2, ',', '.') }}
                    g
                </th>
            </tr>
        @endforeach
    </tbody>
    </table>
    @endif
    
@endsection
</div>