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
		<h3>YUSTISI DINAS KEBERSIHAN DAN RUANG TERBUKA HIJAU</h3>
		<small class="text-muted">DATA PELANGGARAN</small>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<?php 
		include 'koneksi.php';
		?>
	<br/>
	<a class="btn btn-warning" href="ambil.php">< Kembali</a> 

	
	<h3>Data Yang Belum Ambil KTP</h3>
	<table class="table table-bordered table-striped table-hover table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>No KTP</th>
			<th>Denda</th>
			<th>Volume</th>
			<th>Tanggal Pelanggaran</th>
			<th>Opsi</th>
			<th>Status Pembayaran</th>	
			<th>Bayar</th>	
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM user where tanggal_pengambilan = ''")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['noktp']; ?></td>
			<td><?php echo "Rp". $data['denda']; ?></td>
			<td><?php echo $data['volume'].' m <sup>3</sup>'; ?></td>
			<td><?php echo date('d-m-Y', strtotime($data['tanggal'])); ?></td>
			<td><?php echo $data['status']; ?></td>
			<td><?php echo $data['tanggal_pengambilan']; ?></td>
			<td>
				<a class="btn btn-primary" href="ambil_detail.php?id=<?php echo $data['id']; ?>">Bayar</a>	
			</td>	
		</tr>
		<?php } ?>
	</table></div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>