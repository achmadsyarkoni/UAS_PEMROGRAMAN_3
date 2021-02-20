<?php
include_once("database/connection.php");


$nama = $_POST['nama'];
$tlp = $_POST['tlp'];
$stat = $_POST['stat'];


$input_data_barang = mysqli_query($connect, "INSERT INTO pelanggan (nama_pelanggan,no_tlp,stats) 
VALUES ('$nama', '$tlp', '$stat')");
 echo "<script>
 alert('Input Data Barang Berhasil');
 window.location.href='input_pelanggan.php';
</script>";
?>