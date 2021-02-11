<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 4 PHP - exo 10 </title>
</head>

<body>
  <h1>PHP ** Partie 4 : Les fonctions ** exo 10</h1><br>
  <hr><br>

  Exercice 10 <br>
  <br><br>
  Faire une fonction qui prend en paramètre : un nombre. <br>
  Elle doit renvoyer le factoriel de ce nombre.<br><br>
  Bonus : faire une fonction recursive  
  <br><br>

  <hr>Résultat:<br><br>
  <br>
<?php

function FactVB($nb) //version non récursive 
{
  $result = 1;
  for ($i=1;$i<=$nb;$i++)
  {
    $result *= $i;  // $result = $result *$i;
  }
  return $result;
}

$nbr = 5;
$myResult = FactVB($nbr);
echo 'result !'. $nbr. ' = ' .$myResult . '<br>';
?>


<hr>  <br>
<h2>Bonus</h2>

<!--    *******************   Bonus   ********************-->
<?php

function FactVB2($nb)  //version recursive
{
     echo 'argument = ' . $nb . '<br>';
    
     if ($nb==0) // indice positif
     {
       $result=1;
       
     }
     else{
      $result = FactVB2($nb-1) * $nb;      
     }
  return $result;
}

echo FactVB2(7) . '<br>';
?>



  <hr>
  <br> <br> <br>
  pour info <br>
  <a href="https://www.php.net/manual/fr/extensions.alphabetical.php" target="blank_">liste des fonctions par ordre alphabetique</a> <br>
  <br>

  <?php
  // sur https://www.gladir.com/CODER/PHP/factoriel.htm
function Factoriel($n) {
 return $n > 1 ? $n * Factoriel($n-1):1;
}
$myReturn = Factoriel(5);
echo $myReturn;
//aide sur : http://sdz.tdct.org/sdz/initiation-a-la-recursivite-en-php-notions-mise-en-oeuvre-et-utilisation.html
?>

pour info <br>
untiisation de gmp_fact() pour factorielle.
</body>

</html>
