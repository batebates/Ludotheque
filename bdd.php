<?php
        try{
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
}
?>
