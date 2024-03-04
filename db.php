<?php
$film1 = new Production(
    'Spirited Away',
    'jap',
    9,
    new Genre('Animation', 'A young girl, Chihiro, becomes trapped in a strange new world of spirits. When her parents undergo a mysterious transformation, she must call upon the courage she never knew she had to free her family.' ),
    
    );
    
    // var_dump( $film1 );
    
$film2= new Production(
    'Dune: Part Two', 
    'eng', 
    9,
    new Genre('action', 'A young girl, Chihiro, becomes trapped in a strange new world of spirits. When her parents undergo a mysterious transformation, she must call upon the courage she never knew she had to free her family.')
    );
// var_dump( $film2 );

$film3= new Production(
    'The Dark Knight', 
    'eng', 
    9,
    new Genre('action', 'Batman raises the stakes in his war on crime. With the help of Lt. Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as the Joker.')
    );
// var_dump( $film3 );

$film4= new Production(
    'Cell 211', 
    'esp', 
    7,
    new Genre('action', 'The story of two men on different sides of a prison riot -- the inmate leading the rebellion and the young guard trapped in the revolt, who poses as a prisoner in a desperate attempt to survive the ordeal.')
    );
// var_dump( $film4 );

$film5= new Production(
    'Prisoners', 
    'eng', 
    9,
    new Genre('Thriller', 'Keller Dover is facing a parent’s worst nightmare: his young daughter and her friend have gone missing. Heading the investigation, Detective Loki arrests the only suspect – the driver of an RV on which the girls had been playing – but a lack of evidence forces his release. As pressure mounts, Loki’s team pursues multiple leads while a frantic Dover decides he has no choice but to take matters into his own hands.')
    );
// var_dump( $film5 );

$Production = [
    $film1,$film2, $film3, $film4, $film5,
];