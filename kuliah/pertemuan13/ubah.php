<?php 
require 'functions.php';

// Query mahasiswa berdasarkan id
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek ketika tombol ubah di-klik
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

    <title>Ubah Data Mahasiswa</title>
  </head>
  <body>

    <div class="container">
        <h1>Form Ubah Data Mahasiswa</h1>
        
        <a href="index.php" class="btn btn-outline-primary">Kembali ke Daftar Mahasiswa</a>

        <div class="row mt-3">
            <div class="col-8">

                <form action="" method="post" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $mhs ["id"]; ?>">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required 
                    value="<?= $mhs ["nama"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="number" class="form-control" id="npm" name="npm" required style="width: 130px;"
                    value="<?= $mhs ["npm"]; ?>"> 
                </div>    

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $mhs ["email"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mhs ["jurusan"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $mhs ["gambar"]; ?>">
                </div>    
                
                <button type="submit" class="btn btn-primary" name="ubah">ubah Data</button>

                </form>
            
            </div>
        </div>

    </div>
  </body>
</html>