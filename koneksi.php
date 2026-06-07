<?php

$host = "mysql.railway.internal"; 
$user = "root"; 
$pass = "AoCuTLCfUPvvpitvGkxHZqRuEVVHWLqE"; 
$db   = "railway"; 
$port = "3306"; 

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
session_start();
?>