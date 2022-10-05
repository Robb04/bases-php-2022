<?php

// commentairte sur une ligne

# une autre manière de faire un commentaire sur une ligne -- une ligne n'est jamais terminé on continue à écrire

/*
commentaire 
sur plusieurs 
lignes
*/
?>
<p>Commentaire html</p>
<!--
 ceci est un commentaire html , il sera envoyé au navigateur !
 --->   

 <?php
 // Bonne pratique, ne pas fermer la balise php quand c'est pas utile

// affichage avec echo, le point vitgule est la fin de l'instruction, on peut en mettre sans limite sur la même ligne ou séparer les instructions par autant d'espace voulu. la fonction time() vous donne le timestamp ( temps UNIX en secondes depuis le 01/01/1970)
 echo "<p>Temps Unix de la page :"; echo time();
