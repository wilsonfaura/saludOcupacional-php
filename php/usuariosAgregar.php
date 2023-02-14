<?php
$id = $_POST['identificacion'];
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$area = $_POST['area'];
$cargo=$_POST['cargo_slc'];
$contraseña = $_POST['contraseña'];

include("conexion.php");

$consulta = "SELECT * FROM usuario WHERE usuIdentificacion='$id'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;

if($num_registros==0){
		
$consulta = "INSERT INTO usuario SET usuIdentificacion='$id',usuNombre='$nombre',usuApellido='$apellido',usuArea='$area',usuCargo='$cargo',usuPassword='$contraseña'";

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta)
{
     $mensaje = "El  usuario  <b>$nombre</b> fue registrado correctamente  :)";
}
  else

     $mensaje = "El usuario <b>$nombre</b> no se pudo registrar  :(";
}
  else 
 
     $mensaje = "El usuario <b>$nombre</b> ya se encuentra registrado  :/";


$conexion->close();
header("Location: ../usuariosMenu.php?op=agregar&mensaje=$mensaje");
?>
