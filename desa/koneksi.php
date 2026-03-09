<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "desa";

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die("Koneksi gagal");
}
?>