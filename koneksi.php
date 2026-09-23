<?php
// Tiga baris ini untuk memaksa PHP menampilkan error di layar
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "sql313.infinityfree.com";
$user = "root";
$pass = "DgGuPhJz6ZkJphB";
$db = "f0_42988058_lostfound";
$port = "3306";

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
session_start();
?>
