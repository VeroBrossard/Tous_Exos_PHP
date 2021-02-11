<?php

var_dump($_POST);

if (!empty($_POST) ){
  //le formulaire a déjà été rempli 
  var_dump('etatCookie');

  if ($_POST["etatCookie"] == "en_cours") {
    // 1ere création de cookies
    setcookie('login', htmlspecialchars($_POST["login"]), time() + 120);
    setcookie('pwd', htmlspecialchars($_POST["pwd"]), time() + 120);
    header("Location: index.php");  //pour actualiser la page et pouvoir afficher les cookies
     
    //affichage résultat
    $_POST["etatCookie"] = "";
    var_dump($_POST["etatCookie"]) ;
  }
}
?>
<?php include('../headerVB.php') ?>
<?php
if ((!empty($_COOKIE['login']) && !empty($_COOKIE['pwd'])) && !isset($_GET['changeCookie'])) {
?>

  <section>
    <p><br>
      Affichage cookie login : <?= $_COOKIE['login'] ?><br>
      Affichage cookie pwd : <?= $_COOKIE['pwd'] ?><br>

      <?php
      var_dump($_COOKIE['login']);
      var_dump($_COOKIE['pwd']);

      //modification des valeurs: 
      // $_COOKIE['login'] = "crêpes au "; modification juste locale sur la page
      // $_COOKIE['pwd']  = "Nutella";

      ?>
      <a href="index.php?changeCookie#formulaire">modifier les identifiants</a>

      <?php

      // setcookie('login', $confiture , time()+120) ;
      // setcookie('login', $confiture , time()+120) ;
      ?>
    </p>
  </section>
<?php
  // ****** destruction cookies
  // setcookie('login', "", 1);
  // setcookie('pwd', "", 1);
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
  </section>
  <br>
  <!-- résults  section  // Formulaire-->
  <hr><span class="result">Résultat:</span><br><br>
  <section id="formulaire">
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
    voir: https://www.creativejuiz.fr/blog/tutoriels/creer-systeme-masquage-demasquage-champ-mot-de-passe-formulaire
    <!--  
    Il est préferable d'utiliser la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie. -->
    <br>
  </section>
<?php
}
?>
</body>

</html>