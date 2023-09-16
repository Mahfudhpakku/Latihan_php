<?php
//ARRAY = Sebuah variabel yang bisa menampung lebih dari satu nilai
// Elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0





// MEMBUAT ARRAY
// Cara lama
$hari = array("Senin", "Selasa", "Rabu");
//Cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "Mahfudh", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// echo "<br>";


// Menampilkan 1 elemen pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[2];

// Menambahkan elemen baru pada array yang sudah kita buat sebelumnya
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
$hari[] = "Jumat";
var_dump($hari);










?>