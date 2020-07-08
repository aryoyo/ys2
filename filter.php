<!DOCTYPE html>
<html>
<head>
	<title>YUSTISI DKRTH 2020</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>YUSTISI DINAS KEBERSIHAN DAN RUANG TERBUKA HIJAU</h1>
		<h2>DATA PELANGGARAN</h2>
		
	</div>
	<br/>

	<?php 
		include 'koneksi.php';
		?>
	<br/>
	<a class="tombol" href="index.php">< Kembali</a> 
	<a class="tombol" href="filter.php">+ Refresh</a>

	<form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal">
			<input type="submit" value="FILTER">
		</form>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>No KTP</th>
			<th>Alamat</th>
			<th>Pelanggaran</th>
			<th>Tanggal Pelanggaran</th>
			<th>Lokasi Pelanggaran</th>
			<th>Denda</th>
			
		</tr>



		<?php 
		include "koneksi.php";
		$nomor=1;
		if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
				$mysql_query = mysql_query("select * from user where tanggal='$tgl'");
			}else{
				$mysql_query = mysql_query("select * from user");
			}
			
		while($data = mysql_fetch_array($mysql_query)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><b><?php echo $data['noktp']; ?></td></b>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
			<td><?php echo date('d-m-Y', strtotime($data['tanggal'])); ?></td>
			<td><?php echo $data['lokasi']; ?></td>
			<td><?php echo "Rp". $data['denda']; ?></td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>