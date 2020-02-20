<?php
$A=array();
define('nb',20);
for($i=1;$i<=nb/2;$i++){
   $A[$i]=rand(1,nb); 
   
}
$B=array();
$comp=0;
for($i=1;$i<=nb;$i++){
    
    if(!(in_array($i,$A))){
            $comp++;
            $B[$comp]=$i;    
    
    }   
}


var_dump($A);
var_dump($B);

ob_start();
 echo '<html><table border="1"><thead><tr><th>Valeur</th><th>Le cube</th></tr><thead>';
 echo '<body>';
          
for($i=1;$i<=count($B);$i++){
    echo '<tr><td>'.$B[$i].'</td>';
     echo '<td>'.cube($B[$i]).'</td></tr>'; 
}
echo '</body></table></html>';
ob_end_flush();
function cube($n){
    //$res=$n**3;
    $res=pow($n,3);
    return $res;
}
