<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 4 PHP - exo 1 </title>
</head>

<body>
  <h1>PHP ** Partie 4 : Les fonctions ** exo 1</h1><br>
  <hr><br>

  Exercice 1 <br>
  <br><br>

  Faire une fonction qui retourne true.<br>

  <br><br>

  <hr>Résultat:<br><br>

  <br>
  <?php
  function SayTrue()
  {
    $truht = "true";
    return $truht;
  }

  echo 'La fonction SayTrue répond : ' . SayTrue() . '<br>';
  ?>

  <br><br>

  <hr>
  <br> <br> <br>
  pour info <br>
  <a href="https://www.php.net/manual/fr/extensions.alphabetical.php" target="blank_">liste des fonctions par ordre alphabetique</a> <br>
  <br>

  <?php
  // Enregistrons les informations de date dans des variables

  $jour = date('d');
  $mois = date('m');
  $annee = date('Y');

  $heure = date('H');
  $heure = $heure + 1;
  $minute = date('i');

  // Maintenant on peut afficher ce qu'on a recueilli
  echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure . ' h ' . $minute;
  ?>

  <br> <br> <br>
  <?php
  // Ci-dessous, la fonction qui calcule le volume du cône
  function VolumeCone($rayon, $hauteur)
  {
    $volume = $rayon * $rayon * 3.14 * $hauteur * (1 / 3); // calcul du volume
    return $volume; // indique la valeur à renvoyer, ici le volume
  }

  $volume = VolumeCone(3, 1);
  echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;
  ?>
</body>

</html>