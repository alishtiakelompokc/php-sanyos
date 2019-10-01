<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data Furniture</h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$id_mapel = $_GET['id_mapel'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM matapelajaran WHERE id_mapel='".$id_mapel."'";
	$sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="prosesubah_mapel.php?id_mapel=<?php echo $id_mapel; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama Mapel</td>
		<td><input type="text" name="nama_mapel" value="<?php echo $data['nama_mapel']; ?>"></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td><input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"></td>
	</tr>
	<tr>
		<td>KKM</td>
		<td><input type="text" name="kkm" value="<?php echo $data['kkm']; ?>"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="mapel.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>