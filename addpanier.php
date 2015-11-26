<?php
	include ("header.php"); 
	include("bdd.php");
	if(isset($GET['id'])){
		$bdd->query("SELECT * FROM  VR_grp7_Jeux WHERE id='$GET['id']'");

http://www.grafikart.fr/tutoriels/php/panier-php-session-309
?>
