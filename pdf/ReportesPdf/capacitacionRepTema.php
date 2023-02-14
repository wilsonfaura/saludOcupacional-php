<?php
require '../fpdf.php';
$dato= $_REQUEST['dato'];
class PDF extends FPDF
{	
}

$pdf=new PDF('p','mm','letter');
$pdf->SetMargins(15,20);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(17,22,101);
$pdf->Setfont("Arial","b",8);

$pdf->cell(40, 10, 'FECHA: ' .date('d-m-y').'',.1,0,'C');

$pdf->Cell(134,10,'LISTADO DE CAPACITACIONES POR TEMA', 1 ,1, 'C');

$pdf->Image('../../imagenes/capacitacion.gif' ,5, 6, 18, 24,'GIF');

include "../../conexion.php";
$pdf->Ln();//salto de linea

$pdf->Cell(25,5,'Instructor',1, 0, 'C');
$pdf->Cell(55,5,'Tema',1, 0, 'C');
$pdf->Cell(65,5,'Area',1, 0, 'C');
$pdf->Cell(18,5,'Fecha',1, 0, 'C');
$pdf->Cell(12,5,'Hora',1, 0, 'C');
$pdf->Cell(20,5,'Estado',1, 0, 'C');

$pdf->Ln();

$sql="SELECT * FROM capacitacion WHERE capTema like '%$dato%'";
$rec=$conexion->query($sql);
while($row=$rec->fetch_array())
{
	$pdf->SetTextColor(85,107,47);
	$pdf->Cell(25,5, $row['capInstructor'], 1, 0, 'C');
	$pdf->Cell(55,5, $row['capTema'], 1, 0, 'C');
	$pdf->Cell(65,5, $row['capArea'], 1, 0, 'C');
	$pdf->Cell(18,5, $row['capFecha'], 1, 0, 'C');
	$pdf->Cell(12,5, $row['capHora'], 1, 0, 'C');	
	$pdf->Cell(20,5, $row['capEstado'], 1, 0, 'C');
	$pdf->Ln();
}
$pdf->Output();
?>