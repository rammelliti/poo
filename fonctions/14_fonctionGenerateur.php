<?php
////Exemple 1
//// declaration d'une fonction générant les chiffres de 1 à 5
function boucle_yield(){
    for($i =1; $i<=5; $i++){
        ///=i est preservé entre chaque production de valeur
        yield $i; //////return mais il revient ds la fonction
    }
}
/// appel de la fonction
$generateur = boucle_yield();
////affichage de valeur
foreach ($generateur as $val) {
    echo $val."  ";
}


/////Exemple 2
////declaration d'une fonction générant les carrés des nombres reçus
function carre($a){
   foreach ($a as $val) yield $val*$val; 
}
echo "<br />";
////declaration d'une tableau de nombres
$arr=array(5,8,15,35);
//// affichage des carrés des valeurs du tableau       
foreach (carre($arr)as $val){
    echo $val."  ";
}
