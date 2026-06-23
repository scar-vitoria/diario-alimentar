      <!-- //contém a barra de navegação -->
                 <!-- <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center text-main" id="navbar-links">
                        <div class="navbar-nav">
                            @guest      
                            <a class="nav-item nav-link" href="/">Home</a>     
                            <a class="nav-item nav-link" href="/register">Cadastrar</a>
                            <a class="nav-item nav-link" href="/login">Entrar</a>
                            @endguest
                            @auth 
                            <a class="nav-item nav-link" href="/home">Home</a>
                            <a class="nav-item nav-link" href="/diario/create">Refeição</a>
                            <a class="nav-item nav-link" href="">Água</a>
                            <a class="nav-item nav-link" href="/diario/dashboard">Diário</a>
                            <a class="nav-item nav-link" href="/perfil/show">Perfil</a> 
                            <li class="nav-item nav-link"> 
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a href="/logout" class="" onclick="event.preventDefault();
                                    this.closest('form').submit();">Sair
                                    </a>
                                </form>
                            </li>          
                        </div>
                    </div>
                     @endauth
                </nav>
            </div>-->

            <!-- //contém a barra de navegação -->



            <!--
                @if($refeicao && $refeicao->tipo === "Almoço")
                    @foreach ($refeicao->alimentos as $alimento)
                        <p>{{ $alimento->nome }} — {{ $alimento->pivot->quant }} g/ml</p>
                    @endforeach
                @else
                    <p>Nenhum alimento adicionado.</p>
                    <a href="/diario/create"><p>adicionar alimentos?</p></a>
                @endif
                </div>
            </div> -->


             <div class="edit-food-item">
                <div class="d-flex align-items-center">
                    <div class="d-flex justify-content-start">
                        <img class="img-alm" src="/img/refeicoes/comida.png" alt="Imagem ilustrativa almoço" style="margin-right: 10px;">
                        <h4 class="text my-2">Almoço</h4>
                        <!-- <p class="txt-time"><img class="img-clock" src="img/refeicoes/time.svg">Tarde</p> -->
                    </div>
                    <a class="btn-adc-ref" style="" href="diario/create">+</a>
                </div> 
                <div class="d-flex w-50">
                    <table>
                        <tr>
                            <th><p class="title-small">Carboidratos</h4></th>
                            <th><p class="title-small">Proteínas</h4></th>
                        </tr>
                        <tr>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                            <th><h4 class="desc_ref mx-2 mb-2">0g</h4></th>
                        </tr>
                    </table>
                </div>
            </div>



            
const perfil = document.querySelector('.perfil')
const menu = document.querySelector('.menu');

perfil.onclick = () => {
  menu.classList.toggle('ativo')
}

$( document ).ready(function() {

  const accordion = document.getElementsByClassName('container-fluid');

  for (i=0; i<accordion.length; i++) {
    accordion[i].addEventListener('click', function () {
      this.classList.toggle('active')
    })
  }
}); 

