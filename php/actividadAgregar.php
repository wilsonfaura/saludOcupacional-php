<?php
$actividad = $_POST['actividad'];
$descripcion = $_POST['descripcion'];
$area = $_POST['area'];
$inicio=$_POST['inicio'];
$fin=$_POST['fin'];
$estado = $_POST['estado'];

include("conexion.php");
$consulta = "SELECT * FROM actividad WHERE actNombre='$actividad'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;


if($num_registros==0)
{	
$consulta = "INSERT INTO actividad SET actNombre='$actividad',actDescripcion='$descripcion',actArea='$area',actFechaIni='$inicio',actFechaFin='$fin',actEstado='$estado'";

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta)
     $mensaje = "la actividad <b>$actividad</b> fue registrado correctamente  :)";  
  else 
     $mensaje = "la actividad <b>actividad</b> no se pudo registrar  :(";
}
  else 
{  
     $mensaje = "la actividad <b>actividad</b> ya se encuentra registrado  :/";
}

$conexion->close();
header("Location: ../actividadMenu.php?op=agregar&mensaje=$mensaje");
?>
