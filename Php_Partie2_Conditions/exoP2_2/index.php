<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie2 PHP - exo 2  </title>
</head>
<body>
<h1>PHP **  Partie 2 : Les conditions  **  exo 2 </h1><br>
<hr><br>

Exercice 2<br>

Créer une variable isEasy de type booléan et l'initialiser avec une valeur.<br>  
Afficher C'est facile !! si c'est vrai.<br> 
Dans le cas contraire afficher C'est difficile !!!. <br>
<br>
Bonus : L'écrire de deux manières différentes.
<br><br>

<hr>Résultat:<br><br>

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
?>

<br>
// structure Switch  <br>
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
?>
 <br>
// structure ternaire  <br>

<?php
$isEasy = false;
echo ($isEasy)? "C'est facile": "C'est difficile !!!";
var_dump("C'est facile"); //pour connaitre valeur et type d'une var (entre autre).
?>
 <br>

    </body>
</html>


<!-- 
$x = 4; //On affecte la valeur 4 à $x
            
            //Ecrire ceci :
            if($x >= 0){
                echo '$x stocke un nombre positif<br>';
            }else{
                echo '$x stocke un nombre négatif<br>';
            }
            
            //Est equivalent à cela :
            echo $x >= 0 ? '$x stocke un nb positif' : '$x stocke un nb négatif';  -->

<!-- Les structures ternaires vont se présenter sous la forme suivante : test ? code à exécuter si true : code à exécuter si false. -->
<!-- https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/operateur-ternaire-fusion-null/ -->
