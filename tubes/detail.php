<?php
require 'functions.php';

$id = $_GET['id'];

$row = query("SELECT * FROM buku WHERE id = $id")[0];

if(isset($_GET['cari'])) {
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM buku 
              WHERE
              judul LIKE '%$keyword%'
              ";
    $row = query($query);
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Buku</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body>
  <div>
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <img src="img/<?= $row['gambar']; ?>" width="350px" id="zoom" alt="" class=" mx-auto d-block">
        </div>
      </div>
      <div class="row">
        <div class="col">
            <ul class="col">
                <ul><h5 style="font-style: bold;">Judul:</h5><?= $row['judul'] ?></ul>
                <ul><h5 style="font-style: bold;">Penulis:</h5><?= $row['penulis'] ?></ul>
                <ul><h5 style="font-style: bold;">Penerbit:</h5><?= $row['penerbit'] ?></ul>
                <ul><h5 style="font-style: bold;">Tahun Terit:</h5><?= $row['tahun_terbit'] ?></ul>
                <ul><h5 style="font-style: bold;">ISBN:</h5><?= $row['isbn'] ?></li>
            </ul>
          <ul><a href="index.php" class="btn btn-primary mt-3 shadow">Kembali</a></ul>
        </div>
      </div>
    </div>
  </div>
</body>

</html>