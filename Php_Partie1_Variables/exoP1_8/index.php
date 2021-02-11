<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie1 PHP - exo 8  </title>
</head>
<body>
<h1>PHP **  Partie 1 : Les variables **  exo 8 </h1><br>
<hr><br>

Exercice 8<br>
Créer 5 variables sum, difference, product, quotient, modulo.<br>
Dans la première mettre le résultat de l'opération 3 + 4.<br>
Dans la deuxième mettre le résultat de l'opération 100 - 20.<br>
Dans la troisième mettre le résultat de l'opération 45 x 15.<br>
Dans la quatrième mettre le résultat de l'opération 45 / 15. <br>
Dans la cinquième mettre le reste de la division entière 75 / 15.<br><br>

Afficher le contenu des variables.
<br>

<hr>Résultat:<br><br>

<?php
$sum = 3+4;
$difference = 100-20;
$product = 45*15;
$quotient = 45/15;
$modulo = 75%15;
echo 'sum = '.$sum.'<br> difference = '.$difference. '<br> product = '.$product.' <br> quotient = '.$quotient.' <br> modulo = '.$modulo;

?>

    </body>
</html>