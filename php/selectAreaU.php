<?php
//require "conexion.php";
$consulta="SELECT * FROM area ORDER BY area";
$ejecutar_consulta = $conexion->query($consulta);

while($registro= $ejecutar_consulta->fetch_assoc())
{
	$nombre_area = utf8_encode($registro["area"]);
	echo "<option value='$nombre_area'";
	if($nombre_area==utf8_decode($registro_usuario["usuArea"]))
	{
		echo " selected";
	}
	echo ">$nombre_area</option>";
}

?>