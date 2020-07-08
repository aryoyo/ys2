<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$noktp = $_POST['noktp'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$tanggal = $_POST['tanggal'];
$lokasi = $_POST['lokasi'];
$denda = $_POST['denda'];
mysql_query("UPDATE user SET nama='$nama',  noktp='$noktp', alamat='$alamat', 
	alamat='$alamat', 
	pekerjaan='$pekerjaan' ,
	tanggal='$tanggal', 
	lokasi='$lokasi', denda='$denda'
	WHERE id='$id'");

header("location:index.php?pesan=update");
?>