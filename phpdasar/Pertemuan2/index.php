<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r // dipakai untuk debugging
// var_dump // dipakai untuk debugging

// echo "Mahfudhpakku";


// Penulisan sintaks PHP
/*
1. PHP di dalam HTML
2. HTML di dalam PHP 
*/

// Variabel dan Tipe Data
// Variabel (untuk menampung sebuah nilai)
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Mahfudh";
// echo $nama

// Operator
// aritmatika
// tambah
// kurang
// bagi
// modulus

// $x = 10;
// $y = 20;
// echo $x + $y;

// penggabung string / concatenation / concat
// .
// $namaDepan = "Mahfudh";
// $namaBelakang = "pakku";
// echo $namaDepan . " " . $namaBelakang

// Assigment 
// =, +=, -=, *=, %=, .=
// $x = 1
// $x += 5
// echo $x

// $nama = "Mahfudh";
// $nama .= " ";
// $nama .= "Pakku";
// echo $nama

// Perbandingan
// <, >, <=, >=, ==, !=
// +------------------------------

// identitas
// ===, !==
// var_dump(1 === "1")


// Logika
// &&, ||, !
// $x = 10;
// var_dump($x < 20 && $x % 2 == 0);
// ?>




<!-- PHP DI DALAM HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halo, Selamat datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?> </p>
</body>
</html>