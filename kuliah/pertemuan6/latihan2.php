<?php 
// $mahasiswa = [
//     ["Syahrul Yazid Muharom", "213040091", "syahrulyazid817@gmail.com","Teknik Informatika"],
//     ["Yazid Muharom", "213040092", "yazid817@gmail.com","Teknik Informatika"],
//     ["Muharom", "213040093", "muharom817@gmail.com","Teknik Informatika"]
// ];

// Array associative
// definisinya sama seperti array numerik, kecuali 
// key-nya adalah string yng kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Syahrul Yazid Muharom", 
        "npm" => "213040091", 
        "email" => "syahrulyazid817@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "DSC_0032.JPG"
    ],
    [
        "nama" => "Yazid Muharom", 
        "npm" =>"213040092", 
        "email" => "yazid817@gmail.com", 
        "jurusan" => "Teknik Industri",
        "gambar" => "img3.png"
    ]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul><?php  ?>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NPM : <?=$mhs["npm"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>