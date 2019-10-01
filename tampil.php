<html>
<head>
	<title>Database Barang</title>
</head>
<body>
	<h1>Data Barang</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>Foto</th>
		<th>No.Produk</th>
		<th>Nama</th>
		<th>Deskripsi</th>
		<th>Harga</th>
        <th>URL</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM formulir_baptisan_bayi"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
		echo "<td>".$data['no_produk']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['surat_nikah_ortu']."</td>";
		echo "<td>".$data['harga']."</td>";
        echo "<td>".$data['url']."</td>";
		echo "<td><a href='form_ubah.php?no_produk=".$data['no_produk']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?no_produk=".$data['no_produk']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>