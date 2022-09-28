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
?>

<!doctype html>
<html>
<head>
    <meta>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../assets/css/chat.css">
  
</head>
<body class="bg-danger">
    <div id="app" class="container-fluid">
        <!--navbar-->
        <nav class="navbar navbar-light bg-danger">
            <form class="form-inline">
              <button class="btn btn-outline-light" type="button">Administrateurs</button>
            </form>
            <div class="logo">
                <img src="src/images/logo.gif" alt="this slowpoke moves"  width="100" />
            </div>
          </nav>
          <p>HELLOOOOOO <?php echo $firstname; ?></p>
         <a href="/controller/disconect.php"> déconnexion</a>
         <?php 
               $tab= GetAllUsers($db);        
         ?>
        <!--navbar-->
        <!--content-->
        <div class="row">
        <!--contacts-->
            <div class="col-3">
                <div class="row mt-2">
                    <div class="col-4">
                        <img width="100%" id="avatarSucre" class= "" src="src/images/candy.png" class="img-fluid" alt="hero">
                    </div>
                    <div class="col-7 pt-5">
                        <h5 id="botSpider">Sucre d'orge</h5>
                    </div>
               </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <img width="100%" id="avatarUser" class= "rounded-circle" src="src/images/santa.png" class="img-fluid" alt="hero">
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
            <form autocomplete = "off" id="myForm" class="fixed-bottom">
                <div class="typing-message row">
                    <div class="col-9">
                        <div class="input-group mb-3 center justify-content-left">
                            <input type="text" id="input" placeholder="Votre message" value="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <button type="submit" id="btnsubmit" class="btn btn-light">Envoyer</button>
                        </div>
                    </div>
                    <ul class="list"></ul>
                </div>
            </form>
    </div>
    <script src="assets/js/panel.js"></script>
</body>
</html>