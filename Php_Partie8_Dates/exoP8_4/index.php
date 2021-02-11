<?php
//session_start(); // On démarre la session AVANT toute chose
?>
<?php include('../headerVB.php') ?>

<span class="statement">Enoncé Exo 4 </span>
<!-- exercise statement section -->
<section>
Afficher le timestamp du jour.  <br>
Afficher le timestamp du mardi 2 août 2016 à 15h00..<br>

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

$Stamp1 = gmmktime(15,0,0,8,2,2016);

echo 'Timestamp de mardi 2 août 2016 à 15h00 : ' .$Stamp1. '  par gmmktime(15,0,0,8,2,2016) <br><br>';
echo '(' .date("M-d-Y",$Stamp1). ') <br><br>';
echo "(" .strftime(('%A %d %B %Y %H:%M:%S'),$Stamp1) . ")  par strftime(('%A %d %B %Y %H:%M:%S')<br>";

setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);  
date_default_timezone_set('Europe/Paris'); 
echo '(' .UTF8_encode(strftime(('%A %d %B %Y %H:%M:%S'),$Stamp1)) . ') le même avec setlocale() et date_default_timezone_set()  => 2 h d\'écart pour heure d\'été <br>';


 echo '************* méthode objet   ***** <br>';
 //repasser en heure gMT
 date_default_timezone_set('Europe/London');
 echo '<br><br>new methode objet <br>';
 $date1 = new DateTime(); //sans parametre , date now
 //var_dump($date2);
 echo $date1 -> getTimestamp();
 echo '<br>';

 $date2 = new DateTime("2016-08-02 15:00");
 echo $date2 -> getTimestamp();

 echo '<br>';




?>
 <br>
  </section>
<hr id="hrMemo">
<section class="memo">
  <!-- Tips & information  section  -->
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