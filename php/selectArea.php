<?php
if($registro_trabajador["traArea"]){
    //include("conexion.php");
}
//require "conexion.php";
$consulta="SELECT * FROM area ORDER BY area";
$ejecutar_consulta = $conexion->query($consulta);

while($registro= $ejecutar_consulta->fetch_assoc())
{
	$nombre_area = utf8_encode($registro["area"]);
	echo "<option value='$nombre_area'";
	if($nombre_area==($registro_trabajador["traArea"]))
	{
		echo " selected";
	}
	echo ">$nombre_area</option>";
}

?>