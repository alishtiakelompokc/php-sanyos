<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM kematian WHERE kode_kematian='".$id."'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM kematian WHERE kode_kematian='".$id."'";

$sql2 = mysqli_query($koneksi, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: data_kematian.php"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='data_kematian.php'>Kembali</a>";
}
?>
