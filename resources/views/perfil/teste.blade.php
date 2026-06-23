@extends('layouts.main')

@section('title', 'Meu Perfil')

@section('welcome')

<div class="form cont-form">
    <form action="/perfis/update/{{$perfil->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-header">
            <div class="title-form-user">
                <h5>Atualização Cadastral</h5>
            </div>
        </div>

        <div class="input-group form-user">

            <div class="input-box">
                <label for="nome">Nome completo </label>
                <input id="nome" type="text" name="nome" placeholder="Digite seu nome completo" required>
            </div>

            <div class="input-box">
                <label for="data_nasc">Data de nascimento</label>
                <input id="data_nasc" type="date" name="data_nasc" placeholder="" required>
            </div>

            <div class="input-large">
                <label for="email">E-mail</label>
                <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="input-large">
                <label for="password">Senha</label>
                <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
            </div>
        </div>

        <div class="inline-main">

            <div class="gender-inputs inline-item">
                <div class="gender-title"><a>Gênero</a></div>

                <div class="gender-group">
                    <div class="genero">
                        <input id="feminino" type="radio" name="genero" value="Feminino">
                        <label for="feminino">Feminino</label>
                    </div>

                    <div class="genero">
                        <input id="masculino" type="radio" name="genero" value="Masculino">
                        <label for="masculino">Masculino</label>
                    </div>

                    <div class="genero">
                        <input id="outros" type="radio" name="genero" value="Outros">
                        <label for="outros">Outros</label>
                    </div>

                    <div class="genero">
                        <input id="none" type="radio" name="genero" value="Prefiro não dizer">
                        <label for="none">Prefiro não dizer</label>
                    </div>
                </div>
            </div>

            <div class="goal-inputs teste-item">
                <div class="objetivo-title"><a>Objetivo</a></div>

                <div class="objetivo-group">

                    <div class="objetivo">
                        <input id="a" type="radio" name="objetivo" value="Perder peso">
                        <label class=" font-size: 2px" for="a">Perder peso</label>
                    </div>

                    <div class="objetivo">
                        <input id="b" type="radio" name="objetivo" value="Ganhar massa">
                        <label for="b">Ganhar massa</label>
                    </div>

                    <div class="objetivo">
                        <input id="c" type="radio" name="objetivo" value="Alimentação saúdavel">
                        <label for="c">Alimentação saúdavel</label>
                    </div>

                    <div class="objetivo">
                        <input id="d" type="radio" name="objetivo" value="Outro"><label for="d" >Outro</label>
                    </div> 
                </div>
            </div>
        </div>

        <div class="center-btn">
            <input type="submit" class="btn" style="margin-top: 1rem; border-radius: 100px; background-color: #000; border: 1px solid #000; color: #fff; height: 40px; width: 30%; cursor: pointer;" value="Continuar">
        </div>
    </form>
</div>

@endsection