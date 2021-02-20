<?php
include_once("database/connection.php");


$nama_brg = $_POST['nama'];
$ktgr = $_POST['ktgr'];
$satuan = $_POST['satuan'];


$input_data_barang = mysqli_query($connect, "INSERT INTO barang (nama,id_kategori,id_satuan) 
VALUES ('$nama_brg', $ktgr, $satuan)");
 echo "<script>
 alert('Input Data Barang Berhasil');
 window.location.href='input_barang.php';
</script>";
?>