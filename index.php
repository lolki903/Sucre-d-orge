<?php 
//setting
include('config/setting.php');
 ?>
 
<!DOCTYPE html>
<html>
<head>
	
	<title>Créer un compte</title>
</head>
<body>
<?php //creation du form?>
	<main class="creation_compte">
		<form action="core/adduser.php" method="POST">
			<h1>CREER UN COMPTE </h1>
			<div>
			<p>
				<input type="text" name="form_nom" placeholder="Nom" class="name fr" >
			</p>
			<p>
				<input type="text" name="form_prenom" placeholder="Prénom"class="firstname fr" >
			</p>
			</div>
			<p>
				<input type="email" name="form_email" id="email" placeholder="Email">

			</p>
			<p>
				<input type="password" name="form_motdepasse" id="password" placeholder="Mot de passe" required >
			</p>
				<p>
				
				<input type="password" name="form_motdepasses" id="confirm" placeholder="Confirmation mot de passe" required >
			</p>
			<p>
				<button type="submit" id="bouto">CRÉATION DU COMPTE</button>
			</p>
		</form>
	</main>
</body>
</html>