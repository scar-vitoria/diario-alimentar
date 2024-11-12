<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Título da página -->
        <title>@yield('title')</title>

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <!-- Referencia CSS -->
        <link rel="stylesheet" href="/css/styles.css">
        
        <!-- Referencia Script JS -->
        <script src="js/scripts.js"></script>

        <!-- Font Welcome -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@200&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vibes&display=swap" rel="stylesheet">

      </head>
    
    <body class="">

      <!-- Cabeçalho -->
      <header> 
      <div class="container-menu">
        <div><a href=""><img class="icon-menu m-2" src="/img/menu/profile.png" alt="Diário" /></a></div>
        <div><h1 class="titulo m-2">DÍARIO ALIMENTAR</h1></div>
      </div>
      
         
      </header>

      <!-- Conteúdo da página -->
      @yield('content')


      <!-- Rodapé -->
      <footer>
      </footer>

    </body>

</html>
