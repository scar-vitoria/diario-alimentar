@extends('layouts.main')

@section('title', 'Alimento')

@section('welcome')
<br><p class="text-center">Adicionar novo alimento</p>
<div class="container container-alimentos mt-3">         
    <form action="/alimentos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center g-3"> 

            <div class="col-12 col-md-7 circle-box">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" id="nomeReferencia" name="nomeReferencia" required>
                </div>
            </div>

            <div class="col-12 col-md-7 circle-box">
                <div class="form-group">
                    <label>Tipo:</label>
                    <select class="form-control" id="tipoReferencia" name="tipoReferencia" required>
                        <option value="Alimento">Alimento</option>
                        <option value="Bebida">Bebida</option>
                    </select>
                </div>
            </div>

            <div class="col-12 col-md-7 circle-box">
                <div class="form-group">
                    <label>Quantidade:</label>
                    <input type="number" class="form-control" id="quantidadeReferencia" name="quantidadeReferencia" required>
                </div>
            </div>

            <div class="col-12 col-md-7 circle-box">
                <div class="form-group mb-3">
                    <label>Medida:</label>
                    <select class="form-control" id="medidaReferencia" name="medidaReferencia" required>
                        <option value="ml">ml</option>
                        <option value="g">g</option>
                        <option value="porcao">Porção</option>
                        <option value="unidade">Unidade</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center gap-3">

            <div class="col-2">
                <div class="form-group">
                    <label>Calorias:</label>
                    <input type="number" class="form-control" id="calReferencia" name="calReferencia" placeholder= "00.00" required>
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    <label>Carboidratos:</label>
                    <input type="number" class="form-control" id="carbReferencia" name="carbReferencia" placeholder= "00.00" required/>
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    <label>Proteinas:</label>
                    <input type="number" class="form-control" id="proteinReferencia" name="proteinReferencia" placeholder= "00.00" required/>
                </div>
            </div>
        </div>

   <div style="display: flex; justify-content: center; margin-top: 10px">   
        <input type="submit" style="padding: 6px 15px 6px 15px; border-radius: 20px; background-color: #008CBA; border: 1px solid #dbdbdb; color: #ffffff" value="Salvar">
    </div>
        
    </form>
</div>


@endsection

