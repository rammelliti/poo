<?php

/// declaration de la variable anonyme
$func_anonymous=function()
{
    echo "<p>Bonjour !</p>";
};
///exécution de la fonction anonyme
$func_anonymous();


$func_anonymous1=function($parametre)
{
    echo "<p>Bonjour !".$parametre."</p>";
};
///exécution de la fonction anonyme
$func_anonymous1("Ramla");


/// declaration du tableau
$data=array('tigre','lion','vache');
//////appel de la fonction array_walk
array_walk($data, function(&$item){
////passage par référence pour modifier le valeur du tableau
    $item=ucwords($item);////mise en majuscule de la parametre lettre 
});
////// affichage de tableau modifié
var_dump($data);
    
