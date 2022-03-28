<?php // on indique que le code qui va suivre est du php
    include("config/config.inc.php"); //on appelle le fichier config qui définie les paramètres de la connection à la BDD
    include("model/pdo.inc.php"); //on appelle le fichier 'pdo' qui établie la connection la BDD

    try {
        $query = "SELECT comment_content, display_name, post_title 
        FROM blog_comments
        JOIN blog_users
        ON ID = comment_author
        JOIN blog_posts
        ON comment_post_ID = post_ID";

        $req = $pdo->query($query);
        $data = $req->fetchAll();
        //echo "Connection établie";

    } catch (Exception $e) {
        die("Erreur Mysql : " . $e->getMessage());
    }



?>