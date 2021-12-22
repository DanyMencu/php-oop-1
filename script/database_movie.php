<?php
class Movie {
    //*Property
    public $poster ;
    public $title ;
    public $genre ;
    public $exit_year ;
    //Minutes
    public $duration ;
    public $votes ;
    public $recommended ;
    public $original_lenguage ;
    //Milion of dollar
    public $production_cost ;
    public $tickets_sold ;
    public $sequel;

    //*Constructor
    function __construct($title, $poster, $genre, $exit_year, $duration, $votes, $original_lenguage, $production_cost, $tickets_sold) {
        $this->title = $title;
        $this->poster = $poster;
        $this->genre = $genre;
        $this->exit_year = $exit_year;
        $this->duration = $duration;
        $this->votes = $votes;
        $this->original_lenguage = $original_lenguage;
        $this->production_cost = $production_cost;
        $this->tickets_sold = $tickets_sold;
    }

    //*Methods
    public function getRecommendation($votes) {
        if ($this->votes < 25) {
            $this->recommendation = "Assolutament NO!";
        }
        else if ($this->votes > 25 && $this->votes <= 50) {
            $this->recommendation = "No";
        }
        else if ($this->votes<= 50 && $this->votes <= 75) {
            $this->recommendation = "Si";
        }
        else {
            $this->recommendation = "Assolutamente SI!!";
        }
        return $this->recommendation;
    }

    public function getSequel($production_cost, $tickets_sold) {
        if ($production_cost > $tickets_sold) {
            $this->sequel = 'Nessuna probabilità';
        }
        else if ($tickets_sold > ($production_cost * 3) ) {
            $this->sequel = "Assolutamente si! GALLINA DALLE UOVA D'OROOOO!!";
        }
        else if ($tickets_sold > ($production_cost * 2) ) {
            $this->sequel = 'Altissime probabilità';
        }
        else if ($tickets_sold > $production_cost) {
            $this->sequel = 'Buone probabilità';
        }
        else {
            $this->sequel = 'Quasi nessuna probabilità';
        }
        return $this->sequel;
    }

}

//*Instance

$avengers_endgame = new Movie('Avengers: End Game', 'https://www.ilpost.it/wp-content/uploads/2019/07/endgame-record.jpg', 'Sci-fi/Fantasy', 2019, 181, 94, 'En', 500, 2792);

$dune = new Movie('Dune', 'https://www.meteoweb.eu/wp-content/uploads/2021/09/DUNE.jpg', 'Sci-fi/Adventure', 2021, 155, 83, 'En', 165, 390);

$halloween_kills = new Movie('Halloween Kills', 'https://www.supergacinema.it/wp-content/uploads/2021/10/Halloween-Kills.jpg', 'Mystery & thriller/Other', 2021, 105, 41, 'En', 41, 80);

$cats = new Movie('Cats', 'https://pad.mymovies.it/filmclub/2018/12/057/locandina.jpg', 'Comedy/Musical', 2019, 110, 19, 'En', 95, 73);

?>