@extends('layouts.main')

@section('title', 'Alteração: ' . $refeicao->tipo)

@section('welcome')

<div class="container edit-profile-main poppins-medium">
    
    <form action="/diario/update/{{ $refeicao->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-4 col-xs-6 circle-box">
                <div class="form-group inline-main align-vert">
                    <label for="data" style="margin-right: 10px;">Data:</label>
                    <input
                        type="date"
                        class="form-control"
                        id="data"
                        name="data"
                        value="{{ $refeicao->data }}"
                        required
                    >
                </div>
            </div>

            <div class="col-md-4 col-xs-6 circle-box">
                <div class="form-group inline-main align-vert">
                    <label for="tipo" style="margin-right: 10px;">Refeição:</label>
                    <select name="tipo" id="tipo-select" class="form-control" required>
                        <option value="Café da manhã" {{ $refeicao->tipo == 'Café da manhã' ? 'selected' : '' }}>Café da Manhã</option>
                        <option value="Almoço" {{ $refeicao->tipo == 'Almoço' ? 'selected' : '' }}>Almoço</option>
                        <option value="Café da Tarde" {{ $refeicao->tipo == 'Café da Tarde' ? 'selected' : '' }}>Café da Tarde</option>
                        <option value="Jantar" {{ $refeicao->tipo == 'Jantar' ? 'selected' : '' }}>Jantar</option>
                        <option value="Pós Treino" {{ $refeicao->tipo == 'Pós Treino' ? 'selected' : '' }}>Pós Treino</option>
                        <option value="Pré Treino" {{ $refeicao->tipo == 'Pré Treino' ? 'selected' : '' }}>Pré Treino</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4 col-xs-6 circle-box">
                <div class="form-group inline-main align-vert">
                    <label for="periodo" style="margin-right: 10px;">Período:</label>
                    <select name="periodo" id="periodo-select" class="form-control">
                        <option value="Manhã" {{ $refeicao->periodo == 'Manhã' ? 'selected' : '' }}>Manhã</option>
                        <option value="Tarde" {{ $refeicao->periodo == 'Tarde' ? 'selected' : '' }}>Tarde</option>
                        <option value="Noite" {{ $refeicao->periodo == 'Noite' ? 'selected' : '' }}>Noite</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- Campos nutricionais --}}
        <div class="form-group">
            <input type="text" class="form-control" name="cal" value="{{ $refeicao->cal }}" placeholder="Calorias">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="carb" value="{{ $refeicao->carb }}" placeholder="Carboidratos">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="protein" value="{{ $refeicao->protein }}" placeholder="Proteínas">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="humor" value="{{ $refeicao->humor }}" placeholder="Humor">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="desc" value="{{ $refeicao->desc }}" placeholder="Descrição">
        </div>

        {{-- ALIMENTOS --}}
        <div class="container mt-4">
            <h4>Alimentos</h4>

            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Medida</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alimentos as $alimento)
                        @php
                            $pivot = $refeicao->alimentos->firstWhere('id', $alimento->id)?->pivot;
                        @endphp
                        <tr>
                            <td>
                                <input
                                    type="checkbox"
                                    name="alimentos[{{ $alimento->id }}][id]"
                                    value="{{ $alimento->id }}"
                                    {{ $pivot ? 'checked' : '' }}
                                >
                            </td>
                            <td>{{ $alimento->nome }}</td>
                            <td>
                                <input
                                    type="number"
                                    name="alimentos[{{ $alimento->id }}][quant]"
                                    value="{{ $pivot->quant ?? '' }}"
                                    placeholder="100"
                                >
                            </td>
                            <td>{{ $alimento->medida }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <input
                type="submit"
                value="Atualizar"
                style="border-radius: 100px; background-color: #000; color: #fff; height: 40px; width: 20%; cursor: pointer;"
            >
        </div>

    </form>
</div>

@endsection