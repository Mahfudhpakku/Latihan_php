<?php
    // Date 
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    //Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // Digunakan untuk tenggat waktu diskon ex.
    // Cara emngetahui umur seseorang dari tanggal lahirnya ex.
    // echo date("l", time()+172800);
    //Pembacaan : Tampilkan hari saat ini ditambah 172.... detik

    // CARA LAIN (langusng menggunakan op matematika)
    // echo date("l", time()+60*60*24*2);
    // Untuk menghitung hari kebelakang engganti + menjadi mines

    // MKTIME
    // Membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam , menit, detik, bulan, tanggal, tahun
//    echo date("l", mktime (0, 0, 0, 8, 15, 2002)); 

// strtotime
echo date("l", strtotime("26 Aug 2002"));
?>