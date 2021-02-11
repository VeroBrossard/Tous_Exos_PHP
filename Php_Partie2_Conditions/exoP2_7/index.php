<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie2 PHP - exo 7  </title>
</head>
<body>
<h1>PHP **  Partie 2 : Les conditions  **  exo 7 </h1><br>
<hr><br>

Exercice 7 <br>


Traduire ce code avec des if et des else : <br><br>

&lt;?php<br>
$var_b = 'Je suis une variable qui à une valeur';<br>
  echo $var_b ?? 'Je suis une variable sans valeur';<br>
?&gt;
<br><br>

<hr>Résultat:<br><br>

<br>
<?php
 $var_b = 'Je suis une variable qui à une valeur';
 echo 'Avant test , la variable var_b vaut : '. $var_b .'<br><br>';
echo 'test... <br>';

  if ($var_b == null)
  {
    echo 'Je suis une variable sans valeur <br>';
  }
  else 
  {
    echo 'La variable var_b vaut : '.$var_b.'<br>';
  }
?>
<br><br>
Si l’expression à gauche de l’opérateur vaut NULL, alors l’expression à droite de l’opérateur sera renvoyée. <br>
Dans tous les autres cas, c’est l’expression à gauche de l’opérateur qui sera renvoyée.<br><br>

On va généralement utiliser cet opérateur pour tester si une variable contient quelque chose ou pas et, dans le cas où la variable est vide, lui faire stocker une valeur.<br>
<B>  =>  Test spécifique à la valeur "null"</B> <br><br>

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