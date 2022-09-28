<?php 
//include('config/setting.php');
session_start();
$lastname = $_SESSION['lastname'];
$firstname = $_SESSION['firstname'];

var_dump($lastname);
if($_SESSION['lastname'] == null || $_SESSION['lastname'] == ""){
    header('Location: /controller/login.php');
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
</body>
</html>
