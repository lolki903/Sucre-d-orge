<?php
require_once("../config/setting.php");
require_once("requests.php");

function searchHeb($db,$name){
	
	$name = $_GET['name'];
	
	$req="SELECT lastname,firstname,email FROM `user` WHERE `firstname` like '%$name%' OR `lastname` like '%$name%'";
	$stmt = $db->prepare($req);
				$stmt->execute();
				if(!$stmt){
			
			echo "erreur connexion bdd";
		}
		else{
			$nblignes = $stmt->rowCount();
			if($nblignes==0){
				
			}
			else{
				
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					echo "<li class='list-items' onclick='searchlink(this.textContent,this)' style='cursor: pointer;'> <b>". substr($row['lastname'],0,1)."</b>".substr($row['lastname'],1).".<b>".substr($row['firstname'],0,1)."</b>".substr($row['firstname'],1) ."</li>";
				}
			
			}
		}
	}


$name= $_GET['name'];
searchHeb($db,$name);

?>