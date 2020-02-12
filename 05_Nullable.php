<?php
////déclaration d'une fonction retournant un type string ou null
//// et prenant en paramètre un typestring ou null
function test(?string $name): ?string {
    return $name;
}
var_dump(test(null));///appell de la fonction aven null
echo"<br />";
var_dump(test("Bonjour"));///appel de la fonction avec une chaine de caractères

    
?>