<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie2 PHP - exo 6  </title>
</head>
<body>
<h1>PHP **  Partie 2 : Les conditions  **  exo 6 </h1><br>
<hr><br>

Exercice 6 <br>

Traduire ce code avec des if et des else : <br><br>

&lt;?php<br>
$var_a = null;<br>
  echo $var_a ?: 'Je suis une variable sans valeur';<br>
?&gt;
<br><br>

<hr>Résultat:<br><br>

<br>
<?php
  $var_a = null;

  if (!$var_a)
  {
    echo 'Je suis une variable sans valeur <br>';// echo 'la variable var_a vaut : '.$var_a.' <br>';
  }
    




 echo '<br> ce test donne le contenu (la valeur) de var_a si var-a n\'est pas "rien".<br>';
?>



    </body>
</html>


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