<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">

  <?php include('../headerVB.php') ?>

  <section>
      Enoncé Exo 1... <br>
    <br>
    Créer un formulaire demandant le nom et le prénom. <br>
    Ce formulaire doit rediriger vers la page user.php avec la méthode GET.
    <br> <hr> <br>
  </section>
  <section>
    <hr>Résultat:<br><br>
    <br>
    <form method="get" action="user.php">
      <fieldset>
        <legend>Votre identité</legend>

        <ol style="list-style:none; ">
          <li><label for="lastname"> Votre Nom: </label>
            <input placeholder="ex: EVERGREEN" type="text" id="lastname" name="lastname" required />
          </li><br>
          <li> <label for="firstname">Votre Prénom </label>
            <input placeholder="ex: Katniss" type="text" id="firstname" name="firstname" required />
          </li>

        </ol>
      </fieldset>

      <p class="submit_btn"><button type="submit" value="sent"> Envoyer </button>
        <!-- <button type="reset"> Effacer </button>  
      Tip: Avoid reset buttons in your forms! It is frustrating for users if they click them by mistake.
      by https://www.w3schools.com/tags/att_input_type_reset.asp
    et https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/reset-->
      </p>

      <a href="user.php?firstname=Véronique&lastname=BROSSARD">autre façon</a>br><br>
    </form>
  </section>
  <br><br> <hr>
<section class="memo">  
    pour info <br>
    <mark>utilisation method get </mark>.
    <br>

https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/rappel-formulaire-html/ 
https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/recuperer-manipuler-donnee-formulaire/
</section>
</html>

</body>