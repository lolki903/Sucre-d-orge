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
    
	$req="SELECT user.email, trades.email_id, user.lastname, user.firstname, trades.receiver, FROM trades LEFT JOIN user ON trades.email_id = user.id";
	$stmt = $db->prepare($req);
	$stmt->execute();
	if(!$stmt){
			
	    echo "connexion a la bbd marche pas";
	}
	else{
		$nblignes = $stmt->rowCount();
	    if($nblignes>=1){
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				echo $row["email"]."<br>" ;			
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