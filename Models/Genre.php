<?php
class Genre{
    public $genre1;
    public $genre2;

    public function __construct( 
        string $genre1, 
        string $genre2 )
        {
        $this->genre1 = $genre1;
        $this->genre2 = $genre2;
    }
}