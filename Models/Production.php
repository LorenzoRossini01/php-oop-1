<?php
class Production{
    public $title;
    public $lang;
    public $vote;

    public $genre;
    public function __construct( 
        string $title, 
        string $lang, 
        int $vote, 
        Genre $genre)
        {
        $this->title = $title;
        $this->lang = $lang;
        $this->vote = $vote;
        $this->genre = $genre;
    }

}