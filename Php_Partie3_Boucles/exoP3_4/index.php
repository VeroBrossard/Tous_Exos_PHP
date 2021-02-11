<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 3 PHP - exo 4  </title>
</head>
<body>
<h1>PHP **  Partie 3 : Les boucles  **  exo 4</h1><br>
<hr><br>

Exercice 4 <br>
 <br><br>

 Créer une variable et l'initialiser à 1. <br> 
Tant que cette variable n'atteint pas 10, il faut :<br>
- l'afficher<br>
- l'incrementer de la moitié de sa valeur<br>

<br><br>

<hr>Résultat:<br><br>

<br>

<?php
$myCounter = 1;

while ($myCounter <= 10) 
{
  echo 'mon compteur vaut : ' .$myCounter. ' <br>';
  $myCounter *=1.5; // $myCounter += $myCounter/2
  // $myCounter = $myCounter*1.5;
  echo ' l\'incrémentation donne : ' . $myCounter . '<br>';
} // sortie du while APRES execution des instructions.

echo 'sortie  donne : ' . $myCounter . '<br>';
?>


<br><br>
pour info <br>
utilisation de boucle <mark>while</mark>  et  <mark>incrementtion par var * = 1.5 </mark><br>

    </body>
</html>
