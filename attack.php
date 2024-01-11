<?php 

require_once ('heros.php');

class Attaque {
    public $nom;
    public $id;
    public $degat;

    public function __construct($nom, $id, $degat){
        $this->nom = $nom;
        $this->id = $id;
        $this->degat = $degat;

    }

    public function getAttack(){
        $text = "$this->id - $this->nom\n";
        return $text;
    }
}

$attack = new Attaque("Attaque", 1, 10);
$esquive = new Attaque("Esquive", 2, 10);
$boule = new Attaque("Boule d'énergie", 3, 10);
$parer = new Attaque("Parer", 4, 10);

$attaque = [$attack, $esquive, $boule, $parer];

?>