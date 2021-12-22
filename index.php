<?php
//Import data movies
require_once __DIR__ . '/script/database_movie.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poracciflix PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    <main>
        <div class="container">
            <!-- Avengers End Game -->
            <div class="movie-card">
                <!-- Postert -->
                <div class="poster">
                    <img src="<?php echo $avengers_endgame->poster ?>" alt="<?php echo $avengers_endgame->title ?>">
                </div>
                <ul>
                    <li class="title">
                        <?php echo $avengers_endgame->title ?>
                    </li>
                    <li> <strong>Genere:</strong>
                        <?php echo $avengers_endgame->genre ?>
                        <strong>Anno di uscita:</strong>
                        <?php echo $avengers_endgame->exit_year ?>
                    </li>
                    <li><strong>Lingua originale:</strong>
                        <?php echo $avengers_endgame->original_lenguage ?> , Durata: <?php echo $avengers_endgame->duration ?> minuti
                    </li>
                    <li><strong>Voto:</strong>
                        <?php echo $avengers_endgame->votes ?>
                        / <strong>Consigliato?</strong>
                        <?php echo $avengers_endgame->getRecommendation($avengers_endgame->votes) ?>
                    </li>
                    <li><strong>Costo:</strong>
                        <?php echo $avengers_endgame->production_cost ?> milioni
                    </li>
                    <li><strong>Incasso:</strong>
                        <?php echo $avengers_endgame->tickets_sold ?> milioni
                    </li>
                    <li>
                        <strong>Ci sarà un sequel?</strong>
                        <?php echo $avengers_endgame->getSequel($avengers_endgame->production_cost, $avengers_endgame->tickets_sold) ?>
                    </li>
                </ul>
            </div>
            <!-- Dune -->
            <div class="movie-card">
                <!-- Postert -->
                <div class="poster">
                    <img src="<?php echo $dune->poster ?>" alt="<?php echo $dune->title ?>">
                </div>
                <ul>
                    <li class="title">
                        <?php echo $dune->title ?>
                    </li>
                    <li>
                        <strong>Genere:</strong>
                        <?php echo $dune->genre ?>
                        <strong>Anno di uscita:</strong>
                        <?php echo $dune->exit_year ?>
                    </li>
                    <li>
                        <strong>Lingua originale:</strong> <?php echo $dune->original_lenguage ?> ,
                        <strong>Durata:</strong> <?php echo $dune->duration ?> minuti
                    </li>
                    <li><strong>Voto:</strong>
                        <?php echo $dune->votes ?>
                        / <strong>Consigliato?</strong>
                        <?php echo $dune->getRecommendation($dune->votes) ?>
                    </li>
                    <li><strong>Costo:</strong>
                        <?php echo $dune->production_cost ?> milioni
                    </li>
                    <li><strong>Incasso:</strong>
                        <?php echo $dune->tickets_sold ?> milioni
                    </li>
                    <li>
                        <strong>Ci sarà un sequel?</strong>
                        <?php echo $dune->getSequel($dune->production_cost, $dune->tickets_sold) ?>
                    </li>
                </ul>
            </div>
            <!-- Halloween kills -->
            <div class="movie-card">
                <!-- Postert -->
                <div class="poster">
                    <img src="<?php echo $halloween_kills->poster ?>" alt="<?php echo $halloween_kills->title ?>">
                </div>
                <ul>
                    <li class="title">
                        <?php echo $halloween_kills->title ?>
                    </li>
                    <li>
                        <strong>Genere:</strong>
                        <?php echo $halloween_kills->genre ?>
                        <strong>Anno di uscita:</strong>
                        <?php echo $halloween_kills->exit_year ?>
                    </li>
                    <li><strong>Lingua originale:</strong>
                        <?php echo $halloween_kills->original_lenguage ?> ,
                        <strong>Durata:</strong> <?php echo $halloween_kills->duration ?> minuti
                    </li>
                    <li><strong>Voto:</strong>
                        <?php echo $halloween_kills->votes ?>
                        / <strong>Consigliato?</strong>
                        <?php echo $halloween_kills->getRecommendation($halloween_kills->votes) ?>
                    </li>
                    <li><strong>Costo:</strong>
                        <?php echo $halloween_kills->production_cost ?> milioni
                    </li>
                    <li><strong>Incasso:</strong>
                        <?php echo $halloween_kills->tickets_sold ?> milioni
                    </li>
                    <li>
                        <strong>Ci sarà un sequel?</strong>
                        <?php echo $halloween_kills->getSequel($halloween_kills->production_cost, $halloween_kills->tickets_sold) ?>
                    </li>
                </ul>
            </div>
            <!-- Cats -->
            <div class="movie-card">
                <!-- Postert -->
                <div class="poster">
                    <img src="<?php echo $cats->poster ?>" alt="<?php echo $cats->title ?>">
                </div>
                <ul>
                    <li class="title">
                        <?php echo $cats->title ?>
                    </li>
                    <li>
                        <strong>Genere:</strong>
                        <?php echo $cats->genre ?>
                        <strong>Anno di uscita:</strong>
                        <?php echo $cats->exit_year ?>
                    </li>
                    <li>
                        <strong>Lingua originale:</strong>
                        <?php echo $cats->original_lenguage ?> ,
                        <strong>Durata:</strong> <?php echo $cats->duration ?> minuti
                    </li>
                    <li><strong>Voto:</strong>
                        <?php echo $cats->votes ?> /
                        <strong>Consigliato?</strong> <?php echo $cats->getRecommendation($cats->votes) ?>
                    </li>
                    <li><strong>Costo:</strong>
                        <?php echo $cats->production_cost ?> milioni
                    </li>
                    <li><strong>Incasso:</strong>
                        <?php echo $cats->tickets_sold ?> milioni
                    </li>
                    <li>
                        <strong>Ci sarà un sequel?</strong>
                        <?php echo $cats->getSequel($cats->production_cost, $cats->tickets_sold) ?>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>