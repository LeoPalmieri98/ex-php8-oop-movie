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



    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>Movies</h1>
</body>
</html>