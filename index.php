<?php 
//setting
include('config/setting.php');
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=7">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="inscription.css" rel="stylesheet" type="text/css" media="all" />
	<title>Créer un compte</title>
</head>
<body>
<?php //creation du form?>
	<main class="main-w3layouts wrapper">
		<h1>CREER UN COMPTE </h1>
		<div class="main-agileinfo">
		<div class="agileits-top">
		<form action="core/adduser.php" method="POST">
			<div>
			<p>
				<input class="text" type="text" name="form_nom" placeholder="Nom" class="name fr" >
			</p>
			<p>
				<input class="text" type="text" name="form_prenom" placeholder="Prénom"class="firstname fr" >
			</p>
			</div>
			<p>
				<input class="text" type="text" name="form_email" id="email" placeholder="@my-digital-school.org">

			</p>
			<p>
				<input type="password" name="form_motdepasse" id="password" placeholder="Mot de passe" required >
			</p>
				<p>
				
				<input class="text w3lpass"type="password" name="form_motdepasses" id="confirm" placeholder="Confirmation mot de passe" required >
			</p>
			<div class="wthree-text">
						<div class="clear"> </div>
					</div>
			<p>
				<button type="submit" id="bouto">CRÉATION DU COMPTE</button>
			</p>
		</form>
		</div>
	</div>
	</main>
	<!-- //copyright -->
	<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
</body>
</html>