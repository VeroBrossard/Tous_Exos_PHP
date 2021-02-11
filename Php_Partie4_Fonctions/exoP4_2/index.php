<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 4 PHP - exo 22 </title>
</head>

<body>
  <h1>PHP ** Partie 4 : Les fonctions ** exo 2</h1><br>
  <hr><br>

  Exercice 2 <br>
  <br><br>

  Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.

  <br><br>

  <hr>Résultat:<br><br>

  <br>
  <?php
  function Repeat($text)
  {
    $varText = $text;
    return $varText;
  }
  $monText = "Bonjour les gens!!!";

  echo  'text départ = ' . $monText . '<br>et texte après fonction Repeat() est : ' . Repeat($monText) . ' <br>';
  ?>

  <br><br>
  pour info <br>
  <a href="https://www.php.net/manual/fr/extensions.alphabetical.php" target="blank_">liste des fonctions par ordre alphabetique</a> <br>
  <br>


</body>

</html>