<!-- MENGGABUNGKAN PEMAHAMAN LATIHAN 1 DAN 2  -->
<?php
// Membuat sebuah data mahasiswa
// nama, NPM/NIM, jurusan, email
$mahasiswa = [
    ["Mahfudh", 2193912893, "Teknik Informatika", "mahfudh58ui@gmail.com"],
    ["Naufal", 12893182387, "Agribisnis", "nflrfqz@gmail.com"],
    ["Mando", 53453345345, "Teknik Industri", "mandonapitupulu.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NPM : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>