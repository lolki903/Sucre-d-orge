<!DOCTYPE html>
<html>
<head>
	
	<title>Se connecter</title>
</head>
<body>
	<main class="se_connecter">
		<form method="POST">
			<h1>Se connecter</h1>
			<p>
				<input type="text" name="form_email" placeholder="Email" id="coemail" required  > @my-digital-school.org
			</p>
			<p>
				<input type="password" name="form_motdepasse" id="copassword" placeholder="mot de passe" required >
			</p>

			<p>
				<button id="bouton" type="submit">Se connecter</button>
				<a href="adduser.php">S'inscrire</a>
			</p>
			<p> <?php echo $message; ?></p>
		</form>
	</main>
</body>
</html>