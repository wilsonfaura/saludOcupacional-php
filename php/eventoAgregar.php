<?php
$id = $_POST['identificacion_hdn'];
$date= $_POST['date_hdn'];
$edad = $_POST['traEdad'];
$vinculo = $_POST['evVinculo'];
$tipo = $_POST['evTipo'];
$fecha = $_POST['evFecha'];
$hora = $_POST['evHora'];
$lugar = $_POST['evLugar'];
$actividad = $_POST['evActividad'];
$descripcion = $_POST['evDescripcion'];

include("conexion.php");

$consulta = "SELECT * FROM  evento WHERE evIdTrabajador='$id' AND evFecha = '$fecha'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;

if($num_registros==0){
$consulta = "INSERT INTO evento SET  evIdTrabajador='$id',evDateActual='$date',evEdad='$edad',evVinculo='$vinculo',evTipo='$tipo',evFecha='$fecha',evHora='$hora',evLugar='$lugar',evActividad='$actividad',evDescripcion='$descripcion'";

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta)
{
     $mensaje = "El evento del trabajador con cedula <b>$id</b> fue registrado correctamente  :)";
}
  else

     $mensaje = "El evento del trabajador con cedula <b>$id</b> no se pudo registrar  :(";
}
  else 
 
     $mensaje = "El evento del trabajador con cedula <b>$id</b> ya se encuentra registrado  :/";


$conexion->close();
header("Location: ../eventoMenu.php?op=agregar&mensaje=$mensaje");
?>
