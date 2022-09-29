

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Connexion Sucre d'orge</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="../assets/css/connexion.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="bg-danger">
<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="POST">
	<div class="container">
		<div class="row justify-content-center text-center p-5">
			<div class="card" style="width: 48rem;">
					<div class="card-header">Se connecter</div>
						<input class="form-control" type="text" name="form_email" placeholder="Email" required>
						<input class="form-control" type="password" name="form_motdepasses" placeholder="Mot de passe" required>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
	<a href="inscription.php">	<button type="submit" name="valider" class="btn btn-light btn-lg" required>Je m'inscris</button></a>
	  <button type="button" class="btn btn-light btn-lg" required>Je me connecte</button>
	</div>
  </form>			
  <p> <?php if(isset($message) !== "" || isset($message) !== null){echo $message;}else{} ?></p>
</div>

</body>
</html>