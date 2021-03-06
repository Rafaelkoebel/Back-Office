<?php // on indique que le code qui va suivre est du php
    include("config/config.inc.php"); //on appelle le fichier config qui définie les paramètres de la connection à la BDD
    include("model/pdo.inc.php"); //on appelle le fichier 'pdo' qui établie la connection la BDD

    try {
        $query = "SELECT display_name, cat_descr, LEFT(post_content, " . TRONCATURE . ") AS post_content 
        FROM blog_posts
        JOIN blog_users
        ON ID = post_author
        JOIN blog_categories
        ON cat_id = post_category";

        $req = $pdo->query($query);
        $data = $req->fetchAll();
        //echo "Connection établie";

    } catch (Exception $e) {
        die("Erreur Mysql : " . $e->getMessage());
    }



?>