<?php
$phrase="Bonjour, il fait beau";
if (isset($phrase)){
    echo "La variable existe.";
}else {
    echo " La variable n'existe pas";
}

/////------------------------------------


$phrase="Bonjour, il fait beau";
if (empty($phrase)){
    echo "La variable est null.<br />";
}
else {
    echo "La variable n'est pas nulle.<br/>";
}

///////--------------------------------

var_dump($phrase);
$tableau= array("Fraise","Banane",array(1,2,3));
var_dump($tableau);



////-----------------------

function always_false(){
    return false;
}
if (empty(always_false())){
    echo "Ceci sera affiché";
}
