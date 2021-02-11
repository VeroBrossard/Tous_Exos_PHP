<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie2 PHP - exo 5  </title>
</head>
<body>
<h1>PHP **  Partie 2 : Les conditions  **  exo 5 </h1><br>
<hr><br>

Exercice 5 <br>

Traduire ce code avec des if et des else : <br><br>

&lt;?php<br>
  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';<br>
?&gt;
<br><br>

<hr>Résultat:<br><br>

<br>
<?php
$gender = "Femme";
if ($gender != "Homme")
{
  echo 'C\'est une développeuse !!!';
}
else{
  echo 'C\'est un développeur !!!';
}

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