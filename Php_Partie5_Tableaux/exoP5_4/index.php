<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 5 PHP - exo 4 </title>
</head>

<body>
  <h1>PHP ** Partie 5 : Les tableaux ** exo 4 </h1><br>
  <hr><br>

  Exercice 4 <br>
  <br><br>
  (exo 1 : Créer un tableau months et l'initialiser avec les valeurs de janvier à décembre.) <br>
  Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.

  <br><br>

  <hr>Résultat:<br><br>
  <br>
  <?php
  $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');

  $name = 'aout';
    if (in_array($name,$months))
    {
      $index = (array_search($name,$months)); //donne index sinon renvoie -1

      echo '$index = '.$index .'<br>';
      echo ' valeur avnt modif : ' . $name.'<br>';  // i/o $months[$index]
      $months[$index] = 'août';
      echo ' valeur après modif : ' . $months[$index].'<br>';
    }
    else
    {
      echo $name . ' n\'est pas dans le tableau <br>';
    }
 
    // version facile ....
    // $months [7] = 'août';

    // avec array_replace() remplace les elmnts d'un tableau par les elmnts d'un autre tableau:
    $august = array(7 => 'août');
    $new_array =array_replace($months,$august);
    var_dump($new_array);

    // echo '<pre>';
  // print_r($months);
  // echo '</pre>';
  ?>

<hr>
  <br> <br> <br>
  pour info <br>
Utilisation des fonctions <mark>in_array()</mark> et <mark>array_search()</mark>
  et <mark>array_replace</mark><br>

</body>

</html>