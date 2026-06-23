@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')

<div class="container create-agua-main">

    <div class="text-center"><h7>Editar registro - Contador de água</h7></div>
         <form action="/agua/update/{{ $agua->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="edit-profile-item ">

                <div class="row d-flex justify-content-center text-center">

                    <div class="col-3 align-items-center">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" name="data" id="data" value="{{ $agua->data }}" class="form-control text-center" required>
                    </div>

                    <div class="col-3 align-items-center">
                        <label for="hora" class="form-label">Hora</label>
                        <input type="time" name="hora" id="hora" value="{{ $agua->hora }}" class="form-control text-center" required>
                    </div>
                
                    <div class="col-3">
                        <label for="quant" class="form-label">Quantidade</label>
                        <div class="d-flex ">
                            <input type="number"name="quant" id="quant" value="{{ $agua->quant}}" placeholder="Ex: 350" class="form-control text-center" required><p class="ms-3">ml</p>
                        </div>
                    </div>

                <div style="display: flex; justify-content: center; margin-top:10px">   
                    <input type="submit" style="padding: 6px 15px 6px 15px; border-radius: 20px; background-color: #008CBA; border: 1px solid #dbdbdb; color: #ffffff" value="Salvar">
                </div>

                </div>
            </div>
            
        </form>
    </div>
</div>



@endsection