<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <?php include('../headerVB.php') ?>

  <section>
      Enoncé Exo4 <br>
      <br>
      Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.
      (Enoncé EXo 2 <br>
      Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.)
      <br>
      <hr>
    </header>
  </section>
  <br>
  <section>
    <hr>Résultat:<br><br>
    <br>
    <form method="post" action="user.php">
      <fieldset>
        <legend>Votre identité</legend>

        <ol style="list-style:none; ">
          <li><label for="lastname"> Votre Nom: </label>
            <input placeholder="ex: EVERGREEN" type="text" id="lastname" name="lastname" required />
          </li><br>
          <li> <label for="firstname">Votre Prénom </label>
            <input placeholder="ex: Katniss" type="text" id="firstname" name="firstname" required/>
          </li>

        </ol>
      </fieldset>

      <p class="submit_btn"><button type="submit" value="sent"> Envoyer </button>
       </p>


    </form>
    </section>
  <br><br> <hr>
<section class="memo">  
    <mark>utilisation method post </mark>.
    <br>
    https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/rappel-formulaire-html/ 
    https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/recuperer-manipuler-donnee-formulaire/
  </section>

</body>

</html>
