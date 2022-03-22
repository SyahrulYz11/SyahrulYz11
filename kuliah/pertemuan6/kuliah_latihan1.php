<?php
// Array Numerik
// Array yang Index-nya berasosiasi / berpasangan dengan angka

$mahasiswa = [
    ["Syahrul Yazid Muharom", "213040091", "syahrulyazid817@gmail.com", "Teknik Informatika"],
    ["Yazid Muharom", "213040092", "yazid817@gmail.com", "Teknik Industri"],
    ["Muharom", "213040093", "muharom17@gmail.com", "Teknik Mesin"]
];

// var_dump($mahasiswa[1][3]);

?>

<?php foreach( $mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs[0]; ?></li>
    <li>NPM : <?php echo $mhs[1]; ?></li>
    <li>Email : <?php echo $mhs[2]; ?></li>
    <li>Jurusan : <?php echo $mhs[3]; ?></li>
</ul>
<?php } ?>
