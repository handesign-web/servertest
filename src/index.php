<?php
$servername = "mysql-core-service"; // Nama service di Kubernetes
$username = "root";
$password = "Kumisan5";

// Coba koneksi
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Koneksi Gagal: " . $conn->connect_error);
}
echo "<h1>Halo dari Server Ubuntu ARM! 🚀</h1>";
echo "Koneksi ke Database MySQL Berhasil!";
?>