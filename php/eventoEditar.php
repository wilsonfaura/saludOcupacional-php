<?php
$id = $_POST['evento_hdn'];
$trabajador=$_POST['identificacion_hdn'];
$edad=$_POST['evEdad'];
$vinculo=$_POST['evVinculo'];
$tipo=$_POST['evTipo'];
$fecha=$_POST['evFecha'];
$hora=$_POST['evHora'];
$lugar=$_POST['evLugar'];
$actividad=$_POST['evActividad'];
$descripcion=$_POST['evDescripcion'];

include("conexion.php");
$consulta = "SELECT * FROM evento WHERE idEvento='$id'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;


if($num_registros==1)
{	
$consulta = "UPDATE evento SET evIdTrabajador='$trabajador',evEdad='$edad',evVinculo='$vinculo',evTipo='$tipo',evFecha='$fecha',evHora='$hora',evLugar='$lugar',evActividad='$actividad',evDescripcion='$descripcion' where idEvento ='$id'";

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta)
     $mensaje = "El evento numero <b>$id</b> fue editado correctamente  :)";  
  else 
     $mensaje = "El evento numero <b>$id</b> no pudo ser editado  :(";
}  

$conexion->close();
header("Location: ../eventoMenu.php?op=modificar&mensaje=$mensaje");

?>
