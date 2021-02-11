<?php
session_start(); // On démarre la session AVANT toute chose
?>
<?php include('../headerVB.php') ?>


    </header>
</section>
<br>
<!-- résults  section  -->
  <hr><span class="result">Résultat:</span><br><br><section>


  <!--  PHP   section-->

<?php

$lastname = $_SESSION['lastname'];
$firstname = $_SESSION['firstname'] ;
$age = $_SESSION['age'] ;
?>
 Bonjour <?= $lastname?>  <?= $firstname?>, tu as  <?= $age?> ans.<br>

</section>
<br><br>
<hr>
<section class="memo"><br>
  pour info <br>
  <!-- Tips & information  section  -->
  <!--  
    Il est préferable d'utiliser la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie. -->
  <br>
</section>
</body>

</html>