<?php

class Personnage {
    public $nom;
    public $vitesse;
    public $pointsDeVie;
    public $attaque;
    public $ID;
  
    public function __construct($nom, $vitesse, $pointsDeVie, $attaque, $ID){
        $this->nom = $nom;
        $this->vitesse = $vitesse;
        $this->pointsDeVie = $pointsDeVie;
        $this->attaque = $attaque;
        $this->ID = $ID;
    }
}

class Heros extends Personnage {
    public function __construct($nom, $vitesse, $pointsDeVie, $attaque, $ID){
        parent::__construct($nom, $vitesse, $pointsDeVie, $attaque, $ID);
    }

    public function getHeros(){
        $text = "$this->ID - $this->nom Vitesse: $this->vitesse PV: $this->pointsDeVie ATQ: $this->attaque\n";
        return $text;
    }
}
class Mechant extends Personnage{
    public function __construct($nom, $vitesse, $pointsDeVie, $attaque, $ID){
    parent::__construct($nom, $vitesse, $pointsDeVie, $attaque, $ID);
    }

    public function getMechant(){
        $text = "$this->nom\n";
        return $text;
    }
    public function getPV(){
        $text = "$this->pointsDeVie\n";
        return $text;
    }

}

$Songoku = new Heros("Songoku",140,2100,650,1);
$Vegeta = new Heros("Vegeta",170,1900,600,2);
$Piccolo = new Heros("Piccolo",160,2300,500,3);
$Songohan = new Heros("Songohan",150,1800,700,4);

$heros = [$Songoku, $Vegeta, $Piccolo, $Songohan];


$Freezer = new Mechant ("Freezer",150,1900,700,11);
$Broly = new Mechant ("Broly",180,2600,850,12);
$Cell= new Mechant ("Cell",170,2300,750,13);


$mechants = [$Freezer, $Cell, $Broly];
?>