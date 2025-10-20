<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
 setcookie("color", $_POST["selector-color"], time() + (60 * 60 * 24 * 30));

}

header("Location: color-elegido.php");

?>
