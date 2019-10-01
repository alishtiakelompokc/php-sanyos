
<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$kode_anak = $_POST['kode_anak'];
$nama_lengkap_anak = $_POST['nama_lengkap_anak'];
$nama_permandian_anak = $_POST['nama_permandian_anak'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$anak_yang_ke = $_POST['anak_yang_ke'];
$stasi = $_POST['stasi'];

$nama_ayah = $_POST['nama_ayah'];
$agama_ayah = $_POST['agama_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];

$nama_ibu = $_POST['nama_ibu'];
$agama_ibu = $_POST['agama_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$tempat_sakramen_perkawinan = $_POST['tempat_sakramen_perkawinan'];
$status_perkawinan = $_POST['status_perkawinan'];
$alamat_orangtua = $_POST['alamat_orangtua'];

$stasi_ortu = $_POST['stasi_ortu'];
$nama_wali_permandian = $_POST['nama_wali_permandian'];
$tempat_permandian = $_POST['tempat_permandian'];

$hari_permandian = $_POST['hari_permandian'];
$tgl_permandian = $_POST['tgl_permandian'];
$pastor_yang_mempermandikan = $_POST['pastor_yang_mempermandikan'];
$nama_file = $_POST['nama_file'];


$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM formulir_baptisan_anak WHERE kode_anak='$kode_anak'"));
    if ($cek > 0){       
  echo "<script>window.alert('Nama Anak Telah ada')
    window.location='baptis-form2.php'</script>";
    }else {
    $query = "INSERT INTO formulir_baptisan_anak (nama_lengkap_anak, nama_permandian_anak, tempat_lahir, tanggal_lahir, jenis_kelamin,anak_yang_ke,stasi,tanggal_lahir,nama_ayah,agama_ayah,
pekerjaan_ibu,tempat_sakramen_perkawinan,alamat_orangtua,stasi_ortu,nama_wali_permaandian,tempat_permandian,hari_permandian,tgl_permandian,pastor_yang_mempermandikan,nama_file) 
    VALUES ($nama_lengkap_anak, $nama_permandian_anak, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $anak_yang_ke, $stasi, $tanggal_lahir, $nama_ayah, $agama_ayah,
$pekerjaan_ibu, $tempat_sakramen_perkawinan, $alamat_orangtua, $stasi_ortu, $nama_wali_permandian, $tempat_permandian, $hari_permandian, $tgl_permandian, $pastor_yang_mempermandikan, $nama_file)";

        echo "<script>window.alert('DATA SUDAH DISIMPAN')
    window.location='sakramen.html'</script>";
    }
    
    $sql = mysqli_query($koneksi, $query);