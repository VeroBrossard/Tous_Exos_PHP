<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 3 PHP - exo 7  </title>
</head>
<body>
<h1>PHP **  Partie 3 : Les boucles  **  exo 7</h1><br>
<hr><br>

Exercice 7 <br>
 <br><br>

 En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.<br>

<br><br>

<hr>Résultat:<br><br>

<br>

<?php 

for ($myCounter = 1 ; $myCounter <= 100; $myCounter+= 15) //A chaque étape, on augmente sa valeur de 15,
{
  echo 'mon compteur vaut : ' .$myCounter. '  et ';
  echo ' On tient le bon bout...  <br>';
} // sortie du for APRES execution des instructions.
?>


<br><br>
pour info <br>
utilisation de boule <mark> for </mark>  et  <mark>décrementtion 15 </mark><br>

    </body>
</html>