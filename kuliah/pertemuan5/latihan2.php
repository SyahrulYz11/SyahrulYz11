<?php
// // ARRAY multidimensi
// // array didalam array

// $mahasiswa = [
//     ["Syahrul Yazid Muharom", "213040091", "syahrulyazid817@gmail.com","Teknik Informatika"],  
//     ["Angga Kusuma", "213040051", [1,2,3],"anggakusuma@gmail.com", "Teknik Informatika"]
// ];
// echo $mahasiswa[1][2][1];
// echo"<br>";
// echo $mahasiswa[0][1];

// Pengulangan pada array
// for / foreach
$angka = [1,3,5,7,8,9,10];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Latihan 2</title>
  <style>
      .kotak {
          width: 50px;
          height: 50px;
          background-color: salmon;
          text-align: center;
          line-height: 50px;
          margin: 3px;
          float: left;
      }
      .clear { clear: both;}
  </style>
</head>
<body>

<!-- cara pertama -->
<?php for( $i = 0; $i < count($angka); $i++ ) {?>
    <div class="kotak"><?php echo $angka[$i];?></div>
<?php } ?>

<div class="clear"></div>

<!-- cara kedua -->
<?php foreach( $angka as $a) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<!-- cara ketiga -->
<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>


</body>
</html>