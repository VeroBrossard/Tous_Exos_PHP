<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 4 PHP - exo 9 </title>
</head>

<body>
  <h1>PHP ** Partie 4 : Les fonctions ** exo 9</h1><br>
  <hr><br>

  Exercice 9<br>
  <br><br>
  Faire une fonction qui prend deux paramètres : nombre 1 et nombre 2.<br> 
  Elle doit renvoyer le plus grand des deux.
  <br><br>

  <hr>Résultat:<br><br>
  <br>

  <?php
  function NbreMax($nbr1, $nbr2)
  {
    if ($nbr1 >= $nbr2)
    {
      $result = $nbr1;
    }
    elseif ($nbr2 > $nbr1)
    {
      $result = $nbr2;
    }
     
    return $result;
  }

  //  *****    après functions  **********
  $nbre1 = 10;
  $nbre2 = 20;

  $myResult = NbreMax($nbre1,$nbre2);
  echo 'var1 = ' . $nbre1 . ' et var2 = ' . $nbre2 . '<br>';
  echo  'le plus grand est : '. $myResult . '<br>';
  ?>

  <hr>
  <br> <br> <br>
  pour info <br>
  <a href="https://www.php.net/manual/fr/extensions.alphabetical.php" target="blank_">liste des fonctions par ordre alphabetique</a> <br>
  <br>

<?php
function CompareNbr($nb1,$nb2)
{
  return max($nb1,$nb2);
}
echo 'par max() .... <br>';
echo CompareNbr(2,5) . '<br>';
?>


<?php
function CompareNbr2(...$nb)
{
  echo 'par tri /tableau .... <br>';
    rsort($nb);  // on trie les nbres en décroissant 
  return $nb[0];
}
echo CompareNbr2(1,2,3,5,4,7,10) . '<br>';
?>


<hr>
  <br> <br> <br>
  pour info <br>
  Utilisation de la fonction <mark>max()</mark> et de la fonction <mark>rsort()</mark>   <br>
</body>

</html>
