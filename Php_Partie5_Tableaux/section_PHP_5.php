<?php
$mytitle = "Exos PHP Section 5 - TABLEAUX avec La MANU";
$myH1 = "PHP Section 5 - TABLEAUX";
$indSection = 5;
$nbrExos = 10;
$comm[7] = "Exemple";
$comm[2] = "";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../assets/style/styleSectionPHP.css">
  <title><?= $mytitle ?></title>
</head>

<body>
  <header>
    <h1> <?= $myH1 ?></h1>
    <hr>
    <div>
      <nav class="navbar">
        <?php
        for ($ind = 1; $ind <= $nbrExos; $ind++) {
        ?>
          <a class="button" href="exoP<?= $indSection ?>_<?= $ind ?>/index.php">Exo <?= $ind ?></a>
        <?php
        }
        ?>
      </nav>
    </div>
  </header>

  <div>
    <fieldset>
      <legend>Vers les differents exercices PHP Section <?= $indSection ?>:</legend>
      <div class="container">
        <!-- affichage du titre de la section -->
        <img src="../assets/img/énoncéPhp<?= $indSection ?>/exo0.png">
      </div>
      <?php
      for ($ind = 1; $ind <= $nbrExos; $ind++) {
      ?>
        <!-- affichage des  enoncés de la section -->
        <hr />
        <div class="container">
          <img src="../assets/img/énoncéPhp<?= $indSection ?>/exo<?= $ind ?>.png">
          <div class="text">
            <a class="button" href="exoP<?= $indSection ?>_<?= $ind ?>/index.php">Exo <?= $ind ?></a>
          </div>
          <?php
          if (!empty($comm[$ind])) {
          ?>
            <div class="comm">
              <?= $comm[$ind] ?>
            </div>
          <?php
          }
          ?>
        <?php
      } //fin du for
        ?>
    </fieldset>
  </div>

  <div class="pdg_left close"> <br /> <br>
    <a href="JavaScript:window.close()">Close</a>
    <!-- 	<a href="javascript:history.go(-1)">Retour</a> -->
  </div>
</body>

</html>