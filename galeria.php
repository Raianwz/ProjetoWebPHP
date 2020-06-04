<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Clorocine</title>
</head>

<body>
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CLOROCINE</h1>
        </div>
        <div class="nav-content purple darken-1">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

<div class="row">


    <div class="col s3">
        <div class="card hoverable">
          <div class="card-image">
            <img src="https://image.tmdb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg">
            
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
          </div>
          <div class="card-content">
              <p class="valign-wrapper">
                  <i class="material-icons amber-text">star</i>9,7</p>
                  <span class="card-title">Vingadores</span>
            <p>Após os eventos devastadores de "Vingadores: Guerra Infinita", o universo está em ruínas devido aos esforços 
                do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, não importando as consequências.</p>
          </div>
        </div>
    </div>

    <div class="col s3">
        <div class="card hoverable">
          <div class="card-image">
            <img src="https://image.tmdb.org/t/p/w300/wigZBAmNrIhxp2FNGOROUAeHvdh.jpg">
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
          </div>
          <div class="card-content">
              <p class="valign-wrapper">
                  <i class="material-icons amber-text">star</i>9,7</p>
                  <span class="card-title">AD Astra</span>
            <p>Roy McBride é um engenheiro espacial, que decide empreender 
                a maior jornada de sua vida: viajar para o espaço, um astronauta que se perdeu há vinte anos atrás no caminho para Netuno.</p>
          </div>
        </div>
    </div>

</div>

</body>

</html>