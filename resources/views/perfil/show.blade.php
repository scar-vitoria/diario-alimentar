@extends('layouts.main')

@section('title', 'Meu Perfil')

@section('welcome')

<div class="container edit-profile-main poppins-medium">

    <h5>Profile</h5>

    <div class="edit-profile-item">

         <div class="d-flex justify-content-between">
            <h8>Personalizar informações de login</h8>
            <a href='/user/profile' style="padding: 6px 15px 6px 15px; border-radius: 20px; background-color: #ffffff; border: 1px solid #dbdbdb; color: #000000">Editar</a>
        </div>
    
        <table class="mt-4" style="width:100%">
            <tr>
                <th><p class="title-small">Nome</p></th>
                <th><p class="title-small">E-mail</p></th>
            </tr>
            <tr>
                <td>{{ auth()->user()->name}}</td> 
                <td>{{ auth()->user()->email}}</td>
            </tr>
        </table>
    </div>


    <div class="edit-profile-item">
       
        <div class="d-flex justify-content-between">
            <h8>Personalizar informações pessoais</h8>
            <a  style="padding: 6px 15px 6px 15px; border-radius: 20px; background-color: #ffffff; border: 1px solid #dbdbdb; color: #000000" href="/perfil/edit/{{ $perfil->id }}" class="btn-edit">Editar</a>        
        </div> 

        <table class="mt-4" style="width:100%">
            <tr>
                <th><p class="title-small">Gênero</th>
                <th><p class="title-small">Data de nascimento</p></th>
            </tr>
            <tr>
                <td>{{ $perfil->genero }}</td> 
                <td>{{ \Carbon\Carbon::parse($perfil->nasc)->format('d/m/Y') }}</td> 
            </tr>

        </table>

        <table class="mt-4" style="width:100%">
            <tr>
                <th><p class="title-small">Peso</th>
                <th><p class="title-small">Altura</p></th>
                <th><p class="title-small">Objetivo</p></th>
            </tr>
            <tr>
                <td>{{ $perfil->peso }} kg</td> 
                <td>{{ $perfil->altura }} cm</td> 
                <td>{{ $perfil->objetivo }}</td> 
            </tr>
        </table>
    </div>

</div><br>
@endsection