<?php
//session_start(); // On démarre la session AVANT toute chose
?>
<?php include('../headerVB.php') ?>

<span class="statement">Enoncé Exo 5 </span>
<!-- exercise statement section -->
<section>
Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.<br>

  <span class="greytext" style="text-align:center;">
    <!--  pour énoncé précédent -->
  </span>
  </header>
</section>
<br>
<!-- résults  section  // Formulaire-->
<hr><span class="result">Résultat:</span><br><br>
<section>
Le Timestamp UNIX représente le nombre de secondes écoulées depuis <br>
le 1er janvier 1970 à minuit (heure GMT) et jusqu’à une date donnée. <br><br>

  <!--  PHP   section-->
  
   <?php
echo 'Timestamp actuel : ' .time(). '  par time() <br><br>';
// 16 mai 2016.
$Stamp1 = gmmktime(12,0,0,5,16,2016);
echo 'Timestamp du 16 mai 2016 midi. : ' .$Stamp1. '  par gmmktime(15,0,0,8,2,2016) <br><br>';

//$stamp2 = "54";
$diff  = abs(time() - $Stamp1);  
//La fonction abs retourne la valeur absolue, ce qui permet d'éviter de se retrouver avec un nombre négatif si la seconde date est antérieure à la première.

echo 'difference de time stamp : ' . $diff . '<br>';
//Après il faut décomposer ce nombre de secondes en jour, heure, minute et seconde 
//à l'aide de divisions et de modulo successif :


  //recup du nbre de jours 
$nbrjours= $diff/86400;
echo 'nombre de jours d\'écart : ' . $nbrjours . '<br>';
//$dureesejour = (strtotime(time()) - strtotime($Stamp1));  
//puis le diviser la durée par 86400 pour avoir le nombre de jours, 
//parce que le résultat est en seconde! (60*60*24)

$nbrjours= number_format($nbrjours, 0, ',', ' ');
echo 'nombre de jours d\'écart : ' . $nbrjours . '<br>';
//vec la function number_format() qui permet de choisir le nombre de chiffres après la décimale et ai opté pour 0.


?>
 <br>

 <?php

 echo ' <br> <br>autre méthode  <br>';
 $datestart = strtotime('2016-05-16');
 //$dateend = strtotime('2021-02-01');
 $dateend = time();
 $nbrJrs = ($dateend - $datestart)/86400;
 $nbrJrs = floor($nbrJrs);
 echo 'nombre de jours d\'écart : ' . $nbrJrs . '<br>';

 echo ' <br> <br> ***  méthode objet *** <br>';
//affichage de l'ecart
$start_date = new DateTime(date("d-m-Y"));  // ou $start_date = new DateTime(date("Y/m/d"))
$end_date = new DateTime(date("16-05-2016"));  // ou new DateTime(date("Y/m/d",strtotime("-$nbrJrs days")));
$interval = $start_date-> diff($end_date); //$dd = date_diff($start_date,$end_date);

$nbdays = $interval->days; 
echo $nbdays . '<br>';
$nbdays = $interval->format("%R %a"); //%R donne le signe 
//echo "$dd->y années  $dd->m mois $dd->d jours";
echo $nbdays;
 ?>




<!-- essai de strtotime()<br>
 <?php
 echo strtotime("now"), "\n";
 echo strtotime("10 September 2000"), "\n";
 echo strtotime("+1 day"), "\n";
 echo strtotime("+1 week"), "\n";
 echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
 echo strtotime("next Thursday"), "\n";
 echo strtotime("last Monday"), "\n";
 ?> -->
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
    //echo 'Timestamp actuel (avec mktime()) : '.mktime(). '<br>';  /deprecated
    $t1 = mktime(8, 30, 0, 1, 25, 2019);  
    //fonction mktime() calcule le Timestamp d’une date donnée en fonction du fuseau horaire du serveur (ici GMT +1 // hiver en France). 
    $gmt1 = gmmktime(8, 30, 0, 1, 25, 2019);
    //gmmktime(), considère que l’heure passée est une heure GMT. 
    //Cette fonction va donc calculer le Timestamp de l’heure exacte donnée. 
    echo 'Timestamp 25 janvier 2019 08h30 (GMT+1) : ' .$t1. ' résultat de  mktime(8, 30, 0, 1, 25, 2019) ?????????,,<br>';
    echo 'Timestamp 25 janvier 2019 08h30 (GMT) : ' .$gmt1. '  résultat de  gmmktime(8, 30, 0, 1, 25, 2019) ????????? quelle différence ??<br>';
  ?>
  <!--  
    Il est préferable d'utiliser la fonction <mark>empty()</mark> pour vérifier si une variable est : vide, nulle ou non définie. -->
  <br>
</section>
</body>

</html>