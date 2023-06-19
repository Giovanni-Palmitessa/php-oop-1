<?php
// instance variables
class Movie
{
    public string $name;
    public string $language;
    public int $year;
    public array $genres;

    // constuctor

    public function __construct(string $name, string $language, int $year, array $genres = [], string $imageUrl)
    {
        $this->name = $name;
        $this->language = $language;
        $this->year = $year;
        // ciclo che controlla che ogni indirizzo sia di tipo Genres
        foreach ($genres as $genre) {
            if (!$genre instanceof Genre) {
                die('Gli indirizzi devono essere di tipo Genres');
            }
        };
        $this->genres = $genres;
        $this->imageUrl = $imageUrl;
    }

    // instance methods

    public function printLang()
    {
        $language = substr($this->language, 0, 3);
        return $language;
    }
}
