<?php
$host = "localhost"; // Nama host database
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$database = "sidewa"; // Nama database

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Periksa apakah koneksi berhasil
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
} else {
    echo "Koneksi database berhasil!";
}

// Sekarang Anda dapat menjalankan query SQL dan berinteraksi dengan database.
?>
