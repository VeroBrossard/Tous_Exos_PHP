<?php
//session_start(); // On démarre la session AVANT toute chose
?>
<?php include('../headerVB.php') ?>

<span class="statement">Enoncé Exo TD1 </span>
<!-- exercise statement section -->
<section>

  <?php
  echo 'essai regex <br>';
  $email = "contact@exemple.com";
if (preg_match('/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/im', $email)) {
    echo "Your email is ok.";
} else {
    echo "Wrong email.";
}
echo ' fin essai regex <br>';







  if (isset($_POST['btnsubmit'])) {  ?>
    <li>civilité : <?= $_POST["civility"] ?></li>

    <li>prénom : <?= $_POST["lastname"] ?></li>
    <li>nom : <?= $_POST["firstname"] ?></li>
    <li>age : <?= $_POST["age"] ?></li>
    <li>Société : <?= $_POST["company"] ?></li>
  <?php
  } else {
  ?>

    énoncé exo TD1 // Formulaire <br>
    <img src="../../assets/img/énoncéPhp9/exo1.png"><br>
    <span class="greytext" style="text-align:center;">
      <!--  pour énoncé précédent -->
    </span>
    </header>
</section>
<section>
  <br>
  <!-- résults  section  // Formulaire-->
  <hr><span class="result">Résultat:</span><br><br>

  <hr>Résultat:<br><br>
  <br>
  <form method="post" action="index.php">
    <fieldset>
      <legend>Votre identité</legend>

      <ol style="list-style:none; ">
        <li>
          <label for="civility"> Civilité: </label>
          <select id="civility" name="civility" required>
            <option value="">choisir une civilité</option>
            <option value="Mr">M.</option>
            <option value="Mme">Mme</option>
          </select>
        </li><br>
        <li><label for="lastname"> Votre Nom: </label>
          <input placeholder="ex: EVERDEEN" type="text" id="lastname" name="lastname" required />
        </li><br>
        <li> <label for="firstname">Votre Prénom </label>
          <input placeholder="ex: Katniss" type="text" id="firstname" name="firstname" required />
        </li><br>
        <li> <label for="age">Votre age  (min: 18  max:100) </label>
          <input type="number" id="age" name="age" min="18" max="100"  placeholder="ex: 25" required> <br>
        </li> <br>
        <li> <label for="company">Votre société </label>
          <input placeholder="ex: Co & Cie" type="text" id="company" name="company" required />
        </li><br>

      </ol>
    </fieldset>

    <p class="submit_btn">
      <button name="btnsubmit" type="submit" value="sent"> Envoyer </button>
    </p>


  </form>


</section>
<hr id="hrMemo">
<section class="memo">
  <!-- Tips & information  section  -->

  https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/number<br>

  <br>
</section>
<?php
  }
?>
</body>

</html>
//if (isset($_POST['btnSubmit'])) {