<?php
    include_once 'assets/base.php';

    if($_GET['kill']==1){
    	$_COOKIE['login'] = setcookie('login',$name, 1, '/', null, false, true);
    }

	include 'assets/headings.php';
?>
<body class="mw960p center" onload="refreshTable();">
	<div class='conteneur mw960p'>
		<header>
			<h1>Gestionnaire de stands</h1>
		</header>

		<article class='left w60 p10 boutons' id="connexion">
			<form method="post" action="assets/userConnect.php" data-ajax="false">
				<input type="text" name="login" id="login" placeholder="Login" autofocus="autofocus" />
				<input type="password" name="pwd" id="pwd" placeholder="Password" />
				<input type="submit" id="subConnect" value="Connexion" />
			</form>
		</article>

		<br class='clear'>
	</div>

</body>
</html>


 