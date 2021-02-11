<!-- <?php
//session_start(); // On démarre la session AVANT toute chose (pas utile pour $_SERVER))
?> -->
<?php include('../headerVB.php') ?>
<span class="statement">Enoncé Exo 1 </span>
<!-- exercise statement section -->
<section>
    Faire une page HTML permettant de donner à l'utilisateur : <br>
    son User Agent <br>
    son adresse ip <br>
    le nom du serveur.
    <span class="greytext" style="text-align:center;">
      <!--  pour énoncé précédent -->
    </span>
    </header>
  </section>
  <br>
  <!-- résults  section  // Formulaire-->
  <hr><span class="result">Résultat:</span><br><br>
  <section>
    <!--  PHP   section-->
    <?php
    echo 'adresse IP est ' . $_SERVER["REMOTE_ADDR"];
    var_dump($_SERVER["REMOTE_ADDR"]);
    //$brow = get_browser()  a finir ****************
    ?>
    <br>Les informations sur le Navigateur sont :<br>
    <?php
    echo $_SERVER['HTTP_USER_AGENT'];

    ?>
    <?php
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
      $ip = $_SERVER['REMOTE_ADDR'];  //adresse IP du serveur 
    }
    // sur https://webdevdesigner.com/q/how-to-get-the-client-ip-address-in-php-11499/
    // note de L'éditeur: utiliser le code ci-dessus a des implications pour la sécurité . Le client peut définir toutes les informations D'en-tête HTTP (par ex. $_SERVER['HTTP_... ) pour toute valeur arbitraire qu'il veut. En tant que tel, il est beaucoup plus fiable d'utiliser $_SERVER['REMOTE_ADDR'] , car cela ne peut pas être définie par l'utilisateur.
    ?>

    <?php
    echo "<br>Le nom du serveur est " . $_SERVER['SERVER_NAME'];
    // sur https://www.visionduweb.fr/blog/13-programmation/70-coder-en-php-procedural
    ?>
  </section>
<hr id="hrMemo">
  <section class="memo">
  voir : https://www.php.net/manual/fr/function.get-browser.php<br>
    <!-- Tips & information  section  -->
    mémo: <mark>utilisation method post </mark>.<br>   
    Il est préferable d'utiliser la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie.  <br>
  </section>
  </body>

  </html>