<?php 
		include("bdd.php");
		session_start();
		if(!isset($_SESSION['panier'])){
					$_SESSION['panier'] =array();
					$_SESSION['panier'][0]=-1;
					$_SESSION['panier'][1]=-1;
					$_SESSION['panier'][2]=-1;
		}
		$id0=$_SESSION['panier'][0];
		$id1=$_SESSION['panier'][1];
		$id2=$_SESSION['panier'][2];
		$pseudo=$_POST['pseudo'];
		var_dump($id0);
		$req=$bdd->query("SELECT COUNT(Client) FROM vr_grp7_paniers");
		$resultat=$req->fetch();
		if($resultat<3){
			if($_POST['pseudo']!=NULL){
				if($id0!=NULL){
						var_dump($id0);
						$bdd->exec("INSERT INTO vr_grp7_paniers(Jeux,Client,Creneau) VALUES ($id0,$pseudo,CURDATE())");
						$bdd->exec("UPDATE vr_grp7_jeuxludotheque SET NbJeuxDispos = NbJeuxDispos-1 WHERE id = $id0");
				}
				if($id1!=NULL){
						$bdd->exec("INSERT INTO vr_grp7_paniers(Jeux,Client,Creneau) VALUES ($id1,$pseudo,CURDATE())");
						$bdd->exec("UPDATE vr_grp7_jeuxludotheque SET NbJeuxDispos = NbJeuxDispos-1 WHERE id = $id1");
				}
				if($id2!=NULL){
						$bdd->exec("INSERT INTO vr_grp7_paniers(Jeux,Client,Creneau) VALUES ($id2,$pseudo,CURDATE())");
						$bdd->exec("UPDATE vr_grp7_jeuxludotheque SET NbJeuxDispos = NbJeuxDispos-1 WHERE id = $id2");
				}
			}
		}
	session_destroy();
	header('Location: reservation.php');

?>
