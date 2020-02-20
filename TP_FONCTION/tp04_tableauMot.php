<?php
$t= array("la","vie","est","belle");
AffichageAléatoire($t);
function AffichageAléatoire($tab){
    
    $cle_aleatoire=array_rand($tab,count($tab));
    for($i=0;$i<count($tab);$i++){
        
        var_dump ($tab[$cle_aleatoire[$i]]." " );  
        }}