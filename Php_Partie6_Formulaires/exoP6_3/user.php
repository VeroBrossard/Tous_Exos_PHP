<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

<h1>Méthode get</h1>
  <?php
  echo 'Nom : ' . $_GET["lastname"] . '<br>';
  echo 'Prénom : ' . $_GET["firstname"] . '<br>';
  // echo 'Email : ' .$_GET["mail"].'<br>';
  // echo 'Age : ' .$_GET["age"].'<br>';
  // echo 'Sexe : ' .$_GET["sexe"].'<br>';
  // echo 'Pays : ' .$_GET["pays"].'<br>';
  ?>

  <p>Bonjour
    <?php
    echo $_GET["firstname"] . '  ' . $_GET["lastname"]
    ?>
  </p>

</body>

</html>