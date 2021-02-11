<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 4 PHP - exo 3 </title>
</head>

<body>
  <h1>PHP ** Partie 4 : Les fonctions ** exo 3</h1><br>
  <hr><br>

  Exercice 3 <br>
  <br><br>

  Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.

  <br><br>

  <hr>Résultat:<br><br>

  <br>
  <?php
  function Concatenate($text1, $text2)
  {
    $result = "$text1  $text2";
    // $result = $text1 . '&nbsp;'. $text2; // faire attention var non signalées.
    echo '(pour info, dans fonction résultat vaut  : ' . $result . ')<br>';
    return $result;
  }

  $monText1 = "Bonjour";
  $monText2 = "les gens!!!";

  $monText = Concatenate($monText1, $monText2);

  echo  'text1 départ = ' . $monText1 . '<br> text2 départ = ' . $monText2 . '<br> et texte après fonction Concatenate() est : <b>' . $monText . '</b>  <br>';

  ?>

  <br><br>
  <hr>
  <br> <br> <br>
  pour info <br>
  <a href="https://www.php.net/manual/fr/extensions.alphabetical.php" target="blank_">liste des fonctions par ordre alphabetique</a> <br>
  <br>


</body>

</html>