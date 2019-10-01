<html>
<head>
	<title>Ubah Data</title>
</head>
<body>

	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$kode_galeri = $_GET['kode_galeri'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM galeri WHERE kode_galeri='".$kode_galeri."'";
	$sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubahgaleri.php?kode_galeri=<?php echo $kode_galeri; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
    
<tr>
		<td>Nama Kegiatan</td>
		<td><input type="text" name="nama_kegiatan" value="<?php echo $data['nama_kegiatan']; ?>"></td>
	</tr>
<tr>
		<td>Tanggal</td>
		<td><input type="text" name="tanggal" value="<?php echo $data['tanggal']; ?>"></td>
	</tr>
	<tr>
		<td>Foto Kegiatan</td>
		<td><input type="text" name="foto_lama" value="<?php echo $data['foto']; ?>" hidden>
			<img src="../img/event/<?php echo $data['foto']; ?>" width="100px" height="100px" /><br/>
			<input type="file" name="ganti_foto"></td>
	</tr>
<tr>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
	</tr>
	<tr>
		<td>Waktu</td>
		<td><input type="text" name="waktu" value="<?php echo $data['waktu']; ?>"></td>
	</tr>
	<tr>
		<td>Lokasi</td>
		<td><input type="text" name="lokasi" value="<?php echo $data['lokasi']; ?>"></td>
	</tr>

	

	</table>
	
	<hr>
	<input type="submit" name="submit" value="Ubah">
	<a href="galeri.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>