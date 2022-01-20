<?php
    //buat variabel
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_sistem1";
   //buat koneksi
    $conn = new mysqli($servername, $username, $password, $database);
    //di bawah ini hanya untuk memeriksa koneksi saja 
    if ($conn->connect_error) {
        # code...
        die("Koneksi gagal : " . $conn->connect_error);
    }else {
        # code...
        echo "Berhasil";
    }
?>
