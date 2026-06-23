@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')

<div class="container edit-profile-main poppins-medium">
    
    <div class="">
        <h5>Dia : {{ \Carbon\Carbon::parse($agua->data)->format('d/m/Y')}}<br>
         Consumido {{ $agua->quant }} ml de água</h5>

    </div>     
    <br>    
</div>

@endsection

