<?php

// deklarasi variabel
$db_host = "localhost";
$db_user = "root";
$pass = "";
$db_name = "db_sekolah";

$connection = mysqli_connect($db_host, $db_user, $pass, $db_name);

if($connection){
    // echo "Koneksi sukses!";
} else {
    echo "Koneksi gagal!: ". mysqli_connect_error();
}