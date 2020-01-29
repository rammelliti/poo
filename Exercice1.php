
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        for($i=0;$i<10;$i++){
            $t1[$i]=$i+1;
            $t2[$i]=$i+11;
            $t3[$i]=$t1[$i]+$t2[$i];
            
        }
        echo "Les valeurs du tableau somme : ";
        for($i=0;$i<sizeof($t3);$i++){
              echo $t3[$i].'<br>';
        }
            
// put your code here
        ?>
    </body>
</html>
