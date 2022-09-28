<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Panel administrateur</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
   </head>
   <body class="bg-dark">

      <!-- A horizontal navbar that becomes vertical on small screens -->
      <nav class="navbar navbar-expand-sm bg-dark">
      <ul class="nav nav-pills">
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="../view/panelmsg.php">Liste des messages</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Déconnexion</a>
    </li>
    </ul>
      </nav>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>

      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
    
    <td>Jadfdfqdfqsfdfqfqsfqdf</td>
      <td>fqdfqfqdfqfqdfqdfqdn</td>
      <td>dfnmqdfmqd@fdlqdflqdlf</td>
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