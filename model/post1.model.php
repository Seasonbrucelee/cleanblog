<?php
if ((!isset($_GET['article'])) || ($_GET['article'] == '1')) {

$bg = 'assets/img/post-bg.jpg';
$color = "green";
$title= "KRUMP";
$subtitle="Kingdom Radically Uplifted Mighty Praise (kingdom = royaume ; radically = radicalement ; uplifted = levé, élevé, soulevé ; mighty = puissant ; praise = éloge)";
$content = '<b>Le Krump</b> est une danse née dans les années 2000 au cœur des quartiers pauvres de Los Angeles1. Cette danse, non violente malgré son apparence agressive à cause des mouvements exécutés très rapidement, de la rage ou la colère qui peut se lire parfois sur les visages des danseurs de Krump que l\'on appelle les « Krumpers », se veut être une danse représentant la « vie » et toute sa « jouissance ». En effet, il n\'y a aucun conflit physique entre les danseurs.

<style>
    .test {
        color:' . $color . ';
    }
</style>

Origine: 
Cette danse est née dans le ghetto de <span class="test">Los Angeles</span> au début des années 2002. Marqué par les guerres de gangs, le trafic de drogue, les interpellations musclées de la police et les émeutes raciales de 1992, Thomas Johnson décide dans un premier temps de créer le personnage de Tommy le Clown pour animer des goûters d\'anniversaires dans les ghettos1,2. <br>
Il invente à cette occasion une nouvelle danse rapidement imitée par les enfants des quartiers : le clown dancing. En grandissant, certains d\'entre eux développent cette nouvelle forme d\'expression en créant le K.R.U.M.P. : Kingdom Radically Uplifted Mighty Praise, la forme évoluée du clown dancing.';

//Le fait d'enlever la balise fermante de PHP permet de ne pas avoir du HTML. Comme ça nous avons purement du code PHP  
}

else if ($_GET['article'] == '2') {

$bg = 'https://img.lemde.fr/2021/04/02/0/15/1050/700/664/0/75/0/3360755_588370314-1-copie.jpg';
$title= "Le Krump, danse urbaine superbement énervée";
$subtitle='Né dans le ghetto de Los Angeles au début des années 2000, le mouvement compte un nombre grandissant d’adeptes et ouvre la 8e édition de l’International Illest Battle, à La Villette, le 3 avril.';
$content = 'Un mot : krump. Essayez-le pour voir. Laissez-le monter en bouche, racler la gorge, et crachez-le en montrant les dents. Le prononcer, c’est déjà vivre la rage intime qui a trouvé un exutoire dans la danse, au début des années 2000, dans le ghetto de South Central, à Los Angeles. C’est là que naît le krump, comme le raconte avec flamboyance le film Rize, réalisé en 2005 par David LaChapelle. Et c’est en découvrant ce documentaire à sa sortie que Grichka Caruge, pionnier du krump en Europe, bascule du côté de ce style urbain superbement énervé.  Je suis allé voir Rize cinq fois de suite et j’y ai emmené tous mes proches, se souvient-il. Je tremblais, je pleurais tellement j’étais impressionné. Il y avait une telle puissance dans cette danse au-delà du geste que je me sentais transcendé. On me disait que ma danse hip-hop était trop énergique, j’ai choisi le krump.';
}

else  if($_GET['article'] == '3') {

    $bg = 'https://res.cloudinary.com/opera-national-de-paris/image/upload/c_crop%2ch_1080%2cw_1918%2cx_0%2cy_0/w_870/f_auto/v1/user_photos/rdngnixhnzbpi5euibo6';
    $title= 'La puissance du krump';
    $subtitle='Les Indes galantes, de Clément Cogitore sur la 3e Scène
    Par Olivier Barlet le 27 septembre 2019';
    $content = ' Le Krump est un mouvement profond, pas encore une marchandise. Il semblerait que le monde ait fait naître là où on ne l’attendait pas une danse du dedans, authentiquement spirituelle, faite pour débusquer des monstres et dire l’inarticulé des paroles rentrées dans la gorge de ceux qui ne peuvent même plus crier. La seule danse qui vaille. Avant d’être une mode, c’est un rite inventé, une sorte de louange forcenée, la contorsion brutal de celui qui refuse la camisole contemporaine. Ces danseurs nous disent : Qu’arrive-t-il à la force qui nous mène ? Que signifie ce monde échoué ? Qui vit dans l’obscur de nous-mêmes ? Cette danse est une chance car elle est un partage de la violence qui nous fonde et un moyen de la comprendre en se délivrant du discours. C’est une danse du début ou de la fin des temps qui dit l’essentiel de ce qui fait un homme aujourd’hui, un secret pour lui-même vivant debout au plus noir de sa propre nuit. » (Heddy Maalem, mai 2012, auteur de la pièce Eloge du puissant royaume, cité par Nach in  Je parle krump , Africultures n°99-100, p.249)  ';
}
else {

    $bg = 'https://www.codeur.com/blog/wp-content/uploads/2019/05/erreur-404-codeur.jpg';
    $title= 'Erreur 404';
    $subtitle='Page inexistante !';
    $content = ' ';
}




