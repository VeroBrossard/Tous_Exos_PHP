<?php
//création des différents tableaux utilisés sauf months (utile dans formulaire)

$arrayDays = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

$arrayPubHolidays = [
  strtotime($myYear . '/1/1') => 'Jour de l\'An',
  strtotime($myYear . '/5/1') => 'Fête du Travail',
  strtotime($myYear . '/5/8') => 'Victoire de 1945',
  strtotime($myYear . '/5/17') => 'My BirthDay',  
  strtotime($myYear . '/7/14') => 'Fête nationale',
  strtotime($myYear . '/8/15') => 'Assomption',
  strtotime($myYear . '/11/1') => 'Toussaint',
  strtotime($myYear . '/11/11') => 'Armistice de 1918',
  strtotime($myYear . '/12/25') => 'Noël',
  ];


function addTab($Tab, $key, $value)
{   //ajout d'une date au tableau des jours fériés
     //$arrayPubHolidays [$date] = 'Lundi de Pâques'; 
    //$arrayPubHolidays = [$date => "Marne"];    // !remplace le tableau 
  $Tab[$key] = $value; //renvoi [timestamp] = 'nom du jour férié'

  return $Tab;
}

function CalculatePaques($myYear)
{
  // calcul des dates selon Dimanche de Pâques/ 21 mars
  // nbre de jour entre le 21 mars et dimnche de Pâques par easter_days($myYear)

  $date = $myYear . "-03-21";
  
  //dimanche de Pâques = 21/03 + easter_days($myYear)
  //Lundi de Pâque 21/03 + easter_days($myYear) +1 days
  //Ascension  21/03 + easter_days($myYear) +39 days i/o 40
  //Pentecôte 21/03 + easter_days($myYear) +50 days

  $datetemp = strtotime($date . '+ ' . (easter_days($myYear) + 1) . ' days');
  $stampM = $datetemp;

  $datetemp = strtotime($date . '+ ' . (easter_days($myYear) + 39) . ' days');
  $stampA = $datetemp;

  $datetemp = strtotime($date . '+ ' . (easter_days($myYear) + 50) . ' days');
  $stampP = $datetemp;

  return array($stampM, $stampA, $stampP);
  //echo 'Paques sera le  ' . strftime('%A %d %B %Y', $date) . '<br>';
}


?>