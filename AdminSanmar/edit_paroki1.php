<html>
<head>
	<title>Ubah Data</title>
</head>
<body>

	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$kode_jadwal = $_GET['kode_jadwal'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM jadwal_misa WHERE kode_jadwal='".$kode_jadwal."'";
	$sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubahparoki.php?kode_jadwal=<?php echo $kode_jadwal; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
    

	<tr>
		<td>Tempat</td>
		<td><input type="text" name="tempat" value="<?php echo $data['tempat']; ?>"></td>
	</tr>
	<tr>
		<td>Waktu</td>
		<td><input type="text" name="waktu" value="<?php echo $data['waktu']; ?>"></td>
	</tr>
	<tr>
		<td>Pukul</td>
		<td><input type="text" name="pukul" value="<?php echo $data['pukul']; ?>"></td>
	</tr>

	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="misa_paroki.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>