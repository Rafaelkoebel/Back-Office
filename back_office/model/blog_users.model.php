<?php // on indique que le code qui va suivre est du php
    include("config/config.inc.php"); //on appelle le fichier config qui définie les paramètres de la connection à la BDD
    include("model/pdo.inc.php"); //on appelle le fichier 'pdo' qui établie la connection la BDD

    try {
        $query = "SELECT * FROM blog_users";

        $req = $pdo->query($query);
        $data = $req->fetchAll();
        //echo "Connection établie";

    } catch (Exception $e) {
        die("Erreur Mysql : " . $e->getMessage());
    }



?>