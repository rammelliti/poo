<?php

include ('01_Utilisateur.class.php');
$moi= new Utilisateur('John','Doe');
echo $moi->information()." <br />";

$moi->setLangue('english');
echo "{$moi->information()} </br>";

$moi->setNom(strtoupper($moi->getNom()));
echo "{$moi->getNom()} </br>";

$info=(NEW Utilisateur('Victor','Hugo'))->information();
echo "{$info} </br>";
 
echo  "$moi </br>";