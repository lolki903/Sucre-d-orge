<?php 

function GetAllUsers($db){

	$req="SELECT lastname, firstname, email FROM `user`";
	$stmt = $db->prepare($req);
	$stmt->execute();
	if(!$stmt){
			
	    echo "connexion a la bbd marche pas";
	}
	else{
		$nblignes = $stmt->rowCount();
	    if($nblignes>=1){
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				echo "<tr> <td> $row[lastname] </td> <td> $row[firstname] </td> <td> $row[email] </td> </tr>";			
			}
				
		}

		else{
			return null;
		}
			
		}
	
}


function GetTrades($db){
    
	$req="SELECT trades.sender , trades.receiver ,trades.message ,trades.status , statut.type FROM `trades` LEFT JOIN statut ON trades.status = statut.id";
	$stmt = $db->prepare($req);
	$stmt->execute();
	if(!$stmt){
			
	    echo "connexion a la bbd marche pas";
	}
	else{
		$nblignes = $stmt->rowCount();
	    if($nblignes>=1){
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$class="de";
				if($row['type']=== "EN COURS"){
					$class= "bg bg-warning";
				   };
			   if($row['type']=== "REFUSÉ"){
					   $class= "bg bg-danger";
					  };
			   if($row['type']=== "VALIDÉ"){
					   $class= "bg bg-success";
					  };	
				echo "<tr> <td> $row[sender] </td> <td> $row[receiver] </td> <td> $row[message] </td> <td class='$class'>$row[type]</td></tr>";
			}
				
		}

		else{
			return null;
		}
			
		}
	
}

/*SELECT DISTINCT  trades.email_id AS sender_id , TEST.receiver_id, user.email AS email_sender , TEST.email_receiver , trades.message FROM trades join 
(SELECT DISTINCT user.email AS email_receiver, trades.receiver AS receiver_id FROM user LEFT JOIN trades ON user.id = trades.receiver ) AS TEST LEFT JOIN user ON trades.email_id = user.id WHERE user.email != TEST.email_receiver
*/

?>