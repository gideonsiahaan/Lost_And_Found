<?php

$MYSQLHOST = "mysql.railway.internal"; 
$MYSQLUSER = "root"; 
$MYSQLPASSWORD = "AoCuTLCfUPvvpitvGkxHZqRuEVVHWLqE"; 
$MYSQLDATABASE= "railway"; 
$MYSQLPORT = "3306"; 

$conn = mysqli_connect($MYSQLHOST, $MYSQLUSER, $MYSQLPASSWORD, $MYSQLDATABASE, $MYSQLPORT);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
session_start();
?>
