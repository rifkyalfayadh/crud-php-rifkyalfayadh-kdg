<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "kampus2";

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);

// Memeriksa apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}