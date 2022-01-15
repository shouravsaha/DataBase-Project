<?php 
session_start();
require_once("../db/db.php");
$user_id = $_GET["id"];

$query = "delete from users where id='$user_id'";
if ($con->query($query)) {
  $_SESSION["delete_msg"]="User Deleted";
  header("location:user-table.php");
}else{
  echo "Delete Failed";
}







?>