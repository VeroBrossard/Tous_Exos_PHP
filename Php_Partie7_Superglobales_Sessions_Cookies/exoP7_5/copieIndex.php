<?php
session_start(); // On démarre la session AVANT toute chose
setcookie('login', '', time() + 365 * 24 * 3600);
setcookie('pwd', '', time() + 365 * 24 * 3600);
?>
<?php include('../headerVB.php') ?>

<!-- exercise statement section -->
<?php
if (!empty($_POST)) {

  $login = htmlspecialchars($_POST["login"]);
  $pwd = htmlspecialchars($_POST["pwd"]);

  setcookie('login', $login, time() + 365 * 24 * 3600);
  setcookie('pwd', $pwd, time() + 365 * 24 * 3600);
  //affichage résultat
?>
    <section>
    <p><br>
      Affichage cookie login : <?= $_COOKIE['login'] ?><br>
      Affichage cookie pwd : <?= $_COOKIE['pwd'] ?><br>

      <?php
      var_dump($_COOKIE['login']);
      var_dump($_COOKIE['pwd']);

      //modification des valeurs: 
        $_COOKIE['login'] = "crêpes au ";
        $_COOKIE['pwd']  = "Nutella";
       ?>
       Affichage nouvelles valeurs:<br>
     cookie login : <?= $_COOKIE['login'] ?><br>
      cookie pwd : <?= $_COOKIE['pwd'] ?><br>

    </p>
  </section>

<?php

} else {   //   le formulaire n'a pas été rempli
  //   ***  affichage du formulaire à remplir en HTML ... ***
?>

  <!-- exercise statement section -->
  <span class="statement">Enoncé Exo 5 </span>
  <section>
    Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.<br>
    <span class="greytext" style="text-align:center;">
      <!--  pour énoncé précédent -->
    </span>
    </header>
    <br>
  </section>
  <br>
  <!-- résults  section  // Formulaire-->
  <hr><span class="result">Résultat:</span><br><br>
  <section>
    <!-- résults  section  // Formulaire-->
    <form method="post" action="">
      <!--  pour retour sur le même fichier-->
      <fieldset>
        <legend> Identification </legend>

        <ol style="list-style:none; ">
          <li><label for="login"> Votre login: </label>
            <input placeholder="ex: votrenom@xxx.xx" type="text" id="login" name="login" required />
          </li><br>
          <li> <label for="pwd">Votre mot de passe </label>
            <input placeholder="ex: xx00xx0" type="text" id="pwd" name="pwd" required />
          </li>
        </ol>
      </fieldset>

      <p class="submit_btn">
        <button type="submit" value="sent"> Envoyer </button>
      </p>
    </form>
  </section>
  <hr id="hrMemo">
  <section class="memo">
    <!-- Tips & information  section  -->
    mémo: <mark>utilisation method post </mark>.
    <br>
    pour info <br>
    <!--  
    Il est préferable d'utiliser la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie. -->*
    création & destruction de Cokkies <br>
     voir :  https://openclassrooms.com/forum/sujet/setcookie-et-affichage-non-instantane<br>

    <br>
  </section>
<?php
}
?>
</body>

</html>