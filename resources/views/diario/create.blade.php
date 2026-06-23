@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')

<br><p class="text-center">Adicionar Refeição</p>

<div class="container edit-refeicao-main poppins-medium">
    
        <form action="/diario" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-xs-6 circle-box">
                        <div class="form-group inline-main align-vert">
                            <label for="data" style="margin-right: 10px;">Data:</label>
                            <input type="date" class="form-control" id="data" name="data" required>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6 circle-box">
                        <div class="form-group inline-main align-vert">
                            <label for="tipo"style="margin-right: 10px;">Tipo:</label>
                            <select name="tipo" id="tipo-select" class="form-control" required>
                                <option value="Café da manhã">Café da Manhã</option>
                                <option value="Almoço">Almoço</option>
                                <option value="Café da Tarde">Café da Tarde</option>
                                <option value="Jantar">Jantar</option>
                                <option value="Pré-Treino">Pré-Treino</option>
                                <option value="Pós-Treino">Pós-Treino</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6 circle-box">
                        <div class="form-group inline-main align-vert">
                            <label for="periodo" style="margin-right: 10px;">Periodo:</label>
                            <select name="periodo" id="periodo-select" class="form-control">
                                <option value="Manhã">Manhã</option>
                                <option value="Tarde">Tarde</option>
                                <option value="Noite">Noite</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <br>
        
        <div class="container" style="width: 93%">
            <br>  
            <div class="d-flex gap-3">    
                <input class="form-control" id="myInput" style="width:" type="text" placeholder="Pesquisar Alimento">
                <a class="btn-adc-ali" href="/alimentos/create">+</a>
                <div style="display: flex; justify-content: center;">   
                    <input type="submit" style="padding: 6px 15px 6px 15px; border-radius: 20px; background-color: #008CBA; border: 1px solid #dbdbdb; color: #ffffff" value="Salvar">
                </div>
            </div>
            <br>           
            <div class="col-md-12 offset-md-1 dashboard-refeicao-container" style="margin-left: 0%">
                <table class="table" style="border: none">
                    <thead>
                        <td></td>
                        <td>Nome</td>
                        <td>Quantidade</td>
                        <td>Medida</td>
                    </thead>
                    <tbody id="myTable">
                        @foreach($alimentos as $alimento)
                            <tr>
                                <td style="border: 1px solid #ffffff;"><input type="checkbox" name="alimentos[{{ $alimento->id }}][id]" value="{{ $alimento->id }}"></td>
                                <td style="border: 1px solid #ffffff;"><p> {{ $alimento->nomeReferencia }}</p>   
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

