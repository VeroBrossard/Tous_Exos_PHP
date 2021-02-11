<?php
var_dump($_SERVER); // affichage de la superglobale $_SERVER
$brow = get_browser(null,true); // fonction pour recupéré directement le navigateur actuellement utilisé
  var_dump($brow["parent"]); // afficher le navigateur


  // recuperer le navigateur avec la superglobale $_SERVER
  echo "le user agent est : ".$_SERVER["HTTP_USER_AGENT"] . "<br/><br/>"; 

  // recupere l'adresse IP du serveur
  echo "l'adresse IP est : ".$_SERVER["REMOTE_ADDR"] . "<br/><br/>";

  //recupere le nom du serveur
  echo " le nom du serveur est : ".$_SERVER["SERVER_NAME"] . "<br/>";
?>