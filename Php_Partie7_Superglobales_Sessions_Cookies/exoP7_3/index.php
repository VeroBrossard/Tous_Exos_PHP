<?php

var_dump($_POST);

if (!empty($_POST)) {
  var_dump('etatCookie');
  $etat = $_POST["etatCookie"];
  echo 'formulaire rempli <br>';
  if ($etat == "en_cours") {
    echo 'valeur test récuperée : $etat == ' . $etat . ' <br>';

    $login = htmlspecialchars($_POST["login"]);
    $pwd = htmlspecialchars($_POST["pwd"]);

    // setcookie('login', $login, time() + 365 * 24 * 3600); //  ** pour 1 an
    // setcookie('pwd', $pwd, time() + 365 * 24 * 3600);

    setcookie('login', $login, time()+120); // ** pour 2mn
    setcookie('pwd', $pwd, time()+120);
    header("Location: index.php");
    //$_COOKIE['login'] ?? echo 'cookie non vide <br>': echo 'cookie  vide <br>';
    //affichage résultat
    $_POST["etatCookie"] = "";
    echo 'nouvelle valeur  etatCookie =""  <br>';
  }
}

?>
<?php include('../headerVB.php') ?>


  <?php
  if (!empty($_COOKIE['login']) && !empty($_COOKIE['pwd'])) {
  ?>

<section>
  <p><br>
    Affichage cookie login : <?= $_COOKIE['login'] ?? '' ?><br>
    Affichage cookie pwd : <?= $_COOKIE['pwd'] ?? '' ?><br>
    puis destruction des cookies...<br>
  </p>
</section>
<?php
    // ****** destruction cookies
    setcookie('login', "", 1);
    setcookie('pwd', "", 1);
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

      <input id="etatCookie" name="etatCookie" type="hidden" value="en_cours">
      <p class="submit_btn">
        <button type="submit" value="sent" name="submitBtn"> Envoyer </button>
      </p>
    </form>

  </section>
  <hr id="hrMemo">
  <section class="memo">
    <!-- Tips & information  section  -->
    exo cookies sur: https://members.loria.fr/ABelaid/Enseignement/l3ScCo/PHP/Cours7-Sessions-Cookies.pdf<br>
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