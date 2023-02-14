<?php
$id = $_POST['idCap_hdn'];
$instructor=$_POST['instructor'];
$tema=$_POST['tema'];
$descripcion=$_POST['descripcion'];
$area=$_POST['areas'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$estado=$_POST['estado'];

include("conexion.php");
$consulta = "SELECT * FROM capacitacion WHERE idCapacitacion='$id'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;


if($num_registros==1)
{	
$consulta = "UPDATE capacitacion SET capInstructor='$instructor',capTema='$tema',capdescripcion='$descripcion',capArea='$area',capFecha='$fecha',capHora='$hora',capEstado='$estado' where idCapacitacion ='$id'";

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta)
     $mensaje = "la capacitacion de <b>$tema</b> fue editada correctamente  :)";  
  else 
     $mensaje = "la capacitacion de <b>tema</b> pudo ser editada  :(";
}  

$conexion->close();
header("Location: ../capacitacionMenu.php?op=modificar&mensaje=$mensaje");

?>
