<?php 

class Movie {
    public $nome;
    public $anno;
    public $descrizione;
    public $voto;
    public Genre $genere;

    function __construct ($_nome, $_anno, $_descrizione, $_voto, $_genere) {
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->descrizione = $_descrizione;
        $this->voto = $_voto;
        $this->genere = $_genere;

    }

    public function setVote() {
        return "Il film {$this->nome} ha un voto di {$this->voto}/10";
    }

}

class Genre {
    public $genere;

    function __construct ($_genere) {
    $this->genere = $_genere;

}
}

$generi = [
    new Genre("Fantascienza"),
    new Genre("Noir"),
];
$movies =[ 
    new Movie("Guerre Stellari", 1977, "Luke Skywalker si unisce a un cavaliere Jedi e a un pilota borioso per salvare la galassia.", 9, $generi[0]),
    new Movie("Pulp Fiction", 1994,"Le vite di due sicari, un pugile e una coppia di banditi si intrecciano in quattro storie di violenza.", 10, $generi[1]),
    new Movie("Interstellar", 2014, "Un gruppo di esploratori attraversa un wormhole nello spazio nel tentativo di garantire la sopravvivenza dell'umanità.", 8, $generi[0]),
    ];

var_dump($movies)

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>OOP</title>
</head>
<body>
    <h1>Movies</h1>

    <div class="container py-5">
    <div class="d-flex flex-wrap justify-content-center gap-4">

        <?php foreach ($movies as $movie ) { ?>

            <div class="card shadow-sm" style="width: 15rem;">                
                <div class="card-body text-center">
                    <h5 class="card-title text-truncate"><?php echo $movie->nome; ?></h5>
                    <p class="card-subtitle mb-2 text-muted text-truncate"><?php echo  $movie->anno; ?></p>
                    <p class="card-text small mb-1"><?php echo  $movie->descrizione; ?></p>
                    <p class="card-text small text-uppercase text-secondary"><?php echo$movie->setVote(); ?></p>
                </div>
            </div>

        <?php } ?>
</body>
</html>