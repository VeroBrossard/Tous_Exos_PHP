<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">

  <?php include('../headerVB.php') ?>

  <section>

<?php
if(!empty($_POST))
{ 
  echo 'Nom : ' . $_POST["lastname"] . '<br>';
  echo 'Prénom : ' . $_POST["firstname"] . '<br>';
  echo '<p> Bonjour '. $_POST["civility"] .' '. $_POST["firstname"] . '  ' . $_POST["lastname"] . '</p>';
}
else  //   le formulaire n'a pas été rempli 
{  

  //   ***  affichage du formulaire à remplir en HTML ... ***
?>


      Enoncé Exo 5 <br>
      <br>
      Créer un formulaire sur la page index.php avec : <br>
      Une liste déroulante pour la civilité (Mr ou Mme)<br>
      Un champ texte pour le nom<br>
      Un champ texte pour le prénom <br>

      Ce formulaire doit rediriger vers la page index.php. <br>
      Vous avez le choix de la méthode.
      <br>
      <hr>
    </header>
  </section>
  <br>
  <section>
    <hr>Résultat:<br><br>
    <br>
    <form method="post" action="index.php"> <!-- ou action=""  pour retour sur le même fichier-->
      <fieldset>
        <legend>Votre identité</legend>

        <ol style="list-style:none; ">
        <li>
        <label for="civility"> Civilité: </label>
        <select id="civility" name="civility" required>
             <option value="">choisir une civilité</option>
            <option value=""></option>
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
        <button type="submit" value="sent"> Envoyer </button>
       </p>


    </form>
    </section>
  <br><br> <hr>
<section class="memo">  
    
    <mark>utilisation method post </mark>.
    <br>
    pour info  utilisation de la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie. C'est presque <mark>isset() </mark>, sauf que la fonction isset() permet de déterminer si une variable est bien définie, mais n'est pas capable de déterminer si la variable définie contient une quelconque valeur. (vide ou pas) 
    <!-- (cf http://www.expreg.com/expreg_article.php?art=isset_empty) -->
  https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/rappel-formulaire-html/ 
  https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/recuperer-manipuler-donnee-formulaire/
  </section>


<?php

}
 ?>
</body>

</html>

