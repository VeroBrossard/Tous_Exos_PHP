<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 4 PHP - exo 6 </title>
</head>

<body>
  <h1>PHP ** Partie 4 : Les fonctions ** exo 6</h1><br>
  <hr><br>

Exercice 6 <br>
<br><br>

  Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne.<br>
  Elle doit renvoyer une chaine de la forme :  
Bonjour + nom + prénom + , tu as + age + ans.<br>

  <br><br>

  <hr>Résultat:<br><br>

  <br>
  <?php
function Concatenate($var_lastname,$var_firstname,$var_age)
{
  $result = 'Bonjour ' . ucfirst($var_lastname) . ' ' . $var_firstname .', tu as '. $var_age . 'ans';
  // echo '(pour info, dans fonction résultat vaut  : ' . $result . '<br>';
  
  return $result;
}


$lastname = 'evergreen';
$firstname = 'Katniss';
$age = 16;

$myResult = Concatenate($lastname,$firstname,$age);

echo  $myResult;

?>

  <br><br>
  <hr>
<br>  <br>  <br>
  pour info <br>
   <a href="https://www.php.net/manual/fr/extensions.alphabetical.php" target="blank_">liste des fonctions par ordre alphabetique</a> <br>
  <br>

 
</body>
</html>