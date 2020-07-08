<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$noktp = $_POST['noktp'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$tanggal = $_POST['tanggal'];
$lokasi = $_POST['lokasi'];
$denda = $_POST['denda'];
$volume = $_POST['volume'];

mysql_query("INSERT INTO user VALUES('','$nama','$noktp','$alamat','$pekerjaan','$tanggal','$lokasi','$denda','$volume','','','','')");

header("location:index.php?pesan=input");
?>