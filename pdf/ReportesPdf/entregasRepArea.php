<?php
$dato= $_REQUEST['dato'];
require '../fpdf.php';
class PDF extends FPDF
{	
}

$pdf=new PDF('l','mm','letter');
$pdf->SetMargins(15,18);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(17,22,101);//85,107,47
$pdf->Setfont("Arial","b",7);

$pdf->cell(46, 10, 'FECHA: ' .date('d-m-y').'',.1,0,'C');

$pdf->Cell(199,10,'LISTADO DE ENTREGAS EPP POR AREA', 1 ,1, 'C');

$pdf->Image('../../imagenes/entrega.gif' ,8, 6, 14, 24,'GIF');

include "../../conexion.php";
$pdf->Ln();


$pdf->Cell(15,5,'Trabajador',1, 0, 'C');
$pdf->Cell(46,5,'Nombre trabajador',1, 0, 'C');
$pdf->Cell(27,5,'Area Trabajador',1, 0, 'C');
$pdf->Cell(44,5,'Cargo Trabajador',1, 0, 'C');
$pdf->Cell(42,5,'Epp',1, 0, 'C');
$pdf->Cell(15,5,'Ref Epp',1, 0, 'C');
$pdf->Cell(13,5,'Talla Epp',1, 0, 'C');
$pdf->Cell(32,5,'Proveedor',1, 0, 'C');
$pdf->Cell (16,5,'Fecha ent',1, 0, 'C');

$pdf->Ln();

$sql="SELECT * FROM entrega JOIN trabajador JOIN epp WHERE entTrabajador=identificacion AND entEpp=eppNombre AND traArea = '$dato'";

$rec=$conexion->query($sql);
while($row=$rec->fetch_array())
{
	$pdf->SetTextColor(85,107,47);//21, 67, 96
	$pdf->Cell(15,5, $row['entTrabajador'], 1, 0, 'C');
	$pdf->Cell(46,5, $row['traNombre'].' '. $row['traApellido'], 1, 0, 'C');
	$pdf->Cell(27,5, $row['traArea'], 1, 0, 'C');
	$pdf->Cell(44,5, $row['traCargo'], 1, 0, 'C');
	$pdf->Cell(42,5, $row['entEpp'], 1, 0, 'C');
	$pdf->Cell(15,5, $row['eppReferencia'], 1, 0, 'C');
	$pdf->Cell(13,5, $row['eppTalla'], 1, 0, 'C');
	$pdf->Cell(32,5, $row['eppProveedor'], 1, 0, 'C');	
	$pdf->Cell(16,5, $row['entFecha'], 1, 0, 'C');
	$pdf->Ln();
}
$pdf->Output();
?>