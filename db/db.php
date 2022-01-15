<?php
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $database = "ecommerce";

   $con = new mysqli($hostname, $username, $password, $database);
   if (!$con->connect_error) {
    //    echo "database connection successfully";
   }else{
    //    echo "error";
   }
?>