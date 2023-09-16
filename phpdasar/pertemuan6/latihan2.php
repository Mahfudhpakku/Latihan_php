<?php
// $mahasiswa =  [
//     ["Mahfudh", 2193912893, "Teknik Informatika", "mahfudh58ui@gmail.com"],
//     ["Naufal", 12893182387, "Agribisnis", "nflrfqz@gmail.com"],
//     ["Mando", 53453345345, "Teknik Industri", "mandonapitupulu.com"],
// ];
// 

// Array Associative
// Definisinya sama seperti array numerik, kecuali
// key-nya adlaah string yang kita buat sendiri
// tidak punya index, tp punya key yang berbentuk string

$mahasiswa = [
    [
        "nama" => "Mahfudh", 
        "nrp" => "1092389198",
        "email" => "mahfudh58ui@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "mahfudh.jpg",
        ],
    [
        "nama" => "vicidior", 
        "nrp" => "893672987324",
        "email" => "vcidior@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "mahfudh.jpg",
        ],
    [
        "nama" => "Naufal", 
        "nrp" => "12748012704",
        "email" => "nflrfqz@gmail.com",
        "jurusan" => "Agribisnis",
        "gambar" => "mahfudh.jpg",
    ],
    [
        "nama" => "Mando", 
        "nrp" => "1283128",
        "email" => "hotsumando@gmail.com",
        "jurusan" => "Teknik Indsutri",
        "gambar" => "mahfudh.jpg",
    ],
];


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        .list {
            list-style-type: none;
        }
    </style>
</head>
<body>

    <h1>Data Mahasiswa</h1>
    <hr>
    
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul class="list">
            <li><img src="img/<?= $mhs["gambar"] ?>" ></li>
            <li>Nama : <?= $mhs["nama"] ; ?></li>
            <li>NRP : <?= $mhs["nrp"] ; ?></li>
            <li>Email : <?= $mhs["email"] ; ?></li>
            <li>Prodi : <?= $mhs["jurusan"] ; ?></li>
        </ul>
    <?php endforeach ; ?>
    
</body>
</html>

