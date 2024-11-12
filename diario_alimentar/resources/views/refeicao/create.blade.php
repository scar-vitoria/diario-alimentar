@extends('layouts.main')

@section('title', 'Tela para cadastrar refeições- DA')

@section('content')

<h5 style="text-align: center">?</h5>

<div class="form-create-main">
    <div class="container custom-container mx-0">
        <div class="row mt-4 col-md-4 mx-0">
            <div class="form-group">
                <p><input type="date" class="form-control" id="data" name="data" placeholder=""></p>
            </div>
        <div class="form-group">
        <div style="display: flex; align-items: center;">
            <p style="margin: 0 10px 0 10px;">Refeição:</p>
                <select name="" id="" class="form-control">
                    <option value="35">Café da manhã</option>
                    <option value="36">Lanche da manhã</option>
                    <option value="37">Almoço</option>
                    <option value="38">Lanche da tarde</option>
                    <option value="39">Jantar</option>
                    <option value="40">Lanche da noite</option>
                    <option value="41">Pré-treino</option>
                    <option value="42">Pós-treino</option>
                </select>
            </div>
        <div class="form-group">
            <div style="display: flex; align-items: center;">
                <p>Período:</p><input type="text" class="form-control" id="tipo" name="tipo" placeholder="">
            </div>
        <div class="form-group">
            <div style="display: flex; align-items: center;">
            <p>Humor:</p><input type="text" class="form-control" id="marca" name="marca" placeholder="">
        </div>
    <div class="form-group">
    <p>Cor:</p>
    <input type="text" class="form-control" id="cor" name="cor" placeholder="">
    </div>
    <div class="form-group">
    <p>Descrição:</p>
    <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder=""></textarea>
    </div>
</div>



@endsection