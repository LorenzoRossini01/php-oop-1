<?php

require_once __DIR__."./Models/Genre.php";
require_once __DIR__."./Models/Production.php";
require_once __DIR__."./Models/Movie.php";
require_once __DIR__."./Models/TvShow.php";



$film_1 = new Movie('Film 1','eng',9,[new Genre('Drama', 'Descrizione' ), new Genre('Drama', 'Descrizione' )], 1000000, 120);
$serie_tv_1 = new TvShow('Serie TV 1','eng',9,[new Genre('Drama', 'Descrizione' )], 12, 5);
$film_2 = new Movie('Film 1','eng',9,[new Genre('Drama', 'Descrizione' )], 1000000, 120);
$serie_tv_2 = new TvShow('Serie TV 1','eng',9,[new Genre('Drama', 'Descrizione' )], 12, 5);
$film_3 = new Movie('Film 1','eng',9,[new Genre('Drama', 'Descrizione' ), new Genre('Drama', 'Descrizione' )], 1000000, 120);
$serie_tv_3 = new TvShow('Serie TV 1','eng',9,[new Genre('Drama', 'Descrizione' )], 12, 5);
    
// var_dump( $film_1 );
// var_dump( $serie_tv_1 );

$Productions = [
    $film_1,$serie_tv_1, $film_2, $film_3, $serie_tv_2,$serie_tv_3
];