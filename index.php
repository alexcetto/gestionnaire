<?php include 'assets/base.php'; 

	if(!isset($_COOKIE['login']) && $_COOKIE['login'] != 'admin'){
		header("location: connexion.php");
	}

	include 'assets/headings.php';
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
			<?php 
				$rows = fetchCompData('');

				foreach($rows as $row) {
			        print ("<label for='$row[id]'>$row[name]</label><input type='checkbox' name='$row[name]' id='$row[id]' class='checkStand'");
			        	if($row[state]=='1') print('checked');
			        print(" />");
			    }
			?>
		</article>


		<nav class='right w30' id='navigation' >
			<div id="salut"></div>
		</nav>
		<br class='clear'>
	</div>

</body>
</html>


 