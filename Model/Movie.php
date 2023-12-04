<?php
class Movie
{
    private int $id;
    private string $title;
    private string $overview;
    private float $vote_average;
    private string $poster_path;
    private string $original_language;

    function __construct($id, $title, $overview, $vote, $language, $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->overview = $overview;
        $this->vote_average = $vote;
        $this->poster_path = $image;
        $this->original_language = $language;
    }

    public function printCard()
    {
        $image = $this->poster_path;
        $title = $this->title;
        include __DIR__.'/../Views/card.php';
    }
}

//retrieve the content of json file and decode the data into php associative array to further processing 
$movieString = file_get_contents(__DIR__ .'/../Model/movie_db.json');
$movieList = json_decode($movieString, true);

?>