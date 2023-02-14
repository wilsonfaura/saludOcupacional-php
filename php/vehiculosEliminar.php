<?php
$placa = $_POST["idPlaca_slc"];
include("conexion.php");
$consulta = "DELETE FROM vehiculo WHERE vehPlaca = '$placa'";
$ejecutar_consulta = $conexion ->query($consulta);

if ($ejecutar_consulta)	
    $mensaje = "El vehiculo con placa <b>$placa</b> ha sido eliminado correctamente :(";
else 
    $mensaje = "No se pudo eliminar el vehiculo con placa <b>$placa</b> :/";
	
header("Location: ../vehiculosMenu.php?op=eliminar&mensaje=$mensaje");
?>