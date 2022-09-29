<?php
require_once("../config/setting.php");
require_once("requests.php");

if (isset($_POST['valider'])){
	$Sender = $_POST['Type'];
	$Receiver = $_POST['Nom'];
	$Message = $_POST['NbPlace'];
	$Status = $_POST['Surface'];

               
        $req= "INSERT INTO `trades`(`sender`, `receiver`, `message`, `status`) VALUES (':sender',':receiver',':message',:status)";

        $TabValeurs = [
            "sender"	=> $Type,
            "receiver" 		=> $nom,
            "message" 	=> $NbPlace,
            "status" 	=> 1];
        $stmt = $con->prepare($req);
        $stmt->execute($TabValeurs);

        if(!$stmt){						
            echo "ca bug";
        }
        else{
            $nblignes = $stmt->rowCount();	
                if($nblignes>0){ 
              //  header("location:../index.php");

                        }
                else
                {
                    echo " Erreur durant l'importation";
                }
            
                
                        		
		}
    }

?>