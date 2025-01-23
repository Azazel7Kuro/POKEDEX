<?php
require("Modele/pokemon.php");

function accueil(){
    require("Vue/accueil.php");
}

function test(){
    $pokedex = pok_test();
    require("Vue/test.php");
}

function modif() {
    $pokedex = pok_test();
    require("Vue/modifierpokemon.php");
}

function histo() {
    require("Vue/historisation.php");
}

?>
