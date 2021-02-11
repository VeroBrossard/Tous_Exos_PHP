<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie2 PHP - exo 4  </title>
</head>
<body>
<h1>PHP **  Partie 2 : Les conditions  **  exo 4 </h1><br>
<hr><br>

Exercice 4<br>

L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre.<br> Cette échelle va de 1 à 9.<br>
Créer une variable magnitude. <br>Selon la valeur de magnitude, afficher la phrase correspondante.<br><br>

Magnitude	Phrase<br>
1	Micro-séisme impossible à ressentir.<br>
2	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br>
3	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br>
4	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br>
5	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. <br>Peu de dégats sur des bâtiments modernes.<br>
6	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br>
7	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br>
8	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br>
9	Séisme capable de tout détruire sur une très vaste zone.<br><br>
Gérer tous les cas.  <br>
Utilser autre chose que des if else.<br>
<br><br>

<hr>Résultat:<br><br>

<br>
<?php
$magnitude = 3;
echo 'la magnitude ressentie est égale à '.$magnitude.' sur l\'echelle de Richter ... <br>';
$dammage = "" ;
switch($magnitude)   // on indique sur quelle variable on travaille
{
case 1 : $dammage = 'Micro-séisme impossible à ressentir.<br>'; break;
case 2 :	$dammage = 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br>'; break;
case 3 : $dammage = 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br>'; break;
case 4 :	$dammage = 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br>';break;
case 5 : $dammage = 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. <br> Peu de dégats sur des bâtiments modernes.<br>';break;
case 6 : $dammage = 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.<br>';break;
case 7 : $dammage = 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br>';break;
case 8 : $dammage = 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br>';break;
case 9 : $dammage = 'Séisme capable de tout détruire sur une très vaste zone.<br>';break;
default : $dammage =  'A ce niveau, tout le monde est mort , non ??? <br>'; 

}  // on indique sur quelle variable on travaille

echo $dammage;
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
switch($isEasy)
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