<?php
session_start(); // On démarre la session AVANT toute chose
?>
<?php include('../headerVB.php') ?>

<span class="statement">Enoncé Exo 2 </span>
<!-- exercise statement section -->
<section>
  Sur la page index, faire un lien vers une autre page. <br>
  Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. <br>
  Ces variables auront été définies directement dans le code. <br>
  Il faudra afficher le contenu de ces variables sur la deuxième page.
  <span class="greytext" style="text-align:center;">
    <!--  pour énoncé précédent -->
  </span>
  </header>
</section>
<br>
<!-- résults  section  // Formulaire-->
<hr><span class="result">Résultat:</span><br><br>
<section>


  <!--  PHP   section-->
  <?php
  $_SESSION['lastname'] = 'EVERGREEN';
  $_SESSION['firstname'] = 'Katniss';
  $_SESSION['age'] = '17';
  ?>
  Voir le résultat : <a href="hello.php" tittle="page accueil">ICI</a>
  </section>
<hr id="hrMemo">
<section class="memo">
  <!-- Tips & information  section  -->
  mémo: <mark>utilisation method post </mark>.
  <br>
  pour info <br>

  <!--  
    Il est préferable d'utiliser la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie. -->
  <br>
</section>
</body>

</html>