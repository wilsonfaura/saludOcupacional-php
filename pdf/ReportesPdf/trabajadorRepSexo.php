<?php
$dato= $_REQUEST['dato'];
require '../fpdf.php';
class PDF extends FPDF
{	
}

$pdf=new PDF('l','mm','letter');
$pdf->SetMargins(14,18);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(17,22,101);//85,107,47
$pdf->Setfont("Arial","b",8);

$pdf->cell(45, 10, 'FECHA: ' .date('d-m-y').'',.1,0,'C');

$pdf->Cell(201,10,'LISTADO DE TRABAJADORES POR SEXO', 1 ,1, 'C');

$pdf->Image('../../imagenes/trabajador.gif' ,5, 8, 20, 20,'GIF');;

include "../../conexion.php";
$pdf->Ln();//salto de linea

$pdf->Cell(6,5,'Id',1, 0, 'C');
$pdf->Cell(19,5,'Cedula',1, 0, 'C');
$pdf->Cell(31,5,'Nombres',1, 0, 'C');
$pdf->Cell(31,5,'Apellidos',1, 0, 'C');
$pdf->Cell(32,5,'Area',1, 0, 'C');
$pdf->Cell(51,5,'Cargo',1, 0, 'C');
$pdf->Cell(18,5,'Ingreso',1, 0, 'C');
$pdf->Cell (8,5,'Sexo',1, 0, 'C');
$pdf->Cell (8,5,'Rh',1, 0, 'C');
$pdf->Cell (28,5,'Direccion',1, 0, 'C');
$pdf->Cell (19,5,'Telefono',1, 0, 'C');

$pdf->Ln();

$sql="SELECT * FROM trabajador WHERE traSexo='$dato'";

$rec=$conexion->query($sql);
while($row=$rec->fetch_array())
{
	$pdf->SetTextColor(85,107,47);//21, 67, 96
	$pdf->Cell(6,5, $row['idTrabajador'], 1, 0, 'C');
	$pdf->Cell(19,5, $row['identificacion'], 1, 0, 'C');
	$pdf->Cell(31,5, $row[utf8_decode('traNombre')], 1, 0, 'C');
	$pdf->Cell(31,5, $row['traApellido'], 1, 0, 'C');
	$pdf->Cell(32,5, $row['traArea'], 1, 0, 'C');
	$pdf->Cell(51,5, $row['traCargo'], 1, 0, 'C');
	$pdf->Cell(18,5, $row['traIngreso'], 1, 0, 'C');
	$pdf->Cell(8,5, $row['traSexo'], 1, 0, 'C');
	$pdf->Cell(8,5, $row['traRh'], 1, 0, 'C');
	$pdf->Cell(28,5, $row['traDir'], 1, 0, 'C');
	$pdf->Cell(19,5, $row['traTel'], 1, 0, 'C');
	$pdf->Ln();
}
$pdf->Output();
?>