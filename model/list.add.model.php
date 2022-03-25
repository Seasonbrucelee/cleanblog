<?php
include("config/config.inc.php");
include("model/pdo.inc.php");

try {

         $query = "
         SELECT post_date, post_content, post_title, post_img_url, display_name, cat_descr
         FROM blog_posts
         
         INNER JOIN blog_users
         ON post_author = ID
         
         INNER JOIN blog_categories
         ON post_category = cat_id
         
         WHERE post_ID = " . $_GET["article"];

         $curseur = $pdo->prepare($query);

         $curseur->bindValue(':article', $_GET['article'], PDO::PARAM_INT );
         
         $curseur->execute();

         $curseur->setFetchMode(PDO::FETCH_ASSOC);
         $data = $curseur->fetch();

         var_dump($data);
         exit;

    }

catch (Exception $e){
    die("Erreur MySql :" . $e->getMessage());
}