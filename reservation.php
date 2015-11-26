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
	
		
		
		<!-- PARTIE PHP POUR AFFICHER LES POSSIBILITES -->
					<!-- OUBLIE PAS L'AHURI -->
		
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
		
		
		
		
		
		<footer>
			<?php include("footer.php"); ?>
		</footer>
		
	
	</body>
