<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $t1=array(6,25,35,61);
        $t2=array(12,24,46);
        
        $som=0;
        $nt1=count($t1);
        $nt2=count($t2);
        for($i=0;$i<$nt1;$i++) {
            for($j=0;$j<$nt2;$j++){
              $som=$som+$t1[$i]*$t2[$j];   
            }
        }
        echo "La valeur S est : ".$som;
        echo '<br>';
        echo '<a href="https://www.google.fr">Moteur de recherche</a>';
        ?>
    </body>
</html>
