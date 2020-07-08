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
	

	<h3>Data Pelanggar</h3>
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
		$query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['noktp']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
			<td><?php echo date('d-m-Y', strtotime($data['tanggal'])); ?></td>
			<td><?php echo $data['lokasi']; ?></td>
			<td><?php echo "Rp".$data['denda']; ?></td>
			
		</tr>
		<?php } ?>
	</table>
	<script>
		window.print();
	</script>
</body>
</html>