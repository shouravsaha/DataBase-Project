<?php 
session_start();
require_once("../db/db.php");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $user_id = $_POST["user_id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $gmail = $_POST["gmail"];
    $address = $_POST["address"];

    $query = "update users set name='$name',phone='$phone',gmail='$gmail',address='$address'where id='$user_id'";
    if ($con->query($query)) {
      $_SESSION["msg"]="Successfully Updated";
      header("location:user-table.php");
    }else{
      echo "error";
    }
}
?>