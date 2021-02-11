<?php
//session_start(); // On démarre la session AVANT toute chose
?>
<?php include('../headerVB.php') ?>

<span class="statement">Enoncé Exo 8 </span>
<!-- exercise statement section -->
<section>
Afficher la date du jour - 22 jours.<br>

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
   

echo 'Timestamp actuel : ' .time(). '  par time() <br><br>';
$date1 = time();  //date du jour 


echo 'date du jour : ' .strftime('%A %d %B %Y',$date1) .'<br>';
$date2 = strtotime($date1. ' - 22 days'); // On ajoute 20 jours

echo 'Timestamp -22 jours : ' . $date2 . '  par strtotime() <br><br>';
//echo 'date dans 20 jours :'. strftime('%A %d %B %Y', $date2) . '<br>';  Nooooooon !!!!

echo 'date -22  jours :' .date('d-m-Y', strtotime("-22 days")); //ok !!!!!
?>
 <br>

 <?php
  echo ' <br> <br> ***  méthode objet *** <br>';
  //affichage de l'ecart
  $start_date = new DateTime(); 
  $start_date ->sub(new dateInterval("P22D"));// Periode de 20 jrs
  echo $start_date->format("d-m-Y");


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
  https://www.php.net/manual/fr/function.number-format.php <br>
  https://www.php.net/manual/fr/function.strtotime.php <br>
  http://gueupacome.com/php-mysql/comment-augmenter-ou-diminuer-une-date-de-1-ou-de-plusieurs-jours-en-php/ <br>
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