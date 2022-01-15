<?php 
require_once("../db/db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "in";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $gmail = $_POST["gmail"];
    $password = $_POST["password"];
    $address = $_POST["address"];

    $sql = "insert into users(name, phone, gmail, password, address, role_id) values ('$name', '$phone', '$gmail', '$password','$address',2)";
    if ($con->query($sql)) {
        header("location:../login/login.php");

       echo"saved";
        header("Location:../login/login.php");
    }else{
        echo "failed"; 
    }
}



?>