<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie1 PHP - exo 3  </title>
</head>
<body>
<h1>PHP **  Partie 1 : Les variables **  exo 3  </h1><br>
<hr><br>

Exercice 3<br>
Créer une variable km. L'initialiser à 1. Afficher son contenu.  <br>
Changer sa valeur par 3. Afficher son contenu.  <br>
Changer sa valeur par 125. Afficher son contenu.<br>
<br>

<hr>Résultat:<br><br>

<?php
$kilometer = 1;
echo "kilometer vaut : $kilometer kilomètre.";
echo '<br>';
$kilometer = 3;
echo "kilometer vaut maintenant : $kilometer kilomètres. <br>";
$kilometer = 125;
echo 'et pour finir, kilometer vaut : '. $kilometer .' kilomètres.<br>';
?>

    </body>
</html>
