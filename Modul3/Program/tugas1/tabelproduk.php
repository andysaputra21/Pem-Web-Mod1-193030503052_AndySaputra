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
$sql = "CREATE TABLE produk (
id_produk INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
Nama_Produk VARCHAR(50) NOT NULL, 
Harga INT(25),
id_pekerja INT(6),
FOREIGN KEY(id_pekerja) REFERENCES pekerja(id_pekerja))";


if (mysqli_query($conn, $sql)) {
echo "Tabel Berhasil Dibuat";
} else {
echo "Error Saat Membuat Tabel : " . mysqli_error($conn);
}
mysqli_close($conn);
?>