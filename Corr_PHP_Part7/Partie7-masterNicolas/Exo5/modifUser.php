<?php
if(isset($_POST["newLogin"]) || isset($_POST["newPassword"])){
    if($_POST["newLogin"] != "" || $_POST["newLogin"] != null){
        setcookie('login', $_POST["newLogin"]);
        // $_COOKIE["login"] = $_POST["newLogin"];
    }
    if($_POST["newPassword"] != "" || $_POST["newPassword"] != null){
        setcookie('password', $_POST["newPassword"]);
        //$_COOKIE["password"] = $_POST["newPassword"];
    }
}
function testCookie(){


    if(isset($_COOKIE["login"]) && isset($_COOKIE["password"])){
        echo "Votre Ancien Login stocké en cookie est : " . $_COOKIE["login"] . "<br/>";    
        echo "Votre Ancien Password stocké en cookie est : " . $_COOKIE["password"] . "<br/>";
    }else{
        echo "Vous n'avez stocker aucune donnée";   
    }
}
?>
<!doctype html>
<html lang="fr">
  <head>
    <title>Exo 5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="box ">
      <div class="container-fluid text-white h-100 w-100">
      <div class="row text-center justify-content-center" style="padding-top:70px;">
        <p><?php testCookie(); ?>
    </div>
    <div class="row text-center justify-content-center">
        <form action="modifUser.php" method="post">
        <div class="col-12 mt-2">
        <p class="mb-0" ><label for="newLogin">votre nouveau Login :</label></p>
        <input type="text" name="newLogin" id="lognewLoginin">
        </div>
            <div class="col12 mt-2">
            <p class="mb-0"><label for="newPassword">votre nouveau Password :</label></p>
        <input type="password" name="newPassword" id="newPassword">
            </div>
            <div class="col12 mt-4"><button class="btn bg-danger btn-lg" type="submit">Envoyer</button></div>
            
        </form>
    </div>
    <div class="row text-center justify-content-center" style="margin-top:50px;">
    <div class="col-4"> <a href="index.php">Retour au formulaire</a></div>
        <div class="col-4"><a href="user.php">Voir les Cookies</a></div>
        <div class="col-4"> <a href="modifUser.php">Modifier les Cookies</a></div>
    </div>
    </div>
</div>
    <!-- </div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>