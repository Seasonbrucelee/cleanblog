   <!--La page post.model.php-->
    <?php 
    //var_dump($_GET);
    //exit;
    //die ($_GET['article']); http://localhost:8080/cleanblog/post.php?article=41 affiche le chiffre 41 sur mon navigateur
    //echo($_GET['article']);

    // Ce controller reçoit un parametre article

    if (!isset($_GET["article"])) {
       die("Manque paramètre !");
    }

    include("model/post.model.php");

    $layout_title =  $title; 

    include("view/post.view.php"); 
