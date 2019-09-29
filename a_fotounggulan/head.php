<?php
session_start();
if (!isset($_SESSION['adminidx'])) {
  header('Location: login.php');
  exit();
} 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foto Produk Unggulan</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" href="../img/logo2.png" type="image/x-icon" />
</head>