<?php 
// Array associative
// Array yang index-nya String

$mahasiswa = [
    [
        "nama" => "Syahrul Yazid Muharom", 
        "npm" => "213040091", 
        "email" => "syahrulyazid817@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Yazid Muharom", 
        "npm" =>"213040092", 
        "email" => "yazid817@gmail.com", 
        "jurusan" => "Teknik Industri"
    ],
    [
        "nama" => "Muharom", 
        "npm" => "213040093", 
        "email" => "muharom17@gmail.com", 
        "jurusan" => "Teknik Mesin"
    ]
];

// var_dump($mahasiswa[1]["email"]);
?>

<?php foreach( $mahasiswa as $mhs) { ?>
    <ul><?php  ?>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NPM : <?php echo $mhs["npm"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
    </ul>
<?php } ?>

<hr>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <?php foreach($mhs as $key => $value) { ?>
            <li><?php echo $key; ?>: <?php echo $value; ?></li>
        <?php } ?>
    </ul>
<?php } ?>
