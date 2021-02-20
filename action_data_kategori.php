<?php
include_once("database/connection.php");


$nama_ktgr = $_POST['nama'];


$input_data_barang = mysqli_query($connect, "INSERT INTO kategori (nama_kategori) 
VALUES ('$nama_ktgr')");
 echo "<script>
 alert('Input Data Barang Berhasil');
 window.location.href='input_kategori.php';
</script>";
?>