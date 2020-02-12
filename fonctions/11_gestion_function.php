<?php

function affiche_parametres($parametre1,$parametre2){
  echo " La valeur de premier argument est : ".func_get_arg(0)."<br/>";
  echo " La valeur de premier argument est : ".func_get_arg(1)."<br/>";
}
affiche_parametres("Bonjour", "Robert");

////------------------------------------------
/*
function affiche_nombre_parametres($parametre1,$parametre2){
    echo " Le nombre d'argument est : ".func_num_args()."<br/>"; 
}
affiche_nombre_parametres("Bonjour", "Robert");

function affiche_parametres2($parametre1,$parametre2){
    $tableau= func_get_args($parametre1,$parametre2);
    for($i=0;$i<func_num_args();$i++){
        echo "L'argument $i est : ".$tableau[$i]."<br />";
    }
}
affiche_parametres2("Bonjour", "Robert"); */

/////--------------------------------------------

function affiche_nombre_parametres2($parametre1,$parametre2){
    echo "Le nombre d'argument est : ".func_num_args()."<br/>"; 
}
/*if (function_exists('affiche_nombre_parametres2')){
    echo "La fonction existe";
} else {
    echo "La fonction n'existe pas";
}*/
echo function_exists('affiche_nombre_parametres2')?"Existe":"N'existe pas";

/////-----------------------------------
function incremente($i){
    $i++;
    var_dump(func_get_arg(0));
}
incremente(1);