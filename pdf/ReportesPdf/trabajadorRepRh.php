<?php
$dato= $_REQUEST['dato'];
require '../fpdf.php';
class PDF extends FPDF
{
function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
    {
        //Get string width
        $str_width=$this->GetStringWidth($txt);
 
        //Calculate ratio to fit cell
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $ratio = ($w-$this->cMargin*2)/$str_width;
 
        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit)
        {
            if ($scale)
            {
                //Calculate horizontal scaling
                $horiz_scale=$ratio*100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
            }
            else
            {
                //Calculate character spacing in points
                $char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1,1)*$this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET',$char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align='';
        }
 
        //Pass on to Cell method
        $this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);
 
        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
    }
 
    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
    }
 
    //Patch to also work with CJK double-byte text
    function MBGetStringLength($s)
    {
        if($this->CurrentFont['type']=='Type0')
        {
            $len = 0;
            $nbbytes = strlen($s);
            for ($i = 0; $i < $nbbytes; $i++)
            {
                if (ord($s[$i])<128)
                    $len++;
                else
                {
                    $len++;
                    $i++;
                }
            }
            return $len;
        }
        else
            return strlen($s);
    }
//************** Fin del código para ajustar texto *****************
//******************************************************************
} // FIN Class PDF
$pdf=new PDF('l','mm','letter');
$pdf->SetMargins(14,18);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(17,22,101);//85,107,47
$pdf->Setfont("Arial","b",8);

$pdf->cell(45, 10, 'FECHA: ' .date('d-m-y').'',.1,0,'C');

$pdf->Cell(201,10,'LISTADO DE TRABAJADORES POR RH', 1 ,1, 'C');

$pdf->Image('../../imagenes/trabajador.gif' ,5, 8, 20, 20,'GIF');

include "../../conexion.php";
$pdf->Ln();

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

$pdf->Ln();//salto de linea

$sql="SELECT * FROM trabajador WHERE traRh='$dato'";

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