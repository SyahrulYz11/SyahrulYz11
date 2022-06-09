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


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Jendela Ilmu</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <h1 class="align-midcle" style="padding: 10px;"> JENDELA ILMU</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" style="padding-left: 10px;">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item" style="padding-left: 10px;">
          <a class="nav-link active" href="awal.php">Admin</a>
        </li>
      </ul>
      <form action="" method="GET" class="mt-4" style="padding-right: 30px; padding-bottom: 15px;">
      <div class="input-group mb-2">
        <input type="text" class="form-control" name="keyword" placeholder="Masukkan Keyword Pencarian.." autocomplete="off">
        <button class="btn btn-primary" type="submit" name="cari">Cari</button>
      </div>
    </form>
    </div>
  </div>
</nav>
  <div class="container">
    <h4 style="text-align: center;">"Buku adalah sahabat paling setia rela mendampingi di mana pun dan kapan pun tanpa pernah memikirkan dirinya. Sebaik-baik teman sepanjang zaman adalah buku."</h4>

    <div class="intro">
      <h2 class="text-center" id="Daftar-Buku" style="margin-top: 110px">Daftar Buku</h2>
    </div>
    <div class="tab-content">
      <div class="row">
        <?php if (empty($buku)) : ?>
          <div class="col-md-12">
            <h1 class="text-center">Data produk tidak ditemukan!</h3>
          </div>
        <?php endif; ?>
      </div>
      <div class="tab-pane active" role="tabpanel" id="tab-1">
        <div class="card-group">
          <div class="container-fluid">
            <div class="row">
              <?php foreach ($buku as $row) : ?>
                <div class="col-md-4">
                  <div class="card shadow mt-3">
                    <img class="card-img-top img-fluid max-foto" src="img/<?= $row['gambar']; ?>" style="max-height: 300px; min-height: 50px; width:max-content; padding-left:50px; padding-top:10px">
                    <div class="card-body">
                      <h4 class="card-title" style="text-align: center;"><?= $row['judul']; ?></h4>
                      <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
                </div>
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
    <footer>
      <h5 style="text-align: center; padding:30px;" >"SEMOGA BERMANFAAT"</h5>
    </footer>
</body>

</html>