<?php
$dato= $_REQUEST['dato'];
$dato1= $_REQUEST['dato1'];
require '../fpdf.php';
class PDF extends FPDF
{	
}

$pdf=new PDF('l','mm','letter');
$pdf->SetMargins(22,18);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(17,22,101);//85,107,47
$pdf->Setfont("Arial","b",8);

$pdf->cell(46, 10, 'FECHA: ' .date('d-m-y').'',.1,0,'C');

$pdf->Cell(191,10,'LISTADO DE VEHICULOS POR REVISION TECNOMECANICA', 1 ,1, 'C');

$pdf->Image('../../imagenes/vehiculo.gif' ,8, 8, 20, 20,'GIF');

include "../../conexion.php";
$pdf->Ln();//salto de linea

$pdf->Cell(20,5,'Trabajador',1, 0, 'C');
$pdf->Cell(55,5,'Nombre trabajador',1, 0, 'C');
$pdf->Cell(14,5,'Placas',1, 0, 'C');
$pdf->Cell(20,5,'Tipo',1, 0, 'C');
$pdf->Cell(17,5,'Marca',1, 0, 'C');
$pdf->Cell(12,5,'modelo',1, 0, 'C');
$pdf->Cell(28,5,'Targeta propiedad',1, 0, 'C');
$pdf->Cell(18,5,'Kilometraje',1, 0, 'C');
$pdf->Cell (18,5,'Licencia',1, 0, 'C');
$pdf->Cell (18,5,'Soat',1, 0, 'C');
$pdf->Cell (20,5,'Revision Tec',1, 0, 'C');

$pdf->Ln();

$sql="SELECT * FROM vehiculo JOIN trabajador WHERE vehIdTra=identificacion AND vehTecno BETWEEN '$dato' AND '$dato1'";

$rec=$conexion->query($sql);
while($row=$rec->fetch_array())
{
	$pdf->SetTextColor(85,107,47);//21, 67, 96
	$pdf->Cell(20,5, $row['vehIdTra'], 1, 0, 'C');
	$pdf->Cell(55,5, utf8_decode($row['traNombre'].' '.$row['traApellido']), 1, 0, 'C');
	$pdf->Cell(14,5, utf8_decode($row['vehPlaca']), 1, 0, 'C');
	$pdf->Cell(20,5, $row['vehTipo'], 1, 0, 'C');
	$pdf->Cell(17,5, $row['vehMarca'], 1, 0, 'C');
	$pdf->Cell(12,5, $row['vehModelo'], 1, 0, 'C');
	$pdf->Cell(28,5, $row['vehTarPro'], 1, 0, 'C');
	$pdf->Cell(18,5, $row['vehKm'], 1, 0, 'C');
	$pdf->Cell(18,5, $row['vehLicencia'], 1, 0, 'C');
	$pdf->Cell(18,5, $row['vehSoat'], 1, 0, 'C');
	$pdf->Cell(20,5, $row['vehTecno'], 1, 0, 'C');
	$pdf->Ln();
}
$pdf->Output();	
?>