<?php

    session_start();

    
   if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $_SESSION["username"] = $_POST["username"];

   }
 
   header("Location: welcome.php");


?>
