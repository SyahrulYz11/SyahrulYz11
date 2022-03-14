<?php
$mahasiswa = [
    ["Syahrul Yazid Muharom", "213040091", "Teknik Informatika", "syahrulyazid817@gmail.com"],
    ["Yazid Muharom", "213040092", "Teknik Industri", "yazid817@gmail.com"],
    ["Muharom", "213040093", "Teknik Mesin", "muharom817@gmail.com"]

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
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>E-mail : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>


<!-- Sebelum array multi dimensi -->
<!-- cara 1 (manual)-->
<ul>
    <li>Syahrul Yazid Muharom</li>
    <li>213040091</li>
    <li>Teknik Informatika</li>
    <li>syahrulyazid817@gmail.com</li>
</ul>

<!-- cara 2 -->
<ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li><?= $mhs; ?></li>
    <?php endforeach; ?>
</ul>

<!-- cara 3 -->
<ul>
    <li><?= $mahasiswa[0]; ?></li>
    <li><?= $mahasiswa[1]; ?></li>
    <li><?= $mahasiswa[2]; ?></li>
    <li><?= $mahasiswa[3]; ?></li>
</ul>

</body>
</html>