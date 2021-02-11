<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie2 PHP - exo 1  </title>
</head>
<body>
<h1>PHP **  Partie 2 : Les conditions  **  exo 1 </h1><br>
<hr><br>

Exercice 1<br>
Créer une variable age et l'initialiser avec une valeur.  <br>
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur.<br>
 Dans le cas contraire, afficher Vous êtes mineur.
<br>

<hr>Résultat:<br><br>
essai avec 15<br>
<?php

$age = 15;
if ($age >= 18)
{
  echo 'Vous êtes majeur. <br/>';
}
else{
  echo 'Vous êtes mineur. <br/>';
}
?>

<br>

essai avec 25<br>
<?php

$age = 25;
if ($age >= 18)
{
  echo 'Vous êtes majeur. <br/>';
}
else{
  echo 'Vous êtes mineur. <br/>';
}
?>

    </body>
</html>