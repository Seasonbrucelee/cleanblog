    <!--CONTROLEUR-->

    <!--HOME CONTROLLEUR-->
    <?php 

    /** INCLUSION DE LA PAGE HOME MODEL QUI AFFICHE TOUS LES POST ET QUI CONTIENT LA CONDITION CATCH */
    include("model/home.model.php"); 

    /****  TITRE ONGLET NAVIGATEUR ****/

    $layout_title = 'Titre =' . $header_title; 
 
    /** INCLUSION DE LA VUE5 VISUEL DU NAVIAGEUR HOME  */
    include("view/home.view.php"); 
        
