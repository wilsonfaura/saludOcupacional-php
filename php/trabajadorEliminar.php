<?php
$identificacion = $_POST["idTrabajador_slc"];
include("conexion.php");
$consulta = "DELETE FROM trabajador WHERE identificacion = '$identificacion'";
$ejecutar_consulta = $conexion ->query($consulta);

if ($ejecutar_consulta)	
    $mensaje = "El trabajador con numero de identificacion <b>$identificacion</b> ha sido eliminado correctamente :(";
else 
    $mensaje = "No se pudo eliminar el trabajador con numero de identificacion <b>$identificacion</b> :/";
	
header("Location: ../trabajadorMenu.php?op=eliminar&mensaje=$mensaje");
?>