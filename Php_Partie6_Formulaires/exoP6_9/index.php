<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <?php include('../headerVB.php') ?>

  <!-- exercise statement section -->
  <section>
    Enoncé Exo 9 <br>
    <br>
    Créer un formulaire de création de profil sur la page index.php avec :<br>
    • Une des bouton radio pour civilité (Mr ou Mme) X<br>
    • Un champ texte pour le nom X<br>
    • Un champ texte pour le prénom X<br>
    • Un champ date pour la date de naissance X <br>
    • Un champ d'envoi de fichier pour l'image de profil. X<br>
    A la soumission du formulaire, si tous les champs sont correctement renseignés, uploadez l'image de profil dans un dossier image que vous auriez créer en amont.<br>
    Afficher le profil de l'utilisateur dans une page profile.php
    <br><br>
    <span class="greytext">
      <hr> <br>

    </span>
    <br>
    <hr>
    </header>
  </section>
  <br>
  <!-- résults  section  // Formulaire-->
  <section id="formulaire">
    <hr>Résultat:<br><br>
    <form method="post" action="profile.php" enctype="multipart/form-data" >
      <!-- novalidate -->
      <!-- avec enctype, le navigateur du visiteur sait qu'il s'apprête à envoyer des fichiers. -->
      <!-- ss - Formulaire partie identité : -->
      <p class="alert">Attention tous les champs sont obligatoires</p>
      <fieldset>
        <legend>Votre identité</legend>

        <ol style="list-style:none; ">
          <li>
            Civilité:
            <input type="radio"  name="civility" value="M." required /> <label for="civility">M.</label>
            <input type="radio"  name="civility" value="Mme" required /> <label for="civility">Mme</label>
            <!-- même 'name' obligatoire pour btn radio  -->
          </li><br>
          <li><label for="lastname"> Votre Nom: </label>
            <input placeholder="ex: EVERGREEN" type="text" id="lastname" name="lastname" required />
          </li><br>
          <li> <label for="firstname">Votre Prénom </label>
            <input placeholder="ex: Katniss" type="text" id="firstname" name="firstname" required />
          </li><br>
          <li> <label for="birthdate">Votre Date de naissance</label>
            <input name="birthdate" type="date" placeholder="2017-06-01" required>
          </li>
        </ol>
        <br />
        <!--  Formulaire file upload  section: -->
        <legend id="label_myfile">Choisissez votre image de profil.</legend>

        <p id="myfile_p">
          <input type="file" name="myfile" /><br>
          <span class="alert">Attention, votre fichier doit être de type : .jpg, .jpeg,.gif, .png</span><br>
        </p>
      </fieldset>

      <p class="submit_btn">
        <br>
        <input id="submit_form" type="submit" value="Envoyer le fichier" /><br>
      </p>
      <br><br>
    </form>

  </section>
  <br><br>
  <hr>
<hr id="hrMemo">
  <section class="memo">
    <!-- Tips & information  section  -->
    mémo: <mark>utilisation method post </mark>.
    <br>
    pour info <br>

    <!--  
    Il est préferable d'utiliser la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie. -->
    <br>
    C'est presque <mark>isset() </mark>, sauf que la fonction isset() permet de déterminer si une variable est bien définie, mais n'est pas capable de déterminer si la variable définie contient une quelconque valeur. (vide ou pas)<br>
    <!-- (cf http://www.expreg.com/expreg_article.php?art=isset_empty) -->
    This function <mark>empty()</mark> returns<b>false</b> if the variable exists and is not empty, otherwise it returns <b>true</b>.<br>
    he following values evaluates to empty: 0 // 0.0 // "0" // "" // NULL // FALSE // array()<br><br>

    <mark> strip_tags () </mark>— Supprime les balises HTML et PHP d'une chaîne <br> <b>Avertissement:</b>
    Cette fonction ne devrait pas être utilisée pour empêcher les attaques XSS.<br>
    Utiliser des fonctions plus appropriées comme <mark> htmlspecialchars()</mark> ou d'autres méthodes en fonction du contexte de la sortie. (sur https://www.php.net/manual/fr/function.strip-tags.php) <br> <br>

    <mark> htmlspecialchars()</mark>— Convertit les caractères spéciaux en entités HTML<br>
    <mark> ENT_QUOTES </mark>Convertit les guillemets doubles et les guillemets simples.<br>
    // $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);<br>
    // écrira : // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;<br>
    (sur https://www.php.net/manual/fr/function.htmlspecialchars.php)<br> <br>

    <!-- https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/rappel-formulaire-html/ 
  https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/recuperer-manipuler-donnee-formulaire/ -->

    <!-- 
  
  $_FILES['myfile']['name'] // Contient  le chemin entier vers le fichier d'origine et donc le nom du fichier envoyé par le visiteur qu'il faudra extraire avec <mark>basename()</mark> par ex.
  Contiendra le nom sous lequel sera stocké le fichier de façon définitive. On peut utiliser le nom d'origine du fichier ou générer un nom au hasard.
  
  $_FILES['myfile']['type'] // Indique le type du fichier envoyé. Si c'est une image gif par exemple, le type sera image/gif  .
  
  $_FILES['myfile']['size'] // Indique la taille du fichier envoyé. Attention : cette taille est en octets. Il faut environ 1 000 octets pour faire 1 Ko, et 1 000 000 d'octets pour faire 1 Mo.
  Attention : la taille de l'envoi est limitée par PHP. Par défaut, impossible d'uploader des fichiers de plus de 8 Mo.
  
  $_FILES['myfile']['tmp_name'] // Juste après l'envoi, le fichier est placé dans un répertoire temporaire sur le serveur en attendant que votre script PHP décide si oui ou non il accepte de le stocker pour de bon. Cette variable contient l'emplacement temporaire du fichier (c'est PHP qui gère ça).
  
  $_FILES['myfile']['error'] //  Contient un code d'erreur permettant de savoir si l'envoi s'est bien effectué ou s'il y a eu un problème et si oui, lequel. La variable vaut 0 s'il n'y a pas eu d'erreur. 
  -->
  </section>
</body>

</html>