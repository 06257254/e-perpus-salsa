<?php       
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = "localhost"; // Biasanya localhost
$user = "root";      // Username database
$pass = "";          // Password database
$db   = "eperpus_a"; // Nama database

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>