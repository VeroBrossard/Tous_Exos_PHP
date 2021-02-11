<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

<h1>Méthode post</h1>(pas de paramètres d'url)<br>

<!-- 
  <?php
  echo 'Nom : ' . $_POST["lastname"] . '<br>';
  echo 'Prénom : ' . $_POST["firstname"] . '<br>';


  // // echo 'Email : ' .$_POST["mail"].'<br>';
  // // echo 'Age : ' .$_POST["age"].'<br>';
  // // echo 'Sexe : ' .$_POST["sexe"].'<br>';
  // // echo 'Pays : ' .$_POST["pays"].'<br>';
  // ?> -->

<p>
  bjr vous vous appelez : <br>
  <?= $_POST['lastname']?? ' vous n\'avez pas donné de nom' , $_POST["firstname"] ?? ' vous n\'avez pas donné de prénom' ?> <br>
</p>

</body>

</html>