<?php 

function GetAllUsers($db){
    
	$req="SELECT * FROM `user`";
	$stmt = $db->prepare($req);
	$stmt->execute();
	if(!$stmt){
			
	    echo "connexion a la bbd marche pas";
	}
	else{
		$nblignes = $stmt->rowCount();
	    if($nblignes>=1){
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				echo"";			
			}
				
		}

		else{
			return null;
		}
			
		}
	
}

?>