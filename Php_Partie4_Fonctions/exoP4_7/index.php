<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 4 PHP - exo 7 </title>
</head>

<body>
  <h1>PHP ** Partie 4 : Les fonctions ** exo 7</h1><br>
  <hr><br>

Exercice 7 <br>
<br><br>

Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :<br>
Homme<br>
Femme  <br>
La fonction doit renvoyer en fonction des paramètres :<br><br>

Vous êtes un homme et vous êtes majeur<br>
Vous êtes un homme et vous êtes mineur<br>
Vous êtes une femme et vous êtes majeure<br>
Vous êtes une femme et vous êtes mineure<br>
  <br>
  Gérer tous les cas.<br>

  <hr>Résultat:<br><br>

  <br>
  <?php
function Test_Gender_Age($var_gender,$var_age)
{

  if ($var_gender == "Homme" )
  { //cas Homme 

    if ($var_age < 18)
    {
     return 'Vous êtes un homme et vous êtes mineur';
    }
    else 
    {
     return 'Vous êtes un homme et vous êtes majeur';
    }
  }
    elseif ($var_gender == "Femme" )
    {
      //cas Femme 
      if ($var_age < 18)
      {
      return 'Vous êtes une femme et vous êtes mineure';
      }
      else {
        return 'Vous êtes une femme et vous êtes majeure';
      }
    }
    else {
      //cas non genré
      return 'Voulez-vous accèder au formulaire non genré ?';
    }
  
}


$gender = 'Femme';
$age = 15;
echo 'genre = ' .$gender . ' et age  = ' . $age . '<br>';
$myResult = Test_Gender_Age($gender,$age);

echo  $myResult . '<br>';

?>

  <br><br>
  <hr>
<br>  <br>  <br>
  pour info <br>
   <a href="https://www.php.net/manual/fr/extensions.alphabetical.php" target="blank_">liste des fonctions par ordre alphabetique</a> <br>
  <br>



  
</body>
</html>