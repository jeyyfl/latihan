<?php
$server   = "localhost";
$user     = "root";
$password = "";
$database = "latihan_alam";

$koneksi = new mysqli($server, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>