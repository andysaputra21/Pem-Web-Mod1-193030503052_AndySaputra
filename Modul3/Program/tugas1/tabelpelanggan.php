<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "modul3";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi 
if (!$conn){
die("Koneksi Gagal : " . mysqli_connect_error());
}

// Sintaks SQL untuk membuat tabel
$sql = "CREATE TABLE pelanggan (
id_pelanggan INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
Nama VARCHAR(50) NOT NULL, 
Alamat VARCHAR(50),
Jenis_kelamin VARCHAR(10),
No_Telepon VARCHAR(13),
Email VARCHAR(50))";


if (mysqli_query($conn, $sql)) {
echo "Tabel Berhasil Dibuat";
} else {
echo "Error Saat Membuat Tabel : " . mysqli_error($conn);
}
mysqli_close($conn);
?>