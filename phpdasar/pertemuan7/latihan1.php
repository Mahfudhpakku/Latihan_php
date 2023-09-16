<?php
// $_GET

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


var_dump($_GET);


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <H1>Daftar Mahasiswa</H1>

    <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>"><?= $mhs["nama"] ; ?></a>
        </li>
    <?php endforeach ; ?>
    </ul>
</body>
</html>