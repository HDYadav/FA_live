<?php
session_start();
session_destroy();
//header("location:../index.php");
header('Location: ' . $_SERVER['HTTP_REFERER']);
/*echo 'You have been logged out. <a href="index.php">Go back</a>';*/
?>