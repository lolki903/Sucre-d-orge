

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
	
    <h1>Vous connecter</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="Email" name="form_email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Mot de passe" name="form_motdepasse" autocomplete="new-password">
      </div>
    </div>
    <div class="action">
	  <a href="../view/inscription.php"><button type="button" class="btn btn-light btn-lg">Je m'inscris</button></a>
		<button type="button" class="btn btn-light btn-lg">Je me connecte</button>
    </div>
  </form>			
  <p> <?php if(isset($message) !== "" || isset($message) !== null){echo $message;}else{} ?></p>
</div>

</body>
</html>