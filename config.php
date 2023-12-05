<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pendaftaran_siswa_foto';
$port = 3307;

// Open a new connection to the MySQL server
$db = mysqli_connect($hostname, $username, $password, $database, $port);

if (!$db) {
    die('Database Gagal Terhubung :'. mysqli_connect_error());
}
?>