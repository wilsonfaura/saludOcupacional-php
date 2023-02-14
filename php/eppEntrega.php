<?php
$idTrabajador = $_POST['idTrabajador_slc'];
$eppNombre = $_POST['eppNom_slc'];
$fecha = $_POST['fecha'];

include("conexion.php");
$consulta = "SELECT * FROM entrega WHERE entTrabajador='$idTrabajador' AND entEpp='$eppNombre' AND entFecha='$fecha'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;

if($num_registros==0)
{
	
	
$consulta = "INSERT INTO entrega SET  
entTrabajador='$idTrabajador', entEpp='$eppNombre', entFecha='$fecha'";

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta)
     $mensaje = "La entrega del elemento <b>$eppNombre</b> fue registrado correctamente  :)";  
  else 
     $mensaje = "La entrega del elemento <b>$eppNombre</b> no se pudo registrar  :(";
}
  else 
{  
     $mensaje = "La entrega del elemento <b>$eppNombre</b> ya se encuentra registrado  :/";
}

$conexion->close();
header("Location: ../eppMenu.php?op=entrega&mensaje=$mensaje");
?>
