<?php 
// SUPERGLOBALS
// Variabel milik PHP yang bisa kita gunakan
// bentuknya array associative
// $_GET
// $_POST
// $_SERVER
// $_GET ["nama"] = "Syahrul";
// $_GET ["email"] = "syahrulyazid817@gmail.com";

// var_dump($_GET);
// var_dump($_POST);
if(isset($_GET["nama"])) {
    $nama = $_GET["nama"];
} else {
    $nama = 'tidak diketahui';
}

?>

<h1>Hallo, <?php echo $nama; ?></h1>

<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=Gumelar">Gumelar</a>
    </li>
</ul>
<ul>
    <li>
        <a href="?nama=Yazid">Yazid</a>
    </li>
</ul>