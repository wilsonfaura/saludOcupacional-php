
<?php
require "conexion.php";
extract ($_REQUEST);

$objConexion = Conectarse();
$idEvento = $_REQUEST['idEvento'];
$sql="delete from evento where idEvento = '$idEvento'";

$resultado = $objConexion->query($sql);

if ($resultado)
   $mensaje = "El evento numero:  <b>$idEvento</b> ha sido eliminado correctamente :("; 
else
    $mensaje = "No se pudo eliminar el evento numero <b>$idEvento</b> :/"; 
	
	header("Location: ../eventoMenu.php?op=modificar&mensaje=$mensaje");
?>
