<?php

include_once __DIR__ . './Production.php';

class Movie extends Production{

    public $earnings;
    public $duration;

    public function __construct( 
    string $title, 
    string $lang, 
    int $vote, 
    array $genres,
    int $earnings, 
    int $duration
    ){
        parent::__construct($title, $lang, $vote, $genres);
        $this->earnings = $earnings;
        $this->duration = $duration;
    }
    
}