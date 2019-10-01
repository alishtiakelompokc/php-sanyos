<html>
<head>
	<title>Ubah Data</title>
</head>
<body>

	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$kode_sakramen = $_GET['kode_sakramen'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM data_sakramen WHERE kode_sakramen='".$kode_sakramen."'";
	$sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubahsakramen.php?kode_sakramen=<?php echo $kode_sakramen; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
    

	<tr>
		<td>Nama Sakramen</td>
		<td><input type="text" name="nama_sakramen" value="<?php echo $data['nama_sakramen']; ?>"></td>
	</tr>
	<tr>
		<td>Foto Sakramen</td>
		<td><input type="text" name="foto_lama" value="<?php echo $data['foto']; ?>" hidden>
			<img src="../img/sermons/<?php echo $data['foto']; ?>" width="100px" height="100px" /><br/>
			<input type="file" name="ganti_foto"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
	</tr>

	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="baptis.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>