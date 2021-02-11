<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 5 PHP - exo 8 </title>
</head>

<body>
  <h1>PHP ** Partie 5 : Les tableaux ** exo 8 </h1><br>
  <hr><br>

  Exercice 8 <br>
  <br>
  Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. <br><br>

  (Enoncé exo 1 : )
  Créer un tableau months et l'initialiser avec les valeurs de janvier à décembre.)

  <br><br>

  <hr>Résultat:<br><br>
  <br>
<?php
$months = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');


// foreach ($months as $cle => $element)
// {
//   echo 'index ' . $cle ." a la valeur ". $element . " <br>";
// }




// Version simplifiée (n'affiche pas l'index)...
foreach ($months as $elm)
{
  echo 'mois de '. $elm .'<br>';
}

echo '<hr><br><br> pour vérif : <br>';
var_dump($months);
?>


<hr>
  <br> <br> <br>
  pour info <br>
  Affichage d'un tableau <br>indexé // numéroté</><br>
  Utilisation de la fonction <mark>var_dump()</mark>   <br>


</body>

</html>