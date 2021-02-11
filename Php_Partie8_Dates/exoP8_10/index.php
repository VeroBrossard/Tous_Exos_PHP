<?php
//session_start(); // On démarre la session AVANT toute chose
$arrayMonths = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];

$yearMin = 1950;
$yearMax = 2037;
$actualYear = date('Y'); //NEW
//echo $actualYear . '<br>';
// $arrayDays = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assets/style/style_headerVB_PHP.css">
  <link rel="stylesheet" href="assets/style9.css"> <!-- pour exo 9 Calendrier -->
  <title>Partie 8 PHP / Les dates </title>
</head>

<body>
  <p>
  <header>
    <h1>PHP Partie 8 - Les dates</h1>
    <hr>
    <nav id="navbar">
      <a class="button" href="../exoP8_1/index.php">Exo 1</a>
      <a class="button" href="../exoP8_2/index.php">Exo 2</a>
      <a class="button" href="../exoP8_3/index.php">Exo 3</a>
      <a class="button" href="../exoP8_4/index.php">Exo 4</a>
      <a class="button" href="../exoP8_5/index.php">Exo 5</a>
      <a class="button" href="../exoP8_6/index.php">Exo 6</a>
      <a class="button" href="../exoP8_7/index.php">Exo 7</a>
      <a class="button" href="../exoP8_8/index.php">Exo 8</a>
      <a class="button" href="../exoP8_9/index.php">Exo 9 TD</a>
      <a class="button" href="../exoP8_10/index.php">Corr Exo 9 TD</a>
      <!-- <a class="button" href="#" disabled>Exo10</a> -->
    </nav>
  </header>
  </p>
  <!-- CSS only -->


  <span class="statement">Correction Exo 9 le mien modififé </span>
  <!-- exercise statement section -->
  <section>Correction Exo 9 le mien modififé // Calendrier<br><br>
    Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. <br>
    En fonction des choix, afficher un calendrier comme celui-ci:<br>

    <span class="greytext" style="text-align:center;">
      <!--  pour énoncé précédent -->
    </span>
    </header>
  </section>
  <br>
  <!-- ************ résults  section  // Formulaire  ****************   -->
  <hr><span id="result" class="result">Résultat mon exo 9:</span><br><br>
  <section>
    <?php
    if (!empty($_POST["intMonth"]) && !empty($_POST["intYear"])) {
      $intMyMonth = $_POST["intMonth"];  //valeur du mois en chiffre
      $myYear = $_POST["intYear"]; //valeur de l'année  en chiffre
      date_default_timezone_set('Europe/Paris'); // important! AU DEBUT pour homogeneiser tous les timestamp.
      setlocale(LC_TIME, ['fr_FR', 'fra', 'fr']); // IDEM pour nom jour en français

      include('assets/fonctionsPhp.php');

      $nameMonth = $arrayMonths[$intMyMonth - 1];  // nom du mois en toutes lettres 

      // calcul des dates selon Dimanche de Pâques/ 21 mars
      list($Monday, $Ascension, $Pentecost) = CalculatePaques($myYear);
      $arrayPubHolidays = addTab($arrayPubHolidays, $Monday, 'Lundi de Pâques');
      $arrayPubHolidays = addTab($arrayPubHolidays, $Ascension, 'Ascension');
      $arrayPubHolidays = addTab($arrayPubHolidays, $Pentecost, 'Pentecôte');

      // <br>FIN  création répertoire jours féries selon année <br>';

      // trouver le nom et la possition du 1er jour du mois 
      $strMyDate = $myYear . '-' . $intMyMonth . '-1';  // YYYY-m-1  création du string date cherchée

      $orderfirstday = strftime('%u', strtotime($strMyDate)); //position (n°) en semaine du 1er jour du mois (1 pour lundi)
      $namefirstDay = UTF8_encode(strftime('%A', strtotime($strMyDate))); // nom 1er jour du mois

      //trouver le nbre de jours dans le  mois choisi de notre calendrier.
      $nbdays = cal_days_in_month(CAL_GREGORIAN, $intMyMonth, $myYear);
    ?>
      <div>
        <table>
          <caption style="caption-side:top"><?= ucfirst($nameMonth) ?> <?= $myYear ?></caption>
          <!--- header du Tableau  -->
          <thead>
            <tr>
              <?php
              for ($d = 0; $d <= 6; $d++) { ?>
                <th><?= $arrayDays[$d] ?></th>
              <?php
              }
              ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              //détermination nbre de cases total du tableau
              $nbCasesTotal = 35;  //cas general
              if (($orderfirstday == 1) && ($nbdays == 28)) {
                $nbCasesTotal = 28;
              }
              if (($orderfirstday == 6) && ($nbdays == 31)) {
                $nbCasesTotal = 42;
              }
              if (($orderfirstday == 7) && (($nbdays == 30) || ($nbdays == 31))) {
                $nbCasesTotal = 42;
              }

              $numDay = 1;  // indice pour affichage numero du jour 
              $nbCasesEnCours = 1;  //nbre de cases (videsou pleines) créées 

              ?>
            </tr>
            <tr>
              <?php
              for ($ind = 1; $ind <= $nbCasesTotal; $ind++) {
                if ($ind < $orderfirstday) { // pas 1ers jour du mois
              ?>
                  <td class="non"></td>
                  <?php
                } else { // else pas 1er jour du mois

                  if ($numDay <= $nbdays) { // nb de jour mois pas atteint 

                    // test férié 
                    $daytest = strtotime($myYear . '/' . $intMyMonth . '/' . $numDay);
                    if (array_key_exists($daytest, $arrayPubHolidays)) {
                  ?>
                      <td class="holidays"><?= $numDay ?> <br>
                        <div class="textfestif"><?= $arrayPubHolidays[$daytest] ?> </div><br>
                        <!-- <?= strtotime($myYear . '/' . $intMyMonth . '/' . $numDay) ?> -->
                      </td>
                    <?php
                    } else {
                    ?>
                      <td><?= $numDay ?> </td>
                    <?php
                    }
                  } else { //de nbre de jour mois pas atteint
                    ?>
                    <!-- fin du calendrier en cases vides -->
                    <td class="non"></td>
                  <?php

                  } // fin else nombre de jour mois pas atteint

                  $numDay++;
                } //  fin else pas 1ers jour du mois

                if (($nbCasesEnCours % 7 == 0) && ($nbCasesEnCours < $nbCasesTotal)) {  //création nouvelle ligne
                  ?>
            </tr>
            <tr>
          <?php
                }
                $nbCasesEnCours++;
              }
          ?>
            </tr> <!-- fermeture derniere ligne-->
          </tbody>

        </table>
      </div>

    <?php

    }
    // else  //   le formulaire n'a pas été rempli ou pas correctement
    // {
    if (!empty($_POST["intMonth"]) && empty($_POST["intYear"])) {
      $msg = 'Veuillez choisir une année';
      //echo 'Month : ' . $_POST["intMonth"] . '<br>';
      echo $msg . '<br>';
    } //fin du if de _POST



    //   ***  affichage du formulaire à remplir en HTML ... ***
    ?>
    <form method="post" action="index.php">
      <fieldset>
        <legend>Votre choix</legend>

        <ol style="list-style:none; ">
          <li>
            <label for="intMonth"> choisir un mois: </label>
            <select id="intMonth" name="intMonth" required>
              <option value="">choisir un mois</option>

              <?php
              for ($i = 0; $i <= 11; $i++) {;
              ?>

                <option value="<?= ($i + 1) ?>" <?= (isset($_POST['intMonth']) && $_POST['intMonth'] == ($i+1) ? "selected" : "") ?>> <?= $arrayMonths[$i] ?></option>;
              <?php
              }
              ?>
            </select>
          </li><br>
          <li>

            <label for="intYear"> Choisir une année : </label>
            <!-- <input type="number" name="year" min="1900" max="2050" step="1" value="2050">  -->
            <select id="intYear" name="intYear" required>
              <?php
                var_dump(!isset($_POST['intYear']));
              for ($i = $yearMin; $i <= $yearMax; $i++) {
                //echo $i . '<br>';
                if (($i == $actualYear) && (!isset($_POST['intYear']))) { 
                   //NEW var pour année actuelle 
                  // NEW voir correction pour conservation de l'année si rachargement formulaire
                  var_dump(!isset($_POST['intYear']));
              ?>
                  <option value="<?= $i ?>" selected><?= $i ?></option>;
                <?php
                } else {
                ?>
                  <option value="<?= $i ?>" <?= ((isset($_POST['intYear']) && ($_POST['intYear'] == $i)))? "selected" : "" ?> > <?= $i ?></option>;
              <?php
                }
              }
              ?>
            </select>
          </li>
        </ol>
      </fieldset>

      <p class="submit_btn">
        <button type="submit" class="btn btn-lg btn-warning" value="sent"> Envoyer </button>
      </p>
    </form>
  </section>
  <!-- <?php
        //} // fin else  le formulaire n'a pas été rempli ou pas correctement
        ?> -->

  <hr id="hrMemo">
  <section class="memo">
    <!-- Tips & information  section  -->
    https://www.develop4fun.fr/trois-techniques-pour-les-nouveaux-formulaires-html-5/<br>
    https://www.aspsnippets.com/Articles/Dynamically-populate-Year-in-DropDownList-SELECT-using-JavaScript.aspx<br>
    http://css.mammouthland.net/tableaux-bordures-fines-border-css.php<br>
    https://apprendre-php.com/tutoriels/tutoriel-10-les-structures-de-contrle-les-boucles.html<br>
    http://www.informatix.fr/tutoriels/php/trouver-les-jours-feries-francais-en-php-137<br>
    http://www.lephpfacile.com/manuel-php/functions.returning-values.php<br>
    https://www.php.net/manual/fr/function.list.php<br>
    mémo: <mark>....</mark>.

    <br>
  </section>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>


<!-- // test sur equivalence férié
    // $numdaytest = 1;
    // $daytest = strtotime($myYear . '/' . $intMyMonth . '/' . $numdaytest);  //d'apres date dans tableau
    // echo ' equivalence férié  <br> timestamp daytest = ' . $daytest . '<br>';
    // echo $arrayPubHolidays[$daytest];   //nom du jour férié en tts lettres
    // var_dump(array_key_exists($daytest, $arrayPubHolidays));
    // if (array_key_exists($daytest, $arrayPubHolidays)) {
    //   echo  'ICI jour  timestamp :' .$daytest . ' a une équivalence <br>';
    //   echo $arrayPubHolidays[$daytest];

    // } -->