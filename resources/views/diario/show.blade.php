@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')

<div class="container edit-profile-main poppins-medium">
    
    <div class="d-flex justify-content-between">
        <h5>{{ $refeicao->tipo }} - {{ \Carbon\Carbon::parse($refeicao->data)->format('d/m/Y')}}</h5>
        <a  style="padding: 6px 15px 6px 15px; border-radius: 20px; background-color: #ffffff; border: 1px solid #dbdbdb; color: #000000" href="/diario/edit/{{$refeicao->id}}" class="btn-edit">Editar</a>   
    </div>     

    <br>
    <table class="table" style="border: none">
        <thead>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
    @foreach ($refeicao->alimentos as $alimento)
            <tr>    
                <td>
                    {{ $alimento->nomeReferencia }} {{ $alimento->pivot->quantidadeConsumida }} {{ $alimento->medidaReferencia }}
                </td>
                <form action="/refeicao/{{ $refeicao->id }}/alimento/{{ $alimento->id }}" method="POST">
                @csrf
                @method('DELETE')
                    <td style="border: 1px solid #ffffff;">
                        <button style=" border: none; background-color: #ffffff"><ion-icon name="trash-outline"></ion-icon></button>
                    </td>
                </form>
            </tr>
    @endforeach
    </table>
    <p class="text-center"><a href="/diario/editAlimento/{{ $refeicao->id }}" style="color: #0f81b6">Adicionar novo alimento <ion-icon name="add-circle-outline"></ion-icon></a>

    
</div>

@endsection

