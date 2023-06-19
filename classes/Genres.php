<?php

class Genres
{
    public $genreName;
    public $genreDescription;
    public $genreID;

    public function __construct($genreName, $genreDescription, $genreID)
    {
        $this->genreName = $genreName;
        $this->genreDescription = $genreDescription;
        $this->genreID = $genreID;
    }
}
