<?php

// fonction avec un nombre quelconque de paramètres
function fonction_variable(...$parametres){
    echo "Le nombre de parametre est : ".count($parametres)."<br />";
    ///transformation du tableau en chaine de caractères
    echo "les valeurs sont : ".implode(" ",$parametres)."<br :>";
}
fonction_variable('Tigre');
fonction_variable('Tigre','Lion');
fonction_variable('Tigre','Lion','Zèbre');

/// fonction de concatenation avec 3 parametres
function concatenation($a,$b,$c)
{
    return $a." ".$b." ".$c."<br />";
}

////affichage du retour de la fonction concatenation
echo concatenation('Mouton','Lion','Tigre');
$tableau1=['Lion','Tigre'];
///affichage 
echo concatenation('Mouton',...$tableau1);
///echo concatenation('Mouton',['Lion','Tigre']);