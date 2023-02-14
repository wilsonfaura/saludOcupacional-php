<br /><br />
<?php
// se crea un array con el abecedario
$letra = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z');

//con un for en pantalla se muestra todo el abecedario, se contruye un enlace dinamico por cada letra de abecedario
for($i=0; $i<count($letra);$i++)
{
	if($letra[$i]=="Z")
	{
		echo"<a class='cambio' href='?op=consultas&consulta_slc=inicial&letra=".$letra[$i]."'>".$letra[$i]."</a>";
	}
	else
	{
		echo"<a class='cambio' href='?op=consultas&consulta_slc=inicial&letra=".$letra[$i]."'>".$letra[$i]."</a>\n-\n";
	}
}

if($_GET["letra"]!=null)
{
	$inicial = $_GET["letra"];
	$consulta = "SELECT * FROM trabajador WHERE traNombre LIKE '$inicial%';";
	include("trabajadorTabla-resutados.php");
}
?>
<br />
<a href="pdf/ReportesPdf/trabajadorRepInicial.php?dato=<?php echo $inicial?>" title="Generar Pdf">Generar Pdf</a>