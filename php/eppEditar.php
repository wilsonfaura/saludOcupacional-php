<?php 
$referencia = $_POST['referencia_hdn'];
$nombre = $_POST['nombre'];
$talla = $_POST['talla'];
$proveedor=$_POST['proveedor'];
$idProveedor=$_POST['codigo'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

include("conexion.php");
$consulta = "SELECT * FROM epp WHERE eppReferencia='$referencia'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if($num_regs==1)
{
	$consulta = "UPDATE epp SET eppReferencia='$referencia', eppNombre='$nombre', eppTalla='$talla', eppProveedor='$proveedor', eppIdProveedor='$idProveedor', eppTelProveedor='$telefono', eppEmailProveedor='$email' WHERE eppReferencia = '$referencia'";	

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

    if($ejecutar_consulta)
	{
       $mensaje = "Se han hecho los cambios en los datos del Epp <b>$nombre</b> :)";
	}
}
else 
{
$mensaje = "No se pudieron realizar los cambios en los datos del Epp <b>$nombre</b> :(";
}
header("Location:../eppMenu.php?op=cambios&mensaje=$mensaje");
?>