<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 5 PHP - exo 7 </title>
</head>

<body>
  <h1>PHP ** Partie 5 : Les tableaux ** exo 7 </h1><br>
  <hr><br>

  Exercice 7 <br>
  <br><br>
  Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims<br>
  (Enoncé Exo 5 Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur noms. )
  <!-- 5 départements en Hauts-de-France.  -->


  <br><br>

  <hr>Résultat:<br><br>
  <br>
  <?php

  $HtdeFr = [
    ['index' => '02', 'name' => 'Aisne'],
    ['index' => '59', 'name' => 'Nord'],
    ['index' => '60', 'name' => 'Oise'],
    ['index' => '62', 'name' => 'Pas-de-Calais'],
    ['index' => '80', 'name' => 'Somme']
  ];

$nbrlg = count($HtdeFr);
// echo $nbrlg;
//Reims 51100 Marne
// version courte ...
// $HtdeFr [$nbrlg] = ['index' => '51', 'name' => 'Marne'];

 $HtdeFr [] = ['index' => '51', 'name' => 'Marne']; // sans [] , remplace le contenu du tableau.
  
// utiliser : $array['51'] = 'Marne'; //pour ajout tab associatif normal

echo ' <hr>  <br><br> <pre>';
  Var_dump($HtdeFr);
  echo '</pre>';
  ?>

  <hr>
  <br> <br> 
  <p>
      <?php
        $departements = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas de Calais", "80" => "Somme"];
        $departements["51"] = "Marne";
        echo 'ajout par $departements["51"] = "Marne" <br>';
        Var_dump($departements);

        echo '<br><br> OU <br><br>';

        $departements = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas de Calais", "80" => "Somme"];
        $departements = ["51" => "Marne"]; //remplace le tableau !!!
        echo ' remplacement totaldu tableau par : $departements = ["51" => "Marne"]';
        Var_dump($departements);
      ?>
      </p>
  
  <br>
  pour info <br>
  <mark>Ajout de ligne </mark>avec <mark>comptage</mark> d'un tableau associatif multidimensionnel.


  <!--  infos sur  :https://www.php.net/manual/fr/function.count.php -->
  <br>

</body>

</html>