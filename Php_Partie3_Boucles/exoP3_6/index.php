<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 3 PHP - exo 6  </title>
</head>
<body>
<h1>PHP **  Partie 3 : Les boucles  **  exo 6</h1><br>
<hr><br>

Exercice 6 <br>
 <br><br>

 En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.<br>

<br><br>

<hr>Résultat:<br><br>

<br>

<?php 

for ($myCounter = 20 ; $myCounter >= 0; $myCounter--) 
{
  echo 'mon compteur vaut : ' .$myCounter. '  et ';
  echo ' C\'est presque bon...  <br>';
} // sortie du for APRES execution des instructions.
?>

<br><br>
pour info <br>
utilisation de boule <mark> for </mark>  et  <mark>décrementtion -- </mark><br>

    </body>
</html>