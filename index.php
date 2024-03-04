<?php

class Production{
    public $title;
    public $lang;
    public $vote;
    public function __construct($title, $lang, $vote){
        $this->title = $title;
        $this->lang = $lang;
        $this->vote = $vote;
    }

}

$film1 = new Production('Harry Potter', 'eng', '8');

var_dump( $film1 );