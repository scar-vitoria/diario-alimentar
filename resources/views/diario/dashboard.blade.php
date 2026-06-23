@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')

<div class="container" style="background: white;">
    <br><p class="text-center"><strong>Lista de refeições</strong></p>

    @if(count($refeicoes))
        <div class="col-11 offset-md-1 mx-auto" style="margin-left: 0%">
            <table class="table" style="border: none">
                <thead>
                    <td></td>
                    <td>Data</td>
                    <td>Tipo</td>
                    <td>Período</td>
                    <td><p><p><td>
                </thead>
                <tbody>
                    @foreach($refeicoes as $refeicao)
                        <tr>
                            <td scropt="row" style="border: 1px solid #ffffff;">{{ $loop->index + 1 }}</td>
                            <td style="border: 1px solid #ffffff;"><a href="/diario/{{$refeicao->id}}"> {{ \Carbon\Carbon::parse($refeicao->data)->format('d/m/Y')}}</a></td>
                            <td style="border: 1px solid #ffffff;"><a href="/diario/{{$refeicao->id}}">{{ $refeicao->tipo }}</a></td>
                            <td style="border: 1px solid #ffffff;"><a href="/diario/{{$refeicao->id}}">{{ $refeicao->periodo }}</a></td>
                            <td style="border: 1px solid #ffffff;"><a href="/diario/edit/{{$refeicao->id}}"><ion-icon name="create-outline"></ion-icon></a>
                            <form action="/diario/{{ $refeicao->id }}" method="POST"></td>
                            @csrf
                            @method('DELETE')
                                <td style="border: 1px solid #ffffff;"><button style=" border: none; background-color: #ffffff"><ion-icon name="trash-outline"></ion-icon></button></td>
                            </form>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>

    @else
    <h1 class="h5" style="text-align: center; margin-top: 50px;">Você ainda não tem refeições cadastradas</h1>
    <p style="text-align: center">Adicione uma refeição para acessar seu dashboard  </p>

    <div class="d-flex justify-content-center mt-4">
        <a href="/diario/create" style="width: 100%; text-align: center"><input type="submit" class="" style="border-radius: 100px; background-color: #000; border: 1px solid #000; color: #fff; height: 40px; width: 10%; cursor: pointer;" value="Adicionar"></a>
    </div>
    @endif





@endsection

