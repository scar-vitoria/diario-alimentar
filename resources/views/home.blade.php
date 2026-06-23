@extends('layouts.main')

@section('title', 'Diário Alimentar')

@section('welcome')

<div style="background-color: #fff">
      <div class="d-flex justify-content-center align-items-center">
        <ul class="semana">
            <li>Dom</li>
            <li>Seg</li>
            <li>Ter</li>
            <li>Qua</li>
            <li>Qui</li>
            <li>Sex</li>
            <li>Sáb</li>
        </ul>
    </div>  
   

    <div class="d-flex justify-content-center edit-food-consumo-main mt-3">

   
        <div class="edit-food-consumo d-flex box-1">
            <img src="/img/calorias.png" width="auto" height="60%" alt="" >
            <table class="teste">
                <thead>
                    <tr>
                        <th class="table_relatorio">Calorias</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table_relatorio"><h2>{{ number_format($totalCalorias, 2, '.', '.') }} <span style="font-size: 0.9rem">kcal</span></h2></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="edit-food-consumo d-flex box-2">
            <img src="/img/carboidratos.png" width="auto" height="60%" alt="" >
            <table class="teste">
                <thead>
                    <tr>
                        <th class="table_relatorio">Carboidratos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table_relatorio"><h2>{{ number_format($totalCarboidratos, 2, '.', '.') }} <span style="font-size: 0.9rem">kcal</span></h2></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="edit-food-consumo d-flex box-3">
            <img src="/img/protein.png" width="auto" height="60%" alt="" >
            <table >
                <thead>
                    <tr >
                        <th class="table_relatorio">Proteínas</th>
                    </tr>
                </thead>
                <tbody class="teste">
                    <tr class="teste">
                        <td class="table_relatorio"><h2>{{ number_format($totalProteinas, 2, '.', '.') }} <span style="font-size: 0.9rem">g</span></h2></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex">
        <div class="container edit-home-food">
            <div class="accordion">    
                <div>
                    <p><strong>Adicionar Refeições do dia</strong></p>
                </div>

                <div class="edit-food-item">
                    <div class="d-flex align-items-center w-100">
                        <div class="d-flex justify-content-start align-items-center">
                            <img class="img_cafe" src="/img/refeicoes/cafe.jpg" alt="Imagem ilustrativa café">
                            <h4 class="text">Café da manhã</h4>
                        </div>
                        <a class="btn-adc-ref" style="" href="diario/create">+</a>
                    </div>              
                </div>

                <div class="edit-food-item">
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="img_cafe" src="/img/refeicoes/almoco.jpg" alt="Imagem ilustrativa almoço">
                            <h4 class="text my-2">Almoço</h4>
                            <!-- <p class="txt-time"><img class="img-clock" src="img/refeicoes/time.svg">Tarde</p> -->
                        </div>
                        <a class="btn-adc-ref" style="" href="diario/create">+</a>
                    </div> 
                </div>

                <div class="edit-food-item">
                    <div class="d-flex align-items-center w-100">
                        <div class="d-flex justify-content-start">
                            <img src="/img/refeicoes/lanche.jpg" class="img_cafe" alt="Imagem ilustrativa lanche">
                            <h4 class="text my-2">Lanche<br></h4>
                        </div>
                        <a class="btn-adc-ref" style="" href="diario/create">+</a>
                    </div> 
                </div>

                <div class="edit-food-item">
                    <div class="d-flex align-items-center w-100">
                        <div class="d-flex justify-content-start">
                            <img src="/img/refeicoes/jantar.jpg" alt="Imagem ilustrativa jantar" class="img_cafe">
                            <h4 class="text my-2">Jantar<br></h4>
                        </div>
                        <a class="btn-adc-ref" style="" href="diario/create">+</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container edit-wather-food ">

            <div class="d-flex justify-content-left top-cont-water">
                <img src="/img/gotta.png" width="auto" height="40%">
                <h6>Contador de água</h6>
            </div>

            <div class="text-center">
                <p style="font-size: 0.9rem">Consumo diário total</p>
                <h2>{{ number_format($totalContador, 2, '.', '.') }}</h3>
            </div>
        </div>
        
    </div>
</div>





@endsection