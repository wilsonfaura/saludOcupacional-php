<?php 
$id = $_POST['identificacion_hdn'];
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$cargo=$_POST['cargo_slc'];
$area = $_POST['area'];
$contraseña = $_POST['contraseña'];


include("conexion.php");
$consulta = "SELECT * FROM usuario WHERE usuIdentificacion='$id'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if($num_regs==1)
{	
	$consulta = "UPDATE usuario SET usuIdentificacion='$id',usuNombre='$nombre',usuApellido='$apellido',usuCargo='$cargo',usuArea='$area',usuPassword='$contraseña' WHERE usuIdentificacion = '$id'";	

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

    if($ejecutar_consulta)
	{
       $mensaje = "Se han realizado los cambios en los datos del Usuario con numero de documento <b>$id</b> :)";
	}
}
else 
{
$mensaje = "No se pudieron realizar los cambios en los datos del Usuario con numero de documento <b>$id</b> :(";
}
header("Location:../usuariosMenu.php?op=cambios&mensaje=$mensaje");
?>