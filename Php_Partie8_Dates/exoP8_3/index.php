<?php
//session_start(); // On démarre la session AVANT toute chose
?>
<?php include('../headerVB.php') ?>

<span class="statement">Enoncé Exo 3 </span>
<!-- exercise statement section -->
<section>
  Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)<br>
  Bonus : Le faire en français.<br>

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
  echo date('l d F Y') . "      avec date('l d F Y') <br><br>"; //format français 29/01/2021

  echo strftime('%A %d %B %Y') . "    (avec strftime('%A %d %B %Y')  sans setlocale()) <br>";
  //setlocale(LC_TIME, 'fr_FR.UTF8'); //ne fonctionne pas du tout 
  setlocale(LC_TIME, ['fr_FR','fra', 'fr']);
    //  LC_TIME informations de localisation 
  // code langue différente d’un système d’opérations à l’autre

  echo UTF8_encode(strftime('%A %d %B %Y')) . "    (avec strftime('%A %d %B %Y') APRES  setlocale())<br>";
  ?>

</section>
<hr id="hrMemo">
<section class="memo">
  <!-- Tips & information  section  -->
  
  pour info <br>
  mémo: avec  <mark>setlocale(LC_TIME, ['fr', 'fra', 'fr_FR'])</mark> pour affichage desnoms en français <br>  
  et <mark>date_default_timezone_set('Europe/Paris'); </mark> pour s'ajuster aux horaires été/hiver  <br><br>
  

  <?php
  
  echo strftime('%A %d %B %Y %I:%M:%S'). " (avec strftime('%A %d %B %Y %I:%M:%S')  sans setlocale()) <br>";

  setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);  
  //  LC_TIME informations de localisation 
  // code langue différente d’un système d’opérations à l’autre

  echo strftime('%A %d %B %Y %I:%M:%S'). "( avec strftime('%A %d %B %Y %I:%M:%S') APRES  setlocale())<br>";
  date_default_timezone_set('Europe/Paris'); 
  echo strftime('%x'). "     avec  strftime('%x') <br>";
  echo " <br><br> ensuite, avec  date_default_timezone_set('Europe/Paris') , l'heure est ok !!!)<br>";
  //date_default_timezone_set('Europe/Moscow');//Moscou = GMT+3
  echo strftime('%T'). "     avec  strftime('%T') <br>";
  echo strftime('%c'). "     avec  strftime('%c') <br>";

  //  echo date('l d m Y h:i:s'). '<br>'; //Friday 29 01 2021 02:19:58 (heure de Londres)
  //  echo date('c'). '<br>'; 
  //  //Représente la date complète au format ISO 8601 (ex : 2021-01-29T14:19:58+00:00)
  //  echo date('r'). '<br>';
  //  //	Représente la date complète au format RFC 2822 (ex : Fri, 29 Jan 2021 14:19:58 +0000)
  ?>
  <!--  
    Il est préferable d'utiliser la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie. -->
  <br>
</section>
</body>

</html>