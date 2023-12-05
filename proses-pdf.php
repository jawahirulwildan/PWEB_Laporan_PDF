<?php
require('fpdf.php');
include 'config.php';

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();


$pdf->SetFont('Times','B',18);
$pdf->Cell(190,15,'Sekolah Menengah Kejurusan Negeri Coding',0,1,'C');
$pdf->SetFont('Times','B',14);
$pdf->Cell(190,10,'Daftar Siswa Kelas XI Jurusan Rekayasa Perangkat Lunak',0,1,'C');

$pdf->SetMargins(12,5,12);
$pdf->Cell(10,5,'',0,1);

$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(15,7,'NIS',1,0,'C');
$pdf->Cell(35,7,'Nama' ,1,0,'C');
$pdf->Cell(25,7,'Jenis Kelamin' ,1,0,'C');
$pdf->Cell(75,7,'Alamat',1,0,'C');
$pdf->Cell(25,7,'No Telepon',1,0,'C');

$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$result = mysqli_query($db, "SELECT * FROM siswa ORDER BY id");
while($res = mysqli_fetch_array($result)){
    $pdf->Cell(10,6, $no++,1,0,'C');
    $pdf->Cell(15,6,$res['nis'],1,0,);
    $pdf->Cell(35,6,$res['nama'] ,1,0);
    $pdf->Cell(25,6,$res['jenis_kelamin'] ,1,0);
    $pdf->Cell(75,6,$res['alamat'],1,0);
    $pdf->Cell(25,6,$res['telp'],1,1);
}

$pdf->Output();

?>