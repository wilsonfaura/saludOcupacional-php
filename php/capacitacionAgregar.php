<?php
$instructor=$_POST['instructor'];
$tema=$_POST['tema'];
$descripcion=$_POST['descripcion'];
$area=$_POST['areas'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$estado=$_POST['estado'];

include("conexion.php");
$consulta = "SELECT * FROM capacitacion WHERE capDescripcion='$descripcion'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;


if($num_registros==0)
{	
$consulta = "INSERT INTO capacitacion SET capInstructor='$instructor',capTema='$tema',capdescripcion='$descripcion',capArea='$area',capFecha='$fecha',capHora='$hora',capEstado='$estado'";

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta)
     $mensaje = "la capacitacion <b>$tema</b> fue registrado correctamente  :)";  
  else 
     $mensaje = "la capacitacion <b>tema</b> no se pudo registrar  :(";
}
  else 
{  
     $mensaje = "la capacitacion <b>tema</b> ya se encuentra registrado  :/";
}

$conexion->close();
header("Location: ../capacitacionMenu.php?op=agregar&mensaje=$mensaje");
?>
