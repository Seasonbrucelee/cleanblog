<!-- HOME VIEW -->
<!--MES PARAMETRES DE CONNECTION, AFFICHAGE ET MES VARIABLES -->
<?php

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
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

    //var_dump($req); affichage des variables type tableau et plus complexe
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
catch (Exception $e){
    die("Erreur MySql :" . $e->getMessage());
}

$bg = 'assets/img/home-bg.jpg';
$header_title= "KRUMP Vie";
$header_subtitle="Connaître le Krump";

/**Variables pour le lien mon premier article qui se trouve dans index.php */
/*$titre_art_1 = 'KRUMP';
$subtitle_art_1 = 'Par où commencer?';
$author_art_1 = 'Sezen B.';
$date_art_1 = '18 mars 2022';*/