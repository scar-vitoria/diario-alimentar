@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')
<br>
<div class="container edit-refeicao-main poppins-medium">
    <form action="/diario/update/{{ $refeicao->id }}" method="POST" enctype="multipart/form-data">
     @csrf
        @method('PUT')
        <p class="text-center">Atualizar dados da refeição</p>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-xs-6 circle-box">
                    <div class="form-group inline-main align-vert">
                        <label for="data" style="margin-right: 10px;">Data:</label>
                        <input type="date" class="form-control" id="data" name="data" value="{{ $refeicao->data }}">
                    </div>
                </div>

                <div class="col-md-4 col-xs-6 circle-box">
                    <div class="form-group inline-main align-vert">
                        <label for="tipo"style="margin-right: 10px;">Tipo:</label>
                        <select class="form-control" id="tipo" name="tipo">
                            <option value="Café da manhã" @selected($refeicao->tipo == 'Café da Manhã')>
                                Café da Manhã
                            </option>
                            <option value="Almoço" @selected($refeicao->tipo == 'Almoço')>
                                Almoço
                            </option>
                            <option value="Café da Tarde" @selected($refeicao->tipo == 'Café da Tarde')>
                                Café da Tarde
                            </option>
                            <option value="Jantar" @selected($refeicao->tipo == 'Jantar')>
                                Jantar
                            </option>
                            <option value="Pré-treino" @selected($refeicao->tipo == 'Pré-treino')>
                                Pré-treino
                            </option>
                            <option value="Pós-treino" @selected($refeicao->tipo == 'Pós-treino')>
                                Pós-treino
                            </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6 circle-box">
                    <div class="form-group inline-main align-vert">
                        <label for="periodo" style="margin-right: 10px;">Periodo:</label>
                        <select name="periodo" id="periodo" class="form-control">
                            <option value="Manhã" @selected($refeicao->periodo == 'Manhã')>
                                Manhã
                            </option>
                            <option value="Tarde" @selected($refeicao->periodo == 'Tarde')>
                                Tarde
                            </option>
                            <option value="Noite" @selected($refeicao->periodo == 'Noite')>
                                Noite
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div> 
         <br>
    <p><strong>Alimentos consumidos</strong></p>
    @foreach ($refeicao->alimentos as $alimento)
        <p>
           {{ $alimento->nomeReferencia }} {{ $alimento->pivot->quantidadeConsumida }} {{ $alimento->medidaReferencia }}
        </p>
    @endforeach
    
    <div class="d-flex justify-content-center"> 
        <input type="submit" style="padding: 6px 15px 6px 15px; border-radius: 20px; background-color: #008CBA; border: 1px solid #dbdbdb; color: #ffffff" value="Salvar alteração">
    </div><br>
    
    </form>
</div>
    
   
    
</div>




 
@endsection

