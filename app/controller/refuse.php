<?php
require_once("../config/setting.php");
require_once("requests.php");

	    $sender = $_POST['sender'];              
        $req= "UPDATE trades SET status = 2 WHERE trades.sender = :Sender";

        $TabValeurs = ["Sender"	=> $sender];
        $stmt = $db->prepare($req);
        $stmt->execute($TabValeurs);

        if(!$stmt){						
            echo "ca bug";
        }
        else{
            $nblignes = $stmt->rowCount();	
                if($nblignes>0){ 
                header("Location: ../view/panelmsg.php");

                        }
                else
                {
                    header("Location: ../view/panelmsg.php");
                }
                                		
		}
    

?>