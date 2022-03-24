<?php
//var_dump($_GET);
/* TEST AVANT AFIN DE SAVOIR SI ON RECOIT LES INFORMATIONS**/
if (!isset($_POST["name"])) {
    die("Nom Obligatoire !");
} if ($_POST["name"] == "") {
    die("Nom doit contenir une valeur");
} if (strlen($_POST["name"]) > 25) {
    die("Nom doit etre inferieur a 26 caracteres");
}

/* ENSUITE ON FAIT LA CONNECTION A LA BASE DE DONNEES**

/**** INCLUSION DU FICHIER CONTACT.ADD.MODEL.PHP ***/
include("model/contact.add.model.php");

header("Location:index.php?notif=1");
exit;
