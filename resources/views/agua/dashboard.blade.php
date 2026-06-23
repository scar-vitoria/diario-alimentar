@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')

<div class="container" style="background: white;">
    <br><p class="text-center"><strong>Registros consumo de água </strong></p>

    @if(count($aguas))
        <div class="col-11 offset-md-1 mx-auto" style="margin-left: 0%">
            <table class="table" style="border: none">
                <thead>
                    <td></td>
                    <td>Data</td>
                    <td>Hora</td>
                    <td>Quantidade</td>
                    <td><p><p><td>
                </thead>
                <tbody>
                    @foreach($aguas as $agua)
                        <tr>
                            <td scropt="row" style="border: 1px solid #ffffff;">{{ $loop->index + 1 }}</td>
                            <td style="border: 1px solid #ffffff;"><a href="/agua/{{ $agua->id }}"> {{ \Carbon\Carbon::parse($agua->data)->format('d/m/Y')}}</a></td>
                            <td style="border: 1px solid #ffffff;"><a href="/agua/{{ $agua->id }}">{{ $agua->hora }}</a></td>
                            <td style="border: 1px solid #ffffff;"><a href="/agua/{{ $agua->id }}">{{ $agua->quant }}</a></td>
                            <td style="border: 1px solid #ffffff;"><a href="/agua/edit/{{ $agua->id }}"><ion-icon name="create-outline"></ion-icon></a>
                            <form action="/agua/{{ $agua->id }}" method="POST"></td>
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
    <h1 class="h5" style="text-align: center; margin-top: 50px;">Você ainda não tem registros.</h1>
    @endif


@endsection

