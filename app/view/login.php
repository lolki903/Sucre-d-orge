<?php 

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Connexion Sucre d'orge</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="../assets/css/connexion.scss">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/login.css">

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
<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="POST">
	<div class="container">
		<div class="row justify-content-center text-center p-5">
			<div class="card" style="width: 48rem;">
					<div class="card-header">Se connecter</div>
						<input class="form-control" type="text" name="form_email" placeholder="Email" required>
						<input class="form-control" type="password" name="form_motdepasse" placeholder="Mot de passe" required>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
<<<<<<< HEAD
		<button type="submit" name="valider" class="btn btn-light btn-lg" required><a href="adduser.php">Je m'inscris</a></button>
=======
	<button type="submit" name="valider" class="btn btn-light btn-lg" required> <a href="adduser.php">	Je m'inscris</a></button>
>>>>>>> 9fd7df71f96f8cbda1534972ccb65ea7c40fb2c1
	  <button type="submit" name="valider" class="btn btn-light btn-lg" required>Je me connecte</button>
	</div>
  </form>			
  <p> <?php if(isset($message) !== "" || isset($message) !== null){echo $message;}else{} ?></p>


</div>
</div>

</body>
</html>