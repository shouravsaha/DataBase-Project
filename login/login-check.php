<?php
session_start();
require_once("../db/db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gmail = $_POST["gmail"];
    $password = $_POST["password"];

    $_SESSION["gmail_error"] = "";
    $_SESSION["password_error"] = "";
    $_SESSION["msg_error"] = "";

  if ($gmail !== '' && $password !== '') {
      $sql = "select * from users where gmail='$gmail' and password='$password'";
      $result = $con->query($sql);
    
      if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION["id"] = $user["id"];
        $_SESSION["gmail"] = $user["gmail"];
        $_SESSION["name"] = $user["name"];
        $role = $user["role_id"];
        if ($role == 1) {
          header("location:../admin/admin.php");
        }
        if ($role == 2) {
          header("location:../Home Page/resturent.php");
        }
      }else{
        $_SESSION["msg_error"]= "Gmail Or Password Is Not Correct Please Try Again";
        header("location:login.php");
      }
  }else{
    if ($gmail == "") {
      $_SESSION["gmail_error"]="Gmail Required";
    }
    if ($password == "") {
      $_SESSION["password_error"]="Password Required";
    }
    header("location:login.php");
  }
}
?>