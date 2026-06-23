@extends('layouts.main')

@section('title', 'Meu Perfil')

@section('welcome')

<div class="container edit-profile-main poppins-medium">
    <h5>Editar informações pessoais</h5>

    <div class="form">
        <form action="/perfil/update/{{ $perfil->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="edit-profile-item">

                <div class="row d-flex justify-content-between">

                    <div class="col-3">
                        <label for="peso" class="form-label">Peso</label>
                        <input type="number" name="peso" class="form-control" id="peso" value="{{ $perfil->peso }}"> 
                    </div>

                    <div class="col-3">
                        <label for="altura" class="form-label">Altura</label>
                        <input type="number" name="altura" id="altura" value="{{$perfil->altura}}" class="form-control">
                    </div>

                    <div class="col-4">
                        <label for="nasc" class="form-label">Data de nascimento</label>
                        <input type="date" class="form-control" id="nasc" name="nasc" value="{{$perfil->nasc}}"></p>
                    </div>
            
                </div><br>

                <div class="row">
                    
                    <div class="col-6">Gênero
                        <div class="gender-group">
                            <div class="genero">
                                <input type="radio" name="genero" value="Feminino"
                                {{ $perfil->genero == 'Feminino' ? 'checked' : '' }}>
                                <label for="feminino">Feminino</label>
                            </div>
                            <div class="genero">
                                <input type="radio" name="genero" value="Masculino"
                                {{ $perfil->genero == 'Masculino' ? 'checked' : '' }}>
                                <label for="masculino">Masculino</label>
                            </div>
                            <div class="genero">
                                <input type="radio" name="genero" value="Outros"
                                {{ $perfil->genero == 'Outros' ? 'checked' : '' }}>
                                <label for="outros">Outros</label>
                            </div>
                            <div class="genero">
                                <input type="radio" name="genero" value="Prefiro não dizer"
                                {{ $perfil->genero == 'Prefiro não dizer' ? 'checked' : '' }}>
                                <label for="none">Prefiro não dizer</label>
                            </div>  
                        </div>
                    </div>

                    <div class="col-6">Objetivo
                        <div class="goal-group">
                            <div class="objetivo">
                                <input type="radio" name="objetivo" value="Perder peso" 
                                {{ $perfil->objetivo == 'Perder peso' ? 'checked' : '' }}>
                                <label>Perder peso</label>
                            </div>
                            <div class="objetivo">
                                <input type="radio"  name="objetivo" value="Ganhar massa"
                                {{ $perfil->objetivo == 'Ganhar massa' ? 'checked' : '' }}>
                                <label>Ganhar massa</label>
                            </div>
                            <div class="objetivo">
                                <input type="radio"  name="objetivo" value="Alimentação saúdavel"
                                 {{ $perfil->objetivo == 'Alimentacao saúdavel' ? 'checked' : '' }}>
                                <label>Alimentação saúdavel</label>
                            </div>
                            <div class="objetivo">
                                <input type="radio"  name="objetivo" value="Outro"
                                 {{ $perfil->objetivo == 'Outro' ? 'checked' : '' }}>
                                <label>Outro</label>
                            </div> 
                        </div>
                    </div>
 
                </div><br>
                
                <div style="display: flex; justify-content: center;">   
                    <input type="submit" style="padding: 6px 15px 6px 15px; border-radius: 20px; background-color: #008CBA; border: 1px solid #dbdbdb; color: #ffffff" value="Salvar">
                </div>

            </div>
        </form>
    </div>
</div>

@endsection
