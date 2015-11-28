<?php
/*ajoute un élément au panier*/
	if(!isset($_SESSION)){
		session_start();
	}
	
	if($_SESSION['panier'][0]==$_GET['id']){
		$_SESSION['panier'][0]=-1;
	}
	if($_SESSION['panier'][1]==$_GET['id']){
		$_SESSION['panier'][1]=-1;
	}
	if($_SESSION['panier'][2]==$_GET['id']){
		$_SESSION['panier'][2]=-1;
	}
	echo("Votre element a été supprimer <a href=reservation.php>Voir votre selection</a>");
?>
