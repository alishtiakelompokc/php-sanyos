<?php
session_start();
if (isset($_POST['tahun']) && isset($_POST['submit']) && isset($_SESSION['username'])) {
$tahun = $_POST['tahun'];
include 'koneksi.php';
require('fpdf/fpdf.php');

$pdf = new FPDF("L","cm","Legal");
// $pdf = new FPDF('L','mm',array(215.9,137.16));

$pdf->SetMargins(0,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('images/logo_baru.png',1,1,3,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'Santa Maria Fatima',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : (0283) 671665',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Jl. Yos Sudarso No. 13 Brebes-Jawa Tengah',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'email : sanmar@gmail.com',0,'L');
$pdf->Line(1,3.1,34,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,34,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',20);
$pdf->Cell(30,0.7,"Laporan Pindahan Kristen ke Katolik Tahun ".$tahun,0,10,'C');
$pdf->ln(1);
// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
//Judul tabel
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Nama Lengkap', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Agama sebelumnya', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Alamat Lengkap', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nomor HP', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nama Suami/Isteri', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Status Perkawinan', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nama Ayah', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nama Ibu', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysqli_query($koneksi, "SELECT * FROM pindahan_kristenkatolik WHERE YEAR(tgl_daftar)='$tahun' ORDER BY tgl_daftar DESC");
while($lihat=mysqli_fetch_array($query)){
	//isi tabel
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(5, 0.8, $lihat['nama_lengkap'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['agama_sebelumnya'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['alamat_lengkap'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['no_tlp'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['nama_suami_isteri'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['status_perkawinan'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['nama_ayah'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['nama_ibu'], 1, 1,'C');
	

	$no++;
}

//$pdf->Output("laporan_buku.pdf","I");
$pdf->Output();
}
else{
	echo "<script>window.location = 'laporan_pindahan.php'; </script>";
}
?>

