<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 3 PHP - exo 1  </title>
</head>
<body>
<h1>PHP **  Partie 3 : Les boucles  **  exo 1</h1><br>
<hr><br>

Exercice 1<br>

 <br><br>
Créer une variable et l'initialiser à 0.  <br>
Tant que cette variable n'atteint pas 10, il faut :<br>
- l'afficher<br>
- l'incrementer<br>

<br><br>

<hr>Résultat:<br><br>

<br>

<?php
$myCounter = 0;
while ($myCounter < 10) 
{
  echo 'ma variable vaut : ' .$myCounter. ' <br>';
  $myCounter++;
} // sortie du while APRES execution des instructions.
?>

<br><br>
pour info <br>
utilisation de boucle <mark>while</mark>  et  <mark>incrementtion ++ </mark><br>

    </body>
</html>
