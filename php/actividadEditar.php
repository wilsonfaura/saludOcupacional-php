<?php
$id = $_POST['idAct_hdn'];
$actividad=$_POST['actividad'];
$descripcion=$_POST['descripcion'];
$area=$_POST['area'];
$inicio=$_POST['inicio'];
$fin=$_POST['fin'];
$estado=$_POST['estado'];

include("conexion.php");
$consulta = "SELECT * FROM actividad WHERE idActividad='$id'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;


if($num_registros==1)
{	
$consulta = "UPDATE actividad SET actNombre='$actividad',actDescripcion='$descripcion',actArea='$area',actFechaIni='$inicio',actFechaFin='$fin',actEstado='$estado' where idActividad ='$id'";

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta)
     $mensaje = "la actividad <b>$actividad</b> fue editada correctamente  :)";  
  else 
     $mensaje = "la actividad <b>$actividad</b> no pudo ser editada  :(";
}  

$conexion->close();
header("Location: ../actividadMenu.php?op=modificar&mensaje=$mensaje");

?>
