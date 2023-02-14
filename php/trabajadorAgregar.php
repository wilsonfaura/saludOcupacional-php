<?php
$id = $_POST['identificacion'];
$nombre = $_POST['traNombres'];
$apellido = $_POST['traApellidos'];
$area=$_POST['traArea'];
$cargo=$_POST['cargo_slc'];
$fechaIngreso = $_POST['traIngreso'];
$sexo = $_POST['traSexo'];
$rh = $_POST['traRh'];
$dir=$_POST['traDir'];
$tel=$_POST['traTel'];
$email = $_POST['traEmail'];
$nombreCont = $_POST['traContacNombres'];
$apellidoCont = $_POST['traContacApellidos'];
$telefonoCont = $_POST['traContacTelefono'];
$imagenGenerica = ($sexo=="M")?"amigo.png":"amiga.png";

include("conexion.php");
$consulta = "SELECT * FROM trabajador WHERE identificacion='$id'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;


if($num_registros==0)
{
	include("funciones.php");
	$tipo = $_FILES["foto_fls"]["type"];
	$archivo = $_FILES["foto_fls"]["tmp_name"];
	$se_subio_imagen = subir_imagen($tipo,$archivo,$id);	
	$imagen = empty($archivo)?$imagenGenerica:$se_subio_imagen;
	
$consulta = "INSERT INTO trabajador SET  identificacion='$id',traNombre='$nombre',traApellido='$apellido',traArea='$area',traCargo='$cargo',traIngreso='$fechaIngreso',traSexo='$sexo',traRh='$rh',traDir='$dir',traTel='$tel',traEmail='$email',traContacNombre='$nombreCont',traContacApellido='$apellidoCont',traContacTelefono='$telefonoCont',traImagen='$imagen'";

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

  if ($ejecutar_consulta)
     $mensaje = "El  trabajador  <b>$nombre</b> fue registrado correctamente  :)";  
  else 
     $mensaje = "El trabajador <b>$nombre</b> no se pudo registrar  :(";
}
  else 
{  
     $mensaje = "El trabajor <b>$nombre</b> ya se encuentra registrado  :/";
}

$conexion->close();
header("Location: ../trabajadorMenu.php?op=agregar&mensaje=$mensaje");
?>
