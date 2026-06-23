@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')

<div class="back-white ">

    <br><p class="text-center">Relátorio nutricional semanal</p>

    <form method="GET">

        <div class="col-5 inline-main align-vert">
            <label style="margin-left: 70px; margin-right: 10px;">Semana:</label>
            <select name="semana" class="form-control" onchange="this.form.submit()">
                <option value="">Selecione</option>
                @foreach($semanas as $item)
                    @php
                        $inicioSemana = \Carbon\Carbon::now()
                            ->setISODate($item->ano, $item->semana)
                            ->startOfWeek();

                        $fimSemana = \Carbon\Carbon::now()
                            ->setISODate($item->ano, $item->semana)
                            ->endOfWeek();
                    @endphp
                    <option value="{{ $item->ano }}-{{ $item->semana }}"                        >

                        Semana {{ $item->semana }}
                        -
                        {{ $inicioSemana->format('d/m') }}
                        até
                        {{ $fimSemana->format('d/m') }}

                    </option>
                @endforeach
            </select>
        </div>
    </form>
   
    @php

    $totaisRefeicao = [];

    $totalSemanaCal = 0;
    $totalSemanaCarb = 0;
    $totalSemanaProt = 0;

    foreach($refeicoes as $refeicao){

        $tipo = $refeicao->tipo;

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

            $totalSemanaCal += $calorias;
            $totalSemanaCarb += $carboidratos;
            $totalSemanaProt += $proteinas;
        }
    }

    @endphp

    

    <div class="d-flex justify-content-center edit-food-consumo-main mt-3">

        <div class="edit-food-consumo d-flex box-1">
            <img src="/img/calorias.png" width="auto" height="60%" alt="" >
            <table class="teste">
                <thead>
                    <tr>
                        <th class="table_relatorio">Calorias</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table_relatorio"><h2>{{ number_format($totalSemanaCal, 2, '.', '.') }} <span style="font-size: 0.9rem">kcal</span></h2></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="edit-food-consumo d-flex box-2">
            <img src="/img/carboidratos.png" width="auto" height="60%" alt="" >
            <table class="teste">
                <thead>
                    <tr>
                        <th class="table_relatorio">Carboidratos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table_relatorio"><h2>{{ number_format($totalSemanaCarb, 2, '.', '.') }} <span style="font-size: 0.9rem">kcal</span></h2></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="edit-food-consumo d-flex box-3">
            <img src="/img/protein.png" width="auto" height="60%" alt="" />
            <table >
                <thead>
                    <tr >
                        <th class="table_relatorio">Proteínas</th>
                    </tr>
                </thead>
                <tbody class="teste">
                    <tr class="teste">
                        <td class="table_relatorio"><h2>{{ number_format($totalSemanaProt, 2, '.', '.') }} <span style="font-size: 0.9rem">g</span></h2></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <br>    
    <div>
        <table class="table table_relatorio mt-3 mx-auto" style="font-size: 12px;">
            <thead>

                <tr>
                    <th>Refeição</th>
                    <th>Calorias</th>
                    <th>Carboidratos</th>
                    <th>Proteínas</th>
                </tr>

            </thead>

            <tbody>

                @foreach($totaisRefeicao as $tipo => $total)

                    <tr>

                        <td>{{ $tipo }}</td>

                        <td>
                            {{ number_format($total['calorias'], 2, ',', '.') }}
                            kcal
                        </td>

                        <td>
                            {{ number_format($total['carboidratos'], 2, ',', '.') }}
                            g
                        </td>

                        <td>
                            {{ number_format($total['proteinas'], 2, ',', '.') }}
                            g
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>
    </div>
  

    
</div>
@endsection
