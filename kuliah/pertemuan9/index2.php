<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM siswa");

// untuk menampilkna jika error
// if( !$result ) {
//     echo mysqli_error($conn);
// } 

// var_dump($result);


// ambil data (fetch)dari objek result 
// mysqli_fetch_row() // numerik / angka
// mysqli_fetch_assoc() // array assosiatif
// mysqli_fetch_array() // mengembalikan numerik dan assosiatif
// mysqli_fetch_object() // 


// while($siswa = mysqli_fetch_assoc($result)) {
//     var_dump($siswa);
// }


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
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Kelas</th>
    </tr>
<?php $i = 1; ?>
<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
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
<?php endwhile; ?>
</table>

</body>
</html>