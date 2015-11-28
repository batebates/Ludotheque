<?php
/*ajoute un élément au panier*/
	if(!isset($_SESSION)){
		session_start();
	}
	if(!isset($_SESSION['panier'])){
		$_SESSION['panier'] =array();
			$_SESSION['panier'][0]=-1;
			$_SESSION['panier'][1]=-1;
			$_SESSION['panier'][2]=-1;
	}

	if($_SESSION['panier'][0]==-1){
		$_SESSION['panier'][0]=$_GET['id'];
		die('Le produit a bien été ajouter<a href="javascript:history.back()">Retour au catalogue</a>');
	}
	else if($_SESSION['panier'][1]==-1){
		$_SESSION['panier'][1]=$_GET['id'];
		die('Le produit a bien été ajouter<a href="javascript:history.back()">Retour au catalogue</a>');
	}
	else if($_SESSION['panier'][2]==-1){
		$_SESSION['panier'][2]=$_GET['id'];
		die('Le produit a bien été ajouter<a href="javascript:history.back()">Retour au catalogue</a>');
	}
	else echo("Vous avez deja selectionner 3 jeux <a href=reservation.php>Voir votre selection</a>");
?>
