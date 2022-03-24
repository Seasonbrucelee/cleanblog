<?php
/* HOME VIEW */
/* MES PARAMETRES DE CONNECTION, MES CONSTANTES ET AFFICHAGE */
 /** INCLUSION DU FICHIER CONFIGURATION QUI CONTIENT MES CONSTANTES */

include("config/config.inc.php");

/** INCLUSION DU FICHIER DE CONNECTION A LA BASE DE DONNEES */
include("model/pdo.inc.php");

/** CONNECTION SERVEUR BD */
try {

    /*** EXECUTION DU  CODE */
    $query = "
    SELECT post_ID, post_date, LEFT(post_content, " .TRONCATURE . ") AS post_content, post_title, post_img_url, display_name, cat_descr
    FROM blog_posts
    
    INNER JOIN blog_users
    ON post_author = ID
    
    INNER JOIN blog_categories
    ON post_category = cat_id
    
    ORDER BY post_date DESC";
    //die($query);

    $req = $pdo->query($query);

    //var_dump($req); affichage des variables type tableau et qui sont plus complexe
    //echo($req); Pour afficher des variables simple de type string

    //while($data = $req->fetch()) {
        //echo "fetch()";
         //var_dump($data);
         //echo "<br>" . $data["post_title"] . "<br>";
        //}
    $data = $req->fetchAll();

         //var_dump($data);
    }
//}

/***SI ERREUR LE PROGRAMME SE DEBRANCHE VERS LE BLOC CATCH */

/* Récupération de l'ERREUR dans le paramètre $e**/

catch (Exception $e){

    /**On traite l'erreur/ Ici un affichage (concatenation) et un arrêt (EXIT)) */
    die("Erreur MySql :" . $e->getMessage());
}

//** PAGE D'ACCUEIL**//

/** LES DECLARATION DE VARIABLES POUR MON HEADER.INC.PHP (layout) **/

$bg = 'assets/img/home-bg.jpg';
$header_title= "KRUMP Vie";
$header_subtitle="Connaître le Krump";

/**Variables pour le lien mon premier article qui se trouve dans index.php */
/*$titre_art_1 = 'KRUMP';
$subtitle_art_1 = 'Par où commencer?';
$author_art_1 = 'Sezen B.';
$date_art_1 = '18 mars 2022';*/