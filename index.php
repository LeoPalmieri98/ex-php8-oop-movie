<?php 

class Movie {
    public $nome;
    public $anno;
    public $descrizione;
    public $voto;
    
    function __construct ($_nome, $_anno, $_descrizione, $_voto) {
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->descrizione = $_descrizione;
        $this->voto = $_voto;

    }

    public function setVote() {
        return "Il film {$this->nome} ha un voto di {$this->vote}/10";
    }

}

$movies =[ 
    new Movie("Guerre Stellari", 1977, "Luke Skywalker si unisce a un cavaliere Jedi e a un pilota borioso per salvare la galassia.", 9),
    new Movie("Pulp Fiction", 1994,"Le vite di due sicari, un pugile e una coppia di banditi si intrecciano in quattro storie di violenza.", 10),
    new Movie("Interstellar", 2014, "Un gruppo di esploratori attraversa un wormhole nello spazio nel tentativo di garantire la sopravvivenza dell'umanità.", 8),
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
    
</body>
</html>