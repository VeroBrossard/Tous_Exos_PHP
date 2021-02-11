<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 4 PHP - exo 5 </title>
</head>

<body>
  <h1>PHP ** Partie 4 : Les fonctions ** exo 5</h1><br>
  <hr><br>

  <hr><br>

  Exercice 5 <br>
  <br><br>


  Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.. <br>

  <br><br>

  <hr>Résultat:<br><br>

  <br>
  <?php
function Concatenate($var1,$text1)
{
  $result = $var1 . $text1;
  echo '(pour info, dans fonction résultat vaut  : ' . $result . '<br>';
  return $result;
}
$monNbr = 20;
$monText = "21 , sera t'elle une bonne année ???";

$myResult = Concatenate($monNbr,$monText);

echo  'monNbr départ = ' .$monNbr . '<br> text départ = ' .$monText . '<br> et après fonction Concatenate() le résultat est : <b>' . $myResult .'</b> <br>';

?>

  <br><br>
  <hr>
<br>  <br>  <br>
  pour info <br>
   <a href="https://www.php.net/manual/fr/extensions.alphabetical.php" target="blank_">liste des fonctions par ordre alphabetique</a> <br>
  <br>

<?php
//code sur https://www.codegrepper.com/code-examples/delphi/php+concat+string+with+number
//ne fonctionne pas .... a voir plus tard !!! 
// $a = "3dollars";
// $b = 20;
// echo $a;
// echo $a += $b;
// print($a += $b);
//  -----------------------------
// It casts '3dollars' as a number, getting $a = 3.

// When you echo, you add 20, to $a, so it prints 23 and $a = 23.

// Then, when you print, you again add 20, so now $a = 43.//
?>
</body>
</html>
<!-- aide sur https://stackoverflow.com/questions/32984737/what-will-happen-if-int-concatenate-with-string-in-php -->