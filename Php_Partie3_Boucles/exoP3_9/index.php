<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 3 PHP - exo 9  </title>
</head>
<body>
<h1>PHP **  Partie 3 : Les boucles  **  exo 9</h1><br>
<hr><br>

Exercice 9 <br>
 <br><br>

 Créer une variable nombre aléatoire et l'initialiser 
 avec un nombre aléatoire compris entre 0 et 30.<br>
En allant de 1 à 100 (1??) avec un pas de 1, afficher les nombres<br>
 jusqu'au nombre aléatoire, puis sortir de la boucle.



<br><br>

<hr>Résultat:<br><br>

<br>

<?php 

//fonction rand génère un nombre aléatoire compris entre 0 et 30 
$random = rand(0, 30); // $random = random_int(0,30);  (version sécurisée)
var_dump($random);

// $random = 0; // (test)
echo ('ma var aléatoire vaut : '. $random . '<br><br>'); 
for ($i = 1 ; $i <= 100; $i++) 
{
  echo 'mon compteur vaut : ' .$i. ' <br> ';
 if (($i == $random) || ($random == 0))
 {
  break;
 }
} // sortie du for APRES execution des instructions.
?>


<!-- break 
(PHP 4, PHP 5, PHP 7, PHP 8)
L'instruction break permet de sortir d'une structure for, foreach, while, do-while ou switch.

break accepte un argument numérique optionnel qui vous indiquera combien de structures emboîtées doivent être interrompues. La valeur par défaut est 1, seulement la structure emboitée immédiate est interrompue. 
sur https://www.php.net/manual/fr/control-structures.break.php#:~:text=break%20%C2%B6&text=L'instruction%20break%20permet%20de,structure%20emboit%C3%A9e%20imm%C3%A9diate%20est%20interrompue.-->

<br><br>
pour info <br>
utilisation de fonction <mark>rand()</mark> et <mark>randon_int (version sécurisée)</mark> et instruction <mark>break</mark><br>
boucle <mark>do While </mark> en pied de page (pour mémpoire)
    </body>
</html>




<!-- La fonction rand() est utilisée en PHP pour générer un entier aléatoire. La fonction rand() peut également être utilisée pour générer un nombre aléatoire dans une plage spécifique, par exemple un nombre compris entre 10 et 30. 
sur : https://waytolearnx.com/2019/07/generer-des-nombres-aleatoires-en-php.html#:~:text=La%20fonction%20rand(),compris%20entre%2010%20et%2030.-->

<!-- Do ... while
L'instruction do est associée au terme while (qui est parfois baptisé until dans d'autres langages que PHP). Elle est similaire à la boucle while à ceci près que les instructions sont exécutées au moins une fois, la condition n'étant testé pour la première fois qu'après exécution des instructions. 
sur https://www.phpfacile.com/apprendre_le_php/boucles_for_while_en_php-->
<!-- <?php
$i = 5;
do {
    echo $i;
    $i++;
} while ($i<9);
?> -->
