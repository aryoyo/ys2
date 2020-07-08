<!DOCTYPE html>
<html>
<head>
	<title>YUSTISI DKRTH 2020</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">	
	<center>	
		<h3>YUSTISI DINAS KEBERSIHAN DAN RUANG TERBUKA HIJAU<br>
		<small class="text-muted">Detail Pembayaran</small></h3>
	</center>
	
	<br/>
	
	<a href="index.php" class="btn btn-primary btn-sm">Lihat Semua Data</a>

	<br/>
	<h3>Detail Bayar</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="ambil_bayar.php" method="post">		
		<table>
			<tr>
				<b>Nama : <?php echo $data['nama'] ?></td></b>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat : <?php echo $data['alamat'] ?></td> 
								
			</tr>	
			<tr>
				<td>Pelanggaran : <?php echo $data['pekerjaan'] ?></td>			
			</tr>	
			<tr>
				<td>No KTP : <?php echo $data['noktp'] ?></td>			
			</tr>	
			<tr>
				<td>Tanggal Pelanggaran : <?php echo date('d-m-Y', strtotime($data['tanggal'])); ?></td>			
			</tr>	
			<tr>
				<td class="badge badge-primary">Lokasi Pelanggaran : <?php echo $data['lokasi'] ?></td>		
			</tr>	
			<tr>
				<td class="badge badge-danger">Denda Administrasi : <?php echo "Rp ". $data['denda'] ?></td>			
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td><input type="date" name="tanggal_pengambilan" value="<?php echo $data['tanggal_pengambilan'] ?>"></td>					
			</tr>
			<tr>
				<td>Konfirmasi Bayar</td>
				<td><input type="radio" name="status" value="KTP Sudah Diambil" checked="Bayar">Bayar</td>		
			</tr>
			<tr>
				<td>No Agenda : </td>
				<td><input type="text" name="no_agenda" value="<?php echo $data['no_agenda'] ?>"> </td>			
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary"value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>