
@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')

<br>
<div class="container edit-refeicao-main poppins-medium">
    <form action="/diario/updateAlimento/{{ $refeicao->id }}" method="POST" enctype="multipart/form-data">
        <div class="d-flex justify-content-between">
            <p class="text-center"><strong> {{ $refeicao->tipo }} - {{ \Carbon\Carbon::parse($refeicao->data)->format('d/m/Y')}}</strong></p>
        </div>   
        @csrf
        @method('PUT')
        <h5 class="text-center">Atualizar ou adicionar novo alimento</h5>
            
        <div class="container" style="width: 90%"><br>  
            <div class="d-flex gap-3 justify-content-center">    
                <input class="form-control" id="myInput" style="width: 50%" type="text" placeholder="Pesquisar Alimento ou Bebida">
                <a class="btn-adc-ali" href="/alimentos/create">+</a>
                <input type="submit" style="padding: 6px 15px 6px 15px; border-radius: 15px; background-color: #008CBA; border: 1px solid #dbdbdb; color: #ffffff" value="Salvar">
            </div><br> 

          

             <div class="col-md-12 offset-md-1 dashboard-refeicao-container" style="margin-left: 0%">
            <table class="table" style="border: none">
                <thead>
                    <td></td>
                    <td>Nome</td>
                    <td>Quantidade</td>
                    <td>Medida</td>
                </thead>
                <tbody id="myTable">
                    @foreach ($refeicao->alimentos as $alimento)
                    <tr>
                        <td style="border: 1px solid #ffffff;"><input type="checkbox" name="alimentos[{{ $alimento->id }}][id]" value="{{ $alimento->id }}" checked></td>
                        <td style="border: 1px solid #ffffff;">{{ $alimento->nomeReferencia }} </td>
                        <td style="border: 1px solid #ffffff;">
                             <input type="number"
                                value= "{{ $alimento->pivot->quantidadeConsumida }}"
                                name="alimentos[{{ $alimento->id }}][quantidadeConsumida]"
                                style="border: 1px solid rgb(221,220,220); border-radius: 6px; width: 20%">
                        </td>
                        <td>{{ $alimento->medidaReferencia }}</td>
                    </tr>
                     @endforeach
                     @foreach($alimentos as $alimento)
                    <tr>      
                        <td style="border: 1px solid #ffffff;"><input type="checkbox" name="alimentos[{{ $alimento->id }}][id]" value="{{ $alimento->id }}"></td>
                        <td style="border: 1px solid #ffffff;"><p> {{ $alimento->nomeReferencia }}</p></td>
                        <td style="border: 1px solid #ffffff;">
                            <input type="number"
                                placeholder="100"
                                name="alimentos[{{ $alimento->id }}][quantidadeConsumida]"
                                style="border: 1px solid rgb(221,220,220); border-radius: 6px; width: 20%">
                        </td>
                        <td style="border: 1px solid #ffffff;">{{ $alimento->medidaReferencia }}</a></td> 
                    </tr> 
                    @endforeach                     
                </tbody>
            </table>
        </div>      
        </div>
    </form>
</div>


@endsection