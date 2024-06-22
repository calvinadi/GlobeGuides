<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "globe_guides";

// Buat koneksi
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$connection) {
    die('Connection error: ' . mysqli_connect_error());
}
?>