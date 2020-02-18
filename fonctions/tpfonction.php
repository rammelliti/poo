<?php

function ajouter($a,$b){
    return $a+$b;
}
function soustraire($a,$b) {
    return $a-$b;
}
function operation($typeOperation,$x,$y){
   return $typeOperation($x,$y);
}
echo "6+4 = ".operation("ajouter",6,4)."<br />";
echo "6-4 = ".operation("soustraire",6,4)."<br />";