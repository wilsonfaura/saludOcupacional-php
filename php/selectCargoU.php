<?php
//require "conexion.php";
$consulta="SELECT * FROM cargo ORDER BY cargo";
$ejecutar_consulta = $conexion->query($consulta);

while($registro= $ejecutar_consulta->fetch_assoc())
{
	$nombre_cargo = utf8_encode($registro["cargo"]);
	echo "<option value='$nombre_cargo'";
	if($nombre_cargo==utf8_decode($registro_usuario["usuCargo"]))
	{
		echo " selected";
	}
	echo ">$nombre_cargo</option>";
}

?>