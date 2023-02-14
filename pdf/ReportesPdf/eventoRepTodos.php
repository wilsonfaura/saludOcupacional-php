<?php
require '../fpdf.php';
class PDF extends FPDF
{
}

$pdf=new PDF('l','mm','letter');
$pdf->SetMargins(10,18);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(17,22,101);//85,107,47
$pdf->Setfont("Arial","b",6);

$pdf->cell(46, 10, 'FECHA: ' .date('d-m-y').'',.1,0,'C');

$pdf->Cell(208,10,'LISTADO DE EVENTOS', 1 ,1, 'C');

$pdf->Image('../../imagenes/evento.gif' ,4, 6, 17, 24,'GIF');

include "../../conexion.php";
$pdf->Ln();//salto de linea


$pdf->Cell(6,5,'Id',1, 0, 'C');
$pdf->Cell(15,5,'Trabajador',1, 0, 'C');
$pdf->Cell(39,5,'Nombre',1, 0, 'C');
$pdf->Cell(7,5,'Edad',1, 0, 'C');
$pdf->Cell(14,5,'Vinculo',1, 0, 'C');
$pdf->Cell(13,5,'Tipo',1, 0, 'C');
$pdf->Cell(14,5,'Fecha',1, 0, 'C');
$pdf->Cell(8,5,'Hora',1, 0, 'C');
$pdf->Cell (22,5,'Lugar',1, 0, 'C');
$pdf->Cell(30,5,'Actividad',1, 0, 'C');
$pdf->Cell (90,5,'Descripcion',1, 0, 'C');

$pdf->Ln();//salto de linea

$sql="SELECT * FROM evento JOIN trabajador WHERE evIdTrabajador=identificacion";

$rec=$conexion->query($sql);
while($row=$rec->fetch_array())
{
	$pdf->SetTextColor(85,107,47);//21, 67, 96
	$pdf->Cell(6,5, $row['idEvento'], 1, 0, 'C');
	$pdf->Cell(15,5, $row['evIdTrabajador'], 1, 0, 'C');
	$pdf->Cell(39,5, $row['traNombre'].' '. $row['traApellido'], 1, 0, 'C');
	$pdf->Cell(7,5, $row['evEdad'], 1, 0, 'C');
	$pdf->Cell(14,5, $row['evVinculo'], 1, 0, 'C');
	$pdf->Cell(13,5, $row['evTipo'], 1, 0, 'C');
	$pdf->Cell(14,5, $row['evFecha'], 1, 0, 'C');
	$pdf->Cell(8,5, $row['evHora'], 1, 0, 'C');	
	$pdf->Cell(22,5, $row['evLugar'], 1, 0, 'C');
	$pdf->Cell(30,5, $row['evActividad'], 1, 0, 'C');	
	$pdf->Cell(90,5, $row['evDescripcion'], 1, 0, 'C');
	$pdf->Ln();
}
$pdf->Output();	
?>