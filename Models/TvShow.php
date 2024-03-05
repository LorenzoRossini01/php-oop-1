<?php

include_once __DIR__ . './Production.php';

class TvShow extends Production{

    public $episodes;
    public $seasons;

    public function __construct( 
    string $title, 
    string $lang, 
    int $vote, 
    array $genres,
    int $episodes, 
    int $seasons
    ){
        parent::__construct($title, $lang, $vote, $genres);
        $this->episodes = $episodes;
        $this->seasons = $seasons;
    }
    
}