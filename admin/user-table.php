<?php 
session_start();
require_once("../db/db.php");
$query = "select users.*, roles.name as role_name from users inner join roles on users.role_id = roles.id";
$users = $con->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">All Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../Home page/logout.php">Logout</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1 class="m-5 text-center">This is all Users Page</h1>


<table class="table table-striped">
  <thead class="bg-dark text-light text-center">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Gmail</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Role</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $users->fetch_assoc()) { ?>
    <tr class="text-center">
      <td><?php echo $row["name"]?></td>
      <td><?php echo $row["gmail"]?></td>
      <td><?php echo $row["phone"]?></td>
      <td><?php echo $row["address"]?></td>
      <td><?php echo $row["role_name"]?></td>
      <td><a class="btn btn-primary" href="user-edit.php?id=<?php echo $row["id"];?>">Edit</a></td>
      <td><a class="btn btn-danger" href="user-delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
<?php if( isset ($_SESSION["msg"]) &&  $_SESSION["msg"]){?>
  <div class="alert alert-success" role="alert">
  <?php echo $_SESSION["msg"]?>
  </div>
<?php } ?>
<?php if( isset ($_SESSION["delete_msg"]) &&  $_SESSION["delete_msg"]){?>
  <div class="alert alert-danger" role="alert">
  <?php echo $_SESSION["delete_msg"]?>
  </div>
<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>