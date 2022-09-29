<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=7">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../assets/css/inscription.css">

	<title>Créer un compte</title>
</head>
<body class="bg-danger">
<section>
    <div class="snow1"></div>
    <div class="snow2"></div>
    <div class="snow3"></div>
	<div class="snow4"></div>
	<div class="snow5"></div>
	<div class="snow6"></div>
</section>
<nav class="navbar navbar-light bg-danger">
            <div class="logo">
                <img src="../assets/images/logo.gif" alt="this slowpoke moves"  width="100" />
            </div>
          </nav>
	<?php //creation du form?>
	<form method="POST">
	<div class="container">
		<div class="row justify-content-center text-center p-5">
			<div class="card" style="width: 48rem;">
					<div class="card-header"> S'inscrire</div>
					<div class="row">
					<div class="col">
					<div class="input-group mb-2">
					
					<input class="form-control" type="text" name="form_prenom" placeholder="Prénom" required>
					<div class="input-group-prepend">
					<div class="input-group-text">.</div>
					</div>
					
					<input class="form-control" type="text" name="form_nom" placeholder="Nom" required>
					
					<div class="input-group-prepend">
					<div class="input-group-text">@</div>
					</div>
					<input class="form-control" disabled type="text" name="form_nom" placeholder="@my-digital-school.org" required>
					</div>

						</div>
						


					</div>
						<input class="form-control frfrr" type="hidden" name="form_email" value="Adresse mail" required>
						<input class="form-control" type="password" name="form_motdepasse" placeholder="Mot de passe" required>
						<input class="form-control" type="password" name="form_motdepasses" placeholder="Repeter le Mot de passe" required>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<button type="submit" name="valider" class="btn btn-light btn-lg" style="z-index:50" required> Je m'inscris </button>
	<button type="submit" name="valider" class="btn btn-light btn-lg" style="z-index:50" required><a href="../controller/login.php"> Je me connecte </a></button>
	</div>
	</form>
</body>
</html>
</body>
</html>