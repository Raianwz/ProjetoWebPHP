<?php include "cabecalho.php" ?>
<?php


$bd = new SQLite3("filmes.db");
$sql = "SELECT * FROM filmes";
$filmes = $bd->query($sql);


$filme1 = [
    "titulo" => "Vingaores: Ultimato",
    "nota" => 8.6,
    "sinopse" => "Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços 
    do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, não importando as consequências.",
    "poster" => "https://image.tmdb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg",
];

$filme2 = [
    "titulo" => "AD Astra",
    "nota" => 6.6,
    "sinopse" => "Roy McBride é um engenheiro espacial, que decide empreender a maior jornada de sua vida: viajar para o espaço, um astronauta que se perdeu há vinte anos atrás no caminho para Netuno.",
    "poster" => "https://image.tmdb.org/t/p/w300/wigZBAmNrIhxp2FNGOROUAeHvdh.jpg",
];

$filme3 = [
    "titulo" => "Star Wars: Episódio IX – A Ascensão Skywalker",
    "nota" => 6.7,
    "sinopse" => "Com o retorno do Imperador Palpatine, a Resistência toma a frente da batalha que ditará os rumos da galáxia. Treinando para ser uma completa Jedi, Rey ainda se encontra em conflito com seu passado e futuro, mas teme pelas respostas que pode conseguir a partir de sua complexa ligação com Kylo Ren, que também se encontra em conflito pela Força.",
    "poster" => "https://image.tmdb.org/t/p/w300/lFx2i2pg1BoaD7grcpGDyHM1eML.jpg",
];

$filme4 = [
    "titulo" => "Liga da Justiça Sombria: Guerra de Apokolip",
    "nota" => 7.9,
    "sinopse" => "Na trama, Batman reunia um grupo de heróis mágicos para lidar com ameaças sobrenaturais. Entre a galeria de heróis da Liga da Justiça Sombria, temos Constantine, Monstro do Pântano, Zatanna, Etrigan, entre outros. É aguardado a aparição de alguns personagens como Darkseid, as Fúrias e até mesmo o Pai Celestial.",
    "poster" => "https://image.tmdb.org/t/p/w300/18iq63BiWzdY529vGDeGVUpcSWT.jpg",
];


// $filmes = [$filme1, $filme2, $filme3, $filme4]
?>

<body>
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
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
        <!-- Coluna Geral -->
        <?php while($filme = $filmes->fetchArray()) :  ?>
            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?= $filme["poster"] ?>">

                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <i class="material-icons amber-text">star</i><?= $filme["nota"] ?>
                        </p>
                        <span class="card-title"><?= $filme["titulo"] ?></span>
                        <p><?= $filme["sinopse"] ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile ?>

        <!--- Fim da Coluna Geral -->
    </div>

</body>

</html>