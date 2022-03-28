<?php // on indique que le code qui va suivre est du php
    include("config/config.inc.php"); //on appelle le fichier config qui définie les paramètres de la connection à la BDD
    include("model/pdo.inc.php"); //on appelle le fichier 'pdo' qui établie la connection la BDD

    try {
        $query = "SELECT * FROM blog_users";
        $req = $pdo->query($query);
        $data = $req->fetchAll();

        $query2 = "SELECT * FROM blog_categories";
        $req = $pdo->query($query2);
        $data2 = $req->fetchAll();

        $query3 = "SELECT * FROM blog_comments";
        $req = $pdo->query($query3);
        $data3 = $req->fetchAll();

        $query4 = "SELECT * FROM blog_contacts";
        $req = $pdo->query($query4);
        $data4 = $req->fetchAll();

        $query5 = "SELECT *, LEFT(post_content, " . TRONCATURE . ") AS post_content FROM blog_posts";
        $req = $pdo->query($query5);
        $data5 = $req->fetchAll();
        //echo "Connection établie";

    } catch (Exception $e) {
        die("Erreur Mysql : " . $e->getMessage());
    }
    



?>