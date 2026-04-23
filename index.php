<?php 

class Movie {
    public $nome;
    public $anno;
    public $descrizione;
    public $voto;
    
    function __construct ($_nome, $_anno, $descrizione, $_voto) {
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->descrizione = $_descrizione;
        $this->voto = $_voto;

    }

    public function metodqualcosa() {
        return "";
    }

}

$guerrestellari = new Movie("Guerre Stellari", 1977, "Spade laser e spazio", 9/10);

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