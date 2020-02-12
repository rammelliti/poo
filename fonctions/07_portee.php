<?php

/*function affiche_mot($nom){
    echo $nom;
}
affiche_mot("Bonjour");
echo $nom; //// erreur car $nom est non defini

$nom="Jean";
function affiche_mot($nom){
    echo $nom;
}
affiche_mot("Bonjour");/// affiche bonjour
echo $nom; /// affiche Jean*/

/*$prenom="Jean";
function affiche_mot(){
    global $prenom; ////si y'a global mm il est pa defini ds la fonction il cherche dehors
    echo $prenom; ///affiche une erreur si y'a pas global
}
affiche_mot();*/

function affiche_nombre(){
    $nombre=0;
    $nombre=$nombre+1;
    echo $nombre.";";
}
affiche_nombre();
affiche_nombre();

function affiche_nombre2(){
   static $nombre=0;  //// avec static le variable il garde sa valeur chaque appel 
    $nombre=$nombre+1;  ////et sans static chaque fois il revient a sa valeur initiale 
    echo $nombre.";";
}
affiche_nombre2();
affiche_nombre2();