<?php 

function GetAllUsers($db,$parPage){
	$start = $_GET['page'];
	$depart = ($start - 1) * $parPage;
	$req="SELECT lastname, firstname, email FROM `user`LIMIT $depart, $parPage";
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


function GetTrades($db,$parPage){
	if(isset($_GET['page'])){
			$_GET['page'] = intval($_GET['page']);
			$currentPage = $_GET['page'];
		}else{
			$currentPage = 1;
		}
	$depart = ($currentPage - 1) * $parPage;
	$req="SELECT trades.sender , trades.receiver ,trades.message ,trades.status , status.type FROM `trades` LEFT JOIN status ON trades.status = status.id LIMIT $depart, $parPage";
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
				echo "<tr> <td> $row[sender] </td> <td> $row[receiver] </td> <td> $row[message] </td> <td class='$class'>$row[type]</td> <td><button href='#'>valide</button>   <button href='#'>refuse</button></td></tr>";
			}
				
		}

		else{
			return null;
		}
			
		}
	
}



?>