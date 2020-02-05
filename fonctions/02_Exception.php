<?php
function multiplier($a, $b){
    if(!is_numeric($a) || !is_numeric($b))
    {
        throw new Exception('Les deux paramètres doivent être des nombres');
    }
    return $a*$b;
   
}

try { /// Essaie des instructions situées dans ce bloc
    echo multiplier(10,3).'<br:>';
    echo multiplier('bonjour',20);
    
} 
catch (Exception $e) ////  Exeption levée.
{
    echo 'Une exception s\'est produite. Message d\'erreur : ',
            $e->getMessage();
}
finally{
    echo '<br />';
    echo 'Fin'; ///Fin de script.
}

