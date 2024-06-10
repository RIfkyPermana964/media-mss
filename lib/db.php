<?php
$host = 'localhost:3308'; // Menggunakan default host untuk MySQL
$user = 'root';
$pass = ''; 
$db = 'db_mss'; // Menghapus titik koma di akhir nama database

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!";
}
?>

