<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 3 PHP - exo 8  </title>
</head>
<body>
<h1>PHP **  Partie 3 : Les boucles  **  exo 8</h1><br>
<hr><br>

Exercice 8 <br>
 <br><br>

 En allant de 0 à 100 avec un pas de 1,  <br>
 afficher tous ceux qui ne sont pas multiple de 3.<br>

<br><br>

<hr>Résultat:<br><br>

<br>

<?php 

for ($myCounter = 0 ; $myCounter <= 100; $myCounter++) 
{
  echo 'mon compteur vaut : ' .$myCounter. '  ';
  if ($myCounter % 3 != 0)
  {
    echo ' et il n\'est pas multiple de 3...  <br>';
  }
  else{
    echo '<br>';
  }
} // sortie du for APRES execution des instructions.
?>


<br><br>
pour info <br>
utilisation de boule <mark> for </mark>  et  <mark> condition interne au for </mark><br>

    </body>
</html>