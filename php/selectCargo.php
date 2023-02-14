<?php
/*if($registro_trabajador["traCargo"]){
    include("conexion.php");
}*/
//require "conexion.php";
$consulta="SELECT * FROM cargo ORDER BY cargo";
$ejecutar_consulta = $conexion->query($consulta);

while($registro= $ejecutar_consulta->fetch_assoc())
{
	$nombre_cargo = ($registro["cargo"]);
	echo "<option value='$nombre_cargo'";
	if($nombre_cargo==($registro_trabajador["traCargo"]))
	{
		echo " selected";
	}
	echo ">$nombre_cargo</option>";
}

?>