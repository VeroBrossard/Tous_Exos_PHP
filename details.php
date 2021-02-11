<?php


foreach ($ArrayMembers as $order => $value) 
    // on acquiert chaque lg du tableau HtdeFr et son ss-tab ($value) associé.
{
  // var_dump($order);   // order est un integer (rang du ss-tableau)
  // var_dump($value);  // contient les clés et valeurs de la ligne étudiée.

  echo ' [' . ($order) . '] --- ';
  foreach ($value as $key => $infos)  //on acquiert chaque element (clé/valeur) du ss-tab 
  {

    echo '(' . $key . ')     ' . $infos . ' ';
  }
  echo '<br>';
}
// echo 'Fin du tableau<br>';


?>