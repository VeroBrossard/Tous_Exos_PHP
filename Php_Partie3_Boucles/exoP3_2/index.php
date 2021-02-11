<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 3 PHP - exo 2  </title>
</head>
<body>
<h1>PHP **  Partie 3 : Les boucles  **  exo 2</h1><br>
<hr><br>

Exercice 2<br>

 <br><br>
 Créer deux variables. <br>
 Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.<br>  
Tant que la première variable n'est pas supérieure à 20 :<br>
- multiplier la première variable avec la deuxième<br>
- afficher le résultat<br>
- incrementer la première variable<br>

<br><br>

<hr>Résultat:<br><br>

<br>

<?php
$myCounter = 0;
$const = 53;
echo 'ma 1ere var vaut : ' .$myCounter. ' <br>';
echo 'ma constantevaut  : ' .$const. ' <br>';


while ($myCounter <= 20) 
{
  echo 'ma 1ere var vaut : ' .$myCounter. ' <br>';

  echo ' la multiplication donne : ' . $myCounter*$const . '<br>';
  $myCounter++;
} // sortie du while APRES execution des instructions.
?>


<br><br>
pour info <br>
utilisation de boucle <mark>while <= </mark>  et  <mark>incrementtion ++ </mark><br>

    </body>

</html>

