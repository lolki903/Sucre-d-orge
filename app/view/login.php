

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Connexion Sucre d'orge</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="../assets/css/connexion.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="POST">
	
    <h1>Vous connecter</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="Email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Mot de passe" autocomplete="new-password">
      </div>
    </div>
    <div class="action">
      <button name="Valider">Connexion</button>
	<button name="Valider">	<a href="adduser.php"> Inscription </a> </button> 
    </div>
  </form>			
  <p> <?php if(isset($message) !== "" || isset($message) !== null){echo $message;}else{} ?></p>
</div>

</body>
</html>