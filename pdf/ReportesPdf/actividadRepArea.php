<?php
require '../fpdf.php';
$dato= $_REQUEST['dato'];
class PDF extends FPDF
{	
}

$pdf=new PDF('l','mm','letter');
$pdf->SetMargins(13,20);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(17,22,101);
$pdf->Setfont("Arial","b",8);

$pdf->cell(45, 10, 'FECHA: ' .date('d-m-y').'',.1,0,'C');

$pdf->Cell(205,10,'LISTADO DE ACTIVIDADES POR AREA', 1 ,1, 'C');

$pdf->Image('../../imagenes/actividad.gif' ,5, 4, 16, 23,'GIF');

include "../../conexion.php";
$pdf->Ln();//salto de linea

$pdf->Cell(6,5,'Id',1, 0, 'C');
$pdf->Cell(55,5,'Actividad',1, 0, 'C');
$pdf->Cell(110,5,'Descripcion',1, 0, 'C');
$pdf->Cell(29,5,'Area',1, 0, 'C');
$pdf->Cell(18,5,'Fecha inicio',1, 0, 'C');
$pdf->Cell(18,5,'Fecha fin',1, 0, 'C');
$pdf->Cell(20,5,'Estado',1, 0, 'C');

$pdf->Ln();

$sql="SELECT * FROM actividad WHERE actArea='$dato'";
$rec=$conexion->query($sql);
while($row=$rec->fetch_array())
{
	$pdf->SetTextColor(85,107,47);
	$pdf->Cell(6,5, $row['idActividad'], 1, 0, 'C');
	$pdf->Cell(55,5, $row['actNombre'], 1, 0, 'C');
	$pdf->Cell(110,5, $row['actDescripcion'], 1, 0, 'C');
	$pdf->Cell(29,5, $row['actArea'], 1, 0, 'C');
	$pdf->Cell(18,5, $row['actFechaIni'], 1, 0, 'C');	
	$pdf->Cell(18,5, $row['actFechaFin'], 1, 0, 'C');
	$pdf->Cell(20,5, $row['actEstado'], 1, 0, 'C');
	$pdf->Ln();
}
$pdf->Output();
?>