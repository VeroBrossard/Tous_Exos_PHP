<?php
//session_start(); // On démarre la session AVANT toute chose
?>
<?php include('../headerVB.php') ?>

<span class="statement">Enoncé Exo 1 </span>
<!-- exercise statement section -->
<section>
Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016).<br>

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
    echo date('d/m/Y'). '<br>'; //format français 29/01/2021
//facon procedurale :(utilisation de fonction)

    //************* objet   */
    echo 'new methode objet <br>';
    $date2 = new DateTime();
    //var_dump($date2);
    echo $date2 -> format('j/m/Y');
    echo '<br>';
    var_dump($date2); //pb sans var-dump!!!
    echo '<br>';
    echo $date2->date;

?>

<br>
avec fonction : date('d/m/Y')<br>

  </section>
<hr id="hrMemo">
<section class="memo">
  <!-- Tips & information  section  -->
  mémo: <mark>....</mark>.
  <br>
  fonction : date('d/m/Y') <br>

  <?php
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