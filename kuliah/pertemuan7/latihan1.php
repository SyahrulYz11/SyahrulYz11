<?php 
// $_GET
$mahasiswa = [
	    [
        "nama" => "Syahrul Yazid Muharom",
        "npm" => "213040091", 
        "email" => "syahrulyazid817@gmail.com", 
        "prodi" => "teknik informatika",
        "gambar" => "DSC_0032.JPG"
        ], 
        [
        "nama" => "Yazid Muharom",
        "npm" => "213040092", 
        "email" => "yazidmuharom@gmail.com", 
        "prodi" => "teknik informatika",
        "gambar" => "img2.png"
        ],
        [
        "nama" => "Muharom",
        "npm" => "213040092", 
        "email" => "muharom@gmail.com", 
        "prodi" => "teknik informatika",
        "gambar" => "img3.png"
        ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&prodi=<?= $mhs["prodi"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>