<?php
session_start();
if ($_SESSION['status'] != 'login') {
    echo "<script>
    alert('Anda belum login!');
    location.href='../index1.php';
    </script>";

}
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE GALERI</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">website galeri foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNav">
      <div class="navbar-nav me-auto">
        <a href="album.php" class="nav-link">Album</a>
      </div>
       
        <a href="../config/aksi_logout.php" class="btn btn-outline-danger m-1">keluar</a>
    </div>
  </div>
</nav>
