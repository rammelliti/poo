<?php

/////AFFICHE INFOS PHP
//echo phpversion();
//phpinfo();

///// Generer un nombre aleatoire
echo rand()."<br />";
echo rand(10,20)."<br/>";

///Arrondir un nombre decimal
echo round(3.141592);
echo round(3.779592,2);

//// creer un identifiant unique
echo "Id-Unique : ".uniqid().",";
echo "Id-Unique : ".uniqid().";";
echo "Id-Unique : ".uniqid();

///Envoyer un Email
$to='personne @exemple.com';
$subject='Sujet';
$message='Bonjour à tous !';
$headers='From: webmaster@monsite.com'."\r\n".
        'Replay-To : webmaster@monsite.com'."\r\n".
        'MIME-Version : 1.0'."\r\n";
mail($to,$subject,$message,$headers);

/////mailau format HTML

$headers='From: webmaster@monsite.com'."\r\n".
        'Replay-To : webmaster@monsite.com'."\r\n".
        'MIME-Version : 1.0'."\r\n";
         'Content-type : text/html; charset-UTF8'."\r\n";






