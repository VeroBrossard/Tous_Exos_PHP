<?php
session_start(); // On démarre la session AVANT toute chose
setcookie('login', '', time() + 365 * 24 * 3600);
setcookie('pwd', '', time() + 365 * 24 * 3600);
?>
<?php include('../headerVB.php') ?>


<?php
if (!empty($_POST)) {

  $login = htmlspecialchars($_POST["login"]);
  $pwd = htmlspecialchars($_POST["pwd"]);
  
  setcookie('login', $login, time() + 365 * 24 * 3600);
  setcookie('pwd', $pwd, time() + 365 * 24 * 3600);

   //$_COOKIE['login'] ?? echo 'cookie non vide <br>': echo 'cookie  vide <br>';

  //affichage résultat
?>
  <section>
    <p><br>
      Affichage cookie login : <?= $_COOKIE['login'] ?><br>
      Affichage cookie pwd : <?= $_COOKIE['pwd'] ?><br>
    </p>
  </section>
<?php

} else {   //   le formulaire n'a pas été rempli
  //   ***  affichage du formulaire à remplir en HTML ... ***
?>

  <!-- exercise statement section -->
  <span class="statement">Enoncé Exo 3 </span>
  <section>
    Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.<br> A la validation du formulaire, stocker les informations dans un cookie.
    <span class="greytext" style="text-align:center;">
      <!--  pour énoncé précédent -->
    </span>
    </header>
  </section>
  <br>
  <!-- résults  section  // Formulaire-->
  <hr><span class="result">Résultat:</span><br><br>
  <section>
    <form method="post" action="">
      <!--  pour retour sur le même fichier-->
      <fieldset>
        <legend> Identification </legend>

        <ol style="list-style:none; ">
          <li><label for="login"> Votre login: </label>
            <input placeholder="ex: votrenom@xxx.xx" type="text" id="login" name="login" required />
          </li><br>
          <li> <label for="pwd">Votre mot de passe </label>
            <input placeholder="ex: xx00xx0" type="password" id="pwd" name="pwd" required />
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
    démasquer pwd : https://openclassrooms.com/forum/sujet/afficher-le-valuequot-quot-d-un-typequot-passwordquot-63838 <br>
    et :https://www.creativejuiz.fr/blog/tutoriels/creer-systeme-masquage-demasquage-champ-mot-de-passe-formulaire<br>

    https://phpsources.net/code/php/navigateurs/181_faire-un-<mark>refresh </mark>-en-php-avec-le-fonction-header<br>

    <br>
    pour info <br>
    <!--  
    Il est préferable d'utiliser la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie. -->
    <br>
  </section>
<?php
}
?>
</body>

</html>