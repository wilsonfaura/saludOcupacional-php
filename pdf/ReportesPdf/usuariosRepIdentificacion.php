<?php
$dato= $_REQUEST['dato'];
require '../fpdf.php';
class PDF extends FPDF
{	
}

$pdf=new PDF('p','mm','letter');
$pdf->SetMargins(13,20);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(17,22,101);
$pdf->Setfont("Arial","b",8);

$pdf->cell(40, 10, 'FECHA: ' .date('d-m-y').'',.1,0,'C');

$pdf->Cell(145,10,'LISTADO DE USUARIOS POR IDENTIFICACION', 1 ,1, 'C');

$pdf->Image('../../imagenes/usuario.gif' ,3, 3, 20, 20,'GIF');

include "../../conexion.php";
$pdf->Ln();//salto de linea


$pdf->Cell(12,5,'Usuario',1, 0, 'C');
$pdf->Cell(20,5,'Identificacion',1, 0, 'C');
$pdf->Cell(31,5,'Nombres',1, 0, 'C');
$pdf->Cell(31,5,'Apellidos',1, 0, 'C');
$pdf->Cell(48,5,'Cargo',1, 0, 'C');
$pdf->Cell(31,5,'Area',1, 0, 'C');
$pdf->Cell(17,5,(utf8_decode('Contraseña')),1, 0, 'C');

$pdf->Ln();

$sql = "SELECT * FROM usuario WHERE usuIdentificacion like '%$dato%'";
$rec=$conexion->query($sql);
while($row=$rec->fetch_array())
{
	$pdf->SetTextColor(85,107,47);
	$pdf->Cell(12,5, $row['idUsuario'], 1, 0, 'C');
	$pdf->Cell(20,5, $row['usuIdentificacion'], 1, 0, 'C');
	$pdf->Cell(31,5, $row['usuNombre'], 1, 0, 'C');
	$pdf->Cell(31,5, $row['usuApellido'], 1, 0, 'C');
	$pdf->Cell(48,5, $row[utf8_decode('usuCargo')], 1, 0, 'C');
	$pdf->Cell(31,5, $row['usuArea'], 1, 0, 'C');
	$pdf->Cell(17,5, $row['usuPassword'], 1, 0, 'C');
	$pdf->Ln();
}
$pdf->Output();	
?>