<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 5 PHP - exo 5 </title>
</head>

<body>
  <h1>PHP ** Partie 5 : Les tableaux ** exo 5 </h1><br>
  <hr><br>

  Exercice 5 <br>
  <br><br>
  Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. 
  <!-- 5 départements en Hauts-de-France.  -->

 
  <br><br>

  <hr>Résultat:<br><br>
  <br>
  <?php

$HtdeFr = [
  ['index'=>'02','name' => 'Aisne'],
  ['index'=>'59','name' => 'Nord'],
  ['index'=>'60','name' => 'Oise'],
  ['index'=>'62','name' => 'Pas-de-Calais'],
  ['index'=>'80','name' => 'Somme']
];
echo $HtdeFr [0]['name'];  // réponse : Aisne

  // autre méthode de remplissage:
  // $HtdeFr[0] = array('index'=>'02','name' => 'Aisne');
  // $HtdeFr[1] = array('index'=>'59','name' => 'Nord');
  // $HtdeFr[2] = array('index'=>'60','name' => 'Oise');
  // $HtdeFr[3] = array('index'=>'62','name' => 'Pas-de-Calais');
  // $HtdeFr[4] = array('index'=>'80','name' => 'Somme');
 
  
  // $region =[
  //   '02' => 'Aisne',
  //   etc...
  // ]



    echo '<pre>';
  print_r($HtdeFr);
  echo '</pre>';
  ?>



<hr>
  <br> <br> <br>
  pour info <br>
Création d'un tableau <mark>associatif multidimensionnel</mark> 


<!--  infos sur  : https://apprendre-php.com/tutoriels/tutoriel-7-les-tableaux-ou-arrays.html  -->
  <br>

</body>

</html>