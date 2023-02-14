<?php 
$id = $_POST['trabajador'];
$placa = $_POST['placa_hdn'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$targeta = $_POST['targeta'];
$kilometraje = $_POST['kilometraje'];
$licencia = $_POST['licencia'];
$soat = $_POST['soat'];
$revision = $_POST['revision'];

include("conexion.php");
$consulta = "SELECT * FROM trabajador WHERE identificacion='$id'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if($num_regs==1)
{	
	$consulta = "UPDATE vehiculo SET vehIdTra='$id',vehPlaca='$placa',vehTipo='$tipo',vehMarca='$marca',vehModelo='$modelo',vehTarPro='$targeta',vehKm='$kilometraje',vehLicencia='$licencia',vehSoat='$soat',vehTecno='$revision' WHERE vehPlaca = '$placa'";	

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

    if($ejecutar_consulta)
	{
       $mensaje = "Se han hecho los cambios en los datos del vehiculo con placa <b>$placa</b> :)";
	}
}
else 
{
$mensaje = "No se pudieron realizar los cambios en los datos del vehiculo con placa <b>$placa</b> :(";
}
header("Location:../vehiculosMenu.php?op=cambios&mensaje=$mensaje");
?>