<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie 5 PHP - exo 9 </title>
</head>

<body>
  <h1>PHP ** Partie 5 : Les tableaux ** exo 9 </h1><br>
  <hr><br>

  Exercice 9 <br>
  <br><br>
  Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.<br><br>
  (Enoncé exo 5: Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. )
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


  foreach ($HtdeFr as $value) // on acquiert chaque lg (ss-tab) du tableau HtdeFr
  {
    // $sous_tab = $HtdeFr[$ind]; // affectation à ss-tab de la ligne $ind du tableau HtdeFr
    // var_dump($value);
    echo $value['index'] . '   '.$value['name'] . '<br>'; // ' index a pour numéro '.$value['index'] . '<br>'

  }


  echo ' <hr>  <br><br> <pre>';
  var_dump($HtdeFr);
  echo '</pre>';

  //$nbrlg = count($HtdeFr); pour compter le nbre de lg d'un tableau

  ?>

  <hr>
  <br> <br> <br>
  pour info <br>
  <mark>Affichage</mark> d'un tableau associatif multidimensionnel.


  <!--  infos sur  :https://www.php.net/manual/fr/function.count.php 

  idée sur http://www.sousdoues.com/formations/php/les-tableaux-en-php-8/
  recup des données : https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/tableau-multidimensionnel/
  
On va ici utiliser autant de boucles foreach qu’on a de dimensions dans le tableau qu’on souhaite parcourir. La première boucle foreach va nous permettre de parcourir les valeurs de notre tableau multidimensionnel de base, puis la deuxième boucle foreach va nous permettre de parcourir les valeurs des tableaux contenus directement dans le tableau multidimensionnel et etc.
            // exemple:
            foreach($utilisateurs as $nb => $infos){
                echo 'Utilisateur n°' .($nb + 1). ' :<br>';
                foreach ($infos as $c => $v){
                    echo $c. ' : ' .$v. '<br>';
                }
                echo '<br>';
            }    
            -->
  <br>

</body>

</html>