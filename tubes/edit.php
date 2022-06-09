<?php 
require 'functions.php';


$id = $_GET["id"];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];


if(isset($_POST['ubah'])) {

    if(ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php'
             </script>";
    }  

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

    <title>Ubah Data Buku</title>
  </head>
  <body>

    <div class="container">
        <h1>Form Ubah Data Buku</h1>
        
        <a href="index.php" class="btn btn-outline-primary">Kembali ke Daftar Buku</a>

        <div class="row mt-3">
            <div class="col-8">

                <form action="" method="post" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $buku ["id"]; ?>">

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required 
                    value="<?= $buku ["judul"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" required;
                    value="<?= $buku ["penulis"]; ?>"> 
                </div>    

                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku ["penerbit"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $buku ["tahun_terbit"]; ?>">
                </div>    
                
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="<?= $buku ["isbn"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $buku ["gambar"]; ?>">
                </div>    
                
                <button type="submit" class="btn btn-primary" name="ubah">ubah Data</button>

                </form>
            
            </div>
        </div>

    </div>
  </body>
</html>