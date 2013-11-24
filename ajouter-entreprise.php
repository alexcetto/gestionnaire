<?php include 'assets/base.php'; 

	if(!isset($_COOKIE['login']) && $_COOKIE['login'] != 'admin'){
		header("location: connexion.php");
	}

	include 'assets/headings.php';
	include 'assets/menu.php';
?>

<body class="mw960p center">
	<div class='conteneur mw960p'>
		<header>
			<h1>Gestionnaire de stands - Occupation</h1>
		</header>
		<div class="connect">
			Compte <?php echo $_COOKIE['login']; ?> <a href="connexion.php?kill=1" data-transition="flip">Déconnexion</a>
			<a href="desktop" data-ajax="false">Vers la version bureau</a>
		</div>
		<article class='left w60 p10 boutons' id="contenu">

			<form action="assets/addFirm.php" method="POST" data-ajax="false">
			<label for="idFirm">Id (laisser vide si nvl entrée)</label><input type="text" id="idFirm" name="idFirm" />
				<label for="firmName">Nom de l'entreprise</label><input type="text" name="firmName" id="firmName" />
				<label for="room">Numéro de la salle (3carac)</label><input type="text" size="3" name="room" id="room">
				<input type="submit" value="Soumets-moi" >
			</form>

		</article>


		<nav class='right w30' id='navigation' >
			<div id="salut"></div>
		</nav>
		<br class='clear'>
	</div>

</body>
</html>


 