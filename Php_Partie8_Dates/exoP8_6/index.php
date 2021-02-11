<?php
//session_start(); // On démarre la session AVANT toute chose
?>
<?php include('../headerVB.php') ?>

<span class="statement">Enoncé Exo 6 </span>
<!-- exercise statement section -->
<section>
Afficher le nombre de jour dans le mois de février de l'année 2016.<br>

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

// 1 février de l'année 2016.
$Stamp1 = gmmktime(12,0,0,02,01,2016);
echo 'Timestamp du 1 février 2016. midi : ' .$Stamp1. '  par gmmktime(12,0,0,02,01,2016) <br><br>';

$nbrJr  = date('t',$Stamp1); 
//La fonction abs retourne la valeur absolue, ce qui permet d'éviter de se retrouver avec un nombre négatif si la seconde date est antérieure à la première.
echo 'il y avait ' . $nbrJr .' jours en fevrier 2016 <br>';


echo  "<br>  autre méthode  avec strtotime('2016-02-1') <br>";
$Stamp1 = strtotime('2016-02-1');
$nbrJr  = date('t',$Stamp1); 
echo 'il y avait ' . $nbrJr .' jours en fevrier 2016 <br>';


echo'<br>  autre méthode  sans timestamp <br>';
$nbdays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
echo 'il y avait ' . $nbrJr .' jours en fevrier 2016 <br>';
?>
 <br>
<!-- essai de strtotime()<br>
 <?php
//timestamp
 echo strtotime("10 September 2000"), "\n";

 ?>  -->
  </section>
<hr id="hrMemo">
<section class="memo">
  <!-- Tips & information  section  -->
  https://www.php.net/manual/fr/function.number-format.php<br>
  https://www.php.net/manual/fr/function.strtotime.php<br>
  <br>
  pour info <br>
  Le format Timestamp UNIX est un format de mesure de date très utilisé en programmation. Le Timestamp UNIX représente le nombre de secondes écoulées depuis le 1er janvier 1970 à minuit (heure GMT) et jusqu’à une date donnée.<br>

Ce format de date est difficile à manier pour un humain mais comme le Timestamp UNIX est un nombre on va très facilement pouvoir le manipuler en PHP et l’utiliser pour par exemple comparer deux dates.<br>

Un autre intérêt majeur du Timestamp est qu’il va être le même pour un moment donné quel que soit le fuseau horaire puisque ce nombre représente le nombre de secondes écoulées depuis un point précis dans le temps. Cela va s’avérer très pratique lorsqu’on aura besoin de représenter le temps pour l’ensemble de la planète d’un coup.<br>

Notez finalement que le PHP met bien évidemment à notre disposition certaines fonctions qui vont nous permettre d’exprimer une date sous un format dont on a l’habitude (jour-mois-année par exemple) à partir d’un Timestamp.<br>

ordre des arguments: 
L’heure ;
Les minutes ;
Les secondes ;
Le mois !!!! ;
Le jour ;
L’année.

  <?php
    //echo "Timestamp actuel (avec mktime()) : ".mktime(). "<br>";
  
    //deprecated
    $t1 = mktime(8, 30, 0, 1, 25, 2019);  
    //fonction mktime() calcule le Timestamp d’une date donnée en fonction du fuseau horaire du serveur (ici GMT +1 // hiver en France). 
    $gmt1 = gmmktime(8, 30, 0, 1, 25, 2019);
    //gmmktime(), considère que l’heure passée est une heure GMT. 
    //Cette fonction va donc calculer le Timestamp de l’heure exacte donnée. 
   //echo 'Timestamp 25 janvier 2019 08h30 (GMT+1) : ' .$t1. ' résultat de  mktime(8, 30, 0, 1, 25, 2019) ?????????,,<br>';
    echo 'Timestamp 25 janvier 2019 08h30 (GMT) : ' .$gmt1. '  résultat de  gmmktime(8, 30, 0, 1, 25, 2019) ????????? quelle différence ??<br>';
  ?>
  <!--  
    Il est préferable d'utiliser la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie. -->
  <br>
</section>
</body>

</html>