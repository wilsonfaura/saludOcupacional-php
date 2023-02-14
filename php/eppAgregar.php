<?php
$referencia = $_POST['referencia'];
$nombre = $_POST['nombre'];
$talla = $_POST['talla'];
$proveedor=$_POST['proveedor'];
$idProveedor=$_POST['codigo'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

include("conexion.php");
$consulta = "SELECT * FROM epp WHERE eppReferencia='$referencia'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;


if($num_registros==0)
{
	
	
$consulta = "INSERT INTO epp SET  
eppReferencia='$referencia', eppNombre='$nombre', eppTalla='$talla', eppProveedor='$proveedor', eppIdProveedor='$idProveedor', eppTelProveedor='$telefono', eppEmailProveedor='$email'";

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta)
     $mensaje = "El  elemento de protección  <b>$nombre</b> fue registrado correctamente  :)";  
  else 
     $mensaje = "El elemento de protección <b>$nombre</b> no se pudo registrar  :(";
}
  else 
{  
     $mensaje = "El elemento de protección <b>$referencia</b> ya se encuentra registrado  :/";
}

$conexion->close();
header("Location: ../eppMenu.php?op=agregar&mensaje=$mensaje");
?>
