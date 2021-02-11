<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 5 PHP - exo 2 </title>
</head>

<body>
  <h1>PHP ** Partie 5 : Les tableaux ** exo 2 </h1><br>
  <hr><br>

  Exercice 2 <br>
  <br><br>
  (exo 1 : Créer un tableau months et l'initialiser avec les valeurs de janvier à décembre.)  <br>
  Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.

  <br><br>

  <hr>Résultat:<br><br>
  <br>
<?php
$months = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');

echo 'la 3ème ligne de ce tableau contient : ' . $months[2] . '<br><br>';



var_dump($months);
?>

<pre>
<?php print_r($months); ?>
</pre>


<hr>
  <br> <br> <br>
  pour info <br>

  Utilisation de la fonction <mark>print_r()</mark>   <br>


</body>

</html>
