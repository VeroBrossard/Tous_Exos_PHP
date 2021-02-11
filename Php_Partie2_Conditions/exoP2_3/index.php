<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie2 PHP - exo 3  </title>
</head>
<body>
<h1>PHP **  Partie 2 : Les conditions  **  exo 3 </h1><br>
<hr><br>

Exercice 3<br>

Créer deux variables age et gender. <br>
La variable gender peut prendre comme valeur :<br>
Homme<br>
Femme<br>
<br>
En fonction de l'âge et du genre afficher la phrase correspondante :<br>
Vous êtes un homme et vous êtes majeur<br>
Vous êtes un homme et vous êtes mineur<br>
Vous êtes une femme et vous êtes majeure<br>
Vous êtes une femme et vous êtes mineur <br><br>

Gérer tous les cas. <br>
<br><br>

<hr>Résultat:<br><br>

<br>
<?php
$age = 25;
$gender = "Homme";

if ($gender == "Homme" && $age < 18)
{
echo 'Vous êtes <b>un homme</b> et vous êtes <b>mineur</b>.';
}
elseif ($gender == "Homme" && $age >= 18)
    {
      echo 'Vous êtes <b>un homme</b> et vous êtes <b>majeur</b>.';
    }
elseif ($gender == "Femme" && $age < 18)
    {
      echo 'Vous êtes <b> une femme </b> et vous êtes <b>mineure</b>.';
    }
elseif ($gender == "Femme" && $age >= 18)
{
  echo 'Vous êtes <b> une femme </b> et vous êtes <b>majeure</b>.';
}
else {
  echo 'vous n\'êtes dans aucun cadre';
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
Switch($isEasy)
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