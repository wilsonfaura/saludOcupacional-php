<?php 
$id = $_POST['identificacion_hdn'];
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

include("conexion.php");
$consulta = "SELECT * FROM trabajador WHERE identificacion='$id'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if($num_regs==1)
{
	if(empty($_FILES["foto_fls"]["tmp_name"]))
	{
		$imagen = $_POST["foto_hdn"];
	}
	else
	{
	include("funciones.php");
	$tipo = $_FILES["foto_fls"]["type"];
	$archivo = $_FILES["foto_fls"]["tmp_name"];
	$imagen = subir_imagen($tipo,$archivo,$id);
	}
	$consulta = "UPDATE trabajador SET identificacion='$id',traNombre='$nombre',traApellido='$apellido',traArea='$area',traCargo='$cargo',traIngreso='$fechaIngreso',traSexo='$sexo',traRh='$rh',traDir='$dir',traTel='$tel',traEmail='$email',traContacNombre='$nombreCont',traContacApellido='$apellidoCont',traImagen='$imagen',traContacTelefono='$telefonoCont' WHERE identificacion = '$id'";	

$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

    if($ejecutar_consulta)
	{
       $mensaje = "Se han hecho los cambios en los datos del Trabajador identificado con numero de documento <b>$id</b> :)".$imagen;
	}
}
else 
{
$mensaje = "No se pudieron realizar los cambios en los datos del trabajador con numero de documento <b>$id</b> :(".$imagen;
}
$conexion->close();
header("Location:../trabajadorMenu.php?op=cambios&mensaje=$mensaje");
?>