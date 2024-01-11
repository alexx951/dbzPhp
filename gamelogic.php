<?php
require('heros.php');
require('attack.php');

function afficherMenu() {
    echo "1. Commencer\n";
    echo "2. Quitter\n";
}

while (true) {
    afficherMenu();
    $choix = readline("Entrez votre choix : ");

    if ($choix == "1") {
        choixHero($GLOBALS['heros']);
        break;
    } elseif ($choix == "2") {
        echo "Au revoir !\n";
        break;
    } else {
        echo "Choix invalide. Veuillez réessayer.\n";
    }
}

function choixHero($heros){
    foreach ($heros as $hero) {
        echo $hero->getHeros();
    }
    $choix = readline("Entrez votre choix : ");

    if ($choix >= 1 && $choix <= 4) {
        echo $heros[$choix - 1]->getHeros();
        choixMechant($GLOBALS['mechants']);
    } else {
        echo "Choix invalide. Veuillez réessayer.\n";
    }
}

function choixMechant($mechants){
    foreach ($mechants as $mechant) {
        $mechant->getMechant();
    }
    foreach ($mechants as $mechant) {
        $pv = $mechant->getPV();
        echo $pv;
    }
    $tour = 1;
    if ($tour = 1) {
        echo "\nUn combat est lancé contre ".$mechants[$tour - 1]->getMechant()."Choissisez votre attaque : \n";
        choixAttaque($GLOBALS['attaque']);
    }
}

function choixAttaque($attaque){

    foreach ($attaque as $attack) {
        echo $attack->getAttack();
    }
    $choixAttaque = readline("Entrez votre choix : ");

    if ($choixAttaque >= 1 && $choixAttaque <= 4) {
        echo $attaque[$choixAttaque - 1]->getAttack();
    } else {
        echo "Choix invalide. Veuillez réessayer.\n";
    }
}
        /*$Mechant->subirDegats($attaqueJoueur->getPuissance());

       
        $attaqueEnnemi = $attaque[array_rand($attaque)]; 
        $hero->subirDegats($attaqueEnnemi->getPuissance());

       
        while ($hero->getPointsDeVie() > 0 && $Mechant->getPointsDeVie() > 0) {
          
        }

       
        if ($hero->getPointsDeVie() <= 0) {
            echo "Vous avez perdu le combat.\n";
        } else {
            echo "Vous avez gagné le combat.\n";
        }
     else {
        echo "Choix invalide. Veuillez réessayer.\n";
    }


while (true) {
    afficherMenu();
    $choix = readline("Entrez votre choix : ");

    if ($choix == "1") {
        combatTourParTour($GLOBALS['heros'], $GLOBALS['attaque']);
        break;
    } elseif ($choix == "2") {
        echo "Au revoir !\n";
        break;
    } else {
        echo "Choix invalide. Veuillez réessayer.\n";
    }
}*/
?>