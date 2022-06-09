<?php 
require 'functions.php';
$siswa = query("SELECT * FROM siswa");


?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Siswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th scope="col">No.</th>
        <th scope="col">Aksi</th>
        <th scope="col">Gambar</th>
        <th scope="col">NIS</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Kelas</th>
    </tr>
<?php $i = 1; ?>
<?php foreach( $siswa as $row) : ?>
    <tr>
        <td scope="col"><?= $i; ?></td>
        <td scope="col">
            <a href="">Ubah</a>
            <a href="">Edit</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nis"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["tanggal_lahir"]; ?></td>
        <td><?= $row["kelas"]; ?></td>
    </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>