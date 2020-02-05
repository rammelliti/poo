<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $tableau = array(
        1 => array ('https://www.memphis-restaurant.com/',
                    'image/banniere1.jpg',
                    'Ambiance Happy Days'),
        2 => array ('https://www.groupon.fr/',
                    'image/banniere2.jpg',
                    'Goutez la différence'),
        3 => array ('https://www.mcdonalds.fr/',
                    'image/banniere3.jpg',
                    'Venez comme vous etes')
                );
        //choix aleatoire de la banniere
        $cle_aleatoire = array_rand ($tableau, 1);
        // affichage des bannieres
        echo  '<a href = "', $tableau[$cle_aleatoire][0],'">';
        echo '<img src = "', $tableau[$cle_aleatoire][1],
             '"alt="', $tableau[$cle_aleatoire][2],'"/>';
        echo'</a>';
        ?>
    </body> 
</html>
