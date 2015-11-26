<?php
$serveur='info.univ-lemans.fr';
        $utilisateur='info201a_user';
        $mdp='com72';
        $base='info201a';
        try{
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host='.$serveur.'; dbname='.$base, $utilisateur, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
}
?>
