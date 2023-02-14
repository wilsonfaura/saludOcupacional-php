<?php
$nom = $_POST["eppNom_slc"];
include("conexion.php");
$consulta = "DELETE FROM epp WHERE eppNombre = '$nom'";
$ejecutar_consulta = $conexion ->query($consulta);

if ($ejecutar_consulta)	
    $mensaje = "El EPP <b>$nom</b> ha sido eliminado correctamente :(";
else 
    $mensaje = "No se pudo eliminar el  EPP <b>$nom</b> :/";
	
header("Location: ../eppMenu.php?op=eliminar&mensaje=$mensaje");
?>