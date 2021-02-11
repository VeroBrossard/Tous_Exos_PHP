<?php

function phoneCheck($phone, &$errPhone){
        if ($phone == "") {
                $errPhone = "Le n° de téléphone est vide";
                return false;
        }
//pb à gerer:  enlever les 0 pour ajout BDD
//pb à gerer:  ajouyer la regex à la liste
        if (!preg_match("/^0[1-9]([-. ]?[0-9]{2}){4}$/", $phone)) {
                $errPhone = "Format de téléphone non valide (00 00 00 00 00 attendu)";
                return false;
        }
        return true;

        // ''^[0-9]{9,13}[0-9]$'' : if(preg_match(''^[0-9]{10}$'', $nb_value)){  et là, on a bien un chaine commençant 
        // obligatoirement par 9 à 13 chiffres (^[0-9]{9,13}),  suivie d'un dernier chiffre ([0-9]$), 
      // sous entendu : une chaine composée obligatoirement de 10 à 14 chiffres...
};


function emailCheck($email, &$errEmail) {
        if ($email == "") {
                $errEmail = "L'email est vide";
                return false;
        }

        if (!preg_match("/^[a-z0-9\.-_]+@[a-z0-9\.-]+\.[a-z]{2,4}$/i", $email)) {
                $errEmail = "Le format de l'email n'est pas valide";
                return false;
        }

        list($nom, $dom) = explode("@", $email); // On récupère le nom de domaine dans la variable $dom
        //var_dump(gethostbyname($dom));
        if (gethostbyname($dom) == $dom) { // si vous n'êtes pas sous Windows, vous pouvez utiliser directement la condition (!checkdnsrr($dom))
                $errEmail = "Ce nom de domaine n'existe pas";
                return false;
        }
        return true;
        //regex ci-dessous ne fonctionne pas !!!
         // if (preg_match('/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/im', $email)) 

};
?>


