@extends('layouts.main')

@section('title', 'Diário alimentar')

@section('content')



    <h5 class="titulo2">Refeições do dia</h5>
    <form action="/refeicao/create">
        <div class="container-insert mt-3">
            <p class="m-0">Deseja adicionar uma nova refeição?</p>
            <button type="submit" class="btn">+</button>
        </div>

    </form>
    
    <div class="conteiner-main">
        <div class="container custom-container mx-0">
        @foreach ($refeicoes as $refeicao)

        @if($refeicao->tipo_ref == "Café da manhã")
            <div class="row mt-4 col-md-4 container-item mx-0">
                    <div class="col-12 col-md-12 d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <img class="img_cafe" src="/img/refeicoes/cafe.jpg" alt="Imagem ilustrativa café" style="margin-right: 10px;">
                            <div class="flex-direction-column">
                                <h4 class="text my-2">{{ $refeicao->tipo_ref }}<br></h4>
                                <h4 class="text desc_ref mb-4"><img style="margin-right:5px;" src="img/refeicoes/time.svg">{{ $refeicao->periodo}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <table>
                            <tr>
                                <th><h4 class="mx-2 desc_ref">Carboidratos</h4></th>
                                <th><h4 class="mx-2 desc_ref">Proteínas</h4></th>
                            </tr>
                            <tr>
                                <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                                <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                            </tr>
                        </table>
                    </div>
            </div>
        @endif

        @if($refeicao->tipo_ref == "Lanche da manhã" && $refeicao->periodo == "Manhã")
        <div class="row mt-4 col-md-4 container-item mx-0">
            <div class="col-12 col-md-12 d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <img class="img_cafe" src="/img/refeicoes/lanche.jpeg" alt="Imagem ilustrativa lanche" style="margin-right: 10px;">
                        <div class="flex-direction-column">
                            <h4 class="text my-2">{{ $refeicao->tipo_ref }}<br></h4>
                            <h4 class="text desc_ref mb-4"><img style="margin-right:5px;" src="img/refeicoes/time.svg">{{ $refeicao->periodo}}</h4>
                        </div>
                    </div>  
                </div>
                <div class="d-flex">
                    <table>
                        <tr>
                            <th><h4 class="mx-2 desc_ref">Carboidratos</h4></th>
                            <th><h4 class="mx-2 desc_ref">Proteínas</h4></th>
                        </tr>
                        <tr>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                        </tr>
                    </table>
                </div>
        </div>
        @endif

        @if($refeicao->tipo_ref == "Almoço")
        <div class="row mt-4 col-md-4 container-item mx-0">
                <div class="col-12 col-md-12 d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <img class="img_cafe" src="/img/refeicoes/comida.png" alt="Imagem ilustrativa almoço" style="margin-right: 10px;">
                        <div class="flex-direction-column">
                            <h4 class="text my-2">{{ $refeicao->tipo_ref }}<br></h4>
                            <h4 class="text desc_ref mb-4"><img style="margin-right:5px;" src="img/refeicoes/time.svg">{{ $refeicao->periodo}}</h4>
                        </div>
                    </div> 
                </div>
                <div class="d-flex">
                    <table>
                        <tr>
                            <th><h4 class="mx-2 desc_ref">Carboidratos</h4></th>
                            <th><h4 class="mx-2 desc_ref">Proteínas</h4></th>
                        </tr>
                        <tr>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                        </tr>
                    </table>
                </div>
        </div>
        @endif
        
        @if($refeicao->tipo_ref== "Lanche da tarde" && $refeicao->periodo == "Tarde")
        <div class="row mt-4 col-md-4 container-item mx-0">
            <div class="col-12 col-md-12 d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <img class="img_cafe" src="/img/refeicoes/lanche.jpeg" alt="Imagem ilustrativa lache da tarde" style="margin-right: 10px;">
                    <div class="flex-direction-column">
                        <h4 class="text my-2">{{ $refeicao->tipo_ref }}<br></h4>
                        <h4 class="text desc_ref mb-4"><img style="margin-right:5px;" src="img/refeicoes/time.svg">{{ $refeicao->periodo}}</h4>
                    </div>
                </div>
            </div>
                <div class="d-flex">
                    <table>
                        <tr>
                            <th><h4 class="mx-2 desc_ref">Carboidratos</h4></th>
                            <th><h4 class="mx-2 desc_ref">Proteínas</h4></th>
                        </tr>
                        <tr>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                        </tr>
                    </table>
                </div>
        </div>
        @endif
        
        @if($refeicao->tipo_ref == "Jantar")
        <div class="row mt-4 col-md-4 container-item mx-0">
            <div class="col-12 col-md-12 d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <img class="img_cafe" src="/img/refeicoes/jantar.png" alt="Imagem ilustrativa jantar" style="margin-right: 10px;">
                    <div class="flex-direction-column">
                        <h4 class="text my-2">{{ $refeicao->tipo_ref }}<br></h4>
                        <h4 class="text desc_ref mb-4"><img style="margin-right:5px;" src="img/refeicoes/time.svg">{{ $refeicao->periodo}}</h4>
                    </div>
                </div> 
                </div>
                <div class="d-flex">
                    <table>
                        <tr>
                            <th><h4 class="mx-2 desc_ref">Carboidratos</h4></th>
                            <th><h4 class="mx-2 desc_ref">Proteínas</h4></th>
                        </tr>
                        <tr>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                        </tr>
                    </table>
                </div>
        </div>
        @endif

    @if($refeicao->tipo_ref == "Lanche da noite" && $refeicao->periodo == "Noite")
        <div class="row mt-4 col-md-4 container-item mx-0">    
                <div class="col-12 col-md-12 d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <img class="img_cafe" src="/img/refeicoes/lanche.jpeg" alt="Imagem ilustrativa lache da noite" style="margin-right: 10px;">
                        <div class="flex-direction-column">
                            <h4 class="text my-2">{{ $refeicao->tipo_ref }}<br></h4>
                            <h4 class="text desc_ref mb-4"><img style="margin-right:5px;" src="img/refeicoes/time.svg">{{ $refeicao->periodo}}</h4>
                        </div>
                    </div>  
                </div>
                <div class="d-flex">
                    <table>
                        <tr>
                            <th><h4 class="mx-2 desc_ref">Carboidratos</h4></th>
                            <th><h4 class="mx-2 desc_ref">Proteínas</h4></th>
                        </tr>
                        <tr>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                        </tr>
                    </table>
                </div>
        </div>
        @endif

        @if($refeicao->tipo_ref == "Pre-treino")
        <div class="row mt-4 col-md-4 container-item mx-0">
            <div class="col-12 col-md-12 d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <img class="img_cafe" src="/img/refeicoes/shake.png" alt="Imagem ilustrativa lache da noite" style="margin-right: 10px;">
                    <div class="flex-direction-column">
                        <h4 class="text my-2">{{ $refeicao->tipo_ref }}<br></h4>
                        <h4 class="text desc_ref mb-4"><img style="margin-right:5px;" src="img/refeicoes/time.svg">{{ $refeicao->periodo}}</h4>
                    </div>
                </div> 
            </div>
            <div class="d-flex">
                <table>
                    <tr>
                        <th><h4 class="mx-2 desc_ref">Carboidratos</h4></th>
                        <th><h4 class="mx-2 desc_ref">Proteínas</h4></th>
                    </tr>
                    <tr>
                        <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                        <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                    </tr>
                </table>
            </div>
        </div>
        @endif
    @endforeach
            
        </div>   
    </div>  

    
 

@endsection