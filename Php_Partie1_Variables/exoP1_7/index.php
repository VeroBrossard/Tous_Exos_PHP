<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie1 PHP - exo 7  </title>
</head>
<body>
<h1>PHP **  Partie 1 : Les variables **  exo 7 </h1><br>
<hr><br>

Exercice 7<br>
Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.<br>
  Attention age est de type entier.  <br>
Afficher : Bonjour + lastname + firstname + , tu as + age + ans.
<br>

<hr>Résultat:<br><br>

<?php
$lastname ="EVERGREEN";
$firstname = "Katniss";
$age = 17;
echo 'Bonjour '.$lastname.' '.$firstname.' , tu as '.$age.' ans. <br><br>'

?>
<p> utilisation <mark> ECHO COURT </mark><br>

<?= 'Bonjour '.$lastname.' '.$firstname.' , tu as '.$age.' ans. <br><br>' ?>
</p>
    </body>
</html>
<!-- Type des variable en PHP
PHP n'impose pas (et ne permet pas) de définir explicitement le type d'une variable lors de sa déclaration.
En PHP, contrairement à d'autres langages de programmation, nous n'avons pas besoin de préciser à priori le type de valeur qu'une variable va pouvoir stocker.
Leur (variable) type dépend de leur valeur et de leur contexte d'utilisation. Mais on peut forcer (cast) ponctuellement une variable à un type de données, ce qui s'appelle le transtypage.
Le PHP va en effet automatiquement déytecter quel est le type de la valeur stockée dans telle ou telle variable, et nous allons ensuite pouvor performer différentes opérations selon le type de la variable.
sur https://apcpedagogie.com/type-et-transtypage-dune-variable-en-php/ -->