<html>
<head>
	<title>Ubah Data</title>
</head>
<body>

	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$kode_kematian = $_GET['kode_kematian'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM kematian WHERE kode_kematian='".$kode_kematian."'";
	$sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubahkematian.php?kode_kematian=<?php echo $kode_kematian; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
    

	<tr>
		<td>Nama Lengkap</td>
		<td><input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>"></td>
	</tr>
		<tr>
		<td>Nama Baptis</td>
		<td><input type="text" name="nama_baptis" value="<?php echo $data['nama_baptis']; ?>"></td>
	</tr>
		<tr>
		<td>Tempat Lahir</td>
		<td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>"></td>
	</tr>
<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $data['usia']; ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
	</tr>
	<tr>
		<td>Hari Kematian</td>
		<td><input type="text" name="hari_kematian" value="<?php echo $data['hari_kematian']; ?>"></td>
	</tr>
	<tr>
		<td>Tanggal Kematian</td>
		<td><input type="text" name="tgl_kematian" value="<?php echo $data['tgl_kematian']; ?>"></td>
	</tr>
	<tr>
		<td>Waktu Kematian</td>
		<td><input type="text" name="waktu_kematian" value="<?php echo $data['waktu_kematian']; ?>"></td>
	</tr>
	<tr>
		<td>Tempat Kematian</td>
		<td><input type="text" name="tempat_kematian" value="<?php echo $data['tempat_kematian']; ?>"></td>
	</tr>
	<tr>
		<td>Alamat Kematian</td>
		<td><input type="text" name="alamat_kematian" value="<?php echo $data['alamat_kematian']; ?>"></td>
	</tr>
	<tr>
		<td>Tempat Pemakaman</td>
		<td><input type="text" name="tempat_pemakaman" value="<?php echo $data['tempat_pemakaman']; ?>"></td>
	</tr>
	
	<tr>
		<td>Tanggal Pemakaman</td>
		<td><input type="text" name="tgl_pemakaman" value="<?php echo $data['tgl_pemakaman']; ?>"></td>
	</tr>
	<tr>
		<td>Bentuk Pemakaman</td>
		<td><input type="text" name="bentuk_pemakaman" value="<?php echo $data['bentuk_pemakaman']; ?>"></td>
	</tr>
	<tr>
		<td>Pemimpin Upacara</td>
		<td><input type="text" name="pemimpin_upacara" value="<?php echo $data['pemimpin_upacara']; ?>"></td>
	</tr>
	<tr>
		<td>Nama Famili</td>
		<td><input type="text" name="nama_famili" value="<?php echo $data['nama_famili']; ?>"></td>
	</tr>
	<tr>
		<td>Alamat Famili</td>
		<td><input type="text" name="alamat_famili" value="<?php echo $data['alamat_famili']; ?>"></td>
	</tr>
	<tr>
		<td>Stasi</td>
		<td><input type="text" name="stasi" value="<?php echo $data['stasi']; ?>"></td>
	</tr>
	<tr>
		<td>Hari Perminyakan</td>
		<td><input type="text" name="hari_perminyakan" value="<?php echo $data['hari_perminyakan']; ?>"></td>
	</tr>
	<tr>
		<td>Tanggal Perminyakan</td>
		<td><input type="text" name="tgl_perminyakan" value="<?php echo $data['tgl_perminyakan']; ?>"></td>
	</tr>
	<tr>
		<td>Tempat Perminyakan</td>
		<td><input type="text" name="tempat_perminyakan" value="<?php echo $data['tempat_perminyakan']; ?>"></td>
	</tr>
	<tr>
		<td>Romo Perminyakan</td>
		<td><input type="text" name="romo_perminyakan" value="<?php echo $data['romo_perminyakan']; ?>"></td>
	</tr>
	<tr>
		<td>Sakramen Yang Diterima</td>
		<td><input type="text" name="sakramen_yang_diterima" value="<?php echo $data['sakramen_yang_diterima']; ?>"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="data_kematian.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>