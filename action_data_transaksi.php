<?php
include_once("database/connection.php");


$nama_pelanggan = $_POST['nm'];
$brg = $_POST['brg'];
$nama_transaksi = $_POST['nama'];
$tgl = $_POST['tgltransaksi'];
$hrg = $_POST['harga'];
$qty = $_POST['qty'];
$disc = $_POST['disc'];


$input_data_transaksi = mysqli_query($connect, "INSERT INTO transaksi (nama_transaksi,tgl_transaksi,harga,qty,diskon,id_pelanggan,id_barang) 
VALUES ('$nama_transaksi', '$tgl', '$hrg','$qty','$disc','$nama_pelanggan','$brg')");
 echo "<script>
 alert('Input Data Barang Berhasil');

</script>";
?>