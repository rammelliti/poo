<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        for($i=0;$i<10;$i++){
            $t[$i]=rand(1,100);
        }
        sort($t);
        $chaine=implode($t,";");
        echo "<br>Les valeur trié : ".$chaine;
        

        ?>
    </body>
</html>
