<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>

<style>
.playfair-display{font-family: "Playfair Display", serif;  font-weight: 400;  font-optical-sizing: 57; font-size: 50px}
.nunito{font-family: "Nunito", sans-serif}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer; 
  background-color: #1079599c;
  border-radius: 30px;
}

a{color: white}


</style>

<body>


    <div class="d-flex flex-column justify-content-center align-items-enter" style="width: 100vw; height: 100vh"><br>

        <h2 class="playfair-display text-center">Diário Alimentar</h2>

        <div class="col-9 text-center mx-auto">
            <p class="nunito"> O presente trabalho tem como objetivo o desenvolvimento de um sistema web com base no registro alimentar. O Registro Alimentar é um modelo de controle nutricional em que o paciente anota todos os alimentos e líquidos consumidos ao longo do dia por um período determinado. O método permite avaliar <strong><span style="color: #0070c0">hábitos alimentares, padrões de consumo e a ingestão de nutrientes</span></strong>. O sistema será desenvolvido utilizando o framework Laravel</p>
        
            <button class="button nunito" style="font-size: 14px"><a href="/register"><strong>Cadastre-se<strong></a></button>
            <button class="button nunito" style="font-size: 14px"><a href="/login"><strong>Login</strong></a></button>
        </div>

    </div>
    
</body>
</html>







