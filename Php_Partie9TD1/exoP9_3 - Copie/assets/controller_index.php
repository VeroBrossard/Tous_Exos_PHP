<?php
function inputCleaner($input){

  $input= trim($input);
  $input= strip_tags($input, );
  $input= htmlentities($input);
  return $input;
}

if (isset($_POST['btnsubmit'])) {

  foreach ($_POST as $key => $value) {
    //enlever les espaces en surnombre debut et fin
    $_POST[$key] = trim($_POST[$key]);
    // enlever les espaces en surnombre dans le texte
    $_POST[$key] =  preg_replace('/\s\s+/', ' ',  $_POST[$key]);
  }
  //test conformité Regex
  if (!preg_match($regexStandard, $_POST['lastname'])) {
    $errorMsg['lastname'] = "Veuillez respecter le format ex:Dupont";
  }
  if (!preg_match($regexTel, $_POST['phone'])) {
    $errorMsg['phone'] = "Ce numéro n'est pas conforme: 00 00 00 00 00 attendu";
  } else {
    //pour ajout dans BdD sans espaces: 0000000000
    $_POST['phone'] =  preg_replace('/\s/', '',  $_POST['phone']);
  }
  //test présence dans tableaux prédéfinis 
  if (isset($_POST['birthCountry'])) {
    if (!array_key_exists($_POST['birthCountry'], $nations)) {
      $errorMsg['birthCountry'] = "Tu as essayé de tricher.";
    }
  }
  if (isset($_POST['email'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errorMsg['email'] = "format du mail non conforme: nom@xxx.xxx";
    }
  }
/*  test à part pour bouttons radio  */
  if (empty($_POST['diplome'])) {
    $errorMsg['diplome'] = "Veuillez renseigner ce champ ";
  }
  if (empty($_POST['civility'])) {
    $errorMsg['civility'] = "Veuillez renseigner ce champ ";
  }
  if (empty($_POST['prgm'])) {
    $errorMsg['prgm'] = "Veuillez renseigner ce champ ";
  }
  //test des champs vides
  echo '**************submit cliqué <br>';
  foreach ($_POST as $key => $value) {
    if (empty($_POST[$key])) {
      $errorMsg[$key] = "Veuillez renseigner ce champ ";
    }
  }


var_dump(inputCleaner(($_POST['hackperso'])));
//$text = inputCleaner()
  // var_dump($errorMsg);
  // tous les champs sont ok, on crée le tableau (ou cookie ?? ou Var Session ) du user
  if (count($errorMsg) < 1) {
    foreach ($_POST as $key => $value) {
      // $$key =  $_POST[$key];
      $infosUser[$key] = htmlspecialchars($_POST[$key]);
    }
    // var_dump($infosUser);
    // header('Location: index.php');
  }
}

//*** submit cliqué et pas d'erreurs.=> formulaire d'acceptation.
//     var_dump($infosUser);
//  if (count($infosUser) >0) {
//   echo " _POST  envoyé et pas d'erreur !!!  <br><br>";
//   var_dump($infosUser);
//   foreach ($infosUser as $key => $value) {

//     $$key =  $infosUser[$key];
//     echo  $key . ' => ' . $$key . '<br/>';
//   }
// 
?>
//
<!-- <h1>Bravo <?= $infosUser['firstname'] . ' ' . $infosUser['lastname'] ?>, vous êtes inscrit(e) !!</h1> -->


// <?php
    // }
    // exit;



    // if (isset($_POST['btnsubmit'])) {
    //   //test sur lastname
    //   if(empty($_POST['lastname'])){
    //     $errorMsg['lastname'] = "veuillez renseigner votre nom ";
    //   }
    //  elseif (!preg_match($regexStandard, $_POST['lastname'])) {
    //    $errorMsg['lastname'] = "Le format de votre nom n'est pas valide";
    // }
    // else{
    //   $errorMsg['lastname'] = "tout est ok";
    // }
    // echo 'affichag de array errorMsg';
    // var_dump($errorMsg);



    ?>

<?php
// *********   partie William
// Si Submit on verifie chaque champ Regex+Vide ou non






// **** Fonction pour calculer l'age selon la date de naissance
// function calculateAge($DoB)
// {
//     $userDob = $DoB;
//     // Conversion en Date
//     $dob = new DateTime($userDob);
//     // ON prend la date du jour
//     $now = new DateTime();
//     // Calcul difference
//     $difference = $now->diff($dob);
//     // conversion en année.
//     $age = $difference->y;
//     return $age;
// }

?>