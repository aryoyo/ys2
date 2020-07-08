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
		<small class="text-muted">DATA PELANGGARAN</small></h3>
	</center>	
	<br/>

	<a href="index.php" class="btn btn-primary">< Lihat Semua Data</a>

	<br/>
	<h4>Input data baru</h4>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td><label for="nama">Nama</td></label>
				<td><input type="text" class="form-control" name="nama"></td>					
			</tr>	
			<tr>
				<td><label for="KTP">No KTP</td></label>
				<td><input type="text"class="form-control" name="noktp"></td>					
			</tr>	
			<tr>
				<td><label for="Alamat">Alamat</td></label>
				<td><input type="text" class="form-control" name="alamat"></td>					
			</tr>	
			<tr>
				<td><label for="Pelanggaran">Pelanggaran</td></label>
				<td><input type="text" class="form-control" name="pekerjaan"></td>					
			</tr>	
			<tr>
				<td><label for="Tanggal">Tanggal Pelanggaran</td></label>
				<td><input type="date" class="form-control"name="tanggal"></td>					
			</tr>
			<tr>
				<td><label for="Lokasi">Lokasi Pelanggaran</td></label>
				<td><input type="text"class="form-control" name="lokasi"></td>					
			</tr>
			<tr>
				<td><label for="Denda">Denda Administrasi</td></label>
				<td><label><input type="radio" name="denda" value="75000">Rp 75.000</td></label>
				<td><label><input type="radio" name="denda" value="150000">Rp 150.000</td></label>
				<td><label><input type="radio" name="denda" value="300000">Rp 300.000</td>	</label>	
				<td><label><input type="radio" name="denda" value="750000">Rp 750.000</td></label>	
			</tr>
			<tr>
				<td><label for="Volume">Volume</td></label>
				<td><input type="radio" name="volume" value="0.5">&lt; 0.5 m<sup>3</sup></td>
				<td><input type="radio" name="volume" value="0.51 - 1">antara 0.51 - 1 m<sup>3</sup></td>		
				<td><input type="radio" name="volume" value="1">&gt; lebih 1 m<sup>3</sup></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form></div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>