<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 5 PHP - exo 3 </title>
</head>

<body>
  <h1>PHP ** Partie 5 : Les tableaux ** exo 3 </h1><br>
  <hr><br>

  Exercice 3 <br>
  <br><br>
  (exo 1 : Créer un tableau months et l'initialiser avec les valeurs de janvier à décembre.) <br>
  Avec le tableau de l'exercice 1, afficher la valeur de l'index 5.

  <br><br>

  <hr>Résultat:<br><br>
  <br>
  <?php
  $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');

  echo 'l \'index 5 de ce tableau contient : ' . $months[5] . '<br><br>';
  echo '<pre>';
  print_r($months);
  echo '</pre>';
  ?>


<hr>
  <br> <br> <br>
  pour info <br>
  création d'un tableau <b>numéroté</b><br>
  Utilisation de la fonction <mark>print_r()</mark> avec <mark><pre></pre></mark>  <br>


</body>

</html>