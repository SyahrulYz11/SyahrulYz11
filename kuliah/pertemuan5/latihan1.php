<?php
// // Pertemuan 5 - ARRAY
// // Array adalah variable yang bisa menampung / menyimpan banyak nilai sekalikus 

// $hari = "Senin";
// $hari2 = "Selasa";

// $bulan1 = "Januari";
// $bulan2 = "Februari";

// $mahasiswa = "Syahrul";

// // Membuat Array
// $hari = ["Senin", "Selasa", "Rabu", "Kamis"]; // cara baru
// $bulan = array("Januari", "Februari", "Maret"); // cara lama
// $myArr = [10, "Syahrul", true];

// // Mencetak Array 
// // mencetak 1 elemen di dalam aray, menggunakan index
// // dimulai dari 0
// echo $hari[0];
// echo "<br>";
// echo $bulan[2];
// echo "<br>";
// echo $myArr[0];

// // mencetak menggunakan var_dump() atau print_r
// // khusus untuk debugging

// echo "<hr>";
// var_dump($hari);
// echo "<br>";
// print_r($hari);

// echo "<hr>";

// // mencetak semua isi array menggunakan looping
// // for

// for ($i = 0; $i < count($hari); $i++) {
//     echo $hari[$i];
//     echo "<br>";
// }

// echo "<hr>";

// // foreach
// foreach($bulan as $b) {
//     echo $b;
//     echo "<br>";
// }

// echo "<hr>";

// // -> arrow
// // => fat arrow
// foreach ($bulan as $key => $value) {
//     echo "Key: $key - Value: $value";
//     echo "<br>";
// }

// echo "<hr>";

// // memanipulasi ARRAY 
// // menambah elemen baru pada akhir array
// $hari[] = "Jum'at";
// $hari[] = "Sabtu";
// print_r($hari);

// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0 

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// menampilkan 1 elemen dari array
echo $arr1[0];
echo "<br>";
echo $bulan[1];

echo "<hr>";

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

?>