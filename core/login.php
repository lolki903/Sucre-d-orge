<?php 
//setting
include('../config/setting.php');

$error=false;
//si $_POST est totalement vide
if (empty($_POST)) {
	$error=true;

	flash_in('error','Non !');
}else{
	//variable pour lire les elements dans la base de données puis association de l'input avec la donné  voulu
	$search =$db->prepare('SELECT * FROM user WHERE email = :u AND password = :p');
	$search->execute([
		':u'=>$_POST['form_email'],
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
		$_SESSION['user'] = $data;
	}
}
//Si une erreur se produit pendant le script redirection immédiat vers la page login
if ($error) 
	header('Location: ../login.php');

else
	header('Location: ../home.php');
	

exit();