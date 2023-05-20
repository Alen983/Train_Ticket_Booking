<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login2.php");
        exit();
    }
?>
