<?php
    class Playlist {
        public function __construct(public string $name, public array $songs) {
            //
        }
    }

    class Song {
        public function __construct(public string $name, public string $artist) {
            //
        }
    }

    $songs = [
        new Song('song1','artist1'),
    ];

    $playlist = new Playlist('playlist1', $songs);

    var_dump($playlist->songs);
