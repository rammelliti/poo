<?php

function facto( $nbr){
    if ($nbr==0)  
            return 1;
    else 
       return facto($nbr-1)*$nbr;
       
    }

echo 'factoriel de 6 vaut :'.facto(6);

