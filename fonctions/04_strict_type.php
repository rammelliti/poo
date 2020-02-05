<?php
declare (strict_type=1);

//déclaration d'une fonction retournant un type entier
function affiche(): int{
    return "1";///la fonction retourne en fait une chaine de caractères
}

try{
    affiche();//appel de la fonction
} catch (TypeError $e) {
    echo ($e->getMessage());
}

