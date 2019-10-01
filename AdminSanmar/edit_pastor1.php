<html>
<head>
	<title>Ubah Data</title>
</head>
<body>

	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$kode_pastor = $_GET['kode_pastor'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM data_pastor WHERE kode_pastor='".$kode_pastor."'";
	$sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubahpastor.php?kode_pastor=<?php echo $kode_pastor; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
    
<tr>
		<td>Nama Pastor</td>
		<td><input type="text" name="nama_pastor" value="<?php echo $data['nama_pastor']; ?>"></td>
	</tr>
<tr>
		<td>Jabatan</td>
		<td><input type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>"></td>
	</tr>
	<tr>
		<td>Foto Pastor</td>
		<td><input type="text" name="foto_lama" value="<?php echo $data['foto']; ?>" hidden>
			<img src="../img/pastors/<?php echo $data['foto']; ?>" width="100px" height="100px" /><br/>
			<input type="file" name="ganti_foto"></td>
	</tr>
<tr>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
	</tr>

	

	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="data_pastor.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>