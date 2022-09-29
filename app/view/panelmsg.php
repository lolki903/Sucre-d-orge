<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Panel administrateur</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/panelmsg.css">
   </head>
   <body class="bg-dark">

      <!-- A horizontal navbar that becomes vertical on small screens -->
      <nav class="navbar navbar-light bg-danger">
      <ul class="nav nav-pills">
        
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="../view/paneluser.php">Liste des utilisateurs</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="../view/index.php">Accueil</a>
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
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td> <button type="button" class="btn btn-primary"> <i class="bi bi-check-lg"></i></button>
       <button type="button" class="btn btn-primary"> <i class="bi bi-x"></i></button></td>
    </tr>
    <tr class="d-flex">

      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
    
    <td>Jadfdfqdfqsf@dfqfqsfqdf</td>
      <td>fqdfqfqdf@qfqdfqdfqdn</td>
      <th class="A"><p></p></th>
    </tr>
  </tbody>
</table>
<nav aria-label="Page de navigation">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Avant">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Après">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
   </body>