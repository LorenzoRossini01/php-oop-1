<?php
$film1 = new Production(
    'Harry Potter',
    'eng',
    8,
    new Genre('fantasy', 'mistery'),
    
    );
    
    var_dump( $film1 );
    
    $film2= new Production(
    'Spiderman', 
    'eng', 
    9,
    new Genre('action', 'superhero')
    );
    var_dump( $film2 );