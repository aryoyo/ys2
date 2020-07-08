<?php 

include 'koneksi.php';
$id = $_POST['id'];
$status = $_POST['status'];
$tanggal_pengambilan = $_POST['tanggal_pengambilan'];
$no_agenda = $_POST['no_agenda'];
mysql_query("UPDATE user SET 
	status='$status' ,
	tanggal_pengambilan='$tanggal_pengambilan',
	no_agenda ='$no_agenda'
	WHERE id='$id'");

header("location:ambil.php?pesan=update");
?>