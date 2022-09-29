<?php
require_once("../config/setting.php");
require_once("requests.php");


	$Sender = $_SESSION['lastname'].".".$_SESSION['firstname']."@my-digital-school.org";
	$Receiver = $_POST['receiver']."@my-digital-school.org";
	$Message = $_POST['message'];

               
        $req= "INSERT INTO trades (sender, receiver, message, status) VALUES (:sender,:receiver,:message,:statut)";

        $TabValeurs = [
            "sender"	=> $Sender,
            "receiver" 	=> $Receiver,
            "message" 	=> $Message,
            "statut" 	=> 1];
        $stmt = $db->prepare($req);
        $stmt->execute($TabValeurs);

        if(!$stmt){						
            echo "ca bug";
        }
        else{
            $nblignes = $stmt->rowCount();	
                if($nblignes>0){ 
                $_SESSION['sended'] = true;
                header("Location: ../index.php");


                        }
                else
                {
                    echo " Erreur durant l'importation";
                }
                                		
		}
    

?>