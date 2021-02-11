<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <?php include('../headerVB.php') ?>

  <!--  PHP   section-->
  <section>
    <?php
    // setlocale(LC_TIME, "fr_FR", "French");
    if (!empty($_POST)) {

      //test sur fichier upload 
      // var_dump($_FILES);
      static $msg = "";

      if (!empty($_FILES['myfile']) and ($_FILES['myfile']['error'] == 0)) {
        // si 'pas empty !! un  fichier en attente upload <br>';
       // var_dump($_POST);

        // var_dump(mime_content_type([$_FILES]['myfile']['tmp_name']));
        //$extension_upload = (mime_content_type([$_FILES]['myfile']['tmp_name']));
        // var_dump($extension_upload);



        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['myfile']['name']);
        //  var_dump($infosfichier);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees)) {
          // $msg = 'le fichier ' . basename($_FILES['myfile']['name']) . ' est  acceptable! <br>';

          // On peut valider le fichier et le stocker définitivement
          $adrUpload = '../Img_Upload/';
          // move_uploaded_file($_FILES['myfile']['tmp_name'], $adrUpload . basename($_FILES['myfile']['name']));

          $_FILES['myfile']['name'] = "avatar.jpg";

          move_uploaded_file($_FILES['myfile']['tmp_name'], $adrUpload . $_FILES['myfile']['name']);
          // changement de nom
    ?>
          <!-- partie affichage du résultat  -->

          <!-- partie affichage du résultat  -->
          <div id="response">
            <p>
              <img class="profil_Img" src="../Img_Upload/avatar.jpg" alt="mon avatar">
            </p>

            <p style="padding-left : 20px;"> Bonjour <br>
              <?= $_POST["civility"] ?><br>
              <?= $_POST["firstname"] ?><br>
              <?= $_POST["lastname"] ?><br>

              <?php echo 'vous avez choisi la date : <br><input type="date" value ="' . $_POST['birthdate'] . '" disabled>';
              //dans un input, la date est retranscrite en format français
              ?>

            </p>
          </div>
        <?php
        } else {
          $msg = 'pb extension: le fichier ' . basename($_FILES['myfile']['name']) . ' n\'est PAS acceptable! <br>   <a href="index.php">retour au formulaire</a>';
        }
      } else {
        ?>
        vous n'avez pas choisi de fichier à télécharger ...<br>
        <button onclick="window.location.href = 'index.php#formulaire';">Retour au formulaire</button>
      <?php
        // header("location:index.php");
      }
      echo $msg . '<br>';

      //test upload
    } else  //   le formulaire n'a pas été rempli 
    {
      // header('Location: index.php');  //attention à la casse et espace  est après :
      //exit();
      // ou exit;

      ?>
      <button onclick="window.location.href = 'index.php#formulaire';">Retour au formulaire</button>

  </section>
  <!-- exercise statement section -->
  </section>
<?php
    } ?>

<br>

<br><br>

<hr id="hrMemo">
<section class="memo">
  <!-- Tips & information  section  -->
  mémo: <mark>utilisation method post </mark>.
  <br>
  pour info <br>

  </body>

</html>