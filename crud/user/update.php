<?php

include('../koneksi/database.php');

$id      = $_POST['id'];
$nama    = $_POST['nama'];
$tanggal = $_POST['tanggal_lahir'];
$alamat  = $_POST['alamat'];

$query = "UPDATE user SET nama = '$nama', tanggal_lahir = '$tanggal', alamat = '$alamat' WHERE id = '$id'";

if ($koneksi->query($query)) {
    header("location: index.php?pesan=edit");
} else {
    echo "Data Gagal Diupate!";
}
 