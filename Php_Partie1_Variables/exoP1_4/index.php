<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie1 PHP - exo 4  </title>
</head>
<body>
<h1>PHP **  Partie 1 : Les variables **  exo 4  </h1><br>
<hr><br>

Exercice 4<br>
Créer une variable de type string, une variable de type int,<br> une variable de type float, une variable de type booléan <br>et les initialiser avec une valeur de votre choix.  
Les afficher.
<br>

<hr>Résultat:<br><br>

<?php
$myText = "Je me demande si ";
var_dump($myText);
$nbInt = 125;
var_dump($nbInt);
$nbfloat = 14.89;
var_dump($nbfloat);
$liesGame1 = true;  //on peut l'appeler juste "$var_booleen"
var_dump($liesGame1);
$liesGame0 = false;
var_dump($liesGame0);

echo $myText.$nbInt.'est plus grand que '.$nbfloat.'et la réponse est: '.$liesGame1.'pour vrai et '.(int)$liesGame0.' pour faux';

?>


<br><br>







<!-- pour info...  sur https://www.php.net/manual/fr/language.types.boolean.php
<?php
$var1 = TRUE;
$var2 = FALSE;

echo $var1; // Will display the number 1
echo $var2; //Will display nothing
/* To get it to display the number 0 for
a false value you have to typecast it: */

echo (int)$var2; //This will display the number 0 for false.
?> -->
    </body>
</html>