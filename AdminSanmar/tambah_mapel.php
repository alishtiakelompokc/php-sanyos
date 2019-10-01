<html>
<head>
	<title>SMP N 1 Banyumas</title>
</head>
<body>
	<h1>Tambah Data Mata Pelajaran</h1>
	<form method="post" action="prosessimpan_mapel.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>ID Mapel</td>
		<td><input type="text" name="id_mapel"></td>
	</tr>
	<tr>
		<td>Nama Mapel</td>
		<td><input type="text" name="nama_mapel"></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td><input type="text" name="kelas"></td>
	</tr>
    <tr>
		<td>KKM</td>
		<td><input type="text" name="kkm"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="mapel.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
