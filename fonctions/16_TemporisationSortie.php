<?php
 
ob_start();/* on initialise le tampon */

/** 1ier façon d'ajouter du tete au buffer : */
echo '1er texte dans le buffer';
?>

<!--** 2ieme façon d'ajouter du tete au buffer : */-->
2ieme façon d'ajouter du tete au buffer .
<?php
ob_end_flush();/* on vide le tampon et on retourne le contenu au buffer*/

?>
