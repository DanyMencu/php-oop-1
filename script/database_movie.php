<?php
class Movie {
    //Property
    public $title ;
    public $genre ;
    public $exit_date ;
    public $duration ;
    public $votes ;
    public $recommended ;
    public $original_lenguage ;
    public $production_cost ;
    public $tickets_sold ;

    //Constructor
    function __construct($title, $genre, $exit_date, $duration, $votes, $recommended = null, $original_lenguage, $production_cost, $tickets_sold) {
        $this->title = $title;
        $this->genre = $genre;
        $this->exit_date = $exit_date;
        $this->duration = $duration;
        $this->votes = $votes;
        $this->recommended = $recommended;
        $this->original_lenguage = $original_lenguage;
        $this->production_cost = $production_cost;
        $this->tickets_sold = $tickets_sold;
    }

    //Methods
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
}
?>