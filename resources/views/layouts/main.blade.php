<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

  
        <!-- Css do Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <!-- Css da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!-- Progress Bar -->
        <script src="/js/progressbar.min.js"></script>
        <!-- Parallax -->
        <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
        
    </head>

    <header>
            <!--<div class="container-menu" id="nav-container">
                @guest
                <nav class="menu-nav">
                    <div class="perfil">
                    <div class="imgCX">   
                        <img src="../img/sem-foto.jpg" alt="">
                    </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="/login">Login</a>
                        </li>
                        <li>
                            <a href="/register">Cadastrar</a>
                        </li>
                    </ul>
                </div>
                </nav>
                @endguest
                @auth
                <nav class="menu-nav ">
                    <div class="perfil">
                        <div class="imgCX">   
                            @if(Auth::user()->profile_photo_path)
                                <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}">                
                            @endif
                            <img src="../img/sem-foto.jpg" alt="">
                        </div>
                        <h3> {{ Auth::user()->name }} </h3> 
                        <ion-icon class="mb-1" name="chevron-down-outline"></ion-icon>
                    </div>
                    <div class="menu">
                        <ul>
                            <li>
                                <a href="/perfil/show"><ion-icon name="person-outline"></ion-icon>Perfil</a>
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a href="/logout" class="" onclick="event.preventDefault();
                                    this.closest('form').submit();">Sair
                                    </a>
                                </form>
                            </li>      
                        </ul>
                    </div>
                </nav>
                @endauth
            </div>-->
    </header>
   
<body>   
    <main>
        <div class="d-flex w-100" style="margin: 0px; background: #ffffff">
            <!--sidebar -->
            <!--<nav id="sidebar">
                <div id="sidebar_content">
                    <ul id="side_items">
                        
                        <li class="{ request()->is('home') ? 'active' : '' }}">
                            <a href="/home">
                                <span class="item-description">Home</span>
                            </a>
                        </li>

                        <li>
                            <a href="/perfil/show">
                                <span class="item-description">Perfil</span>
                            </a>
                        </li>

                        <li class="{{ request()->is('diario/create') ? 'active' : '' }}">
                            <a href="/diario/create">
                                <span class="item-description">Adicionar refeição</span>
                            </a>
                        </li>

                        <li class="{{ request()->is('diario/dashboard') ? 'active' : '' }}">
                            <a href="/diario/dashboard">
                                <span class="item-description">Lista de refeições</span>
                            </a>
                        </li>  

                        <li class="">
                            <a href="/relatorio/diario">
                                <span class="item-description">Relatório diário</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="/relatorio/semanal">
                                <span class="item-description">Relatório semanal</span>
                            </a>
                        </li>

                         <li class="">
                            <a href="/relatorio/mensal">
                                <span class="item-description">Relatório mensal</span>
                            </a>
                        </li>

                        <li class="  {{ request()->is('agua/create') ? 'active' : '' }}">
                            <a href="/agua/create">
                                <span class="item-description">Contador de água</span>
                            </a>
                        </li>
                                         
                    </ul>
                </div>
            </nav>-->

            <div class="sidebar">

                <div class="sidebar-header d-flex">
                    <img src="/img/folhas.png" alt="" class="icon-folha">
                    <h5 class="playfair">Diário Alimentar</h5>
                </div>

                <ul class="sidebar-nav">

                 <li class="nav-item">
                    <a href="/home" class="nav-link">
                        <ion-icon name="home" style="margin-right: 15px"></ion-icon>
                        Home
                    </a>
                </li>
                     

                    <li class="nav-title">
                        <button type="button" class="btn-collapse-menu" data-bs-toggle="collapse" data-bs-target="#demo">
                            REFEIÇÕES                           
                        </button>
                    </li>

                    
                    <div id="demo" class="collapse show">
                        <li class="nav-item">
                            <a href="/diario/create" class="nav-link">
                               <ion-icon name="add-circle" style="margin-right: 15px"></ion-icon>
                                Adicionar refeição
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/diario/dashboard" class="nav-link">
                                <ion-icon name="reader" style="margin-right: 15px"></ion-icon>
                                Dashboard refeições
                            </a>
                        </li>
                    </div>

                    <li class="nav-title">
                        <button type="button" class="btn-collapse-menu" data-bs-toggle="collapse" data-bs-target="#demo2">
                            RELATÓRIOS                         
                        </button>
                    </li>
                    
                    <div id="demo2" class="collapse show">
                        <li class="nav-item">
                            <a href="/relatorio/diario" class="nav-link">
                                <ion-icon name="calendar-number" style="margin-right: 15px"></ion-icon>
                                Relatório diário
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/relatorio/semanal" class="nav-link">
                                <ion-icon name="cellular" style="margin-right: 15px"></ion-icon>
                                Relatório semanal
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/relatorio/mensal" class="nav-link">
                                <ion-icon name="bar-chart" style="margin-right: 15px"></ion-icon>
                                Relatório Mensal
                            </a>
                        </li>
                    </div>
                    
                    <li class="nav-title">
                        <button type="button" class="btn-collapse-menu" data-bs-toggle="collapse" data-bs-target="#demo3">
                            CONSUMO DE ÁGUA
                        </button>
                    </li>

                    <div id="demo3" class="collapse show">
                        <li class="nav-item">
                            <a  href="/agua/create" class="nav-link">
                                <ion-icon name="add-circle" style="margin-right: 15px"></ion-icon>
                                Adicionar registro
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/agua/dashboard" class="nav-link">
                                <ion-icon name="reader" style="margin-right: 15px"></ion-icon>
                                Dashboard água
                            </a>
                        </li>

                    </div>

                    @auth
                    <li class="nav-item" style="margin-top: 10px; border-top: 1px solid #566d54; width: 220px;">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                                <ion-icon name="log-out" style="margin-right: 15px"></ion-icon>
                                Sair
                            </a>
                        </form>
                    </li>  
                    @endauth
                </ul>

                

            </div>

            <!--menu -->
            <div class="d-flex flex-column w-100 mt-2">
                <div class="container w-100">
                    <div class="container-menu aling-items-center">
                        @auth
                        <nav class="menu-nav d-flex">
                            
                            <div class="perfil d-flex justify-content-end align-items-center">
                                
                                <div class="imgCX">   
                                    @if(Auth::user()->profile_photo_path)
                                        <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}">                
                                    @endif
                                    <img src="/img/sem-foto.jpg" alt="Icone sem foto">
                                </div>
                                
                                <h3 class="text-user mt-2"><strong>{{ Auth::user()->name }}</strong> <br> {{ Auth::user()->email }}</h3>

                                <div class="dropdown">
                                    <button class="btn-config" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                                    </button>
                                    <ul class="dropdown-menu list-config">
                                        <li>
                                            <a href="/perfil/show"><ion-icon name="person-outline" class="icon-menu"></ion-icon>
                                                Perfil
                                            </a>
                                        </li>
                                        <li>
                                            <form action="/logout" method="POST">
                                                @csrf
                                                <a href="/logout" class="" onclick="event.preventDefault(); this.closest('form').submit();">
                                                    <ion-icon name="log-out-outline" class="icon-menu"></ion-icon>
                                                    Sair
                                                </a>
                                            </form>
                                        </li>      
                                    </ul>
                                </div>
                            </div>
                        </nav>

                        
                        @endauth
                    </div>
                </div>
            <!--welcome -->
                <div>
                    @yield('welcome') 
                </div>  
            </div>
        </div>
    </main>

    <footer>
    </footer>

    <script src="/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
    </script>

    </body>
</html>


