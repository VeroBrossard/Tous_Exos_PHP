


<!DOCTYPE html>
<html lang="fr">
<?php 
echo "Hello World !!!"; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partie1 PHP - exo 1  </title>
</head>
<body>
<h1>PHP **  Partie 1 : Les variables **  exo 1  </h1><br>

Exercice 1<br>
Créer une variable name et l'initialiser avec la valeur de votre choix.  Afficher son contenu.<br>
<?php echo "Ceci est du <strong>texte</strong>"; ?>
        <h2>Affichage de texte avec PHP</h2>
        
        <p>
            Cette ligne a été écrite entièrement en HTML.<br />
            <?php echo "Celle-ci a été écrite 'entièrement' en PHP."; ?>
        </p>

<h2> variable age et afichage </h2>
<?php
$age_du_visiteur = 17; // La variable est créée et vaut 17
$age_du_visiteur = 23; // La variable est modifiée et vaut 23
$age_du_visiteur = 55; // La variable est modifiée et vaut 55

echo $age_du_visiteur;
echo "<br>";
echo "age du visiteur est $age_du_visiteur ans (doubles guillemets)<br/>";
echo 'age du visiteur est'.$age_du_visiteur.'ans (simpleguillemet)'; //plus lisible 

?>

<?php
$nombre = 2 + 4; // $nombre prend la valeur 6
$nombre = 5 - 1; // $nombre prend la valeur 4
$nombre = 3 * 5; // $nombre prend la valeur 15
$nombre = 10 / 2; // $nombre prend la valeur 5

// Allez on rajoute un peu de difficulté
$nombre = 3 * 5 + 1; // $nombre prend la valeur 16
$nombre = (1 + 2) * 2; // $nombre prend la valeur 6
?>


        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
    </body>
</html>
</body>
</html>