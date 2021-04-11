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
$sql = "CREATE TABLE pesanan (
id_pesanan INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
id_produk INT(6),
id_pelanggan INT(6),
Total_pembelian INT(25),
FOREIGN KEY(id_produk) REFERENCES produk(id_produk),
FOREIGN KEY(id_pelanggan) REFERENCES pelanggan(id_pelanggan)
)";


if (mysqli_query($conn, $sql)) {
echo "Tabel Berhasil Dibuat";
} else {
echo "Error Saat Membuat Tabel : " . mysqli_error($conn);
}
mysqli_close($conn);
?>