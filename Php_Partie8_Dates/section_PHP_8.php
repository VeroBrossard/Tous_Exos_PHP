<?php
$mytitle = "Exos PHP Section 8 - DATES avec La MANU";
$myH1 = "PHP Section 8 - DATES";
$indSection = 8;
$nbrExos = 12;
// commentaire (facultatif) 
$comm[1] = "date('d/m/Y') pour affichage  jj/mm/aaaa ";
$comm[5] = "methode objetc : new DateTime()";
$comm[2] = "date('d-m-Y') pour affichage jj-mm-aa ";
$comm[3] = "strftime('%A %d %B %Y') pour (ex : mardi 2 août 2016) + <br> setlocale(LC_TIME, ['fr', 'fra', 'fr_FR'])+ <br><mark>date_default_timezone_set('Europe/Paris'); </mark> pour s'ajuster aux horaires été/hiver et UTF8_encode(strftime('%A %d %B %Y')) pour accents des mois";
$comm[4] = " diff  = abs(time() - Stamp1) et UTF8_encode() pour erreur é <br> pb avec le timezone_set";
$comm[9] = "UTF8_encode()  et cal_days_in_month(CAL_GREGORIAN,()";
$comm[10] = " correction de mon  exo 9";
$comm[11] = " correction exo 9 par Nourhene";
$comm[12] = " correction exo 9 parCatherine";
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