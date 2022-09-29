<?php 
//setting
include('../config/setting.php');
$message= "";
if (isset($_POST['valider'])){
$error=false;
//si $_POST est totalement vide
if (empty($_POST)) {
	$error=true;

	flash_in('error','Non !');
}else{
	$email =$_POST['form_nom'].".".$_POST['form_prenom'];
	//variable pour lire les elements dans la base de données puis association de l'input avec la donné  voulu
	$search =$db->prepare('SELECT * FROM user WHERE email = :u AND password = :p');//INSERT INTO user ( lastname, firstname, email, password, type) VALUES ( :l, :f, :e, :p, :j) '
	$search->execute([
		':u'=>$email.'@my-digital-school.org',
		':p'=>crypt_password($_POST['form_motdepasse']),
	]);
	//Si les inforlation ne sont pas inscrit dans la base de donnée
	if ($search->rowcount() == 0) {
		flash_in('error','les identifiants ne correspondent pas');
		$error=true;

	}else{
		//Sinon cration de la variable data qui aura pour function de chercher les information demander dans la base de donnée
		$data =$search->fetch(PDO::FETCH_ASSOC);

		//Reprendre la session de l'user en le chercher grace a la variable data
		$_SESSION['lastname'] = $data['lastname'];
		$_SESSION['firstname'] = $data['firstname'];
		$_SESSION['type'] = $data['type'];
	}
}
//Si une erreur se produit pendant le script redirection immédiat vers la page login
if ($error) {
	$message ="<p class='alert alert-danger text-center' role='alert' color='red' class='alert-heading'> Adresse email ou mot de passe incorect !</p>";
}

else{
	header('Location: ../index.php');	
}
}

include('../view/login.php');