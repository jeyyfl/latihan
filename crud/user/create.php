<?php

//include koneksi database
include('../koneksi/database.php');
 
//get data dari form
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$date = $_POST['tanggal_lahir'];

//query insert data ke dalam database
$query = "INSERT INTO user (nama, alamat, tanggal_lahir) VALUES ('$nama', '$alamat','$date')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($koneksi->query($query)) {

    header("location: index.php?pesan=tambah");
    exit();

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan! Error: " . $koneksi->error;

}

?>