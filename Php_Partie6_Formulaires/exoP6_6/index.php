<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <?php include('../headerVB.php') ?>

<section>

    <?php

     if (isset($_POST['btnsubmit'])){  ?>
          <li>civilité : <?= $_POST["civility"] ?></li>
          <li>prénom : <?= $_POST["lastname"] ?></li>
          <li>nom : <?= $_POST["firstname"] ?></li>
<?php
}
else{
?>


      Enoncé Exo 6 <br>
      <br>
      Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, <br>affichez-les à la place du formulaire. Sinon affichez le formulaire.<br>
      Utiliser qu'une seule page.<br><br>
      <span class="greytext">
        <hr> <br>
        (Enoncé exo 5 ...
        Créer un formulaire sur la page index.php avec : <br>
        Une liste déroulante pour la civilité (Mr ou Mme)<br>
        Un champ texte pour le nom<br>
        Un champ texte pour le prénom <br>

        Ce formulaire doit rediriger vers la page index.php. <br>
        Vous avez le choix de la méthode.)
      </span>
      <br>
      <hr>
    </header>
  </section>
  <br>
  <section>
    <hr>Résultat:<br><br>
    <br>
    <form method="post" action="index.php">
      <fieldset>
        <legend>Votre identité</legend>

        <ol style="list-style:none; ">
          <li>
            <label for="civility"> Civilité: </label>
            <select id="civility" name="civility" required>
              <option value="" >choisir une civilité</option>
              <option value="Mr">M.</option>
              <option value="Mme">Mme</option>
            </select>
          </li><br>
          <li><label for="lastname"> Votre Nom: </label>
            <input placeholder="ex: EVERGREEN" type="text" id="lastname" name="lastname" required />
          </li><br>
          <li> <label for="firstname">Votre Prénom </label>
            <input placeholder="ex: Katniss" type="text" id="firstname" name="firstname" required />
          </li>


        </ol>
      </fieldset>

      <p class="submit_btn">
        <button name="btnsubmit" type="submit" value="sent"> Envoyer </button>
      </p>


    </form>
  </section>
  <?php
     }
  ?>
  <br><br> <hr>
<section class="memo">  
    <mark>utilisation method post </mark>.
    <br>
  </section>

  pour info utilisation de la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie. C'est presque <mark>isset() </mark>, sauf que la fonction isset() permet de déterminer si une variable est bien définie, mais n'est pas capable de déterminer si la variable définie contient une quelconque valeur. (vide ou pas)
  (cf http://www.expreg.com/expreg_article.php?art=isset_empty)
  https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/rappel-formulaire-html/ 
  https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/recuperer-manipuler-donnee-formulaire/


</body>

</html>
