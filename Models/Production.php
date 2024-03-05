<?php
class Production{
    public $title;
    public $lang;
    public $vote;

    public $genres;
    public function __construct( 
        string $title, 
        string $lang, 
        int $vote, 
        array $genres)
        {
        $this->title = $title;
        $this->lang = $lang;
        $this->vote = $vote;
        $this->genres = $genres;
    }


    public function set_title($title) {
        if(empty($title))return;
        
        $this->title=ucfirst($title); 
        }

    public function get_title(){
        return $this->title;
    } 

}