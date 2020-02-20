<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
    
        <?php
        $t1=array('prénom'=>'Paul','profession'=>'ministre','age'=>50);
        $t2=array('prénom'=>'Robert','profession'=>'agriculteur','age'=>45);
        $t=array('Dupont'=>$t1,'Durand'=>$t2);
        
        
        
        echo '<table border="1"><thead><tr><th>Clé</th><th colspan="2">Valeur</th></tr><thead>';///// l'entete
        
        foreach ($t as $cle=>$val){
            $nl=count($val)+1;
           echo '<tr><td rowspan='.$nl.'>'.$cle.'</td>';
           echo "<td>Clé</td><td>Valeur</td></tr>";
           foreach ($val as $cle2=>$val2){
              echo " <tr><td>".$cle2.'</td>';
              echo " <td>".$val2.'</td></tr>';
              
           }
        }
              echo "</table>";
                
        
       
        


        ?>
    </body>
</html>
