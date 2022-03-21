   
   <!--La page post1.model.php-->
    <?php 
    //var_dump($_GET);
    //exit;
    //die ($_GET['article']); http://localhost:8080/cleanblog/post.php?article=41 affiche le chiffre 41 sur mon navigateur
    //echo($_GET['article']);

    include("model/post1.model.php");

    $layout_title =  $title; 

    include("view/post.view.php"); 
