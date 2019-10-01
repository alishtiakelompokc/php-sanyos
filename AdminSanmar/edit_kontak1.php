<html>
<head>
	<title>Ubah Data</title>
</head>
<body>

	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$kode_kontak = $_GET['kode_kontak'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM kontak WHERE kode_kontak='".$kode_kontak."'";
	$sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubahkontak.php?kode_kontak=<?php echo $kode_kontak; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
    

	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
	</tr>
		<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
	</tr>
		<tr>
		<td>Nomor Telepon</td>
		<td><input type="text" name="kontak" value="<?php echo $data['kontak']; ?>"></td>
	</tr>
	

	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="kontak.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>