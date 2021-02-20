<?php
include_once("database/connection.php");


$nama_satuan = $_POST['nama'];


$input_data_satuan = mysqli_query($connect, "INSERT INTO satuan (nama_satuan) 
VALUES ('$nama_satuan')");
 echo "<script>
 alert('Input Data Barang Berhasil');
 window.location.href='input_satuan.php';
</script>";
?>