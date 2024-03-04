<?php
class Genre{
    public $genre;
    public $description;

    public function __construct( 
        string $genre, 
        string $description )
        {
        $this->genre = $genre;
        $this->description = $description;
    }
}