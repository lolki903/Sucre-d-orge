<?php 

session_start();
//include('../config/setting.php');
//include('../controller/requests.php');

if(isset($_SESSION['lastname']) == null || isset($_SESSION['lastname']) == ""){
    header('Location: /controller/login.php');
}
else{
$lastname = $_SESSION['lastname'];
$firstname = $_SESSION['firstname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>HELLOOOOOO <?php echo $firstname; ?></p>
    <a href="/controller/disconect.php"> déconnexion</a>

    <?php 
        //GetAllUsers($db);

        
    ?>
</body>
</html>
