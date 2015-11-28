<!DOCTYPE html>

	<head>
		<title>Projet</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="page.css" media="screen" />	
	</head>




	<body>
		
		<header>
			<?php include("menus.php"); ?>						
		</header>
		<div id="affichagepanier">
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
				var_dump($_SESSION);
				$res = $bdd->query("SELECT * FROM  VR_grp7_Jeux NATURAL JOIN VR_grp7_JeuxLudotheque WHERE id IN ($id0,$id1,$id2)");
				if($res!=NULL){
					while ($resultat = $res->fetch()) {;
					?>
					<table>
					<tr>
						<td><img src="<?php echo $resultat['jaquette'];?>"></img></td> 
						<td class="col"><?php echo $resultat['description']; ?></td>
					<td><a href="delpanier.php?id=<?php echo $resultat['id'];?>">Enlever du panier</a></td>
					</tr>
					</table>
					<br />
					<?php }
				}
			?>	
		</div>
		<div id="zone_inscription">
			<form method="post" action="#">
						
						<p id="text">Entrer vos coordonnées pour vous identifiez lors du retrait: </p>	
						<p>
							<label for="pseudo">Identifiant: <input type="text" name="pseudo" id="pseudo" /></label><br />	
						
							<label for="age">Date de naissance : <input type="date" max="2015-12-31" min="1950-01-01" name="age" id="age" /></label><br />
							<input type="submit" value="Finir" id="bouton"/>
						</p>
						
   				</form>
		</div>
		<div id="zone_reservation">
			<form method="post" action="post_reservation.php">
						
						<p id="text">Entrer vos coordonnées pour vous identifiez lors du retrait: </p>	
						<p>
							<label for="pseudo">Identifiant: <input type="text" name="pseudo" id="pseudo" /></label><br/>	
							<input type="submit" value="Commander" id="bouton"/>
						</p>
						
   				</form>
		</div>
		
		
		
		
		<footer>
			<?php include("footer.php"); ?>
		</footer>
		
	
	</body>
