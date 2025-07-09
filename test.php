<?php
    class Genre {
        public $name;

        public function __construct($name) {
            $this ->name = $name;
        }

        public function shuffle(){
            shuffle($this->name);
        }
    }

    $genre = [];
    $genre[]= new Genre('drama', [
        'drama1',
        'drama2',
    ]);
    $genre[]= new Genre('slice of life', [
        'sol1',
        'sol2',
    ]);
    $genre[]= new Genre('romance',[
        'romance1',
        'romance2',
    ]);

    die(var_dump($genre));
