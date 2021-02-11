<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 4 PHP - exo 4 </title>
</head>

<body>
  <h1>PHP ** Partie 4 : Les fonctions ** exo 4</h1><br>
  <hr><br>

  Exercice 4 <br>
  <br><br>


  Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :<br>
  Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br>
  Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br>
  Les deux nombres sont identiques si les deux nombres sont égaux. <br>

  <br><br>

  <hr>Résultat:<br><br>

  <br>
  <?php
  function CompareVal($var1, $var2)
  {
    if ($var1 > $var2) {
      $result = "Le premier nombre est plus grand ";
    } 
    elseif ($var1 < $var2) {
      $result = "Le premier nombre est plus petit";
    } 
    elseif ($var1 == $var2){
      $result = "Les deux nombres sont identiques";
    }
    else {
      $result = "veuillez entrer des paramètres valides <br>";
    }
    return $result;
    // echo 'dans fonction résultat vaut  : ' .$result . '<br>';
  }
  $nbre1 = 10;
  $nbre2 = 20;

  $monTest = CompareVal($nbre1, $nbre2);

  echo  'nombre 1 = ' . $nbre1 . ' <br> nombre 2 = ' . $nbre2 . ' <br>  après fonction CompareVal() est : ' . $monTest . ' <br>';
  
  ?>

  <br><br>
  <hr>
  <br> <br> <br>
  pour info <br>
  <a href="https://www.php.net/manual/fr/extensions.alphabetical.php" target="blank_">liste des fonctions par ordre alphabetique</a> <br>
  <br>


</body>

</html>