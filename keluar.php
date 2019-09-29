<?php
session_start(); //memulai session
unset($_SESSION['adminidx']);
header('location: login.php');
session_destroy();
?>
