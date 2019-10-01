<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$nama_lengkap_anak = $_POST['nama_lengkap'];
$nama_permandian = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
$url = "http://danger246.com/suher/gambar/".$fotobaru;

// Set path folder tempat menyimpan fotonya
$path = "gambar/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query = "INSERT INTO produk VALUES('".$id_produk."', '".$nama."', '".$deskripsi."', '".$harga."', '".$fotobaru."', '".$url."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
