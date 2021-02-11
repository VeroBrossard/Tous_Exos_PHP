<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 5 PHP - exo 6 </title>
</head>

<body>
  <h1>PHP ** Partie 5 : Les tableaux ** exo 6 </h1><br>
  <hr><br>

  Exercice 6 <br>
  <br><br>
  Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.<br>
  (exo 5 Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. )
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


  $ind = '62'; // valeur cherchée

  foreach ($HtdeFr as $sous_tab) // on acquiert chaque lg (ss-tab ) du tableau HtdeFr
  {       // je vais tester la présence de $ind dans chaque ss-tableau
    static $i = 0;    // initialisation de $i en static pour éviter remise à 0 à chaque itération.
    if (in_array($ind, $sous_tab, true))     // si la valeur cherchée (true => typage strict) est présente dans la $ind ligne (ss tableau)
    {
          //$sous_tab = $HtdeFr[$i]; // affectation à ss-tab de la ligne i du tableau HtdeFr
      $result = $sous_tab['name'];
      break;   // résultat trouvé, on arrête  le foreach  (!! exit ne fonctionne pas/ arrête tout  )
    } else {   // si la valeur cherchée n'est PAS présente dans cette ligne (ss tableau)
      $result = 'index ' .$ind . ' pas trouvé <br>';
    }
    $i++; // on retourne dans la boucle foreach.
  }

  echo 'La valeur de l\'index ' . $ind . ' est : ' .  $result . '<br>';



  //$sous_util = ['index'=>'59','name' => 'Nord']
  // echo ' <hr><br>méthode simpliste ...  <br>';
  
  // $sous_tab = $HtdeFr[1];
  // echo $sous_tab['name']. '<br>';

  echo ' <hr>  <br><br> <pre>';
  print_r($HtdeFr);
  echo '</pre>';
  ?>

  <hr>
  <br> <br> <br>
  pour info <br>
  Création et utilisation d'un tableau <mark>associatif multidimensionnel</mark>


  <!--  infos sur  : https://apprendre-php.com/tutoriels/tutoriel-7-les-tableaux-ou-arrays.html  
et sur : https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/tableau-multidimensionnel/
et solution pour trouver valeur sur : https://qastack.fr/programming/4128323/in-array-and-multidimensional-array-->
  <br>


  <!--    auttre methode   *** ->$_COOKIE
<?php 

  echo "Exercice 6";
  ?>
  <p class="topic">Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        $departements = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas de Calais", "80" => "Somme"];
        echo "dépt 59 : " . $departements["59"];
      ?>
      </p>
    

</body>

</html>