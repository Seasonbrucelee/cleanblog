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
    $bg = $data['post_img_url'];
    $layout_title =  $data['post_title']; 
    $header_title =  substr($data['post_title'], 0, TRONCATURE_HEADER) . '...'; 
    $header_subtitle = '...' . substr($data['post_title'], TRONCATURE_HEADER);

    include("view/post.view.php"); 
