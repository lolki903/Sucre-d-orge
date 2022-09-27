<?php 

//Début de la session
session_start();
//Pour se connecter a la base de données
define('SQL_HOST', 'localhost');
define('SQL_USER', 'root');
define('SQL_PASS', '');
define('SQL_DBNAME', 'sucre-orge');
try{
	//variable pour creer la connexion avec base de donnée
	$db =new PDO('mysql:dbname='.SQL_DBNAME.';charset=utf8;host='.SQL_HOST , SQL_USER , SQL_PASS);

 }catch(Exception $e){
	 //si il y a un probleme dans avec la connection sur la base de donné 
 	die('Erreur:'.$e ->getmessage());
 }

//FUNCTION
//enrigitrer un message a la suite
 function flash_in($type, $message){

 if (empty($_SESSION['message'])) 
 	$_SESSION['message']=[];

//on ajoute notre message dans le tableau des messages
 array_push($_SESSION['message'], array($type,$message));
 }
 function flash_out(){
 	if (!empty($_SESSION['message']))
 		foreach ($_SESSION['message'] as $value) {
 			echo '<p class="alert alert-'.$value[0].'">'.$value[1].'</p>';
 		}
 	//on vIDE LA MEMOIRE
 	$_SESSION['message'] = [];
 }
//FUNCTION
//On crré une fontion qui va crypt le mot de passe user
 function crypt_password($p){
 	$step1 = hash('sha512', $p);

 	$step2 ='%cbkejbccec*aejc'.$step1;

 	$step3 = hash('sha512', $step2);

 	return $step3;
 }