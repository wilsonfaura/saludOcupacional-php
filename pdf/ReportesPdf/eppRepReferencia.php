<?php
$dato= $_REQUEST['dato'];
require '../fpdf.php';
class PDF extends FPDF
{	
}

$pdf=new PDF('l','mm','letter');
$pdf->SetMargins(22,20);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(17,22,101);
$pdf->Setfont("Arial","b",8);

$pdf->cell(40, 10, 'FECHA: ' .date('d-m-y').'',.1,0,'C');

$pdf->Cell(190,10,'LISTADO DE ELEMENTOS DE PROTECCION PERSONAL POR REFERENCIA', 1 ,1, 'C');

$pdf->Image('../../imagenes/epp1.gif' ,8, 6, 12, 24,'GIF');

include "../../conexion.php";
$pdf->Ln();//salto de linea

$pdf->Cell(8,5,'Id',1, 0, 'C');
$pdf->Cell(18,5,'Referencia',1, 0, 'C');
$pdf->Cell(55,5,'Nombre',1, 0, 'C');
$pdf->Cell(11,5,'Talla',1, 0, 'C');
$pdf->Cell(42,5,'Proveedor',1, 0, 'C');
$pdf->Cell(28,5,'Cod proveedor',1, 0, 'C');
$pdf->Cell(28,5,'Tel proveedor',1, 0, 'C');
$pdf->Cell(42,5,'Email Proveedor',1, 0, 'C');

$pdf->Ln();

$sql="SELECT * FROM epp WHERE eppReferencia like '%$dato%'";
$rec=$conexion->query($sql);
while($row=$rec->fetch_array())
{
	$pdf->SetTextColor(85,107,47);
	$pdf->Cell(8,5, $row['idEpp'], 1, 0, 'C');
	$pdf->Cell(18,5, $row['eppReferencia'], 1, 0, 'C');
	$pdf->Cell(55,5, $row['eppNombre'], 1, 0, 'C');
	$pdf->Cell(11,5, $row['eppTalla'], 1, 0, 'C');
	$pdf->Cell(42,5, $row['eppProveedor'], 1, 0, 'C');
	$pdf->Cell(28,5, $row[utf8_decode('eppIdProveedor')], 1, 0, 'C');
	$pdf->Cell(28,5, $row['eppTelProveedor'], 1, 0, 'C');
	$pdf->Cell(42,5, $row['eppEmailProveedor'], 1, 0, 'C');
	$pdf->Ln();
}
$pdf->Output();	
?>