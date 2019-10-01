<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM data_pastor WHERE kode_pastor='".$id."'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
$file_hapus = $data['foto'];
$tempat = '../img/pastors/'.$file_hapus;
// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM data_pastor WHERE kode_pastor='".$id."'";

$sql2 = mysqli_query($koneksi, $query2); // Eksekusi/Jalankan query dari variabel $query

if(unlink($tempat) && $sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: data_pastor.php"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='data_pastor.php'>Kembali</a>";
}
?>
