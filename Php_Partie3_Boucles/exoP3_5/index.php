<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 3 PHP - exo 5  </title>
</head>
<body>
<h1>PHP **  Partie 3 : Les boucles  **  exo 5</h1><br>
<hr><br>

Exercice 5 <br>
 <br><br>

 En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.<br>

<br><br>

<hr>Résultat:<br><br>

<br>

<?php 


for ($myCounter = 1; $myCounter<=15; $myCounter++)
{
  echo 'mon compteur vaut : ' .$myCounter. '  et ';
  echo ' On y arrive presque...  <br>';
} // sortie du for APRES execution des instructions.
?>

<br><br>
pour info <br>
utilisation de boucle <mark> for </mark>  et  <mark>incrementtion ++ </mark><br>

    </body>
</html>
