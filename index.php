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