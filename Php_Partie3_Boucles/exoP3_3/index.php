<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 3 PHP - exo 3  </title>
</head>
<body>
<h1>PHP **  Partie 3 : Les boucles  **  exo 3</h1><br>
<hr><br>

Exercice 3 <br>
 <br><br>

 Créer deux variables. <br>
 Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.   <br>
Tant que la première variable n'est pas inférieure ou égale à 10 : <br>
- multiplier la première variable avec la deuxième <br>
- afficher le résultat <br>
- décrémenter la première variable <br>

<br><br>

<hr>Résultat:<br><br>

<br>

<?php
$myCounter = 100;
$const = 53;

while ($myCounter > 10)  //ou: while !($myCounter <= 10) 
{
  echo 'mon compteur vaut : ' .$myCounter. ' <br>';

  echo ' la multiplication donne : ' . $myCounter*$const . '<br>';
  $myCounter--;
} // sortie du while APRES execution des instructions.
?>


<br><br>
pour info <br>
utilisation de boucle <mark>while</mark>  et  <mark>décrementtion -- </mark><br>

    </body>
</html>
<!-- desincrementation sur https://www.php.net/manual/fr/language.operators.increment.php -->