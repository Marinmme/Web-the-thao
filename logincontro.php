<?php


if (count($_POST) > 0) {
    $username = $_POST["Email"];
    $pass = $_POST["Password"];
    if ($username == "nam@gmail.com" && $pass == "12345") {
        session_start();
        $_SESSION["user_name"] = $username;
        
       header("Location: index.php");
       
    }
}
?>
