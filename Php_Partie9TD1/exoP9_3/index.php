<?php
//session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../../assets/style/styleSectionPHP.css"> -->
  <!-- <script src="https://use.fontawesome.com/951d321079.js"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
  <link rel="stylesheet" href="assets/style9.css">
  <!-- <link rel="stylesheet" href="exosP9_3/assets/style9.css"> -->
  <!-- pour exo 9 Calendrier -->
  <title>Partie 9 PHP / correction </title>
</head>

<body>
  <p>
  <header>
    <!-- remplace style_headerVB_PHP de exos-PHP/assets -->
    <h1>Partie 9 PHP / correction  </h1>
    <hr>
    <nav id="navbar">
      <a class="buttonVB" href="../exoP9_1/index.php">Exo 1</a>
      <a class="buttonVB" href="../exoP9_2/index.php">Exo 2</a>
      <a class="buttonVB" href="../exoP9_3/index.php">Mon Exo 3</a>
      <a class="buttonVB" href="../exoP9_4CorrWilliam/TP2/index.php">Corr wlliam</a>
      <!-- <a class="button" href="#" disabled>Exo10</a> -->
    </nav>
  </header>

  </p>
  <?php require('assets/start_Infos.php') ?>
  <!-- tableaux et regex  -->
  <?php require('assets/controller_index.php') ?>
  <!-- fonctions php pour index-->
  <span>Enoncé Corrrection TP1 partie 9</span><br>
      Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :<br>
      A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.<br><br><br>
      <!-- <img src="../../assets/img/énoncéPhp9/exo2.png"><br> -->
  <!-- exercise statement section -->
  <section class="acceptation">
    <?php

    if (isset($_POST['btnsubmit']) && (count($errorMsg) == 0)) {

      echo ' _POST  envoyé !!! voici les erreurs: <br>';
      //var_dump($errorMsg);
      echo ' voici les valeurs: <br><br>';
      //var_dump($_POST);
      //*** submit cliqué et pas d'erreurs.=> formulaire d'acceptation.
      if (count($infosUser) > 0) {
        //echo " _POST  envoyé et pas d'erreur !!!  <br><br>";
        foreach ($infosUser as $key => $value) {
          $$key =  $infosUser[$key];
          //echo  $key . ' => ' . $$key . '<br/>';
        }
    ?>
        <br><br>
        <h1>Bravo <?= $infosUser['firstname'] . ' ' . $infosUser['lastname'] ?>, vous êtes inscrit(e) !!</h1>
        <br><br>

      <?php
       var_dump($infosUser);
       echo '<br><br><br><br>';
        //exit;
      }
    } else {
     // echo 'pas de _POST  envoyé ou sino mal rempli !!! <br>voici les valeurs: <br><br>';
      //var_dump($_POST);

      ?>

  </section>

  <section>
    <br>
    <!-- résults  section  // Formulaire-->
    <!-- <hr><span id="result">Résultat:</span><br><br> -->

    <form method="post" action="index.php" novalidate>
      <!-- novalidate  -->
      <fieldset>
        <legend>Formulaire d'inscription</legend>
        <div class="VBContenair_top">
          <div class="div_ss_form width_ss_form1">
            <ol>
              <!-- Civilité -->
              <li>
                <div>
                  <i class="fas fa-venus-mars imglogoicone"></i>
                  Civilité:<br>
                  <input type="radio" id="civility1" name="civility" <?= (!empty($_POST['civility']) && ($_POST['civility'] == "Mme")) ? 'value = "' . $_POST['civility'] . '" checked' : '  value="Mme" required' ?> /><label class="inline" for="civility1">Mme</label>

                  <input type="radio" id="civility2" name="civility" <?= (!empty($_POST['civility']) && ($_POST['civility'] == "M.")) ? 'value = "' . $_POST['civility'] . '" checked' : '  value="M."' ?> />
                  <label class="inline" for="civility2">M.</label><br>

                  <input type="radio" id="civility3" name="civility" <?= (!empty($_POST['civility']) && ($_POST['civility'] == "Non Binaire")) ? 'value = "' . $_POST['civility'] . '" checked' : '  value="Non Binaire"' ?> /><label class="inline" for="civility3">Non Binaire</label><br>

                  <?= !empty($errorMsg['civility']) ? '<span class="msgAlert">' . $errorMsg['civility'] . '</span>' : "pas error<br>" ?>
                </div>
              </li>
              <!-- lastname  -->
              <li> <label for="lastname">Votre Nom: </label>
                <input placeholder="ex: EVERDEEN" type="text" id="lastname" name="lastname" <?= !empty($_POST['lastname']) ? 'value = ' . $_POST['lastname'] . '' : "" ?> required /><br>
                <?= !empty($errorMsg['lastname']) ? '<span class="msgAlert">' . $errorMsg['lastname'] . '</span>' : "pas error<br>" ?>
              </li>
              <!-- firstname  -->
              <li> <label for="firstname">Votre Prénom: </label>
                <input placeholder="ex: Katniss" type="text" id="firstname" name="firstname" <?= !empty($_POST['firstname']) ? 'value = ' . $_POST['firstname'] . '' : "" ?> required /><br>
                <?= !empty($errorMsg['firstname']) ? '<span class="msgAlert">' . $errorMsg['firstname'] . '</span>' : "pas error<br>" ?>
              </li>
              <!-- birthdate  -->
              <li> <label for="birthdate">Date de naissance : </label>
                <input type="date" id="birthdate" name="birthdate" min="1920-01-01" max="2020-12-31" <?= !empty($_POST['birthdate']) ? 'value = ' . $_POST['birthdate'] . '' : "" ?> required /><br>
                <?= !empty($errorMsg['birthdate']) ? '<span class="msgAlert">' . $errorMsg['birthdate'] . '</span>' : "pas error<br>" ?>
              </li>
              <!-- birthCountry  -->
              <li>
                <div>
                <i class="fas fa-globe imglogoicone"></i><label for="birthCountry">Pays de naissance: </label>
                  <select class="widthCountry" id="birthCountry" name="birthCountry" required>
                    <option value="">choisir un pays</option>
                    <?php
                       foreach ($nations as $abrev => $country) {
                    ?>
                      <option value="<?= $abrev ?>" <?= (!empty($_POST['birthCountry']) && $_POST['birthCountry'] == $abrev) ?  "selected" : "" ?>><?= $country ?></option>
                    <?php
                    }
                    ?>
                  </select>
                  <?= !empty($errorMsg['birthCountry']) ? '<br><span class="msgAlert">' . $errorMsg['birthCountry'] . '</span>' : "<br>pas error" ?>
                </div>
              </li>
              <!-- nationality  -->
              <li>
              <i class="fas fa-passport imglogoicone"></i>
              <label for="nationality">Votre nationalité: </label>               
                <select id="nationality" name="nationality" <?= !empty($_POST['nationality']) ? 'value = ' . $nationality . "" : "" ?> required>
                  <option value="">choisir une nationalité</option>
                  <option value="fra" <?= (!empty($_POST['nationality']) && ($_POST['nationality'] == 'fra')) ?  "selected" : "" ?>> Française</option>
                  <option value="usa" <?= (!empty($_POST['nationality']) && ($_POST['nationality'] == 'usa')) ?  "selected" : "" ?>> Américaine</option>
                  <option value="eng" <?= (!empty($_POST['nationality']) && ($_POST['nationality'] == 'eng')) ?  "selected" : "" ?>> Anglaise</option>
                </select>
                <?= !empty($errorMsg['nationality']) ? '<br><span class="msgAlert">' . $errorMsg['nationality'] . '</span>' : "<br>pas error" ?>
              </li>
              <!--   email   -->
              <li> <i class="far fa-envelope imglogoicone"></i>
              <label for="email"> Votre email: </label>               
                <input placeholder="contact@exemple.com" type="email" id="email" name="email" <?= !empty($_POST['email']) ? 'value = ' . $_POST['email'] . "" : "" ?> required /> <br>
                <?= !empty($errorMsg['email']) ? '<span class="msgAlert">' . $errorMsg['email'] . '</span>' : "pas error<br>" ?>
              </li>
              <!-- phone number -->
              <li>
                <label for="phone">Enter your phone number:</label>
                <i class="fas fa-mobile-alt"></i>
                <input class="phoneinput" type="tel" id="phone" name="phone" <?= !empty($_POST['phone']) ? 'value = "' .  $_POST['phone'] . '"' : "" ?> placeholder="  00 00 00 00 00" maxlength="14" pattern="[0-9]{10}" required><br> <!-- pattern utile pour mobiles -->
                <?= !empty($errorMsg['phone']) ? '<span class="msgAlert">' . $errorMsg['phone'] . '</span>' : "pas error<br>" ?>

              </li>

            </ol>
          </div>
          <div class="div_ss_form width_ss_form2">
            <ol style="list-style:none; ">
              <!--   labelDiplome    -->
              <li>
                <!--   pb à gerer:label ne fonctionne pas, pas lié   -->
                <i class="fas fa-user-graduate imglogoicone" ></i>
                <label for="labelDiplome"> Indiquez votre niveau d'études :</label>                         
                  <?php
                  foreach ($listDiplome as $key => $value) {
                  ?>
                  <input type="radio" id="diplome<?= $key ?>" name="diplome" <?= (!empty($_POST['diplome']) && ($_POST['diplome'] == "$key")) ? 'value = "' . $key . '" checked' : 'value="' . $key . '"' ?> <?= ($key == "0") ? 'required' : ''; ?> />
                      <label class="inline" for="diplome<?= $key ?>"><?= $value ?></label>
                  <?php
                  }
                  ?>
                  <br> <?= !empty($errorMsg['diplome']) ? '<span class="msgAlert">' . $errorMsg['diplome'] . '</span>' : "pas error<br>" ?>
                <br>
                <!-- Diplôme (Sans, Bac, Bac+2, Bac+3 ou Sup)  -->
              </li><br>
              <!--   Adresse  -->
              <li>
                <div>
                  Adresse : n° rue <br>
                  ville<br>
                  CP<br>
                </div>
              </li><br>
              <!--   pole emploi    -->
              <li>
                <img src="assets/img/PoleEmploi-img.png" class="imgLogoPE" />
                poleEmploiNbr (Numéro pôle emploi)
              </li><br>
              <!--   badges    -->
              <li>
                badgeNbr (nbre de badges)
              </li><br>
              <!--   lien url   -->
              <li>
                
                <label for="urlVB">Liens codecademy vers votre répertoire: </label>
                <input type="url" name="urlVB" id="urlurlVB" placeholder="https://www.codecademy.com/" pattern="https://.*" size="40" <?= !empty($_POST['urlVB']) ? 'value = ' . $_POST['urlVB'] . '' : "" ?> required><br>
                <?= !empty($errorMsg['urlVB']) ? '<span class="msgAlert">' . $errorMsg['urlVB'] . '</span>' : "pas error<br>" ?>
              </li><br>
              <!--   super héroïne    -->
              <li> Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?
              </li><br>
              <!--   hackperso    -->
              <li>  <i class="far fa-lightbulb imglogohack"></i>
                <label for="hackperso"> Racontez-nous un de vos "hacks" (pas forcément technique ou informatique): </label>
                <div class="div_hack">
                
                  <textarea id="hackperso" name="hackperso" rows="4" cols="40" maxlength="500" required><?= !empty($_POST['hackperso']) ? $_POST['hackperso'] : '' ?></textarea><br>
                  <?= !empty($errorMsg['hackperso']) ? '<span class="msgAlert">' . $errorMsg['hackperso'] . '</span>' : "pas error<br>" ?>
              </li><br>
              <!--   programmation    -->

              <li>
                <div><i class="fas fa-robot imglogohack"></i>                
                Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?:
                  <input type="radio" id="prgm1" name="prgm" <?= (!empty($_POST['prgm']) && ($_POST['prgm'] == "Oui")) ? 'value = "' . $_POST['prgm'] . '" checked' : '  value="Oui" required' ?> />
                  <label class="inline" for="prgm1">Oui</label>

                  <input type="radio" id="prgm2" name="prgm" <?= (!empty($_POST['prgm']) && ($_POST['prgm'] == "Non")) ? 'value = "' . $_POST['prgm'] . '" checked' : '  value="Non"' ?> />
                  <label class="inline" for="prgm2">Non</label><br>
                  <?= !empty($errorMsg['prgm']) ? '<span class="msgAlert">' . $errorMsg['prgm'] . '</span>' : "pas error<br>" ?>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </fieldset>
   <!-- submit button -->
      <div>
        <p>
          <button class="btnSummit" name="btnsubmit" type="submit" value="Envoyer">Envoyer</button>
        </p>
      </div>
    </form>

  </section>
  <hr id="hrMemo">
  <section class="memo">
    <!-- 
    foreach($_POST as $key => $value) $$key = $value; pour initialisation auto des variables de _POST <br> -->
    <!-- Tips & information  section  -->

    <!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/number<br>
    regex mail <br>
    https://codes-sources.commentcamarche.net/source/12782-tester-la-validite-d-un-e-mail#:~:text=La%20fonction%20emailCheck()%20prend,email%20est%20valide%2C%20faux%20sinon.<br>
    Regex tel Format: 123-456-7890 / voir:<br>
    https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/tel<br>
    regex tel global voir:
    https://forum.alsacreations.com/topic-1-69567-1-Formulaire-telephone-avec-regex.html<br>
    regex tel francais ok <b>
      https://forums.commentcamarche.net/forum/affich-4724603-verification-numero-de-telephone-form-php<br>
      pour les nuls :<br>
      www.siteduzero.com <br>
      infos sur list() voir: <br>
      http://www.manuelphp.com/php/function.list.php<br> -->
    </b>
    <br>

    <br>
  </section>
<?php
    }
?>
</body>

</html>



<!--
                
                civility
                lastname
                firstname
                birthdate
                birthCountry
                nationality
                
                email
                telephone
                diplome
                poleEmploiNbr
                badgeNbr
                codeademyLinks  (Liens codecademy)
                
                A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.
                
                -->