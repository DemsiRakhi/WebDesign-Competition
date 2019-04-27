<?php

$host = "localhost";
$db = "tugasakhir";
$uname = "root";
$pass = "";
$url = "http://localhost/TugasAkhir/Competition/";

$connect = mysqli_connect($host, $uname, $pass, $db);

if(!$connect)
{
    echo "Koneksi ke DataBase Gagal : " . mysqli_connect_error();
}

?>