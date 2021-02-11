<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 3 PHP - exo 10  </title>
</head>
<body>
<h1>PHP **  Partie 3 : Les boucles  **  exo 10</h1><br>
<hr><br>

Exercice 10 <br>
 <br><br>

 Créer une variable nombre aléatoire et l'initialiser avec un nombre aléatoire compris entre 0 et 30.<br>
En allant de 1 à 100 avec un pas de 1, afficher tous les nombres sauf celui correspondant au nombre aléatoire.<br>





<br><br>

<hr>Résultat:<br><br>

<br>

<?php 
$random = rand(0, 30);

// //fonction rand génère un nombre aléatoire compris entre 0 et 30
// echo ('ma var aléatoire vaut : '. $random . '<br><br>'); 
// for ($i = 0 ; $i <= 100; $i++) 
// {
//   if ($i != $random)
//   {
//    echo 'mon compteur vaut : ' .$i. ' <br> ';
//  }
// } // sortie du for APRES execution des instructions.

for ($i = 0 ; $i <= 100; $i++) 
{
  if ($i == $random)
  {
    continue;   
    //passer à la valeur suivante sans appliquer les instructions d'après
  }
   echo 'mon compteur vaut : ' .$i. ' <br> ';
 
} // sortie du for APRES execution des instructions.

?>


<br><br>
pour info <br>
utilisation de fonction <mark>rand()</mark> et  <mark>rand_int()</mark> en sécurisé <br>
    </body>
</html>
