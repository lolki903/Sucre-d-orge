<?php 
//setting
include('config/setting.php');
 ?>
 
<!DOCTYPE html>
<html>
<head>
	
	<title>Se connecter</title>
</head>
<body>
	<main class="se_connecter">
		<form action="core/login.php" method="POST">
			<h1>Se connecter</h1>
			<p>
				<input type="text" name="form_email" placeholder="Email" id="coemail" required  >
			</p>
			<p>
				<input type="password" name="form_motdepasse" id="copassword" placeholder="mot de passe" required >
			</p>

			<p>
				<button id="bouton" type="submit">Se connecter</button>
			</p>
		</form>
	</main>
</body>
</html>