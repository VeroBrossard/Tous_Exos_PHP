<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 4 PHP - exo 8 </title>
</head>

<body>
  <h1>PHP ** Partie 4 : Les fonctions ** exo 8</h1><br>
  <hr><br>

  Exercice 8<br>
  <br><br>
  Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres. <br>
  Tous les paramètres doivent avoir une valeur par défaut.<br><br>
  Bonus : Faire une fonction qui prend un nombre variable de paramètres et qui renvoie la somme des valeurs passées en arguments
  <br><br>

  <hr>Résultat:<br><br>
  <br>

  <?php
  function sum($var1 = 10, $var2 = 20, $var3 = 30)
  {
    $result = $var1 + $var2 + $var3;
    return $result;
  }

  //  ***** après functions  **********
  $nbre1 = 1;
  $nbre2 = 2;
  $nbre3 = 3;
  $myResult = sum();
  echo 'var1 = ' . $nbre1 . 'var2 = ' . $nbre2 . 'var3 = ' . $nbre3 . '<br>';
  echo  $myResult . '<br>';
  ?>
  <hr>


  <h2> Bonus : nombre variable de paramètres </h2>
  <br><br>
  <?php
  function sumX(...$var)
  { $result = 0;
    //  $ind = 1;
    foreach ($var as $nbr)
    {
      // echo 'argument ' . $ind . ' = ' .$nbr . '<br>';
      $result += $nbr;
      // $ind ++;
    }
    return $result;
  }

  //  ***** après functions  **********
  $nbre1 = 1;
  $nbre2 = 2;
  $nbre3 = 3;
  $myResult = sumX($nbre1,$nbre2,$nbre3);

  echo 'nbre1 = ' .$nbre1 . ' nbre2 = ' .$nbre2 . 'nbre 3 = ' .$nbre3. '<br>';
   echo  'somme des arguments = ' . $myResult . '<br>';

   
   $myResult = sumX(5,10,15,8,12,20);
   echo  'somme des arguments = ' . $myResult . '<br>';
  ?>
  <br><br>
  <hr>
  <br> <br> <br>
  pour info <br>
  <a href="https://www.php.net/manual/fr/extensions.alphabetical.php" target="blank_">liste des fonctions par ordre alphabetique</a> <br>
  <br>
    <!--  nbre param. variables sur : https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/controle-passage-argument-fonction/ 
</body>  -->
</body>

</html>