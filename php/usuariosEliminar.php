<?php
$identificacion = $_POST["idUsuario_slc"];
include("conexion.php");
$consulta = "DELETE FROM usuario WHERE usuIdentificacion = '$identificacion'";
$ejecutar_consulta = $conexion ->query($consulta);

if ($ejecutar_consulta)	
    $mensaje = "El usuario con numero de identificacion <b>$identificacion</b> ha sido eliminado correctamente :(";
else 
    $mensaje = "No se pudo eliminar el usuario con numero de identificacion <b>$identificacion</b> :/";
	
header("Location: ../usuariosMenu.php?op=eliminar&mensaje=$mensaje");
?>