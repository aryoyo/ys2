<!DOCTYPE html>
<html>
<head>
	<title>YUSTISI DKRTH 2020</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		<div class="container">	<center>	
		<h3>YUSTISI DINAS KEBERSIHAN DAN RUANG TERBUKA HIJAU</h3>
		<small class="text-muted">DATA PELANGGARAN</small></center>
	
	<br/>
	
	<a href="index.php" class="btn btn-warning">Kembali</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>NO KTP</td>
				<td><input type="number" name="noktp" value="<?php echo $data['noktp'] ?>"></td>					
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Pelanggaran</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>					
			</tr>	
			<tr>
				<td>Tanggal Pelanggaran</td>
				<td><input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>"></td>					
			</tr>	
			<tr>
				<td>Lokasi Pelanggaran</td>
				<td><input type="text" name="lokasi" value="<?php echo $data['lokasi'] ?>"></td>					
			</tr>	
			<tr>
				<td>Denda Administrasi</td>
				<td><input type="radio" name="denda" value="75000" checked="">Rp 75.000</td>		
				<td><input type="radio" name="denda" value="150000">Rp 150.000</td>	
				<td><input type="radio" name="denda" value="750000">Rp 750.000</td>				
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" class="btn btn-primary"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?></div>
</body>
</html>