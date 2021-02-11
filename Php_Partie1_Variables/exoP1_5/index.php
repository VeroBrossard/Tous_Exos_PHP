<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie1 PHP - exo 5  </title>
</head>
<body>
<h1>PHP **  Partie 1 : Les variables **  exo 5  </h1><br>
<hr><br>

Exercice 5<br>
<b>TYPAGE de Variable </b><br>
Créer une variable de type int. L'initialiser avec rien. <br>
Afficher sa valeur avec la fonction var_dump.<br>
Donner une valeur à cette variable et l'afficher.
<br>

<hr>Résultat:<br><br>

<?php
$varEmpty = null;
 echo var_dump($varEmpty)."<br>";
$varEmpty = "coucou";
echo $varEmpty;
echo var_dump($varEmpty);
?>
<br><br>
Correction <br>

<?php
settype ($varEmpty2,"int");  //on initie une variable typée, mais actuellement vide
var_dump($varEmpty2)."<br>";
$varEmpty2 = null;
var_dump($varEmpty2)."<br>";
$varEmpty2 = "coucou";
echo $varEmpty2;
var_dump($varEmpty2);
echo '<br><br> Correction bis <br><br>';
$toto = (int) 15;
var_dump($toto)."<br>";
?>
    </body>
</html>

<!-- var_dump() affiche les informations structurées d'une variable, y compris son type et sa valeur. Les tableaux et les objets sont explorés récursivement, avec des indentations, pour mettre en valeur leur structure.

En PHP 5, toutes les propriétés publiques, privées et protégées seront retournées dans le résultat.

Astuce
Comme pour toutes les fonctions qui affichent directement des résultats au navigateur, vous pouvez utiliser les fonctions de gestion des sorties pour capturer le contenu de cette fonction et le sauver, par exemple, dans une chaîne. -->