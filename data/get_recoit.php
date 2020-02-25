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
       if (isset($_GET['$donnee'])){
          foreach ($_GET['$donnee'] as $val){
          echo $val." ";
       // echo "Le prenom reçu est : ".$_GET[$donnee[]]."</br>";
       }}
       //else
        //  echo "Nom ou/et prenon non renseignés</br>";
        ?> 
    </body>
</html>
