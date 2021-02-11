<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie2 PHP - exo 8  </title>
</head>
<body>
<h1>PHP **  Partie 2 : Les conditions  **  exo 8 </h1><br>
<hr><br>

Exercice 8 <br>


Traduire ce code avec des if et des else : <br><br>

&lt;?php<br>
$number = 11;<br>
  echo ($number % 5 == 0 && $number % 3 == 0)<br>
  ? 'FizzBuzz'<br>
  : ( $number % 3 == 0<br>
    ? 'Fizz'<br>
    : ($number % 5 == 0 ? 'Buzz' : $number)<br>
    );<br>
?&gt;
<br><br>

<hr>Résultat:<br><br>

<br>

<!-- // enoncé initial<br><br> -->
<!-- 
<?php
  $number = 11;
  echo ($number % 5 == 0 && $number % 3 == 0)? 'FizzBuzz'
  : ( $number % 3 == 0  ? 'Fizz'  
  : ($number % 5 == 0 ? 'Buzz' 
  : $number)
    );
?> -->

<br>
// mon code  <br><br>

<?php
  $number = 15;
  echo 'la var number est égal à :'. $number .'<br>' ;
if ($number % 5 == 0 && $number % 3 == 0)
{
echo 'FizzBuzz , la var est multiple de 3 et de 5 <br>';
}
elseif ( $number % 3 == 0 )
{
  echo 'Fizz , la var est multiple de 3 <br>';
} 
elseif ($number % 5 == 0 ) 
{
  echo 'FizzBuzz , la var est multiple de 5 <br>';
}
else {
  echo 'la var number vaut :'. $number .' et n\'est multiple ni de 3, ni de 5. <br>' ;
}

?>

    </body>
</html>

<!-- 
L’opérateur fusion null ?? ressemble dans sa syntaxe et dans son fonctionnement à l’opérateur ternaire.

Cet opérateur utilise la syntaxe suivante : test ?? code à renvoyer si le résultat du test est NULL.

Si l’expression à gauche de l’opérateur vaut NULL, alors l’expression à droite de l’opérateur sera renvoyée. Dans tous les autres cas, c’est l’expression à gauche de l’opérateur qui sera renvoyée.

On va généralement utiliser cet opérateur pour tester si une variable contient quelque chose ou pas et, dans le cas où la variable est vide, lui faire stocker une valeur. -->

 <!-- <br>
// structure ternaire  <br>

<?php
$isEasy = true;
echo $isEasy == true ? "C'est facile": "C'est difficile !!!";
?>
 <br> -->
<!-- 
// structure classique <br>
<?php
$isEasy =false;
if ($isEasy == true)
{
  echo 'C\'est facile <br>';
}
else 
{
  echo 'C\'est difficile !!! <br>';
}
?> -->
<!-- 
<br/>

<!-- // structure Switch  <br>
<?php
$isEasy =false;
switch($isEasy)
{
  case true:
    echo 'C\'est facile <br>';
    break;
  case false:
    echo 'C\'est difficile !!! <br>';
    break;
    default : echo 'pas facile à dire..<br>';
}
?> --> 