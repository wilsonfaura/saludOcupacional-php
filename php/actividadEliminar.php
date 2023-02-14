
<?php
require "conexion.php";
extract ($_REQUEST);

$objConexion = Conectarse();
$idActividad = $_REQUEST['idActividad'];
$sql="delete from actividad where idActividad = '$idActividad'";

$resultado = $objConexion->query($sql);

if ($resultado)
   $mensaje = "La actividad numero <b>$idActividad</b> ha sido eliminada correctamente :("; 
else
    $mensaje = "No se pudo eliminar la actividad numero <b>$idActividad</b> :/"; 
	
	header("Location: ../actividadMenu.php?op=modificar&mensaje=$mensaje");
?>
