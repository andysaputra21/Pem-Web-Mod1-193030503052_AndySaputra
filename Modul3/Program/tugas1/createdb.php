<?php
$servername = "localhost";
$username = "root";
$password = "";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password);

// Memeriksa Koneksi 
if (!$conn){
die("Koneksi Gagal : " . mysqli_connect_error());
}

// Membuat Database
$sql = "CREATE DATABASE modul3";
if (mysqli_query($conn, $sql)) {echo "Database Berhasil Dibuat";
} else {
echo "Terjadi Error Saat Membuat Database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>