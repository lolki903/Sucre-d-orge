<?php 
//setting
include('config/setting.php');
 ?>
 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="connexion.css">
	<title>Se connecter</title>
</head>
<body>

	<main class="login-form">
		<form action="core/login.php" method="POST">
			<h1>Se connecter</h1>
         <div class="content">
			<div class="input-field">
				<input type="text" name="form_email" placeholder="Email" id="coemail" required  >
            </div>
			<div class="input-field">
				<input type="password" name="form_motdepasse" id="copassword" placeholder="mot de passe" required >
            </div>
            </div>
			<p class="action">
				<button  type="submit">Se connecter</button>
			</p>
		</form>
	</main>
</body>
</html>