<?php
include('../config/setting.php');
include('../controller/requests.php');

if($_SESSION['type'] !== 1){
    header('Location: ../index.php') ;
}else{

if(isset($_GET['page'])  AND $_GET['page'] > 0){
	$_GET['page'] = intval($_GET['page']);
	$currentPage = $_GET['page'];
}else{
  $currentPage = 1;
}
$sql = 'SELECT COUNT(*) AS nb_message FROM `trades`';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['nb_message'];
$parPage = 5;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);
// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;
$sql = 'SELECT * FROM `trades` LIMIT :premier, :parpage;';

// On prépare la requête
$query = $db->prepare($sql);

$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$articles = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Panel administrateur</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
      
      <link rel="stylesheet" type="text/css" href="../assets/css/panelmsg.css">
   </head>
   <body class="bg-dark">

      <!-- A horizontal navbar that becomes vertical on small screens -->
      <nav class="navbar navbar-light bg-danger">
      <ul class="nav nav-pills">
        
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="../view/paneluser.php?page=1">Liste des utilisateurs</a>
    </li>
    <li class="nav-item">
    </li>
    <li class="nav-item">
    <a class="nav-link" href="../controller/disconect.php">Déconnexion</a>
    </li>

    </ul>
    <div class="logo">
                <img src="../assets/images/logo.gif" alt="this slowpoke moves"  width="100" />
            </div>
      </nav>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col-1">Email envoyeur</th>
      <th scope="col-2">Email receveur</th>
      <th scope="col-3">Message</th>
      <th scope="col-4">Statuts</th>
      <th scope="col-5">Actions</th>
    </tr>
  </thead>
  <tbody>
   <?php GetTrades($db,$parPage); ?>
  </tbody>
</table>
<nav aria-label="Page de navigation">
  <ul class="pagination">
  <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
            <a href="?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
        </li>
        <?php for($page = 1; $page <= $pages; $page++): ?>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                <a href="?page=<?= $page ?>" class="page-link"><?= $page ?></a>
            </li>
        <?php endfor ?>
            <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
            <a href="?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
        </li>
  </ul>
</nav>
   </body>

   <?php } ?>