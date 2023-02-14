
<?php
require "conexion.php";
extract ($_REQUEST);

$objConexion = Conectarse();
$temaCap = $_REQUEST['capTema'];
$sql="delete from capacitacion where capTema = '$temaCap'";

$resultado = $objConexion->query($sql);

if ($resultado)
   $mensaje = "La capacitación de:  <b>$temaCap</b> ha sido eliminada correctamente :("; 
else
    $mensaje = "No se pudo eliminar la capacitación de <b>$temaCap</b> :/"; 
	
	header("Location: ../capacitacionMenu.php?op=modificar&mensaje=$mensaje");
?>
