<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 5 PHP - exo 1 </title>
</head>

<body>
  <h1>PHP ** Partie 5 : Les tableaux ** exo 1 </h1><br>
  <hr><br>

  Exercice 1 <br>
  <br><br>
  Créer un tableau months et l'initialiser avec les valeurs de janvier à décembre.

  <br><br>

  <hr>Résultat:<br><br>
  <br>
  <?php
  $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');

  $months2 = 
  [
    'janvier',
    'février',
    'mars',
    'avril',
    'mai',
    'juin',
    'juillet',
    'aout',
    'septembre',
    'octobre',
    'novembre',
    'décembre'
  ];

  var_dump($months2);
  ?>

  <pre>
 <?php print_r($months2); ?>
  </pre>

  <hr>
  <br> <br> <br>
  pour info <br>
  création d'un tableau <br>numéroté // indexé</br><br>
  Utilisation de la fonction <mark>print_r()</mark> <br>


</body>

</html>