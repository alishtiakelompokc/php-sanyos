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
$pdf->Cell(30,0.7,"Laporan Komuni Pertama Tahun ".$tahun,0,10,'C');
$pdf->ln(1);
// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
//Judul tabel
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Nama Lengkap', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Nama Baptis', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Tempat Lahir', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Tempat Baptis', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nama Ayah', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nama Ibu', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Alamat Lengkap', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Stasi', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysqli_query($koneksi, "SELECT * FROM komuni WHERE YEAR(tgl_daftar)='$tahun' ORDER BY tgl_daftar DESC");
while($lihat=mysqli_fetch_array($query)){
	//isi tabel
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(5, 0.8, $lihat['nama_lengkap'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['nama_baptis'], 1, 0,'C');
	$pdf->Cell(4.5, 0.8, $lihat['tempat_lahir'], 1, 0,'C');
	$pdf->Cell(4.5, 0.8, $lihat['tempat_baptis'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['nama_ayah'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['nama_ibu'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['alamat'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['stasi'], 1, 1,'C');
	

	$no++;
}

//$pdf->Output("laporan_buku.pdf","I");
$pdf->Output();
}
else{
	echo "<script>window.location = 'laporan_komuni.php'; </script>";
}
?>

