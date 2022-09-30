<?php 

include('config/setting.php');
include('controller/requests.php');

if(isset($_SESSION['lastname']) == null || isset($_SESSION['lastname']) == ""){
    header('Location: /controller/login.php');
}
else{
$lastname = $_SESSION['lastname'];
$firstname = $_SESSION['firstname'];
}
// CA fonctionne la location
if($_SESSION['type'] === 1){
    header('Location: view/panelmsg.php?page=1') ;
}else{
    
}

?>

<!doctype html>
<html>
<head>
    <meta>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/css/chat.css">
  <link rel="stylesheet" type="text/js" href="assets/js/panel.js">
  <script>
        var Nom = <?php echo json_encode($_SESSION['firstname']); ?>;
    </script>
  
</head>
<body class="bg-danger">
    <div id="app" class="container-fluid">
        <!--navbar-->
        <nav class="navbar navbar-light bg-danger">
        <ul class="nav nav-pills">
        <div class="logo">
                <img src="assets/images/logo.gif" alt="this slowpoke moves"  width="100" />
            </div>
</ul>
    </li>
    <button type="button" class="btn btn-light pull-right"><a href="../controller/disconect.php">Déconnexion</a></button>
            
          </nav>
         
        <!--navbar-->
        <!--content-->
        <?php      
        
                if($_SESSION['sended'] === 1){ ?>
                <section>
    <div class="snow1"></div>
    <div class="snow2"></div>
    <div class="snow3"></div>
	<div class="snow4"></div>
	<div class="snow5"></div>
	<div class="snow6"></div>
</section>
                <div class="container">

                <div class="alert alert-danger">


                <strong class="center">Ceci n'est plus disponible.</strong> Vous avez déjà envoyer un message.

                </div>

</div>   

                 <?php
                } else{ 
            ?>
        <div class="row">
        <!--contacts-->
            <div class="col-3">
                <div class="row mt-2">
                    <div class="col-4">
                        <img width="100%" id="avatarSucre" class= "" src="assets/images/candy.png" class="img-fluid" alt="hero">
                    </div>
                    <div class="col-7 pt-5">
                        <h5 id="botSpider">Sucre d'orge</h5>
                    </div>
               </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <img width="100%" id="avatarUser" class= "rounded-circle" src="assets/images/santa.png" class="img-fluid" alt="hero">
                    </div>
                    <div class="col-7 pt-5">
                        <h5 id="botBatman">Moi</h5>
                    </div>
                </div>
            </div>
        <!--messages + send message-->
            <div class="col-9">
        <!--messages-->
        <div id="barSendMessages" class="row">
        </div>
            <!-- typing message-->
            <form autocomplete ="off" id="myForm" class="fixed-bottom">
                <div class="typing-message row">
                    <div class="col-9">
                        <div class="input-group mb-3 center justify-content-left">
                            <input type="text" name="receiver" class="TxtName" id="inputName" onkeyup='callSearch(this.value)' placeholder="Votre destinataire" value="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <input type="text" name="message" class="TxtMsg" id="inputMessage" placeholder="Votre message" value="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <input type="submit" id="btnsubmitName" class="btn btn-light btnName"/>
                            <input type="submit" id="btnsubmitMessage" name="valider" onclick="myForm.submit()" class="btn btn-light btnMsg"/>
                        </div>
                    </div>
                    <ul class="list" id="result">
                    </ul>
                </div>
            </form>

            <?php } ?>
    </div>
    <script src="assets/js/panel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>