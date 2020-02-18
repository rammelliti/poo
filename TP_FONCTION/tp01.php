<?php

/*for($i=1;$i<=10;$i++){
            $t[]=$i;
        }
echo implode($t,";");*/

define ('nb',10);
$tab=array();
//remplissage de tableau
 for($i=1;$i<=nb;$i++){
            $tab[$i]=rand(1,100);
        }
                 
     
//// tri du tableau
        for($nbr=nb; $nbr>1 ;$nbr--){
            //recherche max
           $max = 1;
         for($i=2;$i<=$nbr ; $i++){
             if($tab[$i]>$tab[$max]){
                 $max=$i;            
             }
        
         }
             permuter($tab,$max,$nbr);       
        }
         
       echo  implode(", ",$tab);
       
       //// fonction permutation
        function permuter(&$tab,$i,$j){
                    $tmp=$tab[$i];
                    $tab[$i]=$tab[$j];
                    $tab[$j]=$tmp;
            }    