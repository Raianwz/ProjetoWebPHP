<?php

$bd = new SQLite3("./db/filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo "\ntabela filmes apagada\n"; 

$sql = "CREATE TABLE filmes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(200) NOT NULL,
    poster VARCHAR(200),
    sinopse TEXT,
    nota DECIMAL(2,1)

)";

if ($bd->exec($sql)) 
    echo "\ntabela filmes criada\n"; 
else
    echo "\nerro ao criar tabela filmes\n";

$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES(
    'Vingadores',
    'https://image.tmdb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
    'Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços 
    do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, não importando as consequências.',
    9.9
)";    

if ($bd->exec($sql)) 
    echo "\nfilmes inseridos com sucesso\n"; 
else
    echo "\nerro ao inserir filmes\n";

$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES(
    'Liga da Justiça Sombria: Guerra de Apokolips',
    'https://image.tmdb.org/t/p/w300/18iq63BiWzdY529vGDeGVUpcSWT.jpg',
    'Na trama, Batman reunia um grupo de heróis mágicos para lidar com ameaças sobrenaturais. Entre a galeria de heróis da Liga da Justiça 
    Sombria, temos Constantine, Monstro do Pântano, Zatanna, Etrigan, entre outros. É aguardado a aparição de alguns personagens como Darkseid, as Fúrias e até mesmo o Pai Celestial.',
    7.9
)";    

if ($bd->exec($sql)) 
    echo "\nfilmes inseridos com sucesso\n"; 
else
    echo "\nerro ao inserir filmes\n";

?>