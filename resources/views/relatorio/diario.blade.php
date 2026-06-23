@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')

<div class="back-white">
    <br>
    <p class="text-center">Relátorio nutricional diário</p>

       
    <table class="table table_relatorio mt-3 mx-auto" style="font-size: 12px;">
        <thead>
            <tr>
                <th>
                    <form method="GET" action="">
                        <div class="d-flex align-items-center" style="height: 25px">
                            <div>
                                <select name="data" id="data" class="form-control" onchange="this.form.submit()">
                                    <option>Selecionar data</option>
                                @foreach($datas as $item)
                                    <option 
                                        value="{{ $item->data }}"
                                        {{ $dataSelecionada == $item->data ? 'selected' : '' }}
                                    >
                                        {{ \Carbon\Carbon::parse($item->data)->format('d/m/Y') }}
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
        @if(empty($dataSelecionada))
        @else
        <tbody>

            @php
                $totalCal = 0;
                $totalCarb = 0;
                $totalProt = 0;
            @endphp

            @foreach($refeicoes as $refeicao)

                <tr>
                    <td colspan="6"><strong>{{ $refeicao->tipo }}</strong></td>
                </tr>

                @foreach($refeicao->alimentos as $alimento)

                    @php

                        $quantidadeConsumida = $alimento->pivot->quantidadeConsumida;

                        $calorias =
                            ($alimento->calReferencia * $quantidadeConsumida)
                            / $alimento->quantidadeReferencia;

                        $carboidratos =
                            ($alimento->carbReferencia * $quantidadeConsumida)
                            / $alimento->quantidadeReferencia;

                        $proteinas =
                            ($alimento->proteinReferencia * $quantidadeConsumida)
                            / $alimento->quantidadeReferencia;

                        $totalCal += $calorias;
                        $totalCarb += $carboidratos;
                        $totalProt += $proteinas;

                    @endphp
                    <tr>
                        <td>{{ $alimento->nomeReferencia }}, {{ $quantidadeConsumida }} {{ $alimento->medidaReferencia }}</td>
                        <td style="text-align: center">{{ number_format($calorias, 2, ',', '.') }} </td>
                        <td style="text-align: center">{{ number_format($carboidratos, 2, ',', '.') }}</td>
                        <td style="text-align: center">{{ number_format($proteinas, 2, ',', '.') }} </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    
        <tfoot>
            <tr>
                <th colspan="1">Total do dia</th>
                <th style="text-align: center">{{ number_format($totalCal, 2, ',', '.') }} kcal</th>
                <th style="text-align: center"> {{ number_format($totalCarb, 2, ',', '.') }} g </th>
                <th style="text-align: center">{{ number_format($totalProt, 2, ',', '.') }} g</th>
            </tr>
        </tfoot>
    </table>
        @endif
</div>

@endsection