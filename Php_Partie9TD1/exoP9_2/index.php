<?php
//session_start(); // On démarre la session AVANT toute chose
$listDiplome = array('Sans', 'Bac', 'Bac+2', 'Bac+3', 'Sup');

?>
<?php include('../headerVB9.php') ?>
<?php include('assets/fonctionsPhp.php') ?>
<?php include('assets/tableaux.php') ?>
<span class="statement">Enoncé Exo TD2 </span>
<!-- exercise statement section -->
<section>

  <?php
  //var_dump($nations);
  if (isset($_POST['btnsubmit'])) {

    echo ' _POST  envoyé !!!  <br><br>';
    foreach ($_POST as $key => $value) {
      //création des variables à partir du _POST
      $$key = htmlspecialchars($value);
      echo  $key . '- ' . $$key . '<br/>';
    }
    echo 'pour test apres initialisation des variables : lastname est = à ' . $lastname . '<br>';
    echo 'pour test apres initialisation des variables : birthCountry abrev est = à ' . $birthCountry . '<br>';
    echo 'pour test apres initialisation des variables : birthCountry est = à ' . $nations[$birthCountry] . '<br>';
  ?>

  <?php
  } else {
    echo 'pas de _POST  envoyé !!!  <br>';
  }
  ?>
  <br><br>
  énoncé exo TD1 // Formulaire <br>
  Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :<br>
  A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.
  <!-- <img src="../../assets/img/énoncéPhp9/exo2.png"><br> -->
  <span class="greytext" style="text-align:center;">
    <!--  pour énoncé précédent -->
  </span>
  </header>
</section>
<section>
  <br>
  <!-- résults  section  // Formulaire-->
  <hr><span id="result">Résultat:</span><br><br>

  <form method="post" action="index.php" novalidate>
    <fieldset>
      <legend>Votre identité</legend>

      <div class="VBContenaire">
        <div class="divForm">
          <ol style="list-style:none; ">
            <li>
              <div>
                <input type="radio" id="civility1" name="civility" value="Mme" checked>
                <label for="civility1">Mme</label>
                <input type="radio" id="civility2" name="contact" value="M.">
                <label for="civility2">M.</label>
              </div>
            </li>
            <li><label for="lastname"> Votre Nom: </label>
              <input placeholder="ex: EVERDEEN" type="text" id="lastname" name="lastname" <?= !empty($_POST['lastname']) ? 'value = ' . $lastname . "" : "" ?> required />
            </li><br>
            <li> <label for="firstname">Votre Prénom: </label>
              <input placeholder="ex: Katniss" type="text" id="firstname" name="firstname" <?= !empty($_POST['firstname']) ? 'value = ' . $firstname . "" : "" ?> required />
            </li><br>
            <li>
              <label for="birthdate">Date de naissance : </label>
              <input type="date" id="birthdate" name="birthdate" min="1920-01-01" max="2020-12-31" <?= !empty($_POST['birthdate']) ? 'value = ' . $birthdate . "" : "" ?> required>
            </li><br>

            <li>
              <div>
                <label for="birthCountry">Pays de naissance </label><br>
                <select class="optionCountry" id="birthCountry" name="birthCountry">
                  <option value="">choisir un pays</option>
                  <?php
                  foreach ($nations as $abrev => $country) {
                  ?>
                    <option value="<?= $abrev ?>" <?= ($abrev == "FR" ? "selected" : "") ?>>
                      <?= $country ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </li><br>
            <li>
              <label for="nationality">Votre nationalité</label><br>
              <select id="nationality" name="nationality" <?= !empty($_POST['nationality']) ? 'value = ' . $nationality . "" : "" ?> required>
                <option value="">choisir une nationalité</option>
                <option value="fra">Française</option>
                <option value="usa">Américaine</option>
                <option value="eng">Anglaise</option>
              </select>


              <!-- <select id="nationality" name="nationality"  required>
                <option value="">choisir une nationalité</option>
                <option value="fra">Française</option>
                <option value="usa">Américaine</option>
                <option value="eng">Anglaise</option>
              </select> -->
            </li><br>

            <li>
              <div>
                Adresse : n° rue <br>
                ville<br>
                CP<br>
              </div>

            </li>

          </ol>
        </div>
        <div class="divForm">
          <ol style="list-style:none; ">

            <li><label for="email"> Votre email: </label>
              <input placeholder="contact@exemple.com" type="email" id="email" name="email" <?= !empty($_POST['email']) ? 'value = ' . $email . "" : "" ?> required /> <br>
              <?= ((isset($email)) && !(emailCheck($email, $errEmail))) ? ' <span class="alert"> ' . $errEmail . '</span>  ' : ' <br>' ?>
            </li>
            <li>
              <label for="phone">Enter your phone number:</label>
              <input class="phoneinput" type="tel" id="phone" name="phone" <?= !empty($_POST['phone']) ? 'value = ' . $phone . "" : "" ?> placeholder="  00 00 00 00 00" maxlength="14" pattern="[0-9]{10}" required><br> <!-- pattern utile pour mobiles -->
              <?= ((isset($phone)) && !(phoneCheck($phone, $errPhone))) ? ' <span class="alert"> ' . $errPhone . '</span>  ' : '<br>' ?>

            </li><br>

            <li>
              <!--   pb label ne fonctionne pas, pas lié   -->
              <label for="labelDiplome"> Indiquez votre niveau d'études :</label>
              <div class="btnradio" id="labelDiplome">
                <?php
                foreach ($listDiplome as $key => $value) {
                ?>
                  <span class="spanRadio">
                    <input type="radio" id="diplome<?= $key ?>" name="diplome" value="<?= $value ?>" <?= ($key == "0") ? "required checked " : "" ?>>
                    <label for="diplome<?= $key ?>"><?= $value ?></label></span>
                <?php
                }
                ?>

              </div>
              <!-- Diplôme (Sans, Bac, Bac+2, Bac+3 ou Sup)  -->
            </li><br>

            <li>
              poleEmploiNbr (Numéro pôle emploi)
            </li><br>
            <li>
              badgeNbr (nbre de badges)
            </li><br>

            <li>
              codeademyLinks (Liens codecademy)

            </li>



          </ol>
        </div>
      </div>

      <div>

        Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? <br><br>

        Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)<br><br>

        Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?<br><br>


      </div>
    </fieldset>

    <p class="submit_btn">
      <button name="btnsubmit" type="submit" value="sent"> Envoyer </button>
    </p>


  </form>


</section>
<hr id="hrMemo">
<section class="memo">

  foreach($_POST as $key => $value) $$key = $value; pour initialisation auto des variables de _POST <br>
  <!-- Tips & information  section  -->

  https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/number<br>
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
    http://www.manuelphp.com/php/function.list.php<br>
  </b>
  <br>

  <br>
</section>

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