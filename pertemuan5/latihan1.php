<?php 
// array
// variable yang dapat memiliki banyak nilai
// elemen pada arry boleh memiliki tipe data yang berbeda

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");

// cara baru
$bulan = ["januari", "februari", "maret"];

// menampilkan array
// var_dump() / print_r()

// var_dump($hari );
// echo "<br>";
// print_r($bulan);

// menampilkan 1 elemen pada array

// echo $bulan[2];

// menambahkan elemen baru pada array

var_dump($hari);
$hari[] = "kamis"; 
$hari[] = "jumat";
echo "<br>";
var_dump($hari);
?> 