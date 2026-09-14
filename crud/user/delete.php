<?php

include('../koneksi/database.php');

$id = $_GET['id'];

$query = "DELETE FROM user WHERE id = '$id'";

if($koneksi->query($query)) {
    header("location: index.php?pesan=hapus");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
