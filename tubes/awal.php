<?php 
require 'functions.php';
$buku = query("SELECT * FROM buku") or die('KONEKSI GAGAL');

if(isset($_GET['cari'])) {
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM buku 
              WHERE
              judul LIKE '%$keyword%'OR
              tahun_terbit LIKE '%$keyword%'
              ";
    $buku = query($query);
  }
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Admin</title>
</head>
<body>
    <div class="container">
        <h1>Daftar Buku</h1>

        <a href="add.php" class="btn btn-primary" >Tambah Daftar Buku</a>
        
       
        <a href="index.php" class="btn btn-primary" style="text-align:right;">HOME</a>
        

        <form action="" method="get" class="mt-4">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="keyword" placeholder="Masukkan keyword pencarian.." 
            autocomplete="off">
            <button class="btn btn-outline-primary" type="submit" name="cari">Cari!</button>
        </div>
        </form>

    <table class="table">

    <tr>
        <th scope="col">No.</th>
        <th scope="col">Gambar</th>
        <th scope="col">Judul</th>
        <th scope="col">Penulis</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Tahun Terbit</th>
        <th scope="col">ISBN </th>
        <th scope="col">Aksi</th>
    </tr>
    <tbody>
            <?php $i = 1; foreach($buku as $row) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td>
                    <img src="img/<?= $row['gambar']; ?>" style="width: 150px;">
                </td>
                <td><?= $row['judul'] ?></td>
                <td><?= $row['penulis'] ?></td>
                <td><?= $row['penerbit'] ?></td>
                <td><?= $row['tahun_terbit'] ?></td>
                <td><?= $row['isbn'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn badge bg-warning">Edit</a>
                    <a href="delete.php?id=<?= $row['id']; ?>" class="btn badge bg-danger" onclick="return Confirm('yakin?');">delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
    </div>

     
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>